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
 * ShopifySubscription model
 *
 * @category    Class
 * @description 
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class ShopifySubscription implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ShopifySubscription';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'created_by' => 'int',
        'created_on' => '\DateTime',
        'external_id' => 'string',
        'id' => 'int',
        'initial_execution_date' => '\DateTime',
        'initial_payment_transaction' => 'int',
        'initial_shopify_transaction' => 'int',
        'language' => 'string',
        'linked_space_id' => 'int',
        'order_recurrence_number' => 'int',
        'shop' => 'int',
        'state' => '\Wallee\Sdk\Model\ShopifySubscriptionState',
        'subscriber' => '\Wallee\Sdk\Model\ShopifySubscriber',
        'terminated_by' => 'int',
        'terminated_on' => '\DateTime',
        'termination_request_date' => '\DateTime',
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
        'external_id' => null,
        'id' => 'int64',
        'initial_execution_date' => 'date-time',
        'initial_payment_transaction' => 'int64',
        'initial_shopify_transaction' => 'int64',
        'language' => null,
        'linked_space_id' => 'int64',
        'order_recurrence_number' => 'int32',
        'shop' => 'int64',
        'state' => null,
        'subscriber' => null,
        'terminated_by' => 'int64',
        'terminated_on' => 'date-time',
        'termination_request_date' => 'date-time',
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
        'external_id' => 'externalId',
        'id' => 'id',
        'initial_execution_date' => 'initialExecutionDate',
        'initial_payment_transaction' => 'initialPaymentTransaction',
        'initial_shopify_transaction' => 'initialShopifyTransaction',
        'language' => 'language',
        'linked_space_id' => 'linkedSpaceId',
        'order_recurrence_number' => 'orderRecurrenceNumber',
        'shop' => 'shop',
        'state' => 'state',
        'subscriber' => 'subscriber',
        'terminated_by' => 'terminatedBy',
        'terminated_on' => 'terminatedOn',
        'termination_request_date' => 'terminationRequestDate',
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
        'external_id' => 'setExternalId',
        'id' => 'setId',
        'initial_execution_date' => 'setInitialExecutionDate',
        'initial_payment_transaction' => 'setInitialPaymentTransaction',
        'initial_shopify_transaction' => 'setInitialShopifyTransaction',
        'language' => 'setLanguage',
        'linked_space_id' => 'setLinkedSpaceId',
        'order_recurrence_number' => 'setOrderRecurrenceNumber',
        'shop' => 'setShop',
        'state' => 'setState',
        'subscriber' => 'setSubscriber',
        'terminated_by' => 'setTerminatedBy',
        'terminated_on' => 'setTerminatedOn',
        'termination_request_date' => 'setTerminationRequestDate',
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
        'external_id' => 'getExternalId',
        'id' => 'getId',
        'initial_execution_date' => 'getInitialExecutionDate',
        'initial_payment_transaction' => 'getInitialPaymentTransaction',
        'initial_shopify_transaction' => 'getInitialShopifyTransaction',
        'language' => 'getLanguage',
        'linked_space_id' => 'getLinkedSpaceId',
        'order_recurrence_number' => 'getOrderRecurrenceNumber',
        'shop' => 'getShop',
        'state' => 'getState',
        'subscriber' => 'getSubscriber',
        'terminated_by' => 'getTerminatedBy',
        'terminated_on' => 'getTerminatedOn',
        'termination_request_date' => 'getTerminationRequestDate',
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
        
        $this->container['external_id'] = isset($data['external_id']) ? $data['external_id'] : null;
        
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        
        $this->container['initial_execution_date'] = isset($data['initial_execution_date']) ? $data['initial_execution_date'] : null;
        
        $this->container['initial_payment_transaction'] = isset($data['initial_payment_transaction']) ? $data['initial_payment_transaction'] : null;
        
        $this->container['initial_shopify_transaction'] = isset($data['initial_shopify_transaction']) ? $data['initial_shopify_transaction'] : null;
        
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        
        $this->container['linked_space_id'] = isset($data['linked_space_id']) ? $data['linked_space_id'] : null;
        
        $this->container['order_recurrence_number'] = isset($data['order_recurrence_number']) ? $data['order_recurrence_number'] : null;
        
        $this->container['shop'] = isset($data['shop']) ? $data['shop'] : null;
        
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        
        $this->container['subscriber'] = isset($data['subscriber']) ? $data['subscriber'] : null;
        
        $this->container['terminated_by'] = isset($data['terminated_by']) ? $data['terminated_by'] : null;
        
        $this->container['terminated_on'] = isset($data['terminated_on']) ? $data['terminated_on'] : null;
        
        $this->container['termination_request_date'] = isset($data['termination_request_date']) ? $data['termination_request_date'] : null;
        
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

        if (!is_null($this->container['external_id']) && (mb_strlen($this->container['external_id']) > 100)) {
            $invalidProperties[] = "invalid value for 'external_id', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['external_id']) && (mb_strlen($this->container['external_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'external_id', the character length must be bigger than or equal to 1.";
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
     * @param string $external_id The external id helps to identify the entity and a subsequent creation of an entity with the same ID will not create a new entity.
     *
     * @return $this
     */
    public function setExternalId($external_id)
    {
        if (!is_null($external_id) && (mb_strlen($external_id) > 100)) {
            throw new \InvalidArgumentException('invalid length for $external_id when calling ShopifySubscription., must be smaller than or equal to 100.');
        }
        if (!is_null($external_id) && (mb_strlen($external_id) < 1)) {
            throw new \InvalidArgumentException('invalid length for $external_id when calling ShopifySubscription., must be bigger than or equal to 1.');
        }

        $this->container['external_id'] = $external_id;

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
     * Gets initial_execution_date
     *
     * @return \DateTime
     */
    public function getInitialExecutionDate()
    {
        return $this->container['initial_execution_date'];
    }

    /**
     * Sets initial_execution_date
     *
     * @param \DateTime $initial_execution_date 
     *
     * @return $this
     */
    public function setInitialExecutionDate($initial_execution_date)
    {
        $this->container['initial_execution_date'] = $initial_execution_date;

        return $this;
    }
    

    /**
     * Gets initial_payment_transaction
     *
     * @return int
     */
    public function getInitialPaymentTransaction()
    {
        return $this->container['initial_payment_transaction'];
    }

    /**
     * Sets initial_payment_transaction
     *
     * @param int $initial_payment_transaction 
     *
     * @return $this
     */
    public function setInitialPaymentTransaction($initial_payment_transaction)
    {
        $this->container['initial_payment_transaction'] = $initial_payment_transaction;

        return $this;
    }
    

    /**
     * Gets initial_shopify_transaction
     *
     * @return int
     */
    public function getInitialShopifyTransaction()
    {
        return $this->container['initial_shopify_transaction'];
    }

    /**
     * Sets initial_shopify_transaction
     *
     * @param int $initial_shopify_transaction 
     *
     * @return $this
     */
    public function setInitialShopifyTransaction($initial_shopify_transaction)
    {
        $this->container['initial_shopify_transaction'] = $initial_shopify_transaction;

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
     * Gets order_recurrence_number
     *
     * @return int
     */
    public function getOrderRecurrenceNumber()
    {
        return $this->container['order_recurrence_number'];
    }

    /**
     * Sets order_recurrence_number
     *
     * @param int $order_recurrence_number 
     *
     * @return $this
     */
    public function setOrderRecurrenceNumber($order_recurrence_number)
    {
        $this->container['order_recurrence_number'] = $order_recurrence_number;

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
     * @return \Wallee\Sdk\Model\ShopifySubscriptionState
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param \Wallee\Sdk\Model\ShopifySubscriptionState $state 
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
     * @return \Wallee\Sdk\Model\ShopifySubscriber
     */
    public function getSubscriber()
    {
        return $this->container['subscriber'];
    }

    /**
     * Sets subscriber
     *
     * @param \Wallee\Sdk\Model\ShopifySubscriber $subscriber 
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
     * Gets termination_request_date
     *
     * @return \DateTime
     */
    public function getTerminationRequestDate()
    {
        return $this->container['termination_request_date'];
    }

    /**
     * Sets termination_request_date
     *
     * @param \DateTime $termination_request_date 
     *
     * @return $this
     */
    public function setTerminationRequestDate($termination_request_date)
    {
        $this->container['termination_request_date'] = $termination_request_date;

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


