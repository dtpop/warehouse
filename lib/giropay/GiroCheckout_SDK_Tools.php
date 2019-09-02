<?php
/**
 * Tools for non specific functionalities
 *
 * @package GiroCheckout
 * @version $Revision: 94 $ / $Date: 2015-01-08 10:06:53 +0100 (Do, 08 Jan 2015) $
 */

class GiroCheckout_SDK_Tools {

  const HORIZONTAL = 1;
  const VERTICAL = 2;

  /** returns logname by given credit card types and size
   *
   * @param bool $visa_msc
   * @param bool $amex
   * @param bool $jcb
   * @param bool $diners
   * @param integer $size
   * @param string $layout
   * @return string
   *
   */
  public static function getCreditCardLogoName($visa_msc = false, $amex = false, $jcb = false) {

    if( $visa_msc == false && $amex == false  && $jcb == false ) {
      return null;
    }

    $logoName = '';

    if( $visa_msc ) {
      $logoName .= 'visa_msc_';
    }
    if( $amex ) {
      $logoName .= 'amex_';
    }
    if( $jcb ) {
      $logoName .= 'jcb_';
    }

    $logoName .= '40px.png';

    return $logoName;
  }
}