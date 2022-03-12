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
 * Scope model
 *
 * @category    Class
 * @description 
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class Scope implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Scope';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'domain_name' => 'string',
        'features' => '\Wallee\Sdk\Model\Feature[]',
        'id' => 'int',
        'machine_name' => 'string',
        'name' => 'string',
        'planned_purge_date' => '\DateTime',
        'port' => 'int',
        'ssl_active' => 'bool',
        'state' => '\Wallee\Sdk\Model\CreationEntityState',
        'themes' => 'string[]',
        'url' => 'string',
        'version' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'domain_name' => null,
        'features' => null,
        'id' => 'int64',
        'machine_name' => null,
        'name' => null,
        'planned_purge_date' => 'date-time',
        'port' => 'int32',
        'ssl_active' => null,
        'state' => null,
        'themes' => null,
        'url' => null,
        'version' => 'int32'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'domain_name' => 'domainName',
        'features' => 'features',
        'id' => 'id',
        'machine_name' => 'machineName',
        'name' => 'name',
        'planned_purge_date' => 'plannedPurgeDate',
        'port' => 'port',
        'ssl_active' => 'sslActive',
        'state' => 'state',
        'themes' => 'themes',
        'url' => 'url',
        'version' => 'version'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'domain_name' => 'setDomainName',
        'features' => 'setFeatures',
        'id' => 'setId',
        'machine_name' => 'setMachineName',
        'name' => 'setName',
        'planned_purge_date' => 'setPlannedPurgeDate',
        'port' => 'setPort',
        'ssl_active' => 'setSslActive',
        'state' => 'setState',
        'themes' => 'setThemes',
        'url' => 'setUrl',
        'version' => 'setVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'domain_name' => 'getDomainName',
        'features' => 'getFeatures',
        'id' => 'getId',
        'machine_name' => 'getMachineName',
        'name' => 'getName',
        'planned_purge_date' => 'getPlannedPurgeDate',
        'port' => 'getPort',
        'ssl_active' => 'getSslActive',
        'state' => 'getState',
        'themes' => 'getThemes',
        'url' => 'getUrl',
        'version' => 'getVersion'
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
        
        $this->container['domain_name'] = isset($data['domain_name']) ? $data['domain_name'] : null;
        
        $this->container['features'] = isset($data['features']) ? $data['features'] : null;
        
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        
        $this->container['machine_name'] = isset($data['machine_name']) ? $data['machine_name'] : null;
        
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        
        $this->container['planned_purge_date'] = isset($data['planned_purge_date']) ? $data['planned_purge_date'] : null;
        
        $this->container['port'] = isset($data['port']) ? $data['port'] : null;
        
        $this->container['ssl_active'] = isset($data['ssl_active']) ? $data['ssl_active'] : null;
        
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        
        $this->container['themes'] = isset($data['themes']) ? $data['themes'] : null;
        
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['domain_name']) && (mb_strlen($this->container['domain_name']) > 40)) {
            $invalidProperties[] = "invalid value for 'domain_name', the character length must be smaller than or equal to 40.";
        }

        if (!is_null($this->container['machine_name']) && (mb_strlen($this->container['machine_name']) > 50)) {
            $invalidProperties[] = "invalid value for 'machine_name', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 50)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 50.";
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
     * Gets domain_name
     *
     * @return string
     */
    public function getDomainName()
    {
        return $this->container['domain_name'];
    }

    /**
     * Sets domain_name
     *
     * @param string $domain_name The domain name to which this scope is mapped to.
     *
     * @return $this
     */
    public function setDomainName($domain_name)
    {
        if (!is_null($domain_name) && (mb_strlen($domain_name) > 40)) {
            throw new \InvalidArgumentException('invalid length for $domain_name when calling Scope., must be smaller than or equal to 40.');
        }

        $this->container['domain_name'] = $domain_name;

        return $this;
    }
    

    /**
     * Gets features
     *
     * @return \Wallee\Sdk\Model\Feature[]
     */
    public function getFeatures()
    {
        return $this->container['features'];
    }

    /**
     * Sets features
     *
     * @param \Wallee\Sdk\Model\Feature[] $features 
     *
     * @return $this
     */
    public function setFeatures($features)
    {
        $this->container['features'] = $features;

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
     * Gets machine_name
     *
     * @return string
     */
    public function getMachineName()
    {
        return $this->container['machine_name'];
    }

    /**
     * Sets machine_name
     *
     * @param string $machine_name 
     *
     * @return $this
     */
    public function setMachineName($machine_name)
    {
        if (!is_null($machine_name) && (mb_strlen($machine_name) > 50)) {
            throw new \InvalidArgumentException('invalid length for $machine_name when calling Scope., must be smaller than or equal to 50.');
        }

        $this->container['machine_name'] = $machine_name;

        return $this;
    }
    

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name The name of the scope is shown to the user where the user should select a scope.
     *
     * @return $this
     */
    public function setName($name)
    {
        if (!is_null($name) && (mb_strlen($name) > 50)) {
            throw new \InvalidArgumentException('invalid length for $name when calling Scope., must be smaller than or equal to 50.');
        }

        $this->container['name'] = $name;

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
     * Gets port
     *
     * @return int
     */
    public function getPort()
    {
        return $this->container['port'];
    }

    /**
     * Sets port
     *
     * @param int $port The port number to which this scope is mapped to.
     *
     * @return $this
     */
    public function setPort($port)
    {
        $this->container['port'] = $port;

        return $this;
    }
    

    /**
     * Gets ssl_active
     *
     * @return bool
     */
    public function getSslActive()
    {
        return $this->container['ssl_active'];
    }

    /**
     * Sets ssl_active
     *
     * @param bool $ssl_active Define whether the scope supports SSL.
     *
     * @return $this
     */
    public function setSslActive($ssl_active)
    {
        $this->container['ssl_active'] = $ssl_active;

        return $this;
    }
    

    /**
     * Gets state
     *
     * @return \Wallee\Sdk\Model\CreationEntityState
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param \Wallee\Sdk\Model\CreationEntityState $state 
     *
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }
    

    /**
     * Gets themes
     *
     * @return string[]
     */
    public function getThemes()
    {
        return $this->container['themes'];
    }

    /**
     * Sets themes
     *
     * @param string[] $themes The themes determines how the application layout, look and feel is. By providing multiple themes you can fallback to other themes.
     *
     * @return $this
     */
    public function setThemes($themes)
    {
        $this->container['themes'] = $themes;

        return $this;
    }
    

    /**
     * Gets url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string $url 
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

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


