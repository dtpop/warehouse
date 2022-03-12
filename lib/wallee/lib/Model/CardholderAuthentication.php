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
 * CardholderAuthentication model
 *
 * @category    Class
 * @description This model holds the cardholder authentication data (e.g. 3-D Secure authentication).
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class CardholderAuthentication implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CardholderAuthentication';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'authentication_identifier' => 'string',
        'authentication_response' => '\Wallee\Sdk\Model\CardAuthenticationResponse',
        'authentication_value' => 'string',
        'electronic_commerce_indicator' => 'string',
        'version' => '\Wallee\Sdk\Model\CardAuthenticationVersion'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'authentication_identifier' => null,
        'authentication_response' => null,
        'authentication_value' => null,
        'electronic_commerce_indicator' => null,
        'version' => null
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'authentication_identifier' => 'authenticationIdentifier',
        'authentication_response' => 'authenticationResponse',
        'authentication_value' => 'authenticationValue',
        'electronic_commerce_indicator' => 'electronicCommerceIndicator',
        'version' => 'version'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'authentication_identifier' => 'setAuthenticationIdentifier',
        'authentication_response' => 'setAuthenticationResponse',
        'authentication_value' => 'setAuthenticationValue',
        'electronic_commerce_indicator' => 'setElectronicCommerceIndicator',
        'version' => 'setVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'authentication_identifier' => 'getAuthenticationIdentifier',
        'authentication_response' => 'getAuthenticationResponse',
        'authentication_value' => 'getAuthenticationValue',
        'electronic_commerce_indicator' => 'getElectronicCommerceIndicator',
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
        
        $this->container['authentication_identifier'] = isset($data['authentication_identifier']) ? $data['authentication_identifier'] : null;
        
        $this->container['authentication_response'] = isset($data['authentication_response']) ? $data['authentication_response'] : null;
        
        $this->container['authentication_value'] = isset($data['authentication_value']) ? $data['authentication_value'] : null;
        
        $this->container['electronic_commerce_indicator'] = isset($data['electronic_commerce_indicator']) ? $data['electronic_commerce_indicator'] : null;
        
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
     * Gets authentication_identifier
     *
     * @return string
     */
    public function getAuthenticationIdentifier()
    {
        return $this->container['authentication_identifier'];
    }

    /**
     * Sets authentication_identifier
     *
     * @param string $authentication_identifier The authentication identifier as assigned by authentication system (e.g. XID or DSTransactionID).
     *
     * @return $this
     */
    public function setAuthenticationIdentifier($authentication_identifier)
    {
        $this->container['authentication_identifier'] = $authentication_identifier;

        return $this;
    }
    

    /**
     * Gets authentication_response
     *
     * @return \Wallee\Sdk\Model\CardAuthenticationResponse
     */
    public function getAuthenticationResponse()
    {
        return $this->container['authentication_response'];
    }

    /**
     * Sets authentication_response
     *
     * @param \Wallee\Sdk\Model\CardAuthenticationResponse $authentication_response 
     *
     * @return $this
     */
    public function setAuthenticationResponse($authentication_response)
    {
        $this->container['authentication_response'] = $authentication_response;

        return $this;
    }
    

    /**
     * Gets authentication_value
     *
     * @return string
     */
    public function getAuthenticationValue()
    {
        return $this->container['authentication_value'];
    }

    /**
     * Sets authentication_value
     *
     * @param string $authentication_value The cardholder authentication value. Also known as Cardholder Authentication Verification Value (CAVV).
     *
     * @return $this
     */
    public function setAuthenticationValue($authentication_value)
    {
        $this->container['authentication_value'] = $authentication_value;

        return $this;
    }
    

    /**
     * Gets electronic_commerce_indicator
     *
     * @return string
     */
    public function getElectronicCommerceIndicator()
    {
        return $this->container['electronic_commerce_indicator'];
    }

    /**
     * Sets electronic_commerce_indicator
     *
     * @param string $electronic_commerce_indicator The Electronic Commerce Indicator (ECI) value. The ECI is returned by authentication system and indicates the outcome/status of authentication.
     *
     * @return $this
     */
    public function setElectronicCommerceIndicator($electronic_commerce_indicator)
    {
        $this->container['electronic_commerce_indicator'] = $electronic_commerce_indicator;

        return $this;
    }
    

    /**
     * Gets version
     *
     * @return \Wallee\Sdk\Model\CardAuthenticationVersion
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param \Wallee\Sdk\Model\CardAuthenticationVersion $version 
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


