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
 * RefundCreate model
 *
 * @category    Class
 * @description The refund represents a credit back to the customer. It can be issued by the merchant or by the customer (reversal).
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class RefundCreate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Refund.Create';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'amount' => 'float',
        'completion' => 'int',
        'external_id' => 'string',
        'merchant_reference' => 'string',
        'reductions' => '\Wallee\Sdk\Model\LineItemReductionCreate[]',
        'transaction' => 'int',
        'type' => '\Wallee\Sdk\Model\RefundType'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'amount' => null,
        'completion' => 'int64',
        'external_id' => null,
        'merchant_reference' => null,
        'reductions' => null,
        'transaction' => 'int64',
        'type' => null
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'amount' => 'amount',
        'completion' => 'completion',
        'external_id' => 'externalId',
        'merchant_reference' => 'merchantReference',
        'reductions' => 'reductions',
        'transaction' => 'transaction',
        'type' => 'type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amount' => 'setAmount',
        'completion' => 'setCompletion',
        'external_id' => 'setExternalId',
        'merchant_reference' => 'setMerchantReference',
        'reductions' => 'setReductions',
        'transaction' => 'setTransaction',
        'type' => 'setType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amount' => 'getAmount',
        'completion' => 'getCompletion',
        'external_id' => 'getExternalId',
        'merchant_reference' => 'getMerchantReference',
        'reductions' => 'getReductions',
        'transaction' => 'getTransaction',
        'type' => 'getType'
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
        
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        
        $this->container['completion'] = isset($data['completion']) ? $data['completion'] : null;
        
        $this->container['external_id'] = isset($data['external_id']) ? $data['external_id'] : null;
        
        $this->container['merchant_reference'] = isset($data['merchant_reference']) ? $data['merchant_reference'] : null;
        
        $this->container['reductions'] = isset($data['reductions']) ? $data['reductions'] : null;
        
        $this->container['transaction'] = isset($data['transaction']) ? $data['transaction'] : null;
        
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        
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

        if (!is_null($this->container['merchant_reference']) && (mb_strlen($this->container['merchant_reference']) > 100)) {
            $invalidProperties[] = "invalid value for 'merchant_reference', the character length must be smaller than or equal to 100.";
        }

        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
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
     * Gets amount
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param float $amount 
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }
    

    /**
     * Gets completion
     *
     * @return int
     */
    public function getCompletion()
    {
        return $this->container['completion'];
    }

    /**
     * Sets completion
     *
     * @param int $completion 
     *
     * @return $this
     */
    public function setCompletion($completion)
    {
        $this->container['completion'] = $completion;

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
     * @param string $external_id The external id helps to identify duplicate calls to the refund service. As such the external ID has to be unique per transaction.
     *
     * @return $this
     */
    public function setExternalId($external_id)
    {
        if ((mb_strlen($external_id) > 100)) {
            throw new \InvalidArgumentException('invalid length for $external_id when calling RefundCreate., must be smaller than or equal to 100.');
        }
        if ((mb_strlen($external_id) < 1)) {
            throw new \InvalidArgumentException('invalid length for $external_id when calling RefundCreate., must be bigger than or equal to 1.');
        }

        $this->container['external_id'] = $external_id;

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
            throw new \InvalidArgumentException('invalid length for $merchant_reference when calling RefundCreate., must be smaller than or equal to 100.');
        }

        $this->container['merchant_reference'] = $merchant_reference;

        return $this;
    }
    

    /**
     * Gets reductions
     *
     * @return \Wallee\Sdk\Model\LineItemReductionCreate[]
     */
    public function getReductions()
    {
        return $this->container['reductions'];
    }

    /**
     * Sets reductions
     *
     * @param \Wallee\Sdk\Model\LineItemReductionCreate[] $reductions 
     *
     * @return $this
     */
    public function setReductions($reductions)
    {
        $this->container['reductions'] = $reductions;

        return $this;
    }
    

    /**
     * Gets transaction
     *
     * @return int
     */
    public function getTransaction()
    {
        return $this->container['transaction'];
    }

    /**
     * Sets transaction
     *
     * @param int $transaction 
     *
     * @return $this
     */
    public function setTransaction($transaction)
    {
        $this->container['transaction'] = $transaction;

        return $this;
    }
    

    /**
     * Gets type
     *
     * @return \Wallee\Sdk\Model\RefundType
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \Wallee\Sdk\Model\RefundType $type 
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

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


