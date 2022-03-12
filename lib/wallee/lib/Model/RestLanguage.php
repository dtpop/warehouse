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
 * RestLanguage model
 *
 * @category    Class
 * @description 
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class RestLanguage implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RestLanguage';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'country_code' => 'string',
        'ietf_code' => 'string',
        'iso2_code' => 'string',
        'iso3_code' => 'string',
        'plural_expression' => 'string',
        'primary_of_group' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'country_code' => null,
        'ietf_code' => null,
        'iso2_code' => null,
        'iso3_code' => null,
        'plural_expression' => null,
        'primary_of_group' => null
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'country_code' => 'countryCode',
        'ietf_code' => 'ietfCode',
        'iso2_code' => 'iso2Code',
        'iso3_code' => 'iso3Code',
        'plural_expression' => 'pluralExpression',
        'primary_of_group' => 'primaryOfGroup'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'country_code' => 'setCountryCode',
        'ietf_code' => 'setIetfCode',
        'iso2_code' => 'setIso2Code',
        'iso3_code' => 'setIso3Code',
        'plural_expression' => 'setPluralExpression',
        'primary_of_group' => 'setPrimaryOfGroup'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'country_code' => 'getCountryCode',
        'ietf_code' => 'getIetfCode',
        'iso2_code' => 'getIso2Code',
        'iso3_code' => 'getIso3Code',
        'plural_expression' => 'getPluralExpression',
        'primary_of_group' => 'getPrimaryOfGroup'
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
        
        $this->container['country_code'] = isset($data['country_code']) ? $data['country_code'] : null;
        
        $this->container['ietf_code'] = isset($data['ietf_code']) ? $data['ietf_code'] : null;
        
        $this->container['iso2_code'] = isset($data['iso2_code']) ? $data['iso2_code'] : null;
        
        $this->container['iso3_code'] = isset($data['iso3_code']) ? $data['iso3_code'] : null;
        
        $this->container['plural_expression'] = isset($data['plural_expression']) ? $data['plural_expression'] : null;
        
        $this->container['primary_of_group'] = isset($data['primary_of_group']) ? $data['primary_of_group'] : null;
        
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
     * Gets country_code
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->container['country_code'];
    }

    /**
     * Sets country_code
     *
     * @param string $country_code The country code represents the region of the language as a 2 letter ISO code.
     *
     * @return $this
     */
    public function setCountryCode($country_code)
    {
        $this->container['country_code'] = $country_code;

        return $this;
    }
    

    /**
     * Gets ietf_code
     *
     * @return string
     */
    public function getIetfCode()
    {
        return $this->container['ietf_code'];
    }

    /**
     * Sets ietf_code
     *
     * @param string $ietf_code The IETF code represents the language as the two letter ISO code including the region (e.g. en-US).
     *
     * @return $this
     */
    public function setIetfCode($ietf_code)
    {
        $this->container['ietf_code'] = $ietf_code;

        return $this;
    }
    

    /**
     * Gets iso2_code
     *
     * @return string
     */
    public function getIso2Code()
    {
        return $this->container['iso2_code'];
    }

    /**
     * Sets iso2_code
     *
     * @param string $iso2_code The ISO 2 letter code represents the language with two letters.
     *
     * @return $this
     */
    public function setIso2Code($iso2_code)
    {
        $this->container['iso2_code'] = $iso2_code;

        return $this;
    }
    

    /**
     * Gets iso3_code
     *
     * @return string
     */
    public function getIso3Code()
    {
        return $this->container['iso3_code'];
    }

    /**
     * Sets iso3_code
     *
     * @param string $iso3_code The ISO 3 letter code represents the language with three letters.
     *
     * @return $this
     */
    public function setIso3Code($iso3_code)
    {
        $this->container['iso3_code'] = $iso3_code;

        return $this;
    }
    

    /**
     * Gets plural_expression
     *
     * @return string
     */
    public function getPluralExpression()
    {
        return $this->container['plural_expression'];
    }

    /**
     * Sets plural_expression
     *
     * @param string $plural_expression The plural expression defines how to map a plural into the language index. This expression is used to determine the plural form for the translations.
     *
     * @return $this
     */
    public function setPluralExpression($plural_expression)
    {
        $this->container['plural_expression'] = $plural_expression;

        return $this;
    }
    

    /**
     * Gets primary_of_group
     *
     * @return bool
     */
    public function getPrimaryOfGroup()
    {
        return $this->container['primary_of_group'];
    }

    /**
     * Sets primary_of_group
     *
     * @param bool $primary_of_group The primary language of a group indicates whether a language is the primary language of a group of languages. The group is determine by the ISO 2 letter code.
     *
     * @return $this
     */
    public function setPrimaryOfGroup($primary_of_group)
    {
        $this->container['primary_of_group'] = $primary_of_group;

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


