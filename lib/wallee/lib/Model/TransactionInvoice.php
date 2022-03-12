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
 * TransactionInvoice model
 *
 * @category    Class
 * @description The transaction invoice represents the invoice document for a particular transaction.
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class TransactionInvoice extends TransactionAwareEntity 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TransactionInvoice';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'amount' => 'float',
        'billing_address' => '\Wallee\Sdk\Model\Address',
        'completion' => '\Wallee\Sdk\Model\TransactionCompletion',
        'created_on' => '\DateTime',
        'derecognized_by' => 'int',
        'derecognized_on' => '\DateTime',
        'due_on' => '\DateTime',
        'environment' => '\Wallee\Sdk\Model\Environment',
        'external_id' => 'string',
        'language' => 'string',
        'line_items' => '\Wallee\Sdk\Model\LineItem[]',
        'merchant_reference' => 'string',
        'outstanding_amount' => 'float',
        'paid_on' => '\DateTime',
        'planned_purge_date' => '\DateTime',
        'space_view_id' => 'int',
        'state' => '\Wallee\Sdk\Model\TransactionInvoiceState',
        'tax_amount' => 'float',
        'time_zone' => 'string',
        'version' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'amount' => null,
        'billing_address' => null,
        'completion' => null,
        'created_on' => 'date-time',
        'derecognized_by' => 'int64',
        'derecognized_on' => 'date-time',
        'due_on' => 'date-time',
        'environment' => null,
        'external_id' => null,
        'language' => null,
        'line_items' => null,
        'merchant_reference' => null,
        'outstanding_amount' => null,
        'paid_on' => 'date-time',
        'planned_purge_date' => 'date-time',
        'space_view_id' => 'int64',
        'state' => null,
        'tax_amount' => null,
        'time_zone' => null,
        'version' => 'int32'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'amount' => 'amount',
        'billing_address' => 'billingAddress',
        'completion' => 'completion',
        'created_on' => 'createdOn',
        'derecognized_by' => 'derecognizedBy',
        'derecognized_on' => 'derecognizedOn',
        'due_on' => 'dueOn',
        'environment' => 'environment',
        'external_id' => 'externalId',
        'language' => 'language',
        'line_items' => 'lineItems',
        'merchant_reference' => 'merchantReference',
        'outstanding_amount' => 'outstandingAmount',
        'paid_on' => 'paidOn',
        'planned_purge_date' => 'plannedPurgeDate',
        'space_view_id' => 'spaceViewId',
        'state' => 'state',
        'tax_amount' => 'taxAmount',
        'time_zone' => 'timeZone',
        'version' => 'version'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amount' => 'setAmount',
        'billing_address' => 'setBillingAddress',
        'completion' => 'setCompletion',
        'created_on' => 'setCreatedOn',
        'derecognized_by' => 'setDerecognizedBy',
        'derecognized_on' => 'setDerecognizedOn',
        'due_on' => 'setDueOn',
        'environment' => 'setEnvironment',
        'external_id' => 'setExternalId',
        'language' => 'setLanguage',
        'line_items' => 'setLineItems',
        'merchant_reference' => 'setMerchantReference',
        'outstanding_amount' => 'setOutstandingAmount',
        'paid_on' => 'setPaidOn',
        'planned_purge_date' => 'setPlannedPurgeDate',
        'space_view_id' => 'setSpaceViewId',
        'state' => 'setState',
        'tax_amount' => 'setTaxAmount',
        'time_zone' => 'setTimeZone',
        'version' => 'setVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amount' => 'getAmount',
        'billing_address' => 'getBillingAddress',
        'completion' => 'getCompletion',
        'created_on' => 'getCreatedOn',
        'derecognized_by' => 'getDerecognizedBy',
        'derecognized_on' => 'getDerecognizedOn',
        'due_on' => 'getDueOn',
        'environment' => 'getEnvironment',
        'external_id' => 'getExternalId',
        'language' => 'getLanguage',
        'line_items' => 'getLineItems',
        'merchant_reference' => 'getMerchantReference',
        'outstanding_amount' => 'getOutstandingAmount',
        'paid_on' => 'getPaidOn',
        'planned_purge_date' => 'getPlannedPurgeDate',
        'space_view_id' => 'getSpaceViewId',
        'state' => 'getState',
        'tax_amount' => 'getTaxAmount',
        'time_zone' => 'getTimeZone',
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

        
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        
        $this->container['billing_address'] = isset($data['billing_address']) ? $data['billing_address'] : null;
        
        $this->container['completion'] = isset($data['completion']) ? $data['completion'] : null;
        
        $this->container['created_on'] = isset($data['created_on']) ? $data['created_on'] : null;
        
        $this->container['derecognized_by'] = isset($data['derecognized_by']) ? $data['derecognized_by'] : null;
        
        $this->container['derecognized_on'] = isset($data['derecognized_on']) ? $data['derecognized_on'] : null;
        
        $this->container['due_on'] = isset($data['due_on']) ? $data['due_on'] : null;
        
        $this->container['environment'] = isset($data['environment']) ? $data['environment'] : null;
        
        $this->container['external_id'] = isset($data['external_id']) ? $data['external_id'] : null;
        
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        
        $this->container['line_items'] = isset($data['line_items']) ? $data['line_items'] : null;
        
        $this->container['merchant_reference'] = isset($data['merchant_reference']) ? $data['merchant_reference'] : null;
        
        $this->container['outstanding_amount'] = isset($data['outstanding_amount']) ? $data['outstanding_amount'] : null;
        
        $this->container['paid_on'] = isset($data['paid_on']) ? $data['paid_on'] : null;
        
        $this->container['planned_purge_date'] = isset($data['planned_purge_date']) ? $data['planned_purge_date'] : null;
        
        $this->container['space_view_id'] = isset($data['space_view_id']) ? $data['space_view_id'] : null;
        
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        
        $this->container['tax_amount'] = isset($data['tax_amount']) ? $data['tax_amount'] : null;
        
        $this->container['time_zone'] = isset($data['time_zone']) ? $data['time_zone'] : null;
        
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

        if (!is_null($this->container['external_id']) && (mb_strlen($this->container['external_id']) > 100)) {
            $invalidProperties[] = "invalid value for 'external_id', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['external_id']) && (mb_strlen($this->container['external_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'external_id', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['merchant_reference']) && (mb_strlen($this->container['merchant_reference']) > 100)) {
            $invalidProperties[] = "invalid value for 'merchant_reference', the character length must be smaller than or equal to 100.";
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
     * Gets amount
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param float $amount 
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }
    

    /**
     * Gets billing_address
     *
     * @return \Wallee\Sdk\Model\Address
     */
    public function getBillingAddress()
    {
        return $this->container['billing_address'];
    }

    /**
     * Sets billing_address
     *
     * @param \Wallee\Sdk\Model\Address $billing_address 
     *
     * @return $this
     */
    public function setBillingAddress($billing_address)
    {
        $this->container['billing_address'] = $billing_address;

        return $this;
    }
    

    /**
     * Gets completion
     *
     * @return \Wallee\Sdk\Model\TransactionCompletion
     */
    public function getCompletion()
    {
        return $this->container['completion'];
    }

    /**
     * Sets completion
     *
     * @param \Wallee\Sdk\Model\TransactionCompletion $completion 
     *
     * @return $this
     */
    public function setCompletion($completion)
    {
        $this->container['completion'] = $completion;

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
     * @param \DateTime $created_on The date on which the invoice is created on.
     *
     * @return $this
     */
    public function setCreatedOn($created_on)
    {
        $this->container['created_on'] = $created_on;

        return $this;
    }
    

    /**
     * Gets derecognized_by
     *
     * @return int
     */
    public function getDerecognizedBy()
    {
        return $this->container['derecognized_by'];
    }

    /**
     * Sets derecognized_by
     *
     * @param int $derecognized_by The id of the user which marked the invoice as derecognized.
     *
     * @return $this
     */
    public function setDerecognizedBy($derecognized_by)
    {
        $this->container['derecognized_by'] = $derecognized_by;

        return $this;
    }
    

    /**
     * Gets derecognized_on
     *
     * @return \DateTime
     */
    public function getDerecognizedOn()
    {
        return $this->container['derecognized_on'];
    }

    /**
     * Sets derecognized_on
     *
     * @param \DateTime $derecognized_on The date on which the invoice is marked as derecognized.
     *
     * @return $this
     */
    public function setDerecognizedOn($derecognized_on)
    {
        $this->container['derecognized_on'] = $derecognized_on;

        return $this;
    }
    

    /**
     * Gets due_on
     *
     * @return \DateTime
     */
    public function getDueOn()
    {
        return $this->container['due_on'];
    }

    /**
     * Sets due_on
     *
     * @param \DateTime $due_on The date on which the invoice should be paid on.
     *
     * @return $this
     */
    public function setDueOn($due_on)
    {
        $this->container['due_on'] = $due_on;

        return $this;
    }
    

    /**
     * Gets environment
     *
     * @return \Wallee\Sdk\Model\Environment
     */
    public function getEnvironment()
    {
        return $this->container['environment'];
    }

    /**
     * Sets environment
     *
     * @param \Wallee\Sdk\Model\Environment $environment 
     *
     * @return $this
     */
    public function setEnvironment($environment)
    {
        $this->container['environment'] = $environment;

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
     * @param string $external_id The external id helps to identify the entity and a subsequent creation of an entity with the same ID will not create a new entity.
     *
     * @return $this
     */
    public function setExternalId($external_id)
    {
        if (!is_null($external_id) && (mb_strlen($external_id) > 100)) {
            throw new \InvalidArgumentException('invalid length for $external_id when calling TransactionInvoice., must be smaller than or equal to 100.');
        }
        if (!is_null($external_id) && (mb_strlen($external_id) < 1)) {
            throw new \InvalidArgumentException('invalid length for $external_id when calling TransactionInvoice., must be bigger than or equal to 1.');
        }

        $this->container['external_id'] = $external_id;

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
     * Gets line_items
     *
     * @return \Wallee\Sdk\Model\LineItem[]
     */
    public function getLineItems()
    {
        return $this->container['line_items'];
    }

    /**
     * Sets line_items
     *
     * @param \Wallee\Sdk\Model\LineItem[] $line_items 
     *
     * @return $this
     */
    public function setLineItems($line_items)
    {
        $this->container['line_items'] = $line_items;

        return $this;
    }
    

    /**
     * Gets merchant_reference
     *
     * @return string
     */
    public function getMerchantReference()
    {
        return $this->container['merchant_reference'];
    }

    /**
     * Sets merchant_reference
     *
     * @param string $merchant_reference 
     *
     * @return $this
     */
    public function setMerchantReference($merchant_reference)
    {
        if (!is_null($merchant_reference) && (mb_strlen($merchant_reference) > 100)) {
            throw new \InvalidArgumentException('invalid length for $merchant_reference when calling TransactionInvoice., must be smaller than or equal to 100.');
        }

        $this->container['merchant_reference'] = $merchant_reference;

        return $this;
    }
    

    /**
     * Gets outstanding_amount
     *
     * @return float
     */
    public function getOutstandingAmount()
    {
        return $this->container['outstanding_amount'];
    }

    /**
     * Sets outstanding_amount
     *
     * @param float $outstanding_amount The outstanding amount indicates how much the buyer owes the merchant. A negative amount indicates that the invoice is overpaid.
     *
     * @return $this
     */
    public function setOutstandingAmount($outstanding_amount)
    {
        $this->container['outstanding_amount'] = $outstanding_amount;

        return $this;
    }
    

    /**
     * Gets paid_on
     *
     * @return \DateTime
     */
    public function getPaidOn()
    {
        return $this->container['paid_on'];
    }

    /**
     * Sets paid_on
     *
     * @param \DateTime $paid_on The date on which the invoice is marked as paid. Eventually this date lags behind of the actual paid date.
     *
     * @return $this
     */
    public function setPaidOn($paid_on)
    {
        $this->container['paid_on'] = $paid_on;

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
     * Gets state
     *
     * @return \Wallee\Sdk\Model\TransactionInvoiceState
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param \Wallee\Sdk\Model\TransactionInvoiceState $state 
     *
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }
    

    /**
     * Gets tax_amount
     *
     * @return float
     */
    public function getTaxAmount()
    {
        return $this->container['tax_amount'];
    }

    /**
     * Sets tax_amount
     *
     * @param float $tax_amount 
     *
     * @return $this
     */
    public function setTaxAmount($tax_amount)
    {
        $this->container['tax_amount'] = $tax_amount;

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
     * @param string $time_zone 
     *
     * @return $this
     */
    public function setTimeZone($time_zone)
    {
        $this->container['time_zone'] = $time_zone;

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


