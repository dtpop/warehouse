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
 * TokenizedCardData model
 *
 * @category    Class
 * @description This model holds the card data in plain.
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class TokenizedCardData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TokenizedCardData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'cryptogram' => '\Wallee\Sdk\Model\CardCryptogram',
        'recurring_indicator' => '\Wallee\Sdk\Model\RecurringIndicator',
        'token_requestor_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'cryptogram' => null,
        'recurring_indicator' => null,
        'token_requestor_id' => null
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'cryptogram' => 'cryptogram',
        'recurring_indicator' => 'recurringIndicator',
        'token_requestor_id' => 'tokenRequestorId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cryptogram' => 'setCryptogram',
        'recurring_indicator' => 'setRecurringIndicator',
        'token_requestor_id' => 'setTokenRequestorId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cryptogram' => 'getCryptogram',
        'recurring_indicator' => 'getRecurringIndicator',
        'token_requestor_id' => 'getTokenRequestorId'
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
        
        $this->container['cryptogram'] = isset($data['cryptogram']) ? $data['cryptogram'] : null;
        
        $this->container['recurring_indicator'] = isset($data['recurring_indicator']) ? $data['recurring_indicator'] : null;
        
        $this->container['token_requestor_id'] = isset($data['token_requestor_id']) ? $data['token_requestor_id'] : null;
        
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
     * Gets cryptogram
     *
     * @return \Wallee\Sdk\Model\CardCryptogram
     */
    public function getCryptogram()
    {
        return $this->container['cryptogram'];
    }

    /**
     * Sets cryptogram
     *
     * @param \Wallee\Sdk\Model\CardCryptogram $cryptogram The additional authentication value used to secure the tokenized card transactions.
     *
     * @return $this
     */
    public function setCryptogram($cryptogram)
    {
        $this->container['cryptogram'] = $cryptogram;

        return $this;
    }
    

    /**
     * Gets recurring_indicator
     *
     * @return \Wallee\Sdk\Model\RecurringIndicator
     */
    public function getRecurringIndicator()
    {
        return $this->container['recurring_indicator'];
    }

    /**
     * Sets recurring_indicator
     *
     * @param \Wallee\Sdk\Model\RecurringIndicator $recurring_indicator 
     *
     * @return $this
     */
    public function setRecurringIndicator($recurring_indicator)
    {
        $this->container['recurring_indicator'] = $recurring_indicator;

        return $this;
    }
    

    /**
     * Gets token_requestor_id
     *
     * @return string
     */
    public function getTokenRequestorId()
    {
        return $this->container['token_requestor_id'];
    }

    /**
     * Sets token_requestor_id
     *
     * @param string $token_requestor_id 
     *
     * @return $this
     */
    public function setTokenRequestorId($token_requestor_id)
    {
        $this->container['token_requestor_id'] = $token_requestor_id;

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


