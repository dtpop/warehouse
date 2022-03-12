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
 * SubscriptionSuspensionCreate model
 *
 * @category    Class
 * @description 
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class SubscriptionSuspensionCreate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SubscriptionSuspension.Create';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'end_action' => '\Wallee\Sdk\Model\SubscriptionSuspensionAction',
        'note' => 'string',
        'planned_end_date' => '\DateTime',
        'subscription' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'end_action' => null,
        'note' => null,
        'planned_end_date' => 'date-time',
        'subscription' => 'int64'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'end_action' => 'endAction',
        'note' => 'note',
        'planned_end_date' => 'plannedEndDate',
        'subscription' => 'subscription'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'end_action' => 'setEndAction',
        'note' => 'setNote',
        'planned_end_date' => 'setPlannedEndDate',
        'subscription' => 'setSubscription'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'end_action' => 'getEndAction',
        'note' => 'getNote',
        'planned_end_date' => 'getPlannedEndDate',
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
        
        $this->container['end_action'] = isset($data['end_action']) ? $data['end_action'] : null;
        
        $this->container['note'] = isset($data['note']) ? $data['note'] : null;
        
        $this->container['planned_end_date'] = isset($data['planned_end_date']) ? $data['planned_end_date'] : null;
        
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

        if ($this->container['end_action'] === null) {
            $invalidProperties[] = "'end_action' can't be null";
        }
        if (!is_null($this->container['note']) && (mb_strlen($this->container['note']) > 300)) {
            $invalidProperties[] = "invalid value for 'note', the character length must be smaller than or equal to 300.";
        }

        if ($this->container['planned_end_date'] === null) {
            $invalidProperties[] = "'planned_end_date' can't be null";
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
            throw new \InvalidArgumentException('invalid length for $note when calling SubscriptionSuspensionCreate., must be smaller than or equal to 300.');
        }

        $this->container['note'] = $note;

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


