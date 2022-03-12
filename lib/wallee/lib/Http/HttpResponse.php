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

/**
 * This class represents an HTTP response.
 *
 * @category Class
 * @package  Wallee\Sdk\Http
 * @author   customweb GmbH
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
final class HttpResponse {

	/**
	 * The status code of the response.
	 *
	 * @var integer
	 */
	private $statusCode;

	/**
	 * The a key/value map of the headers.
	 *
	 * @var array
	 */
	private $headers = [];

	 /**
	 * The HTTP body.
	 *
	 * @var string
	 */
	private $body;

	/**
	 * Constructor.
	 *
	 * @param integer $statusCode the status code of the response
	 * @param array $headers a key/value map of the headers
	 * @param string $body the HTTP body
	 */
	public function __construct($statusCode, $headers = null, $body = null) {
		if (is_string($statusCode) && $headers == null && $body == null) {
			$this->parseRawMessage($statusCode);
		} else {
			$this->statusCode = $statusCode;
			$this->headers = is_string($headers) ? $this->parseHttpHeaders($headers) : $headers;
			$this->body = $body;
		}
	}

	/**
	 * Returns the status code of the response.
	 *
	 * @return integer
	 */
	public function getStatusCode() {
		return $this->statusCode;
	}

	/**
	 * Returns a key/value map of the headers.
	 *
	 * @return array
	 */
	public function getHeaders() {
		return $this->headers;
	}

	/**
	 * Returns the HTTP body.
	 *
	 * @return string
	 */
	public function getBody() {
		return $this->body;
	}

	/**
	* Returns an array of HTTP response headers.
	*
	* @param string $rawHeaders A string of raw HTTP response headers
	* @return string[]
	*/
	private function parseHttpHeaders($rawHeaders) {
		// ref/credit: http://php.net/manual/en/function.http-parse-headers.php#112986
		$headers = [];
		$key = '';

		foreach (explode("\n", $rawHeaders) as $h) {
			$h = explode(':', $h, 2);

			if (isset($h[1])) {
				if (!isset($headers[$h[0]])) {
					$headers[$h[0]] = trim($h[1]);
				} elseif (is_array($headers[$h[0]])) {
					$headers[$h[0]] = array_merge($headers[$h[0]], array(trim($h[1])));
				} else {
					$headers[$h[0]] = array_merge([$headers[$h[0]]], [trim($h[1])]);
				}

				$key = $h[0];
			} else {
				if (substr($h[0], 0, 1) === "\t") {
					$headers[$key] .= "\r\n\t".trim($h[0]);
				} elseif (!$key) {
					$headers[0] = trim($h[0]);
				}
				trim($h[0]);
			}
		}

		return $headers;
	}

	/**
	 * Parses the given HTTP message.
	 *
	 * @param string $message
	 * @return void
	 */
	private function parseRawMessage($message) {
		$positionStartBody = strpos($message, "\r\n\r\n");

		$startPositionOffset = 4;
		if ($positionStartBody === false) {
			$positionStartBody = strpos($message, "\n\n");
			$startPositionOffset = 2;
			if ($positionStartBody === false) {
				throw new \Exception("Invalid HTTP message provided. It does not contain a header part.");
			}
		}

		$headerString = str_replace("\r\n", "\n", trim(substr($message, 0, $positionStartBody), "\r\n"));
		$content = substr($message, $positionStartBody + $startPositionOffset);

		$this->headers = $this->parseHttpHeaders($headerString);
		$statusLine = current(explode("\n", $headerString));
		$this->parseStatusLine($statusLine);
		$this->body = $content;
	}

	/**
	 * Parses the given status line.
	 *
	 * @param string $line the request's status line
	 */
	private function parseStatusLine($line) {
		if (empty($line)) {
			throw new \Exception("Empty status line provided.");
		}
		preg_match('/HTTP\/([^[:space:]])+[[:space:]]+([0-9]*)(.*)/i', $line, $result);
		$this->statusCode = (int)$result[2];
	}

}