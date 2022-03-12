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
 * DebtCollectionCaseDocument model
 *
 * @category    Class
 * @description 
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class DebtCollectionCaseDocument implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DebtCollectionCaseDocument';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'created_on' => '\DateTime',
        'debt_collection_case' => 'int',
        'file_name' => 'string',
        'id' => 'int',
        'labels' => '\Wallee\Sdk\Model\Label[]',
        'linked_space_id' => 'int',
        'mime_type' => 'string',
        'planned_purge_date' => '\DateTime',
        'storage_id' => 'string',
        'unique_id' => 'string',
        'version' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'created_on' => 'date-time',
        'debt_collection_case' => 'int64',
        'file_name' => null,
        'id' => 'int64',
        'labels' => null,
        'linked_space_id' => 'int64',
        'mime_type' => null,
        'planned_purge_date' => 'date-time',
        'storage_id' => null,
        'unique_id' => null,
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
        'debt_collection_case' => 'debtCollectionCase',
        'file_name' => 'fileName',
        'id' => 'id',
        'labels' => 'labels',
        'linked_space_id' => 'linkedSpaceId',
        'mime_type' => 'mimeType',
        'planned_purge_date' => 'plannedPurgeDate',
        'storage_id' => 'storageId',
        'unique_id' => 'uniqueId',
        'version' => 'version'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'created_on' => 'setCreatedOn',
        'debt_collection_case' => 'setDebtCollectionCase',
        'file_name' => 'setFileName',
        'id' => 'setId',
        'labels' => 'setLabels',
        'linked_space_id' => 'setLinkedSpaceId',
        'mime_type' => 'setMimeType',
        'planned_purge_date' => 'setPlannedPurgeDate',
        'storage_id' => 'setStorageId',
        'unique_id' => 'setUniqueId',
        'version' => 'setVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'created_on' => 'getCreatedOn',
        'debt_collection_case' => 'getDebtCollectionCase',
        'file_name' => 'getFileName',
        'id' => 'getId',
        'labels' => 'getLabels',
        'linked_space_id' => 'getLinkedSpaceId',
        'mime_type' => 'getMimeType',
        'planned_purge_date' => 'getPlannedPurgeDate',
        'storage_id' => 'getStorageId',
        'unique_id' => 'getUniqueId',
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
        
        $this->container['debt_collection_case'] = isset($data['debt_collection_case']) ? $data['debt_collection_case'] : null;
        
        $this->container['file_name'] = isset($data['file_name']) ? $data['file_name'] : null;
        
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        
        $this->container['linked_space_id'] = isset($data['linked_space_id']) ? $data['linked_space_id'] : null;
        
        $this->container['mime_type'] = isset($data['mime_type']) ? $data['mime_type'] : null;
        
        $this->container['planned_purge_date'] = isset($data['planned_purge_date']) ? $data['planned_purge_date'] : null;
        
        $this->container['storage_id'] = isset($data['storage_id']) ? $data['storage_id'] : null;
        
        $this->container['unique_id'] = isset($data['unique_id']) ? $data['unique_id'] : null;
        
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

        if (!is_null($this->container['file_name']) && (mb_strlen($this->container['file_name']) > 100)) {
            $invalidProperties[] = "invalid value for 'file_name', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['storage_id']) && (mb_strlen($this->container['storage_id']) > 100)) {
            $invalidProperties[] = "invalid value for 'storage_id', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['unique_id']) && (mb_strlen($this->container['unique_id']) > 500)) {
            $invalidProperties[] = "invalid value for 'unique_id', the character length must be smaller than or equal to 500.";
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
     * Gets debt_collection_case
     *
     * @return int
     */
    public function getDebtCollectionCase()
    {
        return $this->container['debt_collection_case'];
    }

    /**
     * Sets debt_collection_case
     *
     * @param int $debt_collection_case 
     *
     * @return $this
     */
    public function setDebtCollectionCase($debt_collection_case)
    {
        $this->container['debt_collection_case'] = $debt_collection_case;

        return $this;
    }
    

    /**
     * Gets file_name
     *
     * @return string
     */
    public function getFileName()
    {
        return $this->container['file_name'];
    }

    /**
     * Sets file_name
     *
     * @param string $file_name 
     *
     * @return $this
     */
    public function setFileName($file_name)
    {
        if (!is_null($file_name) && (mb_strlen($file_name) > 100)) {
            throw new \InvalidArgumentException('invalid length for $file_name when calling DebtCollectionCaseDocument., must be smaller than or equal to 100.');
        }

        $this->container['file_name'] = $file_name;

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
     * Gets mime_type
     *
     * @return string
     */
    public function getMimeType()
    {
        return $this->container['mime_type'];
    }

    /**
     * Sets mime_type
     *
     * @param string $mime_type 
     *
     * @return $this
     */
    public function setMimeType($mime_type)
    {
        $this->container['mime_type'] = $mime_type;

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
     * Gets storage_id
     *
     * @return string
     */
    public function getStorageId()
    {
        return $this->container['storage_id'];
    }

    /**
     * Sets storage_id
     *
     * @param string $storage_id 
     *
     * @return $this
     */
    public function setStorageId($storage_id)
    {
        if (!is_null($storage_id) && (mb_strlen($storage_id) > 100)) {
            throw new \InvalidArgumentException('invalid length for $storage_id when calling DebtCollectionCaseDocument., must be smaller than or equal to 100.');
        }

        $this->container['storage_id'] = $storage_id;

        return $this;
    }
    

    /**
     * Gets unique_id
     *
     * @return string
     */
    public function getUniqueId()
    {
        return $this->container['unique_id'];
    }

    /**
     * Sets unique_id
     *
     * @param string $unique_id 
     *
     * @return $this
     */
    public function setUniqueId($unique_id)
    {
        if (!is_null($unique_id) && (mb_strlen($unique_id) > 500)) {
            throw new \InvalidArgumentException('invalid length for $unique_id when calling DebtCollectionCaseDocument., must be smaller than or equal to 500.');
        }

        $this->container['unique_id'] = $unique_id;

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


