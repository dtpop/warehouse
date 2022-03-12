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
 * ProductSetupFeeUpdate model
 *
 * @category    Class
 * @description 
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class ProductSetupFeeUpdate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ProductSetupFee.Update';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'version' => 'int',
        'component' => 'int',
        'description' => '\Wallee\Sdk\Model\DatabaseTranslatedStringCreate',
        'name' => '\Wallee\Sdk\Model\DatabaseTranslatedStringCreate',
        'on_downgrade_credited_amount' => '\Wallee\Sdk\Model\PersistableCurrencyAmountUpdate[]',
        'on_upgrade_credited_amount' => '\Wallee\Sdk\Model\PersistableCurrencyAmountUpdate[]',
        'setup_fee' => '\Wallee\Sdk\Model\PersistableCurrencyAmountUpdate[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int64',
        'version' => 'int64',
        'component' => 'int64',
        'description' => null,
        'name' => null,
        'on_downgrade_credited_amount' => null,
        'on_upgrade_credited_amount' => null,
        'setup_fee' => null
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'version' => 'version',
        'component' => 'component',
        'description' => 'description',
        'name' => 'name',
        'on_downgrade_credited_amount' => 'onDowngradeCreditedAmount',
        'on_upgrade_credited_amount' => 'onUpgradeCreditedAmount',
        'setup_fee' => 'setupFee'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'version' => 'setVersion',
        'component' => 'setComponent',
        'description' => 'setDescription',
        'name' => 'setName',
        'on_downgrade_credited_amount' => 'setOnDowngradeCreditedAmount',
        'on_upgrade_credited_amount' => 'setOnUpgradeCreditedAmount',
        'setup_fee' => 'setSetupFee'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'version' => 'getVersion',
        'component' => 'getComponent',
        'description' => 'getDescription',
        'name' => 'getName',
        'on_downgrade_credited_amount' => 'getOnDowngradeCreditedAmount',
        'on_upgrade_credited_amount' => 'getOnUpgradeCreditedAmount',
        'setup_fee' => 'getSetupFee'
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
        
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        
        $this->container['component'] = isset($data['component']) ? $data['component'] : null;
        
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        
        $this->container['on_downgrade_credited_amount'] = isset($data['on_downgrade_credited_amount']) ? $data['on_downgrade_credited_amount'] : null;
        
        $this->container['on_upgrade_credited_amount'] = isset($data['on_upgrade_credited_amount']) ? $data['on_upgrade_credited_amount'] : null;
        
        $this->container['setup_fee'] = isset($data['setup_fee']) ? $data['setup_fee'] : null;
        
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['version'] === null) {
            $invalidProperties[] = "'version' can't be null";
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
     * Gets component
     *
     * @return int
     */
    public function getComponent()
    {
        return $this->container['component'];
    }

    /**
     * Sets component
     *
     * @param int $component 
     *
     * @return $this
     */
    public function setComponent($component)
    {
        $this->container['component'] = $component;

        return $this;
    }
    

    /**
     * Gets description
     *
     * @return \Wallee\Sdk\Model\DatabaseTranslatedStringCreate
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param \Wallee\Sdk\Model\DatabaseTranslatedStringCreate $description The description of a component fee describes the fee to the subscriber. The description may be shown in documents or on certain user interfaces.
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }
    

    /**
     * Gets name
     *
     * @return \Wallee\Sdk\Model\DatabaseTranslatedStringCreate
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param \Wallee\Sdk\Model\DatabaseTranslatedStringCreate $name The name of the fee should describe for the subscriber in few words for what the fee is for.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }
    

    /**
     * Gets on_downgrade_credited_amount
     *
     * @return \Wallee\Sdk\Model\PersistableCurrencyAmountUpdate[]
     */
    public function getOnDowngradeCreditedAmount()
    {
        return $this->container['on_downgrade_credited_amount'];
    }

    /**
     * Sets on_downgrade_credited_amount
     *
     * @param \Wallee\Sdk\Model\PersistableCurrencyAmountUpdate[] $on_downgrade_credited_amount When the subscription is changed and the change is considered as a downgrade the amount defined by this property will be credited to the subscriber.
     *
     * @return $this
     */
    public function setOnDowngradeCreditedAmount($on_downgrade_credited_amount)
    {
        $this->container['on_downgrade_credited_amount'] = $on_downgrade_credited_amount;

        return $this;
    }
    

    /**
     * Gets on_upgrade_credited_amount
     *
     * @return \Wallee\Sdk\Model\PersistableCurrencyAmountUpdate[]
     */
    public function getOnUpgradeCreditedAmount()
    {
        return $this->container['on_upgrade_credited_amount'];
    }

    /**
     * Sets on_upgrade_credited_amount
     *
     * @param \Wallee\Sdk\Model\PersistableCurrencyAmountUpdate[] $on_upgrade_credited_amount When the subscription is changed and the change is considered as a upgrade the amount defined by this property will be credited to the subscriber.
     *
     * @return $this
     */
    public function setOnUpgradeCreditedAmount($on_upgrade_credited_amount)
    {
        $this->container['on_upgrade_credited_amount'] = $on_upgrade_credited_amount;

        return $this;
    }
    

    /**
     * Gets setup_fee
     *
     * @return \Wallee\Sdk\Model\PersistableCurrencyAmountUpdate[]
     */
    public function getSetupFee()
    {
        return $this->container['setup_fee'];
    }

    /**
     * Sets setup_fee
     *
     * @param \Wallee\Sdk\Model\PersistableCurrencyAmountUpdate[] $setup_fee The setup fee is charged when the subscriber subscribes to this component. The setup fee is debited with the first charge for the subscriptions.
     *
     * @return $this
     */
    public function setSetupFee($setup_fee)
    {
        $this->container['setup_fee'] = $setup_fee;

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


