<?php

class GiroCheckout_SDK_Exception_helper extends Exception {
	
	public function __construct($message = null, $code = 0) {
    $Config = GiroCheckout_SDK_Config::getInstance();

		if($Config->getConfig('DEBUG_MODE')) GiroCheckout_SDK_Debug_helper::getInstance()->LogException($message);
		parent::__construct($message, $code);
	}
}