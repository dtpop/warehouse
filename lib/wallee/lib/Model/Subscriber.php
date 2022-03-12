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
 * Subscriber model
 *
 * @category    Class
 * @description A subscriber represents everyone who is subscribed to a product.
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class Subscriber implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Subscriber';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'additional_allowed_payment_method_configurations' => 'int[]',
        'billing_address' => '\Wallee\Sdk\Model\Address',
        'description' => 'string',
        'disallowed_payment_method_configurations' => 'int[]',
        'email_address' => 'string',
        'external_id' => 'string',
        'id' => 'int',
        'language' => 'string',
        'linked_space_id' => 'int',
        'meta_data' => 'map[string,string]',
        'planned_purge_date' => '\DateTime',
        'reference' => 'string',
        'shipping_address' => '\Wallee\Sdk\Model\Address',
        'state' => '\Wallee\Sdk\Model\CreationEntityState',
        'version' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'additional_allowed_payment_method_configurations' => 'int64',
        'billing_address' => null,
        'description' => null,
        'disallowed_payment_method_configurations' => 'int64',
        'email_address' => null,
        'external_id' => null,
        'id' => 'int64',
        'language' => null,
        'linked_space_id' => 'int64',
        'meta_data' => null,
        'planned_purge_date' => 'date-time',
        'reference' => null,
        'shipping_address' => null,
        'state' => null,
        'version' => 'int32'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'additional_allowed_payment_method_configurations' => 'additionalAllowedPaymentMethodConfigurations',
        'billing_address' => 'billingAddress',
        'description' => 'description',
        'disallowed_payment_method_configurations' => 'disallowedPaymentMethodConfigurations',
        'email_address' => 'emailAddress',
        'external_id' => 'externalId',
        'id' => 'id',
        'language' => 'language',
        'linked_space_id' => 'linkedSpaceId',
        'meta_data' => 'metaData',
        'planned_purge_date' => 'plannedPurgeDate',
        'reference' => 'reference',
        'shipping_address' => 'shippingAddress',
        'state' => 'state',
        'version' => 'version'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'additional_allowed_payment_method_configurations' => 'setAdditionalAllowedPaymentMethodConfigurations',
        'billing_address' => 'setBillingAddress',
        'description' => 'setDescription',
        'disallowed_payment_method_configurations' => 'setDisallowedPaymentMethodConfigurations',
        'email_address' => 'setEmailAddress',
        'external_id' => 'setExternalId',
        'id' => 'setId',
        'language' => 'setLanguage',
        'linked_space_id' => 'setLinkedSpaceId',
        'meta_data' => 'setMetaData',
        'planned_purge_date' => 'setPlannedPurgeDate',
        'reference' => 'setReference',
        'shipping_address' => 'setShippingAddress',
        'state' => 'setState',
        'version' => 'setVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'additional_allowed_payment_method_configurations' => 'getAdditionalAllowedPaymentMethodConfigurations',
        'billing_address' => 'getBillingAddress',
        'description' => 'getDescription',
        'disallowed_payment_method_configurations' => 'getDisallowedPaymentMethodConfigurations',
        'email_address' => 'getEmailAddress',
        'external_id' => 'getExternalId',
        'id' => 'getId',
        'language' => 'getLanguage',
        'linked_space_id' => 'getLinkedSpaceId',
        'meta_data' => 'getMetaData',
        'planned_purge_date' => 'getPlannedPurgeDate',
        'reference' => 'getReference',
        'shipping_address' => 'getShippingAddress',
        'state' => 'getState',
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
        
        $this->container['additional_allowed_payment_method_configurations'] = isset($data['additional_allowed_payment_method_configurations']) ? $data['additional_allowed_payment_method_configurations'] : null;
        
        $this->container['billing_address'] = isset($data['billing_address']) ? $data['billing_address'] : null;
        
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        
        $this->container['disallowed_payment_method_configurations'] = isset($data['disallowed_payment_method_configurations']) ? $data['disallowed_payment_method_configurations'] : null;
        
        $this->container['email_address'] = isset($data['email_address']) ? $data['email_address'] : null;
        
        $this->container['external_id'] = isset($data['external_id']) ? $data['external_id'] : null;
        
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        
        $this->container['linked_space_id'] = isset($data['linked_space_id']) ? $data['linked_space_id'] : null;
        
        $this->container['meta_data'] = isset($data['meta_data']) ? $data['meta_data'] : null;
        
        $this->container['planned_purge_date'] = isset($data['planned_purge_date']) ? $data['planned_purge_date'] : null;
        
        $this->container['reference'] = isset($data['reference']) ? $data['reference'] : null;
        
        $this->container['shipping_address'] = isset($data['shipping_address']) ? $data['shipping_address'] : null;
        
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        
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

        if (!is_null($this->container['email_address']) && (mb_strlen($this->container['email_address']) > 254)) {
            $invalidProperties[] = "invalid value for 'email_address', the character length must be smaller than or equal to 254.";
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
     * Gets additional_allowed_payment_method_configurations
     *
     * @return int[]
     */
    public function getAdditionalAllowedPaymentMethodConfigurations()
    {
        return $this->container['additional_allowed_payment_method_configurations'];
    }

    /**
     * Sets additional_allowed_payment_method_configurations
     *
     * @param int[] $additional_allowed_payment_method_configurations Those payment methods which are allowed additionally will be available even when the product does not allow those methods.
     *
     * @return $this
     */
    public function setAdditionalAllowedPaymentMethodConfigurations($additional_allowed_payment_method_configurations)
    {
        $this->container['additional_allowed_payment_method_configurations'] = $additional_allowed_payment_method_configurations;

        return $this;
    }
    

    /**
     * Gets billing_address
     *
     * @return \Wallee\Sdk\Model\Address
     */
    public function getBillingAddress()
    {
        return $this->container['billing_address'];
    }

    /**
     * Sets billing_address
     *
     * @param \Wallee\Sdk\Model\Address $billing_address 
     *
     * @return $this
     */
    public function setBillingAddress($billing_address)
    {
        $this->container['billing_address'] = $billing_address;

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
     * @param string $description The subscriber description can be used to add a description to the subscriber. This is used in the back office to identify the subscriber.
     *
     * @return $this
     */
    public function setDescription($description)
    {
        if (!is_null($description) && (mb_strlen($description) > 200)) {
            throw new \InvalidArgumentException('invalid length for $description when calling Subscriber., must be smaller than or equal to 200.');
        }

        $this->container['description'] = $description;

        return $this;
    }
    

    /**
     * Gets disallowed_payment_method_configurations
     *
     * @return int[]
     */
    public function getDisallowedPaymentMethodConfigurations()
    {
        return $this->container['disallowed_payment_method_configurations'];
    }

    /**
     * Sets disallowed_payment_method_configurations
     *
     * @param int[] $disallowed_payment_method_configurations Those payment methods which are disallowed will not be available to the subscriber even if the product allows those methods.
     *
     * @return $this
     */
    public function setDisallowedPaymentMethodConfigurations($disallowed_payment_method_configurations)
    {
        $this->container['disallowed_payment_method_configurations'] = $disallowed_payment_method_configurations;

        return $this;
    }
    

    /**
     * Gets email_address
     *
     * @return string
     */
    public function getEmailAddress()
    {
        return $this->container['email_address'];
    }

    /**
     * Sets email_address
     *
     * @param string $email_address The email address is used to communicate with the subscriber. There can be only one subscriber per space with the same email address.
     *
     * @return $this
     */
    public function setEmailAddress($email_address)
    {
        if (!is_null($email_address) && (mb_strlen($email_address) > 254)) {
            throw new \InvalidArgumentException('invalid length for $email_address when calling Subscriber., must be smaller than or equal to 254.');
        }

        $this->container['email_address'] = $email_address;

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
     * @param string $language The subscriber language determines the language which is used to communicate with the subscriber in emails and documents (e.g. invoices).
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
     * Gets meta_data
     *
     * @return map[string,string]
     */
    public function getMetaData()
    {
        return $this->container['meta_data'];
    }

    /**
     * Sets meta_data
     *
     * @param map[string,string] $meta_data Meta data allow to store additional data along the object.
     *
     * @return $this
     */
    public function setMetaData($meta_data)
    {
        $this->container['meta_data'] = $meta_data;

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
     * @param string $reference The subscriber reference identifies the subscriber in administrative interfaces (e.g. customer id).
     *
     * @return $this
     */
    public function setReference($reference)
    {
        if (!is_null($reference) && (mb_strlen($reference) > 100)) {
            throw new \InvalidArgumentException('invalid length for $reference when calling Subscriber., must be smaller than or equal to 100.');
        }

        $this->container['reference'] = $reference;

        return $this;
    }
    

    /**
     * Gets shipping_address
     *
     * @return \Wallee\Sdk\Model\Address
     */
    public function getShippingAddress()
    {
        return $this->container['shipping_address'];
    }

    /**
     * Sets shipping_address
     *
     * @param \Wallee\Sdk\Model\Address $shipping_address 
     *
     * @return $this
     */
    public function setShippingAddress($shipping_address)
    {
        $this->container['shipping_address'] = $shipping_address;

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


