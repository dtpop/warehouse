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
 * SubscriptionService service
 *
 * @category Class
 * @package  Wallee\Sdk
 * @author   customweb GmbH
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class SubscriptionService {

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
	 * Operation applyChanges
	 *
	 * apply changes
	 *
	 * @param int $space_id  (required)
	 * @param \Wallee\Sdk\Model\SubscriptionChangeRequest $request  (required)
	 * @throws \Wallee\Sdk\ApiException
	 * @throws \Wallee\Sdk\VersioningException
	 * @throws \Wallee\Sdk\Http\ConnectionException
	 * @return \Wallee\Sdk\Model\SubscriptionVersion
	 */
	public function applyChanges($space_id, $request) {
		return $this->applyChangesWithHttpInfo($space_id, $request)->getData();
	}

	/**
	 * Operation applyChangesWithHttpInfo
	 *
	 * apply changes
	 *
	 * @param int $space_id  (required)
	 * @param \Wallee\Sdk\Model\SubscriptionChangeRequest $request  (required)
	 * @throws \Wallee\Sdk\ApiException
	 * @throws \Wallee\Sdk\VersioningException
	 * @throws \Wallee\Sdk\Http\ConnectionException
	 * @return ApiResponse
	 */
	public function applyChangesWithHttpInfo($space_id, $request) {
		// verify the required parameter 'space_id' is set
		if (is_null($space_id)) {
			throw new \InvalidArgumentException('Missing the required parameter $space_id when calling applyChanges');
		}
		// verify the required parameter 'request' is set
		if (is_null($request)) {
			throw new \InvalidArgumentException('Missing the required parameter $request when calling applyChanges');
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
		$resourcePath = '/subscription/applyChanges';
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
				'\Wallee\Sdk\Model\SubscriptionVersion',
				'/subscription/applyChanges'
			);
			return new ApiResponse($response->getStatusCode(), $response->getHeaders(), $this->apiClient->getSerializer()->deserialize($response->getData(), '\Wallee\Sdk\Model\SubscriptionVersion', $response->getHeaders()));
		} catch (ApiException $e) {
			switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\SubscriptionVersion',
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
		$resourcePath = '/subscription/count';
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
				'/subscription/count'
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
	 * @param \Wallee\Sdk\Model\SubscriptionCreateRequest $create_request  (required)
	 * @throws \Wallee\Sdk\ApiException
	 * @throws \Wallee\Sdk\VersioningException
	 * @throws \Wallee\Sdk\Http\ConnectionException
	 * @return \Wallee\Sdk\Model\SubscriptionVersion
	 */
	public function create($space_id, $create_request) {
		return $this->createWithHttpInfo($space_id, $create_request)->getData();
	}

	/**
	 * Operation createWithHttpInfo
	 *
	 * Create
	 *
	 * @param int $space_id  (required)
	 * @param \Wallee\Sdk\Model\SubscriptionCreateRequest $create_request  (required)
	 * @throws \Wallee\Sdk\ApiException
	 * @throws \Wallee\Sdk\VersioningException
	 * @throws \Wallee\Sdk\Http\ConnectionException
	 * @return ApiResponse
	 */
	public function createWithHttpInfo($space_id, $create_request) {
		// verify the required parameter 'space_id' is set
		if (is_null($space_id)) {
			throw new \InvalidArgumentException('Missing the required parameter $space_id when calling create');
		}
		// verify the required parameter 'create_request' is set
		if (is_null($create_request)) {
			throw new \InvalidArgumentException('Missing the required parameter $create_request when calling create');
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
		$resourcePath = '/subscription/create';
		// default format to json
		$resourcePath = str_replace('{format}', 'json', $resourcePath);

		// form params
		$formParams = [];
		// body params
		$tempBody = null;
		if (isset($create_request)) {
			$tempBody = $create_request;
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
				'\Wallee\Sdk\Model\SubscriptionVersion',
				'/subscription/create'
			);
			return new ApiResponse($response->getStatusCode(), $response->getHeaders(), $this->apiClient->getSerializer()->deserialize($response->getData(), '\Wallee\Sdk\Model\SubscriptionVersion', $response->getHeaders()));
		} catch (ApiException $e) {
			switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\SubscriptionVersion',
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
	 * Operation initialize
	 *
	 * initialize
	 *
	 * @param int $space_id  (required)
	 * @param int $subscription_id The provided subscription id will be used to lookup the subscription which should be initialized. (required)
	 * @throws \Wallee\Sdk\ApiException
	 * @throws \Wallee\Sdk\VersioningException
	 * @throws \Wallee\Sdk\Http\ConnectionException
	 * @return \Wallee\Sdk\Model\SubscriptionCharge
	 */
	public function initialize($space_id, $subscription_id) {
		return $this->initializeWithHttpInfo($space_id, $subscription_id)->getData();
	}

	/**
	 * Operation initializeWithHttpInfo
	 *
	 * initialize
	 *
	 * @param int $space_id  (required)
	 * @param int $subscription_id The provided subscription id will be used to lookup the subscription which should be initialized. (required)
	 * @throws \Wallee\Sdk\ApiException
	 * @throws \Wallee\Sdk\VersioningException
	 * @throws \Wallee\Sdk\Http\ConnectionException
	 * @return ApiResponse
	 */
	public function initializeWithHttpInfo($space_id, $subscription_id) {
		// verify the required parameter 'space_id' is set
		if (is_null($space_id)) {
			throw new \InvalidArgumentException('Missing the required parameter $space_id when calling initialize');
		}
		// verify the required parameter 'subscription_id' is set
		if (is_null($subscription_id)) {
			throw new \InvalidArgumentException('Missing the required parameter $subscription_id when calling initialize');
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
		if (!is_null($subscription_id)) {
			$queryParams['subscriptionId'] = $this->apiClient->getSerializer()->toQueryValue($subscription_id);
		}

		// path params
		$resourcePath = '/subscription/initialize';
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
				'\Wallee\Sdk\Model\SubscriptionCharge',
				'/subscription/initialize'
			);
			return new ApiResponse($response->getStatusCode(), $response->getHeaders(), $this->apiClient->getSerializer()->deserialize($response->getData(), '\Wallee\Sdk\Model\SubscriptionCharge', $response->getHeaders()));
		} catch (ApiException $e) {
			switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\SubscriptionCharge',
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
	 * Operation initializeSubscriberPresent
	 *
	 * initializeSubscriberPresent
	 *
	 * @param int $space_id  (required)
	 * @param int $subscription_id  (required)
	 * @param string $success_url The subscriber will be redirected to the success URL when the transaction is successful. (optional)
	 * @param string $failed_url The subscriber will be redirected to the fail URL when the transaction fails. (optional)
	 * @throws \Wallee\Sdk\ApiException
	 * @throws \Wallee\Sdk\VersioningException
	 * @throws \Wallee\Sdk\Http\ConnectionException
	 * @return \Wallee\Sdk\Model\SubscriptionCharge
	 */
	public function initializeSubscriberPresent($space_id, $subscription_id, $success_url = null, $failed_url = null) {
		return $this->initializeSubscriberPresentWithHttpInfo($space_id, $subscription_id, $success_url, $failed_url)->getData();
	}

	/**
	 * Operation initializeSubscriberPresentWithHttpInfo
	 *
	 * initializeSubscriberPresent
	 *
	 * @param int $space_id  (required)
	 * @param int $subscription_id  (required)
	 * @param string $success_url The subscriber will be redirected to the success URL when the transaction is successful. (optional)
	 * @param string $failed_url The subscriber will be redirected to the fail URL when the transaction fails. (optional)
	 * @throws \Wallee\Sdk\ApiException
	 * @throws \Wallee\Sdk\VersioningException
	 * @throws \Wallee\Sdk\Http\ConnectionException
	 * @return ApiResponse
	 */
	public function initializeSubscriberPresentWithHttpInfo($space_id, $subscription_id, $success_url = null, $failed_url = null) {
		// verify the required parameter 'space_id' is set
		if (is_null($space_id)) {
			throw new \InvalidArgumentException('Missing the required parameter $space_id when calling initializeSubscriberPresent');
		}
		// verify the required parameter 'subscription_id' is set
		if (is_null($subscription_id)) {
			throw new \InvalidArgumentException('Missing the required parameter $subscription_id when calling initializeSubscriberPresent');
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
		if (!is_null($subscription_id)) {
			$queryParams['subscriptionId'] = $this->apiClient->getSerializer()->toQueryValue($subscription_id);
		}
		if (!is_null($success_url)) {
			$queryParams['successUrl'] = $this->apiClient->getSerializer()->toQueryValue($success_url);
		}
		if (!is_null($failed_url)) {
			$queryParams['failedUrl'] = $this->apiClient->getSerializer()->toQueryValue($failed_url);
		}

		// path params
		$resourcePath = '/subscription/initializeSubscriberPresent';
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
				'\Wallee\Sdk\Model\SubscriptionCharge',
				'/subscription/initializeSubscriberPresent'
			);
			return new ApiResponse($response->getStatusCode(), $response->getHeaders(), $this->apiClient->getSerializer()->deserialize($response->getData(), '\Wallee\Sdk\Model\SubscriptionCharge', $response->getHeaders()));
		} catch (ApiException $e) {
			switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\SubscriptionCharge',
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
	 * Operation read
	 *
	 * Read
	 *
	 * @param int $space_id  (required)
	 * @param int $id The id of the subscription which should be returned. (required)
	 * @throws \Wallee\Sdk\ApiException
	 * @throws \Wallee\Sdk\VersioningException
	 * @throws \Wallee\Sdk\Http\ConnectionException
	 * @return \Wallee\Sdk\Model\Subscription
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
	 * @param int $id The id of the subscription which should be returned. (required)
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
		$resourcePath = '/subscription/read';
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
				'\Wallee\Sdk\Model\Subscription',
				'/subscription/read'
			);
			return new ApiResponse($response->getStatusCode(), $response->getHeaders(), $this->apiClient->getSerializer()->deserialize($response->getData(), '\Wallee\Sdk\Model\Subscription', $response->getHeaders()));
		} catch (ApiException $e) {
			switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\Subscription',
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
	 * @param \Wallee\Sdk\Model\EntityQuery $query The query restricts the subscriptions which are returned by the search. (required)
	 * @throws \Wallee\Sdk\ApiException
	 * @throws \Wallee\Sdk\VersioningException
	 * @throws \Wallee\Sdk\Http\ConnectionException
	 * @return \Wallee\Sdk\Model\Subscription[]
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
	 * @param \Wallee\Sdk\Model\EntityQuery $query The query restricts the subscriptions which are returned by the search. (required)
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
		$resourcePath = '/subscription/search';
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
				'\Wallee\Sdk\Model\Subscription[]',
				'/subscription/search'
			);
			return new ApiResponse($response->getStatusCode(), $response->getHeaders(), $this->apiClient->getSerializer()->deserialize($response->getData(), '\Wallee\Sdk\Model\Subscription[]', $response->getHeaders()));
		} catch (ApiException $e) {
			switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\Subscription[]',
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
	 * Operation searchSubscriptionInvoices
	 *
	 * Search Subscription Invoices
	 *
	 * @param int $space_id  (required)
	 * @param int $subscription_id The id of the subscription for which the invoices should be searched for. (required)
	 * @param \Wallee\Sdk\Model\EntityQuery $query The query restricts the invoices which are returned by the search. (required)
	 * @throws \Wallee\Sdk\ApiException
	 * @throws \Wallee\Sdk\VersioningException
	 * @throws \Wallee\Sdk\Http\ConnectionException
	 * @return \Wallee\Sdk\Model\TransactionInvoice[]
	 */
	public function searchSubscriptionInvoices($space_id, $subscription_id, $query) {
		return $this->searchSubscriptionInvoicesWithHttpInfo($space_id, $subscription_id, $query)->getData();
	}

	/**
	 * Operation searchSubscriptionInvoicesWithHttpInfo
	 *
	 * Search Subscription Invoices
	 *
	 * @param int $space_id  (required)
	 * @param int $subscription_id The id of the subscription for which the invoices should be searched for. (required)
	 * @param \Wallee\Sdk\Model\EntityQuery $query The query restricts the invoices which are returned by the search. (required)
	 * @throws \Wallee\Sdk\ApiException
	 * @throws \Wallee\Sdk\VersioningException
	 * @throws \Wallee\Sdk\Http\ConnectionException
	 * @return ApiResponse
	 */
	public function searchSubscriptionInvoicesWithHttpInfo($space_id, $subscription_id, $query) {
		// verify the required parameter 'space_id' is set
		if (is_null($space_id)) {
			throw new \InvalidArgumentException('Missing the required parameter $space_id when calling searchSubscriptionInvoices');
		}
		// verify the required parameter 'subscription_id' is set
		if (is_null($subscription_id)) {
			throw new \InvalidArgumentException('Missing the required parameter $subscription_id when calling searchSubscriptionInvoices');
		}
		// verify the required parameter 'query' is set
		if (is_null($query)) {
			throw new \InvalidArgumentException('Missing the required parameter $query when calling searchSubscriptionInvoices');
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
		if (!is_null($subscription_id)) {
			$queryParams['subscriptionId'] = $this->apiClient->getSerializer()->toQueryValue($subscription_id);
		}

		// path params
		$resourcePath = '/subscription/searchSubscriptionInvoices';
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
				'\Wallee\Sdk\Model\TransactionInvoice[]',
				'/subscription/searchSubscriptionInvoices'
			);
			return new ApiResponse($response->getStatusCode(), $response->getHeaders(), $this->apiClient->getSerializer()->deserialize($response->getData(), '\Wallee\Sdk\Model\TransactionInvoice[]', $response->getHeaders()));
		} catch (ApiException $e) {
			switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\TransactionInvoice[]',
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
	 * Operation terminate
	 *
	 * terminate
	 *
	 * @param int $space_id  (required)
	 * @param int $subscription_id The subscription id identifies the subscription which should be terminated. (required)
	 * @param bool $respect_termination_period The respect termination period controls whether the termination period configured on the product version should be respected or if the operation should take effect immediately. (required)
	 * @throws \Wallee\Sdk\ApiException
	 * @throws \Wallee\Sdk\VersioningException
	 * @throws \Wallee\Sdk\Http\ConnectionException
	 * @return void
	 */
	public function terminate($space_id, $subscription_id, $respect_termination_period) {
		return $this->terminateWithHttpInfo($space_id, $subscription_id, $respect_termination_period)->getData();
	}

	/**
	 * Operation terminateWithHttpInfo
	 *
	 * terminate
	 *
	 * @param int $space_id  (required)
	 * @param int $subscription_id The subscription id identifies the subscription which should be terminated. (required)
	 * @param bool $respect_termination_period The respect termination period controls whether the termination period configured on the product version should be respected or if the operation should take effect immediately. (required)
	 * @throws \Wallee\Sdk\ApiException
	 * @throws \Wallee\Sdk\VersioningException
	 * @throws \Wallee\Sdk\Http\ConnectionException
	 * @return ApiResponse
	 */
	public function terminateWithHttpInfo($space_id, $subscription_id, $respect_termination_period) {
		// verify the required parameter 'space_id' is set
		if (is_null($space_id)) {
			throw new \InvalidArgumentException('Missing the required parameter $space_id when calling terminate');
		}
		// verify the required parameter 'subscription_id' is set
		if (is_null($subscription_id)) {
			throw new \InvalidArgumentException('Missing the required parameter $subscription_id when calling terminate');
		}
		// verify the required parameter 'respect_termination_period' is set
		if (is_null($respect_termination_period)) {
			throw new \InvalidArgumentException('Missing the required parameter $respect_termination_period when calling terminate');
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
		if (!is_null($subscription_id)) {
			$queryParams['subscriptionId'] = $this->apiClient->getSerializer()->toQueryValue($subscription_id);
		}
		if (!is_null($respect_termination_period)) {
			$queryParams['respectTerminationPeriod'] = $this->apiClient->getSerializer()->toQueryValue($respect_termination_period);
		}

		// path params
		$resourcePath = '/subscription/terminate';
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
				'/subscription/terminate'
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
	 * Operation update
	 *
	 * update
	 *
	 * @param int $space_id  (required)
	 * @param int $subscription_id  (required)
	 * @param \Wallee\Sdk\Model\SubscriptionUpdateRequest $request  (required)
	 * @throws \Wallee\Sdk\ApiException
	 * @throws \Wallee\Sdk\VersioningException
	 * @throws \Wallee\Sdk\Http\ConnectionException
	 * @return \Wallee\Sdk\Model\Subscription
	 */
	public function update($space_id, $subscription_id, $request) {
		return $this->updateWithHttpInfo($space_id, $subscription_id, $request)->getData();
	}

	/**
	 * Operation updateWithHttpInfo
	 *
	 * update
	 *
	 * @param int $space_id  (required)
	 * @param int $subscription_id  (required)
	 * @param \Wallee\Sdk\Model\SubscriptionUpdateRequest $request  (required)
	 * @throws \Wallee\Sdk\ApiException
	 * @throws \Wallee\Sdk\VersioningException
	 * @throws \Wallee\Sdk\Http\ConnectionException
	 * @return ApiResponse
	 */
	public function updateWithHttpInfo($space_id, $subscription_id, $request) {
		// verify the required parameter 'space_id' is set
		if (is_null($space_id)) {
			throw new \InvalidArgumentException('Missing the required parameter $space_id when calling update');
		}
		// verify the required parameter 'subscription_id' is set
		if (is_null($subscription_id)) {
			throw new \InvalidArgumentException('Missing the required parameter $subscription_id when calling update');
		}
		// verify the required parameter 'request' is set
		if (is_null($request)) {
			throw new \InvalidArgumentException('Missing the required parameter $request when calling update');
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
		if (!is_null($subscription_id)) {
			$queryParams['subscriptionId'] = $this->apiClient->getSerializer()->toQueryValue($subscription_id);
		}

		// path params
		$resourcePath = '/subscription/update';
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
				'\Wallee\Sdk\Model\Subscription',
				'/subscription/update'
			);
			return new ApiResponse($response->getStatusCode(), $response->getHeaders(), $this->apiClient->getSerializer()->deserialize($response->getData(), '\Wallee\Sdk\Model\Subscription', $response->getHeaders()));
		} catch (ApiException $e) {
			switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\Subscription',
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
	 * Operation updateProductVersion
	 *
	 * update product version
	 *
	 * @param int $space_id  (required)
	 * @param int $subscription_id The subscription id identifies the subscription which should be updated to the latest version. (required)
	 * @param bool $respect_termination_period The subscription version may be retired. The respect termination period controls whether the termination period configured on the product version should be respected or if the operation should take effect immediately. (required)
	 * @throws \Wallee\Sdk\ApiException
	 * @throws \Wallee\Sdk\VersioningException
	 * @throws \Wallee\Sdk\Http\ConnectionException
	 * @return \Wallee\Sdk\Model\SubscriptionVersion
	 */
	public function updateProductVersion($space_id, $subscription_id, $respect_termination_period) {
		return $this->updateProductVersionWithHttpInfo($space_id, $subscription_id, $respect_termination_period)->getData();
	}

	/**
	 * Operation updateProductVersionWithHttpInfo
	 *
	 * update product version
	 *
	 * @param int $space_id  (required)
	 * @param int $subscription_id The subscription id identifies the subscription which should be updated to the latest version. (required)
	 * @param bool $respect_termination_period The subscription version may be retired. The respect termination period controls whether the termination period configured on the product version should be respected or if the operation should take effect immediately. (required)
	 * @throws \Wallee\Sdk\ApiException
	 * @throws \Wallee\Sdk\VersioningException
	 * @throws \Wallee\Sdk\Http\ConnectionException
	 * @return ApiResponse
	 */
	public function updateProductVersionWithHttpInfo($space_id, $subscription_id, $respect_termination_period) {
		// verify the required parameter 'space_id' is set
		if (is_null($space_id)) {
			throw new \InvalidArgumentException('Missing the required parameter $space_id when calling updateProductVersion');
		}
		// verify the required parameter 'subscription_id' is set
		if (is_null($subscription_id)) {
			throw new \InvalidArgumentException('Missing the required parameter $subscription_id when calling updateProductVersion');
		}
		// verify the required parameter 'respect_termination_period' is set
		if (is_null($respect_termination_period)) {
			throw new \InvalidArgumentException('Missing the required parameter $respect_termination_period when calling updateProductVersion');
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
		if (!is_null($subscription_id)) {
			$queryParams['subscriptionId'] = $this->apiClient->getSerializer()->toQueryValue($subscription_id);
		}
		if (!is_null($respect_termination_period)) {
			$queryParams['respectTerminationPeriod'] = $this->apiClient->getSerializer()->toQueryValue($respect_termination_period);
		}

		// path params
		$resourcePath = '/subscription/updateProductVersion';
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
				'\Wallee\Sdk\Model\SubscriptionVersion',
				'/subscription/updateProductVersion'
			);
			return new ApiResponse($response->getStatusCode(), $response->getHeaders(), $this->apiClient->getSerializer()->deserialize($response->getData(), '\Wallee\Sdk\Model\SubscriptionVersion', $response->getHeaders()));
		} catch (ApiException $e) {
			switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\SubscriptionVersion',
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
