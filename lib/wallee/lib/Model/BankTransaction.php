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
 * BankTransaction model
 *
 * @category    Class
 * @description 
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class BankTransaction implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'BankTransaction';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'adjustments' => '\Wallee\Sdk\Model\PaymentAdjustment[]',
        'created_by' => 'int',
        'created_on' => '\DateTime',
        'currency_bank_account' => '\Wallee\Sdk\Model\CurrencyBankAccount',
        'external_id' => 'string',
        'flow_direction' => '\Wallee\Sdk\Model\BankTransactionFlowDirection',
        'id' => 'int',
        'linked_space_id' => 'int',
        'planned_purge_date' => '\DateTime',
        'posting_amount' => 'float',
        'reference' => 'string',
        'source' => 'int',
        'state' => '\Wallee\Sdk\Model\BankTransactionState',
        'total_adjustment_amount_including_tax' => 'float',
        'type' => 'int',
        'value_amount' => 'float',
        'value_date' => '\DateTime',
        'version' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'adjustments' => null,
        'created_by' => 'int64',
        'created_on' => 'date-time',
        'currency_bank_account' => null,
        'external_id' => null,
        'flow_direction' => null,
        'id' => 'int64',
        'linked_space_id' => 'int64',
        'planned_purge_date' => 'date-time',
        'posting_amount' => null,
        'reference' => null,
        'source' => 'int64',
        'state' => null,
        'total_adjustment_amount_including_tax' => null,
        'type' => 'int64',
        'value_amount' => null,
        'value_date' => 'date-time',
        'version' => 'int32'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'adjustments' => 'adjustments',
        'created_by' => 'createdBy',
        'created_on' => 'createdOn',
        'currency_bank_account' => 'currencyBankAccount',
        'external_id' => 'externalId',
        'flow_direction' => 'flowDirection',
        'id' => 'id',
        'linked_space_id' => 'linkedSpaceId',
        'planned_purge_date' => 'plannedPurgeDate',
        'posting_amount' => 'postingAmount',
        'reference' => 'reference',
        'source' => 'source',
        'state' => 'state',
        'total_adjustment_amount_including_tax' => 'totalAdjustmentAmountIncludingTax',
        'type' => 'type',
        'value_amount' => 'valueAmount',
        'value_date' => 'valueDate',
        'version' => 'version'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'adjustments' => 'setAdjustments',
        'created_by' => 'setCreatedBy',
        'created_on' => 'setCreatedOn',
        'currency_bank_account' => 'setCurrencyBankAccount',
        'external_id' => 'setExternalId',
        'flow_direction' => 'setFlowDirection',
        'id' => 'setId',
        'linked_space_id' => 'setLinkedSpaceId',
        'planned_purge_date' => 'setPlannedPurgeDate',
        'posting_amount' => 'setPostingAmount',
        'reference' => 'setReference',
        'source' => 'setSource',
        'state' => 'setState',
        'total_adjustment_amount_including_tax' => 'setTotalAdjustmentAmountIncludingTax',
        'type' => 'setType',
        'value_amount' => 'setValueAmount',
        'value_date' => 'setValueDate',
        'version' => 'setVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'adjustments' => 'getAdjustments',
        'created_by' => 'getCreatedBy',
        'created_on' => 'getCreatedOn',
        'currency_bank_account' => 'getCurrencyBankAccount',
        'external_id' => 'getExternalId',
        'flow_direction' => 'getFlowDirection',
        'id' => 'getId',
        'linked_space_id' => 'getLinkedSpaceId',
        'planned_purge_date' => 'getPlannedPurgeDate',
        'posting_amount' => 'getPostingAmount',
        'reference' => 'getReference',
        'source' => 'getSource',
        'state' => 'getState',
        'total_adjustment_amount_including_tax' => 'getTotalAdjustmentAmountIncludingTax',
        'type' => 'getType',
        'value_amount' => 'getValueAmount',
        'value_date' => 'getValueDate',
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
        
        $this->container['adjustments'] = isset($data['adjustments']) ? $data['adjustments'] : null;
        
        $this->container['created_by'] = isset($data['created_by']) ? $data['created_by'] : null;
        
        $this->container['created_on'] = isset($data['created_on']) ? $data['created_on'] : null;
        
        $this->container['currency_bank_account'] = isset($data['currency_bank_account']) ? $data['currency_bank_account'] : null;
        
        $this->container['external_id'] = isset($data['external_id']) ? $data['external_id'] : null;
        
        $this->container['flow_direction'] = isset($data['flow_direction']) ? $data['flow_direction'] : null;
        
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        
        $this->container['linked_space_id'] = isset($data['linked_space_id']) ? $data['linked_space_id'] : null;
        
        $this->container['planned_purge_date'] = isset($data['planned_purge_date']) ? $data['planned_purge_date'] : null;
        
        $this->container['posting_amount'] = isset($data['posting_amount']) ? $data['posting_amount'] : null;
        
        $this->container['reference'] = isset($data['reference']) ? $data['reference'] : null;
        
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
        
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        
        $this->container['total_adjustment_amount_including_tax'] = isset($data['total_adjustment_amount_including_tax']) ? $data['total_adjustment_amount_including_tax'] : null;
        
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        
        $this->container['value_amount'] = isset($data['value_amount']) ? $data['value_amount'] : null;
        
        $this->container['value_date'] = isset($data['value_date']) ? $data['value_date'] : null;
        
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

        if (!is_null($this->container['external_id']) && (mb_strlen($this->container['external_id']) > 100)) {
            $invalidProperties[] = "invalid value for 'external_id', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['external_id']) && (mb_strlen($this->container['external_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'external_id', the character length must be bigger than or equal to 1.";
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
     * Gets adjustments
     *
     * @return \Wallee\Sdk\Model\PaymentAdjustment[]
     */
    public function getAdjustments()
    {
        return $this->container['adjustments'];
    }

    /**
     * Sets adjustments
     *
     * @param \Wallee\Sdk\Model\PaymentAdjustment[] $adjustments The adjustments applied on this bank transaction.
     *
     * @return $this
     */
    public function setAdjustments($adjustments)
    {
        $this->container['adjustments'] = $adjustments;

        return $this;
    }
    

    /**
     * Gets created_by
     *
     * @return int
     */
    public function getCreatedBy()
    {
        return $this->container['created_by'];
    }

    /**
     * Sets created_by
     *
     * @param int $created_by The created by indicates the user which has created the bank transaction.
     *
     * @return $this
     */
    public function setCreatedBy($created_by)
    {
        $this->container['created_by'] = $created_by;

        return $this;
    }
    

    /**
     * Gets created_on
     *
     * @return \DateTime
     */
    public function getCreatedOn()
    {
        return $this->container['created_on'];
    }

    /**
     * Sets created_on
     *
     * @param \DateTime $created_on The created on date indicates the date on which the entity was stored into the database.
     *
     * @return $this
     */
    public function setCreatedOn($created_on)
    {
        $this->container['created_on'] = $created_on;

        return $this;
    }
    

    /**
     * Gets currency_bank_account
     *
     * @return \Wallee\Sdk\Model\CurrencyBankAccount
     */
    public function getCurrencyBankAccount()
    {
        return $this->container['currency_bank_account'];
    }

    /**
     * Sets currency_bank_account
     *
     * @param \Wallee\Sdk\Model\CurrencyBankAccount $currency_bank_account The currency bank account which is used to handle money flow.
     *
     * @return $this
     */
    public function setCurrencyBankAccount($currency_bank_account)
    {
        $this->container['currency_bank_account'] = $currency_bank_account;

        return $this;
    }
    

    /**
     * Gets external_id
     *
     * @return string
     */
    public function getExternalId()
    {
        return $this->container['external_id'];
    }

    /**
     * Sets external_id
     *
     * @param string $external_id 
     *
     * @return $this
     */
    public function setExternalId($external_id)
    {
        if (!is_null($external_id) && (mb_strlen($external_id) > 100)) {
            throw new \InvalidArgumentException('invalid length for $external_id when calling BankTransaction., must be smaller than or equal to 100.');
        }
        if (!is_null($external_id) && (mb_strlen($external_id) < 1)) {
            throw new \InvalidArgumentException('invalid length for $external_id when calling BankTransaction., must be bigger than or equal to 1.');
        }

        $this->container['external_id'] = $external_id;

        return $this;
    }
    

    /**
     * Gets flow_direction
     *
     * @return \Wallee\Sdk\Model\BankTransactionFlowDirection
     */
    public function getFlowDirection()
    {
        return $this->container['flow_direction'];
    }

    /**
     * Sets flow_direction
     *
     * @param \Wallee\Sdk\Model\BankTransactionFlowDirection $flow_direction 
     *
     * @return $this
     */
    public function setFlowDirection($flow_direction)
    {
        $this->container['flow_direction'] = $flow_direction;

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
     * Gets linked_space_id
     *
     * @return int
     */
    public function getLinkedSpaceId()
    {
        return $this->container['linked_space_id'];
    }

    /**
     * Sets linked_space_id
     *
     * @param int $linked_space_id The linked space id holds the ID of the space to which the entity belongs to.
     *
     * @return $this
     */
    public function setLinkedSpaceId($linked_space_id)
    {
        $this->container['linked_space_id'] = $linked_space_id;

        return $this;
    }
    

    /**
     * Gets planned_purge_date
     *
     * @return \DateTime
     */
    public function getPlannedPurgeDate()
    {
        return $this->container['planned_purge_date'];
    }

    /**
     * Sets planned_purge_date
     *
     * @param \DateTime $planned_purge_date The planned purge date indicates when the entity is permanently removed. When the date is null the entity is not planned to be removed.
     *
     * @return $this
     */
    public function setPlannedPurgeDate($planned_purge_date)
    {
        $this->container['planned_purge_date'] = $planned_purge_date;

        return $this;
    }
    

    /**
     * Gets posting_amount
     *
     * @return float
     */
    public function getPostingAmount()
    {
        return $this->container['posting_amount'];
    }

    /**
     * Sets posting_amount
     *
     * @param float $posting_amount The posting amount indicates the amount including adjustments.
     *
     * @return $this
     */
    public function setPostingAmount($posting_amount)
    {
        $this->container['posting_amount'] = $posting_amount;

        return $this;
    }
    

    /**
     * Gets reference
     *
     * @return string
     */
    public function getReference()
    {
        return $this->container['reference'];
    }

    /**
     * Sets reference
     *
     * @param string $reference 
     *
     * @return $this
     */
    public function setReference($reference)
    {
        $this->container['reference'] = $reference;

        return $this;
    }
    

    /**
     * Gets source
     *
     * @return int
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     *
     * @param int $source 
     *
     * @return $this
     */
    public function setSource($source)
    {
        $this->container['source'] = $source;

        return $this;
    }
    

    /**
     * Gets state
     *
     * @return \Wallee\Sdk\Model\BankTransactionState
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param \Wallee\Sdk\Model\BankTransactionState $state 
     *
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }
    

    /**
     * Gets total_adjustment_amount_including_tax
     *
     * @return float
     */
    public function getTotalAdjustmentAmountIncludingTax()
    {
        return $this->container['total_adjustment_amount_including_tax'];
    }

    /**
     * Sets total_adjustment_amount_including_tax
     *
     * @param float $total_adjustment_amount_including_tax 
     *
     * @return $this
     */
    public function setTotalAdjustmentAmountIncludingTax($total_adjustment_amount_including_tax)
    {
        $this->container['total_adjustment_amount_including_tax'] = $total_adjustment_amount_including_tax;

        return $this;
    }
    

    /**
     * Gets type
     *
     * @return int
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param int $type 
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }
    

    /**
     * Gets value_amount
     *
     * @return float
     */
    public function getValueAmount()
    {
        return $this->container['value_amount'];
    }

    /**
     * Sets value_amount
     *
     * @param float $value_amount 
     *
     * @return $this
     */
    public function setValueAmount($value_amount)
    {
        $this->container['value_amount'] = $value_amount;

        return $this;
    }
    

    /**
     * Gets value_date
     *
     * @return \DateTime
     */
    public function getValueDate()
    {
        return $this->container['value_date'];
    }

    /**
     * Sets value_date
     *
     * @param \DateTime $value_date The value date describes the date the amount is effective on the account.
     *
     * @return $this
     */
    public function setValueDate($value_date)
    {
        $this->container['value_date'] = $value_date;

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


