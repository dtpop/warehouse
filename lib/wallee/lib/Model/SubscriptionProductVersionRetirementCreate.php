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
 * SubscriptionProductVersionRetirementCreate model
 *
 * @category    Class
 * @description 
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class SubscriptionProductVersionRetirementCreate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SubscriptionProductVersionRetirement.Create';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'product_version' => 'int',
        'respect_terminiation_periods_enabled' => 'bool',
        'target_product' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'product_version' => 'int64',
        'respect_terminiation_periods_enabled' => null,
        'target_product' => 'int64'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'product_version' => 'productVersion',
        'respect_terminiation_periods_enabled' => 'respectTerminiationPeriodsEnabled',
        'target_product' => 'targetProduct'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'product_version' => 'setProductVersion',
        'respect_terminiation_periods_enabled' => 'setRespectTerminiationPeriodsEnabled',
        'target_product' => 'setTargetProduct'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'product_version' => 'getProductVersion',
        'respect_terminiation_periods_enabled' => 'getRespectTerminiationPeriodsEnabled',
        'target_product' => 'getTargetProduct'
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
        
        $this->container['product_version'] = isset($data['product_version']) ? $data['product_version'] : null;
        
        $this->container['respect_terminiation_periods_enabled'] = isset($data['respect_terminiation_periods_enabled']) ? $data['respect_terminiation_periods_enabled'] : null;
        
        $this->container['target_product'] = isset($data['target_product']) ? $data['target_product'] : null;
        
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['product_version'] === null) {
            $invalidProperties[] = "'product_version' can't be null";
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
     * Gets product_version
     *
     * @return int
     */
    public function getProductVersion()
    {
        return $this->container['product_version'];
    }

    /**
     * Sets product_version
     *
     * @param int $product_version 
     *
     * @return $this
     */
    public function setProductVersion($product_version)
    {
        $this->container['product_version'] = $product_version;

        return $this;
    }
    

    /**
     * Gets respect_terminiation_periods_enabled
     *
     * @return bool
     */
    public function getRespectTerminiationPeriodsEnabled()
    {
        return $this->container['respect_terminiation_periods_enabled'];
    }

    /**
     * Sets respect_terminiation_periods_enabled
     *
     * @param bool $respect_terminiation_periods_enabled 
     *
     * @return $this
     */
    public function setRespectTerminiationPeriodsEnabled($respect_terminiation_periods_enabled)
    {
        $this->container['respect_terminiation_periods_enabled'] = $respect_terminiation_periods_enabled;

        return $this;
    }
    

    /**
     * Gets target_product
     *
     * @return int
     */
    public function getTargetProduct()
    {
        return $this->container['target_product'];
    }

    /**
     * Sets target_product
     *
     * @param int $target_product 
     *
     * @return $this
     */
    public function setTargetProduct($target_product)
    {
        $this->container['target_product'] = $target_product;

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


