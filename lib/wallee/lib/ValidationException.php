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


namespace Wallee\Sdk;

use Exception;

/**
 * This exception is used to inform about a failed validation.
 *
 * @category Class
 * @package  Wallee\Sdk
 * @author   customweb GmbH
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
final class ValidationException extends Exception {

	/**
	 * The name of the invalid property.
	 *
	 * @var string
	 */
	 private $property;

	 /**
	  * The instance of the validated model.
	  *
	  * @var object
	  */
	 private $model;

	/**
	 * Constructor.
	 *
	 * @param string $message	the error message
	 * @param string $property	the name of the invalid property
	 * @param object $model		the instance of the validated model
	 */
	public function __construct($message = '', $property = null, $model = null) {
		parent::__construct($message);
		$this->property = $property;
	}

	/**
	 * Returns the name of the invalid property.
	 *
	 * @return string
	 */
	public function getProperty() {
		return $this->property;
	}

	/**
	 * Returns the instance of the validated model.
	 *
	 * @return object
	 */
	public function getModel() {
		return $this->model;
	}

}