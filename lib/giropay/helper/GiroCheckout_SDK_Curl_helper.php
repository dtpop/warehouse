<?php
/**
 * Helper class which manages sending data
 *
 * @package GiroCheckout
 * @version $Revision: 204 $ / $Date: 2017-04-11 11:23:52 -0300 (Tue, 11 Apr 2017) $
 */

class GiroCheckout_SDK_Curl_helper {

  /*
   * submits data by using curl to a given url
   *
   * @param String url where data has to be sent to
   * @param mixed[] array data which has to be sent
   * @return String body of the response
   */
  public static function submit($url, $params) {
    $Config = GiroCheckout_SDK_Config::getInstance();

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HEADER, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));

    // For Windows environments
    if( defined('__GIROSOLUTION_SDK_CERT__') ) {
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
      curl_setopt($ch, CURLOPT_CAINFO, str_replace('\\', '/', __GIROSOLUTION_SDK_CERT__));
    }

    // For Windows environments
    if( defined('__GIROSOLUTION_SDK_SSL_VERIFY_OFF__') && __GIROSOLUTION_SDK_SSL_VERIFY_OFF__ ) {
      curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    }

    if ($Config->getConfig('CURLOPT_SSL_VERIFYPEER')) {
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, $Config->getConfig('CURLOPT_SSL_VERIFYPEER'));
    }

    if ($Config->getConfig('CURLOPT_CAINFO')) {
      curl_setopt($ch, CURLOPT_CAINFO, $Config->getConfig('CURLOPT_CAINFO'));
    }

    if ($Config->getConfig('CURLOPT_SSL_VERIFYHOST')) {
      curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, $Config->getConfig('CURLOPT_SSL_VERIFYHOST'));
    }

    if ($Config->getConfig('CURLOPT_CONNECTTIMEOUT')) {
      curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $Config->getConfig('CURLOPT_CONNECTTIMEOUT'));
    }

    // Begin Proxy
    if( $Config->getConfig('CURLOPT_PROXY') && $Config->getConfig('CURLOPT_PROXYPORT') ) {
      curl_setopt($ch, CURLOPT_PROXY, $Config->getConfig('CURLOPT_PROXY'));
      curl_setopt($ch, CURLOPT_PROXYPORT, $Config->getConfig('CURLOPT_PROXYPORT'));

      if($Config->getConfig('CURLOPT_PROXYUSERPWD')) {
        curl_setopt($ch, CURLOPT_PROXYUSERPWD, $Config->getConfig('CURLOPT_PROXYUSERPWD'));
      }
    }
    // End Proxy

    if ($Config->getConfig('DEBUG_MODE')) {
      curl_setopt($ch, CURLINFO_HEADER_OUT, 1);
    }

    $result = curl_exec($ch);

    if($Config->getConfig('DEBUG_MODE')) { GiroCheckout_SDK_Debug_helper::getInstance()->logRequest(curl_getinfo($ch),$params); }
    if($Config->getConfig('DEBUG_MODE')) { GiroCheckout_SDK_Debug_helper::getInstance()->logReply($result, curl_error($ch)); }

    if($result === false) {
      throw new Exception('cURL: submit failed.');
    }

    curl_close($ch);

    return self::getHeaderAndBody($result);
  }

  /*
   * decodes a json string and returns an array
   *
   * @param String json string
   * @return mixed[] array of an parsed json string
   * @throws Exception if string is not a valid json string
   */
  public static function getJSONResponseToArray($string)
  {
    $json = json_decode($string,true);
    if($json !== NULL) {
      return $json;
    }
    else {
      throw new Exception('Response is not a valid json string.');
    }
  }

  /*
   * strip header content
   *
   * @param String server response
   * @return mixed[] header, body of the server response. The header is parsed as an array.
   */
  private static function getHeaderAndBody($response) {

    $header = self::http_parse_headers(substr($response, 0, strrpos($response,"\r\n\r\n")));
    $body = substr($response, strrpos($response,"\r\n\r\n")+4);

    return array($header,$body);
  }

  /*
   * parses http header
   *
   * @param String header
   * @return mixed[] parsed header
   */
  private static function http_parse_headers($header)
  {
    $headers = array();
    $key = '';

    foreach(explode("\n", $header) as $i => $h) {
      $h = explode(':', $h, 2);

      if (isset($h[1]))
      {
        if (!isset($headers[$h[0]])) {
          $headers[$h[0]] = trim($h[1]);
        }
        elseif (is_array($headers[$h[0]])) {
          $headers[$h[0]] = array_merge($headers[$h[0]], array(trim($h[1])));
        }
        else {
          $headers[$h[0]] = array_merge(array($headers[$h[0]]), array(trim($h[1])));
        }

        $key = $h[0];
      }
      else {
        if (substr($h[0], 0, 1) == "\t") {
          $headers[$key] .= "\r\n\t".trim($h[0]);
        }
        elseif (!$key) {
          $headers[0] = trim($h[0]);trim($h[0]);
        }
      }
    }

    return $headers;
  }
} 