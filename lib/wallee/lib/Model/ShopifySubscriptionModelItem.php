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
 * ShopifySubscriptionModelItem model
 *
 * @category    Class
 * @description 
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class ShopifySubscriptionModelItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ShopifySubscriptionModel.Item';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'price_including_tax' => 'float',
        'product_id' => 'int',
        'quantity' => 'float',
        'recalculate_price' => 'bool',
        'tax_lines' => '\Wallee\Sdk\Model\ShopifySubscriptionModelTaxLine[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'price_including_tax' => null,
        'product_id' => 'int64',
        'quantity' => null,
        'recalculate_price' => null,
        'tax_lines' => null
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'price_including_tax' => 'priceIncludingTax',
        'product_id' => 'productId',
        'quantity' => 'quantity',
        'recalculate_price' => 'recalculatePrice',
        'tax_lines' => 'taxLines'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'price_including_tax' => 'setPriceIncludingTax',
        'product_id' => 'setProductId',
        'quantity' => 'setQuantity',
        'recalculate_price' => 'setRecalculatePrice',
        'tax_lines' => 'setTaxLines'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'price_including_tax' => 'getPriceIncludingTax',
        'product_id' => 'getProductId',
        'quantity' => 'getQuantity',
        'recalculate_price' => 'getRecalculatePrice',
        'tax_lines' => 'getTaxLines'
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
        
        $this->container['price_including_tax'] = isset($data['price_including_tax']) ? $data['price_including_tax'] : null;
        
        $this->container['product_id'] = isset($data['product_id']) ? $data['product_id'] : null;
        
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        
        $this->container['recalculate_price'] = isset($data['recalculate_price']) ? $data['recalculate_price'] : null;
        
        $this->container['tax_lines'] = isset($data['tax_lines']) ? $data['tax_lines'] : null;
        
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
     * Gets price_including_tax
     *
     * @return float
     */
    public function getPriceIncludingTax()
    {
        return $this->container['price_including_tax'];
    }

    /**
     * Sets price_including_tax
     *
     * @param float $price_including_tax 
     *
     * @return $this
     */
    public function setPriceIncludingTax($price_including_tax)
    {
        $this->container['price_including_tax'] = $price_including_tax;

        return $this;
    }
    

    /**
     * Gets product_id
     *
     * @return int
     */
    public function getProductId()
    {
        return $this->container['product_id'];
    }

    /**
     * Sets product_id
     *
     * @param int $product_id 
     *
     * @return $this
     */
    public function setProductId($product_id)
    {
        $this->container['product_id'] = $product_id;

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
     * Gets recalculate_price
     *
     * @return bool
     */
    public function getRecalculatePrice()
    {
        return $this->container['recalculate_price'];
    }

    /**
     * Sets recalculate_price
     *
     * @param bool $recalculate_price 
     *
     * @return $this
     */
    public function setRecalculatePrice($recalculate_price)
    {
        $this->container['recalculate_price'] = $recalculate_price;

        return $this;
    }
    

    /**
     * Gets tax_lines
     *
     * @return \Wallee\Sdk\Model\ShopifySubscriptionModelTaxLine[]
     */
    public function getTaxLines()
    {
        return $this->container['tax_lines'];
    }

    /**
     * Sets tax_lines
     *
     * @param \Wallee\Sdk\Model\ShopifySubscriptionModelTaxLine[] $tax_lines 
     *
     * @return $this
     */
    public function setTaxLines($tax_lines)
    {
        $this->container['tax_lines'] = $tax_lines;

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


