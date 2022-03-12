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


namespace Wallee\Sdk\Test;

use PHPUnit\Framework\TestCase;
use Wallee\Sdk\ApiClient;
use Wallee\Sdk\Http\HttpClientFactory;
use Wallee\Sdk\Service\PaymentMethodService;

/**
 * This class tests the basic functionality of the SDK.
 *
 * @category Class
 * @package  Wallee\Sdk
 * @author   customweb GmbH
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
final class ApiClientTest extends TestCase
{

    /**
     * @var Wallee\Sdk\ApiClient
     */
    protected $apiClient;
    
    /**
     * @var int
     */
    private $spaceId = 405;

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
        parent::setUp();
        $userId          = getenv('APPLICATION_USER_ID') ? getenv('APPLICATION_USER_ID') : 512;
        $userKey         = getenv('APPLICATION_USER_KEY') ? getenv('APPLICATION_USER_KEY') : 'FKrO76r5VwJtBrqZawBspljbBNOxp5veKQQkOnZxucQ=';
        $this->apiClient = new ApiClient($userId, $userKey);
        $basePath        = getenv('API_BASE_PATH');
        if (!empty($basePath)) {
            $this->apiClient->setBasePath($basePath);
        }
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {
        $this->apiClient = null;
    }

    /**
     * Test the cURL HTTP client.
     */
    public function testCurlHttpClient()
    {
        $this->callApi(HttpClientFactory::TYPE_CURL);
        $this->assertEquals(HttpClientFactory::TYPE_CURL, $this->apiClient->getHttpClientType());
    }

    /**
     * Send an API request with the given http client.
     *
     * @param string $httpClientType the http type to use for the request
     */
    private function callApi($httpClientType = null)
    {
        $this->apiClient->setHttpClientType($httpClientType);
        $response = $this->apiClient->getPaymentMethodService()->allWithHttpInfo();
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertTrue(is_array($response->getData()));
    }

    /**
     * Test the socket HTTP client.
     */
    public function testSocketHttpClient()
    {
        $this->callApi(HttpClientFactory::TYPE_SOCKET);
        $this->assertEquals(HttpClientFactory::TYPE_SOCKET, $this->apiClient->getHttpClientType());
    }

    /**
     * Test the socket HTTP client.
     */
    public function testEnvClient()
    {
        putenv('WLE_HTTP_CLIENT=' . HttpClientFactory::TYPE_CURL);
        $this->assertEquals(HttpClientFactory::getClient(HttpClientFactory::TYPE_CURL), HttpClientFactory::getClient());
        
        putenv('WLE_HTTP_CLIENT=' . HttpClientFactory::TYPE_SOCKET);
        $this->assertEquals(HttpClientFactory::getClient(HttpClientFactory::TYPE_SOCKET), HttpClientFactory::getClient());
    }
    
    /**
     * Test case for an empty response
     */
    public function testEmptyResponseWithSocketClient()
    {
    	$this->apiClient->setHttpClientType(HttpClientFactory::TYPE_SOCKET);
    	$this->apiClient->getTransactionService()->read($this->spaceId, 1);
    }
    
    /**
     * Test case for an empty response
     */
    public function testEmptyResponseWithCurlClient()
    {
    	$this->apiClient->setHttpClientType(HttpClientFactory::TYPE_CURL);
    	$this->apiClient->getTransactionService()->read($this->spaceId, 1);
    }

}

