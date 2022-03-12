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
 * Subscription model
 *
 * @category    Class
 * @description 
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class Subscription implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Subscription';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'activated_on' => '\DateTime',
        'affiliate' => '\Wallee\Sdk\Model\SubscriptionAffiliate',
        'created_on' => '\DateTime',
        'current_product_version' => '\Wallee\Sdk\Model\SubscriptionProductVersion',
        'description' => 'string',
        'id' => 'int',
        'initialized_on' => '\DateTime',
        'language' => 'string',
        'linked_space_id' => 'int',
        'planned_purge_date' => '\DateTime',
        'planned_termination_date' => '\DateTime',
        'reference' => 'string',
        'state' => '\Wallee\Sdk\Model\SubscriptionState',
        'subscriber' => '\Wallee\Sdk\Model\Subscriber',
        'terminated_by' => 'int',
        'terminated_on' => '\DateTime',
        'terminating_on' => '\DateTime',
        'termination_scheduled_on' => '\DateTime',
        'token' => '\Wallee\Sdk\Model\Token',
        'version' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'activated_on' => 'date-time',
        'affiliate' => null,
        'created_on' => 'date-time',
        'current_product_version' => null,
        'description' => null,
        'id' => 'int64',
        'initialized_on' => 'date-time',
        'language' => null,
        'linked_space_id' => 'int64',
        'planned_purge_date' => 'date-time',
        'planned_termination_date' => 'date-time',
        'reference' => null,
        'state' => null,
        'subscriber' => null,
        'terminated_by' => 'int64',
        'terminated_on' => 'date-time',
        'terminating_on' => 'date-time',
        'termination_scheduled_on' => 'date-time',
        'token' => null,
        'version' => 'int32'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'activated_on' => 'activatedOn',
        'affiliate' => 'affiliate',
        'created_on' => 'createdOn',
        'current_product_version' => 'currentProductVersion',
        'description' => 'description',
        'id' => 'id',
        'initialized_on' => 'initializedOn',
        'language' => 'language',
        'linked_space_id' => 'linkedSpaceId',
        'planned_purge_date' => 'plannedPurgeDate',
        'planned_termination_date' => 'plannedTerminationDate',
        'reference' => 'reference',
        'state' => 'state',
        'subscriber' => 'subscriber',
        'terminated_by' => 'terminatedBy',
        'terminated_on' => 'terminatedOn',
        'terminating_on' => 'terminatingOn',
        'termination_scheduled_on' => 'terminationScheduledOn',
        'token' => 'token',
        'version' => 'version'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'activated_on' => 'setActivatedOn',
        'affiliate' => 'setAffiliate',
        'created_on' => 'setCreatedOn',
        'current_product_version' => 'setCurrentProductVersion',
        'description' => 'setDescription',
        'id' => 'setId',
        'initialized_on' => 'setInitializedOn',
        'language' => 'setLanguage',
        'linked_space_id' => 'setLinkedSpaceId',
        'planned_purge_date' => 'setPlannedPurgeDate',
        'planned_termination_date' => 'setPlannedTerminationDate',
        'reference' => 'setReference',
        'state' => 'setState',
        'subscriber' => 'setSubscriber',
        'terminated_by' => 'setTerminatedBy',
        'terminated_on' => 'setTerminatedOn',
        'terminating_on' => 'setTerminatingOn',
        'termination_scheduled_on' => 'setTerminationScheduledOn',
        'token' => 'setToken',
        'version' => 'setVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'activated_on' => 'getActivatedOn',
        'affiliate' => 'getAffiliate',
        'created_on' => 'getCreatedOn',
        'current_product_version' => 'getCurrentProductVersion',
        'description' => 'getDescription',
        'id' => 'getId',
        'initialized_on' => 'getInitializedOn',
        'language' => 'getLanguage',
        'linked_space_id' => 'getLinkedSpaceId',
        'planned_purge_date' => 'getPlannedPurgeDate',
        'planned_termination_date' => 'getPlannedTerminationDate',
        'reference' => 'getReference',
        'state' => 'getState',
        'subscriber' => 'getSubscriber',
        'terminated_by' => 'getTerminatedBy',
        'terminated_on' => 'getTerminatedOn',
        'terminating_on' => 'getTerminatingOn',
        'termination_scheduled_on' => 'getTerminationScheduledOn',
        'token' => 'getToken',
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
        
        $this->container['activated_on'] = isset($data['activated_on']) ? $data['activated_on'] : null;
        
        $this->container['affiliate'] = isset($data['affiliate']) ? $data['affiliate'] : null;
        
        $this->container['created_on'] = isset($data['created_on']) ? $data['created_on'] : null;
        
        $this->container['current_product_version'] = isset($data['current_product_version']) ? $data['current_product_version'] : null;
        
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        
        $this->container['initialized_on'] = isset($data['initialized_on']) ? $data['initialized_on'] : null;
        
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        
        $this->container['linked_space_id'] = isset($data['linked_space_id']) ? $data['linked_space_id'] : null;
        
        $this->container['planned_purge_date'] = isset($data['planned_purge_date']) ? $data['planned_purge_date'] : null;
        
        $this->container['planned_termination_date'] = isset($data['planned_termination_date']) ? $data['planned_termination_date'] : null;
        
        $this->container['reference'] = isset($data['reference']) ? $data['reference'] : null;
        
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        
        $this->container['subscriber'] = isset($data['subscriber']) ? $data['subscriber'] : null;
        
        $this->container['terminated_by'] = isset($data['terminated_by']) ? $data['terminated_by'] : null;
        
        $this->container['terminated_on'] = isset($data['terminated_on']) ? $data['terminated_on'] : null;
        
        $this->container['terminating_on'] = isset($data['terminating_on']) ? $data['terminating_on'] : null;
        
        $this->container['termination_scheduled_on'] = isset($data['termination_scheduled_on']) ? $data['termination_scheduled_on'] : null;
        
        $this->container['token'] = isset($data['token']) ? $data['token'] : null;
        
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

        if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 200)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 200.";
        }

        if (!is_null($this->container['reference']) && (mb_strlen($this->container['reference']) > 100)) {
            $invalidProperties[] = "invalid value for 'reference', the character length must be smaller than or equal to 100.";
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
     * Gets activated_on
     *
     * @return \DateTime
     */
    public function getActivatedOn()
    {
        return $this->container['activated_on'];
    }

    /**
     * Sets activated_on
     *
     * @param \DateTime $activated_on 
     *
     * @return $this
     */
    public function setActivatedOn($activated_on)
    {
        $this->container['activated_on'] = $activated_on;

        return $this;
    }
    

    /**
     * Gets affiliate
     *
     * @return \Wallee\Sdk\Model\SubscriptionAffiliate
     */
    public function getAffiliate()
    {
        return $this->container['affiliate'];
    }

    /**
     * Sets affiliate
     *
     * @param \Wallee\Sdk\Model\SubscriptionAffiliate $affiliate 
     *
     * @return $this
     */
    public function setAffiliate($affiliate)
    {
        $this->container['affiliate'] = $affiliate;

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
     * Gets current_product_version
     *
     * @return \Wallee\Sdk\Model\SubscriptionProductVersion
     */
    public function getCurrentProductVersion()
    {
        return $this->container['current_product_version'];
    }

    /**
     * Sets current_product_version
     *
     * @param \Wallee\Sdk\Model\SubscriptionProductVersion $current_product_version 
     *
     * @return $this
     */
    public function setCurrentProductVersion($current_product_version)
    {
        $this->container['current_product_version'] = $current_product_version;

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
     * @param string $description 
     *
     * @return $this
     */
    public function setDescription($description)
    {
        if (!is_null($description) && (mb_strlen($description) > 200)) {
            throw new \InvalidArgumentException('invalid length for $description when calling Subscription., must be smaller than or equal to 200.');
        }

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
     * Gets initialized_on
     *
     * @return \DateTime
     */
    public function getInitializedOn()
    {
        return $this->container['initialized_on'];
    }

    /**
     * Sets initialized_on
     *
     * @param \DateTime $initialized_on 
     *
     * @return $this
     */
    public function setInitializedOn($initialized_on)
    {
        $this->container['initialized_on'] = $initialized_on;

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
     * @param string $language 
     *
     * @return $this
     */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;

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
     * Gets planned_termination_date
     *
     * @return \DateTime
     */
    public function getPlannedTerminationDate()
    {
        return $this->container['planned_termination_date'];
    }

    /**
     * Sets planned_termination_date
     *
     * @param \DateTime $planned_termination_date 
     *
     * @return $this
     */
    public function setPlannedTerminationDate($planned_termination_date)
    {
        $this->container['planned_termination_date'] = $planned_termination_date;

        return $this;
    }
    

    /**
     * Gets reference
     *
     * @return string
     */
    public function getReference()
    {
        return $this->container['reference'];
    }

    /**
     * Sets reference
     *
     * @param string $reference 
     *
     * @return $this
     */
    public function setReference($reference)
    {
        if (!is_null($reference) && (mb_strlen($reference) > 100)) {
            throw new \InvalidArgumentException('invalid length for $reference when calling Subscription., must be smaller than or equal to 100.');
        }

        $this->container['reference'] = $reference;

        return $this;
    }
    

    /**
     * Gets state
     *
     * @return \Wallee\Sdk\Model\SubscriptionState
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param \Wallee\Sdk\Model\SubscriptionState $state 
     *
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }
    

    /**
     * Gets subscriber
     *
     * @return \Wallee\Sdk\Model\Subscriber
     */
    public function getSubscriber()
    {
        return $this->container['subscriber'];
    }

    /**
     * Sets subscriber
     *
     * @param \Wallee\Sdk\Model\Subscriber $subscriber 
     *
     * @return $this
     */
    public function setSubscriber($subscriber)
    {
        $this->container['subscriber'] = $subscriber;

        return $this;
    }
    

    /**
     * Gets terminated_by
     *
     * @return int
     */
    public function getTerminatedBy()
    {
        return $this->container['terminated_by'];
    }

    /**
     * Sets terminated_by
     *
     * @param int $terminated_by 
     *
     * @return $this
     */
    public function setTerminatedBy($terminated_by)
    {
        $this->container['terminated_by'] = $terminated_by;

        return $this;
    }
    

    /**
     * Gets terminated_on
     *
     * @return \DateTime
     */
    public function getTerminatedOn()
    {
        return $this->container['terminated_on'];
    }

    /**
     * Sets terminated_on
     *
     * @param \DateTime $terminated_on 
     *
     * @return $this
     */
    public function setTerminatedOn($terminated_on)
    {
        $this->container['terminated_on'] = $terminated_on;

        return $this;
    }
    

    /**
     * Gets terminating_on
     *
     * @return \DateTime
     */
    public function getTerminatingOn()
    {
        return $this->container['terminating_on'];
    }

    /**
     * Sets terminating_on
     *
     * @param \DateTime $terminating_on 
     *
     * @return $this
     */
    public function setTerminatingOn($terminating_on)
    {
        $this->container['terminating_on'] = $terminating_on;

        return $this;
    }
    

    /**
     * Gets termination_scheduled_on
     *
     * @return \DateTime
     */
    public function getTerminationScheduledOn()
    {
        return $this->container['termination_scheduled_on'];
    }

    /**
     * Sets termination_scheduled_on
     *
     * @param \DateTime $termination_scheduled_on 
     *
     * @return $this
     */
    public function setTerminationScheduledOn($termination_scheduled_on)
    {
        $this->container['termination_scheduled_on'] = $termination_scheduled_on;

        return $this;
    }
    

    /**
     * Gets token
     *
     * @return \Wallee\Sdk\Model\Token
     */
    public function getToken()
    {
        return $this->container['token'];
    }

    /**
     * Sets token
     *
     * @param \Wallee\Sdk\Model\Token $token 
     *
     * @return $this
     */
    public function setToken($token)
    {
        $this->container['token'] = $token;

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


