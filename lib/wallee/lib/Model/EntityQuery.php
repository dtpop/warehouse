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
 * EntityQuery model
 *
 * @category    Class
 * @description The entity query allows to search for specific entities by providing filters. This is similar to a SQL query.
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class EntityQuery implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'EntityQuery';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'filter' => '\Wallee\Sdk\Model\EntityQueryFilter',
        'language' => 'string',
        'number_of_entities' => 'int',
        'order_bys' => '\Wallee\Sdk\Model\EntityQueryOrderBy[]',
        'starting_entity' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'filter' => null,
        'language' => null,
        'number_of_entities' => 'int32',
        'order_bys' => null,
        'starting_entity' => 'int32'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'filter' => 'filter',
        'language' => 'language',
        'number_of_entities' => 'numberOfEntities',
        'order_bys' => 'orderBys',
        'starting_entity' => 'startingEntity'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'filter' => 'setFilter',
        'language' => 'setLanguage',
        'number_of_entities' => 'setNumberOfEntities',
        'order_bys' => 'setOrderBys',
        'starting_entity' => 'setStartingEntity'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'filter' => 'getFilter',
        'language' => 'getLanguage',
        'number_of_entities' => 'getNumberOfEntities',
        'order_bys' => 'getOrderBys',
        'starting_entity' => 'getStartingEntity'
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
        
        $this->container['filter'] = isset($data['filter']) ? $data['filter'] : null;
        
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        
        $this->container['number_of_entities'] = isset($data['number_of_entities']) ? $data['number_of_entities'] : null;
        
        $this->container['order_bys'] = isset($data['order_bys']) ? $data['order_bys'] : null;
        
        $this->container['starting_entity'] = isset($data['starting_entity']) ? $data['starting_entity'] : null;
        
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
     * Gets filter
     *
     * @return \Wallee\Sdk\Model\EntityQueryFilter
     */
    public function getFilter()
    {
        return $this->container['filter'];
    }

    /**
     * Sets filter
     *
     * @param \Wallee\Sdk\Model\EntityQueryFilter $filter The filter node defines the root filter node of the query. The root node may contain multiple sub nodes with different filters in it.
     *
     * @return $this
     */
    public function setFilter($filter)
    {
        $this->container['filter'] = $filter;

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
     * @param string $language The language is applied to the ordering of the entities returned. Some entity fields are language dependent and hence the language is required to order them.
     *
     * @return $this
     */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;

        return $this;
    }
    

    /**
     * Gets number_of_entities
     *
     * @return int
     */
    public function getNumberOfEntities()
    {
        return $this->container['number_of_entities'];
    }

    /**
     * Sets number_of_entities
     *
     * @param int $number_of_entities The number of entities defines how many entities should be returned. There is a maximum of 100 entities.
     *
     * @return $this
     */
    public function setNumberOfEntities($number_of_entities)
    {
        $this->container['number_of_entities'] = $number_of_entities;

        return $this;
    }
    

    /**
     * Gets order_bys
     *
     * @return \Wallee\Sdk\Model\EntityQueryOrderBy[]
     */
    public function getOrderBys()
    {
        return $this->container['order_bys'];
    }

    /**
     * Sets order_bys
     *
     * @param \Wallee\Sdk\Model\EntityQueryOrderBy[] $order_bys The order bys allows to define the ordering of the entities returned by the search.
     *
     * @return $this
     */
    public function setOrderBys($order_bys)
    {
        $this->container['order_bys'] = $order_bys;

        return $this;
    }
    

    /**
     * Gets starting_entity
     *
     * @return int
     */
    public function getStartingEntity()
    {
        return $this->container['starting_entity'];
    }

    /**
     * Sets starting_entity
     *
     * @param int $starting_entity The 'starting entity' defines the entity number at which the returned result should start. The entity number is the consecutive number of the entity as returned and it is not the entity id.
     *
     * @return $this
     */
    public function setStartingEntity($starting_entity)
    {
        $this->container['starting_entity'] = $starting_entity;

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


