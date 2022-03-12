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
 * SubscriptionChangeRequest model
 *
 * @category    Class
 * @description The subscription change request allows to change a subscription.
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class SubscriptionChangeRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SubscriptionChangeRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'component_configurations' => '\Wallee\Sdk\Model\SubscriptionComponentReferenceConfiguration[]',
        'currency' => 'string',
        'product' => 'int',
        'respect_termination_period' => 'bool',
        'selected_components' => '\Wallee\Sdk\Model\SubscriptionProductComponentReference[]',
        'subscription' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'component_configurations' => null,
        'currency' => null,
        'product' => 'int64',
        'respect_termination_period' => null,
        'selected_components' => null,
        'subscription' => 'int64'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'component_configurations' => 'componentConfigurations',
        'currency' => 'currency',
        'product' => 'product',
        'respect_termination_period' => 'respectTerminationPeriod',
        'selected_components' => 'selectedComponents',
        'subscription' => 'subscription'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'component_configurations' => 'setComponentConfigurations',
        'currency' => 'setCurrency',
        'product' => 'setProduct',
        'respect_termination_period' => 'setRespectTerminationPeriod',
        'selected_components' => 'setSelectedComponents',
        'subscription' => 'setSubscription'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'component_configurations' => 'getComponentConfigurations',
        'currency' => 'getCurrency',
        'product' => 'getProduct',
        'respect_termination_period' => 'getRespectTerminationPeriod',
        'selected_components' => 'getSelectedComponents',
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
        
        $this->container['component_configurations'] = isset($data['component_configurations']) ? $data['component_configurations'] : null;
        
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        
        $this->container['product'] = isset($data['product']) ? $data['product'] : null;
        
        $this->container['respect_termination_period'] = isset($data['respect_termination_period']) ? $data['respect_termination_period'] : null;
        
        $this->container['selected_components'] = isset($data['selected_components']) ? $data['selected_components'] : null;
        
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

        if ($this->container['currency'] === null) {
            $invalidProperties[] = "'currency' can't be null";
        }
        if ($this->container['product'] === null) {
            $invalidProperties[] = "'product' can't be null";
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
     * Gets component_configurations
     *
     * @return \Wallee\Sdk\Model\SubscriptionComponentReferenceConfiguration[]
     */
    public function getComponentConfigurations()
    {
        return $this->container['component_configurations'];
    }

    /**
     * Sets component_configurations
     *
     * @param \Wallee\Sdk\Model\SubscriptionComponentReferenceConfiguration[] $component_configurations 
     *
     * @return $this
     */
    public function setComponentConfigurations($component_configurations)
    {
        $this->container['component_configurations'] = $component_configurations;

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
     * Gets product
     *
     * @return int
     */
    public function getProduct()
    {
        return $this->container['product'];
    }

    /**
     * Sets product
     *
     * @param int $product The subscription has to be linked with a product.
     *
     * @return $this
     */
    public function setProduct($product)
    {
        $this->container['product'] = $product;

        return $this;
    }
    

    /**
     * Gets respect_termination_period
     *
     * @return bool
     */
    public function getRespectTerminationPeriod()
    {
        return $this->container['respect_termination_period'];
    }

    /**
     * Sets respect_termination_period
     *
     * @param bool $respect_termination_period The subscription version may be retired. The respect termination period controls whether the termination period configured on the product version should be respected or if the operation should take effect immediately.
     *
     * @return $this
     */
    public function setRespectTerminationPeriod($respect_termination_period)
    {
        $this->container['respect_termination_period'] = $respect_termination_period;

        return $this;
    }
    

    /**
     * Gets selected_components
     *
     * @return \Wallee\Sdk\Model\SubscriptionProductComponentReference[]
     */
    public function getSelectedComponents()
    {
        return $this->container['selected_components'];
    }

    /**
     * Sets selected_components
     *
     * @param \Wallee\Sdk\Model\SubscriptionProductComponentReference[] $selected_components 
     *
     * @return $this
     */
    public function setSelectedComponents($selected_components)
    {
        $this->container['selected_components'] = $selected_components;

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


