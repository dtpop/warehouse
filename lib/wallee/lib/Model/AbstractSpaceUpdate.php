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
 * AbstractSpaceUpdate model
 *
 * @category    Class
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class AbstractSpaceUpdate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Abstract.Space.Update';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'last_modified_date' => '\DateTime',
        'name' => 'string',
        'postal_address' => '\Wallee\Sdk\Model\SpaceAddressCreate',
        'primary_currency' => 'string',
        'request_limit' => 'int',
        'state' => '\Wallee\Sdk\Model\CreationEntityState',
        'technical_contact_addresses' => 'string[]',
        'time_zone' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'last_modified_date' => 'date-time',
        'name' => null,
        'postal_address' => null,
        'primary_currency' => null,
        'request_limit' => 'int64',
        'state' => null,
        'technical_contact_addresses' => null,
        'time_zone' => null
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'last_modified_date' => 'lastModifiedDate',
        'name' => 'name',
        'postal_address' => 'postalAddress',
        'primary_currency' => 'primaryCurrency',
        'request_limit' => 'requestLimit',
        'state' => 'state',
        'technical_contact_addresses' => 'technicalContactAddresses',
        'time_zone' => 'timeZone'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'last_modified_date' => 'setLastModifiedDate',
        'name' => 'setName',
        'postal_address' => 'setPostalAddress',
        'primary_currency' => 'setPrimaryCurrency',
        'request_limit' => 'setRequestLimit',
        'state' => 'setState',
        'technical_contact_addresses' => 'setTechnicalContactAddresses',
        'time_zone' => 'setTimeZone'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'last_modified_date' => 'getLastModifiedDate',
        'name' => 'getName',
        'postal_address' => 'getPostalAddress',
        'primary_currency' => 'getPrimaryCurrency',
        'request_limit' => 'getRequestLimit',
        'state' => 'getState',
        'technical_contact_addresses' => 'getTechnicalContactAddresses',
        'time_zone' => 'getTimeZone'
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
        
        $this->container['last_modified_date'] = isset($data['last_modified_date']) ? $data['last_modified_date'] : null;
        
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        
        $this->container['postal_address'] = isset($data['postal_address']) ? $data['postal_address'] : null;
        
        $this->container['primary_currency'] = isset($data['primary_currency']) ? $data['primary_currency'] : null;
        
        $this->container['request_limit'] = isset($data['request_limit']) ? $data['request_limit'] : null;
        
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        
        $this->container['technical_contact_addresses'] = isset($data['technical_contact_addresses']) ? $data['technical_contact_addresses'] : null;
        
        $this->container['time_zone'] = isset($data['time_zone']) ? $data['time_zone'] : null;
        
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 200)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 200.";
        }

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 3)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 3.";
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
     * Gets last_modified_date
     *
     * @return \DateTime
     */
    public function getLastModifiedDate()
    {
        return $this->container['last_modified_date'];
    }

    /**
     * Sets last_modified_date
     *
     * @param \DateTime $last_modified_date 
     *
     * @return $this
     */
    public function setLastModifiedDate($last_modified_date)
    {
        $this->container['last_modified_date'] = $last_modified_date;

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
     * @param string $name The space name is used internally to identify the space in administrative interfaces. For example it is used within search fields and hence it should be distinct and descriptive.
     *
     * @return $this
     */
    public function setName($name)
    {
        if (!is_null($name) && (mb_strlen($name) > 200)) {
            throw new \InvalidArgumentException('invalid length for $name when calling AbstractSpaceUpdate., must be smaller than or equal to 200.');
        }
        if (!is_null($name) && (mb_strlen($name) < 3)) {
            throw new \InvalidArgumentException('invalid length for $name when calling AbstractSpaceUpdate., must be bigger than or equal to 3.');
        }

        $this->container['name'] = $name;

        return $this;
    }
    

    /**
     * Gets postal_address
     *
     * @return \Wallee\Sdk\Model\SpaceAddressCreate
     */
    public function getPostalAddress()
    {
        return $this->container['postal_address'];
    }

    /**
     * Sets postal_address
     *
     * @param \Wallee\Sdk\Model\SpaceAddressCreate $postal_address The address to use in communication with clients for example in email, documents etc.
     *
     * @return $this
     */
    public function setPostalAddress($postal_address)
    {
        $this->container['postal_address'] = $postal_address;

        return $this;
    }
    

    /**
     * Gets primary_currency
     *
     * @return string
     */
    public function getPrimaryCurrency()
    {
        return $this->container['primary_currency'];
    }

    /**
     * Sets primary_currency
     *
     * @param string $primary_currency This is the currency that is used to display aggregated amounts in the space.
     *
     * @return $this
     */
    public function setPrimaryCurrency($primary_currency)
    {
        $this->container['primary_currency'] = $primary_currency;

        return $this;
    }
    

    /**
     * Gets request_limit
     *
     * @return int
     */
    public function getRequestLimit()
    {
        return $this->container['request_limit'];
    }

    /**
     * Sets request_limit
     *
     * @param int $request_limit The request limit defines the maximum number of API request accepted within 2 minutes for this space. This limit can only be changed with special privileges.
     *
     * @return $this
     */
    public function setRequestLimit($request_limit)
    {
        $this->container['request_limit'] = $request_limit;

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
     * Gets technical_contact_addresses
     *
     * @return string[]
     */
    public function getTechnicalContactAddresses()
    {
        return $this->container['technical_contact_addresses'];
    }

    /**
     * Sets technical_contact_addresses
     *
     * @param string[] $technical_contact_addresses The email address provided as contact addresses will be informed about technical issues or errors triggered by the space.
     *
     * @return $this
     */
    public function setTechnicalContactAddresses($technical_contact_addresses)
    {
        $this->container['technical_contact_addresses'] = $technical_contact_addresses;

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
     * @param string $time_zone The time zone assigned to the space determines the time offset for calculating dates within the space. This is typically used for background processed which needs to be triggered on a specific hour within the day. Changing the space time zone will not change the display of dates.
     *
     * @return $this
     */
    public function setTimeZone($time_zone)
    {
        $this->container['time_zone'] = $time_zone;

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


