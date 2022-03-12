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
 * AbstractCustomerActive model
 *
 * @category    Class
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class AbstractCustomerActive implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Abstract.Customer.Active';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'customer_id' => 'string',
        'email_address' => 'string',
        'family_name' => 'string',
        'given_name' => 'string',
        'language' => 'string',
        'meta_data' => 'map[string,string]',
        'preferred_currency' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'customer_id' => null,
        'email_address' => null,
        'family_name' => null,
        'given_name' => null,
        'language' => null,
        'meta_data' => null,
        'preferred_currency' => null
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'customer_id' => 'customerId',
        'email_address' => 'emailAddress',
        'family_name' => 'familyName',
        'given_name' => 'givenName',
        'language' => 'language',
        'meta_data' => 'metaData',
        'preferred_currency' => 'preferredCurrency'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'customer_id' => 'setCustomerId',
        'email_address' => 'setEmailAddress',
        'family_name' => 'setFamilyName',
        'given_name' => 'setGivenName',
        'language' => 'setLanguage',
        'meta_data' => 'setMetaData',
        'preferred_currency' => 'setPreferredCurrency'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'customer_id' => 'getCustomerId',
        'email_address' => 'getEmailAddress',
        'family_name' => 'getFamilyName',
        'given_name' => 'getGivenName',
        'language' => 'getLanguage',
        'meta_data' => 'getMetaData',
        'preferred_currency' => 'getPreferredCurrency'
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
        
        $this->container['customer_id'] = isset($data['customer_id']) ? $data['customer_id'] : null;
        
        $this->container['email_address'] = isset($data['email_address']) ? $data['email_address'] : null;
        
        $this->container['family_name'] = isset($data['family_name']) ? $data['family_name'] : null;
        
        $this->container['given_name'] = isset($data['given_name']) ? $data['given_name'] : null;
        
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        
        $this->container['meta_data'] = isset($data['meta_data']) ? $data['meta_data'] : null;
        
        $this->container['preferred_currency'] = isset($data['preferred_currency']) ? $data['preferred_currency'] : null;
        
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['customer_id']) && (mb_strlen($this->container['customer_id']) > 100)) {
            $invalidProperties[] = "invalid value for 'customer_id', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['email_address']) && (mb_strlen($this->container['email_address']) > 254)) {
            $invalidProperties[] = "invalid value for 'email_address', the character length must be smaller than or equal to 254.";
        }

        if (!is_null($this->container['family_name']) && (mb_strlen($this->container['family_name']) > 100)) {
            $invalidProperties[] = "invalid value for 'family_name', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['given_name']) && (mb_strlen($this->container['given_name']) > 100)) {
            $invalidProperties[] = "invalid value for 'given_name', the character length must be smaller than or equal to 100.";
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
     * Gets customer_id
     *
     * @return string
     */
    public function getCustomerId()
    {
        return $this->container['customer_id'];
    }

    /**
     * Sets customer_id
     *
     * @param string $customer_id 
     *
     * @return $this
     */
    public function setCustomerId($customer_id)
    {
        if (!is_null($customer_id) && (mb_strlen($customer_id) > 100)) {
            throw new \InvalidArgumentException('invalid length for $customer_id when calling AbstractCustomerActive., must be smaller than or equal to 100.');
        }

        $this->container['customer_id'] = $customer_id;

        return $this;
    }
    

    /**
     * Gets email_address
     *
     * @return string
     */
    public function getEmailAddress()
    {
        return $this->container['email_address'];
    }

    /**
     * Sets email_address
     *
     * @param string $email_address 
     *
     * @return $this
     */
    public function setEmailAddress($email_address)
    {
        if (!is_null($email_address) && (mb_strlen($email_address) > 254)) {
            throw new \InvalidArgumentException('invalid length for $email_address when calling AbstractCustomerActive., must be smaller than or equal to 254.');
        }

        $this->container['email_address'] = $email_address;

        return $this;
    }
    

    /**
     * Gets family_name
     *
     * @return string
     */
    public function getFamilyName()
    {
        return $this->container['family_name'];
    }

    /**
     * Sets family_name
     *
     * @param string $family_name 
     *
     * @return $this
     */
    public function setFamilyName($family_name)
    {
        if (!is_null($family_name) && (mb_strlen($family_name) > 100)) {
            throw new \InvalidArgumentException('invalid length for $family_name when calling AbstractCustomerActive., must be smaller than or equal to 100.');
        }

        $this->container['family_name'] = $family_name;

        return $this;
    }
    

    /**
     * Gets given_name
     *
     * @return string
     */
    public function getGivenName()
    {
        return $this->container['given_name'];
    }

    /**
     * Sets given_name
     *
     * @param string $given_name 
     *
     * @return $this
     */
    public function setGivenName($given_name)
    {
        if (!is_null($given_name) && (mb_strlen($given_name) > 100)) {
            throw new \InvalidArgumentException('invalid length for $given_name when calling AbstractCustomerActive., must be smaller than or equal to 100.');
        }

        $this->container['given_name'] = $given_name;

        return $this;
    }
    

    /**
     * Gets language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param string $language 
     *
     * @return $this
     */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;

        return $this;
    }
    

    /**
     * Gets meta_data
     *
     * @return map[string,string]
     */
    public function getMetaData()
    {
        return $this->container['meta_data'];
    }

    /**
     * Sets meta_data
     *
     * @param map[string,string] $meta_data Meta data allow to store additional data along the object.
     *
     * @return $this
     */
    public function setMetaData($meta_data)
    {
        $this->container['meta_data'] = $meta_data;

        return $this;
    }
    

    /**
     * Gets preferred_currency
     *
     * @return string
     */
    public function getPreferredCurrency()
    {
        return $this->container['preferred_currency'];
    }

    /**
     * Sets preferred_currency
     *
     * @param string $preferred_currency 
     *
     * @return $this
     */
    public function setPreferredCurrency($preferred_currency)
    {
        $this->container['preferred_currency'] = $preferred_currency;

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


