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
 * ExternalTransferBankTransaction model
 *
 * @category    Class
 * @description 
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class ExternalTransferBankTransaction implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ExternalTransferBankTransaction';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'bank_transaction' => '\Wallee\Sdk\Model\BankTransaction',
        'external_account_identifier' => 'string',
        'external_account_type' => 'string',
        'external_bank_name' => 'string',
        'id' => 'int',
        'linked_space_id' => 'int',
        'version' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'bank_transaction' => null,
        'external_account_identifier' => null,
        'external_account_type' => null,
        'external_bank_name' => null,
        'id' => 'int64',
        'linked_space_id' => 'int64',
        'version' => 'int32'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'bank_transaction' => 'bankTransaction',
        'external_account_identifier' => 'externalAccountIdentifier',
        'external_account_type' => 'externalAccountType',
        'external_bank_name' => 'externalBankName',
        'id' => 'id',
        'linked_space_id' => 'linkedSpaceId',
        'version' => 'version'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bank_transaction' => 'setBankTransaction',
        'external_account_identifier' => 'setExternalAccountIdentifier',
        'external_account_type' => 'setExternalAccountType',
        'external_bank_name' => 'setExternalBankName',
        'id' => 'setId',
        'linked_space_id' => 'setLinkedSpaceId',
        'version' => 'setVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bank_transaction' => 'getBankTransaction',
        'external_account_identifier' => 'getExternalAccountIdentifier',
        'external_account_type' => 'getExternalAccountType',
        'external_bank_name' => 'getExternalBankName',
        'id' => 'getId',
        'linked_space_id' => 'getLinkedSpaceId',
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
        
        $this->container['bank_transaction'] = isset($data['bank_transaction']) ? $data['bank_transaction'] : null;
        
        $this->container['external_account_identifier'] = isset($data['external_account_identifier']) ? $data['external_account_identifier'] : null;
        
        $this->container['external_account_type'] = isset($data['external_account_type']) ? $data['external_account_type'] : null;
        
        $this->container['external_bank_name'] = isset($data['external_bank_name']) ? $data['external_bank_name'] : null;
        
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        
        $this->container['linked_space_id'] = isset($data['linked_space_id']) ? $data['linked_space_id'] : null;
        
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
     * Gets bank_transaction
     *
     * @return \Wallee\Sdk\Model\BankTransaction
     */
    public function getBankTransaction()
    {
        return $this->container['bank_transaction'];
    }

    /**
     * Sets bank_transaction
     *
     * @param \Wallee\Sdk\Model\BankTransaction $bank_transaction 
     *
     * @return $this
     */
    public function setBankTransaction($bank_transaction)
    {
        $this->container['bank_transaction'] = $bank_transaction;

        return $this;
    }
    

    /**
     * Gets external_account_identifier
     *
     * @return string
     */
    public function getExternalAccountIdentifier()
    {
        return $this->container['external_account_identifier'];
    }

    /**
     * Sets external_account_identifier
     *
     * @param string $external_account_identifier 
     *
     * @return $this
     */
    public function setExternalAccountIdentifier($external_account_identifier)
    {
        $this->container['external_account_identifier'] = $external_account_identifier;

        return $this;
    }
    

    /**
     * Gets external_account_type
     *
     * @return string
     */
    public function getExternalAccountType()
    {
        return $this->container['external_account_type'];
    }

    /**
     * Sets external_account_type
     *
     * @param string $external_account_type 
     *
     * @return $this
     */
    public function setExternalAccountType($external_account_type)
    {
        $this->container['external_account_type'] = $external_account_type;

        return $this;
    }
    

    /**
     * Gets external_bank_name
     *
     * @return string
     */
    public function getExternalBankName()
    {
        return $this->container['external_bank_name'];
    }

    /**
     * Sets external_bank_name
     *
     * @param string $external_bank_name 
     *
     * @return $this
     */
    public function setExternalBankName($external_bank_name)
    {
        $this->container['external_bank_name'] = $external_bank_name;

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


