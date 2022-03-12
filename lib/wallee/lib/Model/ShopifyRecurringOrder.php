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
 * ShopifyRecurringOrder model
 *
 * @category    Class
 * @description 
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class ShopifyRecurringOrder extends TransactionAwareEntity 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ShopifyRecurringOrder';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'billed_on' => '\DateTime',
        'checkout_token' => 'string',
        'created_on' => '\DateTime',
        'failure_reason' => '\Wallee\Sdk\Model\FailureReason',
        'order_id' => 'string',
        'order_name' => 'string',
        'planned_execution_date' => '\DateTime',
        'planned_purge_date' => '\DateTime',
        'recurrence_number' => 'int',
        'shop' => 'int',
        'started_processing_on' => '\DateTime',
        'state' => '\Wallee\Sdk\Model\ShopifyRecurringOrderState',
        'subscription_version' => '\Wallee\Sdk\Model\ShopifySubscriptionVersion',
        'transaction' => '\Wallee\Sdk\Model\ShopifyTransaction'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'billed_on' => 'date-time',
        'checkout_token' => null,
        'created_on' => 'date-time',
        'failure_reason' => null,
        'order_id' => null,
        'order_name' => null,
        'planned_execution_date' => 'date-time',
        'planned_purge_date' => 'date-time',
        'recurrence_number' => 'int32',
        'shop' => 'int64',
        'started_processing_on' => 'date-time',
        'state' => null,
        'subscription_version' => null,
        'transaction' => null
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'billed_on' => 'billedOn',
        'checkout_token' => 'checkoutToken',
        'created_on' => 'createdOn',
        'failure_reason' => 'failureReason',
        'order_id' => 'orderId',
        'order_name' => 'orderName',
        'planned_execution_date' => 'plannedExecutionDate',
        'planned_purge_date' => 'plannedPurgeDate',
        'recurrence_number' => 'recurrenceNumber',
        'shop' => 'shop',
        'started_processing_on' => 'startedProcessingOn',
        'state' => 'state',
        'subscription_version' => 'subscriptionVersion',
        'transaction' => 'transaction'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'billed_on' => 'setBilledOn',
        'checkout_token' => 'setCheckoutToken',
        'created_on' => 'setCreatedOn',
        'failure_reason' => 'setFailureReason',
        'order_id' => 'setOrderId',
        'order_name' => 'setOrderName',
        'planned_execution_date' => 'setPlannedExecutionDate',
        'planned_purge_date' => 'setPlannedPurgeDate',
        'recurrence_number' => 'setRecurrenceNumber',
        'shop' => 'setShop',
        'started_processing_on' => 'setStartedProcessingOn',
        'state' => 'setState',
        'subscription_version' => 'setSubscriptionVersion',
        'transaction' => 'setTransaction'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'billed_on' => 'getBilledOn',
        'checkout_token' => 'getCheckoutToken',
        'created_on' => 'getCreatedOn',
        'failure_reason' => 'getFailureReason',
        'order_id' => 'getOrderId',
        'order_name' => 'getOrderName',
        'planned_execution_date' => 'getPlannedExecutionDate',
        'planned_purge_date' => 'getPlannedPurgeDate',
        'recurrence_number' => 'getRecurrenceNumber',
        'shop' => 'getShop',
        'started_processing_on' => 'getStartedProcessingOn',
        'state' => 'getState',
        'subscription_version' => 'getSubscriptionVersion',
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

        
        $this->container['billed_on'] = isset($data['billed_on']) ? $data['billed_on'] : null;
        
        $this->container['checkout_token'] = isset($data['checkout_token']) ? $data['checkout_token'] : null;
        
        $this->container['created_on'] = isset($data['created_on']) ? $data['created_on'] : null;
        
        $this->container['failure_reason'] = isset($data['failure_reason']) ? $data['failure_reason'] : null;
        
        $this->container['order_id'] = isset($data['order_id']) ? $data['order_id'] : null;
        
        $this->container['order_name'] = isset($data['order_name']) ? $data['order_name'] : null;
        
        $this->container['planned_execution_date'] = isset($data['planned_execution_date']) ? $data['planned_execution_date'] : null;
        
        $this->container['planned_purge_date'] = isset($data['planned_purge_date']) ? $data['planned_purge_date'] : null;
        
        $this->container['recurrence_number'] = isset($data['recurrence_number']) ? $data['recurrence_number'] : null;
        
        $this->container['shop'] = isset($data['shop']) ? $data['shop'] : null;
        
        $this->container['started_processing_on'] = isset($data['started_processing_on']) ? $data['started_processing_on'] : null;
        
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        
        $this->container['subscription_version'] = isset($data['subscription_version']) ? $data['subscription_version'] : null;
        
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
     * Gets billed_on
     *
     * @return \DateTime
     */
    public function getBilledOn()
    {
        return $this->container['billed_on'];
    }

    /**
     * Sets billed_on
     *
     * @param \DateTime $billed_on 
     *
     * @return $this
     */
    public function setBilledOn($billed_on)
    {
        $this->container['billed_on'] = $billed_on;

        return $this;
    }
    

    /**
     * Gets checkout_token
     *
     * @return string
     */
    public function getCheckoutToken()
    {
        return $this->container['checkout_token'];
    }

    /**
     * Sets checkout_token
     *
     * @param string $checkout_token 
     *
     * @return $this
     */
    public function setCheckoutToken($checkout_token)
    {
        $this->container['checkout_token'] = $checkout_token;

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
     * Gets failure_reason
     *
     * @return \Wallee\Sdk\Model\FailureReason
     */
    public function getFailureReason()
    {
        return $this->container['failure_reason'];
    }

    /**
     * Sets failure_reason
     *
     * @param \Wallee\Sdk\Model\FailureReason $failure_reason 
     *
     * @return $this
     */
    public function setFailureReason($failure_reason)
    {
        $this->container['failure_reason'] = $failure_reason;

        return $this;
    }
    

    /**
     * Gets order_id
     *
     * @return string
     */
    public function getOrderId()
    {
        return $this->container['order_id'];
    }

    /**
     * Sets order_id
     *
     * @param string $order_id 
     *
     * @return $this
     */
    public function setOrderId($order_id)
    {
        $this->container['order_id'] = $order_id;

        return $this;
    }
    

    /**
     * Gets order_name
     *
     * @return string
     */
    public function getOrderName()
    {
        return $this->container['order_name'];
    }

    /**
     * Sets order_name
     *
     * @param string $order_name 
     *
     * @return $this
     */
    public function setOrderName($order_name)
    {
        $this->container['order_name'] = $order_name;

        return $this;
    }
    

    /**
     * Gets planned_execution_date
     *
     * @return \DateTime
     */
    public function getPlannedExecutionDate()
    {
        return $this->container['planned_execution_date'];
    }

    /**
     * Sets planned_execution_date
     *
     * @param \DateTime $planned_execution_date 
     *
     * @return $this
     */
    public function setPlannedExecutionDate($planned_execution_date)
    {
        $this->container['planned_execution_date'] = $planned_execution_date;

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
     * Gets recurrence_number
     *
     * @return int
     */
    public function getRecurrenceNumber()
    {
        return $this->container['recurrence_number'];
    }

    /**
     * Sets recurrence_number
     *
     * @param int $recurrence_number 
     *
     * @return $this
     */
    public function setRecurrenceNumber($recurrence_number)
    {
        $this->container['recurrence_number'] = $recurrence_number;

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
     * Gets started_processing_on
     *
     * @return \DateTime
     */
    public function getStartedProcessingOn()
    {
        return $this->container['started_processing_on'];
    }

    /**
     * Sets started_processing_on
     *
     * @param \DateTime $started_processing_on 
     *
     * @return $this
     */
    public function setStartedProcessingOn($started_processing_on)
    {
        $this->container['started_processing_on'] = $started_processing_on;

        return $this;
    }
    

    /**
     * Gets state
     *
     * @return \Wallee\Sdk\Model\ShopifyRecurringOrderState
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param \Wallee\Sdk\Model\ShopifyRecurringOrderState $state 
     *
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }
    

    /**
     * Gets subscription_version
     *
     * @return \Wallee\Sdk\Model\ShopifySubscriptionVersion
     */
    public function getSubscriptionVersion()
    {
        return $this->container['subscription_version'];
    }

    /**
     * Sets subscription_version
     *
     * @param \Wallee\Sdk\Model\ShopifySubscriptionVersion $subscription_version 
     *
     * @return $this
     */
    public function setSubscriptionVersion($subscription_version)
    {
        $this->container['subscription_version'] = $subscription_version;

        return $this;
    }
    

    /**
     * Gets transaction
     *
     * @return \Wallee\Sdk\Model\ShopifyTransaction
     */
    public function getTransaction()
    {
        return $this->container['transaction'];
    }

    /**
     * Sets transaction
     *
     * @param \Wallee\Sdk\Model\ShopifyTransaction $transaction 
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


