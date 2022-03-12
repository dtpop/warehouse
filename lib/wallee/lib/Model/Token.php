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
 * Token model
 *
 * @category    Class
 * @description 
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class Token implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Token';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'created_on' => '\DateTime',
        'customer_email_address' => 'string',
        'customer_id' => 'string',
        'enabled_for_one_click_payment' => 'bool',
        'external_id' => 'string',
        'id' => 'int',
        'language' => 'string',
        'linked_space_id' => 'int',
        'planned_purge_date' => '\DateTime',
        'state' => '\Wallee\Sdk\Model\CreationEntityState',
        'time_zone' => 'string',
        'token_reference' => 'string',
        'version' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'created_on' => 'date-time',
        'customer_email_address' => null,
        'customer_id' => null,
        'enabled_for_one_click_payment' => null,
        'external_id' => null,
        'id' => 'int64',
        'language' => null,
        'linked_space_id' => 'int64',
        'planned_purge_date' => 'date-time',
        'state' => null,
        'time_zone' => null,
        'token_reference' => null,
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
        'customer_email_address' => 'customerEmailAddress',
        'customer_id' => 'customerId',
        'enabled_for_one_click_payment' => 'enabledForOneClickPayment',
        'external_id' => 'externalId',
        'id' => 'id',
        'language' => 'language',
        'linked_space_id' => 'linkedSpaceId',
        'planned_purge_date' => 'plannedPurgeDate',
        'state' => 'state',
        'time_zone' => 'timeZone',
        'token_reference' => 'tokenReference',
        'version' => 'version'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'created_on' => 'setCreatedOn',
        'customer_email_address' => 'setCustomerEmailAddress',
        'customer_id' => 'setCustomerId',
        'enabled_for_one_click_payment' => 'setEnabledForOneClickPayment',
        'external_id' => 'setExternalId',
        'id' => 'setId',
        'language' => 'setLanguage',
        'linked_space_id' => 'setLinkedSpaceId',
        'planned_purge_date' => 'setPlannedPurgeDate',
        'state' => 'setState',
        'time_zone' => 'setTimeZone',
        'token_reference' => 'setTokenReference',
        'version' => 'setVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'created_on' => 'getCreatedOn',
        'customer_email_address' => 'getCustomerEmailAddress',
        'customer_id' => 'getCustomerId',
        'enabled_for_one_click_payment' => 'getEnabledForOneClickPayment',
        'external_id' => 'getExternalId',
        'id' => 'getId',
        'language' => 'getLanguage',
        'linked_space_id' => 'getLinkedSpaceId',
        'planned_purge_date' => 'getPlannedPurgeDate',
        'state' => 'getState',
        'time_zone' => 'getTimeZone',
        'token_reference' => 'getTokenReference',
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
        
        $this->container['customer_email_address'] = isset($data['customer_email_address']) ? $data['customer_email_address'] : null;
        
        $this->container['customer_id'] = isset($data['customer_id']) ? $data['customer_id'] : null;
        
        $this->container['enabled_for_one_click_payment'] = isset($data['enabled_for_one_click_payment']) ? $data['enabled_for_one_click_payment'] : null;
        
        $this->container['external_id'] = isset($data['external_id']) ? $data['external_id'] : null;
        
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        
        $this->container['linked_space_id'] = isset($data['linked_space_id']) ? $data['linked_space_id'] : null;
        
        $this->container['planned_purge_date'] = isset($data['planned_purge_date']) ? $data['planned_purge_date'] : null;
        
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        
        $this->container['time_zone'] = isset($data['time_zone']) ? $data['time_zone'] : null;
        
        $this->container['token_reference'] = isset($data['token_reference']) ? $data['token_reference'] : null;
        
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

        if (!is_null($this->container['customer_email_address']) && (mb_strlen($this->container['customer_email_address']) > 150)) {
            $invalidProperties[] = "invalid value for 'customer_email_address', the character length must be smaller than or equal to 150.";
        }

        if (!is_null($this->container['token_reference']) && (mb_strlen($this->container['token_reference']) > 100)) {
            $invalidProperties[] = "invalid value for 'token_reference', the character length must be smaller than or equal to 100.";
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
     * Gets customer_email_address
     *
     * @return string
     */
    public function getCustomerEmailAddress()
    {
        return $this->container['customer_email_address'];
    }

    /**
     * Sets customer_email_address
     *
     * @param string $customer_email_address The customer email address is the email address of the customer.
     *
     * @return $this
     */
    public function setCustomerEmailAddress($customer_email_address)
    {
        if (!is_null($customer_email_address) && (mb_strlen($customer_email_address) > 150)) {
            throw new \InvalidArgumentException('invalid length for $customer_email_address when calling Token., must be smaller than or equal to 150.');
        }

        $this->container['customer_email_address'] = $customer_email_address;

        return $this;
    }
    

    /**
     * Gets customer_id
     *
     * @return string
     */
    public function getCustomerId()
    {
        return $this->container['customer_id'];
    }

    /**
     * Sets customer_id
     *
     * @param string $customer_id The customer ID identifies the customer in the merchant system. In case the customer ID has been provided it has to correspond with the customer ID provided on the transaction. The customer ID will not be changed automatically. The merchant system has to provide it.
     *
     * @return $this
     */
    public function setCustomerId($customer_id)
    {
        $this->container['customer_id'] = $customer_id;

        return $this;
    }
    

    /**
     * Gets enabled_for_one_click_payment
     *
     * @return bool
     */
    public function getEnabledForOneClickPayment()
    {
        return $this->container['enabled_for_one_click_payment'];
    }

    /**
     * Sets enabled_for_one_click_payment
     *
     * @param bool $enabled_for_one_click_payment When a token is enabled for one-click payments the buyer will be able to select the token within the iFrame or on the payment page to pay with the token. The usage of the token will reduce the number of steps the buyer has to go through. The buyer is linked via the customer ID on the transaction with the token. Means the token will be visible for buyers with the same customer ID. Additionally the payment method has to be configured to allow the one-click payments.
     *
     * @return $this
     */
    public function setEnabledForOneClickPayment($enabled_for_one_click_payment)
    {
        $this->container['enabled_for_one_click_payment'] = $enabled_for_one_click_payment;

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
     * @param string $external_id A client generated nonce which identifies the entity to be created. Subsequent creation requests with the same external ID will not create new entities but return the initially created entity instead.
     *
     * @return $this
     */
    public function setExternalId($external_id)
    {
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
     * @param string $time_zone The time zone defines in which time zone the customer is located in. The time zone may affects how dates are formatted when interacting with the customer.
     *
     * @return $this
     */
    public function setTimeZone($time_zone)
    {
        $this->container['time_zone'] = $time_zone;

        return $this;
    }
    

    /**
     * Gets token_reference
     *
     * @return string
     */
    public function getTokenReference()
    {
        return $this->container['token_reference'];
    }

    /**
     * Sets token_reference
     *
     * @param string $token_reference Use something that it is easy to identify and may help you find the token (e.g. customer id, email address).
     *
     * @return $this
     */
    public function setTokenReference($token_reference)
    {
        if (!is_null($token_reference) && (mb_strlen($token_reference) > 100)) {
            throw new \InvalidArgumentException('invalid length for $token_reference when calling Token., must be smaller than or equal to 100.');
        }

        $this->container['token_reference'] = $token_reference;

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


