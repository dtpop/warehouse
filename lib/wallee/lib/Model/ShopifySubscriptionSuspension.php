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
 * ShopifySubscriptionSuspension model
 *
 * @category    Class
 * @description 
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class ShopifySubscriptionSuspension implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ShopifySubscriptionSuspension';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'created_by' => 'int',
        'created_on' => '\DateTime',
        'ended_by' => 'int',
        'ended_on' => '\DateTime',
        'id' => 'int',
        'initiator' => '\Wallee\Sdk\Model\ShopifySubscriptionSuspensionInitiator',
        'linked_space_id' => 'int',
        'planned_end_date' => '\DateTime',
        'shop' => 'int',
        'state' => '\Wallee\Sdk\Model\ShopifySubscriptionSuspensionState',
        'subscription' => '\Wallee\Sdk\Model\ShopifySubscription',
        'type' => '\Wallee\Sdk\Model\ShopifySubscriptionSuspensionType',
        'version' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'created_by' => 'int64',
        'created_on' => 'date-time',
        'ended_by' => 'int64',
        'ended_on' => 'date-time',
        'id' => 'int64',
        'initiator' => null,
        'linked_space_id' => 'int64',
        'planned_end_date' => 'date-time',
        'shop' => 'int64',
        'state' => null,
        'subscription' => null,
        'type' => null,
        'version' => 'int32'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'created_by' => 'createdBy',
        'created_on' => 'createdOn',
        'ended_by' => 'endedBy',
        'ended_on' => 'endedOn',
        'id' => 'id',
        'initiator' => 'initiator',
        'linked_space_id' => 'linkedSpaceId',
        'planned_end_date' => 'plannedEndDate',
        'shop' => 'shop',
        'state' => 'state',
        'subscription' => 'subscription',
        'type' => 'type',
        'version' => 'version'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'created_by' => 'setCreatedBy',
        'created_on' => 'setCreatedOn',
        'ended_by' => 'setEndedBy',
        'ended_on' => 'setEndedOn',
        'id' => 'setId',
        'initiator' => 'setInitiator',
        'linked_space_id' => 'setLinkedSpaceId',
        'planned_end_date' => 'setPlannedEndDate',
        'shop' => 'setShop',
        'state' => 'setState',
        'subscription' => 'setSubscription',
        'type' => 'setType',
        'version' => 'setVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'created_by' => 'getCreatedBy',
        'created_on' => 'getCreatedOn',
        'ended_by' => 'getEndedBy',
        'ended_on' => 'getEndedOn',
        'id' => 'getId',
        'initiator' => 'getInitiator',
        'linked_space_id' => 'getLinkedSpaceId',
        'planned_end_date' => 'getPlannedEndDate',
        'shop' => 'getShop',
        'state' => 'getState',
        'subscription' => 'getSubscription',
        'type' => 'getType',
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
        
        $this->container['created_by'] = isset($data['created_by']) ? $data['created_by'] : null;
        
        $this->container['created_on'] = isset($data['created_on']) ? $data['created_on'] : null;
        
        $this->container['ended_by'] = isset($data['ended_by']) ? $data['ended_by'] : null;
        
        $this->container['ended_on'] = isset($data['ended_on']) ? $data['ended_on'] : null;
        
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        
        $this->container['initiator'] = isset($data['initiator']) ? $data['initiator'] : null;
        
        $this->container['linked_space_id'] = isset($data['linked_space_id']) ? $data['linked_space_id'] : null;
        
        $this->container['planned_end_date'] = isset($data['planned_end_date']) ? $data['planned_end_date'] : null;
        
        $this->container['shop'] = isset($data['shop']) ? $data['shop'] : null;
        
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        
        $this->container['subscription'] = isset($data['subscription']) ? $data['subscription'] : null;
        
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        
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
     * @param \DateTime $created_on 
     *
     * @return $this
     */
    public function setCreatedOn($created_on)
    {
        $this->container['created_on'] = $created_on;

        return $this;
    }
    

    /**
     * Gets ended_by
     *
     * @return int
     */
    public function getEndedBy()
    {
        return $this->container['ended_by'];
    }

    /**
     * Sets ended_by
     *
     * @param int $ended_by 
     *
     * @return $this
     */
    public function setEndedBy($ended_by)
    {
        $this->container['ended_by'] = $ended_by;

        return $this;
    }
    

    /**
     * Gets ended_on
     *
     * @return \DateTime
     */
    public function getEndedOn()
    {
        return $this->container['ended_on'];
    }

    /**
     * Sets ended_on
     *
     * @param \DateTime $ended_on 
     *
     * @return $this
     */
    public function setEndedOn($ended_on)
    {
        $this->container['ended_on'] = $ended_on;

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
     * Gets initiator
     *
     * @return \Wallee\Sdk\Model\ShopifySubscriptionSuspensionInitiator
     */
    public function getInitiator()
    {
        return $this->container['initiator'];
    }

    /**
     * Sets initiator
     *
     * @param \Wallee\Sdk\Model\ShopifySubscriptionSuspensionInitiator $initiator 
     *
     * @return $this
     */
    public function setInitiator($initiator)
    {
        $this->container['initiator'] = $initiator;

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
     * Gets planned_end_date
     *
     * @return \DateTime
     */
    public function getPlannedEndDate()
    {
        return $this->container['planned_end_date'];
    }

    /**
     * Sets planned_end_date
     *
     * @param \DateTime $planned_end_date 
     *
     * @return $this
     */
    public function setPlannedEndDate($planned_end_date)
    {
        $this->container['planned_end_date'] = $planned_end_date;

        return $this;
    }
    

    /**
     * Gets shop
     *
     * @return int
     */
    public function getShop()
    {
        return $this->container['shop'];
    }

    /**
     * Sets shop
     *
     * @param int $shop 
     *
     * @return $this
     */
    public function setShop($shop)
    {
        $this->container['shop'] = $shop;

        return $this;
    }
    

    /**
     * Gets state
     *
     * @return \Wallee\Sdk\Model\ShopifySubscriptionSuspensionState
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param \Wallee\Sdk\Model\ShopifySubscriptionSuspensionState $state 
     *
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }
    

    /**
     * Gets subscription
     *
     * @return \Wallee\Sdk\Model\ShopifySubscription
     */
    public function getSubscription()
    {
        return $this->container['subscription'];
    }

    /**
     * Sets subscription
     *
     * @param \Wallee\Sdk\Model\ShopifySubscription $subscription 
     *
     * @return $this
     */
    public function setSubscription($subscription)
    {
        $this->container['subscription'] = $subscription;

        return $this;
    }
    

    /**
     * Gets type
     *
     * @return \Wallee\Sdk\Model\ShopifySubscriptionSuspensionType
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \Wallee\Sdk\Model\ShopifySubscriptionSuspensionType $type 
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

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


