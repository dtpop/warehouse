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
 * AbstractHumanUserUpdate model
 *
 * @category    Class
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class AbstractHumanUserUpdate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Abstract.HumanUser.Update';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'email_address' => 'string',
        'firstname' => 'string',
        'language' => 'string',
        'lastname' => 'string',
        'mobile_phone_number' => 'string',
        'state' => '\Wallee\Sdk\Model\CreationEntityState',
        'time_zone' => 'string',
        'two_factor_enabled' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'email_address' => null,
        'firstname' => null,
        'language' => null,
        'lastname' => null,
        'mobile_phone_number' => null,
        'state' => null,
        'time_zone' => null,
        'two_factor_enabled' => null
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'email_address' => 'emailAddress',
        'firstname' => 'firstname',
        'language' => 'language',
        'lastname' => 'lastname',
        'mobile_phone_number' => 'mobilePhoneNumber',
        'state' => 'state',
        'time_zone' => 'timeZone',
        'two_factor_enabled' => 'twoFactorEnabled'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'email_address' => 'setEmailAddress',
        'firstname' => 'setFirstname',
        'language' => 'setLanguage',
        'lastname' => 'setLastname',
        'mobile_phone_number' => 'setMobilePhoneNumber',
        'state' => 'setState',
        'time_zone' => 'setTimeZone',
        'two_factor_enabled' => 'setTwoFactorEnabled'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'email_address' => 'getEmailAddress',
        'firstname' => 'getFirstname',
        'language' => 'getLanguage',
        'lastname' => 'getLastname',
        'mobile_phone_number' => 'getMobilePhoneNumber',
        'state' => 'getState',
        'time_zone' => 'getTimeZone',
        'two_factor_enabled' => 'getTwoFactorEnabled'
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
        
        $this->container['email_address'] = isset($data['email_address']) ? $data['email_address'] : null;
        
        $this->container['firstname'] = isset($data['firstname']) ? $data['firstname'] : null;
        
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        
        $this->container['lastname'] = isset($data['lastname']) ? $data['lastname'] : null;
        
        $this->container['mobile_phone_number'] = isset($data['mobile_phone_number']) ? $data['mobile_phone_number'] : null;
        
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        
        $this->container['time_zone'] = isset($data['time_zone']) ? $data['time_zone'] : null;
        
        $this->container['two_factor_enabled'] = isset($data['two_factor_enabled']) ? $data['two_factor_enabled'] : null;
        
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['email_address']) && (mb_strlen($this->container['email_address']) > 128)) {
            $invalidProperties[] = "invalid value for 'email_address', the character length must be smaller than or equal to 128.";
        }

        if (!is_null($this->container['firstname']) && (mb_strlen($this->container['firstname']) > 100)) {
            $invalidProperties[] = "invalid value for 'firstname', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['lastname']) && (mb_strlen($this->container['lastname']) > 100)) {
            $invalidProperties[] = "invalid value for 'lastname', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['mobile_phone_number']) && (mb_strlen($this->container['mobile_phone_number']) > 30)) {
            $invalidProperties[] = "invalid value for 'mobile_phone_number', the character length must be smaller than or equal to 30.";
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
     * @param string $email_address The email address of the user.
     *
     * @return $this
     */
    public function setEmailAddress($email_address)
    {
        if (!is_null($email_address) && (mb_strlen($email_address) > 128)) {
            throw new \InvalidArgumentException('invalid length for $email_address when calling AbstractHumanUserUpdate., must be smaller than or equal to 128.');
        }

        $this->container['email_address'] = $email_address;

        return $this;
    }
    

    /**
     * Gets firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->container['firstname'];
    }

    /**
     * Sets firstname
     *
     * @param string $firstname The first name of the user.
     *
     * @return $this
     */
    public function setFirstname($firstname)
    {
        if (!is_null($firstname) && (mb_strlen($firstname) > 100)) {
            throw new \InvalidArgumentException('invalid length for $firstname when calling AbstractHumanUserUpdate., must be smaller than or equal to 100.');
        }

        $this->container['firstname'] = $firstname;

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
     * @param string $language The preferred language of the user.
     *
     * @return $this
     */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;

        return $this;
    }
    

    /**
     * Gets lastname
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->container['lastname'];
    }

    /**
     * Sets lastname
     *
     * @param string $lastname The last name of the user.
     *
     * @return $this
     */
    public function setLastname($lastname)
    {
        if (!is_null($lastname) && (mb_strlen($lastname) > 100)) {
            throw new \InvalidArgumentException('invalid length for $lastname when calling AbstractHumanUserUpdate., must be smaller than or equal to 100.');
        }

        $this->container['lastname'] = $lastname;

        return $this;
    }
    

    /**
     * Gets mobile_phone_number
     *
     * @return string
     */
    public function getMobilePhoneNumber()
    {
        return $this->container['mobile_phone_number'];
    }

    /**
     * Sets mobile_phone_number
     *
     * @param string $mobile_phone_number 
     *
     * @return $this
     */
    public function setMobilePhoneNumber($mobile_phone_number)
    {
        if (!is_null($mobile_phone_number) && (mb_strlen($mobile_phone_number) > 30)) {
            throw new \InvalidArgumentException('invalid length for $mobile_phone_number when calling AbstractHumanUserUpdate., must be smaller than or equal to 30.');
        }

        $this->container['mobile_phone_number'] = $mobile_phone_number;

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
     * @param string $time_zone The time zone which is applied for the user. If no timezone is specified the browser is used to determine an appropriate time zone.
     *
     * @return $this
     */
    public function setTimeZone($time_zone)
    {
        $this->container['time_zone'] = $time_zone;

        return $this;
    }
    

    /**
     * Gets two_factor_enabled
     *
     * @return bool
     */
    public function getTwoFactorEnabled()
    {
        return $this->container['two_factor_enabled'];
    }

    /**
     * Sets two_factor_enabled
     *
     * @param bool $two_factor_enabled Defines whether two-factor authentication is enabled for this user.
     *
     * @return $this
     */
    public function setTwoFactorEnabled($two_factor_enabled)
    {
        $this->container['two_factor_enabled'] = $two_factor_enabled;

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


