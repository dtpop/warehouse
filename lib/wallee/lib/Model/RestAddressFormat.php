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
 * RestAddressFormat model
 *
 * @category    Class
 * @description 
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class RestAddressFormat implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RestAddressFormat';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'post_code_examples' => 'string[]',
        'post_code_regex' => 'string',
        'required_fields' => '\Wallee\Sdk\Model\RestAddressFormatField[]',
        'used_fields' => '\Wallee\Sdk\Model\RestAddressFormatField[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'post_code_examples' => null,
        'post_code_regex' => null,
        'required_fields' => null,
        'used_fields' => null
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'post_code_examples' => 'postCodeExamples',
        'post_code_regex' => 'postCodeRegex',
        'required_fields' => 'requiredFields',
        'used_fields' => 'usedFields'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'post_code_examples' => 'setPostCodeExamples',
        'post_code_regex' => 'setPostCodeRegex',
        'required_fields' => 'setRequiredFields',
        'used_fields' => 'setUsedFields'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'post_code_examples' => 'getPostCodeExamples',
        'post_code_regex' => 'getPostCodeRegex',
        'required_fields' => 'getRequiredFields',
        'used_fields' => 'getUsedFields'
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
        
        $this->container['post_code_examples'] = isset($data['post_code_examples']) ? $data['post_code_examples'] : null;
        
        $this->container['post_code_regex'] = isset($data['post_code_regex']) ? $data['post_code_regex'] : null;
        
        $this->container['required_fields'] = isset($data['required_fields']) ? $data['required_fields'] : null;
        
        $this->container['used_fields'] = isset($data['used_fields']) ? $data['used_fields'] : null;
        
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
     * Gets post_code_examples
     *
     * @return string[]
     */
    public function getPostCodeExamples()
    {
        return $this->container['post_code_examples'];
    }

    /**
     * Sets post_code_examples
     *
     * @param string[] $post_code_examples The example post codes allow the user to understand what we expect here.
     *
     * @return $this
     */
    public function setPostCodeExamples($post_code_examples)
    {
        $this->container['post_code_examples'] = $post_code_examples;

        return $this;
    }
    

    /**
     * Gets post_code_regex
     *
     * @return string
     */
    public function getPostCodeRegex()
    {
        return $this->container['post_code_regex'];
    }

    /**
     * Sets post_code_regex
     *
     * @param string $post_code_regex The post code regex is a regular expression which can validates the input of the post code.
     *
     * @return $this
     */
    public function setPostCodeRegex($post_code_regex)
    {
        $this->container['post_code_regex'] = $post_code_regex;

        return $this;
    }
    

    /**
     * Gets required_fields
     *
     * @return \Wallee\Sdk\Model\RestAddressFormatField[]
     */
    public function getRequiredFields()
    {
        return $this->container['required_fields'];
    }

    /**
     * Sets required_fields
     *
     * @param \Wallee\Sdk\Model\RestAddressFormatField[] $required_fields The required fields indicate what fields are required within an address to comply with the address format.
     *
     * @return $this
     */
    public function setRequiredFields($required_fields)
    {
        $this->container['required_fields'] = $required_fields;

        return $this;
    }
    

    /**
     * Gets used_fields
     *
     * @return \Wallee\Sdk\Model\RestAddressFormatField[]
     */
    public function getUsedFields()
    {
        return $this->container['used_fields'];
    }

    /**
     * Sets used_fields
     *
     * @param \Wallee\Sdk\Model\RestAddressFormatField[] $used_fields The used fields indicate what fields are used within this address format.
     *
     * @return $this
     */
    public function setUsedFields($used_fields)
    {
        $this->container['used_fields'] = $used_fields;

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


