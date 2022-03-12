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
 * ChargeAttempt model
 *
 * @category    Class
 * @description 
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class ChargeAttempt extends TransactionAwareEntity 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ChargeAttempt';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'charge' => '\Wallee\Sdk\Model\Charge',
        'completion_behavior' => '\Wallee\Sdk\Model\TransactionCompletionBehavior',
        'connector_configuration' => '\Wallee\Sdk\Model\PaymentConnectorConfiguration',
        'created_on' => '\DateTime',
        'environment' => '\Wallee\Sdk\Model\ChargeAttemptEnvironment',
        'failed_on' => '\DateTime',
        'failure_reason' => '\Wallee\Sdk\Model\FailureReason',
        'initializing_token_version' => 'bool',
        'invocation' => '\Wallee\Sdk\Model\ConnectorInvocation',
        'labels' => '\Wallee\Sdk\Model\Label[]',
        'language' => 'string',
        'next_update_on' => '\DateTime',
        'planned_purge_date' => '\DateTime',
        'redirection_url' => 'string',
        'sales_channel' => 'int',
        'space_view_id' => 'int',
        'state' => '\Wallee\Sdk\Model\ChargeAttemptState',
        'succeeded_on' => '\DateTime',
        'terminal' => '\Wallee\Sdk\Model\PaymentTerminal',
        'time_zone' => 'string',
        'timeout_on' => '\DateTime',
        'token_version' => '\Wallee\Sdk\Model\TokenVersion',
        'user_failure_message' => 'string',
        'version' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'charge' => null,
        'completion_behavior' => null,
        'connector_configuration' => null,
        'created_on' => 'date-time',
        'environment' => null,
        'failed_on' => 'date-time',
        'failure_reason' => null,
        'initializing_token_version' => null,
        'invocation' => null,
        'labels' => null,
        'language' => null,
        'next_update_on' => 'date-time',
        'planned_purge_date' => 'date-time',
        'redirection_url' => null,
        'sales_channel' => 'int64',
        'space_view_id' => 'int64',
        'state' => null,
        'succeeded_on' => 'date-time',
        'terminal' => null,
        'time_zone' => null,
        'timeout_on' => 'date-time',
        'token_version' => null,
        'user_failure_message' => null,
        'version' => 'int32'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'charge' => 'charge',
        'completion_behavior' => 'completionBehavior',
        'connector_configuration' => 'connectorConfiguration',
        'created_on' => 'createdOn',
        'environment' => 'environment',
        'failed_on' => 'failedOn',
        'failure_reason' => 'failureReason',
        'initializing_token_version' => 'initializingTokenVersion',
        'invocation' => 'invocation',
        'labels' => 'labels',
        'language' => 'language',
        'next_update_on' => 'nextUpdateOn',
        'planned_purge_date' => 'plannedPurgeDate',
        'redirection_url' => 'redirectionUrl',
        'sales_channel' => 'salesChannel',
        'space_view_id' => 'spaceViewId',
        'state' => 'state',
        'succeeded_on' => 'succeededOn',
        'terminal' => 'terminal',
        'time_zone' => 'timeZone',
        'timeout_on' => 'timeoutOn',
        'token_version' => 'tokenVersion',
        'user_failure_message' => 'userFailureMessage',
        'version' => 'version'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'charge' => 'setCharge',
        'completion_behavior' => 'setCompletionBehavior',
        'connector_configuration' => 'setConnectorConfiguration',
        'created_on' => 'setCreatedOn',
        'environment' => 'setEnvironment',
        'failed_on' => 'setFailedOn',
        'failure_reason' => 'setFailureReason',
        'initializing_token_version' => 'setInitializingTokenVersion',
        'invocation' => 'setInvocation',
        'labels' => 'setLabels',
        'language' => 'setLanguage',
        'next_update_on' => 'setNextUpdateOn',
        'planned_purge_date' => 'setPlannedPurgeDate',
        'redirection_url' => 'setRedirectionUrl',
        'sales_channel' => 'setSalesChannel',
        'space_view_id' => 'setSpaceViewId',
        'state' => 'setState',
        'succeeded_on' => 'setSucceededOn',
        'terminal' => 'setTerminal',
        'time_zone' => 'setTimeZone',
        'timeout_on' => 'setTimeoutOn',
        'token_version' => 'setTokenVersion',
        'user_failure_message' => 'setUserFailureMessage',
        'version' => 'setVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'charge' => 'getCharge',
        'completion_behavior' => 'getCompletionBehavior',
        'connector_configuration' => 'getConnectorConfiguration',
        'created_on' => 'getCreatedOn',
        'environment' => 'getEnvironment',
        'failed_on' => 'getFailedOn',
        'failure_reason' => 'getFailureReason',
        'initializing_token_version' => 'getInitializingTokenVersion',
        'invocation' => 'getInvocation',
        'labels' => 'getLabels',
        'language' => 'getLanguage',
        'next_update_on' => 'getNextUpdateOn',
        'planned_purge_date' => 'getPlannedPurgeDate',
        'redirection_url' => 'getRedirectionUrl',
        'sales_channel' => 'getSalesChannel',
        'space_view_id' => 'getSpaceViewId',
        'state' => 'getState',
        'succeeded_on' => 'getSucceededOn',
        'terminal' => 'getTerminal',
        'time_zone' => 'getTimeZone',
        'timeout_on' => 'getTimeoutOn',
        'token_version' => 'getTokenVersion',
        'user_failure_message' => 'getUserFailureMessage',
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

        
        $this->container['charge'] = isset($data['charge']) ? $data['charge'] : null;
        
        $this->container['completion_behavior'] = isset($data['completion_behavior']) ? $data['completion_behavior'] : null;
        
        $this->container['connector_configuration'] = isset($data['connector_configuration']) ? $data['connector_configuration'] : null;
        
        $this->container['created_on'] = isset($data['created_on']) ? $data['created_on'] : null;
        
        $this->container['environment'] = isset($data['environment']) ? $data['environment'] : null;
        
        $this->container['failed_on'] = isset($data['failed_on']) ? $data['failed_on'] : null;
        
        $this->container['failure_reason'] = isset($data['failure_reason']) ? $data['failure_reason'] : null;
        
        $this->container['initializing_token_version'] = isset($data['initializing_token_version']) ? $data['initializing_token_version'] : null;
        
        $this->container['invocation'] = isset($data['invocation']) ? $data['invocation'] : null;
        
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        
        $this->container['next_update_on'] = isset($data['next_update_on']) ? $data['next_update_on'] : null;
        
        $this->container['planned_purge_date'] = isset($data['planned_purge_date']) ? $data['planned_purge_date'] : null;
        
        $this->container['redirection_url'] = isset($data['redirection_url']) ? $data['redirection_url'] : null;
        
        $this->container['sales_channel'] = isset($data['sales_channel']) ? $data['sales_channel'] : null;
        
        $this->container['space_view_id'] = isset($data['space_view_id']) ? $data['space_view_id'] : null;
        
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        
        $this->container['succeeded_on'] = isset($data['succeeded_on']) ? $data['succeeded_on'] : null;
        
        $this->container['terminal'] = isset($data['terminal']) ? $data['terminal'] : null;
        
        $this->container['time_zone'] = isset($data['time_zone']) ? $data['time_zone'] : null;
        
        $this->container['timeout_on'] = isset($data['timeout_on']) ? $data['timeout_on'] : null;
        
        $this->container['token_version'] = isset($data['token_version']) ? $data['token_version'] : null;
        
        $this->container['user_failure_message'] = isset($data['user_failure_message']) ? $data['user_failure_message'] : null;
        
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

        if (!is_null($this->container['user_failure_message']) && (mb_strlen($this->container['user_failure_message']) > 2000)) {
            $invalidProperties[] = "invalid value for 'user_failure_message', the character length must be smaller than or equal to 2000.";
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
     * Gets charge
     *
     * @return \Wallee\Sdk\Model\Charge
     */
    public function getCharge()
    {
        return $this->container['charge'];
    }

    /**
     * Sets charge
     *
     * @param \Wallee\Sdk\Model\Charge $charge 
     *
     * @return $this
     */
    public function setCharge($charge)
    {
        $this->container['charge'] = $charge;

        return $this;
    }
    

    /**
     * Gets completion_behavior
     *
     * @return \Wallee\Sdk\Model\TransactionCompletionBehavior
     */
    public function getCompletionBehavior()
    {
        return $this->container['completion_behavior'];
    }

    /**
     * Sets completion_behavior
     *
     * @param \Wallee\Sdk\Model\TransactionCompletionBehavior $completion_behavior 
     *
     * @return $this
     */
    public function setCompletionBehavior($completion_behavior)
    {
        $this->container['completion_behavior'] = $completion_behavior;

        return $this;
    }
    

    /**
     * Gets connector_configuration
     *
     * @return \Wallee\Sdk\Model\PaymentConnectorConfiguration
     */
    public function getConnectorConfiguration()
    {
        return $this->container['connector_configuration'];
    }

    /**
     * Sets connector_configuration
     *
     * @param \Wallee\Sdk\Model\PaymentConnectorConfiguration $connector_configuration 
     *
     * @return $this
     */
    public function setConnectorConfiguration($connector_configuration)
    {
        $this->container['connector_configuration'] = $connector_configuration;

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
     * Gets environment
     *
     * @return \Wallee\Sdk\Model\ChargeAttemptEnvironment
     */
    public function getEnvironment()
    {
        return $this->container['environment'];
    }

    /**
     * Sets environment
     *
     * @param \Wallee\Sdk\Model\ChargeAttemptEnvironment $environment 
     *
     * @return $this
     */
    public function setEnvironment($environment)
    {
        $this->container['environment'] = $environment;

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
     * Gets failure_reason
     *
     * @return \Wallee\Sdk\Model\FailureReason
     */
    public function getFailureReason()
    {
        return $this->container['failure_reason'];
    }

    /**
     * Sets failure_reason
     *
     * @param \Wallee\Sdk\Model\FailureReason $failure_reason 
     *
     * @return $this
     */
    public function setFailureReason($failure_reason)
    {
        $this->container['failure_reason'] = $failure_reason;

        return $this;
    }
    

    /**
     * Gets initializing_token_version
     *
     * @return bool
     */
    public function getInitializingTokenVersion()
    {
        return $this->container['initializing_token_version'];
    }

    /**
     * Sets initializing_token_version
     *
     * @param bool $initializing_token_version 
     *
     * @return $this
     */
    public function setInitializingTokenVersion($initializing_token_version)
    {
        $this->container['initializing_token_version'] = $initializing_token_version;

        return $this;
    }
    

    /**
     * Gets invocation
     *
     * @return \Wallee\Sdk\Model\ConnectorInvocation
     */
    public function getInvocation()
    {
        return $this->container['invocation'];
    }

    /**
     * Sets invocation
     *
     * @param \Wallee\Sdk\Model\ConnectorInvocation $invocation 
     *
     * @return $this
     */
    public function setInvocation($invocation)
    {
        $this->container['invocation'] = $invocation;

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
     * Gets next_update_on
     *
     * @return \DateTime
     */
    public function getNextUpdateOn()
    {
        return $this->container['next_update_on'];
    }

    /**
     * Sets next_update_on
     *
     * @param \DateTime $next_update_on 
     *
     * @return $this
     */
    public function setNextUpdateOn($next_update_on)
    {
        $this->container['next_update_on'] = $next_update_on;

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
     * Gets redirection_url
     *
     * @return string
     */
    public function getRedirectionUrl()
    {
        return $this->container['redirection_url'];
    }

    /**
     * Sets redirection_url
     *
     * @param string $redirection_url 
     *
     * @return $this
     */
    public function setRedirectionUrl($redirection_url)
    {
        $this->container['redirection_url'] = $redirection_url;

        return $this;
    }
    

    /**
     * Gets sales_channel
     *
     * @return int
     */
    public function getSalesChannel()
    {
        return $this->container['sales_channel'];
    }

    /**
     * Sets sales_channel
     *
     * @param int $sales_channel 
     *
     * @return $this
     */
    public function setSalesChannel($sales_channel)
    {
        $this->container['sales_channel'] = $sales_channel;

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
     * Gets state
     *
     * @return \Wallee\Sdk\Model\ChargeAttemptState
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param \Wallee\Sdk\Model\ChargeAttemptState $state 
     *
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }
    

    /**
     * Gets succeeded_on
     *
     * @return \DateTime
     */
    public function getSucceededOn()
    {
        return $this->container['succeeded_on'];
    }

    /**
     * Sets succeeded_on
     *
     * @param \DateTime $succeeded_on 
     *
     * @return $this
     */
    public function setSucceededOn($succeeded_on)
    {
        $this->container['succeeded_on'] = $succeeded_on;

        return $this;
    }
    

    /**
     * Gets terminal
     *
     * @return \Wallee\Sdk\Model\PaymentTerminal
     */
    public function getTerminal()
    {
        return $this->container['terminal'];
    }

    /**
     * Sets terminal
     *
     * @param \Wallee\Sdk\Model\PaymentTerminal $terminal 
     *
     * @return $this
     */
    public function setTerminal($terminal)
    {
        $this->container['terminal'] = $terminal;

        return $this;
    }
    

    /**
     * Gets time_zone
     *
     * @return string
     */
    public function getTimeZone()
    {
        return $this->container['time_zone'];
    }

    /**
     * Sets time_zone
     *
     * @param string $time_zone 
     *
     * @return $this
     */
    public function setTimeZone($time_zone)
    {
        $this->container['time_zone'] = $time_zone;

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
     * Gets token_version
     *
     * @return \Wallee\Sdk\Model\TokenVersion
     */
    public function getTokenVersion()
    {
        return $this->container['token_version'];
    }

    /**
     * Sets token_version
     *
     * @param \Wallee\Sdk\Model\TokenVersion $token_version 
     *
     * @return $this
     */
    public function setTokenVersion($token_version)
    {
        $this->container['token_version'] = $token_version;

        return $this;
    }
    

    /**
     * Gets user_failure_message
     *
     * @return string
     */
    public function getUserFailureMessage()
    {
        return $this->container['user_failure_message'];
    }

    /**
     * Sets user_failure_message
     *
     * @param string $user_failure_message The user failure message contains the message for the user in case the attempt failed. The message is localized into the language specified on the transaction.
     *
     * @return $this
     */
    public function setUserFailureMessage($user_failure_message)
    {
        if (!is_null($user_failure_message) && (mb_strlen($user_failure_message) > 2000)) {
            throw new \InvalidArgumentException('invalid length for $user_failure_message when calling ChargeAttempt., must be smaller than or equal to 2000.');
        }

        $this->container['user_failure_message'] = $user_failure_message;

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


