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
 * LineItemCreate model
 *
 * @category    Class
 * @description 
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class LineItemCreate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'LineItem.Create';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'amount_including_tax' => 'float',
        'attributes' => 'map[string,\Wallee\Sdk\Model\LineItemAttributeCreate]',
        'discount_including_tax' => 'float',
        'name' => 'string',
        'quantity' => 'float',
        'shipping_required' => 'bool',
        'sku' => 'string',
        'taxes' => '\Wallee\Sdk\Model\TaxCreate[]',
        'type' => '\Wallee\Sdk\Model\LineItemType',
        'unique_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'amount_including_tax' => null,
        'attributes' => null,
        'discount_including_tax' => null,
        'name' => null,
        'quantity' => null,
        'shipping_required' => null,
        'sku' => null,
        'taxes' => null,
        'type' => null,
        'unique_id' => null
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'amount_including_tax' => 'amountIncludingTax',
        'attributes' => 'attributes',
        'discount_including_tax' => 'discountIncludingTax',
        'name' => 'name',
        'quantity' => 'quantity',
        'shipping_required' => 'shippingRequired',
        'sku' => 'sku',
        'taxes' => 'taxes',
        'type' => 'type',
        'unique_id' => 'uniqueId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amount_including_tax' => 'setAmountIncludingTax',
        'attributes' => 'setAttributes',
        'discount_including_tax' => 'setDiscountIncludingTax',
        'name' => 'setName',
        'quantity' => 'setQuantity',
        'shipping_required' => 'setShippingRequired',
        'sku' => 'setSku',
        'taxes' => 'setTaxes',
        'type' => 'setType',
        'unique_id' => 'setUniqueId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amount_including_tax' => 'getAmountIncludingTax',
        'attributes' => 'getAttributes',
        'discount_including_tax' => 'getDiscountIncludingTax',
        'name' => 'getName',
        'quantity' => 'getQuantity',
        'shipping_required' => 'getShippingRequired',
        'sku' => 'getSku',
        'taxes' => 'getTaxes',
        'type' => 'getType',
        'unique_id' => 'getUniqueId'
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
        
        $this->container['amount_including_tax'] = isset($data['amount_including_tax']) ? $data['amount_including_tax'] : null;
        
        $this->container['attributes'] = isset($data['attributes']) ? $data['attributes'] : null;
        
        $this->container['discount_including_tax'] = isset($data['discount_including_tax']) ? $data['discount_including_tax'] : null;
        
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        
        $this->container['shipping_required'] = isset($data['shipping_required']) ? $data['shipping_required'] : null;
        
        $this->container['sku'] = isset($data['sku']) ? $data['sku'] : null;
        
        $this->container['taxes'] = isset($data['taxes']) ? $data['taxes'] : null;
        
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        
        $this->container['unique_id'] = isset($data['unique_id']) ? $data['unique_id'] : null;
        
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['amount_including_tax'] === null) {
            $invalidProperties[] = "'amount_including_tax' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ((mb_strlen($this->container['name']) > 150)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 150.";
        }

        if ((mb_strlen($this->container['name']) < 1)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['quantity'] === null) {
            $invalidProperties[] = "'quantity' can't be null";
        }
        if (!is_null($this->container['sku']) && (mb_strlen($this->container['sku']) > 200)) {
            $invalidProperties[] = "invalid value for 'sku', the character length must be smaller than or equal to 200.";
        }

        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['unique_id'] === null) {
            $invalidProperties[] = "'unique_id' can't be null";
        }
        if ((mb_strlen($this->container['unique_id']) > 200)) {
            $invalidProperties[] = "invalid value for 'unique_id', the character length must be smaller than or equal to 200.";
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
     * Gets amount_including_tax
     *
     * @return float
     */
    public function getAmountIncludingTax()
    {
        return $this->container['amount_including_tax'];
    }

    /**
     * Sets amount_including_tax
     *
     * @param float $amount_including_tax 
     *
     * @return $this
     */
    public function setAmountIncludingTax($amount_including_tax)
    {
        $this->container['amount_including_tax'] = $amount_including_tax;

        return $this;
    }
    

    /**
     * Gets attributes
     *
     * @return map[string,\Wallee\Sdk\Model\LineItemAttributeCreate]
     */
    public function getAttributes()
    {
        return $this->container['attributes'];
    }

    /**
     * Sets attributes
     *
     * @param map[string,\Wallee\Sdk\Model\LineItemAttributeCreate] $attributes 
     *
     * @return $this
     */
    public function setAttributes($attributes)
    {
        $this->container['attributes'] = $attributes;

        return $this;
    }
    

    /**
     * Gets discount_including_tax
     *
     * @return float
     */
    public function getDiscountIncludingTax()
    {
        return $this->container['discount_including_tax'];
    }

    /**
     * Sets discount_including_tax
     *
     * @param float $discount_including_tax 
     *
     * @return $this
     */
    public function setDiscountIncludingTax($discount_including_tax)
    {
        $this->container['discount_including_tax'] = $discount_including_tax;

        return $this;
    }
    

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name 
     *
     * @return $this
     */
    public function setName($name)
    {
        if ((mb_strlen($name) > 150)) {
            throw new \InvalidArgumentException('invalid length for $name when calling LineItemCreate., must be smaller than or equal to 150.');
        }
        if ((mb_strlen($name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $name when calling LineItemCreate., must be bigger than or equal to 1.');
        }

        $this->container['name'] = $name;

        return $this;
    }
    

    /**
     * Gets quantity
     *
     * @return float
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param float $quantity 
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

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
     * Gets sku
     *
     * @return string
     */
    public function getSku()
    {
        return $this->container['sku'];
    }

    /**
     * Sets sku
     *
     * @param string $sku 
     *
     * @return $this
     */
    public function setSku($sku)
    {
        if (!is_null($sku) && (mb_strlen($sku) > 200)) {
            throw new \InvalidArgumentException('invalid length for $sku when calling LineItemCreate., must be smaller than or equal to 200.');
        }

        $this->container['sku'] = $sku;

        return $this;
    }
    

    /**
     * Gets taxes
     *
     * @return \Wallee\Sdk\Model\TaxCreate[]
     */
    public function getTaxes()
    {
        return $this->container['taxes'];
    }

    /**
     * Sets taxes
     *
     * @param \Wallee\Sdk\Model\TaxCreate[] $taxes 
     *
     * @return $this
     */
    public function setTaxes($taxes)
    {
        $this->container['taxes'] = $taxes;

        return $this;
    }
    

    /**
     * Gets type
     *
     * @return \Wallee\Sdk\Model\LineItemType
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \Wallee\Sdk\Model\LineItemType $type 
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }
    

    /**
     * Gets unique_id
     *
     * @return string
     */
    public function getUniqueId()
    {
        return $this->container['unique_id'];
    }

    /**
     * Sets unique_id
     *
     * @param string $unique_id The unique id identifies the line item within the set of line items associated with the transaction.
     *
     * @return $this
     */
    public function setUniqueId($unique_id)
    {
        if ((mb_strlen($unique_id) > 200)) {
            throw new \InvalidArgumentException('invalid length for $unique_id when calling LineItemCreate., must be smaller than or equal to 200.');
        }

        $this->container['unique_id'] = $unique_id;

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


