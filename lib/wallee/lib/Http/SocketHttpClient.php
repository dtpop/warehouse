<?php
/**
 * wallee SDK
 *
 * This library allows to interact with the wallee payment service.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */


namespace Wallee\Sdk\Http;

use Wallee\Sdk\Http\ConnectionException;
use Wallee\Sdk\ApiClient;

/**
 * This class sends API calls via a socket.
 *
 * @category Class
 * @package  Wallee\Sdk\Http
 * @author   customweb GmbH
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
final class SocketHttpClient implements IHttpClient {

	/**
	 * The start time of a request. This is used to enforce the connection timeout.
	 *
	 * @var integer
	 */
	private $startTime;

	public function isSupported() {
		return function_exists('stream_socket_client');
	}

	public function send(ApiClient $apiClient, HttpRequest $request) {
		$this->resetStartTime();
		$socket = $this->startStreamSocket($apiClient, $request);
		$responseMessage = $this->readFromSocket($apiClient, $request, $socket);
		fclose($socket);

		// debug HTTP response
		if ($apiClient->isDebuggingEnabled()) {
			error_log("[DEBUG] HTTP Response ~BEGIN~".PHP_EOL.$responseMessage.PHP_EOL."~END~".PHP_EOL, 3, $apiClient->getDebugFile());
		}

		if (empty($responseMessage)) {
			throw new ConnectionException($request->getUrl(), $request->getLogToken(),
					'The server responded with an empty response (no HTTP header and no HTTP body).');
		}

		return new HttpResponse($responseMessage);
	}

	/**
	 * This method reads from the given socket. Depending on the given header the read process may be halted after
	 * reading the last chunk. This method is required, because some servers do not close the connection in chunked
	 * transfer. Hence the timeout of the connection must be reached, before the connection is closed. By tracking the
	 * chunks, the connection can be closed earlier after the last chunk.
	 *
	 * @param ApiClient $apiClient the API client instance
	 * @param HttpRequest $request the HTTP request
	 * @param resource $socket the socket
	 * @throws ConnectionException
	 * @return string
	 */
	private function readFromSocket(ApiClient $apiClient, HttpRequest $request, $socket) {
		$inBody = false;
		$responseMessage = '';
		$chunked = false;
		$chunkLength = false;
		$maxTime = $this->getStartTime() + $apiClient->getConnectionTimeout();
		$contentLength = -1;
		$endReached = false;
		while ($maxTime > time() && !feof($socket) && !$endReached) {
			if ($inBody === false) {
				$line = $this->readLineFromSocket($apiClient, $request, $socket, 2048);
				if ($line == "\r\n") {
					$inBody = true;
				} else {
					$parts = explode(':', $line, 2);
					if (count($parts) == 2) {
						$headerName = trim(strtolower($parts[0]));
						$headerValue = trim(strtolower($parts[1]));
						if ($headerName === 'transfer-encoding' && $headerValue == 'chunked') {
							$chunked = true;
						}
						if ($headerName === 'content-length') {
							$contentLength = (int)$headerValue;
						}
					}
				}
				$responseMessage .= $line;
			} else {
				// If the content of the response is empty, there is nothing to be read.
				if ($contentLength == 0) {
                    $endReached = true;
                    break;
                }
				// Check if we can read without chunks
				if (!$chunked) {
					$readBytes = 4096;
					if ($contentLength > 0) {
						$readBytes = $contentLength;
					}
					$tmp = $this->readContentFromSocket($apiClient, $request, $socket, $readBytes);
					$responseMessage .= $tmp;
					if (strlen($tmp) == $readBytes) {
						$endReached = true;
						break;
					}
				} else {
					// Since we have not set any content length we assume that we need to read in chunks.

					// We have to read the next line to get the chunk length.
					if ($chunkLength === false) {
						$line = trim(fgets($socket, 128));
						$chunkLength = hexdec($line);
					} else if ($chunkLength > 0) {
						// We have to read the chunk, when it is greater than zero. The last one is always 0.

						$responseMessage .= $this->readContentFromSocket($apiClient, $request, $socket, $chunkLength);

						// We skip the next line break.
						fseek($socket, 2, SEEK_CUR);
						$chunkLength = false;
					} else {
						// The chunk length must be zero. Hence we are finished and we can stop.

						$endReached = true;
						break;
					}
				}
			}
		}

		if (feof($socket) || $endReached) {
			return $responseMessage;
		} else {
			throw new ConnectionException(null, $request->getLogToken(),
					'The remote server did not respond within ' . $apiClient->getConnectionTimeout() . ' seconds.');
		}
	}

	/**
	 * This method reads in blocking fashion from the socket.
	 *
	 * We need this method because neither fread nor stream_get_contents do respect timeouts.
	 *
	 * @param ApiClient $apiClient the API client instance
	 * @param HttpRequest $request the HTTP request
	 * @param resource $socket the socket from which should be read
	 * @param int $maxNumberOfBytes the number of bytes to read
	 * @throws ConnectionException
	 * @return string
	 */
	private function readContentFromSocket(ApiClient $apiClient, HttpRequest $request, $socket, $maxNumberOfBytes) {
		stream_set_blocking($socket, false);
		$maxTime = $this->getStartTime() + $apiClient->getConnectionTimeout();
		$numberOfBytesRead = 0;
		$result = '';
		while ($maxTime >= time() && $numberOfBytesRead < $maxNumberOfBytes && !feof($socket)) {
			$nextChunkSize = min(128, $maxNumberOfBytes - $numberOfBytesRead);
			$tmp = stream_get_contents($socket, $nextChunkSize);
			if ($tmp !== false && strlen($tmp) > 0) {
				$result .= $tmp;
				$numberOfBytesRead += strlen($tmp);
			} else {
				// Wait 100 milliseconds
				usleep(100 * 1000);
			}
		}
		stream_set_blocking($socket, true);

		if (feof($socket) || $numberOfBytesRead >= $maxNumberOfBytes) {
			return $result;
		} else {
			throw new ConnectionException(null, $request->getLogToken(),
					'The remote server did not respond within ' . $apiClient->getConnectionTimeout() . ' seconds.');
		}
	}

	/**
	 * This method reads a single line in blocking fashion from the socket. The method does respect the timeout
	 * configured.
	 *
	 * @param ApiClient $apiClient the API client instance
	 * @param HttpRequest $request the HTTP request
	 * @param resource $socket the socket from which should be read
	 * @param int $maxNumberOfBytes the number of bytes to read
	 * @throws ConnectionException
	 * @return string
	 */
	private function readLineFromSocket(ApiClient $apiClient, HttpRequest $request, $socket, $maxNumberOfBytes) {
		stream_set_blocking($socket, false);
		$maxTime = $this->getStartTime() + $apiClient->getConnectionTimeout();
		$result = false;
		while ($maxTime >= time() && $result === false && !feof($socket)) {
			$tmp = fgets($socket, $maxNumberOfBytes);
			if ($tmp !== false && strlen($tmp) > 0) {
				$result = $tmp;
			} else {
				// Wait 100 milliseconds
				usleep(100 * 1000);
			}
		}
		stream_set_blocking($socket, true);

		if ($result !== false) {
			return $result;
		} else {
			throw new ConnectionException(null, $request->getLogToken(),
					'The remote server did not respond within ' . $apiClient->getConnectionTimeout() . ' seconds.');
		}
	}

	/**
	 * Creates a socket and sends the request to the remote host.
	 * As result a stream socket is returned. Which can be used to read the response.
	 *
	 * @param ApiClient $apiClient the API client instance
	 * @param HttpRequest $request the HTTP request
	 * @throws ConnectionException
	 * @return resource
	 */
	private function startStreamSocket(ApiClient $apiClient, HttpRequest $request) {
		$this->configureRequest($request);

		$socket = $this->createSocketStream($apiClient, $request);
		$message = $request->toString();

		if ($apiClient->isDebuggingEnabled()) {
			error_log("[DEBUG] HTTP Request  ~BEGIN~".PHP_EOL.$message.PHP_EOL."~END~".PHP_EOL, 3, $apiClient->getDebugFile());
		}

		$result = fwrite($socket, $message);
		if ($result == false) {
			throw new ConnectionException($request->getUrl(), $request->getLogToken(), 'Could not send the message to the server.');
		}
		return $socket;
	}

	/**
	 * This method modifies the request so it can be sent.
	 * Sub classes may
	 * override this method to apply further modifications.
	 *
	 * @param HttpRequest $request the HTTP request
	 */
	private function configureRequest(HttpRequest $request){
		$proxyUrl = $this->readEnvironmentVariable(self::ENVIRONMENT_VARIABLE_PROXY_URL);
		if ($proxyUrl !== null) {
			$proxyUser = parse_url($proxyUrl, PHP_URL_USER);
			$proxyPass = parse_url($proxyUrl, PHP_URL_PASS);
			if ($proxyUser !== NULL) {
				$auth = $proxyUser;
				if ($proxyPass !== NULL) {
					$auth .= ':' . $proxyPass;
				}
				$auth = base64_encode($auth);
				$request->addHeader('proxy-authorization', 'Basic ' . $auth);
			}
		}
	}

	/**
	 * This method creates a stream socket to the server.
	 *
	 * @param ApiClient $apiClient the API client instance
	 * @param HttpRequest $request the HTTP request
	 * @throws ConnectionException
	 * @return resource
	 */
	private function createSocketStream(ApiClient $apiClient, HttpRequest $request) {
		if ($request->isSecureConnection()) {
			if (!extension_loaded('openssl')) {
				throw new \Exception("You have to enable OpenSSL.");
			}
		}

		$proxyUrl = $this->readEnvironmentVariable(self::ENVIRONMENT_VARIABLE_PROXY_URL);
		if ($proxyUrl !== null) {
			$host = parse_url($proxyUrl, PHP_URL_HOST);
			$port = parse_url($proxyUrl, PHP_URL_PORT);
			if(empty($port)) {
				throw new ConnectionException($request->getUrl(), $request->getLogToken(), "The Proxy URL must contain a port number.");
			}
			
		} else {
			$host = ($request->isSecureConnection() ? $this->getSslProtocol() . '://' : '') . $request->getHost();
			$port = $request->getPort();
			if(empty($port)) {
				$port = $request->isSecureConnection() ? 443 : 80;
			}	
		}			
		$socket = $host . ':' . $port;

		$filePointer = @stream_socket_client($socket, $errno, $errstr, $apiClient->getConnectionTimeout(), STREAM_CLIENT_CONNECT,
				$this->createStreamContext($apiClient, $request));

		if ($filePointer === false) {
			throw new ConnectionException($request->getUrl(), $request->getLogToken(), $errstr);
		}

		if (!(get_resource_type($filePointer) == 'stream')) {
			$errorMessage = 'Could not connect to the server. The returned socket was not a stream.';
			throw new ConnectionException($request->getUrl(), $request->getLogToken(), $errorMessage);
		}

		return $filePointer;
	}

	/**
	 * Returns the protocol to use in case of an SSL connection.
	 *
	 * @return string
	 */
	private function getSslProtocol(){
		$version = $this->readEnvironmentVariable(self::ENVIRONMENT_VARIABLE_SSL_VERSION);
		$rs = null;
		switch ($version) {
			case self::SSL_VERSION_SSLV2:
				$rs = 'sslv2';
				break;
			case self::SSL_VERSION_SSLV3:
				$rs = 'sslv3';
				break;
			case self::SSL_VERSION_TLSV1:
				$rs = 'tls';
				break;
			case self::SSL_VERSION_TLSV11:
				$rs = 'tlsv1.1';
				break;
			case self::SSL_VERSION_TLSV12:
				$rs = 'tlsv1.2';
				break;
			default:
				$rs = 'ssl';
		}
		if ($rs === null) {
			throw new \Exception('Invalid state.');
		}

		$possibleTransportProtocols = stream_get_transports();
		if (!in_array($rs, $possibleTransportProtocols)) {
			throw new \Exception("The enforced SSL protocol is '" . $rs . "'. But this protocol is not supported by the web server. Supported stream protocols by the web server are " . implode(', ', $possibleTransportProtocols) . ".");
		}

		return $rs;
	}

	/**
	 * Creates and returns a new stream context.
	 *
	 * @param ApiClient $apiClient the API client instance
	 * @param HttpRequest $request the HTTP request
	 * @return resource
	 */
	private function createStreamContext(ApiClient $apiClient, HttpRequest $request) {
		return stream_context_create($this->buildStreamContextOptions($apiClient, $request));
	}

	/**
	 * Generates an option array for creating the stream context.
	 *
	 * @param ApiClient $apiClient the API client instance
	 * @param HttpRequest $request the HTTP request
	 * @return array
	 */
	private function buildStreamContextOptions(ApiClient $apiClient, HttpRequest $request) {
		$options = [
			'http' => [],
			'ssl' => [],
		];
		if ($request->isSecureConnection()) {
			$options['ssl']['verify_host'] = true;
			$options['ssl']['allow_self_signed'] = false;
			$options['ssl']['verify_peer'] = false;

			if ($apiClient->isCertificateAuthorityCheckEnabled()) {
				$options['ssl']['verify_peer'] = true;
				$options['ssl']['cafile'] = $apiClient->getCertificateAuthority();
			}
		}
		$ipVersion = $this->readEnvironmentVariable(self::ENVIRONMENT_VARIABLE_IP_ADDRESS_VERSION);
		if (!is_null($ipVersion)) {
			if ($ipVersion == self::IP_ADDRESS_VERSION_V4) {
				$options['socket'] = [ 'bindto' => '0.0.0.0:0' ];
			} elseif ($ipVersion == self::IP_ADDRESS_VERSION_V6) {
				$options['socket'] = [ 'bindto' => '[::]:0' ];
			}
		}
		return $options;
	}

	/**
	 * Resets the start time to the currency time.
	 */
	private function resetStartTime() {
		$this->startTime = time();
	}

	/**
	 * Returns the start time.
	 *
	 * @return integer
	 */
	private function getStartTime() {
		return $this->startTime;
	}

	/**
	 * Reads the environment variable indicated by the name.
	 * Returns null
	 * when the variable is not defined.
	 *
	 * @param string $name
	 * @return string
	 */
	private function readEnvironmentVariable($name){
		if (isset($_SERVER[$name])) {
			return $_SERVER[$name];
		} else if (isset($_SERVER[strtolower($name)])) {
			return $_SERVER[strtolower($name)];
		} else {
			return null;
		}
	}

}
