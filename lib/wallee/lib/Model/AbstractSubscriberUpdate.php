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
 * AbstractSubscriberUpdate model
 *
 * @category    Class
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class AbstractSubscriberUpdate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Abstract.Subscriber.Update';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'additional_allowed_payment_method_configurations' => 'int[]',
        'billing_address' => '\Wallee\Sdk\Model\AddressCreate',
        'description' => 'string',
        'disallowed_payment_method_configurations' => 'int[]',
        'email_address' => 'string',
        'language' => 'string',
        'meta_data' => 'map[string,string]',
        'reference' => 'string',
        'shipping_address' => '\Wallee\Sdk\Model\AddressCreate'
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
        'language' => null,
        'meta_data' => null,
        'reference' => null,
        'shipping_address' => null
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
        'language' => 'language',
        'meta_data' => 'metaData',
        'reference' => 'reference',
        'shipping_address' => 'shippingAddress'
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
        'language' => 'setLanguage',
        'meta_data' => 'setMetaData',
        'reference' => 'setReference',
        'shipping_address' => 'setShippingAddress'
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
        'language' => 'getLanguage',
        'meta_data' => 'getMetaData',
        'reference' => 'getReference',
        'shipping_address' => 'getShippingAddress'
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
        
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        
        $this->container['meta_data'] = isset($data['meta_data']) ? $data['meta_data'] : null;
        
        $this->container['reference'] = isset($data['reference']) ? $data['reference'] : null;
        
        $this->container['shipping_address'] = isset($data['shipping_address']) ? $data['shipping_address'] : null;
        
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
     * @return \Wallee\Sdk\Model\AddressCreate
     */
    public function getBillingAddress()
    {
        return $this->container['billing_address'];
    }

    /**
     * Sets billing_address
     *
     * @param \Wallee\Sdk\Model\AddressCreate $billing_address 
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
            throw new \InvalidArgumentException('invalid length for $description when calling AbstractSubscriberUpdate., must be smaller than or equal to 200.');
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
            throw new \InvalidArgumentException('invalid length for $email_address when calling AbstractSubscriberUpdate., must be smaller than or equal to 254.');
        }

        $this->container['email_address'] = $email_address;

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
            throw new \InvalidArgumentException('invalid length for $reference when calling AbstractSubscriberUpdate., must be smaller than or equal to 100.');
        }

        $this->container['reference'] = $reference;

        return $this;
    }
    

    /**
     * Gets shipping_address
     *
     * @return \Wallee\Sdk\Model\AddressCreate
     */
    public function getShippingAddress()
    {
        return $this->container['shipping_address'];
    }

    /**
     * Sets shipping_address
     *
     * @param \Wallee\Sdk\Model\AddressCreate $shipping_address 
     *
     * @return $this
     */
    public function setShippingAddress($shipping_address)
    {
        $this->container['shipping_address'] = $shipping_address;

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


