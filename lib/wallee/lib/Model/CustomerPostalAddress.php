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
 * CustomerPostalAddress model
 *
 * @category    Class
 * @description 
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class CustomerPostalAddress implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CustomerPostalAddress';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'city' => 'string',
        'commercial_register_number' => 'string',
        'country' => 'string',
        'date_of_birth' => '\DateTime',
        'dependent_locality' => 'string',
        'email_address' => 'string',
        'family_name' => 'string',
        'gender' => '\Wallee\Sdk\Model\Gender',
        'given_name' => 'string',
        'legal_organization_form' => '\Wallee\Sdk\Model\LegalOrganizationForm',
        'mobile_phone_number' => 'string',
        'organization_name' => 'string',
        'phone_number' => 'string',
        'postal_state' => 'string',
        'postcode' => 'string',
        'sales_tax_number' => 'string',
        'salutation' => 'string',
        'social_security_number' => 'string',
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
        'commercial_register_number' => null,
        'country' => null,
        'date_of_birth' => 'date',
        'dependent_locality' => null,
        'email_address' => null,
        'family_name' => null,
        'gender' => null,
        'given_name' => null,
        'legal_organization_form' => null,
        'mobile_phone_number' => null,
        'organization_name' => null,
        'phone_number' => null,
        'postal_state' => null,
        'postcode' => null,
        'sales_tax_number' => null,
        'salutation' => null,
        'social_security_number' => null,
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
        'commercial_register_number' => 'commercialRegisterNumber',
        'country' => 'country',
        'date_of_birth' => 'dateOfBirth',
        'dependent_locality' => 'dependentLocality',
        'email_address' => 'emailAddress',
        'family_name' => 'familyName',
        'gender' => 'gender',
        'given_name' => 'givenName',
        'legal_organization_form' => 'legalOrganizationForm',
        'mobile_phone_number' => 'mobilePhoneNumber',
        'organization_name' => 'organizationName',
        'phone_number' => 'phoneNumber',
        'postal_state' => 'postalState',
        'postcode' => 'postcode',
        'sales_tax_number' => 'salesTaxNumber',
        'salutation' => 'salutation',
        'social_security_number' => 'socialSecurityNumber',
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
        'commercial_register_number' => 'setCommercialRegisterNumber',
        'country' => 'setCountry',
        'date_of_birth' => 'setDateOfBirth',
        'dependent_locality' => 'setDependentLocality',
        'email_address' => 'setEmailAddress',
        'family_name' => 'setFamilyName',
        'gender' => 'setGender',
        'given_name' => 'setGivenName',
        'legal_organization_form' => 'setLegalOrganizationForm',
        'mobile_phone_number' => 'setMobilePhoneNumber',
        'organization_name' => 'setOrganizationName',
        'phone_number' => 'setPhoneNumber',
        'postal_state' => 'setPostalState',
        'postcode' => 'setPostcode',
        'sales_tax_number' => 'setSalesTaxNumber',
        'salutation' => 'setSalutation',
        'social_security_number' => 'setSocialSecurityNumber',
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
        'commercial_register_number' => 'getCommercialRegisterNumber',
        'country' => 'getCountry',
        'date_of_birth' => 'getDateOfBirth',
        'dependent_locality' => 'getDependentLocality',
        'email_address' => 'getEmailAddress',
        'family_name' => 'getFamilyName',
        'gender' => 'getGender',
        'given_name' => 'getGivenName',
        'legal_organization_form' => 'getLegalOrganizationForm',
        'mobile_phone_number' => 'getMobilePhoneNumber',
        'organization_name' => 'getOrganizationName',
        'phone_number' => 'getPhoneNumber',
        'postal_state' => 'getPostalState',
        'postcode' => 'getPostcode',
        'sales_tax_number' => 'getSalesTaxNumber',
        'salutation' => 'getSalutation',
        'social_security_number' => 'getSocialSecurityNumber',
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
        
        $this->container['commercial_register_number'] = isset($data['commercial_register_number']) ? $data['commercial_register_number'] : null;
        
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        
        $this->container['date_of_birth'] = isset($data['date_of_birth']) ? $data['date_of_birth'] : null;
        
        $this->container['dependent_locality'] = isset($data['dependent_locality']) ? $data['dependent_locality'] : null;
        
        $this->container['email_address'] = isset($data['email_address']) ? $data['email_address'] : null;
        
        $this->container['family_name'] = isset($data['family_name']) ? $data['family_name'] : null;
        
        $this->container['gender'] = isset($data['gender']) ? $data['gender'] : null;
        
        $this->container['given_name'] = isset($data['given_name']) ? $data['given_name'] : null;
        
        $this->container['legal_organization_form'] = isset($data['legal_organization_form']) ? $data['legal_organization_form'] : null;
        
        $this->container['mobile_phone_number'] = isset($data['mobile_phone_number']) ? $data['mobile_phone_number'] : null;
        
        $this->container['organization_name'] = isset($data['organization_name']) ? $data['organization_name'] : null;
        
        $this->container['phone_number'] = isset($data['phone_number']) ? $data['phone_number'] : null;
        
        $this->container['postal_state'] = isset($data['postal_state']) ? $data['postal_state'] : null;
        
        $this->container['postcode'] = isset($data['postcode']) ? $data['postcode'] : null;
        
        $this->container['sales_tax_number'] = isset($data['sales_tax_number']) ? $data['sales_tax_number'] : null;
        
        $this->container['salutation'] = isset($data['salutation']) ? $data['salutation'] : null;
        
        $this->container['social_security_number'] = isset($data['social_security_number']) ? $data['social_security_number'] : null;
        
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

        if (!is_null($this->container['city']) && (mb_strlen($this->container['city']) > 100)) {
            $invalidProperties[] = "invalid value for 'city', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['commercial_register_number']) && (mb_strlen($this->container['commercial_register_number']) > 100)) {
            $invalidProperties[] = "invalid value for 'commercial_register_number', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['dependent_locality']) && (mb_strlen($this->container['dependent_locality']) > 100)) {
            $invalidProperties[] = "invalid value for 'dependent_locality', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['email_address']) && (mb_strlen($this->container['email_address']) > 254)) {
            $invalidProperties[] = "invalid value for 'email_address', the character length must be smaller than or equal to 254.";
        }

        if (!is_null($this->container['family_name']) && (mb_strlen($this->container['family_name']) > 100)) {
            $invalidProperties[] = "invalid value for 'family_name', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['given_name']) && (mb_strlen($this->container['given_name']) > 100)) {
            $invalidProperties[] = "invalid value for 'given_name', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['mobile_phone_number']) && (mb_strlen($this->container['mobile_phone_number']) > 100)) {
            $invalidProperties[] = "invalid value for 'mobile_phone_number', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['organization_name']) && (mb_strlen($this->container['organization_name']) > 100)) {
            $invalidProperties[] = "invalid value for 'organization_name', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['phone_number']) && (mb_strlen($this->container['phone_number']) > 100)) {
            $invalidProperties[] = "invalid value for 'phone_number', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['postcode']) && (mb_strlen($this->container['postcode']) > 40)) {
            $invalidProperties[] = "invalid value for 'postcode', the character length must be smaller than or equal to 40.";
        }

        if (!is_null($this->container['sales_tax_number']) && (mb_strlen($this->container['sales_tax_number']) > 100)) {
            $invalidProperties[] = "invalid value for 'sales_tax_number', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['salutation']) && (mb_strlen($this->container['salutation']) > 20)) {
            $invalidProperties[] = "invalid value for 'salutation', the character length must be smaller than or equal to 20.";
        }

        if (!is_null($this->container['social_security_number']) && (mb_strlen($this->container['social_security_number']) > 100)) {
            $invalidProperties[] = "invalid value for 'social_security_number', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['sorting_code']) && (mb_strlen($this->container['sorting_code']) > 100)) {
            $invalidProperties[] = "invalid value for 'sorting_code', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['street']) && (mb_strlen($this->container['street']) > 300)) {
            $invalidProperties[] = "invalid value for 'street', the character length must be smaller than or equal to 300.";
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
        if (!is_null($city) && (mb_strlen($city) > 100)) {
            throw new \InvalidArgumentException('invalid length for $city when calling CustomerPostalAddress., must be smaller than or equal to 100.');
        }

        $this->container['city'] = $city;

        return $this;
    }
    

    /**
     * Gets commercial_register_number
     *
     * @return string
     */
    public function getCommercialRegisterNumber()
    {
        return $this->container['commercial_register_number'];
    }

    /**
     * Sets commercial_register_number
     *
     * @param string $commercial_register_number 
     *
     * @return $this
     */
    public function setCommercialRegisterNumber($commercial_register_number)
    {
        if (!is_null($commercial_register_number) && (mb_strlen($commercial_register_number) > 100)) {
            throw new \InvalidArgumentException('invalid length for $commercial_register_number when calling CustomerPostalAddress., must be smaller than or equal to 100.');
        }

        $this->container['commercial_register_number'] = $commercial_register_number;

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
     * Gets date_of_birth
     *
     * @return \DateTime
     */
    public function getDateOfBirth()
    {
        return $this->container['date_of_birth'];
    }

    /**
     * Sets date_of_birth
     *
     * @param \DateTime $date_of_birth 
     *
     * @return $this
     */
    public function setDateOfBirth($date_of_birth)
    {
        $this->container['date_of_birth'] = $date_of_birth;

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
            throw new \InvalidArgumentException('invalid length for $dependent_locality when calling CustomerPostalAddress., must be smaller than or equal to 100.');
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
     * @param string $email_address 
     *
     * @return $this
     */
    public function setEmailAddress($email_address)
    {
        if (!is_null($email_address) && (mb_strlen($email_address) > 254)) {
            throw new \InvalidArgumentException('invalid length for $email_address when calling CustomerPostalAddress., must be smaller than or equal to 254.');
        }

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
            throw new \InvalidArgumentException('invalid length for $family_name when calling CustomerPostalAddress., must be smaller than or equal to 100.');
        }

        $this->container['family_name'] = $family_name;

        return $this;
    }
    

    /**
     * Gets gender
     *
     * @return \Wallee\Sdk\Model\Gender
     */
    public function getGender()
    {
        return $this->container['gender'];
    }

    /**
     * Sets gender
     *
     * @param \Wallee\Sdk\Model\Gender $gender 
     *
     * @return $this
     */
    public function setGender($gender)
    {
        $this->container['gender'] = $gender;

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
            throw new \InvalidArgumentException('invalid length for $given_name when calling CustomerPostalAddress., must be smaller than or equal to 100.');
        }

        $this->container['given_name'] = $given_name;

        return $this;
    }
    

    /**
     * Gets legal_organization_form
     *
     * @return \Wallee\Sdk\Model\LegalOrganizationForm
     */
    public function getLegalOrganizationForm()
    {
        return $this->container['legal_organization_form'];
    }

    /**
     * Sets legal_organization_form
     *
     * @param \Wallee\Sdk\Model\LegalOrganizationForm $legal_organization_form 
     *
     * @return $this
     */
    public function setLegalOrganizationForm($legal_organization_form)
    {
        $this->container['legal_organization_form'] = $legal_organization_form;

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
        if (!is_null($mobile_phone_number) && (mb_strlen($mobile_phone_number) > 100)) {
            throw new \InvalidArgumentException('invalid length for $mobile_phone_number when calling CustomerPostalAddress., must be smaller than or equal to 100.');
        }

        $this->container['mobile_phone_number'] = $mobile_phone_number;

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
            throw new \InvalidArgumentException('invalid length for $organization_name when calling CustomerPostalAddress., must be smaller than or equal to 100.');
        }

        $this->container['organization_name'] = $organization_name;

        return $this;
    }
    

    /**
     * Gets phone_number
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->container['phone_number'];
    }

    /**
     * Sets phone_number
     *
     * @param string $phone_number 
     *
     * @return $this
     */
    public function setPhoneNumber($phone_number)
    {
        if (!is_null($phone_number) && (mb_strlen($phone_number) > 100)) {
            throw new \InvalidArgumentException('invalid length for $phone_number when calling CustomerPostalAddress., must be smaller than or equal to 100.');
        }

        $this->container['phone_number'] = $phone_number;

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
        if (!is_null($postcode) && (mb_strlen($postcode) > 40)) {
            throw new \InvalidArgumentException('invalid length for $postcode when calling CustomerPostalAddress., must be smaller than or equal to 40.');
        }

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
            throw new \InvalidArgumentException('invalid length for $sales_tax_number when calling CustomerPostalAddress., must be smaller than or equal to 100.');
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
            throw new \InvalidArgumentException('invalid length for $salutation when calling CustomerPostalAddress., must be smaller than or equal to 20.');
        }

        $this->container['salutation'] = $salutation;

        return $this;
    }
    

    /**
     * Gets social_security_number
     *
     * @return string
     */
    public function getSocialSecurityNumber()
    {
        return $this->container['social_security_number'];
    }

    /**
     * Sets social_security_number
     *
     * @param string $social_security_number 
     *
     * @return $this
     */
    public function setSocialSecurityNumber($social_security_number)
    {
        if (!is_null($social_security_number) && (mb_strlen($social_security_number) > 100)) {
            throw new \InvalidArgumentException('invalid length for $social_security_number when calling CustomerPostalAddress., must be smaller than or equal to 100.');
        }

        $this->container['social_security_number'] = $social_security_number;

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
            throw new \InvalidArgumentException('invalid length for $sorting_code when calling CustomerPostalAddress., must be smaller than or equal to 100.');
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
        if (!is_null($street) && (mb_strlen($street) > 300)) {
            throw new \InvalidArgumentException('invalid length for $street when calling CustomerPostalAddress., must be smaller than or equal to 300.');
        }

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


