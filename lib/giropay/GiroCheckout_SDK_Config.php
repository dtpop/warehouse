<?php
/**
 * Loads GiroCheckout SDK Config
 *
 * @package GiroCheckout
 * @version $Revision: 106 $ / $Date: 2015-05-05 11:57:59 +0200 (Di, 05 Mai 2015) $
 */
class GiroCheckout_SDK_Config
{
  static private $instance = null;
  private $config = null;

  static public function getInstance()
  {
    if (null === self::$instance) {
      self::$instance = new self;

      // Set default values
      self::$instance->setConfig('CURLOPT_CAINFO',null);
      self::$instance->setConfig('CURLOPT_SSL_VERIFYPEER',TRUE);
      self::$instance->setConfig('CURLOPT_SSL_VERIFYHOST',2);
      self::$instance->setConfig('CURLOPT_CONNECTTIMEOUT',15);

      // Optional proxy parameters
      self::$instance->setConfig('CURLOPT_PROXY', null);
      self::$instance->setConfig('CURLOPT_PROXYPORT', null);
      self::$instance->setConfig('CURLOPT_PROXYUSERPWD', null);

      // Debug mode and log
      self::$instance->setConfig('DEBUG_MODE',FALSE);
      self::$instance->setConfig('DEBUG_LOG_PATH',dirname(__FILE__).'/log');
    }
    return self::$instance;
  }

  private function __construct(){}
  private function __clone(){}

  /** Getter for config values
   *
   * @param $key
   * @return null
   */
  public function getConfig($key) {
    if (isset($this->config[$key])) return $this->config[$key];
    return null;
  }

  /** Setter for config values
   *
   * @param $key
   * @param $value
   * @return bool
   */
  public function setConfig($key,$value) {

    switch ($key) {
      //curl options
      case 'CURLOPT_CAINFO':
      case 'CURLOPT_SSL_VERIFYPEER':
      case 'CURLOPT_SSL_VERIFYHOST':
      case 'CURLOPT_CONNECTTIMEOUT':

      // Proxy
      case 'CURLOPT_PROXY':
      case 'CURLOPT_PROXYPORT':
      case 'CURLOPT_PROXYUSERPWD':

      // Debug
      case 'DEBUG_LOG_PATH':
      case 'DEBUG_MODE':
        $this->config[$key] = $value;
        return true;
        break;

      default:
        return false;
    }
  }

}