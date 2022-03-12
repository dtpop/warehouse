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
 * TokenVersion model
 *
 * @category    Class
 * @description 
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class TokenVersion implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TokenVersion';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'activated_on' => '\DateTime',
        'billing_address' => '\Wallee\Sdk\Model\Address',
        'created_on' => '\DateTime',
        'environment' => '\Wallee\Sdk\Model\ChargeAttemptEnvironment',
        'expires_on' => '\DateTime',
        'icon_url' => 'string',
        'id' => 'int',
        'labels' => '\Wallee\Sdk\Model\Label[]',
        'language' => 'string',
        'linked_space_id' => 'int',
        'name' => 'string',
        'obsoleted_on' => '\DateTime',
        'payment_connector_configuration' => '\Wallee\Sdk\Model\PaymentConnectorConfiguration',
        'payment_information_hashes' => '\Wallee\Sdk\Model\PaymentInformationHash[]',
        'payment_method' => 'int',
        'payment_method_brand' => 'int',
        'planned_purge_date' => '\DateTime',
        'processor_token' => 'string',
        'shipping_address' => '\Wallee\Sdk\Model\Address',
        'state' => '\Wallee\Sdk\Model\TokenVersionState',
        'token' => '\Wallee\Sdk\Model\Token',
        'type' => '\Wallee\Sdk\Model\TokenVersionType',
        'version' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'activated_on' => 'date-time',
        'billing_address' => null,
        'created_on' => 'date-time',
        'environment' => null,
        'expires_on' => 'date-time',
        'icon_url' => null,
        'id' => 'int64',
        'labels' => null,
        'language' => null,
        'linked_space_id' => 'int64',
        'name' => null,
        'obsoleted_on' => 'date-time',
        'payment_connector_configuration' => null,
        'payment_information_hashes' => null,
        'payment_method' => 'int64',
        'payment_method_brand' => 'int64',
        'planned_purge_date' => 'date-time',
        'processor_token' => null,
        'shipping_address' => null,
        'state' => null,
        'token' => null,
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
        'activated_on' => 'activatedOn',
        'billing_address' => 'billingAddress',
        'created_on' => 'createdOn',
        'environment' => 'environment',
        'expires_on' => 'expiresOn',
        'icon_url' => 'iconUrl',
        'id' => 'id',
        'labels' => 'labels',
        'language' => 'language',
        'linked_space_id' => 'linkedSpaceId',
        'name' => 'name',
        'obsoleted_on' => 'obsoletedOn',
        'payment_connector_configuration' => 'paymentConnectorConfiguration',
        'payment_information_hashes' => 'paymentInformationHashes',
        'payment_method' => 'paymentMethod',
        'payment_method_brand' => 'paymentMethodBrand',
        'planned_purge_date' => 'plannedPurgeDate',
        'processor_token' => 'processorToken',
        'shipping_address' => 'shippingAddress',
        'state' => 'state',
        'token' => 'token',
        'type' => 'type',
        'version' => 'version'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'activated_on' => 'setActivatedOn',
        'billing_address' => 'setBillingAddress',
        'created_on' => 'setCreatedOn',
        'environment' => 'setEnvironment',
        'expires_on' => 'setExpiresOn',
        'icon_url' => 'setIconUrl',
        'id' => 'setId',
        'labels' => 'setLabels',
        'language' => 'setLanguage',
        'linked_space_id' => 'setLinkedSpaceId',
        'name' => 'setName',
        'obsoleted_on' => 'setObsoletedOn',
        'payment_connector_configuration' => 'setPaymentConnectorConfiguration',
        'payment_information_hashes' => 'setPaymentInformationHashes',
        'payment_method' => 'setPaymentMethod',
        'payment_method_brand' => 'setPaymentMethodBrand',
        'planned_purge_date' => 'setPlannedPurgeDate',
        'processor_token' => 'setProcessorToken',
        'shipping_address' => 'setShippingAddress',
        'state' => 'setState',
        'token' => 'setToken',
        'type' => 'setType',
        'version' => 'setVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'activated_on' => 'getActivatedOn',
        'billing_address' => 'getBillingAddress',
        'created_on' => 'getCreatedOn',
        'environment' => 'getEnvironment',
        'expires_on' => 'getExpiresOn',
        'icon_url' => 'getIconUrl',
        'id' => 'getId',
        'labels' => 'getLabels',
        'language' => 'getLanguage',
        'linked_space_id' => 'getLinkedSpaceId',
        'name' => 'getName',
        'obsoleted_on' => 'getObsoletedOn',
        'payment_connector_configuration' => 'getPaymentConnectorConfiguration',
        'payment_information_hashes' => 'getPaymentInformationHashes',
        'payment_method' => 'getPaymentMethod',
        'payment_method_brand' => 'getPaymentMethodBrand',
        'planned_purge_date' => 'getPlannedPurgeDate',
        'processor_token' => 'getProcessorToken',
        'shipping_address' => 'getShippingAddress',
        'state' => 'getState',
        'token' => 'getToken',
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
        
        $this->container['activated_on'] = isset($data['activated_on']) ? $data['activated_on'] : null;
        
        $this->container['billing_address'] = isset($data['billing_address']) ? $data['billing_address'] : null;
        
        $this->container['created_on'] = isset($data['created_on']) ? $data['created_on'] : null;
        
        $this->container['environment'] = isset($data['environment']) ? $data['environment'] : null;
        
        $this->container['expires_on'] = isset($data['expires_on']) ? $data['expires_on'] : null;
        
        $this->container['icon_url'] = isset($data['icon_url']) ? $data['icon_url'] : null;
        
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        
        $this->container['linked_space_id'] = isset($data['linked_space_id']) ? $data['linked_space_id'] : null;
        
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        
        $this->container['obsoleted_on'] = isset($data['obsoleted_on']) ? $data['obsoleted_on'] : null;
        
        $this->container['payment_connector_configuration'] = isset($data['payment_connector_configuration']) ? $data['payment_connector_configuration'] : null;
        
        $this->container['payment_information_hashes'] = isset($data['payment_information_hashes']) ? $data['payment_information_hashes'] : null;
        
        $this->container['payment_method'] = isset($data['payment_method']) ? $data['payment_method'] : null;
        
        $this->container['payment_method_brand'] = isset($data['payment_method_brand']) ? $data['payment_method_brand'] : null;
        
        $this->container['planned_purge_date'] = isset($data['planned_purge_date']) ? $data['planned_purge_date'] : null;
        
        $this->container['processor_token'] = isset($data['processor_token']) ? $data['processor_token'] : null;
        
        $this->container['shipping_address'] = isset($data['shipping_address']) ? $data['shipping_address'] : null;
        
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        
        $this->container['token'] = isset($data['token']) ? $data['token'] : null;
        
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

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 150)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 150.";
        }

        if (!is_null($this->container['processor_token']) && (mb_strlen($this->container['processor_token']) > 150)) {
            $invalidProperties[] = "invalid value for 'processor_token', the character length must be smaller than or equal to 150.";
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
     * Gets environment
     *
     * @return \Wallee\Sdk\Model\ChargeAttemptEnvironment
     */
    public function getEnvironment()
    {
        return $this->container['environment'];
    }

    /**
     * Sets environment
     *
     * @param \Wallee\Sdk\Model\ChargeAttemptEnvironment $environment 
     *
     * @return $this
     */
    public function setEnvironment($environment)
    {
        $this->container['environment'] = $environment;

        return $this;
    }
    

    /**
     * Gets expires_on
     *
     * @return \DateTime
     */
    public function getExpiresOn()
    {
        return $this->container['expires_on'];
    }

    /**
     * Sets expires_on
     *
     * @param \DateTime $expires_on The expires on date indicates when token version expires. Once this date is reached the token version is marked as obsolete.
     *
     * @return $this
     */
    public function setExpiresOn($expires_on)
    {
        $this->container['expires_on'] = $expires_on;

        return $this;
    }
    

    /**
     * Gets icon_url
     *
     * @return string
     */
    public function getIconUrl()
    {
        return $this->container['icon_url'];
    }

    /**
     * Sets icon_url
     *
     * @param string $icon_url 
     *
     * @return $this
     */
    public function setIconUrl($icon_url)
    {
        $this->container['icon_url'] = $icon_url;

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
     * Gets labels
     *
     * @return \Wallee\Sdk\Model\Label[]
     */
    public function getLabels()
    {
        return $this->container['labels'];
    }

    /**
     * Sets labels
     *
     * @param \Wallee\Sdk\Model\Label[] $labels 
     *
     * @return $this
     */
    public function setLabels($labels)
    {
        $this->container['labels'] = $labels;

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
     * @param string $name 
     *
     * @return $this
     */
    public function setName($name)
    {
        if (!is_null($name) && (mb_strlen($name) > 150)) {
            throw new \InvalidArgumentException('invalid length for $name when calling TokenVersion., must be smaller than or equal to 150.');
        }

        $this->container['name'] = $name;

        return $this;
    }
    

    /**
     * Gets obsoleted_on
     *
     * @return \DateTime
     */
    public function getObsoletedOn()
    {
        return $this->container['obsoleted_on'];
    }

    /**
     * Sets obsoleted_on
     *
     * @param \DateTime $obsoleted_on 
     *
     * @return $this
     */
    public function setObsoletedOn($obsoleted_on)
    {
        $this->container['obsoleted_on'] = $obsoleted_on;

        return $this;
    }
    

    /**
     * Gets payment_connector_configuration
     *
     * @return \Wallee\Sdk\Model\PaymentConnectorConfiguration
     */
    public function getPaymentConnectorConfiguration()
    {
        return $this->container['payment_connector_configuration'];
    }

    /**
     * Sets payment_connector_configuration
     *
     * @param \Wallee\Sdk\Model\PaymentConnectorConfiguration $payment_connector_configuration 
     *
     * @return $this
     */
    public function setPaymentConnectorConfiguration($payment_connector_configuration)
    {
        $this->container['payment_connector_configuration'] = $payment_connector_configuration;

        return $this;
    }
    

    /**
     * Gets payment_information_hashes
     *
     * @return \Wallee\Sdk\Model\PaymentInformationHash[]
     */
    public function getPaymentInformationHashes()
    {
        return $this->container['payment_information_hashes'];
    }

    /**
     * Sets payment_information_hashes
     *
     * @param \Wallee\Sdk\Model\PaymentInformationHash[] $payment_information_hashes The payment information hash set contains hashes of the payment information represented by this token version.
     *
     * @return $this
     */
    public function setPaymentInformationHashes($payment_information_hashes)
    {
        $this->container['payment_information_hashes'] = $payment_information_hashes;

        return $this;
    }
    

    /**
     * Gets payment_method
     *
     * @return int
     */
    public function getPaymentMethod()
    {
        return $this->container['payment_method'];
    }

    /**
     * Sets payment_method
     *
     * @param int $payment_method 
     *
     * @return $this
     */
    public function setPaymentMethod($payment_method)
    {
        $this->container['payment_method'] = $payment_method;

        return $this;
    }
    

    /**
     * Gets payment_method_brand
     *
     * @return int
     */
    public function getPaymentMethodBrand()
    {
        return $this->container['payment_method_brand'];
    }

    /**
     * Sets payment_method_brand
     *
     * @param int $payment_method_brand 
     *
     * @return $this
     */
    public function setPaymentMethodBrand($payment_method_brand)
    {
        $this->container['payment_method_brand'] = $payment_method_brand;

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
     * Gets processor_token
     *
     * @return string
     */
    public function getProcessorToken()
    {
        return $this->container['processor_token'];
    }

    /**
     * Sets processor_token
     *
     * @param string $processor_token 
     *
     * @return $this
     */
    public function setProcessorToken($processor_token)
    {
        if (!is_null($processor_token) && (mb_strlen($processor_token) > 150)) {
            throw new \InvalidArgumentException('invalid length for $processor_token when calling TokenVersion., must be smaller than or equal to 150.');
        }

        $this->container['processor_token'] = $processor_token;

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
     * @return \Wallee\Sdk\Model\TokenVersionState
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param \Wallee\Sdk\Model\TokenVersionState $state 
     *
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

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
     * Gets type
     *
     * @return \Wallee\Sdk\Model\TokenVersionType
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \Wallee\Sdk\Model\TokenVersionType $type The token version type determines what kind of token it is and by which payment connector the token can be processed by.
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


