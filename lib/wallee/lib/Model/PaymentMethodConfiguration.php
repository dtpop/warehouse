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
 * PaymentMethodConfiguration model
 *
 * @category    Class
 * @description The payment method configuration builds the base to connect with different payment method connectors.
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class PaymentMethodConfiguration implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PaymentMethodConfiguration';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'data_collection_type' => '\Wallee\Sdk\Model\DataCollectionType',
        'description' => '\Wallee\Sdk\Model\DatabaseTranslatedString',
        'id' => 'int',
        'image_resource_path' => '\Wallee\Sdk\Model\ModelResourcePath',
        'linked_space_id' => 'int',
        'name' => 'string',
        'one_click_payment_mode' => '\Wallee\Sdk\Model\OneClickPaymentMode',
        'payment_method' => 'int',
        'planned_purge_date' => '\DateTime',
        'resolved_description' => 'map[string,string]',
        'resolved_image_url' => 'string',
        'resolved_title' => 'map[string,string]',
        'sort_order' => 'int',
        'space_id' => 'int',
        'state' => '\Wallee\Sdk\Model\CreationEntityState',
        'title' => '\Wallee\Sdk\Model\DatabaseTranslatedString',
        'version' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'data_collection_type' => null,
        'description' => null,
        'id' => 'int64',
        'image_resource_path' => null,
        'linked_space_id' => 'int64',
        'name' => null,
        'one_click_payment_mode' => null,
        'payment_method' => 'int64',
        'planned_purge_date' => 'date-time',
        'resolved_description' => null,
        'resolved_image_url' => null,
        'resolved_title' => null,
        'sort_order' => 'int32',
        'space_id' => 'int64',
        'state' => null,
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
        'data_collection_type' => 'dataCollectionType',
        'description' => 'description',
        'id' => 'id',
        'image_resource_path' => 'imageResourcePath',
        'linked_space_id' => 'linkedSpaceId',
        'name' => 'name',
        'one_click_payment_mode' => 'oneClickPaymentMode',
        'payment_method' => 'paymentMethod',
        'planned_purge_date' => 'plannedPurgeDate',
        'resolved_description' => 'resolvedDescription',
        'resolved_image_url' => 'resolvedImageUrl',
        'resolved_title' => 'resolvedTitle',
        'sort_order' => 'sortOrder',
        'space_id' => 'spaceId',
        'state' => 'state',
        'title' => 'title',
        'version' => 'version'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'data_collection_type' => 'setDataCollectionType',
        'description' => 'setDescription',
        'id' => 'setId',
        'image_resource_path' => 'setImageResourcePath',
        'linked_space_id' => 'setLinkedSpaceId',
        'name' => 'setName',
        'one_click_payment_mode' => 'setOneClickPaymentMode',
        'payment_method' => 'setPaymentMethod',
        'planned_purge_date' => 'setPlannedPurgeDate',
        'resolved_description' => 'setResolvedDescription',
        'resolved_image_url' => 'setResolvedImageUrl',
        'resolved_title' => 'setResolvedTitle',
        'sort_order' => 'setSortOrder',
        'space_id' => 'setSpaceId',
        'state' => 'setState',
        'title' => 'setTitle',
        'version' => 'setVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'data_collection_type' => 'getDataCollectionType',
        'description' => 'getDescription',
        'id' => 'getId',
        'image_resource_path' => 'getImageResourcePath',
        'linked_space_id' => 'getLinkedSpaceId',
        'name' => 'getName',
        'one_click_payment_mode' => 'getOneClickPaymentMode',
        'payment_method' => 'getPaymentMethod',
        'planned_purge_date' => 'getPlannedPurgeDate',
        'resolved_description' => 'getResolvedDescription',
        'resolved_image_url' => 'getResolvedImageUrl',
        'resolved_title' => 'getResolvedTitle',
        'sort_order' => 'getSortOrder',
        'space_id' => 'getSpaceId',
        'state' => 'getState',
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
        
        $this->container['data_collection_type'] = isset($data['data_collection_type']) ? $data['data_collection_type'] : null;
        
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        
        $this->container['image_resource_path'] = isset($data['image_resource_path']) ? $data['image_resource_path'] : null;
        
        $this->container['linked_space_id'] = isset($data['linked_space_id']) ? $data['linked_space_id'] : null;
        
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        
        $this->container['one_click_payment_mode'] = isset($data['one_click_payment_mode']) ? $data['one_click_payment_mode'] : null;
        
        $this->container['payment_method'] = isset($data['payment_method']) ? $data['payment_method'] : null;
        
        $this->container['planned_purge_date'] = isset($data['planned_purge_date']) ? $data['planned_purge_date'] : null;
        
        $this->container['resolved_description'] = isset($data['resolved_description']) ? $data['resolved_description'] : null;
        
        $this->container['resolved_image_url'] = isset($data['resolved_image_url']) ? $data['resolved_image_url'] : null;
        
        $this->container['resolved_title'] = isset($data['resolved_title']) ? $data['resolved_title'] : null;
        
        $this->container['sort_order'] = isset($data['sort_order']) ? $data['sort_order'] : null;
        
        $this->container['space_id'] = isset($data['space_id']) ? $data['space_id'] : null;
        
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        
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
     * Gets data_collection_type
     *
     * @return \Wallee\Sdk\Model\DataCollectionType
     */
    public function getDataCollectionType()
    {
        return $this->container['data_collection_type'];
    }

    /**
     * Sets data_collection_type
     *
     * @param \Wallee\Sdk\Model\DataCollectionType $data_collection_type The data collection type determines who is collecting the payment information. This can be done either by the processor (offsite) or by our application (onsite).
     *
     * @return $this
     */
    public function setDataCollectionType($data_collection_type)
    {
        $this->container['data_collection_type'] = $data_collection_type;

        return $this;
    }
    

    /**
     * Gets description
     *
     * @return \Wallee\Sdk\Model\DatabaseTranslatedString
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param \Wallee\Sdk\Model\DatabaseTranslatedString $description The payment method configuration description can be used to show a text during the payment process. Choose an appropriate description as it will be displayed to your customer.
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

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
     * Gets image_resource_path
     *
     * @return \Wallee\Sdk\Model\ModelResourcePath
     */
    public function getImageResourcePath()
    {
        return $this->container['image_resource_path'];
    }

    /**
     * Sets image_resource_path
     *
     * @param \Wallee\Sdk\Model\ModelResourcePath $image_resource_path The image of the payment method configuration overrides the default image of the payment method.
     *
     * @return $this
     */
    public function setImageResourcePath($image_resource_path)
    {
        $this->container['image_resource_path'] = $image_resource_path;

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
     * @param string $name The payment method configuration name is used internally to identify the payment method configuration. For example the name is used within search fields and hence it should be distinct and descriptive.
     *
     * @return $this
     */
    public function setName($name)
    {
        if (!is_null($name) && (mb_strlen($name) > 100)) {
            throw new \InvalidArgumentException('invalid length for $name when calling PaymentMethodConfiguration., must be smaller than or equal to 100.');
        }

        $this->container['name'] = $name;

        return $this;
    }
    

    /**
     * Gets one_click_payment_mode
     *
     * @return \Wallee\Sdk\Model\OneClickPaymentMode
     */
    public function getOneClickPaymentMode()
    {
        return $this->container['one_click_payment_mode'];
    }

    /**
     * Sets one_click_payment_mode
     *
     * @param \Wallee\Sdk\Model\OneClickPaymentMode $one_click_payment_mode When the buyer is present on the payment page or within the iFrame the payment details can be stored automatically. The buyer will be able to use the stored payment details for subsequent transactions. When the transaction already contains a token one-click payments are disabled anyway
     *
     * @return $this
     */
    public function setOneClickPaymentMode($one_click_payment_mode)
    {
        $this->container['one_click_payment_mode'] = $one_click_payment_mode;

        return $this;
    }
    

    /**
     * Gets payment_method
     *
     * @return int
     */
    public function getPaymentMethod()
    {
        return $this->container['payment_method'];
    }

    /**
     * Sets payment_method
     *
     * @param int $payment_method 
     *
     * @return $this
     */
    public function setPaymentMethod($payment_method)
    {
        $this->container['payment_method'] = $payment_method;

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
     * Gets resolved_description
     *
     * @return map[string,string]
     */
    public function getResolvedDescription()
    {
        return $this->container['resolved_description'];
    }

    /**
     * Sets resolved_description
     *
     * @param map[string,string] $resolved_description The resolved description uses the specified description or the default one when it is not overridden.
     *
     * @return $this
     */
    public function setResolvedDescription($resolved_description)
    {
        $this->container['resolved_description'] = $resolved_description;

        return $this;
    }
    

    /**
     * Gets resolved_image_url
     *
     * @return string
     */
    public function getResolvedImageUrl()
    {
        return $this->container['resolved_image_url'];
    }

    /**
     * Sets resolved_image_url
     *
     * @param string $resolved_image_url The resolved URL of the image to use with this payment method.
     *
     * @return $this
     */
    public function setResolvedImageUrl($resolved_image_url)
    {
        $this->container['resolved_image_url'] = $resolved_image_url;

        return $this;
    }
    

    /**
     * Gets resolved_title
     *
     * @return map[string,string]
     */
    public function getResolvedTitle()
    {
        return $this->container['resolved_title'];
    }

    /**
     * Sets resolved_title
     *
     * @param map[string,string] $resolved_title The resolved title uses the specified title or the default one when it is not overridden.
     *
     * @return $this
     */
    public function setResolvedTitle($resolved_title)
    {
        $this->container['resolved_title'] = $resolved_title;

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
     * @param int $sort_order The sort order of the payment method determines the ordering of the methods shown to the user during the payment process.
     *
     * @return $this
     */
    public function setSortOrder($sort_order)
    {
        $this->container['sort_order'] = $sort_order;

        return $this;
    }
    

    /**
     * Gets space_id
     *
     * @return int
     */
    public function getSpaceId()
    {
        return $this->container['space_id'];
    }

    /**
     * Sets space_id
     *
     * @param int $space_id 
     *
     * @return $this
     */
    public function setSpaceId($space_id)
    {
        $this->container['space_id'] = $space_id;

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
     * @param \Wallee\Sdk\Model\DatabaseTranslatedString $title The title of the payment method configuration is used within the payment process. The title is visible to the customer.
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


