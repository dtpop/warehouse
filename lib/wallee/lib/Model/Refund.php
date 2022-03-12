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
 * Refund model
 *
 * @category    Class
 * @description The refund represents a credit back to the customer. It can be issued by the merchant or by the customer (reversal).
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class Refund implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Refund';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'amount' => 'float',
        'base_line_items' => '\Wallee\Sdk\Model\LineItem[]',
        'completion' => 'int',
        'created_by' => 'int',
        'created_on' => '\DateTime',
        'environment' => '\Wallee\Sdk\Model\Environment',
        'external_id' => 'string',
        'failed_on' => '\DateTime',
        'failure_reason' => '\Wallee\Sdk\Model\FailureReason',
        'id' => 'int',
        'labels' => '\Wallee\Sdk\Model\Label[]',
        'language' => 'string',
        'line_items' => '\Wallee\Sdk\Model\LineItem[]',
        'linked_space_id' => 'int',
        'merchant_reference' => 'string',
        'next_update_on' => '\DateTime',
        'planned_purge_date' => '\DateTime',
        'processing_on' => '\DateTime',
        'processor_reference' => 'string',
        'reduced_line_items' => '\Wallee\Sdk\Model\LineItem[]',
        'reductions' => '\Wallee\Sdk\Model\LineItemReduction[]',
        'state' => '\Wallee\Sdk\Model\RefundState',
        'succeeded_on' => '\DateTime',
        'taxes' => '\Wallee\Sdk\Model\Tax[]',
        'time_zone' => 'string',
        'timeout_on' => '\DateTime',
        'total_applied_fees' => 'float',
        'total_settled_amount' => 'float',
        'transaction' => '\Wallee\Sdk\Model\Transaction',
        'type' => '\Wallee\Sdk\Model\RefundType',
        'updated_invoice' => 'int',
        'version' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'amount' => null,
        'base_line_items' => null,
        'completion' => 'int64',
        'created_by' => 'int64',
        'created_on' => 'date-time',
        'environment' => null,
        'external_id' => null,
        'failed_on' => 'date-time',
        'failure_reason' => null,
        'id' => 'int64',
        'labels' => null,
        'language' => null,
        'line_items' => null,
        'linked_space_id' => 'int64',
        'merchant_reference' => null,
        'next_update_on' => 'date-time',
        'planned_purge_date' => 'date-time',
        'processing_on' => 'date-time',
        'processor_reference' => null,
        'reduced_line_items' => null,
        'reductions' => null,
        'state' => null,
        'succeeded_on' => 'date-time',
        'taxes' => null,
        'time_zone' => null,
        'timeout_on' => 'date-time',
        'total_applied_fees' => null,
        'total_settled_amount' => null,
        'transaction' => null,
        'type' => null,
        'updated_invoice' => 'int64',
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
        'base_line_items' => 'baseLineItems',
        'completion' => 'completion',
        'created_by' => 'createdBy',
        'created_on' => 'createdOn',
        'environment' => 'environment',
        'external_id' => 'externalId',
        'failed_on' => 'failedOn',
        'failure_reason' => 'failureReason',
        'id' => 'id',
        'labels' => 'labels',
        'language' => 'language',
        'line_items' => 'lineItems',
        'linked_space_id' => 'linkedSpaceId',
        'merchant_reference' => 'merchantReference',
        'next_update_on' => 'nextUpdateOn',
        'planned_purge_date' => 'plannedPurgeDate',
        'processing_on' => 'processingOn',
        'processor_reference' => 'processorReference',
        'reduced_line_items' => 'reducedLineItems',
        'reductions' => 'reductions',
        'state' => 'state',
        'succeeded_on' => 'succeededOn',
        'taxes' => 'taxes',
        'time_zone' => 'timeZone',
        'timeout_on' => 'timeoutOn',
        'total_applied_fees' => 'totalAppliedFees',
        'total_settled_amount' => 'totalSettledAmount',
        'transaction' => 'transaction',
        'type' => 'type',
        'updated_invoice' => 'updatedInvoice',
        'version' => 'version'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amount' => 'setAmount',
        'base_line_items' => 'setBaseLineItems',
        'completion' => 'setCompletion',
        'created_by' => 'setCreatedBy',
        'created_on' => 'setCreatedOn',
        'environment' => 'setEnvironment',
        'external_id' => 'setExternalId',
        'failed_on' => 'setFailedOn',
        'failure_reason' => 'setFailureReason',
        'id' => 'setId',
        'labels' => 'setLabels',
        'language' => 'setLanguage',
        'line_items' => 'setLineItems',
        'linked_space_id' => 'setLinkedSpaceId',
        'merchant_reference' => 'setMerchantReference',
        'next_update_on' => 'setNextUpdateOn',
        'planned_purge_date' => 'setPlannedPurgeDate',
        'processing_on' => 'setProcessingOn',
        'processor_reference' => 'setProcessorReference',
        'reduced_line_items' => 'setReducedLineItems',
        'reductions' => 'setReductions',
        'state' => 'setState',
        'succeeded_on' => 'setSucceededOn',
        'taxes' => 'setTaxes',
        'time_zone' => 'setTimeZone',
        'timeout_on' => 'setTimeoutOn',
        'total_applied_fees' => 'setTotalAppliedFees',
        'total_settled_amount' => 'setTotalSettledAmount',
        'transaction' => 'setTransaction',
        'type' => 'setType',
        'updated_invoice' => 'setUpdatedInvoice',
        'version' => 'setVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amount' => 'getAmount',
        'base_line_items' => 'getBaseLineItems',
        'completion' => 'getCompletion',
        'created_by' => 'getCreatedBy',
        'created_on' => 'getCreatedOn',
        'environment' => 'getEnvironment',
        'external_id' => 'getExternalId',
        'failed_on' => 'getFailedOn',
        'failure_reason' => 'getFailureReason',
        'id' => 'getId',
        'labels' => 'getLabels',
        'language' => 'getLanguage',
        'line_items' => 'getLineItems',
        'linked_space_id' => 'getLinkedSpaceId',
        'merchant_reference' => 'getMerchantReference',
        'next_update_on' => 'getNextUpdateOn',
        'planned_purge_date' => 'getPlannedPurgeDate',
        'processing_on' => 'getProcessingOn',
        'processor_reference' => 'getProcessorReference',
        'reduced_line_items' => 'getReducedLineItems',
        'reductions' => 'getReductions',
        'state' => 'getState',
        'succeeded_on' => 'getSucceededOn',
        'taxes' => 'getTaxes',
        'time_zone' => 'getTimeZone',
        'timeout_on' => 'getTimeoutOn',
        'total_applied_fees' => 'getTotalAppliedFees',
        'total_settled_amount' => 'getTotalSettledAmount',
        'transaction' => 'getTransaction',
        'type' => 'getType',
        'updated_invoice' => 'getUpdatedInvoice',
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
        
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        
        $this->container['base_line_items'] = isset($data['base_line_items']) ? $data['base_line_items'] : null;
        
        $this->container['completion'] = isset($data['completion']) ? $data['completion'] : null;
        
        $this->container['created_by'] = isset($data['created_by']) ? $data['created_by'] : null;
        
        $this->container['created_on'] = isset($data['created_on']) ? $data['created_on'] : null;
        
        $this->container['environment'] = isset($data['environment']) ? $data['environment'] : null;
        
        $this->container['external_id'] = isset($data['external_id']) ? $data['external_id'] : null;
        
        $this->container['failed_on'] = isset($data['failed_on']) ? $data['failed_on'] : null;
        
        $this->container['failure_reason'] = isset($data['failure_reason']) ? $data['failure_reason'] : null;
        
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        
        $this->container['line_items'] = isset($data['line_items']) ? $data['line_items'] : null;
        
        $this->container['linked_space_id'] = isset($data['linked_space_id']) ? $data['linked_space_id'] : null;
        
        $this->container['merchant_reference'] = isset($data['merchant_reference']) ? $data['merchant_reference'] : null;
        
        $this->container['next_update_on'] = isset($data['next_update_on']) ? $data['next_update_on'] : null;
        
        $this->container['planned_purge_date'] = isset($data['planned_purge_date']) ? $data['planned_purge_date'] : null;
        
        $this->container['processing_on'] = isset($data['processing_on']) ? $data['processing_on'] : null;
        
        $this->container['processor_reference'] = isset($data['processor_reference']) ? $data['processor_reference'] : null;
        
        $this->container['reduced_line_items'] = isset($data['reduced_line_items']) ? $data['reduced_line_items'] : null;
        
        $this->container['reductions'] = isset($data['reductions']) ? $data['reductions'] : null;
        
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        
        $this->container['succeeded_on'] = isset($data['succeeded_on']) ? $data['succeeded_on'] : null;
        
        $this->container['taxes'] = isset($data['taxes']) ? $data['taxes'] : null;
        
        $this->container['time_zone'] = isset($data['time_zone']) ? $data['time_zone'] : null;
        
        $this->container['timeout_on'] = isset($data['timeout_on']) ? $data['timeout_on'] : null;
        
        $this->container['total_applied_fees'] = isset($data['total_applied_fees']) ? $data['total_applied_fees'] : null;
        
        $this->container['total_settled_amount'] = isset($data['total_settled_amount']) ? $data['total_settled_amount'] : null;
        
        $this->container['transaction'] = isset($data['transaction']) ? $data['transaction'] : null;
        
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        
        $this->container['updated_invoice'] = isset($data['updated_invoice']) ? $data['updated_invoice'] : null;
        
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

        if (!is_null($this->container['merchant_reference']) && (mb_strlen($this->container['merchant_reference']) > 100)) {
            $invalidProperties[] = "invalid value for 'merchant_reference', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['processor_reference']) && (mb_strlen($this->container['processor_reference']) > 150)) {
            $invalidProperties[] = "invalid value for 'processor_reference', the character length must be smaller than or equal to 150.";
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
     * Gets base_line_items
     *
     * @return \Wallee\Sdk\Model\LineItem[]
     */
    public function getBaseLineItems()
    {
        return $this->container['base_line_items'];
    }

    /**
     * Sets base_line_items
     *
     * @param \Wallee\Sdk\Model\LineItem[] $base_line_items 
     *
     * @return $this
     */
    public function setBaseLineItems($base_line_items)
    {
        $this->container['base_line_items'] = $base_line_items;

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
     * @param int $created_by 
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
     * @param string $external_id The external id helps to identify duplicate calls to the refund service. As such the external ID has to be unique per transaction.
     *
     * @return $this
     */
    public function setExternalId($external_id)
    {
        if (!is_null($external_id) && (mb_strlen($external_id) > 100)) {
            throw new \InvalidArgumentException('invalid length for $external_id when calling Refund., must be smaller than or equal to 100.');
        }
        if (!is_null($external_id) && (mb_strlen($external_id) < 1)) {
            throw new \InvalidArgumentException('invalid length for $external_id when calling Refund., must be bigger than or equal to 1.');
        }

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
     * Gets failure_reason
     *
     * @return \Wallee\Sdk\Model\FailureReason
     */
    public function getFailureReason()
    {
        return $this->container['failure_reason'];
    }

    /**
     * Sets failure_reason
     *
     * @param \Wallee\Sdk\Model\FailureReason $failure_reason 
     *
     * @return $this
     */
    public function setFailureReason($failure_reason)
    {
        $this->container['failure_reason'] = $failure_reason;

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
     * Gets labels
     *
     * @return \Wallee\Sdk\Model\Label[]
     */
    public function getLabels()
    {
        return $this->container['labels'];
    }

    /**
     * Sets labels
     *
     * @param \Wallee\Sdk\Model\Label[] $labels 
     *
     * @return $this
     */
    public function setLabels($labels)
    {
        $this->container['labels'] = $labels;

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
            throw new \InvalidArgumentException('invalid length for $merchant_reference when calling Refund., must be smaller than or equal to 100.');
        }

        $this->container['merchant_reference'] = $merchant_reference;

        return $this;
    }
    

    /**
     * Gets next_update_on
     *
     * @return \DateTime
     */
    public function getNextUpdateOn()
    {
        return $this->container['next_update_on'];
    }

    /**
     * Sets next_update_on
     *
     * @param \DateTime $next_update_on 
     *
     * @return $this
     */
    public function setNextUpdateOn($next_update_on)
    {
        $this->container['next_update_on'] = $next_update_on;

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
     * Gets processing_on
     *
     * @return \DateTime
     */
    public function getProcessingOn()
    {
        return $this->container['processing_on'];
    }

    /**
     * Sets processing_on
     *
     * @param \DateTime $processing_on 
     *
     * @return $this
     */
    public function setProcessingOn($processing_on)
    {
        $this->container['processing_on'] = $processing_on;

        return $this;
    }
    

    /**
     * Gets processor_reference
     *
     * @return string
     */
    public function getProcessorReference()
    {
        return $this->container['processor_reference'];
    }

    /**
     * Sets processor_reference
     *
     * @param string $processor_reference 
     *
     * @return $this
     */
    public function setProcessorReference($processor_reference)
    {
        if (!is_null($processor_reference) && (mb_strlen($processor_reference) > 150)) {
            throw new \InvalidArgumentException('invalid length for $processor_reference when calling Refund., must be smaller than or equal to 150.');
        }

        $this->container['processor_reference'] = $processor_reference;

        return $this;
    }
    

    /**
     * Gets reduced_line_items
     *
     * @return \Wallee\Sdk\Model\LineItem[]
     */
    public function getReducedLineItems()
    {
        return $this->container['reduced_line_items'];
    }

    /**
     * Sets reduced_line_items
     *
     * @param \Wallee\Sdk\Model\LineItem[] $reduced_line_items 
     *
     * @return $this
     */
    public function setReducedLineItems($reduced_line_items)
    {
        $this->container['reduced_line_items'] = $reduced_line_items;

        return $this;
    }
    

    /**
     * Gets reductions
     *
     * @return \Wallee\Sdk\Model\LineItemReduction[]
     */
    public function getReductions()
    {
        return $this->container['reductions'];
    }

    /**
     * Sets reductions
     *
     * @param \Wallee\Sdk\Model\LineItemReduction[] $reductions 
     *
     * @return $this
     */
    public function setReductions($reductions)
    {
        $this->container['reductions'] = $reductions;

        return $this;
    }
    

    /**
     * Gets state
     *
     * @return \Wallee\Sdk\Model\RefundState
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param \Wallee\Sdk\Model\RefundState $state 
     *
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }
    

    /**
     * Gets succeeded_on
     *
     * @return \DateTime
     */
    public function getSucceededOn()
    {
        return $this->container['succeeded_on'];
    }

    /**
     * Sets succeeded_on
     *
     * @param \DateTime $succeeded_on 
     *
     * @return $this
     */
    public function setSucceededOn($succeeded_on)
    {
        $this->container['succeeded_on'] = $succeeded_on;

        return $this;
    }
    

    /**
     * Gets taxes
     *
     * @return \Wallee\Sdk\Model\Tax[]
     */
    public function getTaxes()
    {
        return $this->container['taxes'];
    }

    /**
     * Sets taxes
     *
     * @param \Wallee\Sdk\Model\Tax[] $taxes 
     *
     * @return $this
     */
    public function setTaxes($taxes)
    {
        $this->container['taxes'] = $taxes;

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
     * Gets timeout_on
     *
     * @return \DateTime
     */
    public function getTimeoutOn()
    {
        return $this->container['timeout_on'];
    }

    /**
     * Sets timeout_on
     *
     * @param \DateTime $timeout_on 
     *
     * @return $this
     */
    public function setTimeoutOn($timeout_on)
    {
        $this->container['timeout_on'] = $timeout_on;

        return $this;
    }
    

    /**
     * Gets total_applied_fees
     *
     * @return float
     */
    public function getTotalAppliedFees()
    {
        return $this->container['total_applied_fees'];
    }

    /**
     * Sets total_applied_fees
     *
     * @param float $total_applied_fees The total applied fees is the sum of all fees that have been applied so far.
     *
     * @return $this
     */
    public function setTotalAppliedFees($total_applied_fees)
    {
        $this->container['total_applied_fees'] = $total_applied_fees;

        return $this;
    }
    

    /**
     * Gets total_settled_amount
     *
     * @return float
     */
    public function getTotalSettledAmount()
    {
        return $this->container['total_settled_amount'];
    }

    /**
     * Sets total_settled_amount
     *
     * @param float $total_settled_amount The total settled amount is the total amount which has been settled so far.
     *
     * @return $this
     */
    public function setTotalSettledAmount($total_settled_amount)
    {
        $this->container['total_settled_amount'] = $total_settled_amount;

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
     * @return \Wallee\Sdk\Model\RefundType
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \Wallee\Sdk\Model\RefundType $type 
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }
    

    /**
     * Gets updated_invoice
     *
     * @return int
     */
    public function getUpdatedInvoice()
    {
        return $this->container['updated_invoice'];
    }

    /**
     * Sets updated_invoice
     *
     * @param int $updated_invoice 
     *
     * @return $this
     */
    public function setUpdatedInvoice($updated_invoice)
    {
        $this->container['updated_invoice'] = $updated_invoice;

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


