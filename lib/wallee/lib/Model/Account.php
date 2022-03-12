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
 * Account model
 *
 * @category    Class
 * @description 
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class Account implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Account';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'active' => 'bool',
        'active_or_restricted_active' => 'bool',
        'created_by' => 'int',
        'created_on' => '\DateTime',
        'deleted_by' => 'int',
        'deleted_on' => '\DateTime',
        'id' => 'int',
        'last_modified_date' => '\DateTime',
        'name' => 'string',
        'parent_account' => '\Wallee\Sdk\Model\Account',
        'planned_purge_date' => '\DateTime',
        'restricted_active' => 'bool',
        'scope' => 'int',
        'state' => '\Wallee\Sdk\Model\AccountState',
        'subaccount_limit' => 'int',
        'type' => '\Wallee\Sdk\Model\AccountType',
        'version' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'active' => null,
        'active_or_restricted_active' => null,
        'created_by' => 'int64',
        'created_on' => 'date-time',
        'deleted_by' => 'int64',
        'deleted_on' => 'date-time',
        'id' => 'int64',
        'last_modified_date' => 'date-time',
        'name' => null,
        'parent_account' => null,
        'planned_purge_date' => 'date-time',
        'restricted_active' => null,
        'scope' => 'int64',
        'state' => null,
        'subaccount_limit' => 'int64',
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
        'active' => 'active',
        'active_or_restricted_active' => 'activeOrRestrictedActive',
        'created_by' => 'createdBy',
        'created_on' => 'createdOn',
        'deleted_by' => 'deletedBy',
        'deleted_on' => 'deletedOn',
        'id' => 'id',
        'last_modified_date' => 'lastModifiedDate',
        'name' => 'name',
        'parent_account' => 'parentAccount',
        'planned_purge_date' => 'plannedPurgeDate',
        'restricted_active' => 'restrictedActive',
        'scope' => 'scope',
        'state' => 'state',
        'subaccount_limit' => 'subaccountLimit',
        'type' => 'type',
        'version' => 'version'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'active' => 'setActive',
        'active_or_restricted_active' => 'setActiveOrRestrictedActive',
        'created_by' => 'setCreatedBy',
        'created_on' => 'setCreatedOn',
        'deleted_by' => 'setDeletedBy',
        'deleted_on' => 'setDeletedOn',
        'id' => 'setId',
        'last_modified_date' => 'setLastModifiedDate',
        'name' => 'setName',
        'parent_account' => 'setParentAccount',
        'planned_purge_date' => 'setPlannedPurgeDate',
        'restricted_active' => 'setRestrictedActive',
        'scope' => 'setScope',
        'state' => 'setState',
        'subaccount_limit' => 'setSubaccountLimit',
        'type' => 'setType',
        'version' => 'setVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'active' => 'getActive',
        'active_or_restricted_active' => 'getActiveOrRestrictedActive',
        'created_by' => 'getCreatedBy',
        'created_on' => 'getCreatedOn',
        'deleted_by' => 'getDeletedBy',
        'deleted_on' => 'getDeletedOn',
        'id' => 'getId',
        'last_modified_date' => 'getLastModifiedDate',
        'name' => 'getName',
        'parent_account' => 'getParentAccount',
        'planned_purge_date' => 'getPlannedPurgeDate',
        'restricted_active' => 'getRestrictedActive',
        'scope' => 'getScope',
        'state' => 'getState',
        'subaccount_limit' => 'getSubaccountLimit',
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
        
        $this->container['active'] = isset($data['active']) ? $data['active'] : null;
        
        $this->container['active_or_restricted_active'] = isset($data['active_or_restricted_active']) ? $data['active_or_restricted_active'] : null;
        
        $this->container['created_by'] = isset($data['created_by']) ? $data['created_by'] : null;
        
        $this->container['created_on'] = isset($data['created_on']) ? $data['created_on'] : null;
        
        $this->container['deleted_by'] = isset($data['deleted_by']) ? $data['deleted_by'] : null;
        
        $this->container['deleted_on'] = isset($data['deleted_on']) ? $data['deleted_on'] : null;
        
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        
        $this->container['last_modified_date'] = isset($data['last_modified_date']) ? $data['last_modified_date'] : null;
        
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        
        $this->container['parent_account'] = isset($data['parent_account']) ? $data['parent_account'] : null;
        
        $this->container['planned_purge_date'] = isset($data['planned_purge_date']) ? $data['planned_purge_date'] : null;
        
        $this->container['restricted_active'] = isset($data['restricted_active']) ? $data['restricted_active'] : null;
        
        $this->container['scope'] = isset($data['scope']) ? $data['scope'] : null;
        
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        
        $this->container['subaccount_limit'] = isset($data['subaccount_limit']) ? $data['subaccount_limit'] : null;
        
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

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 200)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 200.";
        }

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 3)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 3.";
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
     * Gets active
     *
     * @return bool
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     *
     * @param bool $active Active means that this account and all accounts in the hierarchy are active.
     *
     * @return $this
     */
    public function setActive($active)
    {
        $this->container['active'] = $active;

        return $this;
    }
    

    /**
     * Gets active_or_restricted_active
     *
     * @return bool
     */
    public function getActiveOrRestrictedActive()
    {
        return $this->container['active_or_restricted_active'];
    }

    /**
     * Sets active_or_restricted_active
     *
     * @param bool $active_or_restricted_active This property is true when all accounts in the hierarchy are active or restricted active.
     *
     * @return $this
     */
    public function setActiveOrRestrictedActive($active_or_restricted_active)
    {
        $this->container['active_or_restricted_active'] = $active_or_restricted_active;

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
     * @param int $created_by The ID of the user who created this entity.
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
     * @param \DateTime $created_on The date and time when this entity was created.
     *
     * @return $this
     */
    public function setCreatedOn($created_on)
    {
        $this->container['created_on'] = $created_on;

        return $this;
    }
    

    /**
     * Gets deleted_by
     *
     * @return int
     */
    public function getDeletedBy()
    {
        return $this->container['deleted_by'];
    }

    /**
     * Sets deleted_by
     *
     * @param int $deleted_by The ID of a user that deleted this entity.
     *
     * @return $this
     */
    public function setDeletedBy($deleted_by)
    {
        $this->container['deleted_by'] = $deleted_by;

        return $this;
    }
    

    /**
     * Gets deleted_on
     *
     * @return \DateTime
     */
    public function getDeletedOn()
    {
        return $this->container['deleted_on'];
    }

    /**
     * Sets deleted_on
     *
     * @param \DateTime $deleted_on The date and time when this entity was deleted.
     *
     * @return $this
     */
    public function setDeletedOn($deleted_on)
    {
        $this->container['deleted_on'] = $deleted_on;

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
     * Gets last_modified_date
     *
     * @return \DateTime
     */
    public function getLastModifiedDate()
    {
        return $this->container['last_modified_date'];
    }

    /**
     * Sets last_modified_date
     *
     * @param \DateTime $last_modified_date 
     *
     * @return $this
     */
    public function setLastModifiedDate($last_modified_date)
    {
        $this->container['last_modified_date'] = $last_modified_date;

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
     * @param string $name The name of the account identifies the account within the administrative interface.
     *
     * @return $this
     */
    public function setName($name)
    {
        if (!is_null($name) && (mb_strlen($name) > 200)) {
            throw new \InvalidArgumentException('invalid length for $name when calling Account., must be smaller than or equal to 200.');
        }
        if (!is_null($name) && (mb_strlen($name) < 3)) {
            throw new \InvalidArgumentException('invalid length for $name when calling Account., must be bigger than or equal to 3.');
        }

        $this->container['name'] = $name;

        return $this;
    }
    

    /**
     * Gets parent_account
     *
     * @return \Wallee\Sdk\Model\Account
     */
    public function getParentAccount()
    {
        return $this->container['parent_account'];
    }

    /**
     * Sets parent_account
     *
     * @param \Wallee\Sdk\Model\Account $parent_account The account which is responsible for administering the account.
     *
     * @return $this
     */
    public function setParentAccount($parent_account)
    {
        $this->container['parent_account'] = $parent_account;

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
     * Gets restricted_active
     *
     * @return bool
     */
    public function getRestrictedActive()
    {
        return $this->container['restricted_active'];
    }

    /**
     * Sets restricted_active
     *
     * @param bool $restricted_active Restricted active means that at least one account in the hierarchy is only restricted active, but all are either restricted active or active.
     *
     * @return $this
     */
    public function setRestrictedActive($restricted_active)
    {
        $this->container['restricted_active'] = $restricted_active;

        return $this;
    }
    

    /**
     * Gets scope
     *
     * @return int
     */
    public function getScope()
    {
        return $this->container['scope'];
    }

    /**
     * Sets scope
     *
     * @param int $scope This is the scope to which the account belongs to.
     *
     * @return $this
     */
    public function setScope($scope)
    {
        $this->container['scope'] = $scope;

        return $this;
    }
    

    /**
     * Gets state
     *
     * @return \Wallee\Sdk\Model\AccountState
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param \Wallee\Sdk\Model\AccountState $state 
     *
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }
    

    /**
     * Gets subaccount_limit
     *
     * @return int
     */
    public function getSubaccountLimit()
    {
        return $this->container['subaccount_limit'];
    }

    /**
     * Sets subaccount_limit
     *
     * @param int $subaccount_limit This property restricts the number of subaccounts which can be created within this account.
     *
     * @return $this
     */
    public function setSubaccountLimit($subaccount_limit)
    {
        $this->container['subaccount_limit'] = $subaccount_limit;

        return $this;
    }
    

    /**
     * Gets type
     *
     * @return \Wallee\Sdk\Model\AccountType
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \Wallee\Sdk\Model\AccountType $type The account type defines which role and capabilities it has.
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


