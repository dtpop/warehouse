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
use Wallee\Sdk\Model\AddressCreate;
use Wallee\Sdk\Model\LineItemCreate;
use Wallee\Sdk\Model\LineItemType;
use Wallee\Sdk\Model\RefundCreate;
use Wallee\Sdk\Model\RefundState;
use Wallee\Sdk\Model\RefundType;
use Wallee\Sdk\Model\TransactionCompletionState;
use Wallee\Sdk\Model\TransactionCreate;
use Wallee\Sdk\Model\TransactionState;

/**
 * This class tests the basic functionality of the SDK.
 *
 * @category Class
 * @package  Wallee\Sdk
 * @author   customweb GmbH
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class RefundServiceTest extends TestCase
{
    /**
     * @var Wallee\Sdk\ApiClient
     */
    private $apiClient;

    /**
     * @var Wallee\Sdk\Model\TransactionCreate
     */
    private $transactionPayload;

    /**
     * @var int
     */
    private $spaceId = 405;

    /**
     * @var int
     */
    private $userId = 512;

    /**
     * @var string
     */
    private $secret = 'FKrO76r5VwJtBrqZawBspljbBNOxp5veKQQkOnZxucQ=';

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
        parent::setUp();

        $this->apiClient = $this->getApiClient();
        $this->transactionPayload = $this->getTransactionPayload();
    }

    /**
     * @return Wallee\Sdk\ApiClient
     */
    private function getApiClient()
    {
        if (is_null($this->apiClient)) {
            $this->apiClient = new ApiClient($this->userId, $this->secret);
            $this->apiClient->setHttpClientType($this->getHttpClient());
        }
        return $this->apiClient;
    }

    /**
     * Get HTTP Client
     *
     * @return mixed
     */
    private function getHttpClient()
    {
        $HttpClientArray = [
            HttpClientFactory::TYPE_CURL,
            HttpClientFactory::TYPE_SOCKET,
        ];
        $httpClientType  = $HttpClientArray[array_rand($HttpClientArray)];
        return $httpClientType;
    }

    /**
     * @return TransactionCreate
     */
    private function getTransactionPayload()
    {
        if (is_null($this->transactionPayload)) {
            // line item
            $lineItem = new LineItemCreate();
            $lineItem->setName('Red T-Shirt');
            $lineItem->setUniqueId('5412');
            $lineItem->setSku('red-t-shirt-123');
            $lineItem->setQuantity(1);
            $lineItem->setAmountIncludingTax(29.95);
            $lineItem->setType(LineItemType::PRODUCT);

            // Customer Billing Address
            $billingAddress = new AddressCreate();
            $billingAddress->setCity('Winterthur');
            $billingAddress->setCountry('CH');
            $billingAddress->setEmailAddress('test@example.com');
            $billingAddress->setFamilyName('Customer');
            $billingAddress->setGivenName('Good');
            $billingAddress->setPostCode('8400');
            $billingAddress->setPostalState('ZH');
            $billingAddress->setOrganizationName('Test GmbH');
            $billingAddress->setPhoneNumber('+41791234567');
            $billingAddress->setSalutation('Ms');

            $this->transactionPayload = new TransactionCreate();
            $this->transactionPayload->setCurrency('CHF');
            $this->transactionPayload->setLineItems([$lineItem]);
            $this->transactionPayload->setAutoConfirmationEnabled(true);
            $this->transactionPayload->setBillingAddress($billingAddress);
            $this->transactionPayload->setShippingAddress($billingAddress);
            $this->transactionPayload->setToken(767);
        }
        return $this->transactionPayload;
    }

    /**
     * Test case for count
     *
     * Count.
     * @todo
     *
     */
    public function testCount()
    {
    }

    /**
     * Test case for fail
     *
     * fail.
     * @todo
     *
     */
    public function testFail()
    {
    }

    /**
     * Test case for getRefundDocument
     *
     * getRefundDocument.
     * @todo
     *
     */
    public function testGetRefundDocument()
    {
    }

    /**
     * Test case for getRefundDocumentWithTargetMediaType
     *
     * getRefundDocumentWithTargetMediaType.
     * @todo
     *
     *
     */
    public function testGetRefundDocumentWithTargetMediaType()
    {
    }

    /**
     * Test case for read
     *
     * Read.
     * @todo
     *
     */
    public function testRead()
    {
    }

    /**
     * Test case for refund
     *
     * create.
     * @todo
     */
    public function testRefund()
    {
        $transaction = $this->apiClient->getTransactionService()->create($this->spaceId, $this->transactionPayload);
        $transaction = $this->apiClient->getTransactionService()->processWithoutUserInteraction($this->spaceId, $transaction->getId());
        echo $transaction->getId() . PHP_EOL;
        for ($i = 1; $i <= 5; $i++) {
            echo $transaction->getState() . PHP_EOL;
            if (in_array($transaction->getState(), [TransactionState::FULFILL, TransactionState::FAILED])) {
                break;
            }
            sleep($i * 5);
            $transaction = $this->apiClient->getTransactionService()->read($this->spaceId, $transaction->getId());
        }
        if (in_array($transaction->getState(), [TransactionState::FULFILL])) {
            $transactionCompletion = $this->apiClient->getTransactionCompletionService()->completeOffline($this->spaceId, $transaction->getId());
            $this->assertEquals($transactionCompletion->getState(), TransactionCompletionState::SUCCESSFUL);
            $transaction = $this->apiClient->getTransactionService()->read($this->spaceId, $transactionCompletion->getLinkedTransaction());  // fetch the latest transaction data
            $refundPayload = $this->getRefundPayload($transaction);
            /**
             * \Wallee\Sdk\Model\Refund $refund
             */
            $refund = $this->apiClient->getRefundService()->refund($this->spaceId, $refundPayload);
            $this->assertEquals($refund->getState(), RefundState::SUCCESSFUL);
        }
    }

    /**
     *
     * @param \Wallee\Sdk\Model\Transaction $transaction
     * @return RefundCreate
     */
    private function getRefundPayload($transaction)
    {
        $refund = new RefundCreate();
        $refund->setAmount($transaction->getAuthorizationAmount());
        $refund->setTransaction($transaction->getId());
        $refund->setMerchantReference($transaction->getMerchantReference());
        $refund->setExternalId($transaction->getId());
        $refund->setType(RefundType::MERCHANT_INITIATED_ONLINE);
        return $refund;
    }

    /**
     * Test case for search
     *
     * Search.
     * @todo
     *
     */
    public function testSearch()
    {
    }

    /**
     * Test case for succeed
     *
     * succeed.
     * @todo
     *
     */
    public function testSucceed()
    {
    }
}
