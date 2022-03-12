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
 * LineItemReductionCreate model
 *
 * @category    Class
 * @description 
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class LineItemReductionCreate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'LineItemReduction.Create';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'line_item_unique_id' => 'string',
        'quantity_reduction' => 'float',
        'unit_price_reduction' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'line_item_unique_id' => null,
        'quantity_reduction' => null,
        'unit_price_reduction' => null
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'line_item_unique_id' => 'lineItemUniqueId',
        'quantity_reduction' => 'quantityReduction',
        'unit_price_reduction' => 'unitPriceReduction'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'line_item_unique_id' => 'setLineItemUniqueId',
        'quantity_reduction' => 'setQuantityReduction',
        'unit_price_reduction' => 'setUnitPriceReduction'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'line_item_unique_id' => 'getLineItemUniqueId',
        'quantity_reduction' => 'getQuantityReduction',
        'unit_price_reduction' => 'getUnitPriceReduction'
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
        
        $this->container['line_item_unique_id'] = isset($data['line_item_unique_id']) ? $data['line_item_unique_id'] : null;
        
        $this->container['quantity_reduction'] = isset($data['quantity_reduction']) ? $data['quantity_reduction'] : null;
        
        $this->container['unit_price_reduction'] = isset($data['unit_price_reduction']) ? $data['unit_price_reduction'] : null;
        
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['line_item_unique_id'] === null) {
            $invalidProperties[] = "'line_item_unique_id' can't be null";
        }
        if ((mb_strlen($this->container['line_item_unique_id']) > 200)) {
            $invalidProperties[] = "invalid value for 'line_item_unique_id', the character length must be smaller than or equal to 200.";
        }

        if ($this->container['quantity_reduction'] === null) {
            $invalidProperties[] = "'quantity_reduction' can't be null";
        }
        if ($this->container['unit_price_reduction'] === null) {
            $invalidProperties[] = "'unit_price_reduction' can't be null";
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
     * Gets line_item_unique_id
     *
     * @return string
     */
    public function getLineItemUniqueId()
    {
        return $this->container['line_item_unique_id'];
    }

    /**
     * Sets line_item_unique_id
     *
     * @param string $line_item_unique_id The unique id identifies the line item on which the reduction is applied on.
     *
     * @return $this
     */
    public function setLineItemUniqueId($line_item_unique_id)
    {
        if ((mb_strlen($line_item_unique_id) > 200)) {
            throw new \InvalidArgumentException('invalid length for $line_item_unique_id when calling LineItemReductionCreate., must be smaller than or equal to 200.');
        }

        $this->container['line_item_unique_id'] = $line_item_unique_id;

        return $this;
    }
    

    /**
     * Gets quantity_reduction
     *
     * @return float
     */
    public function getQuantityReduction()
    {
        return $this->container['quantity_reduction'];
    }

    /**
     * Sets quantity_reduction
     *
     * @param float $quantity_reduction 
     *
     * @return $this
     */
    public function setQuantityReduction($quantity_reduction)
    {
        $this->container['quantity_reduction'] = $quantity_reduction;

        return $this;
    }
    

    /**
     * Gets unit_price_reduction
     *
     * @return float
     */
    public function getUnitPriceReduction()
    {
        return $this->container['unit_price_reduction'];
    }

    /**
     * Sets unit_price_reduction
     *
     * @param float $unit_price_reduction 
     *
     * @return $this
     */
    public function setUnitPriceReduction($unit_price_reduction)
    {
        $this->container['unit_price_reduction'] = $unit_price_reduction;

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


