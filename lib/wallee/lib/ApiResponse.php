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


namespace Wallee\Sdk;

/**
 * This class holds the response data of an API call.
 *
 * @category Class
 * @package  Wallee\Sdk
 * @author   customweb GmbH
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class ApiResponse {

	/**
	 * The HTTP status code of the server response.
	 *
	 * @var int
	 */
	private $statusCode;

	/**
	 * The HTTP headers of the server response.
	 *
	 * @var string[]
	 */
	private $headers = [];

	/**
	 * The HTTP body of the server response.
	 *
	 * @var string
	 */
	private $data;

	/**
	 * Constructor.
	 *
	 * @param int $statusCode the HTTP status code
	 * @param array $headers the HTTP headers
	 * @param mixed $data the HTTP body
	 */
	public function __construct($statusCode, $headers, $data = null) {
		$this->statusCode = $statusCode;
		$this->headers = $headers;
		$this->data = $data;
	}

	/**
	 * Returns the HTTP status code of the server response.
	 *
	 * @return int
	 */
	public function getStatusCode() {
		return $this->statusCode;
	}

	/**
	 * Returns the HTTP headers of the server response.
	 *
	 * @return string[]
	 */
	public function getHeaders() {
		return $this->headers;
	}

	/**
	 * Returns the HTTP body of the server response.
	 *
	 * @return string
	 */
	public function getData() {
		return $this->data;
	}

}