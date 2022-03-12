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
 * ChargeFlowLevel model
 *
 * @category    Class
 * @description 
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class ChargeFlowLevel extends TransactionAwareEntity 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ChargeFlowLevel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'asynchronous_charge' => 'int',
        'configuration' => '\Wallee\Sdk\Model\ChargeFlowLevelConfiguration',
        'created_on' => '\DateTime',
        'planned_purge_date' => '\DateTime',
        'state' => '\Wallee\Sdk\Model\ChargeFlowLevelState',
        'synchronous_charge' => 'int',
        'timeout_on' => '\DateTime',
        'token_charge' => 'int',
        'transaction' => '\Wallee\Sdk\Model\Transaction',
        'version' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'asynchronous_charge' => 'int64',
        'configuration' => null,
        'created_on' => 'date-time',
        'planned_purge_date' => 'date-time',
        'state' => null,
        'synchronous_charge' => 'int64',
        'timeout_on' => 'date-time',
        'token_charge' => 'int64',
        'transaction' => null,
        'version' => 'int32'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'asynchronous_charge' => 'asynchronousCharge',
        'configuration' => 'configuration',
        'created_on' => 'createdOn',
        'planned_purge_date' => 'plannedPurgeDate',
        'state' => 'state',
        'synchronous_charge' => 'synchronousCharge',
        'timeout_on' => 'timeoutOn',
        'token_charge' => 'tokenCharge',
        'transaction' => 'transaction',
        'version' => 'version'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'asynchronous_charge' => 'setAsynchronousCharge',
        'configuration' => 'setConfiguration',
        'created_on' => 'setCreatedOn',
        'planned_purge_date' => 'setPlannedPurgeDate',
        'state' => 'setState',
        'synchronous_charge' => 'setSynchronousCharge',
        'timeout_on' => 'setTimeoutOn',
        'token_charge' => 'setTokenCharge',
        'transaction' => 'setTransaction',
        'version' => 'setVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'asynchronous_charge' => 'getAsynchronousCharge',
        'configuration' => 'getConfiguration',
        'created_on' => 'getCreatedOn',
        'planned_purge_date' => 'getPlannedPurgeDate',
        'state' => 'getState',
        'synchronous_charge' => 'getSynchronousCharge',
        'timeout_on' => 'getTimeoutOn',
        'token_charge' => 'getTokenCharge',
        'transaction' => 'getTransaction',
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

        
        $this->container['asynchronous_charge'] = isset($data['asynchronous_charge']) ? $data['asynchronous_charge'] : null;
        
        $this->container['configuration'] = isset($data['configuration']) ? $data['configuration'] : null;
        
        $this->container['created_on'] = isset($data['created_on']) ? $data['created_on'] : null;
        
        $this->container['planned_purge_date'] = isset($data['planned_purge_date']) ? $data['planned_purge_date'] : null;
        
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        
        $this->container['synchronous_charge'] = isset($data['synchronous_charge']) ? $data['synchronous_charge'] : null;
        
        $this->container['timeout_on'] = isset($data['timeout_on']) ? $data['timeout_on'] : null;
        
        $this->container['token_charge'] = isset($data['token_charge']) ? $data['token_charge'] : null;
        
        $this->container['transaction'] = isset($data['transaction']) ? $data['transaction'] : null;
        
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
     * Gets asynchronous_charge
     *
     * @return int
     */
    public function getAsynchronousCharge()
    {
        return $this->container['asynchronous_charge'];
    }

    /**
     * Sets asynchronous_charge
     *
     * @param int $asynchronous_charge 
     *
     * @return $this
     */
    public function setAsynchronousCharge($asynchronous_charge)
    {
        $this->container['asynchronous_charge'] = $asynchronous_charge;

        return $this;
    }
    

    /**
     * Gets configuration
     *
     * @return \Wallee\Sdk\Model\ChargeFlowLevelConfiguration
     */
    public function getConfiguration()
    {
        return $this->container['configuration'];
    }

    /**
     * Sets configuration
     *
     * @param \Wallee\Sdk\Model\ChargeFlowLevelConfiguration $configuration 
     *
     * @return $this
     */
    public function setConfiguration($configuration)
    {
        $this->container['configuration'] = $configuration;

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
     * Gets state
     *
     * @return \Wallee\Sdk\Model\ChargeFlowLevelState
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param \Wallee\Sdk\Model\ChargeFlowLevelState $state 
     *
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }
    

    /**
     * Gets synchronous_charge
     *
     * @return int
     */
    public function getSynchronousCharge()
    {
        return $this->container['synchronous_charge'];
    }

    /**
     * Sets synchronous_charge
     *
     * @param int $synchronous_charge 
     *
     * @return $this
     */
    public function setSynchronousCharge($synchronous_charge)
    {
        $this->container['synchronous_charge'] = $synchronous_charge;

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
     * Gets token_charge
     *
     * @return int
     */
    public function getTokenCharge()
    {
        return $this->container['token_charge'];
    }

    /**
     * Sets token_charge
     *
     * @param int $token_charge 
     *
     * @return $this
     */
    public function setTokenCharge($token_charge)
    {
        $this->container['token_charge'] = $token_charge;

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


