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
 * PaymentTerminalConfigurationVersion model
 *
 * @category    Class
 * @description 
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class PaymentTerminalConfigurationVersion implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PaymentTerminalConfigurationVersion';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'configuration' => '\Wallee\Sdk\Model\PaymentTerminalConfiguration',
        'connector_configurations' => 'int[]',
        'created_by' => 'int',
        'created_on' => '\DateTime',
        'default_currency' => 'string',
        'id' => 'int',
        'linked_space_id' => 'int',
        'maintenance_window_duration' => 'string',
        'maintenance_window_start' => 'string',
        'planned_purge_date' => '\DateTime',
        'state' => '\Wallee\Sdk\Model\PaymentTerminalConfigurationVersionState',
        'time_zone' => 'string',
        'version' => 'int',
        'version_applied_immediately' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'configuration' => null,
        'connector_configurations' => 'int64',
        'created_by' => 'int64',
        'created_on' => 'date-time',
        'default_currency' => null,
        'id' => 'int64',
        'linked_space_id' => 'int64',
        'maintenance_window_duration' => null,
        'maintenance_window_start' => null,
        'planned_purge_date' => 'date-time',
        'state' => null,
        'time_zone' => null,
        'version' => 'int32',
        'version_applied_immediately' => null
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'configuration' => 'configuration',
        'connector_configurations' => 'connectorConfigurations',
        'created_by' => 'createdBy',
        'created_on' => 'createdOn',
        'default_currency' => 'defaultCurrency',
        'id' => 'id',
        'linked_space_id' => 'linkedSpaceId',
        'maintenance_window_duration' => 'maintenanceWindowDuration',
        'maintenance_window_start' => 'maintenanceWindowStart',
        'planned_purge_date' => 'plannedPurgeDate',
        'state' => 'state',
        'time_zone' => 'timeZone',
        'version' => 'version',
        'version_applied_immediately' => 'versionAppliedImmediately'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'configuration' => 'setConfiguration',
        'connector_configurations' => 'setConnectorConfigurations',
        'created_by' => 'setCreatedBy',
        'created_on' => 'setCreatedOn',
        'default_currency' => 'setDefaultCurrency',
        'id' => 'setId',
        'linked_space_id' => 'setLinkedSpaceId',
        'maintenance_window_duration' => 'setMaintenanceWindowDuration',
        'maintenance_window_start' => 'setMaintenanceWindowStart',
        'planned_purge_date' => 'setPlannedPurgeDate',
        'state' => 'setState',
        'time_zone' => 'setTimeZone',
        'version' => 'setVersion',
        'version_applied_immediately' => 'setVersionAppliedImmediately'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'configuration' => 'getConfiguration',
        'connector_configurations' => 'getConnectorConfigurations',
        'created_by' => 'getCreatedBy',
        'created_on' => 'getCreatedOn',
        'default_currency' => 'getDefaultCurrency',
        'id' => 'getId',
        'linked_space_id' => 'getLinkedSpaceId',
        'maintenance_window_duration' => 'getMaintenanceWindowDuration',
        'maintenance_window_start' => 'getMaintenanceWindowStart',
        'planned_purge_date' => 'getPlannedPurgeDate',
        'state' => 'getState',
        'time_zone' => 'getTimeZone',
        'version' => 'getVersion',
        'version_applied_immediately' => 'getVersionAppliedImmediately'
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
        
        $this->container['configuration'] = isset($data['configuration']) ? $data['configuration'] : null;
        
        $this->container['connector_configurations'] = isset($data['connector_configurations']) ? $data['connector_configurations'] : null;
        
        $this->container['created_by'] = isset($data['created_by']) ? $data['created_by'] : null;
        
        $this->container['created_on'] = isset($data['created_on']) ? $data['created_on'] : null;
        
        $this->container['default_currency'] = isset($data['default_currency']) ? $data['default_currency'] : null;
        
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        
        $this->container['linked_space_id'] = isset($data['linked_space_id']) ? $data['linked_space_id'] : null;
        
        $this->container['maintenance_window_duration'] = isset($data['maintenance_window_duration']) ? $data['maintenance_window_duration'] : null;
        
        $this->container['maintenance_window_start'] = isset($data['maintenance_window_start']) ? $data['maintenance_window_start'] : null;
        
        $this->container['planned_purge_date'] = isset($data['planned_purge_date']) ? $data['planned_purge_date'] : null;
        
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        
        $this->container['time_zone'] = isset($data['time_zone']) ? $data['time_zone'] : null;
        
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        
        $this->container['version_applied_immediately'] = isset($data['version_applied_immediately']) ? $data['version_applied_immediately'] : null;
        
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
     * Gets configuration
     *
     * @return \Wallee\Sdk\Model\PaymentTerminalConfiguration
     */
    public function getConfiguration()
    {
        return $this->container['configuration'];
    }

    /**
     * Sets configuration
     *
     * @param \Wallee\Sdk\Model\PaymentTerminalConfiguration $configuration 
     *
     * @return $this
     */
    public function setConfiguration($configuration)
    {
        $this->container['configuration'] = $configuration;

        return $this;
    }
    

    /**
     * Gets connector_configurations
     *
     * @return int[]
     */
    public function getConnectorConfigurations()
    {
        return $this->container['connector_configurations'];
    }

    /**
     * Sets connector_configurations
     *
     * @param int[] $connector_configurations 
     *
     * @return $this
     */
    public function setConnectorConfigurations($connector_configurations)
    {
        $this->container['connector_configurations'] = $connector_configurations;

        return $this;
    }
    

    /**
     * Gets created_by
     *
     * @return int
     */
    public function getCreatedBy()
    {
        return $this->container['created_by'];
    }

    /**
     * Sets created_by
     *
     * @param int $created_by 
     *
     * @return $this
     */
    public function setCreatedBy($created_by)
    {
        $this->container['created_by'] = $created_by;

        return $this;
    }
    

    /**
     * Gets created_on
     *
     * @return \DateTime
     */
    public function getCreatedOn()
    {
        return $this->container['created_on'];
    }

    /**
     * Sets created_on
     *
     * @param \DateTime $created_on The created on date indicates the date on which the entity was stored into the database.
     *
     * @return $this
     */
    public function setCreatedOn($created_on)
    {
        $this->container['created_on'] = $created_on;

        return $this;
    }
    

    /**
     * Gets default_currency
     *
     * @return string
     */
    public function getDefaultCurrency()
    {
        return $this->container['default_currency'];
    }

    /**
     * Sets default_currency
     *
     * @param string $default_currency The currency is derived by default from the terminal location. By setting a specific currency the derived currency is overridden.
     *
     * @return $this
     */
    public function setDefaultCurrency($default_currency)
    {
        $this->container['default_currency'] = $default_currency;

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
     * Gets linked_space_id
     *
     * @return int
     */
    public function getLinkedSpaceId()
    {
        return $this->container['linked_space_id'];
    }

    /**
     * Sets linked_space_id
     *
     * @param int $linked_space_id The linked space id holds the ID of the space to which the entity belongs to.
     *
     * @return $this
     */
    public function setLinkedSpaceId($linked_space_id)
    {
        $this->container['linked_space_id'] = $linked_space_id;

        return $this;
    }
    

    /**
     * Gets maintenance_window_duration
     *
     * @return string
     */
    public function getMaintenanceWindowDuration()
    {
        return $this->container['maintenance_window_duration'];
    }

    /**
     * Sets maintenance_window_duration
     *
     * @param string $maintenance_window_duration 
     *
     * @return $this
     */
    public function setMaintenanceWindowDuration($maintenance_window_duration)
    {
        $this->container['maintenance_window_duration'] = $maintenance_window_duration;

        return $this;
    }
    

    /**
     * Gets maintenance_window_start
     *
     * @return string
     */
    public function getMaintenanceWindowStart()
    {
        return $this->container['maintenance_window_start'];
    }

    /**
     * Sets maintenance_window_start
     *
     * @param string $maintenance_window_start 
     *
     * @return $this
     */
    public function setMaintenanceWindowStart($maintenance_window_start)
    {
        $this->container['maintenance_window_start'] = $maintenance_window_start;

        return $this;
    }
    

    /**
     * Gets planned_purge_date
     *
     * @return \DateTime
     */
    public function getPlannedPurgeDate()
    {
        return $this->container['planned_purge_date'];
    }

    /**
     * Sets planned_purge_date
     *
     * @param \DateTime $planned_purge_date The planned purge date indicates when the entity is permanently removed. When the date is null the entity is not planned to be removed.
     *
     * @return $this
     */
    public function setPlannedPurgeDate($planned_purge_date)
    {
        $this->container['planned_purge_date'] = $planned_purge_date;

        return $this;
    }
    

    /**
     * Gets state
     *
     * @return \Wallee\Sdk\Model\PaymentTerminalConfigurationVersionState
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param \Wallee\Sdk\Model\PaymentTerminalConfigurationVersionState $state 
     *
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }
    

    /**
     * Gets time_zone
     *
     * @return string
     */
    public function getTimeZone()
    {
        return $this->container['time_zone'];
    }

    /**
     * Sets time_zone
     *
     * @param string $time_zone 
     *
     * @return $this
     */
    public function setTimeZone($time_zone)
    {
        $this->container['time_zone'] = $time_zone;

        return $this;
    }
    

    /**
     * Gets version
     *
     * @return int
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param int $version The version number indicates the version of the entity. The version is incremented whenever the entity is changed.
     *
     * @return $this
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

        return $this;
    }
    

    /**
     * Gets version_applied_immediately
     *
     * @return bool
     */
    public function getVersionAppliedImmediately()
    {
        return $this->container['version_applied_immediately'];
    }

    /**
     * Sets version_applied_immediately
     *
     * @param bool $version_applied_immediately 
     *
     * @return $this
     */
    public function setVersionAppliedImmediately($version_applied_immediately)
    {
        $this->container['version_applied_immediately'] = $version_applied_immediately;

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


