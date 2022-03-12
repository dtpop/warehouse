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
 * SubscriptionProductVersion model
 *
 * @category    Class
 * @description 
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class SubscriptionProductVersion implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SubscriptionProductVersion';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'activated_on' => '\DateTime',
        'billing_cycle' => 'string',
        'comment' => 'string',
        'created_on' => '\DateTime',
        'default_currency' => 'string',
        'enabled_currencies' => 'string[]',
        'id' => 'int',
        'increment_number' => 'int',
        'linked_space_id' => 'int',
        'minimal_number_of_periods' => 'int',
        'name' => '\Wallee\Sdk\Model\DatabaseTranslatedString',
        'number_of_notice_periods' => 'int',
        'obsoleted_on' => '\DateTime',
        'planned_purge_date' => '\DateTime',
        'product' => '\Wallee\Sdk\Model\SubscriptionProduct',
        'reference' => 'string',
        'retiring_finished_on' => '\DateTime',
        'retiring_started_on' => '\DateTime',
        'state' => '\Wallee\Sdk\Model\SubscriptionProductVersionState',
        'tax_calculation' => '\Wallee\Sdk\Model\TaxCalculation',
        'version' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'activated_on' => 'date-time',
        'billing_cycle' => null,
        'comment' => null,
        'created_on' => 'date-time',
        'default_currency' => null,
        'enabled_currencies' => null,
        'id' => 'int64',
        'increment_number' => 'int32',
        'linked_space_id' => 'int64',
        'minimal_number_of_periods' => 'int32',
        'name' => null,
        'number_of_notice_periods' => 'int32',
        'obsoleted_on' => 'date-time',
        'planned_purge_date' => 'date-time',
        'product' => null,
        'reference' => null,
        'retiring_finished_on' => 'date-time',
        'retiring_started_on' => 'date-time',
        'state' => null,
        'tax_calculation' => null,
        'version' => 'int32'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'activated_on' => 'activatedOn',
        'billing_cycle' => 'billingCycle',
        'comment' => 'comment',
        'created_on' => 'createdOn',
        'default_currency' => 'defaultCurrency',
        'enabled_currencies' => 'enabledCurrencies',
        'id' => 'id',
        'increment_number' => 'incrementNumber',
        'linked_space_id' => 'linkedSpaceId',
        'minimal_number_of_periods' => 'minimalNumberOfPeriods',
        'name' => 'name',
        'number_of_notice_periods' => 'numberOfNoticePeriods',
        'obsoleted_on' => 'obsoletedOn',
        'planned_purge_date' => 'plannedPurgeDate',
        'product' => 'product',
        'reference' => 'reference',
        'retiring_finished_on' => 'retiringFinishedOn',
        'retiring_started_on' => 'retiringStartedOn',
        'state' => 'state',
        'tax_calculation' => 'taxCalculation',
        'version' => 'version'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'activated_on' => 'setActivatedOn',
        'billing_cycle' => 'setBillingCycle',
        'comment' => 'setComment',
        'created_on' => 'setCreatedOn',
        'default_currency' => 'setDefaultCurrency',
        'enabled_currencies' => 'setEnabledCurrencies',
        'id' => 'setId',
        'increment_number' => 'setIncrementNumber',
        'linked_space_id' => 'setLinkedSpaceId',
        'minimal_number_of_periods' => 'setMinimalNumberOfPeriods',
        'name' => 'setName',
        'number_of_notice_periods' => 'setNumberOfNoticePeriods',
        'obsoleted_on' => 'setObsoletedOn',
        'planned_purge_date' => 'setPlannedPurgeDate',
        'product' => 'setProduct',
        'reference' => 'setReference',
        'retiring_finished_on' => 'setRetiringFinishedOn',
        'retiring_started_on' => 'setRetiringStartedOn',
        'state' => 'setState',
        'tax_calculation' => 'setTaxCalculation',
        'version' => 'setVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'activated_on' => 'getActivatedOn',
        'billing_cycle' => 'getBillingCycle',
        'comment' => 'getComment',
        'created_on' => 'getCreatedOn',
        'default_currency' => 'getDefaultCurrency',
        'enabled_currencies' => 'getEnabledCurrencies',
        'id' => 'getId',
        'increment_number' => 'getIncrementNumber',
        'linked_space_id' => 'getLinkedSpaceId',
        'minimal_number_of_periods' => 'getMinimalNumberOfPeriods',
        'name' => 'getName',
        'number_of_notice_periods' => 'getNumberOfNoticePeriods',
        'obsoleted_on' => 'getObsoletedOn',
        'planned_purge_date' => 'getPlannedPurgeDate',
        'product' => 'getProduct',
        'reference' => 'getReference',
        'retiring_finished_on' => 'getRetiringFinishedOn',
        'retiring_started_on' => 'getRetiringStartedOn',
        'state' => 'getState',
        'tax_calculation' => 'getTaxCalculation',
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
        
        $this->container['activated_on'] = isset($data['activated_on']) ? $data['activated_on'] : null;
        
        $this->container['billing_cycle'] = isset($data['billing_cycle']) ? $data['billing_cycle'] : null;
        
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
        
        $this->container['created_on'] = isset($data['created_on']) ? $data['created_on'] : null;
        
        $this->container['default_currency'] = isset($data['default_currency']) ? $data['default_currency'] : null;
        
        $this->container['enabled_currencies'] = isset($data['enabled_currencies']) ? $data['enabled_currencies'] : null;
        
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        
        $this->container['increment_number'] = isset($data['increment_number']) ? $data['increment_number'] : null;
        
        $this->container['linked_space_id'] = isset($data['linked_space_id']) ? $data['linked_space_id'] : null;
        
        $this->container['minimal_number_of_periods'] = isset($data['minimal_number_of_periods']) ? $data['minimal_number_of_periods'] : null;
        
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        
        $this->container['number_of_notice_periods'] = isset($data['number_of_notice_periods']) ? $data['number_of_notice_periods'] : null;
        
        $this->container['obsoleted_on'] = isset($data['obsoleted_on']) ? $data['obsoleted_on'] : null;
        
        $this->container['planned_purge_date'] = isset($data['planned_purge_date']) ? $data['planned_purge_date'] : null;
        
        $this->container['product'] = isset($data['product']) ? $data['product'] : null;
        
        $this->container['reference'] = isset($data['reference']) ? $data['reference'] : null;
        
        $this->container['retiring_finished_on'] = isset($data['retiring_finished_on']) ? $data['retiring_finished_on'] : null;
        
        $this->container['retiring_started_on'] = isset($data['retiring_started_on']) ? $data['retiring_started_on'] : null;
        
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        
        $this->container['tax_calculation'] = isset($data['tax_calculation']) ? $data['tax_calculation'] : null;
        
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

        if (!is_null($this->container['reference']) && (mb_strlen($this->container['reference']) > 125)) {
            $invalidProperties[] = "invalid value for 'reference', the character length must be smaller than or equal to 125.";
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
     * Gets activated_on
     *
     * @return \DateTime
     */
    public function getActivatedOn()
    {
        return $this->container['activated_on'];
    }

    /**
     * Sets activated_on
     *
     * @param \DateTime $activated_on 
     *
     * @return $this
     */
    public function setActivatedOn($activated_on)
    {
        $this->container['activated_on'] = $activated_on;

        return $this;
    }
    

    /**
     * Gets billing_cycle
     *
     * @return string
     */
    public function getBillingCycle()
    {
        return $this->container['billing_cycle'];
    }

    /**
     * Sets billing_cycle
     *
     * @param string $billing_cycle The billing cycle determines the rhythm with which the subscriber is billed. The charging may have different rhythm.
     *
     * @return $this
     */
    public function setBillingCycle($billing_cycle)
    {
        $this->container['billing_cycle'] = $billing_cycle;

        return $this;
    }
    

    /**
     * Gets comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
     * Sets comment
     *
     * @param string $comment The comment allows to provide a internal comment for the version. It helps to document why a product was changed. The comment is not disclosed to the subscriber.
     *
     * @return $this
     */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;

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
     * Gets default_currency
     *
     * @return string
     */
    public function getDefaultCurrency()
    {
        return $this->container['default_currency'];
    }

    /**
     * Sets default_currency
     *
     * @param string $default_currency The default currency has to be used in all fees.
     *
     * @return $this
     */
    public function setDefaultCurrency($default_currency)
    {
        $this->container['default_currency'] = $default_currency;

        return $this;
    }
    

    /**
     * Gets enabled_currencies
     *
     * @return string[]
     */
    public function getEnabledCurrencies()
    {
        return $this->container['enabled_currencies'];
    }

    /**
     * Sets enabled_currencies
     *
     * @param string[] $enabled_currencies The currencies which are enabled can be selected to define component fees. Currencies which are not enabled cannot be used to define fees.
     *
     * @return $this
     */
    public function setEnabledCurrencies($enabled_currencies)
    {
        $this->container['enabled_currencies'] = $enabled_currencies;

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
     * Gets increment_number
     *
     * @return int
     */
    public function getIncrementNumber()
    {
        return $this->container['increment_number'];
    }

    /**
     * Sets increment_number
     *
     * @param int $increment_number The increment number represents the version number incremented whenever a new version is activated.
     *
     * @return $this
     */
    public function setIncrementNumber($increment_number)
    {
        $this->container['increment_number'] = $increment_number;

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
     * Gets minimal_number_of_periods
     *
     * @return int
     */
    public function getMinimalNumberOfPeriods()
    {
        return $this->container['minimal_number_of_periods'];
    }

    /**
     * Sets minimal_number_of_periods
     *
     * @param int $minimal_number_of_periods The minimal number of periods determines how long the subscription has to run before the subscription can be terminated.
     *
     * @return $this
     */
    public function setMinimalNumberOfPeriods($minimal_number_of_periods)
    {
        $this->container['minimal_number_of_periods'] = $minimal_number_of_periods;

        return $this;
    }
    

    /**
     * Gets name
     *
     * @return \Wallee\Sdk\Model\DatabaseTranslatedString
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param \Wallee\Sdk\Model\DatabaseTranslatedString $name The product version name is the name of the product which is shown to the user for the version. When the visible product name should be changed for a particular product a new version has to be created which contains the new name of the product.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }
    

    /**
     * Gets number_of_notice_periods
     *
     * @return int
     */
    public function getNumberOfNoticePeriods()
    {
        return $this->container['number_of_notice_periods'];
    }

    /**
     * Sets number_of_notice_periods
     *
     * @param int $number_of_notice_periods The number of notice periods determines the number of periods which need to be paid between the request to terminate the subscription and the final period.
     *
     * @return $this
     */
    public function setNumberOfNoticePeriods($number_of_notice_periods)
    {
        $this->container['number_of_notice_periods'] = $number_of_notice_periods;

        return $this;
    }
    

    /**
     * Gets obsoleted_on
     *
     * @return \DateTime
     */
    public function getObsoletedOn()
    {
        return $this->container['obsoleted_on'];
    }

    /**
     * Sets obsoleted_on
     *
     * @param \DateTime $obsoleted_on 
     *
     * @return $this
     */
    public function setObsoletedOn($obsoleted_on)
    {
        $this->container['obsoleted_on'] = $obsoleted_on;

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
     * Gets product
     *
     * @return \Wallee\Sdk\Model\SubscriptionProduct
     */
    public function getProduct()
    {
        return $this->container['product'];
    }

    /**
     * Sets product
     *
     * @param \Wallee\Sdk\Model\SubscriptionProduct $product Each product version is linked to a product.
     *
     * @return $this
     */
    public function setProduct($product)
    {
        $this->container['product'] = $product;

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
     * @param string $reference The product version reference helps to identify the version. The reference is generated out of the product reference.
     *
     * @return $this
     */
    public function setReference($reference)
    {
        if (!is_null($reference) && (mb_strlen($reference) > 125)) {
            throw new \InvalidArgumentException('invalid length for $reference when calling SubscriptionProductVersion., must be smaller than or equal to 125.');
        }

        $this->container['reference'] = $reference;

        return $this;
    }
    

    /**
     * Gets retiring_finished_on
     *
     * @return \DateTime
     */
    public function getRetiringFinishedOn()
    {
        return $this->container['retiring_finished_on'];
    }

    /**
     * Sets retiring_finished_on
     *
     * @param \DateTime $retiring_finished_on 
     *
     * @return $this
     */
    public function setRetiringFinishedOn($retiring_finished_on)
    {
        $this->container['retiring_finished_on'] = $retiring_finished_on;

        return $this;
    }
    

    /**
     * Gets retiring_started_on
     *
     * @return \DateTime
     */
    public function getRetiringStartedOn()
    {
        return $this->container['retiring_started_on'];
    }

    /**
     * Sets retiring_started_on
     *
     * @param \DateTime $retiring_started_on 
     *
     * @return $this
     */
    public function setRetiringStartedOn($retiring_started_on)
    {
        $this->container['retiring_started_on'] = $retiring_started_on;

        return $this;
    }
    

    /**
     * Gets state
     *
     * @return \Wallee\Sdk\Model\SubscriptionProductVersionState
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param \Wallee\Sdk\Model\SubscriptionProductVersionState $state 
     *
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }
    

    /**
     * Gets tax_calculation
     *
     * @return \Wallee\Sdk\Model\TaxCalculation
     */
    public function getTaxCalculation()
    {
        return $this->container['tax_calculation'];
    }

    /**
     * Sets tax_calculation
     *
     * @param \Wallee\Sdk\Model\TaxCalculation $tax_calculation Strategy that is used for tax calculation in fees.
     *
     * @return $this
     */
    public function setTaxCalculation($tax_calculation)
    {
        $this->container['tax_calculation'] = $tax_calculation;

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


