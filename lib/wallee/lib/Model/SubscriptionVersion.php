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
 * SubscriptionVersion model
 *
 * @category    Class
 * @description 
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class SubscriptionVersion implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SubscriptionVersion';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'activated_on' => '\DateTime',
        'billing_currency' => 'string',
        'component_configurations' => '\Wallee\Sdk\Model\SubscriptionComponentConfiguration[]',
        'created_on' => '\DateTime',
        'expected_last_period_end' => '\DateTime',
        'failed_on' => '\DateTime',
        'id' => 'int',
        'language' => 'string',
        'linked_space_id' => 'int',
        'planned_purge_date' => '\DateTime',
        'planned_termination_date' => '\DateTime',
        'product_version' => '\Wallee\Sdk\Model\SubscriptionProductVersion',
        'selected_components' => '\Wallee\Sdk\Model\SubscriptionProductComponent[]',
        'state' => '\Wallee\Sdk\Model\SubscriptionVersionState',
        'subscription' => '\Wallee\Sdk\Model\Subscription',
        'terminated_on' => '\DateTime',
        'terminating_on' => '\DateTime',
        'termination_issued_on' => '\DateTime',
        'version' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'activated_on' => 'date-time',
        'billing_currency' => null,
        'component_configurations' => null,
        'created_on' => 'date-time',
        'expected_last_period_end' => 'date-time',
        'failed_on' => 'date-time',
        'id' => 'int64',
        'language' => null,
        'linked_space_id' => 'int64',
        'planned_purge_date' => 'date-time',
        'planned_termination_date' => 'date-time',
        'product_version' => null,
        'selected_components' => null,
        'state' => null,
        'subscription' => null,
        'terminated_on' => 'date-time',
        'terminating_on' => 'date-time',
        'termination_issued_on' => 'date-time',
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
        'billing_currency' => 'billingCurrency',
        'component_configurations' => 'componentConfigurations',
        'created_on' => 'createdOn',
        'expected_last_period_end' => 'expectedLastPeriodEnd',
        'failed_on' => 'failedOn',
        'id' => 'id',
        'language' => 'language',
        'linked_space_id' => 'linkedSpaceId',
        'planned_purge_date' => 'plannedPurgeDate',
        'planned_termination_date' => 'plannedTerminationDate',
        'product_version' => 'productVersion',
        'selected_components' => 'selectedComponents',
        'state' => 'state',
        'subscription' => 'subscription',
        'terminated_on' => 'terminatedOn',
        'terminating_on' => 'terminatingOn',
        'termination_issued_on' => 'terminationIssuedOn',
        'version' => 'version'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'activated_on' => 'setActivatedOn',
        'billing_currency' => 'setBillingCurrency',
        'component_configurations' => 'setComponentConfigurations',
        'created_on' => 'setCreatedOn',
        'expected_last_period_end' => 'setExpectedLastPeriodEnd',
        'failed_on' => 'setFailedOn',
        'id' => 'setId',
        'language' => 'setLanguage',
        'linked_space_id' => 'setLinkedSpaceId',
        'planned_purge_date' => 'setPlannedPurgeDate',
        'planned_termination_date' => 'setPlannedTerminationDate',
        'product_version' => 'setProductVersion',
        'selected_components' => 'setSelectedComponents',
        'state' => 'setState',
        'subscription' => 'setSubscription',
        'terminated_on' => 'setTerminatedOn',
        'terminating_on' => 'setTerminatingOn',
        'termination_issued_on' => 'setTerminationIssuedOn',
        'version' => 'setVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'activated_on' => 'getActivatedOn',
        'billing_currency' => 'getBillingCurrency',
        'component_configurations' => 'getComponentConfigurations',
        'created_on' => 'getCreatedOn',
        'expected_last_period_end' => 'getExpectedLastPeriodEnd',
        'failed_on' => 'getFailedOn',
        'id' => 'getId',
        'language' => 'getLanguage',
        'linked_space_id' => 'getLinkedSpaceId',
        'planned_purge_date' => 'getPlannedPurgeDate',
        'planned_termination_date' => 'getPlannedTerminationDate',
        'product_version' => 'getProductVersion',
        'selected_components' => 'getSelectedComponents',
        'state' => 'getState',
        'subscription' => 'getSubscription',
        'terminated_on' => 'getTerminatedOn',
        'terminating_on' => 'getTerminatingOn',
        'termination_issued_on' => 'getTerminationIssuedOn',
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
        
        $this->container['billing_currency'] = isset($data['billing_currency']) ? $data['billing_currency'] : null;
        
        $this->container['component_configurations'] = isset($data['component_configurations']) ? $data['component_configurations'] : null;
        
        $this->container['created_on'] = isset($data['created_on']) ? $data['created_on'] : null;
        
        $this->container['expected_last_period_end'] = isset($data['expected_last_period_end']) ? $data['expected_last_period_end'] : null;
        
        $this->container['failed_on'] = isset($data['failed_on']) ? $data['failed_on'] : null;
        
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        
        $this->container['linked_space_id'] = isset($data['linked_space_id']) ? $data['linked_space_id'] : null;
        
        $this->container['planned_purge_date'] = isset($data['planned_purge_date']) ? $data['planned_purge_date'] : null;
        
        $this->container['planned_termination_date'] = isset($data['planned_termination_date']) ? $data['planned_termination_date'] : null;
        
        $this->container['product_version'] = isset($data['product_version']) ? $data['product_version'] : null;
        
        $this->container['selected_components'] = isset($data['selected_components']) ? $data['selected_components'] : null;
        
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        
        $this->container['subscription'] = isset($data['subscription']) ? $data['subscription'] : null;
        
        $this->container['terminated_on'] = isset($data['terminated_on']) ? $data['terminated_on'] : null;
        
        $this->container['terminating_on'] = isset($data['terminating_on']) ? $data['terminating_on'] : null;
        
        $this->container['termination_issued_on'] = isset($data['termination_issued_on']) ? $data['termination_issued_on'] : null;
        
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
     * Gets billing_currency
     *
     * @return string
     */
    public function getBillingCurrency()
    {
        return $this->container['billing_currency'];
    }

    /**
     * Sets billing_currency
     *
     * @param string $billing_currency The subscriber is charged in the billing currency. The billing currency has to be one of the enabled currencies on the subscription product.
     *
     * @return $this
     */
    public function setBillingCurrency($billing_currency)
    {
        $this->container['billing_currency'] = $billing_currency;

        return $this;
    }
    

    /**
     * Gets component_configurations
     *
     * @return \Wallee\Sdk\Model\SubscriptionComponentConfiguration[]
     */
    public function getComponentConfigurations()
    {
        return $this->container['component_configurations'];
    }

    /**
     * Sets component_configurations
     *
     * @param \Wallee\Sdk\Model\SubscriptionComponentConfiguration[] $component_configurations 
     *
     * @return $this
     */
    public function setComponentConfigurations($component_configurations)
    {
        $this->container['component_configurations'] = $component_configurations;

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
     * Gets expected_last_period_end
     *
     * @return \DateTime
     */
    public function getExpectedLastPeriodEnd()
    {
        return $this->container['expected_last_period_end'];
    }

    /**
     * Sets expected_last_period_end
     *
     * @param \DateTime $expected_last_period_end The expected last period end is the date on which the projected end date of the last period is. This is only a projection and as such the actual date may be different.
     *
     * @return $this
     */
    public function setExpectedLastPeriodEnd($expected_last_period_end)
    {
        $this->container['expected_last_period_end'] = $expected_last_period_end;

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
     * Gets planned_termination_date
     *
     * @return \DateTime
     */
    public function getPlannedTerminationDate()
    {
        return $this->container['planned_termination_date'];
    }

    /**
     * Sets planned_termination_date
     *
     * @param \DateTime $planned_termination_date 
     *
     * @return $this
     */
    public function setPlannedTerminationDate($planned_termination_date)
    {
        $this->container['planned_termination_date'] = $planned_termination_date;

        return $this;
    }
    

    /**
     * Gets product_version
     *
     * @return \Wallee\Sdk\Model\SubscriptionProductVersion
     */
    public function getProductVersion()
    {
        return $this->container['product_version'];
    }

    /**
     * Sets product_version
     *
     * @param \Wallee\Sdk\Model\SubscriptionProductVersion $product_version 
     *
     * @return $this
     */
    public function setProductVersion($product_version)
    {
        $this->container['product_version'] = $product_version;

        return $this;
    }
    

    /**
     * Gets selected_components
     *
     * @return \Wallee\Sdk\Model\SubscriptionProductComponent[]
     */
    public function getSelectedComponents()
    {
        return $this->container['selected_components'];
    }

    /**
     * Sets selected_components
     *
     * @param \Wallee\Sdk\Model\SubscriptionProductComponent[] $selected_components 
     *
     * @return $this
     */
    public function setSelectedComponents($selected_components)
    {
        $this->container['selected_components'] = $selected_components;

        return $this;
    }
    

    /**
     * Gets state
     *
     * @return \Wallee\Sdk\Model\SubscriptionVersionState
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param \Wallee\Sdk\Model\SubscriptionVersionState $state 
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
     * @param \Wallee\Sdk\Model\Subscription $subscription 
     *
     * @return $this
     */
    public function setSubscription($subscription)
    {
        $this->container['subscription'] = $subscription;

        return $this;
    }
    

    /**
     * Gets terminated_on
     *
     * @return \DateTime
     */
    public function getTerminatedOn()
    {
        return $this->container['terminated_on'];
    }

    /**
     * Sets terminated_on
     *
     * @param \DateTime $terminated_on 
     *
     * @return $this
     */
    public function setTerminatedOn($terminated_on)
    {
        $this->container['terminated_on'] = $terminated_on;

        return $this;
    }
    

    /**
     * Gets terminating_on
     *
     * @return \DateTime
     */
    public function getTerminatingOn()
    {
        return $this->container['terminating_on'];
    }

    /**
     * Sets terminating_on
     *
     * @param \DateTime $terminating_on 
     *
     * @return $this
     */
    public function setTerminatingOn($terminating_on)
    {
        $this->container['terminating_on'] = $terminating_on;

        return $this;
    }
    

    /**
     * Gets termination_issued_on
     *
     * @return \DateTime
     */
    public function getTerminationIssuedOn()
    {
        return $this->container['termination_issued_on'];
    }

    /**
     * Sets termination_issued_on
     *
     * @param \DateTime $termination_issued_on 
     *
     * @return $this
     */
    public function setTerminationIssuedOn($termination_issued_on)
    {
        $this->container['termination_issued_on'] = $termination_issued_on;

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


