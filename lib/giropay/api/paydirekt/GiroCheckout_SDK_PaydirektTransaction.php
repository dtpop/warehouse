<?php

/**
 * Provides configuration for an Paydirekt API call.
 *
 * @package GiroCheckout
 * @version $Revision: 24 $ / $Date: 2014-05-22 14:30:12 +0200 (Do, 22 Mai 2014) $
 */
class GiroCheckout_SDK_PaydirektTransaction extends GiroCheckout_SDK_AbstractApi implements GiroCheckout_SDK_InterfaceApi
{
  /*
   * Includes any parameter field of the API call. True parameter are mandatory, false parameter are optional.
   * For further information use the API documentation.
   */
  protected $paramFields = array(
    'merchantId'                            => TRUE,
    'projectId'                             => TRUE,
    'merchantTxId'                          => TRUE,
    'amount'                                => TRUE,
    'currency'                              => TRUE,
    'purpose'                               => TRUE,
    'type'                                  => FALSE,
    'securedAuth'                           => FALSE,
    'securedAuthUntil'                      => FALSE,
    'shoppingCartType'                      => FALSE,
    'customerId'                            => FALSE,
    'shippingAmount'                        => FALSE,
    'shippingAddresseFirstName'             => FALSE, // nur bei PHYSICAL, MIXED und DIGITAL Pflicht
    'shippingAddresseLastName'              => FALSE, // nur bei PHYSICAL, MIXED und DIGITAL Pflicht
    'shippingCompany'                       => FALSE,
    'shippingAdditionalAddressInformation'  => FALSE,
    'shippingStreet'                        => FALSE,
    'shippingStreetNumber'                  => FALSE,
    'shippingZipCode'                       => FALSE,  // nur bei PHYSICAL und MIXED Pflicht
    'shippingCity'                          => FALSE,  // nur bei PHYSICAL und MIXED Pflicht
    'shippingCountry'                       => FALSE,  // nur bei PHYSICAL und MIXED Pflicht
    'shippingEmail'                         => FALSE,  // nur bei DIGITAL Pflicht
    'merchantReconciliationReferenceNumber' => FALSE,
    'orderAmount'                           => FALSE,
    'orderId'                               => TRUE,
    'cart'                                  => FALSE,
    'invoiceId'                             => FALSE,
    'customerMail'                          => FALSE,
    'minimumAge'                            => FALSE,
    'urlRedirect'                           => TRUE,
    'urlNotify'                             => TRUE,
    'pptoken'                               => FALSE,
  );

  /*
   * Includes any response field parameter of the API.
   */
  protected $responseFields = array(
    'rc'                                    => TRUE,
    'msg'                                   => TRUE,
    'reference'                             => FALSE,
    'redirect'                              => FALSE,
  );

  /*
   * Includes any notify parameter of the API.
   */
  protected $notifyFields = array(
    'gcReference'                           => TRUE,
    'gcMerchantTxId' => TRUE,
    'gcBackendTxId' => TRUE,
    'gcAmount' => TRUE,
    'gcCurrency' => TRUE,
    'gcResultPayment' => TRUE,
    'gcHash' => TRUE,
  );

  /*
   * True if a hash is needed. It will be automatically added to the post data.
   */
  protected $needsHash = TRUE;

  /*
   * The field name in which the hash is sent to the notify or redirect page.
   */
  protected $notifyHashName = 'gcHash';

  /*
   * The request url of the GiroCheckout API for this request.
   */
  protected $requestURL = "https://payment.girosolution.de/girocheckout/api/v2/transaction/start";

  /*
   * If true the request method needs a notify page to receive the transactions result.
   */
  protected $hasNotifyURL = TRUE;

  /*
   * If true the request method needs a redirect page where the customer is sent back to the merchant.
   */
  protected $hasRedirectURL = TRUE;

  /*
   * The result code number of a successful transaction
   */
  protected $paymentSuccessfulCode = 4000;

  /**
   * Do some special validations for this payment method.
   * Used only in a few, simply returns true for most.
   *
   * @param $p_aParams Array of parameters from shop
   * @param $p_strError string [OUT] Field name in case of error
   * @return bool TRUE if ok, FALSE if validation error.
   */
  public function validateParams( $p_aParams, &$p_strError ) {

    if( isset($p_aParams['shoppingCartType']) ) {
      $strShoppingCartType = trim($p_aParams['shoppingCartType']);
    }
    if (empty($strShoppingCartType)) {
      $strShoppingCartType = "MIXED";  // Default value
    }

    if( isset($p_aParams['shippingAddresseFirstName']) ) {
      $strFirstName = trim( $p_aParams['shippingAddresseFirstName'] );
    }
    else {
      $strFirstName = "";
    }
    if( isset($p_aParams['shippingAddresseLastName']) ) {
      $strLastName = trim( $p_aParams['shippingAddresseLastName'] );
    }
    else {
      $strLastName = "";
    }
    if( isset($p_aParams['shippingEmail']) ) {
      $strEmail = trim( $p_aParams['shippingEmail'] );
    }
    else {
      $strEmail = "";
    }
    if( isset($p_aParams['shippingZipCode']) ) {
      $strZipCode = trim($p_aParams['shippingZipCode']);
    }
    else {
      $strZipCode = "";
    }
    if( isset($p_aParams['shippingCity']) ) {
      $strCity = trim( $p_aParams['shippingCity'] );
    }
    else {
      $strCity = "";
    }
    if( isset($p_aParams['shippingCountry']) ) {
      $strCountry = trim( $p_aParams['shippingCountry'] );
    }
    else {
      $strCountry = "";
    }

    // Validate shopping cart type
    if ( !in_array($strShoppingCartType, array(
      'PHYSICAL',
      'DIGITAL',
      'MIXED',
      'ANONYMOUS_DONATION',
      'AUTHORITIES_PAYMENT',
    ))) {
      $p_strError = "Shopping cart type";
      return FALSE;
    }

    // Validate other address fields depending on shoppingCartType
    // First and last name are mandatory for mixed, physical and digital shopping carts
    if( in_array( $strShoppingCartType, array('MIXED', 'PHYSICAL', 'DIGITAL') ) ) {
      if (empty($strFirstName)) {
        $p_strError = "First Name";
        return FALSE;
      }
      if (empty($strLastName)) {
        $p_strError = "Last Name";
        return FALSE;
      }
    }

    if( $strShoppingCartType == 'DIGITAL' ) {
      if( empty($strEmail) ) {
        $p_strError = "Shipping Email";
        return FALSE;
      }
    }
    elseif( in_array( $strShoppingCartType, array('MIXED', 'PHYSICAL') ) ) {
      if( empty($strZipCode) ) {
        $p_strError = "Shipping Address Zip code";
        return FALSE;
      }
      if( empty($strCity) ) {
        $p_strError = "Shipping Address City";
        return FALSE;
      }
      if( empty($strCountry) ) {
        $p_strError = "Shipping Address Country";
        return FALSE;
      }
    }

    return TRUE;
  }
}