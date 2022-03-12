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
 * PaymentMethod model
 *
 * @category    Class
 * @description 
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class PaymentMethod implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PaymentMethod';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'data_collection_types' => '\Wallee\Sdk\Model\DataCollectionType[]',
        'description' => 'map[string,string]',
        'id' => 'int',
        'image_path' => 'string',
        'merchant_description' => 'map[string,string]',
        'name' => 'map[string,string]',
        'supported_currencies' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'data_collection_types' => null,
        'description' => null,
        'id' => 'int64',
        'image_path' => null,
        'merchant_description' => null,
        'name' => null,
        'supported_currencies' => null
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'data_collection_types' => 'dataCollectionTypes',
        'description' => 'description',
        'id' => 'id',
        'image_path' => 'imagePath',
        'merchant_description' => 'merchantDescription',
        'name' => 'name',
        'supported_currencies' => 'supportedCurrencies'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'data_collection_types' => 'setDataCollectionTypes',
        'description' => 'setDescription',
        'id' => 'setId',
        'image_path' => 'setImagePath',
        'merchant_description' => 'setMerchantDescription',
        'name' => 'setName',
        'supported_currencies' => 'setSupportedCurrencies'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'data_collection_types' => 'getDataCollectionTypes',
        'description' => 'getDescription',
        'id' => 'getId',
        'image_path' => 'getImagePath',
        'merchant_description' => 'getMerchantDescription',
        'name' => 'getName',
        'supported_currencies' => 'getSupportedCurrencies'
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
        
        $this->container['data_collection_types'] = isset($data['data_collection_types']) ? $data['data_collection_types'] : null;
        
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        
        $this->container['image_path'] = isset($data['image_path']) ? $data['image_path'] : null;
        
        $this->container['merchant_description'] = isset($data['merchant_description']) ? $data['merchant_description'] : null;
        
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        
        $this->container['supported_currencies'] = isset($data['supported_currencies']) ? $data['supported_currencies'] : null;
        
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
     * Gets data_collection_types
     *
     * @return \Wallee\Sdk\Model\DataCollectionType[]
     */
    public function getDataCollectionTypes()
    {
        return $this->container['data_collection_types'];
    }

    /**
     * Sets data_collection_types
     *
     * @param \Wallee\Sdk\Model\DataCollectionType[] $data_collection_types 
     *
     * @return $this
     */
    public function setDataCollectionTypes($data_collection_types)
    {
        $this->container['data_collection_types'] = $data_collection_types;

        return $this;
    }
    

    /**
     * Gets description
     *
     * @return map[string,string]
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param map[string,string] $description 
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }
    

    /**
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id The ID is the primary key of the entity. The ID identifies the entity uniquely.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }
    

    /**
     * Gets image_path
     *
     * @return string
     */
    public function getImagePath()
    {
        return $this->container['image_path'];
    }

    /**
     * Sets image_path
     *
     * @param string $image_path 
     *
     * @return $this
     */
    public function setImagePath($image_path)
    {
        $this->container['image_path'] = $image_path;

        return $this;
    }
    

    /**
     * Gets merchant_description
     *
     * @return map[string,string]
     */
    public function getMerchantDescription()
    {
        return $this->container['merchant_description'];
    }

    /**
     * Sets merchant_description
     *
     * @param map[string,string] $merchant_description 
     *
     * @return $this
     */
    public function setMerchantDescription($merchant_description)
    {
        $this->container['merchant_description'] = $merchant_description;

        return $this;
    }
    

    /**
     * Gets name
     *
     * @return map[string,string]
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param map[string,string] $name 
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }
    

    /**
     * Gets supported_currencies
     *
     * @return string[]
     */
    public function getSupportedCurrencies()
    {
        return $this->container['supported_currencies'];
    }

    /**
     * Sets supported_currencies
     *
     * @param string[] $supported_currencies 
     *
     * @return $this
     */
    public function setSupportedCurrencies($supported_currencies)
    {
        $this->container['supported_currencies'] = $supported_currencies;

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


