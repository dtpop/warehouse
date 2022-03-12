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
 * Permission model
 *
 * @category    Class
 * @description 
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class Permission implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Permission';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'description' => 'map[string,string]',
        'feature' => 'int',
        'group' => 'bool',
        'id' => 'int',
        'leaf' => 'bool',
        'name' => 'map[string,string]',
        'parent' => 'int',
        'path_to_root' => 'int[]',
        'title' => 'map[string,string]',
        'two_factor_required' => 'bool',
        'web_app_enabled' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'description' => null,
        'feature' => 'int64',
        'group' => null,
        'id' => 'int64',
        'leaf' => null,
        'name' => null,
        'parent' => 'int64',
        'path_to_root' => 'int64',
        'title' => null,
        'two_factor_required' => null,
        'web_app_enabled' => null
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'description' => 'description',
        'feature' => 'feature',
        'group' => 'group',
        'id' => 'id',
        'leaf' => 'leaf',
        'name' => 'name',
        'parent' => 'parent',
        'path_to_root' => 'pathToRoot',
        'title' => 'title',
        'two_factor_required' => 'twoFactorRequired',
        'web_app_enabled' => 'webAppEnabled'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'description' => 'setDescription',
        'feature' => 'setFeature',
        'group' => 'setGroup',
        'id' => 'setId',
        'leaf' => 'setLeaf',
        'name' => 'setName',
        'parent' => 'setParent',
        'path_to_root' => 'setPathToRoot',
        'title' => 'setTitle',
        'two_factor_required' => 'setTwoFactorRequired',
        'web_app_enabled' => 'setWebAppEnabled'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'description' => 'getDescription',
        'feature' => 'getFeature',
        'group' => 'getGroup',
        'id' => 'getId',
        'leaf' => 'getLeaf',
        'name' => 'getName',
        'parent' => 'getParent',
        'path_to_root' => 'getPathToRoot',
        'title' => 'getTitle',
        'two_factor_required' => 'getTwoFactorRequired',
        'web_app_enabled' => 'getWebAppEnabled'
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
        
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        
        $this->container['feature'] = isset($data['feature']) ? $data['feature'] : null;
        
        $this->container['group'] = isset($data['group']) ? $data['group'] : null;
        
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        
        $this->container['leaf'] = isset($data['leaf']) ? $data['leaf'] : null;
        
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        
        $this->container['parent'] = isset($data['parent']) ? $data['parent'] : null;
        
        $this->container['path_to_root'] = isset($data['path_to_root']) ? $data['path_to_root'] : null;
        
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        
        $this->container['two_factor_required'] = isset($data['two_factor_required']) ? $data['two_factor_required'] : null;
        
        $this->container['web_app_enabled'] = isset($data['web_app_enabled']) ? $data['web_app_enabled'] : null;
        
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
     * Gets group
     *
     * @return bool
     */
    public function getGroup()
    {
        return $this->container['group'];
    }

    /**
     * Sets group
     *
     * @param bool $group 
     *
     * @return $this
     */
    public function setGroup($group)
    {
        $this->container['group'] = $group;

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
     * Gets leaf
     *
     * @return bool
     */
    public function getLeaf()
    {
        return $this->container['leaf'];
    }

    /**
     * Sets leaf
     *
     * @param bool $leaf 
     *
     * @return $this
     */
    public function setLeaf($leaf)
    {
        $this->container['leaf'] = $leaf;

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
     * Gets parent
     *
     * @return int
     */
    public function getParent()
    {
        return $this->container['parent'];
    }

    /**
     * Sets parent
     *
     * @param int $parent 
     *
     * @return $this
     */
    public function setParent($parent)
    {
        $this->container['parent'] = $parent;

        return $this;
    }
    

    /**
     * Gets path_to_root
     *
     * @return int[]
     */
    public function getPathToRoot()
    {
        return $this->container['path_to_root'];
    }

    /**
     * Sets path_to_root
     *
     * @param int[] $path_to_root 
     *
     * @return $this
     */
    public function setPathToRoot($path_to_root)
    {
        $this->container['path_to_root'] = $path_to_root;

        return $this;
    }
    

    /**
     * Gets title
     *
     * @return map[string,string]
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param map[string,string] $title 
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }
    

    /**
     * Gets two_factor_required
     *
     * @return bool
     */
    public function getTwoFactorRequired()
    {
        return $this->container['two_factor_required'];
    }

    /**
     * Sets two_factor_required
     *
     * @param bool $two_factor_required 
     *
     * @return $this
     */
    public function setTwoFactorRequired($two_factor_required)
    {
        $this->container['two_factor_required'] = $two_factor_required;

        return $this;
    }
    

    /**
     * Gets web_app_enabled
     *
     * @return bool
     */
    public function getWebAppEnabled()
    {
        return $this->container['web_app_enabled'];
    }

    /**
     * Sets web_app_enabled
     *
     * @param bool $web_app_enabled 
     *
     * @return $this
     */
    public function setWebAppEnabled($web_app_enabled)
    {
        $this->container['web_app_enabled'] = $web_app_enabled;

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


