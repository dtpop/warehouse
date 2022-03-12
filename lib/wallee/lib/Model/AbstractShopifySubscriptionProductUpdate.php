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
 * AbstractShopifySubscriptionProductUpdate model
 *
 * @category    Class
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class AbstractShopifySubscriptionProductUpdate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Abstract.ShopifySubscriptionProduct.Update';

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
        'maximal_billing_cycles' => 'int',
        'maximal_suspendable_cycles' => 'int',
        'minimal_billing_cycles' => 'int',
        'pricing_option' => '\Wallee\Sdk\Model\ShopifySubscriptionProductPricingOption',
        'relative_price_adjustment' => 'float',
        'store_order_confirmation_email_enabled' => 'bool',
        'subscriber_suspension_allowed' => 'bool',
        'termination_billing_cycles' => 'int'
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
        'maximal_billing_cycles' => 'int32',
        'maximal_suspendable_cycles' => 'int32',
        'minimal_billing_cycles' => 'int32',
        'pricing_option' => null,
        'relative_price_adjustment' => null,
        'store_order_confirmation_email_enabled' => null,
        'subscriber_suspension_allowed' => null,
        'termination_billing_cycles' => 'int32'
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
        'maximal_billing_cycles' => 'maximalBillingCycles',
        'maximal_suspendable_cycles' => 'maximalSuspendableCycles',
        'minimal_billing_cycles' => 'minimalBillingCycles',
        'pricing_option' => 'pricingOption',
        'relative_price_adjustment' => 'relativePriceAdjustment',
        'store_order_confirmation_email_enabled' => 'storeOrderConfirmationEmailEnabled',
        'subscriber_suspension_allowed' => 'subscriberSuspensionAllowed',
        'termination_billing_cycles' => 'terminationBillingCycles'
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
        'maximal_billing_cycles' => 'setMaximalBillingCycles',
        'maximal_suspendable_cycles' => 'setMaximalSuspendableCycles',
        'minimal_billing_cycles' => 'setMinimalBillingCycles',
        'pricing_option' => 'setPricingOption',
        'relative_price_adjustment' => 'setRelativePriceAdjustment',
        'store_order_confirmation_email_enabled' => 'setStoreOrderConfirmationEmailEnabled',
        'subscriber_suspension_allowed' => 'setSubscriberSuspensionAllowed',
        'termination_billing_cycles' => 'setTerminationBillingCycles'
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
        'maximal_billing_cycles' => 'getMaximalBillingCycles',
        'maximal_suspendable_cycles' => 'getMaximalSuspendableCycles',
        'minimal_billing_cycles' => 'getMinimalBillingCycles',
        'pricing_option' => 'getPricingOption',
        'relative_price_adjustment' => 'getRelativePriceAdjustment',
        'store_order_confirmation_email_enabled' => 'getStoreOrderConfirmationEmailEnabled',
        'subscriber_suspension_allowed' => 'getSubscriberSuspensionAllowed',
        'termination_billing_cycles' => 'getTerminationBillingCycles'
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
        
        $this->container['maximal_billing_cycles'] = isset($data['maximal_billing_cycles']) ? $data['maximal_billing_cycles'] : null;
        
        $this->container['maximal_suspendable_cycles'] = isset($data['maximal_suspendable_cycles']) ? $data['maximal_suspendable_cycles'] : null;
        
        $this->container['minimal_billing_cycles'] = isset($data['minimal_billing_cycles']) ? $data['minimal_billing_cycles'] : null;
        
        $this->container['pricing_option'] = isset($data['pricing_option']) ? $data['pricing_option'] : null;
        
        $this->container['relative_price_adjustment'] = isset($data['relative_price_adjustment']) ? $data['relative_price_adjustment'] : null;
        
        $this->container['store_order_confirmation_email_enabled'] = isset($data['store_order_confirmation_email_enabled']) ? $data['store_order_confirmation_email_enabled'] : null;
        
        $this->container['subscriber_suspension_allowed'] = isset($data['subscriber_suspension_allowed']) ? $data['subscriber_suspension_allowed'] : null;
        
        $this->container['termination_billing_cycles'] = isset($data['termination_billing_cycles']) ? $data['termination_billing_cycles'] : null;
        
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


