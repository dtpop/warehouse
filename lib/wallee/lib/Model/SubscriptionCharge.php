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
 * SubscriptionCharge model
 *
 * @category    Class
 * @description The subscription charge represents a single charge carried out for a particular subscription.
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class SubscriptionCharge implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SubscriptionCharge';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'created_on' => '\DateTime',
        'discarded_by' => 'int',
        'discarded_on' => '\DateTime',
        'external_id' => 'string',
        'failed_on' => '\DateTime',
        'failed_url' => 'string',
        'id' => 'int',
        'language' => 'string',
        'ledger_entries' => '\Wallee\Sdk\Model\SubscriptionLedgerEntry[]',
        'linked_space_id' => 'int',
        'planned_execution_date' => '\DateTime',
        'planned_purge_date' => '\DateTime',
        'processing_type' => '\Wallee\Sdk\Model\SubscriptionChargeProcessingType',
        'reference' => 'string',
        'state' => '\Wallee\Sdk\Model\SubscriptionChargeState',
        'subscription' => '\Wallee\Sdk\Model\Subscription',
        'succeed_on' => '\DateTime',
        'success_url' => 'string',
        'transaction' => '\Wallee\Sdk\Model\Transaction',
        'type' => '\Wallee\Sdk\Model\SubscriptionChargeType',
        'version' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'created_on' => 'date-time',
        'discarded_by' => 'int64',
        'discarded_on' => 'date-time',
        'external_id' => null,
        'failed_on' => 'date-time',
        'failed_url' => null,
        'id' => 'int64',
        'language' => null,
        'ledger_entries' => null,
        'linked_space_id' => 'int64',
        'planned_execution_date' => 'date-time',
        'planned_purge_date' => 'date-time',
        'processing_type' => null,
        'reference' => null,
        'state' => null,
        'subscription' => null,
        'succeed_on' => 'date-time',
        'success_url' => null,
        'transaction' => null,
        'type' => null,
        'version' => 'int32'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'created_on' => 'createdOn',
        'discarded_by' => 'discardedBy',
        'discarded_on' => 'discardedOn',
        'external_id' => 'externalId',
        'failed_on' => 'failedOn',
        'failed_url' => 'failedUrl',
        'id' => 'id',
        'language' => 'language',
        'ledger_entries' => 'ledgerEntries',
        'linked_space_id' => 'linkedSpaceId',
        'planned_execution_date' => 'plannedExecutionDate',
        'planned_purge_date' => 'plannedPurgeDate',
        'processing_type' => 'processingType',
        'reference' => 'reference',
        'state' => 'state',
        'subscription' => 'subscription',
        'succeed_on' => 'succeedOn',
        'success_url' => 'successUrl',
        'transaction' => 'transaction',
        'type' => 'type',
        'version' => 'version'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'created_on' => 'setCreatedOn',
        'discarded_by' => 'setDiscardedBy',
        'discarded_on' => 'setDiscardedOn',
        'external_id' => 'setExternalId',
        'failed_on' => 'setFailedOn',
        'failed_url' => 'setFailedUrl',
        'id' => 'setId',
        'language' => 'setLanguage',
        'ledger_entries' => 'setLedgerEntries',
        'linked_space_id' => 'setLinkedSpaceId',
        'planned_execution_date' => 'setPlannedExecutionDate',
        'planned_purge_date' => 'setPlannedPurgeDate',
        'processing_type' => 'setProcessingType',
        'reference' => 'setReference',
        'state' => 'setState',
        'subscription' => 'setSubscription',
        'succeed_on' => 'setSucceedOn',
        'success_url' => 'setSuccessUrl',
        'transaction' => 'setTransaction',
        'type' => 'setType',
        'version' => 'setVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'created_on' => 'getCreatedOn',
        'discarded_by' => 'getDiscardedBy',
        'discarded_on' => 'getDiscardedOn',
        'external_id' => 'getExternalId',
        'failed_on' => 'getFailedOn',
        'failed_url' => 'getFailedUrl',
        'id' => 'getId',
        'language' => 'getLanguage',
        'ledger_entries' => 'getLedgerEntries',
        'linked_space_id' => 'getLinkedSpaceId',
        'planned_execution_date' => 'getPlannedExecutionDate',
        'planned_purge_date' => 'getPlannedPurgeDate',
        'processing_type' => 'getProcessingType',
        'reference' => 'getReference',
        'state' => 'getState',
        'subscription' => 'getSubscription',
        'succeed_on' => 'getSucceedOn',
        'success_url' => 'getSuccessUrl',
        'transaction' => 'getTransaction',
        'type' => 'getType',
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
        
        $this->container['created_on'] = isset($data['created_on']) ? $data['created_on'] : null;
        
        $this->container['discarded_by'] = isset($data['discarded_by']) ? $data['discarded_by'] : null;
        
        $this->container['discarded_on'] = isset($data['discarded_on']) ? $data['discarded_on'] : null;
        
        $this->container['external_id'] = isset($data['external_id']) ? $data['external_id'] : null;
        
        $this->container['failed_on'] = isset($data['failed_on']) ? $data['failed_on'] : null;
        
        $this->container['failed_url'] = isset($data['failed_url']) ? $data['failed_url'] : null;
        
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        
        $this->container['ledger_entries'] = isset($data['ledger_entries']) ? $data['ledger_entries'] : null;
        
        $this->container['linked_space_id'] = isset($data['linked_space_id']) ? $data['linked_space_id'] : null;
        
        $this->container['planned_execution_date'] = isset($data['planned_execution_date']) ? $data['planned_execution_date'] : null;
        
        $this->container['planned_purge_date'] = isset($data['planned_purge_date']) ? $data['planned_purge_date'] : null;
        
        $this->container['processing_type'] = isset($data['processing_type']) ? $data['processing_type'] : null;
        
        $this->container['reference'] = isset($data['reference']) ? $data['reference'] : null;
        
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        
        $this->container['subscription'] = isset($data['subscription']) ? $data['subscription'] : null;
        
        $this->container['succeed_on'] = isset($data['succeed_on']) ? $data['succeed_on'] : null;
        
        $this->container['success_url'] = isset($data['success_url']) ? $data['success_url'] : null;
        
        $this->container['transaction'] = isset($data['transaction']) ? $data['transaction'] : null;
        
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        
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

        if (!is_null($this->container['failed_url']) && (mb_strlen($this->container['failed_url']) > 500)) {
            $invalidProperties[] = "invalid value for 'failed_url', the character length must be smaller than or equal to 500.";
        }

        if (!is_null($this->container['failed_url']) && (mb_strlen($this->container['failed_url']) < 9)) {
            $invalidProperties[] = "invalid value for 'failed_url', the character length must be bigger than or equal to 9.";
        }

        if (!is_null($this->container['reference']) && (mb_strlen($this->container['reference']) > 100)) {
            $invalidProperties[] = "invalid value for 'reference', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['success_url']) && (mb_strlen($this->container['success_url']) > 500)) {
            $invalidProperties[] = "invalid value for 'success_url', the character length must be smaller than or equal to 500.";
        }

        if (!is_null($this->container['success_url']) && (mb_strlen($this->container['success_url']) < 9)) {
            $invalidProperties[] = "invalid value for 'success_url', the character length must be bigger than or equal to 9.";
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
     * @param \DateTime $created_on 
     *
     * @return $this
     */
    public function setCreatedOn($created_on)
    {
        $this->container['created_on'] = $created_on;

        return $this;
    }
    

    /**
     * Gets discarded_by
     *
     * @return int
     */
    public function getDiscardedBy()
    {
        return $this->container['discarded_by'];
    }

    /**
     * Sets discarded_by
     *
     * @param int $discarded_by 
     *
     * @return $this
     */
    public function setDiscardedBy($discarded_by)
    {
        $this->container['discarded_by'] = $discarded_by;

        return $this;
    }
    

    /**
     * Gets discarded_on
     *
     * @return \DateTime
     */
    public function getDiscardedOn()
    {
        return $this->container['discarded_on'];
    }

    /**
     * Sets discarded_on
     *
     * @param \DateTime $discarded_on 
     *
     * @return $this
     */
    public function setDiscardedOn($discarded_on)
    {
        $this->container['discarded_on'] = $discarded_on;

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
     * @param string $external_id A client generated nonce which identifies the entity to be created. Subsequent creation requests with the same external ID will not create new entities but return the initially created entity instead.
     *
     * @return $this
     */
    public function setExternalId($external_id)
    {
        $this->container['external_id'] = $external_id;

        return $this;
    }
    

    /**
     * Gets failed_on
     *
     * @return \DateTime
     */
    public function getFailedOn()
    {
        return $this->container['failed_on'];
    }

    /**
     * Sets failed_on
     *
     * @param \DateTime $failed_on 
     *
     * @return $this
     */
    public function setFailedOn($failed_on)
    {
        $this->container['failed_on'] = $failed_on;

        return $this;
    }
    

    /**
     * Gets failed_url
     *
     * @return string
     */
    public function getFailedUrl()
    {
        return $this->container['failed_url'];
    }

    /**
     * Sets failed_url
     *
     * @param string $failed_url The user will be redirected to failed URL when the transaction could not be authorized or completed. In case no failed URL is specified a default failed page will be displayed.
     *
     * @return $this
     */
    public function setFailedUrl($failed_url)
    {
        if (!is_null($failed_url) && (mb_strlen($failed_url) > 500)) {
            throw new \InvalidArgumentException('invalid length for $failed_url when calling SubscriptionCharge., must be smaller than or equal to 500.');
        }
        if (!is_null($failed_url) && (mb_strlen($failed_url) < 9)) {
            throw new \InvalidArgumentException('invalid length for $failed_url when calling SubscriptionCharge., must be bigger than or equal to 9.');
        }

        $this->container['failed_url'] = $failed_url;

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
     * Gets ledger_entries
     *
     * @return \Wallee\Sdk\Model\SubscriptionLedgerEntry[]
     */
    public function getLedgerEntries()
    {
        return $this->container['ledger_entries'];
    }

    /**
     * Sets ledger_entries
     *
     * @param \Wallee\Sdk\Model\SubscriptionLedgerEntry[] $ledger_entries 
     *
     * @return $this
     */
    public function setLedgerEntries($ledger_entries)
    {
        $this->container['ledger_entries'] = $ledger_entries;

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
     * Gets planned_execution_date
     *
     * @return \DateTime
     */
    public function getPlannedExecutionDate()
    {
        return $this->container['planned_execution_date'];
    }

    /**
     * Sets planned_execution_date
     *
     * @param \DateTime $planned_execution_date 
     *
     * @return $this
     */
    public function setPlannedExecutionDate($planned_execution_date)
    {
        $this->container['planned_execution_date'] = $planned_execution_date;

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
     * Gets processing_type
     *
     * @return \Wallee\Sdk\Model\SubscriptionChargeProcessingType
     */
    public function getProcessingType()
    {
        return $this->container['processing_type'];
    }

    /**
     * Sets processing_type
     *
     * @param \Wallee\Sdk\Model\SubscriptionChargeProcessingType $processing_type 
     *
     * @return $this
     */
    public function setProcessingType($processing_type)
    {
        $this->container['processing_type'] = $processing_type;

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
        if (!is_null($reference) && (mb_strlen($reference) > 100)) {
            throw new \InvalidArgumentException('invalid length for $reference when calling SubscriptionCharge., must be smaller than or equal to 100.');
        }

        $this->container['reference'] = $reference;

        return $this;
    }
    

    /**
     * Gets state
     *
     * @return \Wallee\Sdk\Model\SubscriptionChargeState
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param \Wallee\Sdk\Model\SubscriptionChargeState $state 
     *
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }
    

    /**
     * Gets subscription
     *
     * @return \Wallee\Sdk\Model\Subscription
     */
    public function getSubscription()
    {
        return $this->container['subscription'];
    }

    /**
     * Sets subscription
     *
     * @param \Wallee\Sdk\Model\Subscription $subscription The field subscription indicates the subscription to which the charge belongs to.
     *
     * @return $this
     */
    public function setSubscription($subscription)
    {
        $this->container['subscription'] = $subscription;

        return $this;
    }
    

    /**
     * Gets succeed_on
     *
     * @return \DateTime
     */
    public function getSucceedOn()
    {
        return $this->container['succeed_on'];
    }

    /**
     * Sets succeed_on
     *
     * @param \DateTime $succeed_on 
     *
     * @return $this
     */
    public function setSucceedOn($succeed_on)
    {
        $this->container['succeed_on'] = $succeed_on;

        return $this;
    }
    

    /**
     * Gets success_url
     *
     * @return string
     */
    public function getSuccessUrl()
    {
        return $this->container['success_url'];
    }

    /**
     * Sets success_url
     *
     * @param string $success_url The user will be redirected to success URL when the transaction could be authorized or completed. In case no success URL is specified a default success page will be displayed.
     *
     * @return $this
     */
    public function setSuccessUrl($success_url)
    {
        if (!is_null($success_url) && (mb_strlen($success_url) > 500)) {
            throw new \InvalidArgumentException('invalid length for $success_url when calling SubscriptionCharge., must be smaller than or equal to 500.');
        }
        if (!is_null($success_url) && (mb_strlen($success_url) < 9)) {
            throw new \InvalidArgumentException('invalid length for $success_url when calling SubscriptionCharge., must be bigger than or equal to 9.');
        }

        $this->container['success_url'] = $success_url;

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
     * Gets type
     *
     * @return \Wallee\Sdk\Model\SubscriptionChargeType
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \Wallee\Sdk\Model\SubscriptionChargeType $type 
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

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


