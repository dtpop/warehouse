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

use Wallee\Sdk\ObjectSerializer;

/**
 * This class represents an HTTP request.
 *
 * @category Class
 * @package  Wallee\Sdk\Http
 * @author   customweb GmbH
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
final class HttpRequest {

	const PATCH = 'PATCH';
	const POST = 'POST';
	const GET = 'GET';
	const HEAD = 'HEAD';
	const OPTIONS = 'OPTIONS';
	const PUT = 'PUT';
	const DELETE = 'DELETE';

	/**
	 * The key of the 'user-agent' header.
	 *
	 * @var string
	 */
	const HEADER_KEY_USER_AGENT = 'user-agent';

	/**
	 * The key of the 'host' header.
	 *
	 * @var string
	 */
	const HEADER_KEY_HOST = 'host';

	/**
	 * The key of the 'content-type' header.
	 *
	 * @var string
	 */
	const HEADER_KEY_CONTENT_TYPE = 'content-type';

	/**
	 * The key of the 'content-length' header.
	 *
	 * @var string
	 */
	const HEADER_KEY_CONTENT_LENGTH = 'content-length';

	/**
	 * The key of the 'accept' header.
	 *
	 * @var string
	 */
	const HEADER_KEY_ACCEPT = 'accept';
	
	/**
	 * The key of the 'x-wallee-logtoken' header.
	 *
	 * @var string
	 */
	const HEADER_LOG_TOKEN = 'x-wallee-logtoken';

	/**
	 * The object serializer.
	 *
	 * @var ObjectSerializer
	 */
	private $serializer;

	/**
	 * The full qualified URL on which the request is executed.
	 *
	 * @var string
	 */
	private $url;

	/**
	 * The request method (typically GET or POST).
	 *
	 * @var string
	 */
	private $method;

	/**
	 * The path part of the request including the query and fragment.
	 *
	 * @var string
	 */
	private $path;

	/**
	 * The HTTP protocol used (typically HTTPS or HTTP).
	 *
	 * @var string
	 */
	private $protocol;

	/**
	 * The host on which the request was executed.
	 *
	 * @var string
	 */
	private $host;

	/**
	 * The port number of the request.
	 *
	 * @var integer
	 */
	private $port;

	/**
	 * An array of HTTP headers.
	 *
	 * @var array
	 */
	private $headers = [];

	/**
	 * The query part of the request as string.
	 *
	 * @var string
	 */
	private $query;

	/**
	 * The HTTP body.
	 *
	 * @var string
	 */
	private $body;

	/**
	 * The user agent header.
	 *
	 * @var string
	 */
	private $userAgent;
	
	/**
	 * The log token.
	 *
	 * @var string
	 */
	private $logToken;

	/**
	 * Constructor.
	 *
	 * @param ObjectSerializer $serializer the object serializer
	 * @param string $url the full qualified URL on which the request is executed
	 * @param string $method the request method (typically GET or POST)
	 * @param string $logToken the request's log token
	 */
	public function __construct(ObjectSerializer $serializer, $url, $method, $logToken) {
		$this->serializer = $serializer;
		$this->url = $url;
		$this->method = strtoupper($method);
		$this->path = $this->getRequestPath($url);
		$this->protocol = strtolower(parse_url($url, PHP_URL_SCHEME));
		$this->host = parse_url($url, PHP_URL_HOST);
		$this->port = parse_url($url, PHP_URL_PORT);
		$this->query = parse_url($url, PHP_URL_QUERY);
		$this->logToken = $logToken;

		$this->addHeader(self::HEADER_KEY_HOST, $this->host);
		$this->addHeader(self::HEADER_LOG_TOKEN, $this->logToken);
	}

	/**
	 * Returns the full qualified URL on which the request is executed.
	 *
	 * @return string
	 */
	public function getUrl() {
		return $this->url;
	}

	/**
	 * Returns the request method (typically GET or POST).
	 *
	 * @return string
	 */
	public function getMethod() {
		return $this->method;
	}

	/**
	 * Returns the path part of the request including the query and fragment.
	 *
	 * @return string
	 */
	public function getPath() {
		return $this->path;
	}

	/**
	 * Returns true when the connection is secure.
	 *
	 * @return boolean
	 */
	public function isSecureConnection() {
		return $this->protocol == 'https';
	}

	/**
	 * Returns the host on which the request was executed.
	 *
	 * @return string
	 */
	public function getHost() {
		return $this->host;
	}

	/**
	 * Returns the port number of the request.
	 *
	 * @return int
	 */
	public function getPort() {
		return $this->port;
	}

	/**
	 * Returns a list of strings which represent the HTTP headers.
	 *
	 * @return string[]
	 */
	public function getHeaders() {
		$headers = [];
		foreach ($this->headers as $name => $values) {
			foreach ($values as $value) {
				$headers[] = strtolower($name) . ': ' . $value;
			}
		}
		$headers[] = self::HEADER_KEY_CONTENT_LENGTH . ': ' . strlen($this->getBody());
		return $headers;
	}

	/**
	 * Adds multiple HTTP headers to the request.
	 *
	 * @param array $headers an array of HTTP headers
	 * @return HttpRequest
	 */
	public function addHeaders($headers) {
		foreach ($headers as $key => $value) {
			$this->addHeader($key, $value);
		}
		return $this;
	}

	/**
	 * Adds an HTTP header to the request.
	 *
	 * @param string $key the header's key
	 * @param string $value the header's value
	 * @return HttpRequest
	 */
	public function addHeader($key, $value) {
		if (is_array($value)) {
			foreach ($value as $v) {
				$this->addHeader($key, $v);
			}
		} else {
			$this->headers[$key][] = $value;
		}
		return $this;
	}

	/**
	 * Removes all HTTP header with the given key from the request.
	 *
	 * @param string $key the header's key
	 * @return HttpRequest
	 */
	public function removeHeader($key) {
		if (isset($this->headers[$key])) {
			unset($this->headers[$key]);
		}
		return $this;
	}

	/**
	 * Returns the user agent header.
	 *
	 * @return string
	 */
	public function getUserAgent(){
		return $this->userAgent;
	}

	/**
	 * Sets the user agent header.
	 *
	 * @param string $userAgent the user agent header value
	 * @return HttpRequest
	 */
	public function setUserAgent($userAgent) {
		$this->userAgent = $userAgent;
		$this->removeHeader(self::HEADER_KEY_USER_AGENT);
		$this->addHeader(self::HEADER_KEY_USER_AGENT, $userAgent);
		return $this;
	}
	
	/**
	 * Returns the log token.
	 *
	 * @return string
	 */
	public function getLogToken() {
		return $this->logToken;
	}

	/**
	 * Returns the query part of the request as string.
	 *
	 * @return string
	 */
	public function getQuery() {
		return $this->query;
	}

	/**
	 * Returns the HTTP body.
	 *
	 * @return string
	 */
	public function getBody() {
		if ($this->body && isset($this->headers[self::HEADER_KEY_CONTENT_TYPE]) && $this->headers[self::HEADER_KEY_CONTENT_TYPE] == 'application/x-www-form-urlencoded') {
			return http_build_query($this->body, '', '&');
		} elseif ((is_object($this->body) || is_array($this->body)) &&
			(!isset($this->headers[self::HEADER_KEY_CONTENT_TYPE]) || $this->headers[self::HEADER_KEY_CONTENT_TYPE] != 'multipart/form-data')) {
			return json_encode($this->serializer->sanitizeForSerialization($this->body));
		} else {
	      return $this->body;
	    }
	}

	/**
	 * Sets the HTTP body.
	 *
	 * @var mixed $body the HTTP body
	 * @return HttpRequest
	 */
	public function setBody($body) {
		$this->body = $body;
		return $this;
	}

	/**
	 * Returns the message as a string.
	 *
	 * @return string
	 */
	public function toString() {
		$output = $this->getStatusLine() . "\r\n";
		foreach ($this->getHeaders() as $header) {
			$output .= $header . "\r\n";
		}
		$output .= "\r\n";
		$output .= $this->getBody();
		return $output;
	}

	/**
	 * Returns the HTTP request's status line.
	 *
	 * @return string
	 */
	private function getStatusLine() {
		return $this->getMethod() . ' ' . $this->getPath() . ' ' . 'HTTP/1.1';
	}

	/**
	 * Returns the request path part of the given url, including query and fragment.
	 *
	 * @param string $url the url
	 * @return string
	 */
	private function getRequestPath($url) {
		$urlParts = parse_url($url);
		$path = $urlParts['path'];
		if (isset($urlParts['query'])) {
			$path .= '?' . $urlParts['query'];
		}
		if (isset($urlParts['fragment'])) {
			$path .= '#' . $urlParts['fragment'];
		}
		return $path;
	}

}
