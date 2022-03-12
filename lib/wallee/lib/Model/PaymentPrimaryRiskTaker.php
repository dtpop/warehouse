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
 * PaymentPrimaryRiskTaker model
 *
 * @category    Class
 * @description The primary risk taker will have the main loss when one party of the contract does not fulfill the contractual duties.
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class PaymentPrimaryRiskTaker
{
    /**
     * Possible values of this enum
     */
    const CUSTOMER = 'CUSTOMER';
    const MERCHANT = 'MERCHANT';
    const THIRD_PARTY = 'THIRD_PARTY';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CUSTOMER,
            self::MERCHANT,
            self::THIRD_PARTY,
        ];
    }
}


