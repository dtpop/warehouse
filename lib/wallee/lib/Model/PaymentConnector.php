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
 * PaymentConnector model
 *
 * @category    Class
 * @description 
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class PaymentConnector implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PaymentConnector';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'data_collection_type' => '\Wallee\Sdk\Model\DataCollectionType',
        'deprecated' => 'bool',
        'deprecation_reason' => 'map[string,string]',
        'description' => 'map[string,string]',
        'feature' => '\Wallee\Sdk\Model\Feature',
        'id' => 'int',
        'name' => 'map[string,string]',
        'payment_method' => 'int',
        'payment_method_brand' => '\Wallee\Sdk\Model\PaymentMethodBrand',
        'primary_risk_taker' => '\Wallee\Sdk\Model\PaymentPrimaryRiskTaker',
        'processor' => 'int',
        'supported_customers_presences' => '\Wallee\Sdk\Model\CustomersPresence[]',
        'supported_features' => 'int[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'data_collection_type' => null,
        'deprecated' => null,
        'deprecation_reason' => null,
        'description' => null,
        'feature' => null,
        'id' => 'int64',
        'name' => null,
        'payment_method' => 'int64',
        'payment_method_brand' => null,
        'primary_risk_taker' => null,
        'processor' => 'int64',
        'supported_customers_presences' => null,
        'supported_features' => 'int64'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'data_collection_type' => 'dataCollectionType',
        'deprecated' => 'deprecated',
        'deprecation_reason' => 'deprecationReason',
        'description' => 'description',
        'feature' => 'feature',
        'id' => 'id',
        'name' => 'name',
        'payment_method' => 'paymentMethod',
        'payment_method_brand' => 'paymentMethodBrand',
        'primary_risk_taker' => 'primaryRiskTaker',
        'processor' => 'processor',
        'supported_customers_presences' => 'supportedCustomersPresences',
        'supported_features' => 'supportedFeatures'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'data_collection_type' => 'setDataCollectionType',
        'deprecated' => 'setDeprecated',
        'deprecation_reason' => 'setDeprecationReason',
        'description' => 'setDescription',
        'feature' => 'setFeature',
        'id' => 'setId',
        'name' => 'setName',
        'payment_method' => 'setPaymentMethod',
        'payment_method_brand' => 'setPaymentMethodBrand',
        'primary_risk_taker' => 'setPrimaryRiskTaker',
        'processor' => 'setProcessor',
        'supported_customers_presences' => 'setSupportedCustomersPresences',
        'supported_features' => 'setSupportedFeatures'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'data_collection_type' => 'getDataCollectionType',
        'deprecated' => 'getDeprecated',
        'deprecation_reason' => 'getDeprecationReason',
        'description' => 'getDescription',
        'feature' => 'getFeature',
        'id' => 'getId',
        'name' => 'getName',
        'payment_method' => 'getPaymentMethod',
        'payment_method_brand' => 'getPaymentMethodBrand',
        'primary_risk_taker' => 'getPrimaryRiskTaker',
        'processor' => 'getProcessor',
        'supported_customers_presences' => 'getSupportedCustomersPresences',
        'supported_features' => 'getSupportedFeatures'
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
        
        $this->container['data_collection_type'] = isset($data['data_collection_type']) ? $data['data_collection_type'] : null;
        
        $this->container['deprecated'] = isset($data['deprecated']) ? $data['deprecated'] : null;
        
        $this->container['deprecation_reason'] = isset($data['deprecation_reason']) ? $data['deprecation_reason'] : null;
        
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        
        $this->container['feature'] = isset($data['feature']) ? $data['feature'] : null;
        
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        
        $this->container['payment_method'] = isset($data['payment_method']) ? $data['payment_method'] : null;
        
        $this->container['payment_method_brand'] = isset($data['payment_method_brand']) ? $data['payment_method_brand'] : null;
        
        $this->container['primary_risk_taker'] = isset($data['primary_risk_taker']) ? $data['primary_risk_taker'] : null;
        
        $this->container['processor'] = isset($data['processor']) ? $data['processor'] : null;
        
        $this->container['supported_customers_presences'] = isset($data['supported_customers_presences']) ? $data['supported_customers_presences'] : null;
        
        $this->container['supported_features'] = isset($data['supported_features']) ? $data['supported_features'] : null;
        
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
     * Gets data_collection_type
     *
     * @return \Wallee\Sdk\Model\DataCollectionType
     */
    public function getDataCollectionType()
    {
        return $this->container['data_collection_type'];
    }

    /**
     * Sets data_collection_type
     *
     * @param \Wallee\Sdk\Model\DataCollectionType $data_collection_type 
     *
     * @return $this
     */
    public function setDataCollectionType($data_collection_type)
    {
        $this->container['data_collection_type'] = $data_collection_type;

        return $this;
    }
    

    /**
     * Gets deprecated
     *
     * @return bool
     */
    public function getDeprecated()
    {
        return $this->container['deprecated'];
    }

    /**
     * Sets deprecated
     *
     * @param bool $deprecated 
     *
     * @return $this
     */
    public function setDeprecated($deprecated)
    {
        $this->container['deprecated'] = $deprecated;

        return $this;
    }
    

    /**
     * Gets deprecation_reason
     *
     * @return map[string,string]
     */
    public function getDeprecationReason()
    {
        return $this->container['deprecation_reason'];
    }

    /**
     * Sets deprecation_reason
     *
     * @param map[string,string] $deprecation_reason 
     *
     * @return $this
     */
    public function setDeprecationReason($deprecation_reason)
    {
        $this->container['deprecation_reason'] = $deprecation_reason;

        return $this;
    }
    

    /**
     * Gets description
     *
     * @return map[string,string]
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param map[string,string] $description 
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }
    

    /**
     * Gets feature
     *
     * @return \Wallee\Sdk\Model\Feature
     */
    public function getFeature()
    {
        return $this->container['feature'];
    }

    /**
     * Sets feature
     *
     * @param \Wallee\Sdk\Model\Feature $feature 
     *
     * @return $this
     */
    public function setFeature($feature)
    {
        $this->container['feature'] = $feature;

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
     * Gets name
     *
     * @return map[string,string]
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param map[string,string] $name 
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

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
     * @return \Wallee\Sdk\Model\PaymentMethodBrand
     */
    public function getPaymentMethodBrand()
    {
        return $this->container['payment_method_brand'];
    }

    /**
     * Sets payment_method_brand
     *
     * @param \Wallee\Sdk\Model\PaymentMethodBrand $payment_method_brand 
     *
     * @return $this
     */
    public function setPaymentMethodBrand($payment_method_brand)
    {
        $this->container['payment_method_brand'] = $payment_method_brand;

        return $this;
    }
    

    /**
     * Gets primary_risk_taker
     *
     * @return \Wallee\Sdk\Model\PaymentPrimaryRiskTaker
     */
    public function getPrimaryRiskTaker()
    {
        return $this->container['primary_risk_taker'];
    }

    /**
     * Sets primary_risk_taker
     *
     * @param \Wallee\Sdk\Model\PaymentPrimaryRiskTaker $primary_risk_taker 
     *
     * @return $this
     */
    public function setPrimaryRiskTaker($primary_risk_taker)
    {
        $this->container['primary_risk_taker'] = $primary_risk_taker;

        return $this;
    }
    

    /**
     * Gets processor
     *
     * @return int
     */
    public function getProcessor()
    {
        return $this->container['processor'];
    }

    /**
     * Sets processor
     *
     * @param int $processor 
     *
     * @return $this
     */
    public function setProcessor($processor)
    {
        $this->container['processor'] = $processor;

        return $this;
    }
    

    /**
     * Gets supported_customers_presences
     *
     * @return \Wallee\Sdk\Model\CustomersPresence[]
     */
    public function getSupportedCustomersPresences()
    {
        return $this->container['supported_customers_presences'];
    }

    /**
     * Sets supported_customers_presences
     *
     * @param \Wallee\Sdk\Model\CustomersPresence[] $supported_customers_presences 
     *
     * @return $this
     */
    public function setSupportedCustomersPresences($supported_customers_presences)
    {
        $this->container['supported_customers_presences'] = $supported_customers_presences;

        return $this;
    }
    

    /**
     * Gets supported_features
     *
     * @return int[]
     */
    public function getSupportedFeatures()
    {
        return $this->container['supported_features'];
    }

    /**
     * Sets supported_features
     *
     * @param int[] $supported_features 
     *
     * @return $this
     */
    public function setSupportedFeatures($supported_features)
    {
        $this->container['supported_features'] = $supported_features;

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


