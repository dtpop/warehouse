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
 * SpaceAddressCreate model
 *
 * @category    Class
 * @description 
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class SpaceAddressCreate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SpaceAddress.Create';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'city' => 'string',
        'country' => 'string',
        'dependent_locality' => 'string',
        'email_address' => 'string',
        'family_name' => 'string',
        'given_name' => 'string',
        'organization_name' => 'string',
        'postal_state' => 'string',
        'postcode' => 'string',
        'sales_tax_number' => 'string',
        'salutation' => 'string',
        'sorting_code' => 'string',
        'street' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'city' => null,
        'country' => null,
        'dependent_locality' => null,
        'email_address' => null,
        'family_name' => null,
        'given_name' => null,
        'organization_name' => null,
        'postal_state' => null,
        'postcode' => null,
        'sales_tax_number' => null,
        'salutation' => null,
        'sorting_code' => null,
        'street' => null
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'city' => 'city',
        'country' => 'country',
        'dependent_locality' => 'dependentLocality',
        'email_address' => 'emailAddress',
        'family_name' => 'familyName',
        'given_name' => 'givenName',
        'organization_name' => 'organizationName',
        'postal_state' => 'postalState',
        'postcode' => 'postcode',
        'sales_tax_number' => 'salesTaxNumber',
        'salutation' => 'salutation',
        'sorting_code' => 'sortingCode',
        'street' => 'street'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'city' => 'setCity',
        'country' => 'setCountry',
        'dependent_locality' => 'setDependentLocality',
        'email_address' => 'setEmailAddress',
        'family_name' => 'setFamilyName',
        'given_name' => 'setGivenName',
        'organization_name' => 'setOrganizationName',
        'postal_state' => 'setPostalState',
        'postcode' => 'setPostcode',
        'sales_tax_number' => 'setSalesTaxNumber',
        'salutation' => 'setSalutation',
        'sorting_code' => 'setSortingCode',
        'street' => 'setStreet'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'city' => 'getCity',
        'country' => 'getCountry',
        'dependent_locality' => 'getDependentLocality',
        'email_address' => 'getEmailAddress',
        'family_name' => 'getFamilyName',
        'given_name' => 'getGivenName',
        'organization_name' => 'getOrganizationName',
        'postal_state' => 'getPostalState',
        'postcode' => 'getPostcode',
        'sales_tax_number' => 'getSalesTaxNumber',
        'salutation' => 'getSalutation',
        'sorting_code' => 'getSortingCode',
        'street' => 'getStreet'
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
        
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        
        $this->container['dependent_locality'] = isset($data['dependent_locality']) ? $data['dependent_locality'] : null;
        
        $this->container['email_address'] = isset($data['email_address']) ? $data['email_address'] : null;
        
        $this->container['family_name'] = isset($data['family_name']) ? $data['family_name'] : null;
        
        $this->container['given_name'] = isset($data['given_name']) ? $data['given_name'] : null;
        
        $this->container['organization_name'] = isset($data['organization_name']) ? $data['organization_name'] : null;
        
        $this->container['postal_state'] = isset($data['postal_state']) ? $data['postal_state'] : null;
        
        $this->container['postcode'] = isset($data['postcode']) ? $data['postcode'] : null;
        
        $this->container['sales_tax_number'] = isset($data['sales_tax_number']) ? $data['sales_tax_number'] : null;
        
        $this->container['salutation'] = isset($data['salutation']) ? $data['salutation'] : null;
        
        $this->container['sorting_code'] = isset($data['sorting_code']) ? $data['sorting_code'] : null;
        
        $this->container['street'] = isset($data['street']) ? $data['street'] : null;
        
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['dependent_locality']) && (mb_strlen($this->container['dependent_locality']) > 100)) {
            $invalidProperties[] = "invalid value for 'dependent_locality', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['family_name']) && (mb_strlen($this->container['family_name']) > 100)) {
            $invalidProperties[] = "invalid value for 'family_name', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['given_name']) && (mb_strlen($this->container['given_name']) > 100)) {
            $invalidProperties[] = "invalid value for 'given_name', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['organization_name']) && (mb_strlen($this->container['organization_name']) > 100)) {
            $invalidProperties[] = "invalid value for 'organization_name', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['sales_tax_number']) && (mb_strlen($this->container['sales_tax_number']) > 100)) {
            $invalidProperties[] = "invalid value for 'sales_tax_number', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['salutation']) && (mb_strlen($this->container['salutation']) > 20)) {
            $invalidProperties[] = "invalid value for 'salutation', the character length must be smaller than or equal to 20.";
        }

        if (!is_null($this->container['sorting_code']) && (mb_strlen($this->container['sorting_code']) > 100)) {
            $invalidProperties[] = "invalid value for 'sorting_code', the character length must be smaller than or equal to 100.";
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
     * Gets city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string $city 
     *
     * @return $this
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }
    

    /**
     * Gets country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string $country 
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }
    

    /**
     * Gets dependent_locality
     *
     * @return string
     */
    public function getDependentLocality()
    {
        return $this->container['dependent_locality'];
    }

    /**
     * Sets dependent_locality
     *
     * @param string $dependent_locality 
     *
     * @return $this
     */
    public function setDependentLocality($dependent_locality)
    {
        if (!is_null($dependent_locality) && (mb_strlen($dependent_locality) > 100)) {
            throw new \InvalidArgumentException('invalid length for $dependent_locality when calling SpaceAddressCreate., must be smaller than or equal to 100.');
        }

        $this->container['dependent_locality'] = $dependent_locality;

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
     * @param string $email_address The email address is used within emails and as reply to address.
     *
     * @return $this
     */
    public function setEmailAddress($email_address)
    {
        $this->container['email_address'] = $email_address;

        return $this;
    }
    

    /**
     * Gets family_name
     *
     * @return string
     */
    public function getFamilyName()
    {
        return $this->container['family_name'];
    }

    /**
     * Sets family_name
     *
     * @param string $family_name 
     *
     * @return $this
     */
    public function setFamilyName($family_name)
    {
        if (!is_null($family_name) && (mb_strlen($family_name) > 100)) {
            throw new \InvalidArgumentException('invalid length for $family_name when calling SpaceAddressCreate., must be smaller than or equal to 100.');
        }

        $this->container['family_name'] = $family_name;

        return $this;
    }
    

    /**
     * Gets given_name
     *
     * @return string
     */
    public function getGivenName()
    {
        return $this->container['given_name'];
    }

    /**
     * Sets given_name
     *
     * @param string $given_name 
     *
     * @return $this
     */
    public function setGivenName($given_name)
    {
        if (!is_null($given_name) && (mb_strlen($given_name) > 100)) {
            throw new \InvalidArgumentException('invalid length for $given_name when calling SpaceAddressCreate., must be smaller than or equal to 100.');
        }

        $this->container['given_name'] = $given_name;

        return $this;
    }
    

    /**
     * Gets organization_name
     *
     * @return string
     */
    public function getOrganizationName()
    {
        return $this->container['organization_name'];
    }

    /**
     * Sets organization_name
     *
     * @param string $organization_name 
     *
     * @return $this
     */
    public function setOrganizationName($organization_name)
    {
        if (!is_null($organization_name) && (mb_strlen($organization_name) > 100)) {
            throw new \InvalidArgumentException('invalid length for $organization_name when calling SpaceAddressCreate., must be smaller than or equal to 100.');
        }

        $this->container['organization_name'] = $organization_name;

        return $this;
    }
    

    /**
     * Gets postal_state
     *
     * @return string
     */
    public function getPostalState()
    {
        return $this->container['postal_state'];
    }

    /**
     * Sets postal_state
     *
     * @param string $postal_state 
     *
     * @return $this
     */
    public function setPostalState($postal_state)
    {
        $this->container['postal_state'] = $postal_state;

        return $this;
    }
    

    /**
     * Gets postcode
     *
     * @return string
     */
    public function getPostcode()
    {
        return $this->container['postcode'];
    }

    /**
     * Sets postcode
     *
     * @param string $postcode 
     *
     * @return $this
     */
    public function setPostcode($postcode)
    {
        $this->container['postcode'] = $postcode;

        return $this;
    }
    

    /**
     * Gets sales_tax_number
     *
     * @return string
     */
    public function getSalesTaxNumber()
    {
        return $this->container['sales_tax_number'];
    }

    /**
     * Sets sales_tax_number
     *
     * @param string $sales_tax_number 
     *
     * @return $this
     */
    public function setSalesTaxNumber($sales_tax_number)
    {
        if (!is_null($sales_tax_number) && (mb_strlen($sales_tax_number) > 100)) {
            throw new \InvalidArgumentException('invalid length for $sales_tax_number when calling SpaceAddressCreate., must be smaller than or equal to 100.');
        }

        $this->container['sales_tax_number'] = $sales_tax_number;

        return $this;
    }
    

    /**
     * Gets salutation
     *
     * @return string
     */
    public function getSalutation()
    {
        return $this->container['salutation'];
    }

    /**
     * Sets salutation
     *
     * @param string $salutation 
     *
     * @return $this
     */
    public function setSalutation($salutation)
    {
        if (!is_null($salutation) && (mb_strlen($salutation) > 20)) {
            throw new \InvalidArgumentException('invalid length for $salutation when calling SpaceAddressCreate., must be smaller than or equal to 20.');
        }

        $this->container['salutation'] = $salutation;

        return $this;
    }
    

    /**
     * Gets sorting_code
     *
     * @return string
     */
    public function getSortingCode()
    {
        return $this->container['sorting_code'];
    }

    /**
     * Sets sorting_code
     *
     * @param string $sorting_code The sorting code identifies the post office at which the post box is located in.
     *
     * @return $this
     */
    public function setSortingCode($sorting_code)
    {
        if (!is_null($sorting_code) && (mb_strlen($sorting_code) > 100)) {
            throw new \InvalidArgumentException('invalid length for $sorting_code when calling SpaceAddressCreate., must be smaller than or equal to 100.');
        }

        $this->container['sorting_code'] = $sorting_code;

        return $this;
    }
    

    /**
     * Gets street
     *
     * @return string
     */
    public function getStreet()
    {
        return $this->container['street'];
    }

    /**
     * Sets street
     *
     * @param string $street 
     *
     * @return $this
     */
    public function setStreet($street)
    {
        $this->container['street'] = $street;

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


