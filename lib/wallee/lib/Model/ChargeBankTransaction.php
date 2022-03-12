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
use \Wallee\Sdk\ObjectSerializer;

/**
 * ChargeBankTransaction model
 *
 * @category    Class
 * @description 
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class ChargeBankTransaction extends TransactionAwareEntity 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ChargeBankTransaction';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'bank_transaction' => '\Wallee\Sdk\Model\BankTransaction',
        'completion' => 'int',
        'language' => 'string',
        'space_view_id' => 'int',
        'transaction' => '\Wallee\Sdk\Model\Transaction',
        'transaction_currency_amount' => 'float',
        'transaction_currency_value_amount' => 'float',
        'version' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'bank_transaction' => null,
        'completion' => 'int64',
        'language' => null,
        'space_view_id' => 'int64',
        'transaction' => null,
        'transaction_currency_amount' => null,
        'transaction_currency_value_amount' => null,
        'version' => 'int32'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'bank_transaction' => 'bankTransaction',
        'completion' => 'completion',
        'language' => 'language',
        'space_view_id' => 'spaceViewId',
        'transaction' => 'transaction',
        'transaction_currency_amount' => 'transactionCurrencyAmount',
        'transaction_currency_value_amount' => 'transactionCurrencyValueAmount',
        'version' => 'version'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bank_transaction' => 'setBankTransaction',
        'completion' => 'setCompletion',
        'language' => 'setLanguage',
        'space_view_id' => 'setSpaceViewId',
        'transaction' => 'setTransaction',
        'transaction_currency_amount' => 'setTransactionCurrencyAmount',
        'transaction_currency_value_amount' => 'setTransactionCurrencyValueAmount',
        'version' => 'setVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bank_transaction' => 'getBankTransaction',
        'completion' => 'getCompletion',
        'language' => 'getLanguage',
        'space_view_id' => 'getSpaceViewId',
        'transaction' => 'getTransaction',
        'transaction_currency_amount' => 'getTransactionCurrencyAmount',
        'transaction_currency_value_amount' => 'getTransactionCurrencyValueAmount',
        'version' => 'getVersion'
    ];

    


    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        parent::__construct($data);

        
        $this->container['bank_transaction'] = isset($data['bank_transaction']) ? $data['bank_transaction'] : null;
        
        $this->container['completion'] = isset($data['completion']) ? $data['completion'] : null;
        
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        
        $this->container['space_view_id'] = isset($data['space_view_id']) ? $data['space_view_id'] : null;
        
        $this->container['transaction'] = isset($data['transaction']) ? $data['transaction'] : null;
        
        $this->container['transaction_currency_amount'] = isset($data['transaction_currency_amount']) ? $data['transaction_currency_amount'] : null;
        
        $this->container['transaction_currency_value_amount'] = isset($data['transaction_currency_value_amount']) ? $data['transaction_currency_value_amount'] : null;
        
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        return $invalidProperties;
    }

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes + parent::swaggerTypes();
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats + parent::swaggerFormats();
    }


    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return parent::attributeMap() + self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return parent::setters() + self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return parent::getters() + self::$getters;
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
     * Gets bank_transaction
     *
     * @return \Wallee\Sdk\Model\BankTransaction
     */
    public function getBankTransaction()
    {
        return $this->container['bank_transaction'];
    }

    /**
     * Sets bank_transaction
     *
     * @param \Wallee\Sdk\Model\BankTransaction $bank_transaction 
     *
     * @return $this
     */
    public function setBankTransaction($bank_transaction)
    {
        $this->container['bank_transaction'] = $bank_transaction;

        return $this;
    }
    

    /**
     * Gets completion
     *
     * @return int
     */
    public function getCompletion()
    {
        return $this->container['completion'];
    }

    /**
     * Sets completion
     *
     * @param int $completion 
     *
     * @return $this
     */
    public function setCompletion($completion)
    {
        $this->container['completion'] = $completion;

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
     * @param string $language 
     *
     * @return $this
     */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;

        return $this;
    }
    

    /**
     * Gets space_view_id
     *
     * @return int
     */
    public function getSpaceViewId()
    {
        return $this->container['space_view_id'];
    }

    /**
     * Sets space_view_id
     *
     * @param int $space_view_id 
     *
     * @return $this
     */
    public function setSpaceViewId($space_view_id)
    {
        $this->container['space_view_id'] = $space_view_id;

        return $this;
    }
    

    /**
     * Gets transaction
     *
     * @return \Wallee\Sdk\Model\Transaction
     */
    public function getTransaction()
    {
        return $this->container['transaction'];
    }

    /**
     * Sets transaction
     *
     * @param \Wallee\Sdk\Model\Transaction $transaction 
     *
     * @return $this
     */
    public function setTransaction($transaction)
    {
        $this->container['transaction'] = $transaction;

        return $this;
    }
    

    /**
     * Gets transaction_currency_amount
     *
     * @return float
     */
    public function getTransactionCurrencyAmount()
    {
        return $this->container['transaction_currency_amount'];
    }

    /**
     * Sets transaction_currency_amount
     *
     * @param float $transaction_currency_amount Specify the posting amount in the transaction's currency.
     *
     * @return $this
     */
    public function setTransactionCurrencyAmount($transaction_currency_amount)
    {
        $this->container['transaction_currency_amount'] = $transaction_currency_amount;

        return $this;
    }
    

    /**
     * Gets transaction_currency_value_amount
     *
     * @return float
     */
    public function getTransactionCurrencyValueAmount()
    {
        return $this->container['transaction_currency_value_amount'];
    }

    /**
     * Sets transaction_currency_value_amount
     *
     * @param float $transaction_currency_value_amount 
     *
     * @return $this
     */
    public function setTransactionCurrencyValueAmount($transaction_currency_value_amount)
    {
        $this->container['transaction_currency_value_amount'] = $transaction_currency_value_amount;

        return $this;
    }
    

    /**
     * Gets version
     *
     * @return int
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param int $version The version number indicates the version of the entity. The version is incremented whenever the entity is changed.
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


