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
 * AbstractDebtCollectionCaseUpdate model
 *
 * @category    Class
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class AbstractDebtCollectionCaseUpdate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Abstract.DebtCollectionCase.Update';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'billing_address' => '\Wallee\Sdk\Model\AddressCreate',
        'contract_date' => '\DateTime',
        'currency' => 'string',
        'due_date' => '\DateTime',
        'environment' => '\Wallee\Sdk\Model\DebtCollectionEnvironment',
        'language' => 'string',
        'line_items' => '\Wallee\Sdk\Model\LineItemCreate[]',
        'space_view_id' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'billing_address' => null,
        'contract_date' => 'date-time',
        'currency' => null,
        'due_date' => 'date-time',
        'environment' => null,
        'language' => null,
        'line_items' => null,
        'space_view_id' => 'int64'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'billing_address' => 'billingAddress',
        'contract_date' => 'contractDate',
        'currency' => 'currency',
        'due_date' => 'dueDate',
        'environment' => 'environment',
        'language' => 'language',
        'line_items' => 'lineItems',
        'space_view_id' => 'spaceViewId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'billing_address' => 'setBillingAddress',
        'contract_date' => 'setContractDate',
        'currency' => 'setCurrency',
        'due_date' => 'setDueDate',
        'environment' => 'setEnvironment',
        'language' => 'setLanguage',
        'line_items' => 'setLineItems',
        'space_view_id' => 'setSpaceViewId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'billing_address' => 'getBillingAddress',
        'contract_date' => 'getContractDate',
        'currency' => 'getCurrency',
        'due_date' => 'getDueDate',
        'environment' => 'getEnvironment',
        'language' => 'getLanguage',
        'line_items' => 'getLineItems',
        'space_view_id' => 'getSpaceViewId'
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
        
        $this->container['billing_address'] = isset($data['billing_address']) ? $data['billing_address'] : null;
        
        $this->container['contract_date'] = isset($data['contract_date']) ? $data['contract_date'] : null;
        
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        
        $this->container['due_date'] = isset($data['due_date']) ? $data['due_date'] : null;
        
        $this->container['environment'] = isset($data['environment']) ? $data['environment'] : null;
        
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        
        $this->container['line_items'] = isset($data['line_items']) ? $data['line_items'] : null;
        
        $this->container['space_view_id'] = isset($data['space_view_id']) ? $data['space_view_id'] : null;
        
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
     * Gets billing_address
     *
     * @return \Wallee\Sdk\Model\AddressCreate
     */
    public function getBillingAddress()
    {
        return $this->container['billing_address'];
    }

    /**
     * Sets billing_address
     *
     * @param \Wallee\Sdk\Model\AddressCreate $billing_address The billing address of the case identifies the debtor.
     *
     * @return $this
     */
    public function setBillingAddress($billing_address)
    {
        $this->container['billing_address'] = $billing_address;

        return $this;
    }
    

    /**
     * Gets contract_date
     *
     * @return \DateTime
     */
    public function getContractDate()
    {
        return $this->container['contract_date'];
    }

    /**
     * Sets contract_date
     *
     * @param \DateTime $contract_date The contract date is the date on which the contract with the debtor was signed on.
     *
     * @return $this
     */
    public function setContractDate($contract_date)
    {
        $this->container['contract_date'] = $contract_date;

        return $this;
    }
    

    /**
     * Gets currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string $currency The currency defines the billing currency of the debt collection case.
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }
    

    /**
     * Gets due_date
     *
     * @return \DateTime
     */
    public function getDueDate()
    {
        return $this->container['due_date'];
    }

    /**
     * Sets due_date
     *
     * @param \DateTime $due_date The due date indicates the date on which the amount receivable was due. This date has to be always in the past.
     *
     * @return $this
     */
    public function setDueDate($due_date)
    {
        $this->container['due_date'] = $due_date;

        return $this;
    }
    

    /**
     * Gets environment
     *
     * @return \Wallee\Sdk\Model\DebtCollectionEnvironment
     */
    public function getEnvironment()
    {
        return $this->container['environment'];
    }

    /**
     * Sets environment
     *
     * @param \Wallee\Sdk\Model\DebtCollectionEnvironment $environment The environment in which this case will be processed. There must be a debt collector configuration present which supports the chosen environment.
     *
     * @return $this
     */
    public function setEnvironment($environment)
    {
        $this->container['environment'] = $environment;

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
     * @param string $language The language indicates the language to be used in the communication with the debtor.
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
     * @return \Wallee\Sdk\Model\LineItemCreate[]
     */
    public function getLineItems()
    {
        return $this->container['line_items'];
    }

    /**
     * Sets line_items
     *
     * @param \Wallee\Sdk\Model\LineItemCreate[] $line_items The line items of the debt collection case will be shown on documents sent to the debtor and the total of them makes up total amount to collect.
     *
     * @return $this
     */
    public function setLineItems($line_items)
    {
        $this->container['line_items'] = $line_items;

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


