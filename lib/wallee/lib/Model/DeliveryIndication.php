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
use \Wallee\Sdk\ObjectSerializer;

/**
 * DeliveryIndication model
 *
 * @category    Class
 * @description 
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class DeliveryIndication extends TransactionAwareEntity 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DeliveryIndication';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'automatic_decision_reason' => '\Wallee\Sdk\Model\DeliveryIndicationDecisionReason',
        'automatically_decided_on' => '\DateTime',
        'completion' => 'int',
        'created_on' => '\DateTime',
        'manual_decision_timeout_on' => '\DateTime',
        'manually_decided_by' => 'int',
        'manually_decided_on' => '\DateTime',
        'planned_purge_date' => '\DateTime',
        'state' => '\Wallee\Sdk\Model\DeliveryIndicationState',
        'timeout_on' => '\DateTime',
        'transaction' => '\Wallee\Sdk\Model\Transaction'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'automatic_decision_reason' => null,
        'automatically_decided_on' => 'date-time',
        'completion' => 'int64',
        'created_on' => 'date-time',
        'manual_decision_timeout_on' => 'date-time',
        'manually_decided_by' => 'int64',
        'manually_decided_on' => 'date-time',
        'planned_purge_date' => 'date-time',
        'state' => null,
        'timeout_on' => 'date-time',
        'transaction' => null
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'automatic_decision_reason' => 'automaticDecisionReason',
        'automatically_decided_on' => 'automaticallyDecidedOn',
        'completion' => 'completion',
        'created_on' => 'createdOn',
        'manual_decision_timeout_on' => 'manualDecisionTimeoutOn',
        'manually_decided_by' => 'manuallyDecidedBy',
        'manually_decided_on' => 'manuallyDecidedOn',
        'planned_purge_date' => 'plannedPurgeDate',
        'state' => 'state',
        'timeout_on' => 'timeoutOn',
        'transaction' => 'transaction'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'automatic_decision_reason' => 'setAutomaticDecisionReason',
        'automatically_decided_on' => 'setAutomaticallyDecidedOn',
        'completion' => 'setCompletion',
        'created_on' => 'setCreatedOn',
        'manual_decision_timeout_on' => 'setManualDecisionTimeoutOn',
        'manually_decided_by' => 'setManuallyDecidedBy',
        'manually_decided_on' => 'setManuallyDecidedOn',
        'planned_purge_date' => 'setPlannedPurgeDate',
        'state' => 'setState',
        'timeout_on' => 'setTimeoutOn',
        'transaction' => 'setTransaction'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'automatic_decision_reason' => 'getAutomaticDecisionReason',
        'automatically_decided_on' => 'getAutomaticallyDecidedOn',
        'completion' => 'getCompletion',
        'created_on' => 'getCreatedOn',
        'manual_decision_timeout_on' => 'getManualDecisionTimeoutOn',
        'manually_decided_by' => 'getManuallyDecidedBy',
        'manually_decided_on' => 'getManuallyDecidedOn',
        'planned_purge_date' => 'getPlannedPurgeDate',
        'state' => 'getState',
        'timeout_on' => 'getTimeoutOn',
        'transaction' => 'getTransaction'
    ];

    


    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        parent::__construct($data);

        
        $this->container['automatic_decision_reason'] = isset($data['automatic_decision_reason']) ? $data['automatic_decision_reason'] : null;
        
        $this->container['automatically_decided_on'] = isset($data['automatically_decided_on']) ? $data['automatically_decided_on'] : null;
        
        $this->container['completion'] = isset($data['completion']) ? $data['completion'] : null;
        
        $this->container['created_on'] = isset($data['created_on']) ? $data['created_on'] : null;
        
        $this->container['manual_decision_timeout_on'] = isset($data['manual_decision_timeout_on']) ? $data['manual_decision_timeout_on'] : null;
        
        $this->container['manually_decided_by'] = isset($data['manually_decided_by']) ? $data['manually_decided_by'] : null;
        
        $this->container['manually_decided_on'] = isset($data['manually_decided_on']) ? $data['manually_decided_on'] : null;
        
        $this->container['planned_purge_date'] = isset($data['planned_purge_date']) ? $data['planned_purge_date'] : null;
        
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        
        $this->container['timeout_on'] = isset($data['timeout_on']) ? $data['timeout_on'] : null;
        
        $this->container['transaction'] = isset($data['transaction']) ? $data['transaction'] : null;
        
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        return $invalidProperties;
    }

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes + parent::swaggerTypes();
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats + parent::swaggerFormats();
    }


    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return parent::attributeMap() + self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return parent::setters() + self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return parent::getters() + self::$getters;
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
     * Gets automatic_decision_reason
     *
     * @return \Wallee\Sdk\Model\DeliveryIndicationDecisionReason
     */
    public function getAutomaticDecisionReason()
    {
        return $this->container['automatic_decision_reason'];
    }

    /**
     * Sets automatic_decision_reason
     *
     * @param \Wallee\Sdk\Model\DeliveryIndicationDecisionReason $automatic_decision_reason 
     *
     * @return $this
     */
    public function setAutomaticDecisionReason($automatic_decision_reason)
    {
        $this->container['automatic_decision_reason'] = $automatic_decision_reason;

        return $this;
    }
    

    /**
     * Gets automatically_decided_on
     *
     * @return \DateTime
     */
    public function getAutomaticallyDecidedOn()
    {
        return $this->container['automatically_decided_on'];
    }

    /**
     * Sets automatically_decided_on
     *
     * @param \DateTime $automatically_decided_on 
     *
     * @return $this
     */
    public function setAutomaticallyDecidedOn($automatically_decided_on)
    {
        $this->container['automatically_decided_on'] = $automatically_decided_on;

        return $this;
    }
    

    /**
     * Gets completion
     *
     * @return int
     */
    public function getCompletion()
    {
        return $this->container['completion'];
    }

    /**
     * Sets completion
     *
     * @param int $completion 
     *
     * @return $this
     */
    public function setCompletion($completion)
    {
        $this->container['completion'] = $completion;

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
     * Gets manual_decision_timeout_on
     *
     * @return \DateTime
     */
    public function getManualDecisionTimeoutOn()
    {
        return $this->container['manual_decision_timeout_on'];
    }

    /**
     * Sets manual_decision_timeout_on
     *
     * @param \DateTime $manual_decision_timeout_on 
     *
     * @return $this
     */
    public function setManualDecisionTimeoutOn($manual_decision_timeout_on)
    {
        $this->container['manual_decision_timeout_on'] = $manual_decision_timeout_on;

        return $this;
    }
    

    /**
     * Gets manually_decided_by
     *
     * @return int
     */
    public function getManuallyDecidedBy()
    {
        return $this->container['manually_decided_by'];
    }

    /**
     * Sets manually_decided_by
     *
     * @param int $manually_decided_by 
     *
     * @return $this
     */
    public function setManuallyDecidedBy($manually_decided_by)
    {
        $this->container['manually_decided_by'] = $manually_decided_by;

        return $this;
    }
    

    /**
     * Gets manually_decided_on
     *
     * @return \DateTime
     */
    public function getManuallyDecidedOn()
    {
        return $this->container['manually_decided_on'];
    }

    /**
     * Sets manually_decided_on
     *
     * @param \DateTime $manually_decided_on 
     *
     * @return $this
     */
    public function setManuallyDecidedOn($manually_decided_on)
    {
        $this->container['manually_decided_on'] = $manually_decided_on;

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
     * @return \Wallee\Sdk\Model\DeliveryIndicationState
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param \Wallee\Sdk\Model\DeliveryIndicationState $state 
     *
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }
    

    /**
     * Gets timeout_on
     *
     * @return \DateTime
     */
    public function getTimeoutOn()
    {
        return $this->container['timeout_on'];
    }

    /**
     * Sets timeout_on
     *
     * @param \DateTime $timeout_on 
     *
     * @return $this
     */
    public function setTimeoutOn($timeout_on)
    {
        $this->container['timeout_on'] = $timeout_on;

        return $this;
    }
    

    /**
     * Gets transaction
     *
     * @return \Wallee\Sdk\Model\Transaction
     */
    public function getTransaction()
    {
        return $this->container['transaction'];
    }

    /**
     * Sets transaction
     *
     * @param \Wallee\Sdk\Model\Transaction $transaction 
     *
     * @return $this
     */
    public function setTransaction($transaction)
    {
        $this->container['transaction'] = $transaction;

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


