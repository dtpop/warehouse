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
 * SubscriptionLedgerEntryCreate model
 *
 * @category    Class
 * @description The subscription ledger entry represents a single change on the subscription balance.
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class SubscriptionLedgerEntryCreate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SubscriptionLedgerEntry.Create';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'amount_including_tax' => 'float',
        'external_id' => 'string',
        'quantity' => 'float',
        'subscription_version' => 'int',
        'taxes' => '\Wallee\Sdk\Model\TaxCreate[]',
        'title' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'amount_including_tax' => null,
        'external_id' => null,
        'quantity' => null,
        'subscription_version' => 'int64',
        'taxes' => null,
        'title' => null
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'amount_including_tax' => 'amountIncludingTax',
        'external_id' => 'externalId',
        'quantity' => 'quantity',
        'subscription_version' => 'subscriptionVersion',
        'taxes' => 'taxes',
        'title' => 'title'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amount_including_tax' => 'setAmountIncludingTax',
        'external_id' => 'setExternalId',
        'quantity' => 'setQuantity',
        'subscription_version' => 'setSubscriptionVersion',
        'taxes' => 'setTaxes',
        'title' => 'setTitle'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amount_including_tax' => 'getAmountIncludingTax',
        'external_id' => 'getExternalId',
        'quantity' => 'getQuantity',
        'subscription_version' => 'getSubscriptionVersion',
        'taxes' => 'getTaxes',
        'title' => 'getTitle'
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
        
        $this->container['external_id'] = isset($data['external_id']) ? $data['external_id'] : null;
        
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        
        $this->container['subscription_version'] = isset($data['subscription_version']) ? $data['subscription_version'] : null;
        
        $this->container['taxes'] = isset($data['taxes']) ? $data['taxes'] : null;
        
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        
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
        if ($this->container['external_id'] === null) {
            $invalidProperties[] = "'external_id' can't be null";
        }
        if ($this->container['quantity'] === null) {
            $invalidProperties[] = "'quantity' can't be null";
        }
        if ($this->container['subscription_version'] === null) {
            $invalidProperties[] = "'subscription_version' can't be null";
        }
        if ($this->container['title'] === null) {
            $invalidProperties[] = "'title' can't be null";
        }
        if ((mb_strlen($this->container['title']) > 150)) {
            $invalidProperties[] = "invalid value for 'title', the character length must be smaller than or equal to 150.";
        }

        if ((mb_strlen($this->container['title']) < 1)) {
            $invalidProperties[] = "invalid value for 'title', the character length must be bigger than or equal to 1.";
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
     * Gets external_id
     *
     * @return string
     */
    public function getExternalId()
    {
        return $this->container['external_id'];
    }

    /**
     * Sets external_id
     *
     * @param string $external_id A client generated nonce which identifies the entity to be created. Subsequent creation requests with the same external ID will not create new entities but return the initially created entity instead.
     *
     * @return $this
     */
    public function setExternalId($external_id)
    {
        $this->container['external_id'] = $external_id;

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
     * Gets subscription_version
     *
     * @return int
     */
    public function getSubscriptionVersion()
    {
        return $this->container['subscription_version'];
    }

    /**
     * Sets subscription_version
     *
     * @param int $subscription_version 
     *
     * @return $this
     */
    public function setSubscriptionVersion($subscription_version)
    {
        $this->container['subscription_version'] = $subscription_version;

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
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title 
     *
     * @return $this
     */
    public function setTitle($title)
    {
        if ((mb_strlen($title) > 150)) {
            throw new \InvalidArgumentException('invalid length for $title when calling SubscriptionLedgerEntryCreate., must be smaller than or equal to 150.');
        }
        if ((mb_strlen($title) < 1)) {
            throw new \InvalidArgumentException('invalid length for $title when calling SubscriptionLedgerEntryCreate., must be bigger than or equal to 1.');
        }

        $this->container['title'] = $title;

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


