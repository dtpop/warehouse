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
use Wallee\Sdk\Model\CriteriaOperator;
use Wallee\Sdk\Model\EntityQuery;
use Wallee\Sdk\Model\EntityQueryFilter;
use Wallee\Sdk\Model\EntityQueryFilterType;
use Wallee\Sdk\Model\LineItemCreate;
use Wallee\Sdk\Model\LineItemType;
use Wallee\Sdk\Model\PaymentMethodConfiguration;
use Wallee\Sdk\Model\TransactionCreate;
use Wallee\Sdk\Model\TransactionPending;
use Wallee\Sdk\Model\TransactionState;

/**
 * This class tests the basic functionality of the SDK.
 *
 * @category Class
 * @package  Wallee\Sdk
 * @author   customweb GmbH
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class TransactionServiceTest extends TestCase
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
     * Clean up after running each test case
     */
    public function tearDown()
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
    }

    /**
     * Test case for confirm
     *
     * Confirm.
     *
     */
    public function testConfirm()
    {
    }

    /**
     * Test case for count
     *
     * Count.
     *
     */
    public function testCount()
    {
        $transaction       = $this->apiClient->getTransactionService()->create($this->spaceId, $this->getTransactionPayload());
        $entityQueryFilter = new EntityQueryFilter([
            'field_name' => 'id',
            'value'      => $transaction->getId(),
            'type'       => EntityQueryFilterType::LEAF,
            'operator'   => CriteriaOperator::EQUALS,
        ]);
        $transactionCount  = $this->apiClient->getTransactionService()->count($this->spaceId, $entityQueryFilter);
        $this->assertEquals($transactionCount, 1);
    }

    /**
     * Test case for create
     *
     * Create.
     *
     */
    public function testCreate()
    {
        $transaction = $this->apiClient->getTransactionService()->create($this->spaceId, $this->getTransactionPayload());
        $this->assertEquals($transaction->getState(), TransactionState::PENDING);
    }

    /**
     * Test case for createTransactionCredentials
     *
     * Create Transaction Credentials.
     * @todo
     *
     */
    public function testCreateTransactionCredentials()
    {
    }

    /**
     * Test case for deleteOneClickTokenWithCredentials
     *
     * Delete One-Click Token with Credentials.
     * @todo
     *
     */
    public function testDeleteOneClickTokenWithCredentials()
    {
    }

    /**
     * Test case for export
     *
     * Export.
     * @todo
     *
     */
    public function testExport()
    {
    }

    /**
     * Test case for fetchOneClickTokensWithCredentials
     *
     * Fetch One Click Tokens with Credentials.
     * @todo
     *
     */
    public function testFetchOneClickTokensWithCredentials()
    {
    }

    /**
     * Test case for fetchPossiblePaymentMethods
     *
     * Fetch Possible Payment Methods.
     * payment_page, iframe, lightbox, mobile_web_view, terminal, payment_link, charge_flow, direct_card_processing
     *
     */
    public function testFetchPaymentMethods()
    {

        $transaction = $this->apiClient->getTransactionService()->create($this->spaceId, $this->getTransactionPayload());
        $possiblePaymentMethods = $this->apiClient->getTransactionService()->fetchPaymentMethods($this->spaceId, $transaction->getId(), 'payment_page');
        $this->assertEquals(true, is_array($possiblePaymentMethods));
        $this->assertInstanceOf(PaymentMethodConfiguration::class, $possiblePaymentMethods[0]);
    }

    /**
     * Test case for fetchPossiblePaymentMethodsWithCredentials
     *
     * Fetch Possible Payment Methods with Credentials.
     * @todo
     *
     */
    public function testFetchPaymentMethodsWithCredentials()
    {
    }

    /**
     * Test case for getInvoiceDocument
     *
     * getInvoiceDocument.
     *
     */
    public function testGetInvoiceDocument()
    {
        /*
        $transaction = $this->apiClient->getTransactionService()->create($this->spaceId, $this->getTransactionPayload());
        $transaction = $this->apiClient->getTransactionService()->processWithoutUserInteraction($this->spaceId, $transaction->getId());
        $renderedDocument = $this->apiClient->getTransactionService()->getInvoiceDocument($this->spaceId, $transaction->getId());
        $this->assertEquals(true, !is_null($renderedDocument));
        */
    }

    /**
     * Test case for getLatestTransactionLineItemVersion
     *
     * getLatestTransactionLineItemVersion.
     * @todo
     *
     */
    public function testGetLatestTransactionLineItemVersion()
    {
    }

    /**
     * Test case for getPackingSlip
     *
     * getPackingSlip.
     * @todo
     *
     */
    public function testGetPackingSlip()
    {
    }

    /**
     * Test case for processOneClickTokenAndRedirectWithCredentials
     *
     * Process One-Click Token with Credentials.
     * @todo
     *
     */
    public function testProcessOneClickTokenAndRedirectWithCredentials()
    {
    }

    /**
     * Test case for processWithoutUserInteraction
     *
     * Process Without User Interaction.
     * @todo
     *
     */
    public function testProcessWithoutUserInteraction()
    {
        $transaction = $this->apiClient->getTransactionService()->create($this->spaceId, $this->getTransactionPayload());
        $this->assertEquals($transaction->getState(), TransactionState::PENDING);
        $transaction = $this->apiClient->getTransactionService()->processWithoutUserInteraction($this->spaceId, $transaction->getId());
        $this->assertEquals(true, in_array($transaction->getState(), [TransactionState::AUTHORIZED, TransactionState::FULFILL, TransactionState::PROCESSING]));
    }

    /**
     * Test case for read
     *
     * Read.
     *
     */
    public function testRead()
    {
        $transaction     = $this->apiClient->getTransactionService()->create($this->spaceId, $this->getTransactionPayload());
        $transactionRead = $this->apiClient->getTransactionService()->read($this->spaceId, $transaction->getId());
        $this->assertEquals($transactionRead->getState(), $transaction->getState());
    }

    /**
     * Test case for readWithCredentials
     *
     * Read With Credentials.
     * @todo
     *
     */
    public function testReadWithCredentials()
    {
    }

    /**
     * Test case for search
     *
     * Search.
     *
     */
    public function testSearch()
    {
        $transaction       = $this->apiClient->getTransactionService()->create($this->spaceId, $this->getTransactionPayload());
        $entityQueryFilter = new EntityQueryFilter([
            'field_name' => 'id',
            'value'      => $transaction->getId(),
            'type'       => EntityQueryFilterType::LEAF,
            'operator'   => CriteriaOperator::EQUALS,
        ]);
        $entityQuery       = new EntityQuery(['filter' => $entityQueryFilter]);
        $transactions      = $this->apiClient->getTransactionService()->search($this->spaceId, $entityQuery);
        $this->assertEquals(count($transactions), 1);
        foreach ($transactions as $transactionItem) {
            $this->assertEquals($transaction->getState(), $transactionItem->getState());
        }
    }

    /**
     * Test case for update
     *
     * Update.
     *
     */
    public function testUpdate()
    {
        $transaction        = $this->apiClient->getTransactionService()->create($this->spaceId, $this->getTransactionPayload());
        $transactionPending = new TransactionPending();
        $transactionPending->setId($transaction->getId());
        $transactionPending->setMetaData(['key' => 'value']);
        $transactionPending->setLanguage('en-US');
        $transactionPending->setVersion($transaction->getVersion());

        $transactionUpdate = $this->apiClient->getTransactionService()->update($this->spaceId, $transactionPending);

        $this->assertEquals($transaction->getState(), $transactionUpdate->getState());
        $this->assertEquals($transactionPending->getLanguage(), $transactionUpdate->getLanguage());
    }

    /**
     * Test case for updateTransactionLineItems
     *
     * updateTransactionLineItems.
     * @todo
     */
    public function testUpdateTransactionLineItems()
    {
    }
}

