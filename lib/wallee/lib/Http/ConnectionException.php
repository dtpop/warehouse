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

use \Exception;

/**
 * This exception is used to inform about connection problems during an HTTP request.
 *
 * @category Class
 * @package  Wallee\Sdk\Http
 * @author   customweb GmbH
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
final class ConnectionException extends Exception {

	/**
	 * The URL of the connection.
	 *
	 * @var string
	 */
	private $url;

	/**
	 * The log token of the request.
	 *
	 * @var string
	 */
	private $requestToken;

	/**
	 * The error message without prefixed log token.
	 *
	 * @var string
	 */
	private $errorMessage;

	/**
	 * Constructor.
	 *
	 * @param string $url the URL of the connection
	 * @param string $requestToken the log token of the request
	 * @param string $message the error message
	 * @param int	$code the error code
	 */
	public function __construct($url = null, $requestToken = '', $message = '', $code = 0) {
		parent::__construct('[' . $requestToken . '] ' . $message, $code);
		$this->url = $url;
		$this->requestToken = $requestToken;
		$this->errorMessage = $message;
	}

	/**
	 * Returns the URL of the connection.
	 *
	 * @return string
	 */
	public function getUrl() {
		return $this->url;
	}

	/**
	 * Returns the log token of the request.
	 *
	 * @return string
	 */
	public function getRequestToken() {
		return $this->requestToken;
	}

	/**
	 * Returns the  error message without prefixed log token.
	 *
	 * @return string
	 */
	public function getErrorMessage() {
		return $this->errorMessage;
	}

}
