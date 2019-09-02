<?php
/**
 * Used for notification and redirect calls from GiroCheckout to the merchant.
 *
 * - notify means that GiroCheckout sends the final result of an initiated transaction.
 * - redirect means that the customer is sent back to the merchant, if he was redirected to somewhere outside
 *   the merchants website.
 *
 * how to use (see example section):
 * 1. Instantiate a new Notify class and pass an api method to the constructor.
 * 2. Parse the notification by given array including the GET Params.
 * 3. Check the success of the transaction.
 *
 * @package GiroCheckout
 * @version $Revision: 253 $ / $Date: 2019-02-20 17:41:56 -0300 (Wed, 20 Feb 2019) $
 */

class GiroCheckout_SDK_Notify {

    /*
     * stores any committed notify parameter which was sent to GiroConnect
     */
    private $notifyParams = array();

    /*
     * stores given secret
     */
    private $secret = '';

    /*
     * stores the api request method object
     */
    private $requestMethod;

    /*
     * stores the api request method object
     */
    private $notifyResponse = array();


    /**
     * instantiates notification
     *
     * a request method instance has to be passed (see examples section)
     *
     * @param InterfaceApi/String $apiCallMethod
     * @throws Exception if notification is not possible
     */
    function __construct($apiCallMethod) {
      $Config = GiroCheckout_SDK_Config::getInstance();

      if(is_object($apiCallMethod)) {
        if($Config->getConfig('DEBUG_MODE')) {
          $callMethod = str_replace("GiroCheckout_SDK_",'', get_class($apiCallMethod));
          GiroCheckout_SDK_Debug_helper::getInstance()->init('notify-'.$callMethod);
          GiroCheckout_SDK_Debug_helper::getInstance()->logTransaction($callMethod);
        }
        $this->requestMethod = $apiCallMethod;
      }
      elseif (is_string($apiCallMethod)) {
        if($Config->getConfig('DEBUG_MODE')) {
          GiroCheckout_SDK_Debug_helper::getInstance()->init('notify-'.$apiCallMethod);
          GiroCheckout_SDK_Debug_helper::getInstance()->logTransaction($apiCallMethod);
        }
        $this->requestMethod = GiroCheckout_SDK_TransactionType_helper::getTransactionTypeByName($apiCallMethod);

        if(is_null($this->requestMethod))
          throw new GiroCheckout_SDK_Exception_helper('Failure: API call method unknown');
      }

      if (!$this->requestMethod->hasNotifyURL() && !$this->requestMethod->hasRedirectURL()) {
        if($Config->getConfig('DEBUG_MODE')) GiroCheckout_SDK_Debug_helper::getInstance()->init('notify-'.$apiCallMethod);
        throw new GiroCheckout_SDK_Exception_helper('Failure: notify or redirect not possible with this api call');
      }
    }

    /**
     * returns the data from the given parameter
     *
     * @param String $param response parameter key
     * @return String data of the given response key
     */
    public function getResponseParam($param) {
      if(isset($this->notifyParams[$param]))
          return $this->notifyParams[$param];
      return null;
    }


    /**
     * returns the whole notification param data 
     * 
     * @return Mixed[] array of data
     */
    public function getResponseParams() {
    	if(isset($this->notifyParams))
    		return $this->notifyParams;
    	return null;
    }
    
    /*
     * Sets the secret which is used for hash generation or hash comparison.
     *
     * @param String $secret
     * @return String $this own instance
     */
    public function setSecret($secret) {
      $this->secret = $secret;
      return $this;
    }

    /*
     * parses the given notification array
     *
     * @param mixed[] $params pas the $_GET array or validated input
     * @return boolean if no error occurred
     * @throws Exception if an error occurs
     */
    public function parseNotification($params) {
      $Config = GiroCheckout_SDK_Config::getInstance();

      if($Config->getConfig('DEBUG_MODE')) GiroCheckout_SDK_Debug_helper::getInstance()->logNotificationInput($params);

      if(!is_array($params) || empty($params)) throw new GiroCheckout_SDK_Exception_helper('no data given');
      try {
          $this->notifyParams = $this->requestMethod->checkNotification($params);

          if($Config->getConfig('DEBUG_MODE')) GiroCheckout_SDK_Debug_helper::getInstance()->logNotificationParams($this->notifyParams);

          if (!$this->checkHash()) {
            throw new GiroCheckout_SDK_Exception_helper('hash mismatch');
          }
      }
      catch (Exception $e) {
          throw new GiroCheckout_SDK_Exception_helper('Failure: '.  $e->getMessage()."\n");
      }

      return TRUE;
    }

    /*
     * validates the submitted hash by comparing to a self generated Hash
     *
     * @return boolean true if hash test passed
     */
    public function checkHash() {
      $string = '';
      $hashFieldName = $this->requestMethod->getNotifyHashName();

      foreach ($this->notifyParams as $k => $v) {
          if ($k !== $hashFieldName)
              $string .= $v;
      }

      if ($this->notifyParams[$hashFieldName] === hash_hmac('md5', $string, $this->secret)) {
          return true;
      }

      return false;
    }

    /*
     * returns true if the payment transaction was successful
     *
     * @return boolean result of payment
     */
    public function paymentSuccessful() {
      if ($this->requestMethod->getTransactionSuccessfulCode() != null) {
        return $this->requestMethod->getTransactionSuccessfulCode() == $this->notifyParams['gcResultPayment'];
      }

      return false;
    }

    /*
     * returns true if the age verification was successful
     *
     * @return boolean result of age verification
     */
    public function avsSuccessful() {
      if ($this->requestMethod->getAVSSuccessfulCode() != null) {
        return $this->requestMethod->getAVSSuccessfulCode() == $this->notifyParams['gcResultAVS'];
      }

      return false;
    }

    /*
     * sends header with 200 OK status
     */
    public function sendOkStatus() {
      $Config = GiroCheckout_SDK_Config::getInstance();

      if($Config->getConfig('DEBUG_MODE')) GiroCheckout_SDK_Debug_helper::getInstance()->logNotificationOutput('sendOkStatus');
      header('HTTP/1.1 200 OK');
    }

    /*
     * sends header with 400 Bad Request status
     */
    public function sendBadRequestStatus() {
      $Config = GiroCheckout_SDK_Config::getInstance();

      if($Config->getConfig('DEBUG_MODE')) GiroCheckout_SDK_Debug_helper::getInstance()->logNotificationOutput('sendBadRequestStatus');
      header('HTTP/1.1 400 Bad Request');
    }

    /*
     * sends header with 503 Service Unavailable status
     */
    public function sendServiceUnavailableStatus() {
      $Config = GiroCheckout_SDK_Config::getInstance();

      if($Config->getConfig('DEBUG_MODE')) GiroCheckout_SDK_Debug_helper::getInstance()->logNotificationOutput('sendServiceUnavailableStatus');
      header('HTTP/1.1 503 Service Unavailable');
    }

    /*
     * sends header with 404 Not Found status
     */
    public function sendOtherStatus() {
      $Config = GiroCheckout_SDK_Config::getInstance();

      if($Config->getConfig('DEBUG_MODE')) GiroCheckout_SDK_Debug_helper::getInstance()->logNotificationOutput('sendOtherStatus');
      header('HTTP/1.1 404 Not Found');
    }
    
    /*
     * Gives response message to given code number in the given language.
    *
    * @param integer code
    * @param String language
    * @return String thee codes description in given language
    */
    public function getResponseMessage($responseCode,$lang = 'DE') {
    	return GiroCheckout_SDK_ResponseCode_helper::getMessage($responseCode,$lang);
    }

    /*
     * Stores notification response params used for sending additional info back to GiroCheckout.
     *
     * @param String key
     * @value String value
     */
    public function setNotifyResponseParam($key,$value) {
      switch($key) {
        case 'Result':
        case 'ErrorMessage':
        case 'OrderId':
        case 'CustomerId':
        case 'MailSent':
          $this->notifyResponse[$key] = $value;
          break;
      }
    }

  /**
   * returns a JSON string to be printed to the notification output
   *
   * @return String JSON string
   */
    public function getNotifyResponseStringJson() {
      $response['Result'] = $this->notifyResponse['Result'];
      $response['ErrorMessage'] = (isset($this->notifyResponse['ErrorMessage']) ? $this->notifyResponse['ErrorMessage'] : "");
      $response['OrderId'] = (isset($this->notifyResponse['OrderId']) ? $this->notifyResponse['OrderId'] : "");
      $response['CustomerId'] = (isset($this->notifyResponse['CustomerId']) ? $this->notifyResponse['CustomerId'] : "");
      $response['MailSent'] = (isset($this->notifyResponse['MailSent']) ? $this->notifyResponse['MailSent'] : "");
      $response['Timestamp'] = time();

      return json_encode($this->notifyResponse);
    }
}