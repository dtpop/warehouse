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
 * HumanUser model
 *
 * @category    Class
 * @description 
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class HumanUser implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'HumanUser';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'email_address' => 'string',
        'email_address_verified' => 'bool',
        'firstname' => 'string',
        'language' => 'string',
        'lastname' => 'string',
        'mobile_phone_number' => 'string',
        'mobile_phone_verified' => 'bool',
        'primary_account' => '\Wallee\Sdk\Model\Account',
        'scope' => '\Wallee\Sdk\Model\Scope',
        'time_zone' => 'string',
        'two_factor_enabled' => 'bool',
        'two_factor_type' => '\Wallee\Sdk\Model\TwoFactorAuthenticationType'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'email_address' => null,
        'email_address_verified' => null,
        'firstname' => null,
        'language' => null,
        'lastname' => null,
        'mobile_phone_number' => null,
        'mobile_phone_verified' => null,
        'primary_account' => null,
        'scope' => null,
        'time_zone' => null,
        'two_factor_enabled' => null,
        'two_factor_type' => null
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'email_address' => 'emailAddress',
        'email_address_verified' => 'emailAddressVerified',
        'firstname' => 'firstname',
        'language' => 'language',
        'lastname' => 'lastname',
        'mobile_phone_number' => 'mobilePhoneNumber',
        'mobile_phone_verified' => 'mobilePhoneVerified',
        'primary_account' => 'primaryAccount',
        'scope' => 'scope',
        'time_zone' => 'timeZone',
        'two_factor_enabled' => 'twoFactorEnabled',
        'two_factor_type' => 'twoFactorType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'email_address' => 'setEmailAddress',
        'email_address_verified' => 'setEmailAddressVerified',
        'firstname' => 'setFirstname',
        'language' => 'setLanguage',
        'lastname' => 'setLastname',
        'mobile_phone_number' => 'setMobilePhoneNumber',
        'mobile_phone_verified' => 'setMobilePhoneVerified',
        'primary_account' => 'setPrimaryAccount',
        'scope' => 'setScope',
        'time_zone' => 'setTimeZone',
        'two_factor_enabled' => 'setTwoFactorEnabled',
        'two_factor_type' => 'setTwoFactorType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'email_address' => 'getEmailAddress',
        'email_address_verified' => 'getEmailAddressVerified',
        'firstname' => 'getFirstname',
        'language' => 'getLanguage',
        'lastname' => 'getLastname',
        'mobile_phone_number' => 'getMobilePhoneNumber',
        'mobile_phone_verified' => 'getMobilePhoneVerified',
        'primary_account' => 'getPrimaryAccount',
        'scope' => 'getScope',
        'time_zone' => 'getTimeZone',
        'two_factor_enabled' => 'getTwoFactorEnabled',
        'two_factor_type' => 'getTwoFactorType'
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
        
        $this->container['email_address_verified'] = isset($data['email_address_verified']) ? $data['email_address_verified'] : null;
        
        $this->container['firstname'] = isset($data['firstname']) ? $data['firstname'] : null;
        
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        
        $this->container['lastname'] = isset($data['lastname']) ? $data['lastname'] : null;
        
        $this->container['mobile_phone_number'] = isset($data['mobile_phone_number']) ? $data['mobile_phone_number'] : null;
        
        $this->container['mobile_phone_verified'] = isset($data['mobile_phone_verified']) ? $data['mobile_phone_verified'] : null;
        
        $this->container['primary_account'] = isset($data['primary_account']) ? $data['primary_account'] : null;
        
        $this->container['scope'] = isset($data['scope']) ? $data['scope'] : null;
        
        $this->container['time_zone'] = isset($data['time_zone']) ? $data['time_zone'] : null;
        
        $this->container['two_factor_enabled'] = isset($data['two_factor_enabled']) ? $data['two_factor_enabled'] : null;
        
        $this->container['two_factor_type'] = isset($data['two_factor_type']) ? $data['two_factor_type'] : null;
        
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
            throw new \InvalidArgumentException('invalid length for $email_address when calling HumanUser., must be smaller than or equal to 128.');
        }

        $this->container['email_address'] = $email_address;

        return $this;
    }
    

    /**
     * Gets email_address_verified
     *
     * @return bool
     */
    public function getEmailAddressVerified()
    {
        return $this->container['email_address_verified'];
    }

    /**
     * Sets email_address_verified
     *
     * @param bool $email_address_verified Defines whether a user is verified or not.
     *
     * @return $this
     */
    public function setEmailAddressVerified($email_address_verified)
    {
        $this->container['email_address_verified'] = $email_address_verified;

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
            throw new \InvalidArgumentException('invalid length for $firstname when calling HumanUser., must be smaller than or equal to 100.');
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
            throw new \InvalidArgumentException('invalid length for $lastname when calling HumanUser., must be smaller than or equal to 100.');
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
            throw new \InvalidArgumentException('invalid length for $mobile_phone_number when calling HumanUser., must be smaller than or equal to 30.');
        }

        $this->container['mobile_phone_number'] = $mobile_phone_number;

        return $this;
    }
    

    /**
     * Gets mobile_phone_verified
     *
     * @return bool
     */
    public function getMobilePhoneVerified()
    {
        return $this->container['mobile_phone_verified'];
    }

    /**
     * Sets mobile_phone_verified
     *
     * @param bool $mobile_phone_verified Defines whether a users mobile phone number is verified or not.
     *
     * @return $this
     */
    public function setMobilePhoneVerified($mobile_phone_verified)
    {
        $this->container['mobile_phone_verified'] = $mobile_phone_verified;

        return $this;
    }
    

    /**
     * Gets primary_account
     *
     * @return \Wallee\Sdk\Model\Account
     */
    public function getPrimaryAccount()
    {
        return $this->container['primary_account'];
    }

    /**
     * Sets primary_account
     *
     * @param \Wallee\Sdk\Model\Account $primary_account The primary account links the user to a specific account.
     *
     * @return $this
     */
    public function setPrimaryAccount($primary_account)
    {
        $this->container['primary_account'] = $primary_account;

        return $this;
    }
    

    /**
     * Gets scope
     *
     * @return \Wallee\Sdk\Model\Scope
     */
    public function getScope()
    {
        return $this->container['scope'];
    }

    /**
     * Sets scope
     *
     * @param \Wallee\Sdk\Model\Scope $scope The scope to which the user belongs to.
     *
     * @return $this
     */
    public function setScope($scope)
    {
        $this->container['scope'] = $scope;

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
     * Gets two_factor_type
     *
     * @return \Wallee\Sdk\Model\TwoFactorAuthenticationType
     */
    public function getTwoFactorType()
    {
        return $this->container['two_factor_type'];
    }

    /**
     * Sets two_factor_type
     *
     * @param \Wallee\Sdk\Model\TwoFactorAuthenticationType $two_factor_type 
     *
     * @return $this
     */
    public function setTwoFactorType($two_factor_type)
    {
        $this->container['two_factor_type'] = $two_factor_type;

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


