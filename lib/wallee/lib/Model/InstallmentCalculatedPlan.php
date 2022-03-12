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
 * InstallmentCalculatedPlan model
 *
 * @category    Class
 * @description 
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class InstallmentCalculatedPlan implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'InstallmentCalculatedPlan';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'configuration' => '\Wallee\Sdk\Model\InstallmentPlanConfiguration',
        'payment_method_configurations' => '\Wallee\Sdk\Model\PaymentMethodConfiguration[]',
        'slices' => '\Wallee\Sdk\Model\InstallmentCalculatedSlice[]',
        'total_amount' => 'float',
        'transaction' => '\Wallee\Sdk\Model\Transaction'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'configuration' => null,
        'payment_method_configurations' => null,
        'slices' => null,
        'total_amount' => null,
        'transaction' => null
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'configuration' => 'configuration',
        'payment_method_configurations' => 'paymentMethodConfigurations',
        'slices' => 'slices',
        'total_amount' => 'totalAmount',
        'transaction' => 'transaction'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'configuration' => 'setConfiguration',
        'payment_method_configurations' => 'setPaymentMethodConfigurations',
        'slices' => 'setSlices',
        'total_amount' => 'setTotalAmount',
        'transaction' => 'setTransaction'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'configuration' => 'getConfiguration',
        'payment_method_configurations' => 'getPaymentMethodConfigurations',
        'slices' => 'getSlices',
        'total_amount' => 'getTotalAmount',
        'transaction' => 'getTransaction'
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
        
        $this->container['configuration'] = isset($data['configuration']) ? $data['configuration'] : null;
        
        $this->container['payment_method_configurations'] = isset($data['payment_method_configurations']) ? $data['payment_method_configurations'] : null;
        
        $this->container['slices'] = isset($data['slices']) ? $data['slices'] : null;
        
        $this->container['total_amount'] = isset($data['total_amount']) ? $data['total_amount'] : null;
        
        $this->container['transaction'] = isset($data['transaction']) ? $data['transaction'] : null;
        
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
     * Gets configuration
     *
     * @return \Wallee\Sdk\Model\InstallmentPlanConfiguration
     */
    public function getConfiguration()
    {
        return $this->container['configuration'];
    }

    /**
     * Sets configuration
     *
     * @param \Wallee\Sdk\Model\InstallmentPlanConfiguration $configuration 
     *
     * @return $this
     */
    public function setConfiguration($configuration)
    {
        $this->container['configuration'] = $configuration;

        return $this;
    }
    

    /**
     * Gets payment_method_configurations
     *
     * @return \Wallee\Sdk\Model\PaymentMethodConfiguration[]
     */
    public function getPaymentMethodConfigurations()
    {
        return $this->container['payment_method_configurations'];
    }

    /**
     * Sets payment_method_configurations
     *
     * @param \Wallee\Sdk\Model\PaymentMethodConfiguration[] $payment_method_configurations 
     *
     * @return $this
     */
    public function setPaymentMethodConfigurations($payment_method_configurations)
    {
        $this->container['payment_method_configurations'] = $payment_method_configurations;

        return $this;
    }
    

    /**
     * Gets slices
     *
     * @return \Wallee\Sdk\Model\InstallmentCalculatedSlice[]
     */
    public function getSlices()
    {
        return $this->container['slices'];
    }

    /**
     * Sets slices
     *
     * @param \Wallee\Sdk\Model\InstallmentCalculatedSlice[] $slices 
     *
     * @return $this
     */
    public function setSlices($slices)
    {
        $this->container['slices'] = $slices;

        return $this;
    }
    

    /**
     * Gets total_amount
     *
     * @return float
     */
    public function getTotalAmount()
    {
        return $this->container['total_amount'];
    }

    /**
     * Sets total_amount
     *
     * @param float $total_amount 
     *
     * @return $this
     */
    public function setTotalAmount($total_amount)
    {
        $this->container['total_amount'] = $total_amount;

        return $this;
    }
    

    /**
     * Gets transaction
     *
     * @return \Wallee\Sdk\Model\Transaction
     */
    public function getTransaction()
    {
        return $this->container['transaction'];
    }

    /**
     * Sets transaction
     *
     * @param \Wallee\Sdk\Model\Transaction $transaction 
     *
     * @return $this
     */
    public function setTransaction($transaction)
    {
        $this->container['transaction'] = $transaction;

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


