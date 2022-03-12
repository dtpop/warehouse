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
 * MetricUsage model
 *
 * @category    Class
 * @description The metric usage provides details about the consumption of a particular metric.
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class MetricUsage implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'MetricUsage';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'consumed_units' => 'float',
        'metric_description' => 'map[string,string]',
        'metric_id' => 'int',
        'metric_name' => 'map[string,string]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'consumed_units' => null,
        'metric_description' => null,
        'metric_id' => 'int64',
        'metric_name' => null
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'consumed_units' => 'consumedUnits',
        'metric_description' => 'metricDescription',
        'metric_id' => 'metricId',
        'metric_name' => 'metricName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'consumed_units' => 'setConsumedUnits',
        'metric_description' => 'setMetricDescription',
        'metric_id' => 'setMetricId',
        'metric_name' => 'setMetricName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'consumed_units' => 'getConsumedUnits',
        'metric_description' => 'getMetricDescription',
        'metric_id' => 'getMetricId',
        'metric_name' => 'getMetricName'
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
        
        $this->container['consumed_units'] = isset($data['consumed_units']) ? $data['consumed_units'] : null;
        
        $this->container['metric_description'] = isset($data['metric_description']) ? $data['metric_description'] : null;
        
        $this->container['metric_id'] = isset($data['metric_id']) ? $data['metric_id'] : null;
        
        $this->container['metric_name'] = isset($data['metric_name']) ? $data['metric_name'] : null;
        
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
     * Gets consumed_units
     *
     * @return float
     */
    public function getConsumedUnits()
    {
        return $this->container['consumed_units'];
    }

    /**
     * Sets consumed_units
     *
     * @param float $consumed_units The consumed units provide the value of how much has been consumed of the particular metric.
     *
     * @return $this
     */
    public function setConsumedUnits($consumed_units)
    {
        $this->container['consumed_units'] = $consumed_units;

        return $this;
    }
    

    /**
     * Gets metric_description
     *
     * @return map[string,string]
     */
    public function getMetricDescription()
    {
        return $this->container['metric_description'];
    }

    /**
     * Sets metric_description
     *
     * @param map[string,string] $metric_description The metric description describes the metric.
     *
     * @return $this
     */
    public function setMetricDescription($metric_description)
    {
        $this->container['metric_description'] = $metric_description;

        return $this;
    }
    

    /**
     * Gets metric_id
     *
     * @return int
     */
    public function getMetricId()
    {
        return $this->container['metric_id'];
    }

    /**
     * Sets metric_id
     *
     * @param int $metric_id The metric ID identifies the metric for consumed units.
     *
     * @return $this
     */
    public function setMetricId($metric_id)
    {
        $this->container['metric_id'] = $metric_id;

        return $this;
    }
    

    /**
     * Gets metric_name
     *
     * @return map[string,string]
     */
    public function getMetricName()
    {
        return $this->container['metric_name'];
    }

    /**
     * Sets metric_name
     *
     * @param map[string,string] $metric_name The metric name defines the name of the consumed units.
     *
     * @return $this
     */
    public function setMetricName($metric_name)
    {
        $this->container['metric_name'] = $metric_name;

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


