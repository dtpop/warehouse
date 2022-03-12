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
 * InstallmentPlanConfiguration model
 *
 * @category    Class
 * @description The installment plan allows to setup a template for an installment.
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class InstallmentPlanConfiguration implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'InstallmentPlanConfiguration';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'base_currency' => 'string',
        'conditions' => 'int[]',
        'id' => 'int',
        'installment_fee' => 'float',
        'interest_rate' => 'float',
        'linked_space_id' => 'int',
        'minimal_amount' => 'float',
        'name' => 'string',
        'payment_method_configurations' => 'int[]',
        'planned_purge_date' => '\DateTime',
        'sort_order' => 'int',
        'space_reference' => '\Wallee\Sdk\Model\SpaceReference',
        'state' => '\Wallee\Sdk\Model\CreationEntityState',
        'tax_class' => '\Wallee\Sdk\Model\TaxClass',
        'terms_and_conditions' => '\Wallee\Sdk\Model\ModelResourcePath',
        'title' => '\Wallee\Sdk\Model\DatabaseTranslatedString',
        'version' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'base_currency' => null,
        'conditions' => 'int64',
        'id' => 'int64',
        'installment_fee' => null,
        'interest_rate' => null,
        'linked_space_id' => 'int64',
        'minimal_amount' => null,
        'name' => null,
        'payment_method_configurations' => 'int64',
        'planned_purge_date' => 'date-time',
        'sort_order' => 'int32',
        'space_reference' => null,
        'state' => null,
        'tax_class' => null,
        'terms_and_conditions' => null,
        'title' => null,
        'version' => 'int32'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'base_currency' => 'baseCurrency',
        'conditions' => 'conditions',
        'id' => 'id',
        'installment_fee' => 'installmentFee',
        'interest_rate' => 'interestRate',
        'linked_space_id' => 'linkedSpaceId',
        'minimal_amount' => 'minimalAmount',
        'name' => 'name',
        'payment_method_configurations' => 'paymentMethodConfigurations',
        'planned_purge_date' => 'plannedPurgeDate',
        'sort_order' => 'sortOrder',
        'space_reference' => 'spaceReference',
        'state' => 'state',
        'tax_class' => 'taxClass',
        'terms_and_conditions' => 'termsAndConditions',
        'title' => 'title',
        'version' => 'version'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'base_currency' => 'setBaseCurrency',
        'conditions' => 'setConditions',
        'id' => 'setId',
        'installment_fee' => 'setInstallmentFee',
        'interest_rate' => 'setInterestRate',
        'linked_space_id' => 'setLinkedSpaceId',
        'minimal_amount' => 'setMinimalAmount',
        'name' => 'setName',
        'payment_method_configurations' => 'setPaymentMethodConfigurations',
        'planned_purge_date' => 'setPlannedPurgeDate',
        'sort_order' => 'setSortOrder',
        'space_reference' => 'setSpaceReference',
        'state' => 'setState',
        'tax_class' => 'setTaxClass',
        'terms_and_conditions' => 'setTermsAndConditions',
        'title' => 'setTitle',
        'version' => 'setVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'base_currency' => 'getBaseCurrency',
        'conditions' => 'getConditions',
        'id' => 'getId',
        'installment_fee' => 'getInstallmentFee',
        'interest_rate' => 'getInterestRate',
        'linked_space_id' => 'getLinkedSpaceId',
        'minimal_amount' => 'getMinimalAmount',
        'name' => 'getName',
        'payment_method_configurations' => 'getPaymentMethodConfigurations',
        'planned_purge_date' => 'getPlannedPurgeDate',
        'sort_order' => 'getSortOrder',
        'space_reference' => 'getSpaceReference',
        'state' => 'getState',
        'tax_class' => 'getTaxClass',
        'terms_and_conditions' => 'getTermsAndConditions',
        'title' => 'getTitle',
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
        
        $this->container['base_currency'] = isset($data['base_currency']) ? $data['base_currency'] : null;
        
        $this->container['conditions'] = isset($data['conditions']) ? $data['conditions'] : null;
        
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        
        $this->container['installment_fee'] = isset($data['installment_fee']) ? $data['installment_fee'] : null;
        
        $this->container['interest_rate'] = isset($data['interest_rate']) ? $data['interest_rate'] : null;
        
        $this->container['linked_space_id'] = isset($data['linked_space_id']) ? $data['linked_space_id'] : null;
        
        $this->container['minimal_amount'] = isset($data['minimal_amount']) ? $data['minimal_amount'] : null;
        
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        
        $this->container['payment_method_configurations'] = isset($data['payment_method_configurations']) ? $data['payment_method_configurations'] : null;
        
        $this->container['planned_purge_date'] = isset($data['planned_purge_date']) ? $data['planned_purge_date'] : null;
        
        $this->container['sort_order'] = isset($data['sort_order']) ? $data['sort_order'] : null;
        
        $this->container['space_reference'] = isset($data['space_reference']) ? $data['space_reference'] : null;
        
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        
        $this->container['tax_class'] = isset($data['tax_class']) ? $data['tax_class'] : null;
        
        $this->container['terms_and_conditions'] = isset($data['terms_and_conditions']) ? $data['terms_and_conditions'] : null;
        
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        
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

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 100)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 100.";
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
     * Gets base_currency
     *
     * @return string
     */
    public function getBaseCurrency()
    {
        return $this->container['base_currency'];
    }

    /**
     * Sets base_currency
     *
     * @param string $base_currency The base currency in which the installment fee and minimal amount are defined.
     *
     * @return $this
     */
    public function setBaseCurrency($base_currency)
    {
        $this->container['base_currency'] = $base_currency;

        return $this;
    }
    

    /**
     * Gets conditions
     *
     * @return int[]
     */
    public function getConditions()
    {
        return $this->container['conditions'];
    }

    /**
     * Sets conditions
     *
     * @param int[] $conditions If a transaction meets all selected conditions the installment plan will be available to the customer to be selected.
     *
     * @return $this
     */
    public function setConditions($conditions)
    {
        $this->container['conditions'] = $conditions;

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
     * Gets installment_fee
     *
     * @return float
     */
    public function getInstallmentFee()
    {
        return $this->container['installment_fee'];
    }

    /**
     * Sets installment_fee
     *
     * @param float $installment_fee The installment fee is a fixed amount that is charged additionally when applying this installment plan.
     *
     * @return $this
     */
    public function setInstallmentFee($installment_fee)
    {
        $this->container['installment_fee'] = $installment_fee;

        return $this;
    }
    

    /**
     * Gets interest_rate
     *
     * @return float
     */
    public function getInterestRate()
    {
        return $this->container['interest_rate'];
    }

    /**
     * Sets interest_rate
     *
     * @param float $interest_rate The interest rate is a percentage of the total amount that is charged additionally when applying this installment plan.
     *
     * @return $this
     */
    public function setInterestRate($interest_rate)
    {
        $this->container['interest_rate'] = $interest_rate;

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
     * Gets minimal_amount
     *
     * @return float
     */
    public function getMinimalAmount()
    {
        return $this->container['minimal_amount'];
    }

    /**
     * Sets minimal_amount
     *
     * @param float $minimal_amount The installment plan can only be applied if the orders total is at least the defined minimal amount.
     *
     * @return $this
     */
    public function setMinimalAmount($minimal_amount)
    {
        $this->container['minimal_amount'] = $minimal_amount;

        return $this;
    }
    

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name The installment plan name is used internally to identify the plan in administrative interfaces.For example it is used within search fields and hence it should be distinct and descriptive.
     *
     * @return $this
     */
    public function setName($name)
    {
        if (!is_null($name) && (mb_strlen($name) > 100)) {
            throw new \InvalidArgumentException('invalid length for $name when calling InstallmentPlanConfiguration., must be smaller than or equal to 100.');
        }

        $this->container['name'] = $name;

        return $this;
    }
    

    /**
     * Gets payment_method_configurations
     *
     * @return int[]
     */
    public function getPaymentMethodConfigurations()
    {
        return $this->container['payment_method_configurations'];
    }

    /**
     * Sets payment_method_configurations
     *
     * @param int[] $payment_method_configurations A installment plan can be enabled only for specific payment method configurations. Other payment methods will not be selectable by the buyer.
     *
     * @return $this
     */
    public function setPaymentMethodConfigurations($payment_method_configurations)
    {
        $this->container['payment_method_configurations'] = $payment_method_configurations;

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
     * Gets sort_order
     *
     * @return int
     */
    public function getSortOrder()
    {
        return $this->container['sort_order'];
    }

    /**
     * Sets sort_order
     *
     * @param int $sort_order The sort order controls in which order the installation plans are listed. The sort order is used to order the plans in ascending order.
     *
     * @return $this
     */
    public function setSortOrder($sort_order)
    {
        $this->container['sort_order'] = $sort_order;

        return $this;
    }
    

    /**
     * Gets space_reference
     *
     * @return \Wallee\Sdk\Model\SpaceReference
     */
    public function getSpaceReference()
    {
        return $this->container['space_reference'];
    }

    /**
     * Sets space_reference
     *
     * @param \Wallee\Sdk\Model\SpaceReference $space_reference 
     *
     * @return $this
     */
    public function setSpaceReference($space_reference)
    {
        $this->container['space_reference'] = $space_reference;

        return $this;
    }
    

    /**
     * Gets state
     *
     * @return \Wallee\Sdk\Model\CreationEntityState
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param \Wallee\Sdk\Model\CreationEntityState $state 
     *
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }
    

    /**
     * Gets tax_class
     *
     * @return \Wallee\Sdk\Model\TaxClass
     */
    public function getTaxClass()
    {
        return $this->container['tax_class'];
    }

    /**
     * Sets tax_class
     *
     * @param \Wallee\Sdk\Model\TaxClass $tax_class The tax class determines the taxes which are applicable on all fees linked to the installment plan.
     *
     * @return $this
     */
    public function setTaxClass($tax_class)
    {
        $this->container['tax_class'] = $tax_class;

        return $this;
    }
    

    /**
     * Gets terms_and_conditions
     *
     * @return \Wallee\Sdk\Model\ModelResourcePath
     */
    public function getTermsAndConditions()
    {
        return $this->container['terms_and_conditions'];
    }

    /**
     * Sets terms_and_conditions
     *
     * @param \Wallee\Sdk\Model\ModelResourcePath $terms_and_conditions The terms and conditions will be displayed to the customer when he or she selects this installment plan.
     *
     * @return $this
     */
    public function setTermsAndConditions($terms_and_conditions)
    {
        $this->container['terms_and_conditions'] = $terms_and_conditions;

        return $this;
    }
    

    /**
     * Gets title
     *
     * @return \Wallee\Sdk\Model\DatabaseTranslatedString
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param \Wallee\Sdk\Model\DatabaseTranslatedString $title The title of the installment plan is used within the payment process. The title is visible to the buyer.
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

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


