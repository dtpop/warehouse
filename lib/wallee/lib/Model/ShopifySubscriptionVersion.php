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
 * ShopifySubscriptionVersion model
 *
 * @category    Class
 * @description 
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class ShopifySubscriptionVersion implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ShopifySubscriptionVersion';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'billing_address' => '\Wallee\Sdk\Model\ShopifySubscriptionAddress',
        'billing_day_of_month' => 'int',
        'billing_interval_amount' => 'int',
        'billing_interval_unit' => '\Wallee\Sdk\Model\ShopifySubscriptionBillingIntervalUnit',
        'billing_reference_date' => '\DateTime',
        'billing_weekday' => '\Wallee\Sdk\Model\ShopifySubscriptionWeekday',
        'created_by' => 'int',
        'created_on' => '\DateTime',
        'currency' => 'string',
        'discharged_by' => 'int',
        'discharged_on' => '\DateTime',
        'id' => 'int',
        'items' => '\Wallee\Sdk\Model\ShopifySubscriptionVersionItem[]',
        'linked_space_id' => 'int',
        'maximal_billing_cycles' => 'int',
        'maximal_suspendable_cycles' => 'int',
        'minimal_billing_cycles' => 'int',
        'payment_gateway' => 'string',
        'shipping_address' => '\Wallee\Sdk\Model\ShopifySubscriptionAddress',
        'shipping_rate' => 'string',
        'shop' => 'int',
        'state' => '\Wallee\Sdk\Model\ShopifySubscriptionVersionState',
        'store_order_confirmation_email_enabled' => 'bool',
        'subscriber_suspension_allowed' => 'bool',
        'subscription' => '\Wallee\Sdk\Model\ShopifySubscription',
        'termination_billing_cycles' => 'int',
        'token' => 'int',
        'version' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'billing_address' => null,
        'billing_day_of_month' => 'int32',
        'billing_interval_amount' => 'int32',
        'billing_interval_unit' => null,
        'billing_reference_date' => 'date-time',
        'billing_weekday' => null,
        'created_by' => 'int64',
        'created_on' => 'date-time',
        'currency' => null,
        'discharged_by' => 'int64',
        'discharged_on' => 'date-time',
        'id' => 'int64',
        'items' => null,
        'linked_space_id' => 'int64',
        'maximal_billing_cycles' => 'int32',
        'maximal_suspendable_cycles' => 'int32',
        'minimal_billing_cycles' => 'int32',
        'payment_gateway' => null,
        'shipping_address' => null,
        'shipping_rate' => null,
        'shop' => 'int64',
        'state' => null,
        'store_order_confirmation_email_enabled' => null,
        'subscriber_suspension_allowed' => null,
        'subscription' => null,
        'termination_billing_cycles' => 'int32',
        'token' => 'int64',
        'version' => 'int32'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'billing_address' => 'billingAddress',
        'billing_day_of_month' => 'billingDayOfMonth',
        'billing_interval_amount' => 'billingIntervalAmount',
        'billing_interval_unit' => 'billingIntervalUnit',
        'billing_reference_date' => 'billingReferenceDate',
        'billing_weekday' => 'billingWeekday',
        'created_by' => 'createdBy',
        'created_on' => 'createdOn',
        'currency' => 'currency',
        'discharged_by' => 'dischargedBy',
        'discharged_on' => 'dischargedOn',
        'id' => 'id',
        'items' => 'items',
        'linked_space_id' => 'linkedSpaceId',
        'maximal_billing_cycles' => 'maximalBillingCycles',
        'maximal_suspendable_cycles' => 'maximalSuspendableCycles',
        'minimal_billing_cycles' => 'minimalBillingCycles',
        'payment_gateway' => 'paymentGateway',
        'shipping_address' => 'shippingAddress',
        'shipping_rate' => 'shippingRate',
        'shop' => 'shop',
        'state' => 'state',
        'store_order_confirmation_email_enabled' => 'storeOrderConfirmationEmailEnabled',
        'subscriber_suspension_allowed' => 'subscriberSuspensionAllowed',
        'subscription' => 'subscription',
        'termination_billing_cycles' => 'terminationBillingCycles',
        'token' => 'token',
        'version' => 'version'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'billing_address' => 'setBillingAddress',
        'billing_day_of_month' => 'setBillingDayOfMonth',
        'billing_interval_amount' => 'setBillingIntervalAmount',
        'billing_interval_unit' => 'setBillingIntervalUnit',
        'billing_reference_date' => 'setBillingReferenceDate',
        'billing_weekday' => 'setBillingWeekday',
        'created_by' => 'setCreatedBy',
        'created_on' => 'setCreatedOn',
        'currency' => 'setCurrency',
        'discharged_by' => 'setDischargedBy',
        'discharged_on' => 'setDischargedOn',
        'id' => 'setId',
        'items' => 'setItems',
        'linked_space_id' => 'setLinkedSpaceId',
        'maximal_billing_cycles' => 'setMaximalBillingCycles',
        'maximal_suspendable_cycles' => 'setMaximalSuspendableCycles',
        'minimal_billing_cycles' => 'setMinimalBillingCycles',
        'payment_gateway' => 'setPaymentGateway',
        'shipping_address' => 'setShippingAddress',
        'shipping_rate' => 'setShippingRate',
        'shop' => 'setShop',
        'state' => 'setState',
        'store_order_confirmation_email_enabled' => 'setStoreOrderConfirmationEmailEnabled',
        'subscriber_suspension_allowed' => 'setSubscriberSuspensionAllowed',
        'subscription' => 'setSubscription',
        'termination_billing_cycles' => 'setTerminationBillingCycles',
        'token' => 'setToken',
        'version' => 'setVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'billing_address' => 'getBillingAddress',
        'billing_day_of_month' => 'getBillingDayOfMonth',
        'billing_interval_amount' => 'getBillingIntervalAmount',
        'billing_interval_unit' => 'getBillingIntervalUnit',
        'billing_reference_date' => 'getBillingReferenceDate',
        'billing_weekday' => 'getBillingWeekday',
        'created_by' => 'getCreatedBy',
        'created_on' => 'getCreatedOn',
        'currency' => 'getCurrency',
        'discharged_by' => 'getDischargedBy',
        'discharged_on' => 'getDischargedOn',
        'id' => 'getId',
        'items' => 'getItems',
        'linked_space_id' => 'getLinkedSpaceId',
        'maximal_billing_cycles' => 'getMaximalBillingCycles',
        'maximal_suspendable_cycles' => 'getMaximalSuspendableCycles',
        'minimal_billing_cycles' => 'getMinimalBillingCycles',
        'payment_gateway' => 'getPaymentGateway',
        'shipping_address' => 'getShippingAddress',
        'shipping_rate' => 'getShippingRate',
        'shop' => 'getShop',
        'state' => 'getState',
        'store_order_confirmation_email_enabled' => 'getStoreOrderConfirmationEmailEnabled',
        'subscriber_suspension_allowed' => 'getSubscriberSuspensionAllowed',
        'subscription' => 'getSubscription',
        'termination_billing_cycles' => 'getTerminationBillingCycles',
        'token' => 'getToken',
        'version' => 'getVersion'
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
        
        $this->container['billing_address'] = isset($data['billing_address']) ? $data['billing_address'] : null;
        
        $this->container['billing_day_of_month'] = isset($data['billing_day_of_month']) ? $data['billing_day_of_month'] : null;
        
        $this->container['billing_interval_amount'] = isset($data['billing_interval_amount']) ? $data['billing_interval_amount'] : null;
        
        $this->container['billing_interval_unit'] = isset($data['billing_interval_unit']) ? $data['billing_interval_unit'] : null;
        
        $this->container['billing_reference_date'] = isset($data['billing_reference_date']) ? $data['billing_reference_date'] : null;
        
        $this->container['billing_weekday'] = isset($data['billing_weekday']) ? $data['billing_weekday'] : null;
        
        $this->container['created_by'] = isset($data['created_by']) ? $data['created_by'] : null;
        
        $this->container['created_on'] = isset($data['created_on']) ? $data['created_on'] : null;
        
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        
        $this->container['discharged_by'] = isset($data['discharged_by']) ? $data['discharged_by'] : null;
        
        $this->container['discharged_on'] = isset($data['discharged_on']) ? $data['discharged_on'] : null;
        
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        
        $this->container['items'] = isset($data['items']) ? $data['items'] : null;
        
        $this->container['linked_space_id'] = isset($data['linked_space_id']) ? $data['linked_space_id'] : null;
        
        $this->container['maximal_billing_cycles'] = isset($data['maximal_billing_cycles']) ? $data['maximal_billing_cycles'] : null;
        
        $this->container['maximal_suspendable_cycles'] = isset($data['maximal_suspendable_cycles']) ? $data['maximal_suspendable_cycles'] : null;
        
        $this->container['minimal_billing_cycles'] = isset($data['minimal_billing_cycles']) ? $data['minimal_billing_cycles'] : null;
        
        $this->container['payment_gateway'] = isset($data['payment_gateway']) ? $data['payment_gateway'] : null;
        
        $this->container['shipping_address'] = isset($data['shipping_address']) ? $data['shipping_address'] : null;
        
        $this->container['shipping_rate'] = isset($data['shipping_rate']) ? $data['shipping_rate'] : null;
        
        $this->container['shop'] = isset($data['shop']) ? $data['shop'] : null;
        
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        
        $this->container['store_order_confirmation_email_enabled'] = isset($data['store_order_confirmation_email_enabled']) ? $data['store_order_confirmation_email_enabled'] : null;
        
        $this->container['subscriber_suspension_allowed'] = isset($data['subscriber_suspension_allowed']) ? $data['subscriber_suspension_allowed'] : null;
        
        $this->container['subscription'] = isset($data['subscription']) ? $data['subscription'] : null;
        
        $this->container['termination_billing_cycles'] = isset($data['termination_billing_cycles']) ? $data['termination_billing_cycles'] : null;
        
        $this->container['token'] = isset($data['token']) ? $data['token'] : null;
        
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets billing_address
     *
     * @return \Wallee\Sdk\Model\ShopifySubscriptionAddress
     */
    public function getBillingAddress()
    {
        return $this->container['billing_address'];
    }

    /**
     * Sets billing_address
     *
     * @param \Wallee\Sdk\Model\ShopifySubscriptionAddress $billing_address 
     *
     * @return $this
     */
    public function setBillingAddress($billing_address)
    {
        $this->container['billing_address'] = $billing_address;

        return $this;
    }
    

    /**
     * Gets billing_day_of_month
     *
     * @return int
     */
    public function getBillingDayOfMonth()
    {
        return $this->container['billing_day_of_month'];
    }

    /**
     * Sets billing_day_of_month
     *
     * @param int $billing_day_of_month 
     *
     * @return $this
     */
    public function setBillingDayOfMonth($billing_day_of_month)
    {
        $this->container['billing_day_of_month'] = $billing_day_of_month;

        return $this;
    }
    

    /**
     * Gets billing_interval_amount
     *
     * @return int
     */
    public function getBillingIntervalAmount()
    {
        return $this->container['billing_interval_amount'];
    }

    /**
     * Sets billing_interval_amount
     *
     * @param int $billing_interval_amount 
     *
     * @return $this
     */
    public function setBillingIntervalAmount($billing_interval_amount)
    {
        $this->container['billing_interval_amount'] = $billing_interval_amount;

        return $this;
    }
    

    /**
     * Gets billing_interval_unit
     *
     * @return \Wallee\Sdk\Model\ShopifySubscriptionBillingIntervalUnit
     */
    public function getBillingIntervalUnit()
    {
        return $this->container['billing_interval_unit'];
    }

    /**
     * Sets billing_interval_unit
     *
     * @param \Wallee\Sdk\Model\ShopifySubscriptionBillingIntervalUnit $billing_interval_unit 
     *
     * @return $this
     */
    public function setBillingIntervalUnit($billing_interval_unit)
    {
        $this->container['billing_interval_unit'] = $billing_interval_unit;

        return $this;
    }
    

    /**
     * Gets billing_reference_date
     *
     * @return \DateTime
     */
    public function getBillingReferenceDate()
    {
        return $this->container['billing_reference_date'];
    }

    /**
     * Sets billing_reference_date
     *
     * @param \DateTime $billing_reference_date 
     *
     * @return $this
     */
    public function setBillingReferenceDate($billing_reference_date)
    {
        $this->container['billing_reference_date'] = $billing_reference_date;

        return $this;
    }
    

    /**
     * Gets billing_weekday
     *
     * @return \Wallee\Sdk\Model\ShopifySubscriptionWeekday
     */
    public function getBillingWeekday()
    {
        return $this->container['billing_weekday'];
    }

    /**
     * Sets billing_weekday
     *
     * @param \Wallee\Sdk\Model\ShopifySubscriptionWeekday $billing_weekday 
     *
     * @return $this
     */
    public function setBillingWeekday($billing_weekday)
    {
        $this->container['billing_weekday'] = $billing_weekday;

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
     * @param \DateTime $created_on 
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
     * Gets discharged_by
     *
     * @return int
     */
    public function getDischargedBy()
    {
        return $this->container['discharged_by'];
    }

    /**
     * Sets discharged_by
     *
     * @param int $discharged_by 
     *
     * @return $this
     */
    public function setDischargedBy($discharged_by)
    {
        $this->container['discharged_by'] = $discharged_by;

        return $this;
    }
    

    /**
     * Gets discharged_on
     *
     * @return \DateTime
     */
    public function getDischargedOn()
    {
        return $this->container['discharged_on'];
    }

    /**
     * Sets discharged_on
     *
     * @param \DateTime $discharged_on 
     *
     * @return $this
     */
    public function setDischargedOn($discharged_on)
    {
        $this->container['discharged_on'] = $discharged_on;

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
     * Gets items
     *
     * @return \Wallee\Sdk\Model\ShopifySubscriptionVersionItem[]
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \Wallee\Sdk\Model\ShopifySubscriptionVersionItem[] $items 
     *
     * @return $this
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

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
     * Gets maximal_billing_cycles
     *
     * @return int
     */
    public function getMaximalBillingCycles()
    {
        return $this->container['maximal_billing_cycles'];
    }

    /**
     * Sets maximal_billing_cycles
     *
     * @param int $maximal_billing_cycles 
     *
     * @return $this
     */
    public function setMaximalBillingCycles($maximal_billing_cycles)
    {
        $this->container['maximal_billing_cycles'] = $maximal_billing_cycles;

        return $this;
    }
    

    /**
     * Gets maximal_suspendable_cycles
     *
     * @return int
     */
    public function getMaximalSuspendableCycles()
    {
        return $this->container['maximal_suspendable_cycles'];
    }

    /**
     * Sets maximal_suspendable_cycles
     *
     * @param int $maximal_suspendable_cycles 
     *
     * @return $this
     */
    public function setMaximalSuspendableCycles($maximal_suspendable_cycles)
    {
        $this->container['maximal_suspendable_cycles'] = $maximal_suspendable_cycles;

        return $this;
    }
    

    /**
     * Gets minimal_billing_cycles
     *
     * @return int
     */
    public function getMinimalBillingCycles()
    {
        return $this->container['minimal_billing_cycles'];
    }

    /**
     * Sets minimal_billing_cycles
     *
     * @param int $minimal_billing_cycles 
     *
     * @return $this
     */
    public function setMinimalBillingCycles($minimal_billing_cycles)
    {
        $this->container['minimal_billing_cycles'] = $minimal_billing_cycles;

        return $this;
    }
    

    /**
     * Gets payment_gateway
     *
     * @return string
     */
    public function getPaymentGateway()
    {
        return $this->container['payment_gateway'];
    }

    /**
     * Sets payment_gateway
     *
     * @param string $payment_gateway 
     *
     * @return $this
     */
    public function setPaymentGateway($payment_gateway)
    {
        $this->container['payment_gateway'] = $payment_gateway;

        return $this;
    }
    

    /**
     * Gets shipping_address
     *
     * @return \Wallee\Sdk\Model\ShopifySubscriptionAddress
     */
    public function getShippingAddress()
    {
        return $this->container['shipping_address'];
    }

    /**
     * Sets shipping_address
     *
     * @param \Wallee\Sdk\Model\ShopifySubscriptionAddress $shipping_address 
     *
     * @return $this
     */
    public function setShippingAddress($shipping_address)
    {
        $this->container['shipping_address'] = $shipping_address;

        return $this;
    }
    

    /**
     * Gets shipping_rate
     *
     * @return string
     */
    public function getShippingRate()
    {
        return $this->container['shipping_rate'];
    }

    /**
     * Sets shipping_rate
     *
     * @param string $shipping_rate 
     *
     * @return $this
     */
    public function setShippingRate($shipping_rate)
    {
        $this->container['shipping_rate'] = $shipping_rate;

        return $this;
    }
    

    /**
     * Gets shop
     *
     * @return int
     */
    public function getShop()
    {
        return $this->container['shop'];
    }

    /**
     * Sets shop
     *
     * @param int $shop 
     *
     * @return $this
     */
    public function setShop($shop)
    {
        $this->container['shop'] = $shop;

        return $this;
    }
    

    /**
     * Gets state
     *
     * @return \Wallee\Sdk\Model\ShopifySubscriptionVersionState
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param \Wallee\Sdk\Model\ShopifySubscriptionVersionState $state 
     *
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }
    

    /**
     * Gets store_order_confirmation_email_enabled
     *
     * @return bool
     */
    public function getStoreOrderConfirmationEmailEnabled()
    {
        return $this->container['store_order_confirmation_email_enabled'];
    }

    /**
     * Sets store_order_confirmation_email_enabled
     *
     * @param bool $store_order_confirmation_email_enabled 
     *
     * @return $this
     */
    public function setStoreOrderConfirmationEmailEnabled($store_order_confirmation_email_enabled)
    {
        $this->container['store_order_confirmation_email_enabled'] = $store_order_confirmation_email_enabled;

        return $this;
    }
    

    /**
     * Gets subscriber_suspension_allowed
     *
     * @return bool
     */
    public function getSubscriberSuspensionAllowed()
    {
        return $this->container['subscriber_suspension_allowed'];
    }

    /**
     * Sets subscriber_suspension_allowed
     *
     * @param bool $subscriber_suspension_allowed 
     *
     * @return $this
     */
    public function setSubscriberSuspensionAllowed($subscriber_suspension_allowed)
    {
        $this->container['subscriber_suspension_allowed'] = $subscriber_suspension_allowed;

        return $this;
    }
    

    /**
     * Gets subscription
     *
     * @return \Wallee\Sdk\Model\ShopifySubscription
     */
    public function getSubscription()
    {
        return $this->container['subscription'];
    }

    /**
     * Sets subscription
     *
     * @param \Wallee\Sdk\Model\ShopifySubscription $subscription 
     *
     * @return $this
     */
    public function setSubscription($subscription)
    {
        $this->container['subscription'] = $subscription;

        return $this;
    }
    

    /**
     * Gets termination_billing_cycles
     *
     * @return int
     */
    public function getTerminationBillingCycles()
    {
        return $this->container['termination_billing_cycles'];
    }

    /**
     * Sets termination_billing_cycles
     *
     * @param int $termination_billing_cycles 
     *
     * @return $this
     */
    public function setTerminationBillingCycles($termination_billing_cycles)
    {
        $this->container['termination_billing_cycles'] = $termination_billing_cycles;

        return $this;
    }
    

    /**
     * Gets token
     *
     * @return int
     */
    public function getToken()
    {
        return $this->container['token'];
    }

    /**
     * Sets token
     *
     * @param int $token 
     *
     * @return $this
     */
    public function setToken($token)
    {
        $this->container['token'] = $token;

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


