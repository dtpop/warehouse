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


namespace Wallee\Sdk\Service;

use Wallee\Sdk\ApiClient;
use Wallee\Sdk\ApiException;
use Wallee\Sdk\ApiResponse;
use Wallee\Sdk\Http\HttpRequest;
use Wallee\Sdk\ObjectSerializer;

/**
 * TransactionService service
 *
 * @category Class
 * @package  Wallee\Sdk
 * @author   customweb GmbH
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class TransactionService {

	/**
	 * The API client instance.
	 *
	 * @var ApiClient
	 */
	private $apiClient;

	/**
	 * Constructor.
	 *
	 * @param ApiClient $apiClient the api client
	 */
	public function __construct(ApiClient $apiClient) {
		if (is_null($apiClient)) {
			throw new \InvalidArgumentException('The api client is required.');
		}

		$this->apiClient = $apiClient;
	}

	/**
	 * Returns the API client instance.
	 *
	 * @return ApiClient
	 */
	public function getApiClient() {
		return $this->apiClient;
	}


	/**
	 * Operation confirm
	 *
	 * Confirm
	 *
	 * @param int $space_id  (required)
	 * @param \Wallee\Sdk\Model\TransactionPending $transaction_model The transaction JSON object to update and confirm. (required)
	 * @throws \Wallee\Sdk\ApiException
	 * @throws \Wallee\Sdk\VersioningException
	 * @throws \Wallee\Sdk\Http\ConnectionException
	 * @return \Wallee\Sdk\Model\Transaction
	 */
	public function confirm($space_id, $transaction_model) {
		return $this->confirmWithHttpInfo($space_id, $transaction_model)->getData();
	}

	/**
	 * Operation confirmWithHttpInfo
	 *
	 * Confirm
	 *
	 * @param int $space_id  (required)
	 * @param \Wallee\Sdk\Model\TransactionPending $transaction_model The transaction JSON object to update and confirm. (required)
	 * @throws \Wallee\Sdk\ApiException
	 * @throws \Wallee\Sdk\VersioningException
	 * @throws \Wallee\Sdk\Http\ConnectionException
	 * @return ApiResponse
	 */
	public function confirmWithHttpInfo($space_id, $transaction_model) {
		// verify the required parameter 'space_id' is set
		if (is_null($space_id)) {
			throw new \InvalidArgumentException('Missing the required parameter $space_id when calling confirm');
		}
		// verify the required parameter 'transaction_model' is set
		if (is_null($transaction_model)) {
			throw new \InvalidArgumentException('Missing the required parameter $transaction_model when calling confirm');
		}
		// header params
		$headerParams = [];
		$headerAccept = $this->apiClient->selectHeaderAccept(['application/json;charset=utf-8']);
		if (!is_null($headerAccept)) {
			$headerParams[HttpRequest::HEADER_KEY_ACCEPT] = $headerAccept;
		}
		$headerParams[HttpRequest::HEADER_KEY_CONTENT_TYPE] = $this->apiClient->selectHeaderContentType(['application/json;charset=utf-8']);

		// query params
		$queryParams = [];
		if (!is_null($space_id)) {
			$queryParams['spaceId'] = $this->apiClient->getSerializer()->toQueryValue($space_id);
		}

		// path params
		$resourcePath = '/transaction/confirm';
		// default format to json
		$resourcePath = str_replace('{format}', 'json', $resourcePath);

		// form params
		$formParams = [];
		// body params
		$tempBody = null;
		if (isset($transaction_model)) {
			$tempBody = $transaction_model;
		}

		// for model (json/xml)
		$httpBody = '';
		if (isset($tempBody)) {
			$httpBody = $tempBody; // $tempBody is the method argument, if present
		} elseif (!empty($formParams)) {
			$httpBody = $formParams; // for HTTP post (form)
		}
		// make the API Call
		try {
			$this->apiClient->setConnectionTimeout(ApiClient::CONNECTION_TIMEOUT);
			$response = $this->apiClient->callApi(
				$resourcePath,
				'POST',
				$queryParams,
				$httpBody,
				$headerParams,
				'\Wallee\Sdk\Model\Transaction',
				'/transaction/confirm'
			);
			return new ApiResponse($response->getStatusCode(), $response->getHeaders(), $this->apiClient->getSerializer()->deserialize($response->getData(), '\Wallee\Sdk\Model\Transaction', $response->getHeaders()));
		} catch (ApiException $e) {
			switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\Transaction',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                break;
                case 409:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\ClientError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                break;
                case 442:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\ClientError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                break;
                case 542:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\ServerError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                break;
			}
			throw $e;
		}
	}

	/**
	 * Operation count
	 *
	 * Count
	 *
	 * @param int $space_id  (required)
	 * @param \Wallee\Sdk\Model\EntityQueryFilter $filter The filter which restricts the entities which are used to calculate the count. (optional)
	 * @throws \Wallee\Sdk\ApiException
	 * @throws \Wallee\Sdk\VersioningException
	 * @throws \Wallee\Sdk\Http\ConnectionException
	 * @return int
	 */
	public function count($space_id, $filter = null) {
		return $this->countWithHttpInfo($space_id, $filter)->getData();
	}

	/**
	 * Operation countWithHttpInfo
	 *
	 * Count
	 *
	 * @param int $space_id  (required)
	 * @param \Wallee\Sdk\Model\EntityQueryFilter $filter The filter which restricts the entities which are used to calculate the count. (optional)
	 * @throws \Wallee\Sdk\ApiException
	 * @throws \Wallee\Sdk\VersioningException
	 * @throws \Wallee\Sdk\Http\ConnectionException
	 * @return ApiResponse
	 */
	public function countWithHttpInfo($space_id, $filter = null) {
		// verify the required parameter 'space_id' is set
		if (is_null($space_id)) {
			throw new \InvalidArgumentException('Missing the required parameter $space_id when calling count');
		}
		// header params
		$headerParams = [];
		$headerAccept = $this->apiClient->selectHeaderAccept(['application/json;charset=utf-8']);
		if (!is_null($headerAccept)) {
			$headerParams[HttpRequest::HEADER_KEY_ACCEPT] = $headerAccept;
		}
		$headerParams[HttpRequest::HEADER_KEY_CONTENT_TYPE] = $this->apiClient->selectHeaderContentType(['application/json;charset=utf-8']);

		// query params
		$queryParams = [];
		if (!is_null($space_id)) {
			$queryParams['spaceId'] = $this->apiClient->getSerializer()->toQueryValue($space_id);
		}

		// path params
		$resourcePath = '/transaction/count';
		// default format to json
		$resourcePath = str_replace('{format}', 'json', $resourcePath);

		// form params
		$formParams = [];
		// body params
		$tempBody = null;
		if (isset($filter)) {
			$tempBody = $filter;
		}

		// for model (json/xml)
		$httpBody = '';
		if (isset($tempBody)) {
			$httpBody = $tempBody; // $tempBody is the method argument, if present
		} elseif (!empty($formParams)) {
			$httpBody = $formParams; // for HTTP post (form)
		}
		// make the API Call
		try {
			$this->apiClient->setConnectionTimeout(ApiClient::CONNECTION_TIMEOUT);
			$response = $this->apiClient->callApi(
				$resourcePath,
				'POST',
				$queryParams,
				$httpBody,
				$headerParams,
				'int',
				'/transaction/count'
			);
			return new ApiResponse($response->getStatusCode(), $response->getHeaders(), $this->apiClient->getSerializer()->deserialize($response->getData(), 'int', $response->getHeaders()));
		} catch (ApiException $e) {
			switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'int',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                break;
                case 442:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\ClientError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                break;
                case 542:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\ServerError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                break;
			}
			throw $e;
		}
	}

	/**
	 * Operation create
	 *
	 * Create
	 *
	 * @param int $space_id  (required)
	 * @param \Wallee\Sdk\Model\TransactionCreate $transaction The transaction object which should be created. (required)
	 * @throws \Wallee\Sdk\ApiException
	 * @throws \Wallee\Sdk\VersioningException
	 * @throws \Wallee\Sdk\Http\ConnectionException
	 * @return \Wallee\Sdk\Model\Transaction
	 */
	public function create($space_id, $transaction) {
		return $this->createWithHttpInfo($space_id, $transaction)->getData();
	}

	/**
	 * Operation createWithHttpInfo
	 *
	 * Create
	 *
	 * @param int $space_id  (required)
	 * @param \Wallee\Sdk\Model\TransactionCreate $transaction The transaction object which should be created. (required)
	 * @throws \Wallee\Sdk\ApiException
	 * @throws \Wallee\Sdk\VersioningException
	 * @throws \Wallee\Sdk\Http\ConnectionException
	 * @return ApiResponse
	 */
	public function createWithHttpInfo($space_id, $transaction) {
		// verify the required parameter 'space_id' is set
		if (is_null($space_id)) {
			throw new \InvalidArgumentException('Missing the required parameter $space_id when calling create');
		}
		// verify the required parameter 'transaction' is set
		if (is_null($transaction)) {
			throw new \InvalidArgumentException('Missing the required parameter $transaction when calling create');
		}
		// header params
		$headerParams = [];
		$headerAccept = $this->apiClient->selectHeaderAccept(['application/json;charset=utf-8']);
		if (!is_null($headerAccept)) {
			$headerParams[HttpRequest::HEADER_KEY_ACCEPT] = $headerAccept;
		}
		$headerParams[HttpRequest::HEADER_KEY_CONTENT_TYPE] = $this->apiClient->selectHeaderContentType(['application/json;charset=utf-8']);

		// query params
		$queryParams = [];
		if (!is_null($space_id)) {
			$queryParams['spaceId'] = $this->apiClient->getSerializer()->toQueryValue($space_id);
		}

		// path params
		$resourcePath = '/transaction/create';
		// default format to json
		$resourcePath = str_replace('{format}', 'json', $resourcePath);

		// form params
		$formParams = [];
		// body params
		$tempBody = null;
		if (isset($transaction)) {
			$tempBody = $transaction;
		}

		// for model (json/xml)
		$httpBody = '';
		if (isset($tempBody)) {
			$httpBody = $tempBody; // $tempBody is the method argument, if present
		} elseif (!empty($formParams)) {
			$httpBody = $formParams; // for HTTP post (form)
		}
		// make the API Call
		try {
			$this->apiClient->setConnectionTimeout(ApiClient::CONNECTION_TIMEOUT);
			$response = $this->apiClient->callApi(
				$resourcePath,
				'POST',
				$queryParams,
				$httpBody,
				$headerParams,
				'\Wallee\Sdk\Model\Transaction',
				'/transaction/create'
			);
			return new ApiResponse($response->getStatusCode(), $response->getHeaders(), $this->apiClient->getSerializer()->deserialize($response->getData(), '\Wallee\Sdk\Model\Transaction', $response->getHeaders()));
		} catch (ApiException $e) {
			switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\Transaction',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                break;
                case 442:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\ClientError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                break;
                case 542:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\ServerError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                break;
			}
			throw $e;
		}
	}

	/**
	 * Operation createTransactionCredentials
	 *
	 * Create Transaction Credentials
	 *
	 * @param int $space_id  (required)
	 * @param int $id The id of the transaction which should be returned. (required)
	 * @throws \Wallee\Sdk\ApiException
	 * @throws \Wallee\Sdk\VersioningException
	 * @throws \Wallee\Sdk\Http\ConnectionException
	 * @return string
	 */
	public function createTransactionCredentials($space_id, $id) {
		return $this->createTransactionCredentialsWithHttpInfo($space_id, $id)->getData();
	}

	/**
	 * Operation createTransactionCredentialsWithHttpInfo
	 *
	 * Create Transaction Credentials
	 *
	 * @param int $space_id  (required)
	 * @param int $id The id of the transaction which should be returned. (required)
	 * @throws \Wallee\Sdk\ApiException
	 * @throws \Wallee\Sdk\VersioningException
	 * @throws \Wallee\Sdk\Http\ConnectionException
	 * @return ApiResponse
	 */
	public function createTransactionCredentialsWithHttpInfo($space_id, $id) {
		// verify the required parameter 'space_id' is set
		if (is_null($space_id)) {
			throw new \InvalidArgumentException('Missing the required parameter $space_id when calling createTransactionCredentials');
		}
		// verify the required parameter 'id' is set
		if (is_null($id)) {
			throw new \InvalidArgumentException('Missing the required parameter $id when calling createTransactionCredentials');
		}
		// header params
		$headerParams = [];
		$headerAccept = $this->apiClient->selectHeaderAccept([]);
		if (!is_null($headerAccept)) {
			$headerParams[HttpRequest::HEADER_KEY_ACCEPT] = $headerAccept;
		}
		$headerParams[HttpRequest::HEADER_KEY_CONTENT_TYPE] = $this->apiClient->selectHeaderContentType([]);

		// query params
		$queryParams = [];
		if (!is_null($space_id)) {
			$queryParams['spaceId'] = $this->apiClient->getSerializer()->toQueryValue($space_id);
		}
		if (!is_null($id)) {
			$queryParams['id'] = $this->apiClient->getSerializer()->toQueryValue($id);
		}

		// path params
		$resourcePath = '/transaction/createTransactionCredentials';
		// default format to json
		$resourcePath = str_replace('{format}', 'json', $resourcePath);

		// form params
		$formParams = [];
		
		// for model (json/xml)
		$httpBody = '';
		if (isset($tempBody)) {
			$httpBody = $tempBody; // $tempBody is the method argument, if present
		} elseif (!empty($formParams)) {
			$httpBody = $formParams; // for HTTP post (form)
		}
		// make the API Call
		try {
			$this->apiClient->setConnectionTimeout(ApiClient::CONNECTION_TIMEOUT);
			$response = $this->apiClient->callApi(
				$resourcePath,
				'POST',
				$queryParams,
				$httpBody,
				$headerParams,
				'string',
				'/transaction/createTransactionCredentials'
			);
			return new ApiResponse($response->getStatusCode(), $response->getHeaders(), $this->apiClient->getSerializer()->deserialize($response->getData(), 'string', $response->getHeaders()));
		} catch (ApiException $e) {
			switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'string',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                break;
                case 442:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\ClientError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                break;
                case 542:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\ServerError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                break;
			}
			throw $e;
		}
	}

	/**
	 * Operation deleteOneClickTokenWithCredentials
	 *
	 * Delete One-Click Token with Credentials
	 *
	 * @param string $credentials The credentials identifies the transaction and contains the security details which grants the access this operation. (required)
	 * @param int $token_id The token ID will be used to find the token which should be removed. (required)
	 * @throws \Wallee\Sdk\ApiException
	 * @throws \Wallee\Sdk\VersioningException
	 * @throws \Wallee\Sdk\Http\ConnectionException
	 * @return void
	 */
	public function deleteOneClickTokenWithCredentials($credentials, $token_id) {
		return $this->deleteOneClickTokenWithCredentialsWithHttpInfo($credentials, $token_id)->getData();
	}

	/**
	 * Operation deleteOneClickTokenWithCredentialsWithHttpInfo
	 *
	 * Delete One-Click Token with Credentials
	 *
	 * @param string $credentials The credentials identifies the transaction and contains the security details which grants the access this operation. (required)
	 * @param int $token_id The token ID will be used to find the token which should be removed. (required)
	 * @throws \Wallee\Sdk\ApiException
	 * @throws \Wallee\Sdk\VersioningException
	 * @throws \Wallee\Sdk\Http\ConnectionException
	 * @return ApiResponse
	 */
	public function deleteOneClickTokenWithCredentialsWithHttpInfo($credentials, $token_id) {
		// verify the required parameter 'credentials' is set
		if (is_null($credentials)) {
			throw new \InvalidArgumentException('Missing the required parameter $credentials when calling deleteOneClickTokenWithCredentials');
		}
		// verify the required parameter 'token_id' is set
		if (is_null($token_id)) {
			throw new \InvalidArgumentException('Missing the required parameter $token_id when calling deleteOneClickTokenWithCredentials');
		}
		// header params
		$headerParams = [];
		$headerAccept = $this->apiClient->selectHeaderAccept([]);
		if (!is_null($headerAccept)) {
			$headerParams[HttpRequest::HEADER_KEY_ACCEPT] = $headerAccept;
		}
		$headerParams[HttpRequest::HEADER_KEY_CONTENT_TYPE] = $this->apiClient->selectHeaderContentType([]);

		// query params
		$queryParams = [];
		if (!is_null($credentials)) {
			$queryParams['credentials'] = $this->apiClient->getSerializer()->toQueryValue($credentials);
		}
		if (!is_null($token_id)) {
			$queryParams['tokenId'] = $this->apiClient->getSerializer()->toQueryValue($token_id);
		}

		// path params
		$resourcePath = '/transaction/deleteOneClickTokenWithCredentials';
		// default format to json
		$resourcePath = str_replace('{format}', 'json', $resourcePath);

		// form params
		$formParams = [];
		
		// for model (json/xml)
		$httpBody = '';
		if (isset($tempBody)) {
			$httpBody = $tempBody; // $tempBody is the method argument, if present
		} elseif (!empty($formParams)) {
			$httpBody = $formParams; // for HTTP post (form)
		}
		// make the API Call
		try {
			$this->apiClient->setConnectionTimeout(ApiClient::CONNECTION_TIMEOUT);
			$response = $this->apiClient->callApi(
				$resourcePath,
				'POST',
				$queryParams,
				$httpBody,
				$headerParams,
				null,
				'/transaction/deleteOneClickTokenWithCredentials'
			);
			return new ApiResponse($response->getStatusCode(), $response->getHeaders());
		} catch (ApiException $e) {
			switch ($e->getCode()) {
                case 442:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\ClientError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                break;
                case 542:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\ServerError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                break;
			}
			throw $e;
		}
	}

	/**
	 * Operation export
	 *
	 * Export
	 *
	 * @param int $space_id  (required)
	 * @param \Wallee\Sdk\Model\EntityExportRequest $request The request controls the entries which are exported. (required)
	 * @throws \Wallee\Sdk\ApiException
	 * @throws \Wallee\Sdk\VersioningException
	 * @throws \Wallee\Sdk\Http\ConnectionException
	 * @return string
	 */
	public function export($space_id, $request) {
		return $this->exportWithHttpInfo($space_id, $request)->getData();
	}

	/**
	 * Operation exportWithHttpInfo
	 *
	 * Export
	 *
	 * @param int $space_id  (required)
	 * @param \Wallee\Sdk\Model\EntityExportRequest $request The request controls the entries which are exported. (required)
	 * @throws \Wallee\Sdk\ApiException
	 * @throws \Wallee\Sdk\VersioningException
	 * @throws \Wallee\Sdk\Http\ConnectionException
	 * @return ApiResponse
	 */
	public function exportWithHttpInfo($space_id, $request) {
		// verify the required parameter 'space_id' is set
		if (is_null($space_id)) {
			throw new \InvalidArgumentException('Missing the required parameter $space_id when calling export');
		}
		// verify the required parameter 'request' is set
		if (is_null($request)) {
			throw new \InvalidArgumentException('Missing the required parameter $request when calling export');
		}
		// header params
		$headerParams = [];
		$headerAccept = $this->apiClient->selectHeaderAccept(['application/json;charset=utf-8', 'text/csv']);
		if (!is_null($headerAccept)) {
			$headerParams[HttpRequest::HEADER_KEY_ACCEPT] = $headerAccept;
		}
		$headerParams[HttpRequest::HEADER_KEY_CONTENT_TYPE] = $this->apiClient->selectHeaderContentType(['application/json;charset=utf-8']);

		// query params
		$queryParams = [];
		if (!is_null($space_id)) {
			$queryParams['spaceId'] = $this->apiClient->getSerializer()->toQueryValue($space_id);
		}

		// path params
		$resourcePath = '/transaction/export';
		// default format to json
		$resourcePath = str_replace('{format}', 'json', $resourcePath);

		// form params
		$formParams = [];
		// body params
		$tempBody = null;
		if (isset($request)) {
			$tempBody = $request;
		}

		// for model (json/xml)
		$httpBody = '';
		if (isset($tempBody)) {
			$httpBody = $tempBody; // $tempBody is the method argument, if present
		} elseif (!empty($formParams)) {
			$httpBody = $formParams; // for HTTP post (form)
		}
		// make the API Call
		try {
			$this->apiClient->setConnectionTimeout(ApiClient::CONNECTION_TIMEOUT);
			$response = $this->apiClient->callApi(
				$resourcePath,
				'POST',
				$queryParams,
				$httpBody,
				$headerParams,
				'string',
				'/transaction/export'
			);
			return new ApiResponse($response->getStatusCode(), $response->getHeaders(), $this->apiClient->getSerializer()->deserialize($response->getData(), 'string', $response->getHeaders()));
		} catch (ApiException $e) {
			switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'string',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                break;
                case 442:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\ClientError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                break;
                case 542:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\ServerError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                break;
			}
			throw $e;
		}
	}

	/**
	 * Operation fetchOneClickTokensWithCredentials
	 *
	 * Fetch One Click Tokens with Credentials
	 *
	 * @param string $credentials The credentials identifies the transaction and contains the security details which grants the access this operation. (required)
	 * @throws \Wallee\Sdk\ApiException
	 * @throws \Wallee\Sdk\VersioningException
	 * @throws \Wallee\Sdk\Http\ConnectionException
	 * @return \Wallee\Sdk\Model\TokenVersion[]
	 */
	public function fetchOneClickTokensWithCredentials($credentials) {
		return $this->fetchOneClickTokensWithCredentialsWithHttpInfo($credentials)->getData();
	}

	/**
	 * Operation fetchOneClickTokensWithCredentialsWithHttpInfo
	 *
	 * Fetch One Click Tokens with Credentials
	 *
	 * @param string $credentials The credentials identifies the transaction and contains the security details which grants the access this operation. (required)
	 * @throws \Wallee\Sdk\ApiException
	 * @throws \Wallee\Sdk\VersioningException
	 * @throws \Wallee\Sdk\Http\ConnectionException
	 * @return ApiResponse
	 */
	public function fetchOneClickTokensWithCredentialsWithHttpInfo($credentials) {
		// verify the required parameter 'credentials' is set
		if (is_null($credentials)) {
			throw new \InvalidArgumentException('Missing the required parameter $credentials when calling fetchOneClickTokensWithCredentials');
		}
		// header params
		$headerParams = [];
		$headerAccept = $this->apiClient->selectHeaderAccept([]);
		if (!is_null($headerAccept)) {
			$headerParams[HttpRequest::HEADER_KEY_ACCEPT] = $headerAccept;
		}
		$headerParams[HttpRequest::HEADER_KEY_CONTENT_TYPE] = $this->apiClient->selectHeaderContentType([]);

		// query params
		$queryParams = [];
		if (!is_null($credentials)) {
			$queryParams['credentials'] = $this->apiClient->getSerializer()->toQueryValue($credentials);
		}

		// path params
		$resourcePath = '/transaction/fetchOneClickTokensWithCredentials';
		// default format to json
		$resourcePath = str_replace('{format}', 'json', $resourcePath);

		// form params
		$formParams = [];
		
		// for model (json/xml)
		$httpBody = '';
		if (isset($tempBody)) {
			$httpBody = $tempBody; // $tempBody is the method argument, if present
		} elseif (!empty($formParams)) {
			$httpBody = $formParams; // for HTTP post (form)
		}
		// make the API Call
		try {
			$this->apiClient->setConnectionTimeout(ApiClient::CONNECTION_TIMEOUT);
			$response = $this->apiClient->callApi(
				$resourcePath,
				'GET',
				$queryParams,
				$httpBody,
				$headerParams,
				'\Wallee\Sdk\Model\TokenVersion[]',
				'/transaction/fetchOneClickTokensWithCredentials'
			);
			return new ApiResponse($response->getStatusCode(), $response->getHeaders(), $this->apiClient->getSerializer()->deserialize($response->getData(), '\Wallee\Sdk\Model\TokenVersion[]', $response->getHeaders()));
		} catch (ApiException $e) {
			switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\TokenVersion[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                break;
                case 442:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\ClientError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                break;
                case 542:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\ServerError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                break;
			}
			throw $e;
		}
	}

	/**
	 * Operation fetchPaymentMethods
	 *
	 * Fetch Possible Payment Methods
	 *
	 * @param int $space_id  (required)
	 * @param int $id The id of the transaction which should be returned. (required)
	 * @param string $integration_mode The integration mode defines the type of integration that is applied on the transaction. (required)
	 * @throws \Wallee\Sdk\ApiException
	 * @throws \Wallee\Sdk\VersioningException
	 * @throws \Wallee\Sdk\Http\ConnectionException
	 * @return \Wallee\Sdk\Model\PaymentMethodConfiguration[]
	 */
	public function fetchPaymentMethods($space_id, $id, $integration_mode) {
		return $this->fetchPaymentMethodsWithHttpInfo($space_id, $id, $integration_mode)->getData();
	}

	/**
	 * Operation fetchPaymentMethodsWithHttpInfo
	 *
	 * Fetch Possible Payment Methods
	 *
	 * @param int $space_id  (required)
	 * @param int $id The id of the transaction which should be returned. (required)
	 * @param string $integration_mode The integration mode defines the type of integration that is applied on the transaction. (required)
	 * @throws \Wallee\Sdk\ApiException
	 * @throws \Wallee\Sdk\VersioningException
	 * @throws \Wallee\Sdk\Http\ConnectionException
	 * @return ApiResponse
	 */
	public function fetchPaymentMethodsWithHttpInfo($space_id, $id, $integration_mode) {
		// verify the required parameter 'space_id' is set
		if (is_null($space_id)) {
			throw new \InvalidArgumentException('Missing the required parameter $space_id when calling fetchPaymentMethods');
		}
		// verify the required parameter 'id' is set
		if (is_null($id)) {
			throw new \InvalidArgumentException('Missing the required parameter $id when calling fetchPaymentMethods');
		}
		// verify the required parameter 'integration_mode' is set
		if (is_null($integration_mode)) {
			throw new \InvalidArgumentException('Missing the required parameter $integration_mode when calling fetchPaymentMethods');
		}
		// header params
		$headerParams = [];
		$headerAccept = $this->apiClient->selectHeaderAccept(['application/json;charset=utf-8']);
		if (!is_null($headerAccept)) {
			$headerParams[HttpRequest::HEADER_KEY_ACCEPT] = $headerAccept;
		}
		$headerParams[HttpRequest::HEADER_KEY_CONTENT_TYPE] = $this->apiClient->selectHeaderContentType([]);

		// query params
		$queryParams = [];
		if (!is_null($space_id)) {
			$queryParams['spaceId'] = $this->apiClient->getSerializer()->toQueryValue($space_id);
		}
		if (!is_null($id)) {
			$queryParams['id'] = $this->apiClient->getSerializer()->toQueryValue($id);
		}
		if (!is_null($integration_mode)) {
			$queryParams['integrationMode'] = $this->apiClient->getSerializer()->toQueryValue($integration_mode);
		}

		// path params
		$resourcePath = '/transaction/fetch-payment-methods';
		// default format to json
		$resourcePath = str_replace('{format}', 'json', $resourcePath);

		// form params
		$formParams = [];
		
		// for model (json/xml)
		$httpBody = '';
		if (isset($tempBody)) {
			$httpBody = $tempBody; // $tempBody is the method argument, if present
		} elseif (!empty($formParams)) {
			$httpBody = $formParams; // for HTTP post (form)
		}
		// make the API Call
		try {
			$this->apiClient->setConnectionTimeout(ApiClient::CONNECTION_TIMEOUT);
			$response = $this->apiClient->callApi(
				$resourcePath,
				'GET',
				$queryParams,
				$httpBody,
				$headerParams,
				'\Wallee\Sdk\Model\PaymentMethodConfiguration[]',
				'/transaction/fetch-payment-methods'
			);
			return new ApiResponse($response->getStatusCode(), $response->getHeaders(), $this->apiClient->getSerializer()->deserialize($response->getData(), '\Wallee\Sdk\Model\PaymentMethodConfiguration[]', $response->getHeaders()));
		} catch (ApiException $e) {
			switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\PaymentMethodConfiguration[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                break;
                case 442:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\ClientError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                break;
                case 542:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\ServerError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                break;
			}
			throw $e;
		}
	}

	/**
	 * Operation fetchPaymentMethodsWithCredentials
	 *
	 * Fetch Possible Payment Methods with Credentials
	 *
	 * @param string $credentials The credentials identifies the transaction and contains the security details which grants the access this operation. (required)
	 * @param string $integration_mode The integration mode defines the type of integration that is applied on the transaction. (required)
	 * @throws \Wallee\Sdk\ApiException
	 * @throws \Wallee\Sdk\VersioningException
	 * @throws \Wallee\Sdk\Http\ConnectionException
	 * @return \Wallee\Sdk\Model\PaymentMethodConfiguration[]
	 */
	public function fetchPaymentMethodsWithCredentials($credentials, $integration_mode) {
		return $this->fetchPaymentMethodsWithCredentialsWithHttpInfo($credentials, $integration_mode)->getData();
	}

	/**
	 * Operation fetchPaymentMethodsWithCredentialsWithHttpInfo
	 *
	 * Fetch Possible Payment Methods with Credentials
	 *
	 * @param string $credentials The credentials identifies the transaction and contains the security details which grants the access this operation. (required)
	 * @param string $integration_mode The integration mode defines the type of integration that is applied on the transaction. (required)
	 * @throws \Wallee\Sdk\ApiException
	 * @throws \Wallee\Sdk\VersioningException
	 * @throws \Wallee\Sdk\Http\ConnectionException
	 * @return ApiResponse
	 */
	public function fetchPaymentMethodsWithCredentialsWithHttpInfo($credentials, $integration_mode) {
		// verify the required parameter 'credentials' is set
		if (is_null($credentials)) {
			throw new \InvalidArgumentException('Missing the required parameter $credentials when calling fetchPaymentMethodsWithCredentials');
		}
		// verify the required parameter 'integration_mode' is set
		if (is_null($integration_mode)) {
			throw new \InvalidArgumentException('Missing the required parameter $integration_mode when calling fetchPaymentMethodsWithCredentials');
		}
		// header params
		$headerParams = [];
		$headerAccept = $this->apiClient->selectHeaderAccept(['application/json;charset=utf-8']);
		if (!is_null($headerAccept)) {
			$headerParams[HttpRequest::HEADER_KEY_ACCEPT] = $headerAccept;
		}
		$headerParams[HttpRequest::HEADER_KEY_CONTENT_TYPE] = $this->apiClient->selectHeaderContentType([]);

		// query params
		$queryParams = [];
		if (!is_null($credentials)) {
			$queryParams['credentials'] = $this->apiClient->getSerializer()->toQueryValue($credentials);
		}
		if (!is_null($integration_mode)) {
			$queryParams['integrationMode'] = $this->apiClient->getSerializer()->toQueryValue($integration_mode);
		}

		// path params
		$resourcePath = '/transaction/fetch-payment-methods-with-credentials';
		// default format to json
		$resourcePath = str_replace('{format}', 'json', $resourcePath);

		// form params
		$formParams = [];
		
		// for model (json/xml)
		$httpBody = '';
		if (isset($tempBody)) {
			$httpBody = $tempBody; // $tempBody is the method argument, if present
		} elseif (!empty($formParams)) {
			$httpBody = $formParams; // for HTTP post (form)
		}
		// make the API Call
		try {
			$this->apiClient->setConnectionTimeout(ApiClient::CONNECTION_TIMEOUT);
			$response = $this->apiClient->callApi(
				$resourcePath,
				'GET',
				$queryParams,
				$httpBody,
				$headerParams,
				'\Wallee\Sdk\Model\PaymentMethodConfiguration[]',
				'/transaction/fetch-payment-methods-with-credentials'
			);
			return new ApiResponse($response->getStatusCode(), $response->getHeaders(), $this->apiClient->getSerializer()->deserialize($response->getData(), '\Wallee\Sdk\Model\PaymentMethodConfiguration[]', $response->getHeaders()));
		} catch (ApiException $e) {
			switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\PaymentMethodConfiguration[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                break;
                case 442:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\ClientError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                break;
                case 542:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\ServerError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                break;
			}
			throw $e;
		}
	}

	/**
	 * Operation getInvoiceDocument
	 *
	 * getInvoiceDocument
	 *
	 * @param int $space_id  (required)
	 * @param int $id The id of the transaction to get the invoice document for. (required)
	 * @throws \Wallee\Sdk\ApiException
	 * @throws \Wallee\Sdk\VersioningException
	 * @throws \Wallee\Sdk\Http\ConnectionException
	 * @return \Wallee\Sdk\Model\RenderedDocument
	 */
	public function getInvoiceDocument($space_id, $id) {
		return $this->getInvoiceDocumentWithHttpInfo($space_id, $id)->getData();
	}

	/**
	 * Operation getInvoiceDocumentWithHttpInfo
	 *
	 * getInvoiceDocument
	 *
	 * @param int $space_id  (required)
	 * @param int $id The id of the transaction to get the invoice document for. (required)
	 * @throws \Wallee\Sdk\ApiException
	 * @throws \Wallee\Sdk\VersioningException
	 * @throws \Wallee\Sdk\Http\ConnectionException
	 * @return ApiResponse
	 */
	public function getInvoiceDocumentWithHttpInfo($space_id, $id) {
		// verify the required parameter 'space_id' is set
		if (is_null($space_id)) {
			throw new \InvalidArgumentException('Missing the required parameter $space_id when calling getInvoiceDocument');
		}
		// verify the required parameter 'id' is set
		if (is_null($id)) {
			throw new \InvalidArgumentException('Missing the required parameter $id when calling getInvoiceDocument');
		}
		// header params
		$headerParams = [];
		$headerAccept = $this->apiClient->selectHeaderAccept(['application/json;charset=utf-8']);
		if (!is_null($headerAccept)) {
			$headerParams[HttpRequest::HEADER_KEY_ACCEPT] = $headerAccept;
		}
		$headerParams[HttpRequest::HEADER_KEY_CONTENT_TYPE] = $this->apiClient->selectHeaderContentType(['*/*']);

		// query params
		$queryParams = [];
		if (!is_null($space_id)) {
			$queryParams['spaceId'] = $this->apiClient->getSerializer()->toQueryValue($space_id);
		}
		if (!is_null($id)) {
			$queryParams['id'] = $this->apiClient->getSerializer()->toQueryValue($id);
		}

		// path params
		$resourcePath = '/transaction/getInvoiceDocument';
		// default format to json
		$resourcePath = str_replace('{format}', 'json', $resourcePath);

		// form params
		$formParams = [];
		
		// for model (json/xml)
		$httpBody = '';
		if (isset($tempBody)) {
			$httpBody = $tempBody; // $tempBody is the method argument, if present
		} elseif (!empty($formParams)) {
			$httpBody = $formParams; // for HTTP post (form)
		}
		// make the API Call
		try {
			$this->apiClient->setConnectionTimeout(ApiClient::CONNECTION_TIMEOUT);
			$response = $this->apiClient->callApi(
				$resourcePath,
				'GET',
				$queryParams,
				$httpBody,
				$headerParams,
				'\Wallee\Sdk\Model\RenderedDocument',
				'/transaction/getInvoiceDocument'
			);
			return new ApiResponse($response->getStatusCode(), $response->getHeaders(), $this->apiClient->getSerializer()->deserialize($response->getData(), '\Wallee\Sdk\Model\RenderedDocument', $response->getHeaders()));
		} catch (ApiException $e) {
			switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\RenderedDocument',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                break;
                case 442:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\ClientError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                break;
                case 542:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\ServerError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                break;
			}
			throw $e;
		}
	}

	/**
	 * Operation getLatestTransactionLineItemVersion
	 *
	 * getLatestTransactionLineItemVersion
	 *
	 * @param int $space_id  (required)
	 * @param int $id The id of the transaction to get the latest line item version for. (required)
	 * @throws \Wallee\Sdk\ApiException
	 * @throws \Wallee\Sdk\VersioningException
	 * @throws \Wallee\Sdk\Http\ConnectionException
	 * @return \Wallee\Sdk\Model\TransactionLineItemVersion
	 */
	public function getLatestTransactionLineItemVersion($space_id, $id) {
		return $this->getLatestTransactionLineItemVersionWithHttpInfo($space_id, $id)->getData();
	}

	/**
	 * Operation getLatestTransactionLineItemVersionWithHttpInfo
	 *
	 * getLatestTransactionLineItemVersion
	 *
	 * @param int $space_id  (required)
	 * @param int $id The id of the transaction to get the latest line item version for. (required)
	 * @throws \Wallee\Sdk\ApiException
	 * @throws \Wallee\Sdk\VersioningException
	 * @throws \Wallee\Sdk\Http\ConnectionException
	 * @return ApiResponse
	 */
	public function getLatestTransactionLineItemVersionWithHttpInfo($space_id, $id) {
		// verify the required parameter 'space_id' is set
		if (is_null($space_id)) {
			throw new \InvalidArgumentException('Missing the required parameter $space_id when calling getLatestTransactionLineItemVersion');
		}
		// verify the required parameter 'id' is set
		if (is_null($id)) {
			throw new \InvalidArgumentException('Missing the required parameter $id when calling getLatestTransactionLineItemVersion');
		}
		// header params
		$headerParams = [];
		$headerAccept = $this->apiClient->selectHeaderAccept(['application/json;charset=utf-8']);
		if (!is_null($headerAccept)) {
			$headerParams[HttpRequest::HEADER_KEY_ACCEPT] = $headerAccept;
		}
		$headerParams[HttpRequest::HEADER_KEY_CONTENT_TYPE] = $this->apiClient->selectHeaderContentType([]);

		// query params
		$queryParams = [];
		if (!is_null($space_id)) {
			$queryParams['spaceId'] = $this->apiClient->getSerializer()->toQueryValue($space_id);
		}
		if (!is_null($id)) {
			$queryParams['id'] = $this->apiClient->getSerializer()->toQueryValue($id);
		}

		// path params
		$resourcePath = '/transaction/getLatestTransactionLineItemVersion';
		// default format to json
		$resourcePath = str_replace('{format}', 'json', $resourcePath);

		// form params
		$formParams = [];
		
		// for model (json/xml)
		$httpBody = '';
		if (isset($tempBody)) {
			$httpBody = $tempBody; // $tempBody is the method argument, if present
		} elseif (!empty($formParams)) {
			$httpBody = $formParams; // for HTTP post (form)
		}
		// make the API Call
		try {
			$this->apiClient->setConnectionTimeout(ApiClient::CONNECTION_TIMEOUT);
			$response = $this->apiClient->callApi(
				$resourcePath,
				'GET',
				$queryParams,
				$httpBody,
				$headerParams,
				'\Wallee\Sdk\Model\TransactionLineItemVersion',
				'/transaction/getLatestTransactionLineItemVersion'
			);
			return new ApiResponse($response->getStatusCode(), $response->getHeaders(), $this->apiClient->getSerializer()->deserialize($response->getData(), '\Wallee\Sdk\Model\TransactionLineItemVersion', $response->getHeaders()));
		} catch (ApiException $e) {
			switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\TransactionLineItemVersion',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                break;
                case 442:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\ClientError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                break;
                case 542:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\ServerError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                break;
			}
			throw $e;
		}
	}

	/**
	 * Operation getPackingSlip
	 *
	 * getPackingSlip
	 *
	 * @param int $space_id  (required)
	 * @param int $id The id of the transaction to get the packing slip for. (required)
	 * @throws \Wallee\Sdk\ApiException
	 * @throws \Wallee\Sdk\VersioningException
	 * @throws \Wallee\Sdk\Http\ConnectionException
	 * @return \Wallee\Sdk\Model\RenderedDocument
	 */
	public function getPackingSlip($space_id, $id) {
		return $this->getPackingSlipWithHttpInfo($space_id, $id)->getData();
	}

	/**
	 * Operation getPackingSlipWithHttpInfo
	 *
	 * getPackingSlip
	 *
	 * @param int $space_id  (required)
	 * @param int $id The id of the transaction to get the packing slip for. (required)
	 * @throws \Wallee\Sdk\ApiException
	 * @throws \Wallee\Sdk\VersioningException
	 * @throws \Wallee\Sdk\Http\ConnectionException
	 * @return ApiResponse
	 */
	public function getPackingSlipWithHttpInfo($space_id, $id) {
		// verify the required parameter 'space_id' is set
		if (is_null($space_id)) {
			throw new \InvalidArgumentException('Missing the required parameter $space_id when calling getPackingSlip');
		}
		// verify the required parameter 'id' is set
		if (is_null($id)) {
			throw new \InvalidArgumentException('Missing the required parameter $id when calling getPackingSlip');
		}
		// header params
		$headerParams = [];
		$headerAccept = $this->apiClient->selectHeaderAccept(['application/json;charset=utf-8']);
		if (!is_null($headerAccept)) {
			$headerParams[HttpRequest::HEADER_KEY_ACCEPT] = $headerAccept;
		}
		$headerParams[HttpRequest::HEADER_KEY_CONTENT_TYPE] = $this->apiClient->selectHeaderContentType(['*/*']);

		// query params
		$queryParams = [];
		if (!is_null($space_id)) {
			$queryParams['spaceId'] = $this->apiClient->getSerializer()->toQueryValue($space_id);
		}
		if (!is_null($id)) {
			$queryParams['id'] = $this->apiClient->getSerializer()->toQueryValue($id);
		}

		// path params
		$resourcePath = '/transaction/getPackingSlip';
		// default format to json
		$resourcePath = str_replace('{format}', 'json', $resourcePath);

		// form params
		$formParams = [];
		
		// for model (json/xml)
		$httpBody = '';
		if (isset($tempBody)) {
			$httpBody = $tempBody; // $tempBody is the method argument, if present
		} elseif (!empty($formParams)) {
			$httpBody = $formParams; // for HTTP post (form)
		}
		// make the API Call
		try {
			$this->apiClient->setConnectionTimeout(ApiClient::CONNECTION_TIMEOUT);
			$response = $this->apiClient->callApi(
				$resourcePath,
				'GET',
				$queryParams,
				$httpBody,
				$headerParams,
				'\Wallee\Sdk\Model\RenderedDocument',
				'/transaction/getPackingSlip'
			);
			return new ApiResponse($response->getStatusCode(), $response->getHeaders(), $this->apiClient->getSerializer()->deserialize($response->getData(), '\Wallee\Sdk\Model\RenderedDocument', $response->getHeaders()));
		} catch (ApiException $e) {
			switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\RenderedDocument',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                break;
                case 442:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\ClientError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                break;
                case 542:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\ServerError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                break;
			}
			throw $e;
		}
	}

	/**
	 * Operation processOneClickTokenAndRedirectWithCredentials
	 *
	 * Process One-Click Token with Credentials
	 *
	 * @param string $credentials The credentials identifies the transaction and contains the security details which grants the access this operation. (required)
	 * @param int $token_id The token ID is used to load the corresponding token and to process the transaction with it. (required)
	 * @throws \Wallee\Sdk\ApiException
	 * @throws \Wallee\Sdk\VersioningException
	 * @throws \Wallee\Sdk\Http\ConnectionException
	 * @return string
	 */
	public function processOneClickTokenAndRedirectWithCredentials($credentials, $token_id) {
		return $this->processOneClickTokenAndRedirectWithCredentialsWithHttpInfo($credentials, $token_id)->getData();
	}

	/**
	 * Operation processOneClickTokenAndRedirectWithCredentialsWithHttpInfo
	 *
	 * Process One-Click Token with Credentials
	 *
	 * @param string $credentials The credentials identifies the transaction and contains the security details which grants the access this operation. (required)
	 * @param int $token_id The token ID is used to load the corresponding token and to process the transaction with it. (required)
	 * @throws \Wallee\Sdk\ApiException
	 * @throws \Wallee\Sdk\VersioningException
	 * @throws \Wallee\Sdk\Http\ConnectionException
	 * @return ApiResponse
	 */
	public function processOneClickTokenAndRedirectWithCredentialsWithHttpInfo($credentials, $token_id) {
		// verify the required parameter 'credentials' is set
		if (is_null($credentials)) {
			throw new \InvalidArgumentException('Missing the required parameter $credentials when calling processOneClickTokenAndRedirectWithCredentials');
		}
		// verify the required parameter 'token_id' is set
		if (is_null($token_id)) {
			throw new \InvalidArgumentException('Missing the required parameter $token_id when calling processOneClickTokenAndRedirectWithCredentials');
		}
		// header params
		$headerParams = [];
		$headerAccept = $this->apiClient->selectHeaderAccept([]);
		if (!is_null($headerAccept)) {
			$headerParams[HttpRequest::HEADER_KEY_ACCEPT] = $headerAccept;
		}
		$headerParams[HttpRequest::HEADER_KEY_CONTENT_TYPE] = $this->apiClient->selectHeaderContentType([]);

		// query params
		$queryParams = [];
		if (!is_null($credentials)) {
			$queryParams['credentials'] = $this->apiClient->getSerializer()->toQueryValue($credentials);
		}
		if (!is_null($token_id)) {
			$queryParams['tokenId'] = $this->apiClient->getSerializer()->toQueryValue($token_id);
		}

		// path params
		$resourcePath = '/transaction/processOneClickTokenAndRedirectWithCredentials';
		// default format to json
		$resourcePath = str_replace('{format}', 'json', $resourcePath);

		// form params
		$formParams = [];
		
		// for model (json/xml)
		$httpBody = '';
		if (isset($tempBody)) {
			$httpBody = $tempBody; // $tempBody is the method argument, if present
		} elseif (!empty($formParams)) {
			$httpBody = $formParams; // for HTTP post (form)
		}
		// make the API Call
		try {
			$this->apiClient->setConnectionTimeout(ApiClient::CONNECTION_TIMEOUT);
			$response = $this->apiClient->callApi(
				$resourcePath,
				'POST',
				$queryParams,
				$httpBody,
				$headerParams,
				'string',
				'/transaction/processOneClickTokenAndRedirectWithCredentials'
			);
			return new ApiResponse($response->getStatusCode(), $response->getHeaders(), $this->apiClient->getSerializer()->deserialize($response->getData(), 'string', $response->getHeaders()));
		} catch (ApiException $e) {
			switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'string',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                break;
                case 442:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\ClientError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                break;
                case 542:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\ServerError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                break;
			}
			throw $e;
		}
	}

	/**
	 * Operation processWithoutUserInteraction
	 *
	 * Process Without User Interaction
	 *
	 * @param int $space_id  (required)
	 * @param int $id The id of the transaction which should be processed. (required)
	 * @throws \Wallee\Sdk\ApiException
	 * @throws \Wallee\Sdk\VersioningException
	 * @throws \Wallee\Sdk\Http\ConnectionException
	 * @return \Wallee\Sdk\Model\Transaction
	 */
	public function processWithoutUserInteraction($space_id, $id) {
		return $this->processWithoutUserInteractionWithHttpInfo($space_id, $id)->getData();
	}

	/**
	 * Operation processWithoutUserInteractionWithHttpInfo
	 *
	 * Process Without User Interaction
	 *
	 * @param int $space_id  (required)
	 * @param int $id The id of the transaction which should be processed. (required)
	 * @throws \Wallee\Sdk\ApiException
	 * @throws \Wallee\Sdk\VersioningException
	 * @throws \Wallee\Sdk\Http\ConnectionException
	 * @return ApiResponse
	 */
	public function processWithoutUserInteractionWithHttpInfo($space_id, $id) {
		// verify the required parameter 'space_id' is set
		if (is_null($space_id)) {
			throw new \InvalidArgumentException('Missing the required parameter $space_id when calling processWithoutUserInteraction');
		}
		// verify the required parameter 'id' is set
		if (is_null($id)) {
			throw new \InvalidArgumentException('Missing the required parameter $id when calling processWithoutUserInteraction');
		}
		// header params
		$headerParams = [];
		$headerAccept = $this->apiClient->selectHeaderAccept([]);
		if (!is_null($headerAccept)) {
			$headerParams[HttpRequest::HEADER_KEY_ACCEPT] = $headerAccept;
		}
		$headerParams[HttpRequest::HEADER_KEY_CONTENT_TYPE] = $this->apiClient->selectHeaderContentType([]);

		// query params
		$queryParams = [];
		if (!is_null($space_id)) {
			$queryParams['spaceId'] = $this->apiClient->getSerializer()->toQueryValue($space_id);
		}
		if (!is_null($id)) {
			$queryParams['id'] = $this->apiClient->getSerializer()->toQueryValue($id);
		}

		// path params
		$resourcePath = '/transaction/processWithoutUserInteraction';
		// default format to json
		$resourcePath = str_replace('{format}', 'json', $resourcePath);

		// form params
		$formParams = [];
		
		// for model (json/xml)
		$httpBody = '';
		if (isset($tempBody)) {
			$httpBody = $tempBody; // $tempBody is the method argument, if present
		} elseif (!empty($formParams)) {
			$httpBody = $formParams; // for HTTP post (form)
		}
		// make the API Call
		try {
			$this->apiClient->setConnectionTimeout(ApiClient::CONNECTION_TIMEOUT);
			$response = $this->apiClient->callApi(
				$resourcePath,
				'POST',
				$queryParams,
				$httpBody,
				$headerParams,
				'\Wallee\Sdk\Model\Transaction',
				'/transaction/processWithoutUserInteraction'
			);
			return new ApiResponse($response->getStatusCode(), $response->getHeaders(), $this->apiClient->getSerializer()->deserialize($response->getData(), '\Wallee\Sdk\Model\Transaction', $response->getHeaders()));
		} catch (ApiException $e) {
			switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\Transaction',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                break;
                case 442:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\ClientError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                break;
                case 542:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\ServerError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                break;
			}
			throw $e;
		}
	}

	/**
	 * Operation read
	 *
	 * Read
	 *
	 * @param int $space_id  (required)
	 * @param int $id The id of the transaction which should be returned. (required)
	 * @throws \Wallee\Sdk\ApiException
	 * @throws \Wallee\Sdk\VersioningException
	 * @throws \Wallee\Sdk\Http\ConnectionException
	 * @return \Wallee\Sdk\Model\Transaction
	 */
	public function read($space_id, $id) {
		return $this->readWithHttpInfo($space_id, $id)->getData();
	}

	/**
	 * Operation readWithHttpInfo
	 *
	 * Read
	 *
	 * @param int $space_id  (required)
	 * @param int $id The id of the transaction which should be returned. (required)
	 * @throws \Wallee\Sdk\ApiException
	 * @throws \Wallee\Sdk\VersioningException
	 * @throws \Wallee\Sdk\Http\ConnectionException
	 * @return ApiResponse
	 */
	public function readWithHttpInfo($space_id, $id) {
		// verify the required parameter 'space_id' is set
		if (is_null($space_id)) {
			throw new \InvalidArgumentException('Missing the required parameter $space_id when calling read');
		}
		// verify the required parameter 'id' is set
		if (is_null($id)) {
			throw new \InvalidArgumentException('Missing the required parameter $id when calling read');
		}
		// header params
		$headerParams = [];
		$headerAccept = $this->apiClient->selectHeaderAccept(['application/json;charset=utf-8']);
		if (!is_null($headerAccept)) {
			$headerParams[HttpRequest::HEADER_KEY_ACCEPT] = $headerAccept;
		}
		$headerParams[HttpRequest::HEADER_KEY_CONTENT_TYPE] = $this->apiClient->selectHeaderContentType(['*/*']);

		// query params
		$queryParams = [];
		if (!is_null($space_id)) {
			$queryParams['spaceId'] = $this->apiClient->getSerializer()->toQueryValue($space_id);
		}
		if (!is_null($id)) {
			$queryParams['id'] = $this->apiClient->getSerializer()->toQueryValue($id);
		}

		// path params
		$resourcePath = '/transaction/read';
		// default format to json
		$resourcePath = str_replace('{format}', 'json', $resourcePath);

		// form params
		$formParams = [];
		
		// for model (json/xml)
		$httpBody = '';
		if (isset($tempBody)) {
			$httpBody = $tempBody; // $tempBody is the method argument, if present
		} elseif (!empty($formParams)) {
			$httpBody = $formParams; // for HTTP post (form)
		}
		// make the API Call
		try {
			$this->apiClient->setConnectionTimeout(ApiClient::CONNECTION_TIMEOUT);
			$response = $this->apiClient->callApi(
				$resourcePath,
				'GET',
				$queryParams,
				$httpBody,
				$headerParams,
				'\Wallee\Sdk\Model\Transaction',
				'/transaction/read'
			);
			return new ApiResponse($response->getStatusCode(), $response->getHeaders(), $this->apiClient->getSerializer()->deserialize($response->getData(), '\Wallee\Sdk\Model\Transaction', $response->getHeaders()));
		} catch (ApiException $e) {
			switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\Transaction',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                break;
                case 442:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\ClientError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                break;
                case 542:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\ServerError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                break;
			}
			throw $e;
		}
	}

	/**
	 * Operation readWithCredentials
	 *
	 * Read With Credentials
	 *
	 * @param string $credentials The credentials identifies the transaction and contains the security details which grants the access this operation. (required)
	 * @throws \Wallee\Sdk\ApiException
	 * @throws \Wallee\Sdk\VersioningException
	 * @throws \Wallee\Sdk\Http\ConnectionException
	 * @return \Wallee\Sdk\Model\Transaction
	 */
	public function readWithCredentials($credentials) {
		return $this->readWithCredentialsWithHttpInfo($credentials)->getData();
	}

	/**
	 * Operation readWithCredentialsWithHttpInfo
	 *
	 * Read With Credentials
	 *
	 * @param string $credentials The credentials identifies the transaction and contains the security details which grants the access this operation. (required)
	 * @throws \Wallee\Sdk\ApiException
	 * @throws \Wallee\Sdk\VersioningException
	 * @throws \Wallee\Sdk\Http\ConnectionException
	 * @return ApiResponse
	 */
	public function readWithCredentialsWithHttpInfo($credentials) {
		// verify the required parameter 'credentials' is set
		if (is_null($credentials)) {
			throw new \InvalidArgumentException('Missing the required parameter $credentials when calling readWithCredentials');
		}
		// header params
		$headerParams = [];
		$headerAccept = $this->apiClient->selectHeaderAccept(['application/json;charset=utf-8']);
		if (!is_null($headerAccept)) {
			$headerParams[HttpRequest::HEADER_KEY_ACCEPT] = $headerAccept;
		}
		$headerParams[HttpRequest::HEADER_KEY_CONTENT_TYPE] = $this->apiClient->selectHeaderContentType(['*/*']);

		// query params
		$queryParams = [];
		if (!is_null($credentials)) {
			$queryParams['credentials'] = $this->apiClient->getSerializer()->toQueryValue($credentials);
		}

		// path params
		$resourcePath = '/transaction/readWithCredentials';
		// default format to json
		$resourcePath = str_replace('{format}', 'json', $resourcePath);

		// form params
		$formParams = [];
		
		// for model (json/xml)
		$httpBody = '';
		if (isset($tempBody)) {
			$httpBody = $tempBody; // $tempBody is the method argument, if present
		} elseif (!empty($formParams)) {
			$httpBody = $formParams; // for HTTP post (form)
		}
		// make the API Call
		try {
			$this->apiClient->setConnectionTimeout(ApiClient::CONNECTION_TIMEOUT);
			$response = $this->apiClient->callApi(
				$resourcePath,
				'GET',
				$queryParams,
				$httpBody,
				$headerParams,
				'\Wallee\Sdk\Model\Transaction',
				'/transaction/readWithCredentials'
			);
			return new ApiResponse($response->getStatusCode(), $response->getHeaders(), $this->apiClient->getSerializer()->deserialize($response->getData(), '\Wallee\Sdk\Model\Transaction', $response->getHeaders()));
		} catch (ApiException $e) {
			switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\Transaction',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                break;
                case 442:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\ClientError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                break;
                case 542:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\ServerError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                break;
			}
			throw $e;
		}
	}

	/**
	 * Operation search
	 *
	 * Search
	 *
	 * @param int $space_id  (required)
	 * @param \Wallee\Sdk\Model\EntityQuery $query The query restricts the transactions which are returned by the search. (required)
	 * @throws \Wallee\Sdk\ApiException
	 * @throws \Wallee\Sdk\VersioningException
	 * @throws \Wallee\Sdk\Http\ConnectionException
	 * @return \Wallee\Sdk\Model\Transaction[]
	 */
	public function search($space_id, $query) {
		return $this->searchWithHttpInfo($space_id, $query)->getData();
	}

	/**
	 * Operation searchWithHttpInfo
	 *
	 * Search
	 *
	 * @param int $space_id  (required)
	 * @param \Wallee\Sdk\Model\EntityQuery $query The query restricts the transactions which are returned by the search. (required)
	 * @throws \Wallee\Sdk\ApiException
	 * @throws \Wallee\Sdk\VersioningException
	 * @throws \Wallee\Sdk\Http\ConnectionException
	 * @return ApiResponse
	 */
	public function searchWithHttpInfo($space_id, $query) {
		// verify the required parameter 'space_id' is set
		if (is_null($space_id)) {
			throw new \InvalidArgumentException('Missing the required parameter $space_id when calling search');
		}
		// verify the required parameter 'query' is set
		if (is_null($query)) {
			throw new \InvalidArgumentException('Missing the required parameter $query when calling search');
		}
		// header params
		$headerParams = [];
		$headerAccept = $this->apiClient->selectHeaderAccept(['application/json;charset=utf-8']);
		if (!is_null($headerAccept)) {
			$headerParams[HttpRequest::HEADER_KEY_ACCEPT] = $headerAccept;
		}
		$headerParams[HttpRequest::HEADER_KEY_CONTENT_TYPE] = $this->apiClient->selectHeaderContentType(['application/json;charset=utf-8']);

		// query params
		$queryParams = [];
		if (!is_null($space_id)) {
			$queryParams['spaceId'] = $this->apiClient->getSerializer()->toQueryValue($space_id);
		}

		// path params
		$resourcePath = '/transaction/search';
		// default format to json
		$resourcePath = str_replace('{format}', 'json', $resourcePath);

		// form params
		$formParams = [];
		// body params
		$tempBody = null;
		if (isset($query)) {
			$tempBody = $query;
		}

		// for model (json/xml)
		$httpBody = '';
		if (isset($tempBody)) {
			$httpBody = $tempBody; // $tempBody is the method argument, if present
		} elseif (!empty($formParams)) {
			$httpBody = $formParams; // for HTTP post (form)
		}
		// make the API Call
		try {
			$this->apiClient->setConnectionTimeout(ApiClient::CONNECTION_TIMEOUT);
			$response = $this->apiClient->callApi(
				$resourcePath,
				'POST',
				$queryParams,
				$httpBody,
				$headerParams,
				'\Wallee\Sdk\Model\Transaction[]',
				'/transaction/search'
			);
			return new ApiResponse($response->getStatusCode(), $response->getHeaders(), $this->apiClient->getSerializer()->deserialize($response->getData(), '\Wallee\Sdk\Model\Transaction[]', $response->getHeaders()));
		} catch (ApiException $e) {
			switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\Transaction[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                break;
                case 442:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\ClientError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                break;
                case 542:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\ServerError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                break;
			}
			throw $e;
		}
	}

	/**
	 * Operation update
	 *
	 * Update
	 *
	 * @param int $space_id  (required)
	 * @param \Wallee\Sdk\Model\TransactionPending $entity The transaction object with the properties which should be updated. (required)
	 * @throws \Wallee\Sdk\ApiException
	 * @throws \Wallee\Sdk\VersioningException
	 * @throws \Wallee\Sdk\Http\ConnectionException
	 * @return \Wallee\Sdk\Model\Transaction
	 */
	public function update($space_id, $entity) {
		return $this->updateWithHttpInfo($space_id, $entity)->getData();
	}

	/**
	 * Operation updateWithHttpInfo
	 *
	 * Update
	 *
	 * @param int $space_id  (required)
	 * @param \Wallee\Sdk\Model\TransactionPending $entity The transaction object with the properties which should be updated. (required)
	 * @throws \Wallee\Sdk\ApiException
	 * @throws \Wallee\Sdk\VersioningException
	 * @throws \Wallee\Sdk\Http\ConnectionException
	 * @return ApiResponse
	 */
	public function updateWithHttpInfo($space_id, $entity) {
		// verify the required parameter 'space_id' is set
		if (is_null($space_id)) {
			throw new \InvalidArgumentException('Missing the required parameter $space_id when calling update');
		}
		// verify the required parameter 'entity' is set
		if (is_null($entity)) {
			throw new \InvalidArgumentException('Missing the required parameter $entity when calling update');
		}
		// header params
		$headerParams = [];
		$headerAccept = $this->apiClient->selectHeaderAccept(['application/json;charset=utf-8']);
		if (!is_null($headerAccept)) {
			$headerParams[HttpRequest::HEADER_KEY_ACCEPT] = $headerAccept;
		}
		$headerParams[HttpRequest::HEADER_KEY_CONTENT_TYPE] = $this->apiClient->selectHeaderContentType(['application/json;charset=utf-8']);

		// query params
		$queryParams = [];
		if (!is_null($space_id)) {
			$queryParams['spaceId'] = $this->apiClient->getSerializer()->toQueryValue($space_id);
		}

		// path params
		$resourcePath = '/transaction/update';
		// default format to json
		$resourcePath = str_replace('{format}', 'json', $resourcePath);

		// form params
		$formParams = [];
		// body params
		$tempBody = null;
		if (isset($entity)) {
			$tempBody = $entity;
		}

		// for model (json/xml)
		$httpBody = '';
		if (isset($tempBody)) {
			$httpBody = $tempBody; // $tempBody is the method argument, if present
		} elseif (!empty($formParams)) {
			$httpBody = $formParams; // for HTTP post (form)
		}
		// make the API Call
		try {
			$this->apiClient->setConnectionTimeout(ApiClient::CONNECTION_TIMEOUT);
			$response = $this->apiClient->callApi(
				$resourcePath,
				'POST',
				$queryParams,
				$httpBody,
				$headerParams,
				'\Wallee\Sdk\Model\Transaction',
				'/transaction/update'
			);
			return new ApiResponse($response->getStatusCode(), $response->getHeaders(), $this->apiClient->getSerializer()->deserialize($response->getData(), '\Wallee\Sdk\Model\Transaction', $response->getHeaders()));
		} catch (ApiException $e) {
			switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\Transaction',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                break;
                case 409:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\ClientError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                break;
                case 442:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\ClientError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                break;
                case 542:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\ServerError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                break;
			}
			throw $e;
		}
	}

	/**
	 * Operation updateTransactionLineItems
	 *
	 * updateTransactionLineItems
	 *
	 * @param int $space_id  (required)
	 * @param \Wallee\Sdk\Model\TransactionLineItemUpdateRequest $update_request  (required)
	 * @throws \Wallee\Sdk\ApiException
	 * @throws \Wallee\Sdk\VersioningException
	 * @throws \Wallee\Sdk\Http\ConnectionException
	 * @return \Wallee\Sdk\Model\TransactionLineItemVersion
	 */
	public function updateTransactionLineItems($space_id, $update_request) {
		return $this->updateTransactionLineItemsWithHttpInfo($space_id, $update_request)->getData();
	}

	/**
	 * Operation updateTransactionLineItemsWithHttpInfo
	 *
	 * updateTransactionLineItems
	 *
	 * @param int $space_id  (required)
	 * @param \Wallee\Sdk\Model\TransactionLineItemUpdateRequest $update_request  (required)
	 * @throws \Wallee\Sdk\ApiException
	 * @throws \Wallee\Sdk\VersioningException
	 * @throws \Wallee\Sdk\Http\ConnectionException
	 * @return ApiResponse
	 */
	public function updateTransactionLineItemsWithHttpInfo($space_id, $update_request) {
		// verify the required parameter 'space_id' is set
		if (is_null($space_id)) {
			throw new \InvalidArgumentException('Missing the required parameter $space_id when calling updateTransactionLineItems');
		}
		// verify the required parameter 'update_request' is set
		if (is_null($update_request)) {
			throw new \InvalidArgumentException('Missing the required parameter $update_request when calling updateTransactionLineItems');
		}
		// header params
		$headerParams = [];
		$headerAccept = $this->apiClient->selectHeaderAccept(['application/json;charset=utf-8']);
		if (!is_null($headerAccept)) {
			$headerParams[HttpRequest::HEADER_KEY_ACCEPT] = $headerAccept;
		}
		$headerParams[HttpRequest::HEADER_KEY_CONTENT_TYPE] = $this->apiClient->selectHeaderContentType(['application/json;charset=utf-8']);

		// query params
		$queryParams = [];
		if (!is_null($space_id)) {
			$queryParams['spaceId'] = $this->apiClient->getSerializer()->toQueryValue($space_id);
		}

		// path params
		$resourcePath = '/transaction/updateTransactionLineItems';
		// default format to json
		$resourcePath = str_replace('{format}', 'json', $resourcePath);

		// form params
		$formParams = [];
		// body params
		$tempBody = null;
		if (isset($update_request)) {
			$tempBody = $update_request;
		}

		// for model (json/xml)
		$httpBody = '';
		if (isset($tempBody)) {
			$httpBody = $tempBody; // $tempBody is the method argument, if present
		} elseif (!empty($formParams)) {
			$httpBody = $formParams; // for HTTP post (form)
		}
		// make the API Call
		try {
			$this->apiClient->setConnectionTimeout(ApiClient::CONNECTION_TIMEOUT);
			$response = $this->apiClient->callApi(
				$resourcePath,
				'POST',
				$queryParams,
				$httpBody,
				$headerParams,
				'\Wallee\Sdk\Model\TransactionLineItemVersion',
				'/transaction/updateTransactionLineItems'
			);
			return new ApiResponse($response->getStatusCode(), $response->getHeaders(), $this->apiClient->getSerializer()->deserialize($response->getData(), '\Wallee\Sdk\Model\TransactionLineItemVersion', $response->getHeaders()));
		} catch (ApiException $e) {
			switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\TransactionLineItemVersion',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                break;
                case 409:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\ClientError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                break;
                case 442:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\ClientError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                break;
                case 542:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\ServerError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                break;
			}
			throw $e;
		}
	}

}
