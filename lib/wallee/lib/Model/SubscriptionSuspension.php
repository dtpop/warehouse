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
 * SubscriptionSuspension model
 *
 * @category    Class
 * @description 
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class SubscriptionSuspension implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SubscriptionSuspension';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'created_on' => '\DateTime',
        'effective_end_date' => '\DateTime',
        'end_action' => '\Wallee\Sdk\Model\SubscriptionSuspensionAction',
        'id' => 'int',
        'language' => 'string',
        'linked_space_id' => 'int',
        'note' => 'string',
        'period_bill' => 'int',
        'planned_end_date' => '\DateTime',
        'planned_purge_date' => '\DateTime',
        'reason' => '\Wallee\Sdk\Model\SubscriptionSuspensionReason',
        'state' => '\Wallee\Sdk\Model\SubscriptionSuspensionState',
        'subscription' => 'int',
        'version' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'created_on' => 'date-time',
        'effective_end_date' => 'date-time',
        'end_action' => null,
        'id' => 'int64',
        'language' => null,
        'linked_space_id' => 'int64',
        'note' => null,
        'period_bill' => 'int64',
        'planned_end_date' => 'date-time',
        'planned_purge_date' => 'date-time',
        'reason' => null,
        'state' => null,
        'subscription' => 'int64',
        'version' => 'int32'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'created_on' => 'createdOn',
        'effective_end_date' => 'effectiveEndDate',
        'end_action' => 'endAction',
        'id' => 'id',
        'language' => 'language',
        'linked_space_id' => 'linkedSpaceId',
        'note' => 'note',
        'period_bill' => 'periodBill',
        'planned_end_date' => 'plannedEndDate',
        'planned_purge_date' => 'plannedPurgeDate',
        'reason' => 'reason',
        'state' => 'state',
        'subscription' => 'subscription',
        'version' => 'version'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'created_on' => 'setCreatedOn',
        'effective_end_date' => 'setEffectiveEndDate',
        'end_action' => 'setEndAction',
        'id' => 'setId',
        'language' => 'setLanguage',
        'linked_space_id' => 'setLinkedSpaceId',
        'note' => 'setNote',
        'period_bill' => 'setPeriodBill',
        'planned_end_date' => 'setPlannedEndDate',
        'planned_purge_date' => 'setPlannedPurgeDate',
        'reason' => 'setReason',
        'state' => 'setState',
        'subscription' => 'setSubscription',
        'version' => 'setVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'created_on' => 'getCreatedOn',
        'effective_end_date' => 'getEffectiveEndDate',
        'end_action' => 'getEndAction',
        'id' => 'getId',
        'language' => 'getLanguage',
        'linked_space_id' => 'getLinkedSpaceId',
        'note' => 'getNote',
        'period_bill' => 'getPeriodBill',
        'planned_end_date' => 'getPlannedEndDate',
        'planned_purge_date' => 'getPlannedPurgeDate',
        'reason' => 'getReason',
        'state' => 'getState',
        'subscription' => 'getSubscription',
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
        
        $this->container['created_on'] = isset($data['created_on']) ? $data['created_on'] : null;
        
        $this->container['effective_end_date'] = isset($data['effective_end_date']) ? $data['effective_end_date'] : null;
        
        $this->container['end_action'] = isset($data['end_action']) ? $data['end_action'] : null;
        
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        
        $this->container['linked_space_id'] = isset($data['linked_space_id']) ? $data['linked_space_id'] : null;
        
        $this->container['note'] = isset($data['note']) ? $data['note'] : null;
        
        $this->container['period_bill'] = isset($data['period_bill']) ? $data['period_bill'] : null;
        
        $this->container['planned_end_date'] = isset($data['planned_end_date']) ? $data['planned_end_date'] : null;
        
        $this->container['planned_purge_date'] = isset($data['planned_purge_date']) ? $data['planned_purge_date'] : null;
        
        $this->container['reason'] = isset($data['reason']) ? $data['reason'] : null;
        
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        
        $this->container['subscription'] = isset($data['subscription']) ? $data['subscription'] : null;
        
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

        if (!is_null($this->container['note']) && (mb_strlen($this->container['note']) > 300)) {
            $invalidProperties[] = "invalid value for 'note', the character length must be smaller than or equal to 300.";
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
     * Gets effective_end_date
     *
     * @return \DateTime
     */
    public function getEffectiveEndDate()
    {
        return $this->container['effective_end_date'];
    }

    /**
     * Sets effective_end_date
     *
     * @param \DateTime $effective_end_date 
     *
     * @return $this
     */
    public function setEffectiveEndDate($effective_end_date)
    {
        $this->container['effective_end_date'] = $effective_end_date;

        return $this;
    }
    

    /**
     * Gets end_action
     *
     * @return \Wallee\Sdk\Model\SubscriptionSuspensionAction
     */
    public function getEndAction()
    {
        return $this->container['end_action'];
    }

    /**
     * Sets end_action
     *
     * @param \Wallee\Sdk\Model\SubscriptionSuspensionAction $end_action When the suspension reaches the planned end date the end action will be carried out. This action is only executed when the suspension is ended automatically based on the end date.
     *
     * @return $this
     */
    public function setEndAction($end_action)
    {
        $this->container['end_action'] = $end_action;

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
     * Gets note
     *
     * @return string
     */
    public function getNote()
    {
        return $this->container['note'];
    }

    /**
     * Sets note
     *
     * @param string $note The note may contain some internal information for the suspension. The note will not be disclosed to the subscriber.
     *
     * @return $this
     */
    public function setNote($note)
    {
        if (!is_null($note) && (mb_strlen($note) > 300)) {
            throw new \InvalidArgumentException('invalid length for $note when calling SubscriptionSuspension., must be smaller than or equal to 300.');
        }

        $this->container['note'] = $note;

        return $this;
    }
    

    /**
     * Gets period_bill
     *
     * @return int
     */
    public function getPeriodBill()
    {
        return $this->container['period_bill'];
    }

    /**
     * Sets period_bill
     *
     * @param int $period_bill 
     *
     * @return $this
     */
    public function setPeriodBill($period_bill)
    {
        $this->container['period_bill'] = $period_bill;

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
     * @param \DateTime $planned_end_date The planned end date of the suspension identifies the date on which the suspension will be ended automatically.
     *
     * @return $this
     */
    public function setPlannedEndDate($planned_end_date)
    {
        $this->container['planned_end_date'] = $planned_end_date;

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
     * Gets reason
     *
     * @return \Wallee\Sdk\Model\SubscriptionSuspensionReason
     */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
     * Sets reason
     *
     * @param \Wallee\Sdk\Model\SubscriptionSuspensionReason $reason The suspension reason indicates why a suspension has been created.
     *
     * @return $this
     */
    public function setReason($reason)
    {
        $this->container['reason'] = $reason;

        return $this;
    }
    

    /**
     * Gets state
     *
     * @return \Wallee\Sdk\Model\SubscriptionSuspensionState
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param \Wallee\Sdk\Model\SubscriptionSuspensionState $state 
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
     * @return int
     */
    public function getSubscription()
    {
        return $this->container['subscription'];
    }

    /**
     * Sets subscription
     *
     * @param int $subscription 
     *
     * @return $this
     */
    public function setSubscription($subscription)
    {
        $this->container['subscription'] = $subscription;

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


