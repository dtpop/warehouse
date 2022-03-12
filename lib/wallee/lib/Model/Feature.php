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
 * Feature model
 *
 * @category    Class
 * @description 
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class Feature implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Feature';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'beta' => 'bool',
        'category' => '\Wallee\Sdk\Model\FeatureCategory',
        'description' => 'map[string,string]',
        'id' => 'int',
        'logo_path' => 'string',
        'name' => 'map[string,string]',
        'required_features' => 'int[]',
        'sort_order' => 'int',
        'visible' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'beta' => null,
        'category' => null,
        'description' => null,
        'id' => 'int64',
        'logo_path' => null,
        'name' => null,
        'required_features' => 'int64',
        'sort_order' => 'int32',
        'visible' => null
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'beta' => 'beta',
        'category' => 'category',
        'description' => 'description',
        'id' => 'id',
        'logo_path' => 'logoPath',
        'name' => 'name',
        'required_features' => 'requiredFeatures',
        'sort_order' => 'sortOrder',
        'visible' => 'visible'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'beta' => 'setBeta',
        'category' => 'setCategory',
        'description' => 'setDescription',
        'id' => 'setId',
        'logo_path' => 'setLogoPath',
        'name' => 'setName',
        'required_features' => 'setRequiredFeatures',
        'sort_order' => 'setSortOrder',
        'visible' => 'setVisible'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'beta' => 'getBeta',
        'category' => 'getCategory',
        'description' => 'getDescription',
        'id' => 'getId',
        'logo_path' => 'getLogoPath',
        'name' => 'getName',
        'required_features' => 'getRequiredFeatures',
        'sort_order' => 'getSortOrder',
        'visible' => 'getVisible'
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
        
        $this->container['beta'] = isset($data['beta']) ? $data['beta'] : null;
        
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        
        $this->container['logo_path'] = isset($data['logo_path']) ? $data['logo_path'] : null;
        
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        
        $this->container['required_features'] = isset($data['required_features']) ? $data['required_features'] : null;
        
        $this->container['sort_order'] = isset($data['sort_order']) ? $data['sort_order'] : null;
        
        $this->container['visible'] = isset($data['visible']) ? $data['visible'] : null;
        
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
     * Gets beta
     *
     * @return bool
     */
    public function getBeta()
    {
        return $this->container['beta'];
    }

    /**
     * Sets beta
     *
     * @param bool $beta 
     *
     * @return $this
     */
    public function setBeta($beta)
    {
        $this->container['beta'] = $beta;

        return $this;
    }
    

    /**
     * Gets category
     *
     * @return \Wallee\Sdk\Model\FeatureCategory
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param \Wallee\Sdk\Model\FeatureCategory $category 
     *
     * @return $this
     */
    public function setCategory($category)
    {
        $this->container['category'] = $category;

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
     * Gets required_features
     *
     * @return int[]
     */
    public function getRequiredFeatures()
    {
        return $this->container['required_features'];
    }

    /**
     * Sets required_features
     *
     * @param int[] $required_features 
     *
     * @return $this
     */
    public function setRequiredFeatures($required_features)
    {
        $this->container['required_features'] = $required_features;

        return $this;
    }
    

    /**
     * Gets sort_order
     *
     * @return int
     */
    public function getSortOrder()
    {
        return $this->container['sort_order'];
    }

    /**
     * Sets sort_order
     *
     * @param int $sort_order 
     *
     * @return $this
     */
    public function setSortOrder($sort_order)
    {
        $this->container['sort_order'] = $sort_order;

        return $this;
    }
    

    /**
     * Gets visible
     *
     * @return bool
     */
    public function getVisible()
    {
        return $this->container['visible'];
    }

    /**
     * Sets visible
     *
     * @param bool $visible 
     *
     * @return $this
     */
    public function setVisible($visible)
    {
        $this->container['visible'] = $visible;

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


