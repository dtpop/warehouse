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
 * AuthenticatedCardDataCreate model
 *
 * @category    Class
 * @description This model holds the card data and optional cardholder authentication details.
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class AuthenticatedCardDataCreate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AuthenticatedCardData.Create';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'card_holder_name' => 'string',
        'card_verification_code' => 'string',
        'cardholder_authentication' => '\Wallee\Sdk\Model\CardholderAuthenticationCreate',
        'cryptogram' => '\Wallee\Sdk\Model\CardCryptogramCreate',
        'expiry_date' => 'string',
        'primary_account_number' => 'string',
        'recurring_indicator' => '\Wallee\Sdk\Model\RecurringIndicator',
        'scheme_transaction_reference' => 'string',
        'token_requestor_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'card_holder_name' => null,
        'card_verification_code' => null,
        'cardholder_authentication' => null,
        'cryptogram' => null,
        'expiry_date' => null,
        'primary_account_number' => null,
        'recurring_indicator' => null,
        'scheme_transaction_reference' => null,
        'token_requestor_id' => null
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'card_holder_name' => 'cardHolderName',
        'card_verification_code' => 'cardVerificationCode',
        'cardholder_authentication' => 'cardholderAuthentication',
        'cryptogram' => 'cryptogram',
        'expiry_date' => 'expiryDate',
        'primary_account_number' => 'primaryAccountNumber',
        'recurring_indicator' => 'recurringIndicator',
        'scheme_transaction_reference' => 'schemeTransactionReference',
        'token_requestor_id' => 'tokenRequestorId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'card_holder_name' => 'setCardHolderName',
        'card_verification_code' => 'setCardVerificationCode',
        'cardholder_authentication' => 'setCardholderAuthentication',
        'cryptogram' => 'setCryptogram',
        'expiry_date' => 'setExpiryDate',
        'primary_account_number' => 'setPrimaryAccountNumber',
        'recurring_indicator' => 'setRecurringIndicator',
        'scheme_transaction_reference' => 'setSchemeTransactionReference',
        'token_requestor_id' => 'setTokenRequestorId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'card_holder_name' => 'getCardHolderName',
        'card_verification_code' => 'getCardVerificationCode',
        'cardholder_authentication' => 'getCardholderAuthentication',
        'cryptogram' => 'getCryptogram',
        'expiry_date' => 'getExpiryDate',
        'primary_account_number' => 'getPrimaryAccountNumber',
        'recurring_indicator' => 'getRecurringIndicator',
        'scheme_transaction_reference' => 'getSchemeTransactionReference',
        'token_requestor_id' => 'getTokenRequestorId'
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
        
        $this->container['card_holder_name'] = isset($data['card_holder_name']) ? $data['card_holder_name'] : null;
        
        $this->container['card_verification_code'] = isset($data['card_verification_code']) ? $data['card_verification_code'] : null;
        
        $this->container['cardholder_authentication'] = isset($data['cardholder_authentication']) ? $data['cardholder_authentication'] : null;
        
        $this->container['cryptogram'] = isset($data['cryptogram']) ? $data['cryptogram'] : null;
        
        $this->container['expiry_date'] = isset($data['expiry_date']) ? $data['expiry_date'] : null;
        
        $this->container['primary_account_number'] = isset($data['primary_account_number']) ? $data['primary_account_number'] : null;
        
        $this->container['recurring_indicator'] = isset($data['recurring_indicator']) ? $data['recurring_indicator'] : null;
        
        $this->container['scheme_transaction_reference'] = isset($data['scheme_transaction_reference']) ? $data['scheme_transaction_reference'] : null;
        
        $this->container['token_requestor_id'] = isset($data['token_requestor_id']) ? $data['token_requestor_id'] : null;
        
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['card_holder_name']) && (mb_strlen($this->container['card_holder_name']) > 100)) {
            $invalidProperties[] = "invalid value for 'card_holder_name', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['card_verification_code']) && (mb_strlen($this->container['card_verification_code']) > 4)) {
            $invalidProperties[] = "invalid value for 'card_verification_code', the character length must be smaller than or equal to 4.";
        }

        if (!is_null($this->container['card_verification_code']) && (mb_strlen($this->container['card_verification_code']) < 3)) {
            $invalidProperties[] = "invalid value for 'card_verification_code', the character length must be bigger than or equal to 3.";
        }

        if ($this->container['primary_account_number'] === null) {
            $invalidProperties[] = "'primary_account_number' can't be null";
        }
        if ((mb_strlen($this->container['primary_account_number']) > 30)) {
            $invalidProperties[] = "invalid value for 'primary_account_number', the character length must be smaller than or equal to 30.";
        }

        if ((mb_strlen($this->container['primary_account_number']) < 10)) {
            $invalidProperties[] = "invalid value for 'primary_account_number', the character length must be bigger than or equal to 10.";
        }

        if (!is_null($this->container['scheme_transaction_reference']) && (mb_strlen($this->container['scheme_transaction_reference']) > 100)) {
            $invalidProperties[] = "invalid value for 'scheme_transaction_reference', the character length must be smaller than or equal to 100.";
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
     * Gets card_holder_name
     *
     * @return string
     */
    public function getCardHolderName()
    {
        return $this->container['card_holder_name'];
    }

    /**
     * Sets card_holder_name
     *
     * @param string $card_holder_name The card holder name is the name printed onto the card. It identifies the person who owns the card.
     *
     * @return $this
     */
    public function setCardHolderName($card_holder_name)
    {
        if (!is_null($card_holder_name) && (mb_strlen($card_holder_name) > 100)) {
            throw new \InvalidArgumentException('invalid length for $card_holder_name when calling AuthenticatedCardDataCreate., must be smaller than or equal to 100.');
        }

        $this->container['card_holder_name'] = $card_holder_name;

        return $this;
    }
    

    /**
     * Gets card_verification_code
     *
     * @return string
     */
    public function getCardVerificationCode()
    {
        return $this->container['card_verification_code'];
    }

    /**
     * Sets card_verification_code
     *
     * @param string $card_verification_code The card verification code (CVC) is a 3 to 4 digit code typically printed on the back of the card. It helps to ensure that the card holder is authorizing the transaction. For card not-present transactions this field is optional.
     *
     * @return $this
     */
    public function setCardVerificationCode($card_verification_code)
    {
        if (!is_null($card_verification_code) && (mb_strlen($card_verification_code) > 4)) {
            throw new \InvalidArgumentException('invalid length for $card_verification_code when calling AuthenticatedCardDataCreate., must be smaller than or equal to 4.');
        }
        if (!is_null($card_verification_code) && (mb_strlen($card_verification_code) < 3)) {
            throw new \InvalidArgumentException('invalid length for $card_verification_code when calling AuthenticatedCardDataCreate., must be bigger than or equal to 3.');
        }

        $this->container['card_verification_code'] = $card_verification_code;

        return $this;
    }
    

    /**
     * Gets cardholder_authentication
     *
     * @return \Wallee\Sdk\Model\CardholderAuthenticationCreate
     */
    public function getCardholderAuthentication()
    {
        return $this->container['cardholder_authentication'];
    }

    /**
     * Sets cardholder_authentication
     *
     * @param \Wallee\Sdk\Model\CardholderAuthenticationCreate $cardholder_authentication The cardholder authentication information. The authentication is optional and can be provided if the cardholder has been already authenticated (e.g. in 3-D Secure system).
     *
     * @return $this
     */
    public function setCardholderAuthentication($cardholder_authentication)
    {
        $this->container['cardholder_authentication'] = $cardholder_authentication;

        return $this;
    }
    

    /**
     * Gets cryptogram
     *
     * @return \Wallee\Sdk\Model\CardCryptogramCreate
     */
    public function getCryptogram()
    {
        return $this->container['cryptogram'];
    }

    /**
     * Sets cryptogram
     *
     * @param \Wallee\Sdk\Model\CardCryptogramCreate $cryptogram The additional authentication value used to secure the tokenized card transactions.
     *
     * @return $this
     */
    public function setCryptogram($cryptogram)
    {
        $this->container['cryptogram'] = $cryptogram;

        return $this;
    }
    

    /**
     * Gets expiry_date
     *
     * @return string
     */
    public function getExpiryDate()
    {
        return $this->container['expiry_date'];
    }

    /**
     * Sets expiry_date
     *
     * @param string $expiry_date The card expiry date indicates when the card expires. The format is the format yyyy-mm where yyyy is the year (e.g. 2019) and the mm is the month (e.g. 09).
     *
     * @return $this
     */
    public function setExpiryDate($expiry_date)
    {
        $this->container['expiry_date'] = $expiry_date;

        return $this;
    }
    

    /**
     * Gets primary_account_number
     *
     * @return string
     */
    public function getPrimaryAccountNumber()
    {
        return $this->container['primary_account_number'];
    }

    /**
     * Sets primary_account_number
     *
     * @param string $primary_account_number The primary account number (PAN) identifies the card. The number is numeric and typically printed on the front of the card.
     *
     * @return $this
     */
    public function setPrimaryAccountNumber($primary_account_number)
    {
        if ((mb_strlen($primary_account_number) > 30)) {
            throw new \InvalidArgumentException('invalid length for $primary_account_number when calling AuthenticatedCardDataCreate., must be smaller than or equal to 30.');
        }
        if ((mb_strlen($primary_account_number) < 10)) {
            throw new \InvalidArgumentException('invalid length for $primary_account_number when calling AuthenticatedCardDataCreate., must be bigger than or equal to 10.');
        }

        $this->container['primary_account_number'] = $primary_account_number;

        return $this;
    }
    

    /**
     * Gets recurring_indicator
     *
     * @return \Wallee\Sdk\Model\RecurringIndicator
     */
    public function getRecurringIndicator()
    {
        return $this->container['recurring_indicator'];
    }

    /**
     * Sets recurring_indicator
     *
     * @param \Wallee\Sdk\Model\RecurringIndicator $recurring_indicator 
     *
     * @return $this
     */
    public function setRecurringIndicator($recurring_indicator)
    {
        $this->container['recurring_indicator'] = $recurring_indicator;

        return $this;
    }
    

    /**
     * Gets scheme_transaction_reference
     *
     * @return string
     */
    public function getSchemeTransactionReference()
    {
        return $this->container['scheme_transaction_reference'];
    }

    /**
     * Sets scheme_transaction_reference
     *
     * @param string $scheme_transaction_reference 
     *
     * @return $this
     */
    public function setSchemeTransactionReference($scheme_transaction_reference)
    {
        if (!is_null($scheme_transaction_reference) && (mb_strlen($scheme_transaction_reference) > 100)) {
            throw new \InvalidArgumentException('invalid length for $scheme_transaction_reference when calling AuthenticatedCardDataCreate., must be smaller than or equal to 100.');
        }

        $this->container['scheme_transaction_reference'] = $scheme_transaction_reference;

        return $this;
    }
    

    /**
     * Gets token_requestor_id
     *
     * @return string
     */
    public function getTokenRequestorId()
    {
        return $this->container['token_requestor_id'];
    }

    /**
     * Sets token_requestor_id
     *
     * @param string $token_requestor_id 
     *
     * @return $this
     */
    public function setTokenRequestorId($token_requestor_id)
    {
        $this->container['token_requestor_id'] = $token_requestor_id;

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


