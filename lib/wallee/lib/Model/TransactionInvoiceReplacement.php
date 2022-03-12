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
 * TransactionInvoiceReplacement model
 *
 * @category    Class
 * @description 
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class TransactionInvoiceReplacement implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TransactionInvoiceReplacement';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'billing_address' => '\Wallee\Sdk\Model\AddressCreate',
        'due_on' => '\DateTime',
        'external_id' => 'string',
        'line_items' => '\Wallee\Sdk\Model\LineItemCreate[]',
        'merchant_reference' => 'string',
        'sent_to_customer' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'billing_address' => null,
        'due_on' => 'date-time',
        'external_id' => null,
        'line_items' => null,
        'merchant_reference' => null,
        'sent_to_customer' => null
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'billing_address' => 'billingAddress',
        'due_on' => 'dueOn',
        'external_id' => 'externalId',
        'line_items' => 'lineItems',
        'merchant_reference' => 'merchantReference',
        'sent_to_customer' => 'sentToCustomer'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'billing_address' => 'setBillingAddress',
        'due_on' => 'setDueOn',
        'external_id' => 'setExternalId',
        'line_items' => 'setLineItems',
        'merchant_reference' => 'setMerchantReference',
        'sent_to_customer' => 'setSentToCustomer'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'billing_address' => 'getBillingAddress',
        'due_on' => 'getDueOn',
        'external_id' => 'getExternalId',
        'line_items' => 'getLineItems',
        'merchant_reference' => 'getMerchantReference',
        'sent_to_customer' => 'getSentToCustomer'
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
        
        $this->container['billing_address'] = isset($data['billing_address']) ? $data['billing_address'] : null;
        
        $this->container['due_on'] = isset($data['due_on']) ? $data['due_on'] : null;
        
        $this->container['external_id'] = isset($data['external_id']) ? $data['external_id'] : null;
        
        $this->container['line_items'] = isset($data['line_items']) ? $data['line_items'] : null;
        
        $this->container['merchant_reference'] = isset($data['merchant_reference']) ? $data['merchant_reference'] : null;
        
        $this->container['sent_to_customer'] = isset($data['sent_to_customer']) ? $data['sent_to_customer'] : null;
        
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['external_id'] === null) {
            $invalidProperties[] = "'external_id' can't be null";
        }
        if ((mb_strlen($this->container['external_id']) > 100)) {
            $invalidProperties[] = "invalid value for 'external_id', the character length must be smaller than or equal to 100.";
        }

        if ((mb_strlen($this->container['external_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'external_id', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['line_items'] === null) {
            $invalidProperties[] = "'line_items' can't be null";
        }
        if (!is_null($this->container['merchant_reference']) && (mb_strlen($this->container['merchant_reference']) > 100)) {
            $invalidProperties[] = "invalid value for 'merchant_reference', the character length must be smaller than or equal to 100.";
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
     * Gets billing_address
     *
     * @return \Wallee\Sdk\Model\AddressCreate
     */
    public function getBillingAddress()
    {
        return $this->container['billing_address'];
    }

    /**
     * Sets billing_address
     *
     * @param \Wallee\Sdk\Model\AddressCreate $billing_address 
     *
     * @return $this
     */
    public function setBillingAddress($billing_address)
    {
        $this->container['billing_address'] = $billing_address;

        return $this;
    }
    

    /**
     * Gets due_on
     *
     * @return \DateTime
     */
    public function getDueOn()
    {
        return $this->container['due_on'];
    }

    /**
     * Sets due_on
     *
     * @param \DateTime $due_on The date on which the invoice should be paid on.
     *
     * @return $this
     */
    public function setDueOn($due_on)
    {
        $this->container['due_on'] = $due_on;

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
     * @param string $external_id The external id helps to identify the entity and a subsequent creation of an entity with the same ID will not create a new entity.
     *
     * @return $this
     */
    public function setExternalId($external_id)
    {
        if ((mb_strlen($external_id) > 100)) {
            throw new \InvalidArgumentException('invalid length for $external_id when calling TransactionInvoiceReplacement., must be smaller than or equal to 100.');
        }
        if ((mb_strlen($external_id) < 1)) {
            throw new \InvalidArgumentException('invalid length for $external_id when calling TransactionInvoiceReplacement., must be bigger than or equal to 1.');
        }

        $this->container['external_id'] = $external_id;

        return $this;
    }
    

    /**
     * Gets line_items
     *
     * @return \Wallee\Sdk\Model\LineItemCreate[]
     */
    public function getLineItems()
    {
        return $this->container['line_items'];
    }

    /**
     * Sets line_items
     *
     * @param \Wallee\Sdk\Model\LineItemCreate[] $line_items 
     *
     * @return $this
     */
    public function setLineItems($line_items)
    {
        $this->container['line_items'] = $line_items;

        return $this;
    }
    

    /**
     * Gets merchant_reference
     *
     * @return string
     */
    public function getMerchantReference()
    {
        return $this->container['merchant_reference'];
    }

    /**
     * Sets merchant_reference
     *
     * @param string $merchant_reference 
     *
     * @return $this
     */
    public function setMerchantReference($merchant_reference)
    {
        if (!is_null($merchant_reference) && (mb_strlen($merchant_reference) > 100)) {
            throw new \InvalidArgumentException('invalid length for $merchant_reference when calling TransactionInvoiceReplacement., must be smaller than or equal to 100.');
        }

        $this->container['merchant_reference'] = $merchant_reference;

        return $this;
    }
    

    /**
     * Gets sent_to_customer
     *
     * @return bool
     */
    public function getSentToCustomer()
    {
        return $this->container['sent_to_customer'];
    }

    /**
     * Sets sent_to_customer
     *
     * @param bool $sent_to_customer When the connector is configured to send the invoice to the customer and this property is true the customer will receive an email with the updated invoice. When this property is false no invoice is sent.
     *
     * @return $this
     */
    public function setSentToCustomer($sent_to_customer)
    {
        $this->container['sent_to_customer'] = $sent_to_customer;

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


