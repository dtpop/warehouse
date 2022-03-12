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
 * ShopifySubscriptionModelBillingConfiguration model
 *
 * @category    Class
 * @description 
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class ShopifySubscriptionModelBillingConfiguration implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ShopifySubscriptionModel.BillingConfiguration';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'billing_day_of_month' => 'int',
        'billing_interval_amount' => 'int',
        'billing_interval_unit' => '\Wallee\Sdk\Model\ShopifySubscriptionBillingIntervalUnit',
        'billing_reference_date' => '\DateTime',
        'billing_weekday' => '\Wallee\Sdk\Model\ShopifySubscriptionWeekday',
        'maximal_billing_cycles' => 'int',
        'maximal_suspendable_cycles' => 'int',
        'minimal_billing_cycles' => 'int',
        'termination_billing_cycles' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'billing_day_of_month' => 'int32',
        'billing_interval_amount' => 'int32',
        'billing_interval_unit' => null,
        'billing_reference_date' => 'date-time',
        'billing_weekday' => null,
        'maximal_billing_cycles' => 'int32',
        'maximal_suspendable_cycles' => 'int32',
        'minimal_billing_cycles' => 'int32',
        'termination_billing_cycles' => 'int32'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'billing_day_of_month' => 'billingDayOfMonth',
        'billing_interval_amount' => 'billingIntervalAmount',
        'billing_interval_unit' => 'billingIntervalUnit',
        'billing_reference_date' => 'billingReferenceDate',
        'billing_weekday' => 'billingWeekday',
        'maximal_billing_cycles' => 'maximalBillingCycles',
        'maximal_suspendable_cycles' => 'maximalSuspendableCycles',
        'minimal_billing_cycles' => 'minimalBillingCycles',
        'termination_billing_cycles' => 'terminationBillingCycles'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'billing_day_of_month' => 'setBillingDayOfMonth',
        'billing_interval_amount' => 'setBillingIntervalAmount',
        'billing_interval_unit' => 'setBillingIntervalUnit',
        'billing_reference_date' => 'setBillingReferenceDate',
        'billing_weekday' => 'setBillingWeekday',
        'maximal_billing_cycles' => 'setMaximalBillingCycles',
        'maximal_suspendable_cycles' => 'setMaximalSuspendableCycles',
        'minimal_billing_cycles' => 'setMinimalBillingCycles',
        'termination_billing_cycles' => 'setTerminationBillingCycles'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'billing_day_of_month' => 'getBillingDayOfMonth',
        'billing_interval_amount' => 'getBillingIntervalAmount',
        'billing_interval_unit' => 'getBillingIntervalUnit',
        'billing_reference_date' => 'getBillingReferenceDate',
        'billing_weekday' => 'getBillingWeekday',
        'maximal_billing_cycles' => 'getMaximalBillingCycles',
        'maximal_suspendable_cycles' => 'getMaximalSuspendableCycles',
        'minimal_billing_cycles' => 'getMinimalBillingCycles',
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
        
        $this->container['billing_day_of_month'] = isset($data['billing_day_of_month']) ? $data['billing_day_of_month'] : null;
        
        $this->container['billing_interval_amount'] = isset($data['billing_interval_amount']) ? $data['billing_interval_amount'] : null;
        
        $this->container['billing_interval_unit'] = isset($data['billing_interval_unit']) ? $data['billing_interval_unit'] : null;
        
        $this->container['billing_reference_date'] = isset($data['billing_reference_date']) ? $data['billing_reference_date'] : null;
        
        $this->container['billing_weekday'] = isset($data['billing_weekday']) ? $data['billing_weekday'] : null;
        
        $this->container['maximal_billing_cycles'] = isset($data['maximal_billing_cycles']) ? $data['maximal_billing_cycles'] : null;
        
        $this->container['maximal_suspendable_cycles'] = isset($data['maximal_suspendable_cycles']) ? $data['maximal_suspendable_cycles'] : null;
        
        $this->container['minimal_billing_cycles'] = isset($data['minimal_billing_cycles']) ? $data['minimal_billing_cycles'] : null;
        
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
     * @param \DateTime $billing_reference_date This date will be used as basis to calculate the dates of recurring orders.
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


