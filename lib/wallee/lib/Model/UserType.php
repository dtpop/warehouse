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
 * UserType model
 *
 * @category    Class
 * @description 
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class UserType
{
    /**
     * Possible values of this enum
     */
    const HUMAN_USER = 'HUMAN_USER';
    const SINGLE_SIGNON_USER = 'SINGLE_SIGNON_USER';
    const APPLICATION_USER = 'APPLICATION_USER';
    const ANONYMOUS_USER = 'ANONYMOUS_USER';
    const SERVER_USER = 'SERVER_USER';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::HUMAN_USER,
            self::SINGLE_SIGNON_USER,
            self::APPLICATION_USER,
            self::ANONYMOUS_USER,
            self::SERVER_USER,
        ];
    }
}


