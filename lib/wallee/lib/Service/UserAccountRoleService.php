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
 * UserAccountRoleService service
 *
 * @category Class
 * @package  Wallee\Sdk
 * @author   customweb GmbH
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class UserAccountRoleService {

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
	 * Operation addRole
	 *
	 * Add Role
	 *
	 * @param int $user_id The id of the user to whom the role is assigned. (required)
	 * @param int $account_id The account to which the role is mapped. (required)
	 * @param int $role_id The role which is mapped to the user and account. (required)
	 * @param bool $applies_on_subaccount Whether the role applies only on subaccount. (optional)
	 * @throws \Wallee\Sdk\ApiException
	 * @throws \Wallee\Sdk\VersioningException
	 * @throws \Wallee\Sdk\Http\ConnectionException
	 * @return \Wallee\Sdk\Model\UserAccountRole
	 */
	public function addRole($user_id, $account_id, $role_id, $applies_on_subaccount = null) {
		return $this->addRoleWithHttpInfo($user_id, $account_id, $role_id, $applies_on_subaccount)->getData();
	}

	/**
	 * Operation addRoleWithHttpInfo
	 *
	 * Add Role
	 *
	 * @param int $user_id The id of the user to whom the role is assigned. (required)
	 * @param int $account_id The account to which the role is mapped. (required)
	 * @param int $role_id The role which is mapped to the user and account. (required)
	 * @param bool $applies_on_subaccount Whether the role applies only on subaccount. (optional)
	 * @throws \Wallee\Sdk\ApiException
	 * @throws \Wallee\Sdk\VersioningException
	 * @throws \Wallee\Sdk\Http\ConnectionException
	 * @return ApiResponse
	 */
	public function addRoleWithHttpInfo($user_id, $account_id, $role_id, $applies_on_subaccount = null) {
		// verify the required parameter 'user_id' is set
		if (is_null($user_id)) {
			throw new \InvalidArgumentException('Missing the required parameter $user_id when calling addRole');
		}
		// verify the required parameter 'account_id' is set
		if (is_null($account_id)) {
			throw new \InvalidArgumentException('Missing the required parameter $account_id when calling addRole');
		}
		// verify the required parameter 'role_id' is set
		if (is_null($role_id)) {
			throw new \InvalidArgumentException('Missing the required parameter $role_id when calling addRole');
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
		if (!is_null($user_id)) {
			$queryParams['userId'] = $this->apiClient->getSerializer()->toQueryValue($user_id);
		}
		if (!is_null($account_id)) {
			$queryParams['accountId'] = $this->apiClient->getSerializer()->toQueryValue($account_id);
		}
		if (!is_null($role_id)) {
			$queryParams['roleId'] = $this->apiClient->getSerializer()->toQueryValue($role_id);
		}
		if (!is_null($applies_on_subaccount)) {
			$queryParams['appliesOnSubaccount'] = $this->apiClient->getSerializer()->toQueryValue($applies_on_subaccount);
		}

		// path params
		$resourcePath = '/user-account-role/addRole';
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
				'\Wallee\Sdk\Model\UserAccountRole',
				'/user-account-role/addRole'
			);
			return new ApiResponse($response->getStatusCode(), $response->getHeaders(), $this->apiClient->getSerializer()->deserialize($response->getData(), '\Wallee\Sdk\Model\UserAccountRole', $response->getHeaders()));
		} catch (ApiException $e) {
			switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\UserAccountRole',
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
	 * Operation callList
	 *
	 * List Roles
	 *
	 * @param int $user_id The id of the user to whom the role is assigned. (required)
	 * @param int $account_id The account to which the role is mapped. (required)
	 * @throws \Wallee\Sdk\ApiException
	 * @throws \Wallee\Sdk\VersioningException
	 * @throws \Wallee\Sdk\Http\ConnectionException
	 * @return \Wallee\Sdk\Model\UserAccountRole[]
	 */
	public function callList($user_id, $account_id) {
		return $this->callListWithHttpInfo($user_id, $account_id)->getData();
	}

	/**
	 * Operation callListWithHttpInfo
	 *
	 * List Roles
	 *
	 * @param int $user_id The id of the user to whom the role is assigned. (required)
	 * @param int $account_id The account to which the role is mapped. (required)
	 * @throws \Wallee\Sdk\ApiException
	 * @throws \Wallee\Sdk\VersioningException
	 * @throws \Wallee\Sdk\Http\ConnectionException
	 * @return ApiResponse
	 */
	public function callListWithHttpInfo($user_id, $account_id) {
		// verify the required parameter 'user_id' is set
		if (is_null($user_id)) {
			throw new \InvalidArgumentException('Missing the required parameter $user_id when calling callList');
		}
		// verify the required parameter 'account_id' is set
		if (is_null($account_id)) {
			throw new \InvalidArgumentException('Missing the required parameter $account_id when calling callList');
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
		if (!is_null($user_id)) {
			$queryParams['userId'] = $this->apiClient->getSerializer()->toQueryValue($user_id);
		}
		if (!is_null($account_id)) {
			$queryParams['accountId'] = $this->apiClient->getSerializer()->toQueryValue($account_id);
		}

		// path params
		$resourcePath = '/user-account-role/list';
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
				'\Wallee\Sdk\Model\UserAccountRole[]',
				'/user-account-role/list'
			);
			return new ApiResponse($response->getStatusCode(), $response->getHeaders(), $this->apiClient->getSerializer()->deserialize($response->getData(), '\Wallee\Sdk\Model\UserAccountRole[]', $response->getHeaders()));
		} catch (ApiException $e) {
			switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\UserAccountRole[]',
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
	 * Operation removeRole
	 *
	 * Remove Role
	 *
	 * @param int $id The id of user account role which should be removed (required)
	 * @throws \Wallee\Sdk\ApiException
	 * @throws \Wallee\Sdk\VersioningException
	 * @throws \Wallee\Sdk\Http\ConnectionException
	 * @return void
	 */
	public function removeRole($id) {
		return $this->removeRoleWithHttpInfo($id)->getData();
	}

	/**
	 * Operation removeRoleWithHttpInfo
	 *
	 * Remove Role
	 *
	 * @param int $id The id of user account role which should be removed (required)
	 * @throws \Wallee\Sdk\ApiException
	 * @throws \Wallee\Sdk\VersioningException
	 * @throws \Wallee\Sdk\Http\ConnectionException
	 * @return ApiResponse
	 */
	public function removeRoleWithHttpInfo($id) {
		// verify the required parameter 'id' is set
		if (is_null($id)) {
			throw new \InvalidArgumentException('Missing the required parameter $id when calling removeRole');
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
		if (!is_null($id)) {
			$queryParams['id'] = $this->apiClient->getSerializer()->toQueryValue($id);
		}

		// path params
		$resourcePath = '/user-account-role/removeRole';
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
				'/user-account-role/removeRole'
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

}
