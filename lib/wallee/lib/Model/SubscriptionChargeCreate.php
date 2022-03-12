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
 * SubscriptionChargeCreate model
 *
 * @category    Class
 * @description The subscription charge represents a single charge carried out for a particular subscription.
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class SubscriptionChargeCreate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SubscriptionCharge.Create';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'external_id' => 'string',
        'failed_url' => 'string',
        'planned_execution_date' => '\DateTime',
        'processing_type' => '\Wallee\Sdk\Model\SubscriptionChargeProcessingType',
        'reference' => 'string',
        'subscription' => 'int',
        'success_url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'external_id' => null,
        'failed_url' => null,
        'planned_execution_date' => 'date-time',
        'processing_type' => null,
        'reference' => null,
        'subscription' => 'int64',
        'success_url' => null
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'external_id' => 'externalId',
        'failed_url' => 'failedUrl',
        'planned_execution_date' => 'plannedExecutionDate',
        'processing_type' => 'processingType',
        'reference' => 'reference',
        'subscription' => 'subscription',
        'success_url' => 'successUrl'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'external_id' => 'setExternalId',
        'failed_url' => 'setFailedUrl',
        'planned_execution_date' => 'setPlannedExecutionDate',
        'processing_type' => 'setProcessingType',
        'reference' => 'setReference',
        'subscription' => 'setSubscription',
        'success_url' => 'setSuccessUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'external_id' => 'getExternalId',
        'failed_url' => 'getFailedUrl',
        'planned_execution_date' => 'getPlannedExecutionDate',
        'processing_type' => 'getProcessingType',
        'reference' => 'getReference',
        'subscription' => 'getSubscription',
        'success_url' => 'getSuccessUrl'
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
        
        $this->container['external_id'] = isset($data['external_id']) ? $data['external_id'] : null;
        
        $this->container['failed_url'] = isset($data['failed_url']) ? $data['failed_url'] : null;
        
        $this->container['planned_execution_date'] = isset($data['planned_execution_date']) ? $data['planned_execution_date'] : null;
        
        $this->container['processing_type'] = isset($data['processing_type']) ? $data['processing_type'] : null;
        
        $this->container['reference'] = isset($data['reference']) ? $data['reference'] : null;
        
        $this->container['subscription'] = isset($data['subscription']) ? $data['subscription'] : null;
        
        $this->container['success_url'] = isset($data['success_url']) ? $data['success_url'] : null;
        
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['external_id'] === null) {
            $invalidProperties[] = "'external_id' can't be null";
        }
        if (!is_null($this->container['failed_url']) && (mb_strlen($this->container['failed_url']) > 500)) {
            $invalidProperties[] = "invalid value for 'failed_url', the character length must be smaller than or equal to 500.";
        }

        if (!is_null($this->container['failed_url']) && (mb_strlen($this->container['failed_url']) < 9)) {
            $invalidProperties[] = "invalid value for 'failed_url', the character length must be bigger than or equal to 9.";
        }

        if ($this->container['processing_type'] === null) {
            $invalidProperties[] = "'processing_type' can't be null";
        }
        if (!is_null($this->container['reference']) && (mb_strlen($this->container['reference']) > 100)) {
            $invalidProperties[] = "invalid value for 'reference', the character length must be smaller than or equal to 100.";
        }

        if ($this->container['subscription'] === null) {
            $invalidProperties[] = "'subscription' can't be null";
        }
        if (!is_null($this->container['success_url']) && (mb_strlen($this->container['success_url']) > 500)) {
            $invalidProperties[] = "invalid value for 'success_url', the character length must be smaller than or equal to 500.";
        }

        if (!is_null($this->container['success_url']) && (mb_strlen($this->container['success_url']) < 9)) {
            $invalidProperties[] = "invalid value for 'success_url', the character length must be bigger than or equal to 9.";
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
     * Gets external_id
     *
     * @return string
     */
    public function getExternalId()
    {
        return $this->container['external_id'];
    }

    /**
     * Sets external_id
     *
     * @param string $external_id A client generated nonce which identifies the entity to be created. Subsequent creation requests with the same external ID will not create new entities but return the initially created entity instead.
     *
     * @return $this
     */
    public function setExternalId($external_id)
    {
        $this->container['external_id'] = $external_id;

        return $this;
    }
    

    /**
     * Gets failed_url
     *
     * @return string
     */
    public function getFailedUrl()
    {
        return $this->container['failed_url'];
    }

    /**
     * Sets failed_url
     *
     * @param string $failed_url The user will be redirected to failed URL when the transaction could not be authorized or completed. In case no failed URL is specified a default failed page will be displayed.
     *
     * @return $this
     */
    public function setFailedUrl($failed_url)
    {
        if (!is_null($failed_url) && (mb_strlen($failed_url) > 500)) {
            throw new \InvalidArgumentException('invalid length for $failed_url when calling SubscriptionChargeCreate., must be smaller than or equal to 500.');
        }
        if (!is_null($failed_url) && (mb_strlen($failed_url) < 9)) {
            throw new \InvalidArgumentException('invalid length for $failed_url when calling SubscriptionChargeCreate., must be bigger than or equal to 9.');
        }

        $this->container['failed_url'] = $failed_url;

        return $this;
    }
    

    /**
     * Gets planned_execution_date
     *
     * @return \DateTime
     */
    public function getPlannedExecutionDate()
    {
        return $this->container['planned_execution_date'];
    }

    /**
     * Sets planned_execution_date
     *
     * @param \DateTime $planned_execution_date 
     *
     * @return $this
     */
    public function setPlannedExecutionDate($planned_execution_date)
    {
        $this->container['planned_execution_date'] = $planned_execution_date;

        return $this;
    }
    

    /**
     * Gets processing_type
     *
     * @return \Wallee\Sdk\Model\SubscriptionChargeProcessingType
     */
    public function getProcessingType()
    {
        return $this->container['processing_type'];
    }

    /**
     * Sets processing_type
     *
     * @param \Wallee\Sdk\Model\SubscriptionChargeProcessingType $processing_type 
     *
     * @return $this
     */
    public function setProcessingType($processing_type)
    {
        $this->container['processing_type'] = $processing_type;

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
     * @param string $reference 
     *
     * @return $this
     */
    public function setReference($reference)
    {
        if (!is_null($reference) && (mb_strlen($reference) > 100)) {
            throw new \InvalidArgumentException('invalid length for $reference when calling SubscriptionChargeCreate., must be smaller than or equal to 100.');
        }

        $this->container['reference'] = $reference;

        return $this;
    }
    

    /**
     * Gets subscription
     *
     * @return int
     */
    public function getSubscription()
    {
        return $this->container['subscription'];
    }

    /**
     * Sets subscription
     *
     * @param int $subscription The field subscription indicates the subscription to which the charge belongs to.
     *
     * @return $this
     */
    public function setSubscription($subscription)
    {
        $this->container['subscription'] = $subscription;

        return $this;
    }
    

    /**
     * Gets success_url
     *
     * @return string
     */
    public function getSuccessUrl()
    {
        return $this->container['success_url'];
    }

    /**
     * Sets success_url
     *
     * @param string $success_url The user will be redirected to success URL when the transaction could be authorized or completed. In case no success URL is specified a default success page will be displayed.
     *
     * @return $this
     */
    public function setSuccessUrl($success_url)
    {
        if (!is_null($success_url) && (mb_strlen($success_url) > 500)) {
            throw new \InvalidArgumentException('invalid length for $success_url when calling SubscriptionChargeCreate., must be smaller than or equal to 500.');
        }
        if (!is_null($success_url) && (mb_strlen($success_url) < 9)) {
            throw new \InvalidArgumentException('invalid length for $success_url when calling SubscriptionChargeCreate., must be bigger than or equal to 9.');
        }

        $this->container['success_url'] = $success_url;

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


