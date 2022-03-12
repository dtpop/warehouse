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
 * SubscriptionState model
 *
 * @category    Class
 * @description 
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class SubscriptionState
{
    /**
     * Possible values of this enum
     */
    const PENDING = 'PENDING';
    const INITIALIZING = 'INITIALIZING';
    const FAILED = 'FAILED';
    const ACTIVE = 'ACTIVE';
    const SUSPENDED = 'SUSPENDED';
    const TERMINATION_SCHEDULED = 'TERMINATION_SCHEDULED';
    const TERMINATING = 'TERMINATING';
    const TERMINATED = 'TERMINATED';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::PENDING,
            self::INITIALIZING,
            self::FAILED,
            self::ACTIVE,
            self::SUSPENDED,
            self::TERMINATION_SCHEDULED,
            self::TERMINATING,
            self::TERMINATED,
        ];
    }
}


