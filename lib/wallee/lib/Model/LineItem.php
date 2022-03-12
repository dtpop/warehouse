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
 * LineItem model
 *
 * @category    Class
 * @description 
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class LineItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'LineItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'aggregated_tax_rate' => 'float',
        'amount_excluding_tax' => 'float',
        'amount_including_tax' => 'float',
        'attributes' => 'map[string,\Wallee\Sdk\Model\LineItemAttribute]',
        'discount_excluding_tax' => 'float',
        'discount_including_tax' => 'float',
        'name' => 'string',
        'quantity' => 'float',
        'shipping_required' => 'bool',
        'sku' => 'string',
        'tax_amount' => 'float',
        'tax_amount_per_unit' => 'float',
        'taxes' => '\Wallee\Sdk\Model\Tax[]',
        'type' => '\Wallee\Sdk\Model\LineItemType',
        'undiscounted_amount_excluding_tax' => 'float',
        'undiscounted_amount_including_tax' => 'float',
        'undiscounted_unit_price_excluding_tax' => 'float',
        'undiscounted_unit_price_including_tax' => 'float',
        'unique_id' => 'string',
        'unit_price_excluding_tax' => 'float',
        'unit_price_including_tax' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'aggregated_tax_rate' => null,
        'amount_excluding_tax' => null,
        'amount_including_tax' => null,
        'attributes' => null,
        'discount_excluding_tax' => null,
        'discount_including_tax' => null,
        'name' => null,
        'quantity' => null,
        'shipping_required' => null,
        'sku' => null,
        'tax_amount' => null,
        'tax_amount_per_unit' => null,
        'taxes' => null,
        'type' => null,
        'undiscounted_amount_excluding_tax' => null,
        'undiscounted_amount_including_tax' => null,
        'undiscounted_unit_price_excluding_tax' => null,
        'undiscounted_unit_price_including_tax' => null,
        'unique_id' => null,
        'unit_price_excluding_tax' => null,
        'unit_price_including_tax' => null
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'aggregated_tax_rate' => 'aggregatedTaxRate',
        'amount_excluding_tax' => 'amountExcludingTax',
        'amount_including_tax' => 'amountIncludingTax',
        'attributes' => 'attributes',
        'discount_excluding_tax' => 'discountExcludingTax',
        'discount_including_tax' => 'discountIncludingTax',
        'name' => 'name',
        'quantity' => 'quantity',
        'shipping_required' => 'shippingRequired',
        'sku' => 'sku',
        'tax_amount' => 'taxAmount',
        'tax_amount_per_unit' => 'taxAmountPerUnit',
        'taxes' => 'taxes',
        'type' => 'type',
        'undiscounted_amount_excluding_tax' => 'undiscountedAmountExcludingTax',
        'undiscounted_amount_including_tax' => 'undiscountedAmountIncludingTax',
        'undiscounted_unit_price_excluding_tax' => 'undiscountedUnitPriceExcludingTax',
        'undiscounted_unit_price_including_tax' => 'undiscountedUnitPriceIncludingTax',
        'unique_id' => 'uniqueId',
        'unit_price_excluding_tax' => 'unitPriceExcludingTax',
        'unit_price_including_tax' => 'unitPriceIncludingTax'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'aggregated_tax_rate' => 'setAggregatedTaxRate',
        'amount_excluding_tax' => 'setAmountExcludingTax',
        'amount_including_tax' => 'setAmountIncludingTax',
        'attributes' => 'setAttributes',
        'discount_excluding_tax' => 'setDiscountExcludingTax',
        'discount_including_tax' => 'setDiscountIncludingTax',
        'name' => 'setName',
        'quantity' => 'setQuantity',
        'shipping_required' => 'setShippingRequired',
        'sku' => 'setSku',
        'tax_amount' => 'setTaxAmount',
        'tax_amount_per_unit' => 'setTaxAmountPerUnit',
        'taxes' => 'setTaxes',
        'type' => 'setType',
        'undiscounted_amount_excluding_tax' => 'setUndiscountedAmountExcludingTax',
        'undiscounted_amount_including_tax' => 'setUndiscountedAmountIncludingTax',
        'undiscounted_unit_price_excluding_tax' => 'setUndiscountedUnitPriceExcludingTax',
        'undiscounted_unit_price_including_tax' => 'setUndiscountedUnitPriceIncludingTax',
        'unique_id' => 'setUniqueId',
        'unit_price_excluding_tax' => 'setUnitPriceExcludingTax',
        'unit_price_including_tax' => 'setUnitPriceIncludingTax'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'aggregated_tax_rate' => 'getAggregatedTaxRate',
        'amount_excluding_tax' => 'getAmountExcludingTax',
        'amount_including_tax' => 'getAmountIncludingTax',
        'attributes' => 'getAttributes',
        'discount_excluding_tax' => 'getDiscountExcludingTax',
        'discount_including_tax' => 'getDiscountIncludingTax',
        'name' => 'getName',
        'quantity' => 'getQuantity',
        'shipping_required' => 'getShippingRequired',
        'sku' => 'getSku',
        'tax_amount' => 'getTaxAmount',
        'tax_amount_per_unit' => 'getTaxAmountPerUnit',
        'taxes' => 'getTaxes',
        'type' => 'getType',
        'undiscounted_amount_excluding_tax' => 'getUndiscountedAmountExcludingTax',
        'undiscounted_amount_including_tax' => 'getUndiscountedAmountIncludingTax',
        'undiscounted_unit_price_excluding_tax' => 'getUndiscountedUnitPriceExcludingTax',
        'undiscounted_unit_price_including_tax' => 'getUndiscountedUnitPriceIncludingTax',
        'unique_id' => 'getUniqueId',
        'unit_price_excluding_tax' => 'getUnitPriceExcludingTax',
        'unit_price_including_tax' => 'getUnitPriceIncludingTax'
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
        
        $this->container['aggregated_tax_rate'] = isset($data['aggregated_tax_rate']) ? $data['aggregated_tax_rate'] : null;
        
        $this->container['amount_excluding_tax'] = isset($data['amount_excluding_tax']) ? $data['amount_excluding_tax'] : null;
        
        $this->container['amount_including_tax'] = isset($data['amount_including_tax']) ? $data['amount_including_tax'] : null;
        
        $this->container['attributes'] = isset($data['attributes']) ? $data['attributes'] : null;
        
        $this->container['discount_excluding_tax'] = isset($data['discount_excluding_tax']) ? $data['discount_excluding_tax'] : null;
        
        $this->container['discount_including_tax'] = isset($data['discount_including_tax']) ? $data['discount_including_tax'] : null;
        
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        
        $this->container['shipping_required'] = isset($data['shipping_required']) ? $data['shipping_required'] : null;
        
        $this->container['sku'] = isset($data['sku']) ? $data['sku'] : null;
        
        $this->container['tax_amount'] = isset($data['tax_amount']) ? $data['tax_amount'] : null;
        
        $this->container['tax_amount_per_unit'] = isset($data['tax_amount_per_unit']) ? $data['tax_amount_per_unit'] : null;
        
        $this->container['taxes'] = isset($data['taxes']) ? $data['taxes'] : null;
        
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        
        $this->container['undiscounted_amount_excluding_tax'] = isset($data['undiscounted_amount_excluding_tax']) ? $data['undiscounted_amount_excluding_tax'] : null;
        
        $this->container['undiscounted_amount_including_tax'] = isset($data['undiscounted_amount_including_tax']) ? $data['undiscounted_amount_including_tax'] : null;
        
        $this->container['undiscounted_unit_price_excluding_tax'] = isset($data['undiscounted_unit_price_excluding_tax']) ? $data['undiscounted_unit_price_excluding_tax'] : null;
        
        $this->container['undiscounted_unit_price_including_tax'] = isset($data['undiscounted_unit_price_including_tax']) ? $data['undiscounted_unit_price_including_tax'] : null;
        
        $this->container['unique_id'] = isset($data['unique_id']) ? $data['unique_id'] : null;
        
        $this->container['unit_price_excluding_tax'] = isset($data['unit_price_excluding_tax']) ? $data['unit_price_excluding_tax'] : null;
        
        $this->container['unit_price_including_tax'] = isset($data['unit_price_including_tax']) ? $data['unit_price_including_tax'] : null;
        
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 150)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 150.";
        }

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['sku']) && (mb_strlen($this->container['sku']) > 200)) {
            $invalidProperties[] = "invalid value for 'sku', the character length must be smaller than or equal to 200.";
        }

        if (!is_null($this->container['unique_id']) && (mb_strlen($this->container['unique_id']) > 200)) {
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
     * Gets aggregated_tax_rate
     *
     * @return float
     */
    public function getAggregatedTaxRate()
    {
        return $this->container['aggregated_tax_rate'];
    }

    /**
     * Sets aggregated_tax_rate
     *
     * @param float $aggregated_tax_rate The aggregated tax rate is the sum of all tax rates of the line item.
     *
     * @return $this
     */
    public function setAggregatedTaxRate($aggregated_tax_rate)
    {
        $this->container['aggregated_tax_rate'] = $aggregated_tax_rate;

        return $this;
    }
    

    /**
     * Gets amount_excluding_tax
     *
     * @return float
     */
    public function getAmountExcludingTax()
    {
        return $this->container['amount_excluding_tax'];
    }

    /**
     * Sets amount_excluding_tax
     *
     * @param float $amount_excluding_tax 
     *
     * @return $this
     */
    public function setAmountExcludingTax($amount_excluding_tax)
    {
        $this->container['amount_excluding_tax'] = $amount_excluding_tax;

        return $this;
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
     * @return map[string,\Wallee\Sdk\Model\LineItemAttribute]
     */
    public function getAttributes()
    {
        return $this->container['attributes'];
    }

    /**
     * Sets attributes
     *
     * @param map[string,\Wallee\Sdk\Model\LineItemAttribute] $attributes 
     *
     * @return $this
     */
    public function setAttributes($attributes)
    {
        $this->container['attributes'] = $attributes;

        return $this;
    }
    

    /**
     * Gets discount_excluding_tax
     *
     * @return float
     */
    public function getDiscountExcludingTax()
    {
        return $this->container['discount_excluding_tax'];
    }

    /**
     * Sets discount_excluding_tax
     *
     * @param float $discount_excluding_tax 
     *
     * @return $this
     */
    public function setDiscountExcludingTax($discount_excluding_tax)
    {
        $this->container['discount_excluding_tax'] = $discount_excluding_tax;

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
        if (!is_null($name) && (mb_strlen($name) > 150)) {
            throw new \InvalidArgumentException('invalid length for $name when calling LineItem., must be smaller than or equal to 150.');
        }
        if (!is_null($name) && (mb_strlen($name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $name when calling LineItem., must be bigger than or equal to 1.');
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
            throw new \InvalidArgumentException('invalid length for $sku when calling LineItem., must be smaller than or equal to 200.');
        }

        $this->container['sku'] = $sku;

        return $this;
    }
    

    /**
     * Gets tax_amount
     *
     * @return float
     */
    public function getTaxAmount()
    {
        return $this->container['tax_amount'];
    }

    /**
     * Sets tax_amount
     *
     * @param float $tax_amount 
     *
     * @return $this
     */
    public function setTaxAmount($tax_amount)
    {
        $this->container['tax_amount'] = $tax_amount;

        return $this;
    }
    

    /**
     * Gets tax_amount_per_unit
     *
     * @return float
     */
    public function getTaxAmountPerUnit()
    {
        return $this->container['tax_amount_per_unit'];
    }

    /**
     * Sets tax_amount_per_unit
     *
     * @param float $tax_amount_per_unit 
     *
     * @return $this
     */
    public function setTaxAmountPerUnit($tax_amount_per_unit)
    {
        $this->container['tax_amount_per_unit'] = $tax_amount_per_unit;

        return $this;
    }
    

    /**
     * Gets taxes
     *
     * @return \Wallee\Sdk\Model\Tax[]
     */
    public function getTaxes()
    {
        return $this->container['taxes'];
    }

    /**
     * Sets taxes
     *
     * @param \Wallee\Sdk\Model\Tax[] $taxes 
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
     * Gets undiscounted_amount_excluding_tax
     *
     * @return float
     */
    public function getUndiscountedAmountExcludingTax()
    {
        return $this->container['undiscounted_amount_excluding_tax'];
    }

    /**
     * Sets undiscounted_amount_excluding_tax
     *
     * @param float $undiscounted_amount_excluding_tax 
     *
     * @return $this
     */
    public function setUndiscountedAmountExcludingTax($undiscounted_amount_excluding_tax)
    {
        $this->container['undiscounted_amount_excluding_tax'] = $undiscounted_amount_excluding_tax;

        return $this;
    }
    

    /**
     * Gets undiscounted_amount_including_tax
     *
     * @return float
     */
    public function getUndiscountedAmountIncludingTax()
    {
        return $this->container['undiscounted_amount_including_tax'];
    }

    /**
     * Sets undiscounted_amount_including_tax
     *
     * @param float $undiscounted_amount_including_tax 
     *
     * @return $this
     */
    public function setUndiscountedAmountIncludingTax($undiscounted_amount_including_tax)
    {
        $this->container['undiscounted_amount_including_tax'] = $undiscounted_amount_including_tax;

        return $this;
    }
    

    /**
     * Gets undiscounted_unit_price_excluding_tax
     *
     * @return float
     */
    public function getUndiscountedUnitPriceExcludingTax()
    {
        return $this->container['undiscounted_unit_price_excluding_tax'];
    }

    /**
     * Sets undiscounted_unit_price_excluding_tax
     *
     * @param float $undiscounted_unit_price_excluding_tax 
     *
     * @return $this
     */
    public function setUndiscountedUnitPriceExcludingTax($undiscounted_unit_price_excluding_tax)
    {
        $this->container['undiscounted_unit_price_excluding_tax'] = $undiscounted_unit_price_excluding_tax;

        return $this;
    }
    

    /**
     * Gets undiscounted_unit_price_including_tax
     *
     * @return float
     */
    public function getUndiscountedUnitPriceIncludingTax()
    {
        return $this->container['undiscounted_unit_price_including_tax'];
    }

    /**
     * Sets undiscounted_unit_price_including_tax
     *
     * @param float $undiscounted_unit_price_including_tax 
     *
     * @return $this
     */
    public function setUndiscountedUnitPriceIncludingTax($undiscounted_unit_price_including_tax)
    {
        $this->container['undiscounted_unit_price_including_tax'] = $undiscounted_unit_price_including_tax;

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
        if (!is_null($unique_id) && (mb_strlen($unique_id) > 200)) {
            throw new \InvalidArgumentException('invalid length for $unique_id when calling LineItem., must be smaller than or equal to 200.');
        }

        $this->container['unique_id'] = $unique_id;

        return $this;
    }
    

    /**
     * Gets unit_price_excluding_tax
     *
     * @return float
     */
    public function getUnitPriceExcludingTax()
    {
        return $this->container['unit_price_excluding_tax'];
    }

    /**
     * Sets unit_price_excluding_tax
     *
     * @param float $unit_price_excluding_tax 
     *
     * @return $this
     */
    public function setUnitPriceExcludingTax($unit_price_excluding_tax)
    {
        $this->container['unit_price_excluding_tax'] = $unit_price_excluding_tax;

        return $this;
    }
    

    /**
     * Gets unit_price_including_tax
     *
     * @return float
     */
    public function getUnitPriceIncludingTax()
    {
        return $this->container['unit_price_including_tax'];
    }

    /**
     * Sets unit_price_including_tax
     *
     * @param float $unit_price_including_tax 
     *
     * @return $this
     */
    public function setUnitPriceIncludingTax($unit_price_including_tax)
    {
        $this->container['unit_price_including_tax'] = $unit_price_including_tax;

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


