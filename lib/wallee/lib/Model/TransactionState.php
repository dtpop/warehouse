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
 * TransactionState model
 *
 * @category    Class
 * @description 
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class TransactionState
{
    /**
     * Possible values of this enum
     */
    const CREATE = 'CREATE';
    const PENDING = 'PENDING';
    const CONFIRMED = 'CONFIRMED';
    const PROCESSING = 'PROCESSING';
    const FAILED = 'FAILED';
    const AUTHORIZED = 'AUTHORIZED';
    const VOIDED = 'VOIDED';
    const COMPLETED = 'COMPLETED';
    const FULFILL = 'FULFILL';
    const DECLINE = 'DECLINE';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CREATE,
            self::PENDING,
            self::CONFIRMED,
            self::PROCESSING,
            self::FAILED,
            self::AUTHORIZED,
            self::VOIDED,
            self::COMPLETED,
            self::FULFILL,
            self::DECLINE,
        ];
    }
}


