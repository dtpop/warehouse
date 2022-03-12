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
 * ShopifySubscriptionUpdateRequest model
 *
 * @category    Class
 * @description 
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class ShopifySubscriptionUpdateRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ShopifySubscriptionUpdateRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'billing_configuration' => '\Wallee\Sdk\Model\ShopifySubscriptionModelBillingConfiguration',
        'id' => 'int',
        'items' => '\Wallee\Sdk\Model\ShopifySubscriptionModelItem[]',
        'store_order_confirmation_email_enabled' => 'bool',
        'subscriber_suspension_allowed' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'billing_configuration' => null,
        'id' => 'int64',
        'items' => null,
        'store_order_confirmation_email_enabled' => null,
        'subscriber_suspension_allowed' => null
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'billing_configuration' => 'billingConfiguration',
        'id' => 'id',
        'items' => 'items',
        'store_order_confirmation_email_enabled' => 'storeOrderConfirmationEmailEnabled',
        'subscriber_suspension_allowed' => 'subscriberSuspensionAllowed'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'billing_configuration' => 'setBillingConfiguration',
        'id' => 'setId',
        'items' => 'setItems',
        'store_order_confirmation_email_enabled' => 'setStoreOrderConfirmationEmailEnabled',
        'subscriber_suspension_allowed' => 'setSubscriberSuspensionAllowed'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'billing_configuration' => 'getBillingConfiguration',
        'id' => 'getId',
        'items' => 'getItems',
        'store_order_confirmation_email_enabled' => 'getStoreOrderConfirmationEmailEnabled',
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
        
        $this->container['billing_configuration'] = isset($data['billing_configuration']) ? $data['billing_configuration'] : null;
        
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        
        $this->container['items'] = isset($data['items']) ? $data['items'] : null;
        
        $this->container['store_order_confirmation_email_enabled'] = isset($data['store_order_confirmation_email_enabled']) ? $data['store_order_confirmation_email_enabled'] : null;
        
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
     * @param int $id 
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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


