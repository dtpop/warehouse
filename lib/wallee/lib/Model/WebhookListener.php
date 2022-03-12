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
 * WebhookListener model
 *
 * @category    Class
 * @description 
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class WebhookListener implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'WebhookListener';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'entity' => 'int',
        'entity_states' => 'string[]',
        'id' => 'int',
        'identity' => '\Wallee\Sdk\Model\WebhookIdentity',
        'linked_space_id' => 'int',
        'name' => 'string',
        'notify_every_change' => 'bool',
        'planned_purge_date' => '\DateTime',
        'state' => '\Wallee\Sdk\Model\CreationEntityState',
        'url' => '\Wallee\Sdk\Model\WebhookUrl',
        'version' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'entity' => 'int64',
        'entity_states' => null,
        'id' => 'int64',
        'identity' => null,
        'linked_space_id' => 'int64',
        'name' => null,
        'notify_every_change' => null,
        'planned_purge_date' => 'date-time',
        'state' => null,
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
        'entity' => 'entity',
        'entity_states' => 'entityStates',
        'id' => 'id',
        'identity' => 'identity',
        'linked_space_id' => 'linkedSpaceId',
        'name' => 'name',
        'notify_every_change' => 'notifyEveryChange',
        'planned_purge_date' => 'plannedPurgeDate',
        'state' => 'state',
        'url' => 'url',
        'version' => 'version'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'entity' => 'setEntity',
        'entity_states' => 'setEntityStates',
        'id' => 'setId',
        'identity' => 'setIdentity',
        'linked_space_id' => 'setLinkedSpaceId',
        'name' => 'setName',
        'notify_every_change' => 'setNotifyEveryChange',
        'planned_purge_date' => 'setPlannedPurgeDate',
        'state' => 'setState',
        'url' => 'setUrl',
        'version' => 'setVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'entity' => 'getEntity',
        'entity_states' => 'getEntityStates',
        'id' => 'getId',
        'identity' => 'getIdentity',
        'linked_space_id' => 'getLinkedSpaceId',
        'name' => 'getName',
        'notify_every_change' => 'getNotifyEveryChange',
        'planned_purge_date' => 'getPlannedPurgeDate',
        'state' => 'getState',
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
        
        $this->container['entity'] = isset($data['entity']) ? $data['entity'] : null;
        
        $this->container['entity_states'] = isset($data['entity_states']) ? $data['entity_states'] : null;
        
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        
        $this->container['identity'] = isset($data['identity']) ? $data['identity'] : null;
        
        $this->container['linked_space_id'] = isset($data['linked_space_id']) ? $data['linked_space_id'] : null;
        
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        
        $this->container['notify_every_change'] = isset($data['notify_every_change']) ? $data['notify_every_change'] : null;
        
        $this->container['planned_purge_date'] = isset($data['planned_purge_date']) ? $data['planned_purge_date'] : null;
        
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        
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
     * Gets entity
     *
     * @return int
     */
    public function getEntity()
    {
        return $this->container['entity'];
    }

    /**
     * Sets entity
     *
     * @param int $entity The listener listens on state changes of the entity linked with the listener.
     *
     * @return $this
     */
    public function setEntity($entity)
    {
        $this->container['entity'] = $entity;

        return $this;
    }
    

    /**
     * Gets entity_states
     *
     * @return string[]
     */
    public function getEntityStates()
    {
        return $this->container['entity_states'];
    }

    /**
     * Sets entity_states
     *
     * @param string[] $entity_states The target state identifies the state into which entities need to move into to trigger the webhook listener.
     *
     * @return $this
     */
    public function setEntityStates($entity_states)
    {
        $this->container['entity_states'] = $entity_states;

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
     * Gets identity
     *
     * @return \Wallee\Sdk\Model\WebhookIdentity
     */
    public function getIdentity()
    {
        return $this->container['identity'];
    }

    /**
     * Sets identity
     *
     * @param \Wallee\Sdk\Model\WebhookIdentity $identity The identity which will be used to sign messages sent by this listener.
     *
     * @return $this
     */
    public function setIdentity($identity)
    {
        $this->container['identity'] = $identity;

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
     * @param string $name The webhook listener name is used internally to identify the webhook listener in administrative interfaces.For example it is used within search fields and hence it should be distinct and descriptive.
     *
     * @return $this
     */
    public function setName($name)
    {
        if (!is_null($name) && (mb_strlen($name) > 50)) {
            throw new \InvalidArgumentException('invalid length for $name when calling WebhookListener., must be smaller than or equal to 50.');
        }

        $this->container['name'] = $name;

        return $this;
    }
    

    /**
     * Gets notify_every_change
     *
     * @return bool
     */
    public function getNotifyEveryChange()
    {
        return $this->container['notify_every_change'];
    }

    /**
     * Sets notify_every_change
     *
     * @param bool $notify_every_change Defines whether the webhook listener is to be informed about every change made to the entity in contrast to state transitions only.
     *
     * @return $this
     */
    public function setNotifyEveryChange($notify_every_change)
    {
        $this->container['notify_every_change'] = $notify_every_change;

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
     * Gets url
     *
     * @return \Wallee\Sdk\Model\WebhookUrl
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param \Wallee\Sdk\Model\WebhookUrl $url The URL which is invoked by the listener to notify the application about the event.
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


