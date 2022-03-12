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
 * RestCountry model
 *
 * @category    Class
 * @description 
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class RestCountry implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RestCountry';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'iso_code2_letter' => 'string',
        'iso_code3_letter' => 'string',
        'address_format' => '\Wallee\Sdk\Model\RestAddressFormat',
        'name' => 'string',
        'numeric_code' => 'string',
        'state_codes' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'iso_code2_letter' => null,
        'iso_code3_letter' => null,
        'address_format' => null,
        'name' => null,
        'numeric_code' => null,
        'state_codes' => null
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'iso_code2_letter' => 'ISOCode2Letter',
        'iso_code3_letter' => 'ISOCode3Letter',
        'address_format' => 'addressFormat',
        'name' => 'name',
        'numeric_code' => 'numericCode',
        'state_codes' => 'stateCodes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'iso_code2_letter' => 'setIsoCode2Letter',
        'iso_code3_letter' => 'setIsoCode3Letter',
        'address_format' => 'setAddressFormat',
        'name' => 'setName',
        'numeric_code' => 'setNumericCode',
        'state_codes' => 'setStateCodes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'iso_code2_letter' => 'getIsoCode2Letter',
        'iso_code3_letter' => 'getIsoCode3Letter',
        'address_format' => 'getAddressFormat',
        'name' => 'getName',
        'numeric_code' => 'getNumericCode',
        'state_codes' => 'getStateCodes'
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
        
        $this->container['iso_code2_letter'] = isset($data['iso_code2_letter']) ? $data['iso_code2_letter'] : null;
        
        $this->container['iso_code3_letter'] = isset($data['iso_code3_letter']) ? $data['iso_code3_letter'] : null;
        
        $this->container['address_format'] = isset($data['address_format']) ? $data['address_format'] : null;
        
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        
        $this->container['numeric_code'] = isset($data['numeric_code']) ? $data['numeric_code'] : null;
        
        $this->container['state_codes'] = isset($data['state_codes']) ? $data['state_codes'] : null;
        
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
     * Gets iso_code2_letter
     *
     * @return string
     */
    public function getIsoCode2Letter()
    {
        return $this->container['iso_code2_letter'];
    }

    /**
     * Sets iso_code2_letter
     *
     * @param string $iso_code2_letter The ISO code 2 letter identifies the country by two chars as defined in ISO 3166-1 (e.g. US, DE, CH).
     *
     * @return $this
     */
    public function setIsoCode2Letter($iso_code2_letter)
    {
        $this->container['iso_code2_letter'] = $iso_code2_letter;

        return $this;
    }
    

    /**
     * Gets iso_code3_letter
     *
     * @return string
     */
    public function getIsoCode3Letter()
    {
        return $this->container['iso_code3_letter'];
    }

    /**
     * Sets iso_code3_letter
     *
     * @param string $iso_code3_letter The ISO code 3 letter identifies the country by three chars as defined in ISO 3166-1 (e.g. CHE, USA, GBR).
     *
     * @return $this
     */
    public function setIsoCode3Letter($iso_code3_letter)
    {
        $this->container['iso_code3_letter'] = $iso_code3_letter;

        return $this;
    }
    

    /**
     * Gets address_format
     *
     * @return \Wallee\Sdk\Model\RestAddressFormat
     */
    public function getAddressFormat()
    {
        return $this->container['address_format'];
    }

    /**
     * Sets address_format
     *
     * @param \Wallee\Sdk\Model\RestAddressFormat $address_format The address format of the country indicates how an address has to look like for the country.
     *
     * @return $this
     */
    public function setAddressFormat($address_format)
    {
        $this->container['address_format'] = $address_format;

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
     * @param string $name The name labels the country by a name in English.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }
    

    /**
     * Gets numeric_code
     *
     * @return string
     */
    public function getNumericCode()
    {
        return $this->container['numeric_code'];
    }

    /**
     * Sets numeric_code
     *
     * @param string $numeric_code The numeric code identifies the country by a three digit number as defined in ISO 3166-1 (e.g. 840, 826, 756).
     *
     * @return $this
     */
    public function setNumericCode($numeric_code)
    {
        $this->container['numeric_code'] = $numeric_code;

        return $this;
    }
    

    /**
     * Gets state_codes
     *
     * @return string[]
     */
    public function getStateCodes()
    {
        return $this->container['state_codes'];
    }

    /**
     * Sets state_codes
     *
     * @param string[] $state_codes The state codes field is a list of all states associated with this country. The list contains the identifiers of the states. The identifiers corresponds to the ISO 3166-2 subdivision identifier.
     *
     * @return $this
     */
    public function setStateCodes($state_codes)
    {
        $this->container['state_codes'] = $state_codes;

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


