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
 * PaymentProcessor model
 *
 * @category    Class
 * @description 
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class PaymentProcessor implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PaymentProcessor';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'company_name' => 'map[string,string]',
        'description' => 'map[string,string]',
        'feature' => 'int',
        'headquarters_location' => 'map[string,string]',
        'id' => 'int',
        'logo_path' => 'string',
        'name' => 'map[string,string]',
        'product_name' => 'map[string,string]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'company_name' => null,
        'description' => null,
        'feature' => 'int64',
        'headquarters_location' => null,
        'id' => 'int64',
        'logo_path' => null,
        'name' => null,
        'product_name' => null
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'company_name' => 'companyName',
        'description' => 'description',
        'feature' => 'feature',
        'headquarters_location' => 'headquartersLocation',
        'id' => 'id',
        'logo_path' => 'logoPath',
        'name' => 'name',
        'product_name' => 'productName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'company_name' => 'setCompanyName',
        'description' => 'setDescription',
        'feature' => 'setFeature',
        'headquarters_location' => 'setHeadquartersLocation',
        'id' => 'setId',
        'logo_path' => 'setLogoPath',
        'name' => 'setName',
        'product_name' => 'setProductName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'company_name' => 'getCompanyName',
        'description' => 'getDescription',
        'feature' => 'getFeature',
        'headquarters_location' => 'getHeadquartersLocation',
        'id' => 'getId',
        'logo_path' => 'getLogoPath',
        'name' => 'getName',
        'product_name' => 'getProductName'
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
        
        $this->container['company_name'] = isset($data['company_name']) ? $data['company_name'] : null;
        
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        
        $this->container['feature'] = isset($data['feature']) ? $data['feature'] : null;
        
        $this->container['headquarters_location'] = isset($data['headquarters_location']) ? $data['headquarters_location'] : null;
        
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        
        $this->container['logo_path'] = isset($data['logo_path']) ? $data['logo_path'] : null;
        
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        
        $this->container['product_name'] = isset($data['product_name']) ? $data['product_name'] : null;
        
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
     * Gets company_name
     *
     * @return map[string,string]
     */
    public function getCompanyName()
    {
        return $this->container['company_name'];
    }

    /**
     * Sets company_name
     *
     * @param map[string,string] $company_name 
     *
     * @return $this
     */
    public function setCompanyName($company_name)
    {
        $this->container['company_name'] = $company_name;

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
     * Gets feature
     *
     * @return int
     */
    public function getFeature()
    {
        return $this->container['feature'];
    }

    /**
     * Sets feature
     *
     * @param int $feature 
     *
     * @return $this
     */
    public function setFeature($feature)
    {
        $this->container['feature'] = $feature;

        return $this;
    }
    

    /**
     * Gets headquarters_location
     *
     * @return map[string,string]
     */
    public function getHeadquartersLocation()
    {
        return $this->container['headquarters_location'];
    }

    /**
     * Sets headquarters_location
     *
     * @param map[string,string] $headquarters_location 
     *
     * @return $this
     */
    public function setHeadquartersLocation($headquarters_location)
    {
        $this->container['headquarters_location'] = $headquarters_location;

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
     * Gets logo_path
     *
     * @return string
     */
    public function getLogoPath()
    {
        return $this->container['logo_path'];
    }

    /**
     * Sets logo_path
     *
     * @param string $logo_path 
     *
     * @return $this
     */
    public function setLogoPath($logo_path)
    {
        $this->container['logo_path'] = $logo_path;

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
     * Gets product_name
     *
     * @return map[string,string]
     */
    public function getProductName()
    {
        return $this->container['product_name'];
    }

    /**
     * Sets product_name
     *
     * @param map[string,string] $product_name 
     *
     * @return $this
     */
    public function setProductName($product_name)
    {
        $this->container['product_name'] = $product_name;

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


