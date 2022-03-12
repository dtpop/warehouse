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
 * ShopifySubscriptionProductPricingOption model
 *
 * @category    Class
 * @description 
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class ShopifySubscriptionProductPricingOption
{
    /**
     * Possible values of this enum
     */
    const CURRENT_PRICE = 'CURRENT_PRICE';
    const ORIGINAL_PRICE = 'ORIGINAL_PRICE';
    const FIXED_PRICE = 'FIXED_PRICE';
    const RELATIVE_ADJUSTMENT = 'RELATIVE_ADJUSTMENT';
    const ABSOLUTE_ADJUSTMENT = 'ABSOLUTE_ADJUSTMENT';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CURRENT_PRICE,
            self::ORIGINAL_PRICE,
            self::FIXED_PRICE,
            self::RELATIVE_ADJUSTMENT,
            self::ABSOLUTE_ADJUSTMENT,
        ];
    }
}


