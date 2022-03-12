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
 * ShopifySubscriptionProduct model
 *
 * @category    Class
 * @description 
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class ShopifySubscriptionProduct implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ShopifySubscriptionProduct';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'absolute_price_adjustment' => 'float',
        'billing_day_of_month' => 'int',
        'billing_interval_amount' => 'int',
        'billing_interval_unit' => '\Wallee\Sdk\Model\ShopifySubscriptionBillingIntervalUnit',
        'billing_weekday' => '\Wallee\Sdk\Model\ShopifySubscriptionWeekday',
        'fixed_price' => 'float',
        'id' => 'int',
        'linked_space_id' => 'int',
        'maximal_billing_cycles' => 'int',
        'maximal_suspendable_cycles' => 'int',
        'minimal_billing_cycles' => 'int',
        'planned_purge_date' => '\DateTime',
        'pricing_option' => '\Wallee\Sdk\Model\ShopifySubscriptionProductPricingOption',
        'product_id' => 'string',
        'product_name' => 'string',
        'product_price' => 'float',
        'product_sku' => 'string',
        'product_variant_id' => 'string',
        'product_variant_name' => 'string',
        'relative_price_adjustment' => 'float',
        'shipping_required' => 'bool',
        'shop' => 'int',
        'state' => '\Wallee\Sdk\Model\ShopifySubscriptionProductState',
        'stock_check_required' => 'bool',
        'store_order_confirmation_email_enabled' => 'bool',
        'subscriber_suspension_allowed' => 'bool',
        'termination_billing_cycles' => 'int',
        'updated_at' => '\DateTime',
        'version' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'absolute_price_adjustment' => null,
        'billing_day_of_month' => 'int32',
        'billing_interval_amount' => 'int32',
        'billing_interval_unit' => null,
        'billing_weekday' => null,
        'fixed_price' => null,
        'id' => 'int64',
        'linked_space_id' => 'int64',
        'maximal_billing_cycles' => 'int32',
        'maximal_suspendable_cycles' => 'int32',
        'minimal_billing_cycles' => 'int32',
        'planned_purge_date' => 'date-time',
        'pricing_option' => null,
        'product_id' => null,
        'product_name' => null,
        'product_price' => null,
        'product_sku' => null,
        'product_variant_id' => null,
        'product_variant_name' => null,
        'relative_price_adjustment' => null,
        'shipping_required' => null,
        'shop' => 'int64',
        'state' => null,
        'stock_check_required' => null,
        'store_order_confirmation_email_enabled' => null,
        'subscriber_suspension_allowed' => null,
        'termination_billing_cycles' => 'int32',
        'updated_at' => 'date-time',
        'version' => 'int32'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'absolute_price_adjustment' => 'absolutePriceAdjustment',
        'billing_day_of_month' => 'billingDayOfMonth',
        'billing_interval_amount' => 'billingIntervalAmount',
        'billing_interval_unit' => 'billingIntervalUnit',
        'billing_weekday' => 'billingWeekday',
        'fixed_price' => 'fixedPrice',
        'id' => 'id',
        'linked_space_id' => 'linkedSpaceId',
        'maximal_billing_cycles' => 'maximalBillingCycles',
        'maximal_suspendable_cycles' => 'maximalSuspendableCycles',
        'minimal_billing_cycles' => 'minimalBillingCycles',
        'planned_purge_date' => 'plannedPurgeDate',
        'pricing_option' => 'pricingOption',
        'product_id' => 'productId',
        'product_name' => 'productName',
        'product_price' => 'productPrice',
        'product_sku' => 'productSku',
        'product_variant_id' => 'productVariantId',
        'product_variant_name' => 'productVariantName',
        'relative_price_adjustment' => 'relativePriceAdjustment',
        'shipping_required' => 'shippingRequired',
        'shop' => 'shop',
        'state' => 'state',
        'stock_check_required' => 'stockCheckRequired',
        'store_order_confirmation_email_enabled' => 'storeOrderConfirmationEmailEnabled',
        'subscriber_suspension_allowed' => 'subscriberSuspensionAllowed',
        'termination_billing_cycles' => 'terminationBillingCycles',
        'updated_at' => 'updatedAt',
        'version' => 'version'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'absolute_price_adjustment' => 'setAbsolutePriceAdjustment',
        'billing_day_of_month' => 'setBillingDayOfMonth',
        'billing_interval_amount' => 'setBillingIntervalAmount',
        'billing_interval_unit' => 'setBillingIntervalUnit',
        'billing_weekday' => 'setBillingWeekday',
        'fixed_price' => 'setFixedPrice',
        'id' => 'setId',
        'linked_space_id' => 'setLinkedSpaceId',
        'maximal_billing_cycles' => 'setMaximalBillingCycles',
        'maximal_suspendable_cycles' => 'setMaximalSuspendableCycles',
        'minimal_billing_cycles' => 'setMinimalBillingCycles',
        'planned_purge_date' => 'setPlannedPurgeDate',
        'pricing_option' => 'setPricingOption',
        'product_id' => 'setProductId',
        'product_name' => 'setProductName',
        'product_price' => 'setProductPrice',
        'product_sku' => 'setProductSku',
        'product_variant_id' => 'setProductVariantId',
        'product_variant_name' => 'setProductVariantName',
        'relative_price_adjustment' => 'setRelativePriceAdjustment',
        'shipping_required' => 'setShippingRequired',
        'shop' => 'setShop',
        'state' => 'setState',
        'stock_check_required' => 'setStockCheckRequired',
        'store_order_confirmation_email_enabled' => 'setStoreOrderConfirmationEmailEnabled',
        'subscriber_suspension_allowed' => 'setSubscriberSuspensionAllowed',
        'termination_billing_cycles' => 'setTerminationBillingCycles',
        'updated_at' => 'setUpdatedAt',
        'version' => 'setVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'absolute_price_adjustment' => 'getAbsolutePriceAdjustment',
        'billing_day_of_month' => 'getBillingDayOfMonth',
        'billing_interval_amount' => 'getBillingIntervalAmount',
        'billing_interval_unit' => 'getBillingIntervalUnit',
        'billing_weekday' => 'getBillingWeekday',
        'fixed_price' => 'getFixedPrice',
        'id' => 'getId',
        'linked_space_id' => 'getLinkedSpaceId',
        'maximal_billing_cycles' => 'getMaximalBillingCycles',
        'maximal_suspendable_cycles' => 'getMaximalSuspendableCycles',
        'minimal_billing_cycles' => 'getMinimalBillingCycles',
        'planned_purge_date' => 'getPlannedPurgeDate',
        'pricing_option' => 'getPricingOption',
        'product_id' => 'getProductId',
        'product_name' => 'getProductName',
        'product_price' => 'getProductPrice',
        'product_sku' => 'getProductSku',
        'product_variant_id' => 'getProductVariantId',
        'product_variant_name' => 'getProductVariantName',
        'relative_price_adjustment' => 'getRelativePriceAdjustment',
        'shipping_required' => 'getShippingRequired',
        'shop' => 'getShop',
        'state' => 'getState',
        'stock_check_required' => 'getStockCheckRequired',
        'store_order_confirmation_email_enabled' => 'getStoreOrderConfirmationEmailEnabled',
        'subscriber_suspension_allowed' => 'getSubscriberSuspensionAllowed',
        'termination_billing_cycles' => 'getTerminationBillingCycles',
        'updated_at' => 'getUpdatedAt',
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
        
        $this->container['absolute_price_adjustment'] = isset($data['absolute_price_adjustment']) ? $data['absolute_price_adjustment'] : null;
        
        $this->container['billing_day_of_month'] = isset($data['billing_day_of_month']) ? $data['billing_day_of_month'] : null;
        
        $this->container['billing_interval_amount'] = isset($data['billing_interval_amount']) ? $data['billing_interval_amount'] : null;
        
        $this->container['billing_interval_unit'] = isset($data['billing_interval_unit']) ? $data['billing_interval_unit'] : null;
        
        $this->container['billing_weekday'] = isset($data['billing_weekday']) ? $data['billing_weekday'] : null;
        
        $this->container['fixed_price'] = isset($data['fixed_price']) ? $data['fixed_price'] : null;
        
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        
        $this->container['linked_space_id'] = isset($data['linked_space_id']) ? $data['linked_space_id'] : null;
        
        $this->container['maximal_billing_cycles'] = isset($data['maximal_billing_cycles']) ? $data['maximal_billing_cycles'] : null;
        
        $this->container['maximal_suspendable_cycles'] = isset($data['maximal_suspendable_cycles']) ? $data['maximal_suspendable_cycles'] : null;
        
        $this->container['minimal_billing_cycles'] = isset($data['minimal_billing_cycles']) ? $data['minimal_billing_cycles'] : null;
        
        $this->container['planned_purge_date'] = isset($data['planned_purge_date']) ? $data['planned_purge_date'] : null;
        
        $this->container['pricing_option'] = isset($data['pricing_option']) ? $data['pricing_option'] : null;
        
        $this->container['product_id'] = isset($data['product_id']) ? $data['product_id'] : null;
        
        $this->container['product_name'] = isset($data['product_name']) ? $data['product_name'] : null;
        
        $this->container['product_price'] = isset($data['product_price']) ? $data['product_price'] : null;
        
        $this->container['product_sku'] = isset($data['product_sku']) ? $data['product_sku'] : null;
        
        $this->container['product_variant_id'] = isset($data['product_variant_id']) ? $data['product_variant_id'] : null;
        
        $this->container['product_variant_name'] = isset($data['product_variant_name']) ? $data['product_variant_name'] : null;
        
        $this->container['relative_price_adjustment'] = isset($data['relative_price_adjustment']) ? $data['relative_price_adjustment'] : null;
        
        $this->container['shipping_required'] = isset($data['shipping_required']) ? $data['shipping_required'] : null;
        
        $this->container['shop'] = isset($data['shop']) ? $data['shop'] : null;
        
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        
        $this->container['stock_check_required'] = isset($data['stock_check_required']) ? $data['stock_check_required'] : null;
        
        $this->container['store_order_confirmation_email_enabled'] = isset($data['store_order_confirmation_email_enabled']) ? $data['store_order_confirmation_email_enabled'] : null;
        
        $this->container['subscriber_suspension_allowed'] = isset($data['subscriber_suspension_allowed']) ? $data['subscriber_suspension_allowed'] : null;
        
        $this->container['termination_billing_cycles'] = isset($data['termination_billing_cycles']) ? $data['termination_billing_cycles'] : null;
        
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        
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
     * Gets absolute_price_adjustment
     *
     * @return float
     */
    public function getAbsolutePriceAdjustment()
    {
        return $this->container['absolute_price_adjustment'];
    }

    /**
     * Sets absolute_price_adjustment
     *
     * @param float $absolute_price_adjustment 
     *
     * @return $this
     */
    public function setAbsolutePriceAdjustment($absolute_price_adjustment)
    {
        $this->container['absolute_price_adjustment'] = $absolute_price_adjustment;

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
     * @param int $billing_day_of_month Define the day of the month on which the recurring orders should be created.
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
     * @param \Wallee\Sdk\Model\ShopifySubscriptionBillingIntervalUnit $billing_interval_unit Define how frequently recurring orders should be created.
     *
     * @return $this
     */
    public function setBillingIntervalUnit($billing_interval_unit)
    {
        $this->container['billing_interval_unit'] = $billing_interval_unit;

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
     * @param \Wallee\Sdk\Model\ShopifySubscriptionWeekday $billing_weekday Define the weekday on which the recurring orders should be created.
     *
     * @return $this
     */
    public function setBillingWeekday($billing_weekday)
    {
        $this->container['billing_weekday'] = $billing_weekday;

        return $this;
    }
    

    /**
     * Gets fixed_price
     *
     * @return float
     */
    public function getFixedPrice()
    {
        return $this->container['fixed_price'];
    }

    /**
     * Sets fixed_price
     *
     * @param float $fixed_price 
     *
     * @return $this
     */
    public function setFixedPrice($fixed_price)
    {
        $this->container['fixed_price'] = $fixed_price;

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
     * @param int $maximal_billing_cycles Define the maximum number of orders the subscription will run for.
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
     * @param int $maximal_suspendable_cycles Define the maximum number of orders the subscription can be suspended for at a time.
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
     * @param int $minimal_billing_cycles Define the minimal number of orders the subscription will run for.
     *
     * @return $this
     */
    public function setMinimalBillingCycles($minimal_billing_cycles)
    {
        $this->container['minimal_billing_cycles'] = $minimal_billing_cycles;

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
     * Gets pricing_option
     *
     * @return \Wallee\Sdk\Model\ShopifySubscriptionProductPricingOption
     */
    public function getPricingOption()
    {
        return $this->container['pricing_option'];
    }

    /**
     * Sets pricing_option
     *
     * @param \Wallee\Sdk\Model\ShopifySubscriptionProductPricingOption $pricing_option 
     *
     * @return $this
     */
    public function setPricingOption($pricing_option)
    {
        $this->container['pricing_option'] = $pricing_option;

        return $this;
    }
    

    /**
     * Gets product_id
     *
     * @return string
     */
    public function getProductId()
    {
        return $this->container['product_id'];
    }

    /**
     * Sets product_id
     *
     * @param string $product_id The ID of the Shopify product that is enabled to be ordered as subscription.
     *
     * @return $this
     */
    public function setProductId($product_id)
    {
        $this->container['product_id'] = $product_id;

        return $this;
    }
    

    /**
     * Gets product_name
     *
     * @return string
     */
    public function getProductName()
    {
        return $this->container['product_name'];
    }

    /**
     * Sets product_name
     *
     * @param string $product_name 
     *
     * @return $this
     */
    public function setProductName($product_name)
    {
        $this->container['product_name'] = $product_name;

        return $this;
    }
    

    /**
     * Gets product_price
     *
     * @return float
     */
    public function getProductPrice()
    {
        return $this->container['product_price'];
    }

    /**
     * Sets product_price
     *
     * @param float $product_price 
     *
     * @return $this
     */
    public function setProductPrice($product_price)
    {
        $this->container['product_price'] = $product_price;

        return $this;
    }
    

    /**
     * Gets product_sku
     *
     * @return string
     */
    public function getProductSku()
    {
        return $this->container['product_sku'];
    }

    /**
     * Sets product_sku
     *
     * @param string $product_sku 
     *
     * @return $this
     */
    public function setProductSku($product_sku)
    {
        $this->container['product_sku'] = $product_sku;

        return $this;
    }
    

    /**
     * Gets product_variant_id
     *
     * @return string
     */
    public function getProductVariantId()
    {
        return $this->container['product_variant_id'];
    }

    /**
     * Sets product_variant_id
     *
     * @param string $product_variant_id 
     *
     * @return $this
     */
    public function setProductVariantId($product_variant_id)
    {
        $this->container['product_variant_id'] = $product_variant_id;

        return $this;
    }
    

    /**
     * Gets product_variant_name
     *
     * @return string
     */
    public function getProductVariantName()
    {
        return $this->container['product_variant_name'];
    }

    /**
     * Sets product_variant_name
     *
     * @param string $product_variant_name 
     *
     * @return $this
     */
    public function setProductVariantName($product_variant_name)
    {
        $this->container['product_variant_name'] = $product_variant_name;

        return $this;
    }
    

    /**
     * Gets relative_price_adjustment
     *
     * @return float
     */
    public function getRelativePriceAdjustment()
    {
        return $this->container['relative_price_adjustment'];
    }

    /**
     * Sets relative_price_adjustment
     *
     * @param float $relative_price_adjustment 
     *
     * @return $this
     */
    public function setRelativePriceAdjustment($relative_price_adjustment)
    {
        $this->container['relative_price_adjustment'] = $relative_price_adjustment;

        return $this;
    }
    

    /**
     * Gets shipping_required
     *
     * @return bool
     */
    public function getShippingRequired()
    {
        return $this->container['shipping_required'];
    }

    /**
     * Sets shipping_required
     *
     * @param bool $shipping_required 
     *
     * @return $this
     */
    public function setShippingRequired($shipping_required)
    {
        $this->container['shipping_required'] = $shipping_required;

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
     * @return \Wallee\Sdk\Model\ShopifySubscriptionProductState
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param \Wallee\Sdk\Model\ShopifySubscriptionProductState $state 
     *
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }
    

    /**
     * Gets stock_check_required
     *
     * @return bool
     */
    public function getStockCheckRequired()
    {
        return $this->container['stock_check_required'];
    }

    /**
     * Sets stock_check_required
     *
     * @param bool $stock_check_required 
     *
     * @return $this
     */
    public function setStockCheckRequired($stock_check_required)
    {
        $this->container['stock_check_required'] = $stock_check_required;

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
     * @param bool $store_order_confirmation_email_enabled Define whether the order confirmation email of the Shopify shop is sent to the customer for recurring orders.
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
     * @param bool $subscriber_suspension_allowed Define whether the customer is allowed to suspend subscriptions.
     *
     * @return $this
     */
    public function setSubscriberSuspensionAllowed($subscriber_suspension_allowed)
    {
        $this->container['subscriber_suspension_allowed'] = $subscriber_suspension_allowed;

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
     * @param int $termination_billing_cycles Define the number of orders the subscription will keep running for after its termination has been requested.
     *
     * @return $this
     */
    public function setTerminationBillingCycles($termination_billing_cycles)
    {
        $this->container['termination_billing_cycles'] = $termination_billing_cycles;

        return $this;
    }
    

    /**
     * Gets updated_at
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param \DateTime $updated_at 
     *
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

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


