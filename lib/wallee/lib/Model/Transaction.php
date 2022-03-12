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


namespace Wallee\Sdk\Model;

use \ArrayAccess;
use \Wallee\Sdk\ObjectSerializer;

/**
 * Transaction model
 *
 * @category    Class
 * @description 
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class Transaction implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Transaction';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'accept_header' => 'string',
        'accept_language_header' => 'string',
        'allowed_payment_method_brands' => '\Wallee\Sdk\Model\PaymentMethodBrand[]',
        'allowed_payment_method_configurations' => 'int[]',
        'authorization_amount' => 'float',
        'authorization_environment' => '\Wallee\Sdk\Model\ChargeAttemptEnvironment',
        'authorization_sales_channel' => 'int',
        'authorization_timeout_on' => '\DateTime',
        'authorized_on' => '\DateTime',
        'auto_confirmation_enabled' => 'bool',
        'billing_address' => '\Wallee\Sdk\Model\Address',
        'charge_retry_enabled' => 'bool',
        'completed_amount' => 'float',
        'completed_on' => '\DateTime',
        'completion_behavior' => '\Wallee\Sdk\Model\TransactionCompletionBehavior',
        'completion_timeout_on' => '\DateTime',
        'confirmed_by' => 'int',
        'confirmed_on' => '\DateTime',
        'created_by' => 'int',
        'created_on' => '\DateTime',
        'currency' => 'string',
        'customer_email_address' => 'string',
        'customer_id' => 'string',
        'customers_presence' => '\Wallee\Sdk\Model\CustomersPresence',
        'delivery_decision_made_on' => '\DateTime',
        'device_session_identifier' => 'string',
        'emails_disabled' => 'bool',
        'end_of_life' => '\DateTime',
        'environment' => '\Wallee\Sdk\Model\Environment',
        'environment_selection_strategy' => '\Wallee\Sdk\Model\TransactionEnvironmentSelectionStrategy',
        'failed_on' => '\DateTime',
        'failed_url' => 'string',
        'failure_reason' => '\Wallee\Sdk\Model\FailureReason',
        'group' => '\Wallee\Sdk\Model\TransactionGroup',
        'id' => 'int',
        'internet_protocol_address' => 'string',
        'internet_protocol_address_country' => 'string',
        'invoice_merchant_reference' => 'string',
        'java_enabled' => 'bool',
        'language' => 'string',
        'line_items' => '\Wallee\Sdk\Model\LineItem[]',
        'linked_space_id' => 'int',
        'merchant_reference' => 'string',
        'meta_data' => 'map[string,string]',
        'parent' => 'int',
        'payment_connector_configuration' => '\Wallee\Sdk\Model\PaymentConnectorConfiguration',
        'planned_purge_date' => '\DateTime',
        'processing_on' => '\DateTime',
        'refunded_amount' => 'float',
        'screen_color_depth' => 'string',
        'screen_height' => 'string',
        'screen_width' => 'string',
        'shipping_address' => '\Wallee\Sdk\Model\Address',
        'shipping_method' => 'string',
        'space_view_id' => 'int',
        'state' => '\Wallee\Sdk\Model\TransactionState',
        'success_url' => 'string',
        'terminal' => '\Wallee\Sdk\Model\PaymentTerminal',
        'time_zone' => 'string',
        'token' => '\Wallee\Sdk\Model\Token',
        'tokenization_mode' => '\Wallee\Sdk\Model\TokenizationMode',
        'total_applied_fees' => 'float',
        'total_settled_amount' => 'float',
        'user_agent_header' => 'string',
        'user_failure_message' => 'string',
        'user_interface_type' => '\Wallee\Sdk\Model\TransactionUserInterfaceType',
        'version' => 'int',
        'window_height' => 'string',
        'window_width' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'accept_header' => null,
        'accept_language_header' => null,
        'allowed_payment_method_brands' => null,
        'allowed_payment_method_configurations' => 'int64',
        'authorization_amount' => null,
        'authorization_environment' => null,
        'authorization_sales_channel' => 'int64',
        'authorization_timeout_on' => 'date-time',
        'authorized_on' => 'date-time',
        'auto_confirmation_enabled' => null,
        'billing_address' => null,
        'charge_retry_enabled' => null,
        'completed_amount' => null,
        'completed_on' => 'date-time',
        'completion_behavior' => null,
        'completion_timeout_on' => 'date-time',
        'confirmed_by' => 'int64',
        'confirmed_on' => 'date-time',
        'created_by' => 'int64',
        'created_on' => 'date-time',
        'currency' => null,
        'customer_email_address' => null,
        'customer_id' => null,
        'customers_presence' => null,
        'delivery_decision_made_on' => 'date-time',
        'device_session_identifier' => null,
        'emails_disabled' => null,
        'end_of_life' => 'date-time',
        'environment' => null,
        'environment_selection_strategy' => null,
        'failed_on' => 'date-time',
        'failed_url' => null,
        'failure_reason' => null,
        'group' => null,
        'id' => 'int64',
        'internet_protocol_address' => null,
        'internet_protocol_address_country' => null,
        'invoice_merchant_reference' => null,
        'java_enabled' => null,
        'language' => null,
        'line_items' => null,
        'linked_space_id' => 'int64',
        'merchant_reference' => null,
        'meta_data' => null,
        'parent' => 'int64',
        'payment_connector_configuration' => null,
        'planned_purge_date' => 'date-time',
        'processing_on' => 'date-time',
        'refunded_amount' => null,
        'screen_color_depth' => null,
        'screen_height' => null,
        'screen_width' => null,
        'shipping_address' => null,
        'shipping_method' => null,
        'space_view_id' => 'int64',
        'state' => null,
        'success_url' => null,
        'terminal' => null,
        'time_zone' => null,
        'token' => null,
        'tokenization_mode' => null,
        'total_applied_fees' => null,
        'total_settled_amount' => null,
        'user_agent_header' => null,
        'user_failure_message' => null,
        'user_interface_type' => null,
        'version' => 'int32',
        'window_height' => null,
        'window_width' => null
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'accept_header' => 'acceptHeader',
        'accept_language_header' => 'acceptLanguageHeader',
        'allowed_payment_method_brands' => 'allowedPaymentMethodBrands',
        'allowed_payment_method_configurations' => 'allowedPaymentMethodConfigurations',
        'authorization_amount' => 'authorizationAmount',
        'authorization_environment' => 'authorizationEnvironment',
        'authorization_sales_channel' => 'authorizationSalesChannel',
        'authorization_timeout_on' => 'authorizationTimeoutOn',
        'authorized_on' => 'authorizedOn',
        'auto_confirmation_enabled' => 'autoConfirmationEnabled',
        'billing_address' => 'billingAddress',
        'charge_retry_enabled' => 'chargeRetryEnabled',
        'completed_amount' => 'completedAmount',
        'completed_on' => 'completedOn',
        'completion_behavior' => 'completionBehavior',
        'completion_timeout_on' => 'completionTimeoutOn',
        'confirmed_by' => 'confirmedBy',
        'confirmed_on' => 'confirmedOn',
        'created_by' => 'createdBy',
        'created_on' => 'createdOn',
        'currency' => 'currency',
        'customer_email_address' => 'customerEmailAddress',
        'customer_id' => 'customerId',
        'customers_presence' => 'customersPresence',
        'delivery_decision_made_on' => 'deliveryDecisionMadeOn',
        'device_session_identifier' => 'deviceSessionIdentifier',
        'emails_disabled' => 'emailsDisabled',
        'end_of_life' => 'endOfLife',
        'environment' => 'environment',
        'environment_selection_strategy' => 'environmentSelectionStrategy',
        'failed_on' => 'failedOn',
        'failed_url' => 'failedUrl',
        'failure_reason' => 'failureReason',
        'group' => 'group',
        'id' => 'id',
        'internet_protocol_address' => 'internetProtocolAddress',
        'internet_protocol_address_country' => 'internetProtocolAddressCountry',
        'invoice_merchant_reference' => 'invoiceMerchantReference',
        'java_enabled' => 'javaEnabled',
        'language' => 'language',
        'line_items' => 'lineItems',
        'linked_space_id' => 'linkedSpaceId',
        'merchant_reference' => 'merchantReference',
        'meta_data' => 'metaData',
        'parent' => 'parent',
        'payment_connector_configuration' => 'paymentConnectorConfiguration',
        'planned_purge_date' => 'plannedPurgeDate',
        'processing_on' => 'processingOn',
        'refunded_amount' => 'refundedAmount',
        'screen_color_depth' => 'screenColorDepth',
        'screen_height' => 'screenHeight',
        'screen_width' => 'screenWidth',
        'shipping_address' => 'shippingAddress',
        'shipping_method' => 'shippingMethod',
        'space_view_id' => 'spaceViewId',
        'state' => 'state',
        'success_url' => 'successUrl',
        'terminal' => 'terminal',
        'time_zone' => 'timeZone',
        'token' => 'token',
        'tokenization_mode' => 'tokenizationMode',
        'total_applied_fees' => 'totalAppliedFees',
        'total_settled_amount' => 'totalSettledAmount',
        'user_agent_header' => 'userAgentHeader',
        'user_failure_message' => 'userFailureMessage',
        'user_interface_type' => 'userInterfaceType',
        'version' => 'version',
        'window_height' => 'windowHeight',
        'window_width' => 'windowWidth'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accept_header' => 'setAcceptHeader',
        'accept_language_header' => 'setAcceptLanguageHeader',
        'allowed_payment_method_brands' => 'setAllowedPaymentMethodBrands',
        'allowed_payment_method_configurations' => 'setAllowedPaymentMethodConfigurations',
        'authorization_amount' => 'setAuthorizationAmount',
        'authorization_environment' => 'setAuthorizationEnvironment',
        'authorization_sales_channel' => 'setAuthorizationSalesChannel',
        'authorization_timeout_on' => 'setAuthorizationTimeoutOn',
        'authorized_on' => 'setAuthorizedOn',
        'auto_confirmation_enabled' => 'setAutoConfirmationEnabled',
        'billing_address' => 'setBillingAddress',
        'charge_retry_enabled' => 'setChargeRetryEnabled',
        'completed_amount' => 'setCompletedAmount',
        'completed_on' => 'setCompletedOn',
        'completion_behavior' => 'setCompletionBehavior',
        'completion_timeout_on' => 'setCompletionTimeoutOn',
        'confirmed_by' => 'setConfirmedBy',
        'confirmed_on' => 'setConfirmedOn',
        'created_by' => 'setCreatedBy',
        'created_on' => 'setCreatedOn',
        'currency' => 'setCurrency',
        'customer_email_address' => 'setCustomerEmailAddress',
        'customer_id' => 'setCustomerId',
        'customers_presence' => 'setCustomersPresence',
        'delivery_decision_made_on' => 'setDeliveryDecisionMadeOn',
        'device_session_identifier' => 'setDeviceSessionIdentifier',
        'emails_disabled' => 'setEmailsDisabled',
        'end_of_life' => 'setEndOfLife',
        'environment' => 'setEnvironment',
        'environment_selection_strategy' => 'setEnvironmentSelectionStrategy',
        'failed_on' => 'setFailedOn',
        'failed_url' => 'setFailedUrl',
        'failure_reason' => 'setFailureReason',
        'group' => 'setGroup',
        'id' => 'setId',
        'internet_protocol_address' => 'setInternetProtocolAddress',
        'internet_protocol_address_country' => 'setInternetProtocolAddressCountry',
        'invoice_merchant_reference' => 'setInvoiceMerchantReference',
        'java_enabled' => 'setJavaEnabled',
        'language' => 'setLanguage',
        'line_items' => 'setLineItems',
        'linked_space_id' => 'setLinkedSpaceId',
        'merchant_reference' => 'setMerchantReference',
        'meta_data' => 'setMetaData',
        'parent' => 'setParent',
        'payment_connector_configuration' => 'setPaymentConnectorConfiguration',
        'planned_purge_date' => 'setPlannedPurgeDate',
        'processing_on' => 'setProcessingOn',
        'refunded_amount' => 'setRefundedAmount',
        'screen_color_depth' => 'setScreenColorDepth',
        'screen_height' => 'setScreenHeight',
        'screen_width' => 'setScreenWidth',
        'shipping_address' => 'setShippingAddress',
        'shipping_method' => 'setShippingMethod',
        'space_view_id' => 'setSpaceViewId',
        'state' => 'setState',
        'success_url' => 'setSuccessUrl',
        'terminal' => 'setTerminal',
        'time_zone' => 'setTimeZone',
        'token' => 'setToken',
        'tokenization_mode' => 'setTokenizationMode',
        'total_applied_fees' => 'setTotalAppliedFees',
        'total_settled_amount' => 'setTotalSettledAmount',
        'user_agent_header' => 'setUserAgentHeader',
        'user_failure_message' => 'setUserFailureMessage',
        'user_interface_type' => 'setUserInterfaceType',
        'version' => 'setVersion',
        'window_height' => 'setWindowHeight',
        'window_width' => 'setWindowWidth'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accept_header' => 'getAcceptHeader',
        'accept_language_header' => 'getAcceptLanguageHeader',
        'allowed_payment_method_brands' => 'getAllowedPaymentMethodBrands',
        'allowed_payment_method_configurations' => 'getAllowedPaymentMethodConfigurations',
        'authorization_amount' => 'getAuthorizationAmount',
        'authorization_environment' => 'getAuthorizationEnvironment',
        'authorization_sales_channel' => 'getAuthorizationSalesChannel',
        'authorization_timeout_on' => 'getAuthorizationTimeoutOn',
        'authorized_on' => 'getAuthorizedOn',
        'auto_confirmation_enabled' => 'getAutoConfirmationEnabled',
        'billing_address' => 'getBillingAddress',
        'charge_retry_enabled' => 'getChargeRetryEnabled',
        'completed_amount' => 'getCompletedAmount',
        'completed_on' => 'getCompletedOn',
        'completion_behavior' => 'getCompletionBehavior',
        'completion_timeout_on' => 'getCompletionTimeoutOn',
        'confirmed_by' => 'getConfirmedBy',
        'confirmed_on' => 'getConfirmedOn',
        'created_by' => 'getCreatedBy',
        'created_on' => 'getCreatedOn',
        'currency' => 'getCurrency',
        'customer_email_address' => 'getCustomerEmailAddress',
        'customer_id' => 'getCustomerId',
        'customers_presence' => 'getCustomersPresence',
        'delivery_decision_made_on' => 'getDeliveryDecisionMadeOn',
        'device_session_identifier' => 'getDeviceSessionIdentifier',
        'emails_disabled' => 'getEmailsDisabled',
        'end_of_life' => 'getEndOfLife',
        'environment' => 'getEnvironment',
        'environment_selection_strategy' => 'getEnvironmentSelectionStrategy',
        'failed_on' => 'getFailedOn',
        'failed_url' => 'getFailedUrl',
        'failure_reason' => 'getFailureReason',
        'group' => 'getGroup',
        'id' => 'getId',
        'internet_protocol_address' => 'getInternetProtocolAddress',
        'internet_protocol_address_country' => 'getInternetProtocolAddressCountry',
        'invoice_merchant_reference' => 'getInvoiceMerchantReference',
        'java_enabled' => 'getJavaEnabled',
        'language' => 'getLanguage',
        'line_items' => 'getLineItems',
        'linked_space_id' => 'getLinkedSpaceId',
        'merchant_reference' => 'getMerchantReference',
        'meta_data' => 'getMetaData',
        'parent' => 'getParent',
        'payment_connector_configuration' => 'getPaymentConnectorConfiguration',
        'planned_purge_date' => 'getPlannedPurgeDate',
        'processing_on' => 'getProcessingOn',
        'refunded_amount' => 'getRefundedAmount',
        'screen_color_depth' => 'getScreenColorDepth',
        'screen_height' => 'getScreenHeight',
        'screen_width' => 'getScreenWidth',
        'shipping_address' => 'getShippingAddress',
        'shipping_method' => 'getShippingMethod',
        'space_view_id' => 'getSpaceViewId',
        'state' => 'getState',
        'success_url' => 'getSuccessUrl',
        'terminal' => 'getTerminal',
        'time_zone' => 'getTimeZone',
        'token' => 'getToken',
        'tokenization_mode' => 'getTokenizationMode',
        'total_applied_fees' => 'getTotalAppliedFees',
        'total_settled_amount' => 'getTotalSettledAmount',
        'user_agent_header' => 'getUserAgentHeader',
        'user_failure_message' => 'getUserFailureMessage',
        'user_interface_type' => 'getUserInterfaceType',
        'version' => 'getVersion',
        'window_height' => 'getWindowHeight',
        'window_width' => 'getWindowWidth'
    ];

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        
        $this->container['accept_header'] = isset($data['accept_header']) ? $data['accept_header'] : null;
        
        $this->container['accept_language_header'] = isset($data['accept_language_header']) ? $data['accept_language_header'] : null;
        
        $this->container['allowed_payment_method_brands'] = isset($data['allowed_payment_method_brands']) ? $data['allowed_payment_method_brands'] : null;
        
        $this->container['allowed_payment_method_configurations'] = isset($data['allowed_payment_method_configurations']) ? $data['allowed_payment_method_configurations'] : null;
        
        $this->container['authorization_amount'] = isset($data['authorization_amount']) ? $data['authorization_amount'] : null;
        
        $this->container['authorization_environment'] = isset($data['authorization_environment']) ? $data['authorization_environment'] : null;
        
        $this->container['authorization_sales_channel'] = isset($data['authorization_sales_channel']) ? $data['authorization_sales_channel'] : null;
        
        $this->container['authorization_timeout_on'] = isset($data['authorization_timeout_on']) ? $data['authorization_timeout_on'] : null;
        
        $this->container['authorized_on'] = isset($data['authorized_on']) ? $data['authorized_on'] : null;
        
        $this->container['auto_confirmation_enabled'] = isset($data['auto_confirmation_enabled']) ? $data['auto_confirmation_enabled'] : null;
        
        $this->container['billing_address'] = isset($data['billing_address']) ? $data['billing_address'] : null;
        
        $this->container['charge_retry_enabled'] = isset($data['charge_retry_enabled']) ? $data['charge_retry_enabled'] : null;
        
        $this->container['completed_amount'] = isset($data['completed_amount']) ? $data['completed_amount'] : null;
        
        $this->container['completed_on'] = isset($data['completed_on']) ? $data['completed_on'] : null;
        
        $this->container['completion_behavior'] = isset($data['completion_behavior']) ? $data['completion_behavior'] : null;
        
        $this->container['completion_timeout_on'] = isset($data['completion_timeout_on']) ? $data['completion_timeout_on'] : null;
        
        $this->container['confirmed_by'] = isset($data['confirmed_by']) ? $data['confirmed_by'] : null;
        
        $this->container['confirmed_on'] = isset($data['confirmed_on']) ? $data['confirmed_on'] : null;
        
        $this->container['created_by'] = isset($data['created_by']) ? $data['created_by'] : null;
        
        $this->container['created_on'] = isset($data['created_on']) ? $data['created_on'] : null;
        
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        
        $this->container['customer_email_address'] = isset($data['customer_email_address']) ? $data['customer_email_address'] : null;
        
        $this->container['customer_id'] = isset($data['customer_id']) ? $data['customer_id'] : null;
        
        $this->container['customers_presence'] = isset($data['customers_presence']) ? $data['customers_presence'] : null;
        
        $this->container['delivery_decision_made_on'] = isset($data['delivery_decision_made_on']) ? $data['delivery_decision_made_on'] : null;
        
        $this->container['device_session_identifier'] = isset($data['device_session_identifier']) ? $data['device_session_identifier'] : null;
        
        $this->container['emails_disabled'] = isset($data['emails_disabled']) ? $data['emails_disabled'] : null;
        
        $this->container['end_of_life'] = isset($data['end_of_life']) ? $data['end_of_life'] : null;
        
        $this->container['environment'] = isset($data['environment']) ? $data['environment'] : null;
        
        $this->container['environment_selection_strategy'] = isset($data['environment_selection_strategy']) ? $data['environment_selection_strategy'] : null;
        
        $this->container['failed_on'] = isset($data['failed_on']) ? $data['failed_on'] : null;
        
        $this->container['failed_url'] = isset($data['failed_url']) ? $data['failed_url'] : null;
        
        $this->container['failure_reason'] = isset($data['failure_reason']) ? $data['failure_reason'] : null;
        
        $this->container['group'] = isset($data['group']) ? $data['group'] : null;
        
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        
        $this->container['internet_protocol_address'] = isset($data['internet_protocol_address']) ? $data['internet_protocol_address'] : null;
        
        $this->container['internet_protocol_address_country'] = isset($data['internet_protocol_address_country']) ? $data['internet_protocol_address_country'] : null;
        
        $this->container['invoice_merchant_reference'] = isset($data['invoice_merchant_reference']) ? $data['invoice_merchant_reference'] : null;
        
        $this->container['java_enabled'] = isset($data['java_enabled']) ? $data['java_enabled'] : null;
        
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        
        $this->container['line_items'] = isset($data['line_items']) ? $data['line_items'] : null;
        
        $this->container['linked_space_id'] = isset($data['linked_space_id']) ? $data['linked_space_id'] : null;
        
        $this->container['merchant_reference'] = isset($data['merchant_reference']) ? $data['merchant_reference'] : null;
        
        $this->container['meta_data'] = isset($data['meta_data']) ? $data['meta_data'] : null;
        
        $this->container['parent'] = isset($data['parent']) ? $data['parent'] : null;
        
        $this->container['payment_connector_configuration'] = isset($data['payment_connector_configuration']) ? $data['payment_connector_configuration'] : null;
        
        $this->container['planned_purge_date'] = isset($data['planned_purge_date']) ? $data['planned_purge_date'] : null;
        
        $this->container['processing_on'] = isset($data['processing_on']) ? $data['processing_on'] : null;
        
        $this->container['refunded_amount'] = isset($data['refunded_amount']) ? $data['refunded_amount'] : null;
        
        $this->container['screen_color_depth'] = isset($data['screen_color_depth']) ? $data['screen_color_depth'] : null;
        
        $this->container['screen_height'] = isset($data['screen_height']) ? $data['screen_height'] : null;
        
        $this->container['screen_width'] = isset($data['screen_width']) ? $data['screen_width'] : null;
        
        $this->container['shipping_address'] = isset($data['shipping_address']) ? $data['shipping_address'] : null;
        
        $this->container['shipping_method'] = isset($data['shipping_method']) ? $data['shipping_method'] : null;
        
        $this->container['space_view_id'] = isset($data['space_view_id']) ? $data['space_view_id'] : null;
        
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        
        $this->container['success_url'] = isset($data['success_url']) ? $data['success_url'] : null;
        
        $this->container['terminal'] = isset($data['terminal']) ? $data['terminal'] : null;
        
        $this->container['time_zone'] = isset($data['time_zone']) ? $data['time_zone'] : null;
        
        $this->container['token'] = isset($data['token']) ? $data['token'] : null;
        
        $this->container['tokenization_mode'] = isset($data['tokenization_mode']) ? $data['tokenization_mode'] : null;
        
        $this->container['total_applied_fees'] = isset($data['total_applied_fees']) ? $data['total_applied_fees'] : null;
        
        $this->container['total_settled_amount'] = isset($data['total_settled_amount']) ? $data['total_settled_amount'] : null;
        
        $this->container['user_agent_header'] = isset($data['user_agent_header']) ? $data['user_agent_header'] : null;
        
        $this->container['user_failure_message'] = isset($data['user_failure_message']) ? $data['user_failure_message'] : null;
        
        $this->container['user_interface_type'] = isset($data['user_interface_type']) ? $data['user_interface_type'] : null;
        
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        
        $this->container['window_height'] = isset($data['window_height']) ? $data['window_height'] : null;
        
        $this->container['window_width'] = isset($data['window_width']) ? $data['window_width'] : null;
        
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['customer_email_address']) && (mb_strlen($this->container['customer_email_address']) > 254)) {
            $invalidProperties[] = "invalid value for 'customer_email_address', the character length must be smaller than or equal to 254.";
        }

        if (!is_null($this->container['device_session_identifier']) && (mb_strlen($this->container['device_session_identifier']) > 40)) {
            $invalidProperties[] = "invalid value for 'device_session_identifier', the character length must be smaller than or equal to 40.";
        }

        if (!is_null($this->container['device_session_identifier']) && (mb_strlen($this->container['device_session_identifier']) < 10)) {
            $invalidProperties[] = "invalid value for 'device_session_identifier', the character length must be bigger than or equal to 10.";
        }

        if (!is_null($this->container['failed_url']) && (mb_strlen($this->container['failed_url']) > 2000)) {
            $invalidProperties[] = "invalid value for 'failed_url', the character length must be smaller than or equal to 2000.";
        }

        if (!is_null($this->container['failed_url']) && (mb_strlen($this->container['failed_url']) < 9)) {
            $invalidProperties[] = "invalid value for 'failed_url', the character length must be bigger than or equal to 9.";
        }

        if (!is_null($this->container['invoice_merchant_reference']) && (mb_strlen($this->container['invoice_merchant_reference']) > 100)) {
            $invalidProperties[] = "invalid value for 'invoice_merchant_reference', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['merchant_reference']) && (mb_strlen($this->container['merchant_reference']) > 100)) {
            $invalidProperties[] = "invalid value for 'merchant_reference', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['shipping_method']) && (mb_strlen($this->container['shipping_method']) > 200)) {
            $invalidProperties[] = "invalid value for 'shipping_method', the character length must be smaller than or equal to 200.";
        }

        if (!is_null($this->container['success_url']) && (mb_strlen($this->container['success_url']) > 2000)) {
            $invalidProperties[] = "invalid value for 'success_url', the character length must be smaller than or equal to 2000.";
        }

        if (!is_null($this->container['success_url']) && (mb_strlen($this->container['success_url']) < 9)) {
            $invalidProperties[] = "invalid value for 'success_url', the character length must be bigger than or equal to 9.";
        }

        return $invalidProperties;
    }

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }


    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }

    

    /**
     * Gets accept_header
     *
     * @return string
     */
    public function getAcceptHeader()
    {
        return $this->container['accept_header'];
    }

    /**
     * Sets accept_header
     *
     * @param string $accept_header 
     *
     * @return $this
     */
    public function setAcceptHeader($accept_header)
    {
        $this->container['accept_header'] = $accept_header;

        return $this;
    }
    

    /**
     * Gets accept_language_header
     *
     * @return string
     */
    public function getAcceptLanguageHeader()
    {
        return $this->container['accept_language_header'];
    }

    /**
     * Sets accept_language_header
     *
     * @param string $accept_language_header The accept language contains the header which indicates the language preferences of the buyer.
     *
     * @return $this
     */
    public function setAcceptLanguageHeader($accept_language_header)
    {
        $this->container['accept_language_header'] = $accept_language_header;

        return $this;
    }
    

    /**
     * Gets allowed_payment_method_brands
     *
     * @return \Wallee\Sdk\Model\PaymentMethodBrand[]
     */
    public function getAllowedPaymentMethodBrands()
    {
        return $this->container['allowed_payment_method_brands'];
    }

    /**
     * Sets allowed_payment_method_brands
     *
     * @param \Wallee\Sdk\Model\PaymentMethodBrand[] $allowed_payment_method_brands 
     *
     * @return $this
     */
    public function setAllowedPaymentMethodBrands($allowed_payment_method_brands)
    {
        $this->container['allowed_payment_method_brands'] = $allowed_payment_method_brands;

        return $this;
    }
    

    /**
     * Gets allowed_payment_method_configurations
     *
     * @return int[]
     */
    public function getAllowedPaymentMethodConfigurations()
    {
        return $this->container['allowed_payment_method_configurations'];
    }

    /**
     * Sets allowed_payment_method_configurations
     *
     * @param int[] $allowed_payment_method_configurations 
     *
     * @return $this
     */
    public function setAllowedPaymentMethodConfigurations($allowed_payment_method_configurations)
    {
        $this->container['allowed_payment_method_configurations'] = $allowed_payment_method_configurations;

        return $this;
    }
    

    /**
     * Gets authorization_amount
     *
     * @return float
     */
    public function getAuthorizationAmount()
    {
        return $this->container['authorization_amount'];
    }

    /**
     * Sets authorization_amount
     *
     * @param float $authorization_amount 
     *
     * @return $this
     */
    public function setAuthorizationAmount($authorization_amount)
    {
        $this->container['authorization_amount'] = $authorization_amount;

        return $this;
    }
    

    /**
     * Gets authorization_environment
     *
     * @return \Wallee\Sdk\Model\ChargeAttemptEnvironment
     */
    public function getAuthorizationEnvironment()
    {
        return $this->container['authorization_environment'];
    }

    /**
     * Sets authorization_environment
     *
     * @param \Wallee\Sdk\Model\ChargeAttemptEnvironment $authorization_environment The environment in which this transaction was successfully authorized.
     *
     * @return $this
     */
    public function setAuthorizationEnvironment($authorization_environment)
    {
        $this->container['authorization_environment'] = $authorization_environment;

        return $this;
    }
    

    /**
     * Gets authorization_sales_channel
     *
     * @return int
     */
    public function getAuthorizationSalesChannel()
    {
        return $this->container['authorization_sales_channel'];
    }

    /**
     * Sets authorization_sales_channel
     *
     * @param int $authorization_sales_channel The sales channel through which the transaction was placed.
     *
     * @return $this
     */
    public function setAuthorizationSalesChannel($authorization_sales_channel)
    {
        $this->container['authorization_sales_channel'] = $authorization_sales_channel;

        return $this;
    }
    

    /**
     * Gets authorization_timeout_on
     *
     * @return \DateTime
     */
    public function getAuthorizationTimeoutOn()
    {
        return $this->container['authorization_timeout_on'];
    }

    /**
     * Sets authorization_timeout_on
     *
     * @param \DateTime $authorization_timeout_on This is the time on which the transaction will be timed out when it is not at least authorized. The timeout time may change over time.
     *
     * @return $this
     */
    public function setAuthorizationTimeoutOn($authorization_timeout_on)
    {
        $this->container['authorization_timeout_on'] = $authorization_timeout_on;

        return $this;
    }
    

    /**
     * Gets authorized_on
     *
     * @return \DateTime
     */
    public function getAuthorizedOn()
    {
        return $this->container['authorized_on'];
    }

    /**
     * Sets authorized_on
     *
     * @param \DateTime $authorized_on 
     *
     * @return $this
     */
    public function setAuthorizedOn($authorized_on)
    {
        $this->container['authorized_on'] = $authorized_on;

        return $this;
    }
    

    /**
     * Gets auto_confirmation_enabled
     *
     * @return bool
     */
    public function getAutoConfirmationEnabled()
    {
        return $this->container['auto_confirmation_enabled'];
    }

    /**
     * Sets auto_confirmation_enabled
     *
     * @param bool $auto_confirmation_enabled When auto confirmation is enabled the transaction can be confirmed by the user and does not require an explicit confirmation through the web service API.
     *
     * @return $this
     */
    public function setAutoConfirmationEnabled($auto_confirmation_enabled)
    {
        $this->container['auto_confirmation_enabled'] = $auto_confirmation_enabled;

        return $this;
    }
    

    /**
     * Gets billing_address
     *
     * @return \Wallee\Sdk\Model\Address
     */
    public function getBillingAddress()
    {
        return $this->container['billing_address'];
    }

    /**
     * Sets billing_address
     *
     * @param \Wallee\Sdk\Model\Address $billing_address 
     *
     * @return $this
     */
    public function setBillingAddress($billing_address)
    {
        $this->container['billing_address'] = $billing_address;

        return $this;
    }
    

    /**
     * Gets charge_retry_enabled
     *
     * @return bool
     */
    public function getChargeRetryEnabled()
    {
        return $this->container['charge_retry_enabled'];
    }

    /**
     * Sets charge_retry_enabled
     *
     * @param bool $charge_retry_enabled When the charging of the customer fails we can retry the charging. This implies that we redirect the user back to the payment page which allows the customer to retry. By default we will retry.
     *
     * @return $this
     */
    public function setChargeRetryEnabled($charge_retry_enabled)
    {
        $this->container['charge_retry_enabled'] = $charge_retry_enabled;

        return $this;
    }
    

    /**
     * Gets completed_amount
     *
     * @return float
     */
    public function getCompletedAmount()
    {
        return $this->container['completed_amount'];
    }

    /**
     * Sets completed_amount
     *
     * @param float $completed_amount The completed amount is the total amount which has been captured so far.
     *
     * @return $this
     */
    public function setCompletedAmount($completed_amount)
    {
        $this->container['completed_amount'] = $completed_amount;

        return $this;
    }
    

    /**
     * Gets completed_on
     *
     * @return \DateTime
     */
    public function getCompletedOn()
    {
        return $this->container['completed_on'];
    }

    /**
     * Sets completed_on
     *
     * @param \DateTime $completed_on 
     *
     * @return $this
     */
    public function setCompletedOn($completed_on)
    {
        $this->container['completed_on'] = $completed_on;

        return $this;
    }
    

    /**
     * Gets completion_behavior
     *
     * @return \Wallee\Sdk\Model\TransactionCompletionBehavior
     */
    public function getCompletionBehavior()
    {
        return $this->container['completion_behavior'];
    }

    /**
     * Sets completion_behavior
     *
     * @param \Wallee\Sdk\Model\TransactionCompletionBehavior $completion_behavior The completion behavior controls when the transaction is completed.
     *
     * @return $this
     */
    public function setCompletionBehavior($completion_behavior)
    {
        $this->container['completion_behavior'] = $completion_behavior;

        return $this;
    }
    

    /**
     * Gets completion_timeout_on
     *
     * @return \DateTime
     */
    public function getCompletionTimeoutOn()
    {
        return $this->container['completion_timeout_on'];
    }

    /**
     * Sets completion_timeout_on
     *
     * @param \DateTime $completion_timeout_on 
     *
     * @return $this
     */
    public function setCompletionTimeoutOn($completion_timeout_on)
    {
        $this->container['completion_timeout_on'] = $completion_timeout_on;

        return $this;
    }
    

    /**
     * Gets confirmed_by
     *
     * @return int
     */
    public function getConfirmedBy()
    {
        return $this->container['confirmed_by'];
    }

    /**
     * Sets confirmed_by
     *
     * @param int $confirmed_by 
     *
     * @return $this
     */
    public function setConfirmedBy($confirmed_by)
    {
        $this->container['confirmed_by'] = $confirmed_by;

        return $this;
    }
    

    /**
     * Gets confirmed_on
     *
     * @return \DateTime
     */
    public function getConfirmedOn()
    {
        return $this->container['confirmed_on'];
    }

    /**
     * Sets confirmed_on
     *
     * @param \DateTime $confirmed_on 
     *
     * @return $this
     */
    public function setConfirmedOn($confirmed_on)
    {
        $this->container['confirmed_on'] = $confirmed_on;

        return $this;
    }
    

    /**
     * Gets created_by
     *
     * @return int
     */
    public function getCreatedBy()
    {
        return $this->container['created_by'];
    }

    /**
     * Sets created_by
     *
     * @param int $created_by 
     *
     * @return $this
     */
    public function setCreatedBy($created_by)
    {
        $this->container['created_by'] = $created_by;

        return $this;
    }
    

    /**
     * Gets created_on
     *
     * @return \DateTime
     */
    public function getCreatedOn()
    {
        return $this->container['created_on'];
    }

    /**
     * Sets created_on
     *
     * @param \DateTime $created_on The created on date indicates the date on which the entity was stored into the database.
     *
     * @return $this
     */
    public function setCreatedOn($created_on)
    {
        $this->container['created_on'] = $created_on;

        return $this;
    }
    

    /**
     * Gets currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string $currency 
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }
    

    /**
     * Gets customer_email_address
     *
     * @return string
     */
    public function getCustomerEmailAddress()
    {
        return $this->container['customer_email_address'];
    }

    /**
     * Sets customer_email_address
     *
     * @param string $customer_email_address The customer email address is the email address of the customer. If no email address is provided on the shipping or billing address this address is used.
     *
     * @return $this
     */
    public function setCustomerEmailAddress($customer_email_address)
    {
        if (!is_null($customer_email_address) && (mb_strlen($customer_email_address) > 254)) {
            throw new \InvalidArgumentException('invalid length for $customer_email_address when calling Transaction., must be smaller than or equal to 254.');
        }

        $this->container['customer_email_address'] = $customer_email_address;

        return $this;
    }
    

    /**
     * Gets customer_id
     *
     * @return string
     */
    public function getCustomerId()
    {
        return $this->container['customer_id'];
    }

    /**
     * Sets customer_id
     *
     * @param string $customer_id 
     *
     * @return $this
     */
    public function setCustomerId($customer_id)
    {
        $this->container['customer_id'] = $customer_id;

        return $this;
    }
    

    /**
     * Gets customers_presence
     *
     * @return \Wallee\Sdk\Model\CustomersPresence
     */
    public function getCustomersPresence()
    {
        return $this->container['customers_presence'];
    }

    /**
     * Sets customers_presence
     *
     * @param \Wallee\Sdk\Model\CustomersPresence $customers_presence The customer's presence indicates what kind of authentication methods can be used during the authorization of the transaction. If no value is provided, 'Virtually Present' is used by default.
     *
     * @return $this
     */
    public function setCustomersPresence($customers_presence)
    {
        $this->container['customers_presence'] = $customers_presence;

        return $this;
    }
    

    /**
     * Gets delivery_decision_made_on
     *
     * @return \DateTime
     */
    public function getDeliveryDecisionMadeOn()
    {
        return $this->container['delivery_decision_made_on'];
    }

    /**
     * Sets delivery_decision_made_on
     *
     * @param \DateTime $delivery_decision_made_on This date indicates when the decision has been made if a transaction should be delivered or not.
     *
     * @return $this
     */
    public function setDeliveryDecisionMadeOn($delivery_decision_made_on)
    {
        $this->container['delivery_decision_made_on'] = $delivery_decision_made_on;

        return $this;
    }
    

    /**
     * Gets device_session_identifier
     *
     * @return string
     */
    public function getDeviceSessionIdentifier()
    {
        return $this->container['device_session_identifier'];
    }

    /**
     * Sets device_session_identifier
     *
     * @param string $device_session_identifier The device session identifier links the transaction with the session identifier provided in the URL of the device data JavaScript. This allows to link the transaction with the collected device data of the buyer.
     *
     * @return $this
     */
    public function setDeviceSessionIdentifier($device_session_identifier)
    {
        if (!is_null($device_session_identifier) && (mb_strlen($device_session_identifier) > 40)) {
            throw new \InvalidArgumentException('invalid length for $device_session_identifier when calling Transaction., must be smaller than or equal to 40.');
        }
        if (!is_null($device_session_identifier) && (mb_strlen($device_session_identifier) < 10)) {
            throw new \InvalidArgumentException('invalid length for $device_session_identifier when calling Transaction., must be bigger than or equal to 10.');
        }

        $this->container['device_session_identifier'] = $device_session_identifier;

        return $this;
    }
    

    /**
     * Gets emails_disabled
     *
     * @return bool
     */
    public function getEmailsDisabled()
    {
        return $this->container['emails_disabled'];
    }

    /**
     * Sets emails_disabled
     *
     * @param bool $emails_disabled Flag indicating whether email sending is disabled for this particular transaction. Defaults to false.
     *
     * @return $this
     */
    public function setEmailsDisabled($emails_disabled)
    {
        $this->container['emails_disabled'] = $emails_disabled;

        return $this;
    }
    

    /**
     * Gets end_of_life
     *
     * @return \DateTime
     */
    public function getEndOfLife()
    {
        return $this->container['end_of_life'];
    }

    /**
     * Sets end_of_life
     *
     * @param \DateTime $end_of_life The transaction's end of life indicates the date from which on no operation can be carried out anymore.
     *
     * @return $this
     */
    public function setEndOfLife($end_of_life)
    {
        $this->container['end_of_life'] = $end_of_life;

        return $this;
    }
    

    /**
     * Gets environment
     *
     * @return \Wallee\Sdk\Model\Environment
     */
    public function getEnvironment()
    {
        return $this->container['environment'];
    }

    /**
     * Sets environment
     *
     * @param \Wallee\Sdk\Model\Environment $environment 
     *
     * @return $this
     */
    public function setEnvironment($environment)
    {
        $this->container['environment'] = $environment;

        return $this;
    }
    

    /**
     * Gets environment_selection_strategy
     *
     * @return \Wallee\Sdk\Model\TransactionEnvironmentSelectionStrategy
     */
    public function getEnvironmentSelectionStrategy()
    {
        return $this->container['environment_selection_strategy'];
    }

    /**
     * Sets environment_selection_strategy
     *
     * @param \Wallee\Sdk\Model\TransactionEnvironmentSelectionStrategy $environment_selection_strategy The environment selection strategy determines how the environment (test or production) for processing the transaction is selected.
     *
     * @return $this
     */
    public function setEnvironmentSelectionStrategy($environment_selection_strategy)
    {
        $this->container['environment_selection_strategy'] = $environment_selection_strategy;

        return $this;
    }
    

    /**
     * Gets failed_on
     *
     * @return \DateTime
     */
    public function getFailedOn()
    {
        return $this->container['failed_on'];
    }

    /**
     * Sets failed_on
     *
     * @param \DateTime $failed_on 
     *
     * @return $this
     */
    public function setFailedOn($failed_on)
    {
        $this->container['failed_on'] = $failed_on;

        return $this;
    }
    

    /**
     * Gets failed_url
     *
     * @return string
     */
    public function getFailedUrl()
    {
        return $this->container['failed_url'];
    }

    /**
     * Sets failed_url
     *
     * @param string $failed_url The user will be redirected to failed URL when the transaction could not be authorized or completed. In case no failed URL is specified a default failed page will be displayed.
     *
     * @return $this
     */
    public function setFailedUrl($failed_url)
    {
        if (!is_null($failed_url) && (mb_strlen($failed_url) > 2000)) {
            throw new \InvalidArgumentException('invalid length for $failed_url when calling Transaction., must be smaller than or equal to 2000.');
        }
        if (!is_null($failed_url) && (mb_strlen($failed_url) < 9)) {
            throw new \InvalidArgumentException('invalid length for $failed_url when calling Transaction., must be bigger than or equal to 9.');
        }

        $this->container['failed_url'] = $failed_url;

        return $this;
    }
    

    /**
     * Gets failure_reason
     *
     * @return \Wallee\Sdk\Model\FailureReason
     */
    public function getFailureReason()
    {
        return $this->container['failure_reason'];
    }

    /**
     * Sets failure_reason
     *
     * @param \Wallee\Sdk\Model\FailureReason $failure_reason The failure reason describes why the transaction failed. This is only provided when the transaction is marked as failed.
     *
     * @return $this
     */
    public function setFailureReason($failure_reason)
    {
        $this->container['failure_reason'] = $failure_reason;

        return $this;
    }
    

    /**
     * Gets group
     *
     * @return \Wallee\Sdk\Model\TransactionGroup
     */
    public function getGroup()
    {
        return $this->container['group'];
    }

    /**
     * Sets group
     *
     * @param \Wallee\Sdk\Model\TransactionGroup $group 
     *
     * @return $this
     */
    public function setGroup($group)
    {
        $this->container['group'] = $group;

        return $this;
    }
    

    /**
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id The ID is the primary key of the entity. The ID identifies the entity uniquely.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }
    

    /**
     * Gets internet_protocol_address
     *
     * @return string
     */
    public function getInternetProtocolAddress()
    {
        return $this->container['internet_protocol_address'];
    }

    /**
     * Sets internet_protocol_address
     *
     * @param string $internet_protocol_address The Internet Protocol (IP) address identifies the device of the buyer.
     *
     * @return $this
     */
    public function setInternetProtocolAddress($internet_protocol_address)
    {
        $this->container['internet_protocol_address'] = $internet_protocol_address;

        return $this;
    }
    

    /**
     * Gets internet_protocol_address_country
     *
     * @return string
     */
    public function getInternetProtocolAddressCountry()
    {
        return $this->container['internet_protocol_address_country'];
    }

    /**
     * Sets internet_protocol_address_country
     *
     * @param string $internet_protocol_address_country 
     *
     * @return $this
     */
    public function setInternetProtocolAddressCountry($internet_protocol_address_country)
    {
        $this->container['internet_protocol_address_country'] = $internet_protocol_address_country;

        return $this;
    }
    

    /**
     * Gets invoice_merchant_reference
     *
     * @return string
     */
    public function getInvoiceMerchantReference()
    {
        return $this->container['invoice_merchant_reference'];
    }

    /**
     * Sets invoice_merchant_reference
     *
     * @param string $invoice_merchant_reference 
     *
     * @return $this
     */
    public function setInvoiceMerchantReference($invoice_merchant_reference)
    {
        if (!is_null($invoice_merchant_reference) && (mb_strlen($invoice_merchant_reference) > 100)) {
            throw new \InvalidArgumentException('invalid length for $invoice_merchant_reference when calling Transaction., must be smaller than or equal to 100.');
        }

        $this->container['invoice_merchant_reference'] = $invoice_merchant_reference;

        return $this;
    }
    

    /**
     * Gets java_enabled
     *
     * @return bool
     */
    public function getJavaEnabled()
    {
        return $this->container['java_enabled'];
    }

    /**
     * Sets java_enabled
     *
     * @param bool $java_enabled 
     *
     * @return $this
     */
    public function setJavaEnabled($java_enabled)
    {
        $this->container['java_enabled'] = $java_enabled;

        return $this;
    }
    

    /**
     * Gets language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param string $language 
     *
     * @return $this
     */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;

        return $this;
    }
    

    /**
     * Gets line_items
     *
     * @return \Wallee\Sdk\Model\LineItem[]
     */
    public function getLineItems()
    {
        return $this->container['line_items'];
    }

    /**
     * Sets line_items
     *
     * @param \Wallee\Sdk\Model\LineItem[] $line_items 
     *
     * @return $this
     */
    public function setLineItems($line_items)
    {
        $this->container['line_items'] = $line_items;

        return $this;
    }
    

    /**
     * Gets linked_space_id
     *
     * @return int
     */
    public function getLinkedSpaceId()
    {
        return $this->container['linked_space_id'];
    }

    /**
     * Sets linked_space_id
     *
     * @param int $linked_space_id The linked space id holds the ID of the space to which the entity belongs to.
     *
     * @return $this
     */
    public function setLinkedSpaceId($linked_space_id)
    {
        $this->container['linked_space_id'] = $linked_space_id;

        return $this;
    }
    

    /**
     * Gets merchant_reference
     *
     * @return string
     */
    public function getMerchantReference()
    {
        return $this->container['merchant_reference'];
    }

    /**
     * Sets merchant_reference
     *
     * @param string $merchant_reference 
     *
     * @return $this
     */
    public function setMerchantReference($merchant_reference)
    {
        if (!is_null($merchant_reference) && (mb_strlen($merchant_reference) > 100)) {
            throw new \InvalidArgumentException('invalid length for $merchant_reference when calling Transaction., must be smaller than or equal to 100.');
        }

        $this->container['merchant_reference'] = $merchant_reference;

        return $this;
    }
    

    /**
     * Gets meta_data
     *
     * @return map[string,string]
     */
    public function getMetaData()
    {
        return $this->container['meta_data'];
    }

    /**
     * Sets meta_data
     *
     * @param map[string,string] $meta_data Meta data allow to store additional data along the object.
     *
     * @return $this
     */
    public function setMetaData($meta_data)
    {
        $this->container['meta_data'] = $meta_data;

        return $this;
    }
    

    /**
     * Gets parent
     *
     * @return int
     */
    public function getParent()
    {
        return $this->container['parent'];
    }

    /**
     * Sets parent
     *
     * @param int $parent 
     *
     * @return $this
     */
    public function setParent($parent)
    {
        $this->container['parent'] = $parent;

        return $this;
    }
    

    /**
     * Gets payment_connector_configuration
     *
     * @return \Wallee\Sdk\Model\PaymentConnectorConfiguration
     */
    public function getPaymentConnectorConfiguration()
    {
        return $this->container['payment_connector_configuration'];
    }

    /**
     * Sets payment_connector_configuration
     *
     * @param \Wallee\Sdk\Model\PaymentConnectorConfiguration $payment_connector_configuration 
     *
     * @return $this
     */
    public function setPaymentConnectorConfiguration($payment_connector_configuration)
    {
        $this->container['payment_connector_configuration'] = $payment_connector_configuration;

        return $this;
    }
    

    /**
     * Gets planned_purge_date
     *
     * @return \DateTime
     */
    public function getPlannedPurgeDate()
    {
        return $this->container['planned_purge_date'];
    }

    /**
     * Sets planned_purge_date
     *
     * @param \DateTime $planned_purge_date The planned purge date indicates when the entity is permanently removed. When the date is null the entity is not planned to be removed.
     *
     * @return $this
     */
    public function setPlannedPurgeDate($planned_purge_date)
    {
        $this->container['planned_purge_date'] = $planned_purge_date;

        return $this;
    }
    

    /**
     * Gets processing_on
     *
     * @return \DateTime
     */
    public function getProcessingOn()
    {
        return $this->container['processing_on'];
    }

    /**
     * Sets processing_on
     *
     * @param \DateTime $processing_on 
     *
     * @return $this
     */
    public function setProcessingOn($processing_on)
    {
        $this->container['processing_on'] = $processing_on;

        return $this;
    }
    

    /**
     * Gets refunded_amount
     *
     * @return float
     */
    public function getRefundedAmount()
    {
        return $this->container['refunded_amount'];
    }

    /**
     * Sets refunded_amount
     *
     * @param float $refunded_amount The refunded amount is the total amount which has been refunded so far.
     *
     * @return $this
     */
    public function setRefundedAmount($refunded_amount)
    {
        $this->container['refunded_amount'] = $refunded_amount;

        return $this;
    }
    

    /**
     * Gets screen_color_depth
     *
     * @return string
     */
    public function getScreenColorDepth()
    {
        return $this->container['screen_color_depth'];
    }

    /**
     * Sets screen_color_depth
     *
     * @param string $screen_color_depth 
     *
     * @return $this
     */
    public function setScreenColorDepth($screen_color_depth)
    {
        $this->container['screen_color_depth'] = $screen_color_depth;

        return $this;
    }
    

    /**
     * Gets screen_height
     *
     * @return string
     */
    public function getScreenHeight()
    {
        return $this->container['screen_height'];
    }

    /**
     * Sets screen_height
     *
     * @param string $screen_height 
     *
     * @return $this
     */
    public function setScreenHeight($screen_height)
    {
        $this->container['screen_height'] = $screen_height;

        return $this;
    }
    

    /**
     * Gets screen_width
     *
     * @return string
     */
    public function getScreenWidth()
    {
        return $this->container['screen_width'];
    }

    /**
     * Sets screen_width
     *
     * @param string $screen_width 
     *
     * @return $this
     */
    public function setScreenWidth($screen_width)
    {
        $this->container['screen_width'] = $screen_width;

        return $this;
    }
    

    /**
     * Gets shipping_address
     *
     * @return \Wallee\Sdk\Model\Address
     */
    public function getShippingAddress()
    {
        return $this->container['shipping_address'];
    }

    /**
     * Sets shipping_address
     *
     * @param \Wallee\Sdk\Model\Address $shipping_address 
     *
     * @return $this
     */
    public function setShippingAddress($shipping_address)
    {
        $this->container['shipping_address'] = $shipping_address;

        return $this;
    }
    

    /**
     * Gets shipping_method
     *
     * @return string
     */
    public function getShippingMethod()
    {
        return $this->container['shipping_method'];
    }

    /**
     * Sets shipping_method
     *
     * @param string $shipping_method 
     *
     * @return $this
     */
    public function setShippingMethod($shipping_method)
    {
        if (!is_null($shipping_method) && (mb_strlen($shipping_method) > 200)) {
            throw new \InvalidArgumentException('invalid length for $shipping_method when calling Transaction., must be smaller than or equal to 200.');
        }

        $this->container['shipping_method'] = $shipping_method;

        return $this;
    }
    

    /**
     * Gets space_view_id
     *
     * @return int
     */
    public function getSpaceViewId()
    {
        return $this->container['space_view_id'];
    }

    /**
     * Sets space_view_id
     *
     * @param int $space_view_id 
     *
     * @return $this
     */
    public function setSpaceViewId($space_view_id)
    {
        $this->container['space_view_id'] = $space_view_id;

        return $this;
    }
    

    /**
     * Gets state
     *
     * @return \Wallee\Sdk\Model\TransactionState
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param \Wallee\Sdk\Model\TransactionState $state 
     *
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }
    

    /**
     * Gets success_url
     *
     * @return string
     */
    public function getSuccessUrl()
    {
        return $this->container['success_url'];
    }

    /**
     * Sets success_url
     *
     * @param string $success_url The user will be redirected to success URL when the transaction could be authorized or completed. In case no success URL is specified a default success page will be displayed.
     *
     * @return $this
     */
    public function setSuccessUrl($success_url)
    {
        if (!is_null($success_url) && (mb_strlen($success_url) > 2000)) {
            throw new \InvalidArgumentException('invalid length for $success_url when calling Transaction., must be smaller than or equal to 2000.');
        }
        if (!is_null($success_url) && (mb_strlen($success_url) < 9)) {
            throw new \InvalidArgumentException('invalid length for $success_url when calling Transaction., must be bigger than or equal to 9.');
        }

        $this->container['success_url'] = $success_url;

        return $this;
    }
    

    /**
     * Gets terminal
     *
     * @return \Wallee\Sdk\Model\PaymentTerminal
     */
    public function getTerminal()
    {
        return $this->container['terminal'];
    }

    /**
     * Sets terminal
     *
     * @param \Wallee\Sdk\Model\PaymentTerminal $terminal The terminal on which the payment was processed.
     *
     * @return $this
     */
    public function setTerminal($terminal)
    {
        $this->container['terminal'] = $terminal;

        return $this;
    }
    

    /**
     * Gets time_zone
     *
     * @return string
     */
    public function getTimeZone()
    {
        return $this->container['time_zone'];
    }

    /**
     * Sets time_zone
     *
     * @param string $time_zone The time zone defines in which time zone the customer is located in. The time zone may affects how dates are formatted when interacting with the customer.
     *
     * @return $this
     */
    public function setTimeZone($time_zone)
    {
        $this->container['time_zone'] = $time_zone;

        return $this;
    }
    

    /**
     * Gets token
     *
     * @return \Wallee\Sdk\Model\Token
     */
    public function getToken()
    {
        return $this->container['token'];
    }

    /**
     * Sets token
     *
     * @param \Wallee\Sdk\Model\Token $token 
     *
     * @return $this
     */
    public function setToken($token)
    {
        $this->container['token'] = $token;

        return $this;
    }
    

    /**
     * Gets tokenization_mode
     *
     * @return \Wallee\Sdk\Model\TokenizationMode
     */
    public function getTokenizationMode()
    {
        return $this->container['tokenization_mode'];
    }

    /**
     * Sets tokenization_mode
     *
     * @param \Wallee\Sdk\Model\TokenizationMode $tokenization_mode The tokenization mode controls if and how the tokenization of payment information is applied to the transaction.
     *
     * @return $this
     */
    public function setTokenizationMode($tokenization_mode)
    {
        $this->container['tokenization_mode'] = $tokenization_mode;

        return $this;
    }
    

    /**
     * Gets total_applied_fees
     *
     * @return float
     */
    public function getTotalAppliedFees()
    {
        return $this->container['total_applied_fees'];
    }

    /**
     * Sets total_applied_fees
     *
     * @param float $total_applied_fees The total applied fees is the sum of all fees that have been applied so far.
     *
     * @return $this
     */
    public function setTotalAppliedFees($total_applied_fees)
    {
        $this->container['total_applied_fees'] = $total_applied_fees;

        return $this;
    }
    

    /**
     * Gets total_settled_amount
     *
     * @return float
     */
    public function getTotalSettledAmount()
    {
        return $this->container['total_settled_amount'];
    }

    /**
     * Sets total_settled_amount
     *
     * @param float $total_settled_amount The total settled amount is the total amount which has been settled so far.
     *
     * @return $this
     */
    public function setTotalSettledAmount($total_settled_amount)
    {
        $this->container['total_settled_amount'] = $total_settled_amount;

        return $this;
    }
    

    /**
     * Gets user_agent_header
     *
     * @return string
     */
    public function getUserAgentHeader()
    {
        return $this->container['user_agent_header'];
    }

    /**
     * Sets user_agent_header
     *
     * @param string $user_agent_header The user agent header provides the exact string which contains the user agent of the buyer.
     *
     * @return $this
     */
    public function setUserAgentHeader($user_agent_header)
    {
        $this->container['user_agent_header'] = $user_agent_header;

        return $this;
    }
    

    /**
     * Gets user_failure_message
     *
     * @return string
     */
    public function getUserFailureMessage()
    {
        return $this->container['user_failure_message'];
    }

    /**
     * Sets user_failure_message
     *
     * @param string $user_failure_message The failure message describes for an end user why the transaction is failed in the language of the user. This is only provided when the transaction is marked as failed.
     *
     * @return $this
     */
    public function setUserFailureMessage($user_failure_message)
    {
        $this->container['user_failure_message'] = $user_failure_message;

        return $this;
    }
    

    /**
     * Gets user_interface_type
     *
     * @return \Wallee\Sdk\Model\TransactionUserInterfaceType
     */
    public function getUserInterfaceType()
    {
        return $this->container['user_interface_type'];
    }

    /**
     * Sets user_interface_type
     *
     * @param \Wallee\Sdk\Model\TransactionUserInterfaceType $user_interface_type The user interface type defines through which user interface the transaction has been processed resp. created.
     *
     * @return $this
     */
    public function setUserInterfaceType($user_interface_type)
    {
        $this->container['user_interface_type'] = $user_interface_type;

        return $this;
    }
    

    /**
     * Gets version
     *
     * @return int
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param int $version The version number indicates the version of the entity. The version is incremented whenever the entity is changed.
     *
     * @return $this
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

        return $this;
    }
    

    /**
     * Gets window_height
     *
     * @return string
     */
    public function getWindowHeight()
    {
        return $this->container['window_height'];
    }

    /**
     * Sets window_height
     *
     * @param string $window_height 
     *
     * @return $this
     */
    public function setWindowHeight($window_height)
    {
        $this->container['window_height'] = $window_height;

        return $this;
    }
    

    /**
     * Gets window_width
     *
     * @return string
     */
    public function getWindowWidth()
    {
        return $this->container['window_width'];
    }

    /**
     * Sets window_width
     *
     * @param string $window_width 
     *
     * @return $this
     */
    public function setWindowWidth($window_width)
    {
        $this->container['window_width'] = $window_width;

        return $this;
    }
    
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


