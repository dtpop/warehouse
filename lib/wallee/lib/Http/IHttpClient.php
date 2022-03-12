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

use Wallee\Sdk\ApiClient;

/**
 * This interface defines an HTTP client that sends API requests.
 *
 * @category Interface
 * @package  Wallee\Sdk\Http
 * @author   customweb GmbH
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
interface IHttpClient {

	const ENVIRONMENT_VARIABLE_SSL_VERSION = 'PHP_FORCE_SSL_VERSION';
	const ENVIRONMENT_VARIABLE_PROXY_URL = 'PHP_HTTP_CLIENT_PROXY_URL';
	const ENVIRONMENT_VARIABLE_IP_ADDRESS_VERSION = 'PHP_FORCE_IP_ADDRESS_VERSION';

	const SSL_VERSION_SSLV2 = 'sslv2';
	const SSL_VERSION_SSLV3 = 'sslv3';
	const SSL_VERSION_TLSV1 = 'tlsv1';
	const SSL_VERSION_TLSV11 = 'tlsv11';
	const SSL_VERSION_TLSV12 = 'tlsv12';

	const IP_ADDRESS_VERSION_V4 = 'IPv4';
	const IP_ADDRESS_VERSION_V6 = 'IPv6';

	/**
	 * Returns true when this http client is supported by the system and can be used.
	 *
	 * @return boolean
	 */
	public function isSupported();

	/**
	 * This method sends an HTTP request synchronously.
	 *
	 * @param ApiClient $apiClient the API client
	 * @param HttpRequest $request the HTTP request
	 * @throws ConnectionException
	 * @return HttpResponse
	 */
	public function send(ApiClient $apiClient, HttpRequest $request);

}