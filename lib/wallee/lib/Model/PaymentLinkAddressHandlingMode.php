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
 * PaymentLinkAddressHandlingMode model
 *
 * @category    Class
 * @description The address handling mode controls if the address is required and how it is enforced to be provided.
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class PaymentLinkAddressHandlingMode
{
    /**
     * Possible values of this enum
     */
    const NOT_REQUIRED = 'NOT_REQUIRED';
    const REQUIRED_IN_URL = 'REQUIRED_IN_URL';
    const REQUIRED_ON_PAYMENT_PAGE = 'REQUIRED_ON_PAYMENT_PAGE';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NOT_REQUIRED,
            self::REQUIRED_IN_URL,
            self::REQUIRED_ON_PAYMENT_PAGE,
        ];
    }
}


