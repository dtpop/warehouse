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
 * SubscriptionMetricUsageReportCreate model
 *
 * @category    Class
 * @description The metric usage is the actual usage of a metric for a particular subscription as collected by an external application.
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class SubscriptionMetricUsageReportCreate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SubscriptionMetricUsageReport.Create';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'consumed_units' => 'float',
        'description' => 'string',
        'external_id' => 'string',
        'metric' => 'int',
        'subscription' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'consumed_units' => null,
        'description' => null,
        'external_id' => null,
        'metric' => 'int64',
        'subscription' => 'int64'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'consumed_units' => 'consumedUnits',
        'description' => 'description',
        'external_id' => 'externalId',
        'metric' => 'metric',
        'subscription' => 'subscription'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'consumed_units' => 'setConsumedUnits',
        'description' => 'setDescription',
        'external_id' => 'setExternalId',
        'metric' => 'setMetric',
        'subscription' => 'setSubscription'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'consumed_units' => 'getConsumedUnits',
        'description' => 'getDescription',
        'external_id' => 'getExternalId',
        'metric' => 'getMetric',
        'subscription' => 'getSubscription'
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
        
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        
        $this->container['external_id'] = isset($data['external_id']) ? $data['external_id'] : null;
        
        $this->container['metric'] = isset($data['metric']) ? $data['metric'] : null;
        
        $this->container['subscription'] = isset($data['subscription']) ? $data['subscription'] : null;
        
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['consumed_units'] === null) {
            $invalidProperties[] = "'consumed_units' can't be null";
        }
        if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 100)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 100.";
        }

        if ($this->container['external_id'] === null) {
            $invalidProperties[] = "'external_id' can't be null";
        }
        if ($this->container['metric'] === null) {
            $invalidProperties[] = "'metric' can't be null";
        }
        if ($this->container['subscription'] === null) {
            $invalidProperties[] = "'subscription' can't be null";
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
     * @param float $consumed_units The consumed units describe the amount of resources consumed. Those consumed units will be billed in the next billing cycle.
     *
     * @return $this
     */
    public function setConsumedUnits($consumed_units)
    {
        $this->container['consumed_units'] = $consumed_units;

        return $this;
    }
    

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description The metric usage report description describe the reported usage. This description may be shown to the end user.
     *
     * @return $this
     */
    public function setDescription($description)
    {
        if (!is_null($description) && (mb_strlen($description) > 100)) {
            throw new \InvalidArgumentException('invalid length for $description when calling SubscriptionMetricUsageReportCreate., must be smaller than or equal to 100.');
        }

        $this->container['description'] = $description;

        return $this;
    }
    

    /**
     * Gets external_id
     *
     * @return string
     */
    public function getExternalId()
    {
        return $this->container['external_id'];
    }

    /**
     * Sets external_id
     *
     * @param string $external_id The external id identifies the metric usage uniquely.
     *
     * @return $this
     */
    public function setExternalId($external_id)
    {
        $this->container['external_id'] = $external_id;

        return $this;
    }
    

    /**
     * Gets metric
     *
     * @return int
     */
    public function getMetric()
    {
        return $this->container['metric'];
    }

    /**
     * Sets metric
     *
     * @param int $metric The metric usage report is linked to the metric for which the usage should be recorded.
     *
     * @return $this
     */
    public function setMetric($metric)
    {
        $this->container['metric'] = $metric;

        return $this;
    }
    

    /**
     * Gets subscription
     *
     * @return int
     */
    public function getSubscription()
    {
        return $this->container['subscription'];
    }

    /**
     * Sets subscription
     *
     * @param int $subscription The subscription to which the usage is added to.
     *
     * @return $this
     */
    public function setSubscription($subscription)
    {
        $this->container['subscription'] = $subscription;

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


