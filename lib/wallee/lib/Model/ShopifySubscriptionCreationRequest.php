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
 * ShopifySubscriptionCreationRequest model
 *
 * @category    Class
 * @description 
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class ShopifySubscriptionCreationRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ShopifySubscriptionCreationRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'billing_address' => '\Wallee\Sdk\Model\ShopifySubscriptionAddressCreate',
        'billing_configuration' => '\Wallee\Sdk\Model\ShopifySubscriptionModelBillingConfiguration',
        'currency' => 'string',
        'external_id' => 'string',
        'initial_execution_date' => '\DateTime',
        'integration' => 'int',
        'items' => '\Wallee\Sdk\Model\ShopifySubscriptionModelItem[]',
        'language' => 'string',
        'shipping_address' => '\Wallee\Sdk\Model\ShopifySubscriptionAddressCreate',
        'shipping_method_name' => 'string',
        'space_view_id' => 'int',
        'store_order_confirmation_email_enabled' => 'bool',
        'subscriber' => '\Wallee\Sdk\Model\ShopifySubscriberCreation',
        'subscriber_suspension_allowed' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'billing_address' => null,
        'billing_configuration' => null,
        'currency' => null,
        'external_id' => null,
        'initial_execution_date' => 'date-time',
        'integration' => 'int64',
        'items' => null,
        'language' => null,
        'shipping_address' => null,
        'shipping_method_name' => null,
        'space_view_id' => 'int64',
        'store_order_confirmation_email_enabled' => null,
        'subscriber' => null,
        'subscriber_suspension_allowed' => null
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'billing_address' => 'billingAddress',
        'billing_configuration' => 'billingConfiguration',
        'currency' => 'currency',
        'external_id' => 'externalId',
        'initial_execution_date' => 'initialExecutionDate',
        'integration' => 'integration',
        'items' => 'items',
        'language' => 'language',
        'shipping_address' => 'shippingAddress',
        'shipping_method_name' => 'shippingMethodName',
        'space_view_id' => 'spaceViewId',
        'store_order_confirmation_email_enabled' => 'storeOrderConfirmationEmailEnabled',
        'subscriber' => 'subscriber',
        'subscriber_suspension_allowed' => 'subscriberSuspensionAllowed'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'billing_address' => 'setBillingAddress',
        'billing_configuration' => 'setBillingConfiguration',
        'currency' => 'setCurrency',
        'external_id' => 'setExternalId',
        'initial_execution_date' => 'setInitialExecutionDate',
        'integration' => 'setIntegration',
        'items' => 'setItems',
        'language' => 'setLanguage',
        'shipping_address' => 'setShippingAddress',
        'shipping_method_name' => 'setShippingMethodName',
        'space_view_id' => 'setSpaceViewId',
        'store_order_confirmation_email_enabled' => 'setStoreOrderConfirmationEmailEnabled',
        'subscriber' => 'setSubscriber',
        'subscriber_suspension_allowed' => 'setSubscriberSuspensionAllowed'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'billing_address' => 'getBillingAddress',
        'billing_configuration' => 'getBillingConfiguration',
        'currency' => 'getCurrency',
        'external_id' => 'getExternalId',
        'initial_execution_date' => 'getInitialExecutionDate',
        'integration' => 'getIntegration',
        'items' => 'getItems',
        'language' => 'getLanguage',
        'shipping_address' => 'getShippingAddress',
        'shipping_method_name' => 'getShippingMethodName',
        'space_view_id' => 'getSpaceViewId',
        'store_order_confirmation_email_enabled' => 'getStoreOrderConfirmationEmailEnabled',
        'subscriber' => 'getSubscriber',
        'subscriber_suspension_allowed' => 'getSubscriberSuspensionAllowed'
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
        
        $this->container['billing_address'] = isset($data['billing_address']) ? $data['billing_address'] : null;
        
        $this->container['billing_configuration'] = isset($data['billing_configuration']) ? $data['billing_configuration'] : null;
        
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        
        $this->container['external_id'] = isset($data['external_id']) ? $data['external_id'] : null;
        
        $this->container['initial_execution_date'] = isset($data['initial_execution_date']) ? $data['initial_execution_date'] : null;
        
        $this->container['integration'] = isset($data['integration']) ? $data['integration'] : null;
        
        $this->container['items'] = isset($data['items']) ? $data['items'] : null;
        
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        
        $this->container['shipping_address'] = isset($data['shipping_address']) ? $data['shipping_address'] : null;
        
        $this->container['shipping_method_name'] = isset($data['shipping_method_name']) ? $data['shipping_method_name'] : null;
        
        $this->container['space_view_id'] = isset($data['space_view_id']) ? $data['space_view_id'] : null;
        
        $this->container['store_order_confirmation_email_enabled'] = isset($data['store_order_confirmation_email_enabled']) ? $data['store_order_confirmation_email_enabled'] : null;
        
        $this->container['subscriber'] = isset($data['subscriber']) ? $data['subscriber'] : null;
        
        $this->container['subscriber_suspension_allowed'] = isset($data['subscriber_suspension_allowed']) ? $data['subscriber_suspension_allowed'] : null;
        
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['billing_address'] === null) {
            $invalidProperties[] = "'billing_address' can't be null";
        }
        if ($this->container['currency'] === null) {
            $invalidProperties[] = "'currency' can't be null";
        }
        if ($this->container['external_id'] === null) {
            $invalidProperties[] = "'external_id' can't be null";
        }
        if ($this->container['integration'] === null) {
            $invalidProperties[] = "'integration' can't be null";
        }
        if ($this->container['items'] === null) {
            $invalidProperties[] = "'items' can't be null";
        }
        if ($this->container['language'] === null) {
            $invalidProperties[] = "'language' can't be null";
        }
        if ($this->container['shipping_address'] === null) {
            $invalidProperties[] = "'shipping_address' can't be null";
        }
        if ($this->container['subscriber'] === null) {
            $invalidProperties[] = "'subscriber' can't be null";
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
     * Gets billing_address
     *
     * @return \Wallee\Sdk\Model\ShopifySubscriptionAddressCreate
     */
    public function getBillingAddress()
    {
        return $this->container['billing_address'];
    }

    /**
     * Sets billing_address
     *
     * @param \Wallee\Sdk\Model\ShopifySubscriptionAddressCreate $billing_address 
     *
     * @return $this
     */
    public function setBillingAddress($billing_address)
    {
        $this->container['billing_address'] = $billing_address;

        return $this;
    }
    

    /**
     * Gets billing_configuration
     *
     * @return \Wallee\Sdk\Model\ShopifySubscriptionModelBillingConfiguration
     */
    public function getBillingConfiguration()
    {
        return $this->container['billing_configuration'];
    }

    /**
     * Sets billing_configuration
     *
     * @param \Wallee\Sdk\Model\ShopifySubscriptionModelBillingConfiguration $billing_configuration 
     *
     * @return $this
     */
    public function setBillingConfiguration($billing_configuration)
    {
        $this->container['billing_configuration'] = $billing_configuration;

        return $this;
    }
    

    /**
     * Gets currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string $currency 
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

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
     * Gets integration
     *
     * @return int
     */
    public function getIntegration()
    {
        return $this->container['integration'];
    }

    /**
     * Sets integration
     *
     * @param int $integration 
     *
     * @return $this
     */
    public function setIntegration($integration)
    {
        $this->container['integration'] = $integration;

        return $this;
    }
    

    /**
     * Gets items
     *
     * @return \Wallee\Sdk\Model\ShopifySubscriptionModelItem[]
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \Wallee\Sdk\Model\ShopifySubscriptionModelItem[] $items 
     *
     * @return $this
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

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
     * Gets shipping_address
     *
     * @return \Wallee\Sdk\Model\ShopifySubscriptionAddressCreate
     */
    public function getShippingAddress()
    {
        return $this->container['shipping_address'];
    }

    /**
     * Sets shipping_address
     *
     * @param \Wallee\Sdk\Model\ShopifySubscriptionAddressCreate $shipping_address 
     *
     * @return $this
     */
    public function setShippingAddress($shipping_address)
    {
        $this->container['shipping_address'] = $shipping_address;

        return $this;
    }
    

    /**
     * Gets shipping_method_name
     *
     * @return string
     */
    public function getShippingMethodName()
    {
        return $this->container['shipping_method_name'];
    }

    /**
     * Sets shipping_method_name
     *
     * @param string $shipping_method_name 
     *
     * @return $this
     */
    public function setShippingMethodName($shipping_method_name)
    {
        $this->container['shipping_method_name'] = $shipping_method_name;

        return $this;
    }
    

    /**
     * Gets space_view_id
     *
     * @return int
     */
    public function getSpaceViewId()
    {
        return $this->container['space_view_id'];
    }

    /**
     * Sets space_view_id
     *
     * @param int $space_view_id 
     *
     * @return $this
     */
    public function setSpaceViewId($space_view_id)
    {
        $this->container['space_view_id'] = $space_view_id;

        return $this;
    }
    

    /**
     * Gets store_order_confirmation_email_enabled
     *
     * @return bool
     */
    public function getStoreOrderConfirmationEmailEnabled()
    {
        return $this->container['store_order_confirmation_email_enabled'];
    }

    /**
     * Sets store_order_confirmation_email_enabled
     *
     * @param bool $store_order_confirmation_email_enabled 
     *
     * @return $this
     */
    public function setStoreOrderConfirmationEmailEnabled($store_order_confirmation_email_enabled)
    {
        $this->container['store_order_confirmation_email_enabled'] = $store_order_confirmation_email_enabled;

        return $this;
    }
    

    /**
     * Gets subscriber
     *
     * @return \Wallee\Sdk\Model\ShopifySubscriberCreation
     */
    public function getSubscriber()
    {
        return $this->container['subscriber'];
    }

    /**
     * Sets subscriber
     *
     * @param \Wallee\Sdk\Model\ShopifySubscriberCreation $subscriber 
     *
     * @return $this
     */
    public function setSubscriber($subscriber)
    {
        $this->container['subscriber'] = $subscriber;

        return $this;
    }
    

    /**
     * Gets subscriber_suspension_allowed
     *
     * @return bool
     */
    public function getSubscriberSuspensionAllowed()
    {
        return $this->container['subscriber_suspension_allowed'];
    }

    /**
     * Sets subscriber_suspension_allowed
     *
     * @param bool $subscriber_suspension_allowed 
     *
     * @return $this
     */
    public function setSubscriberSuspensionAllowed($subscriber_suspension_allowed)
    {
        $this->container['subscriber_suspension_allowed'] = $subscriber_suspension_allowed;

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


