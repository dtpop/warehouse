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
 * RestAddressFormatField model
 *
 * @category    Class
 * @description 
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class RestAddressFormatField
{
    /**
     * Possible values of this enum
     */
    const GIVEN_NAME = 'GIVEN_NAME';
    const FAMILY_NAME = 'FAMILY_NAME';
    const ORGANIZATION_NAME = 'ORGANIZATION_NAME';
    const STREET = 'STREET';
    const DEPENDENT_LOCALITY = 'DEPENDENT_LOCALITY';
    const CITY = 'CITY';
    const POSTAL_STATE = 'POSTAL_STATE';
    const POST_CODE = 'POST_CODE';
    const SORTING_CODE = 'SORTING_CODE';
    const COUNTRY = 'COUNTRY';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::GIVEN_NAME,
            self::FAMILY_NAME,
            self::ORGANIZATION_NAME,
            self::STREET,
            self::DEPENDENT_LOCALITY,
            self::CITY,
            self::POSTAL_STATE,
            self::POST_CODE,
            self::SORTING_CODE,
            self::COUNTRY,
        ];
    }
}


