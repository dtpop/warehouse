<?php
/**
 * Provides configuration for an direct debit API call.
 *
 * @package GiroCheckout
 * @version $Revision: 172 $ / $Date: 2016-10-17 22:56:02 -0300 (Mon, 17 Oct 2016) $
 */

class GiroCheckout_SDK_DirectDebitTransaction extends GiroCheckout_SDK_AbstractApi implements GiroCheckout_SDK_InterfaceApi {

  /*
   * Includes any parameter field of the API call. True parameter are mandatory, false parameter are optional.
   * For further information use the API documentation.
   */
  protected $paramFields = array(
    'merchantId'=> TRUE,
    'projectId' => TRUE,
    'merchantTxId' => TRUE,
    'amount' => TRUE,
    'currency' => TRUE,
    'purpose' => TRUE,
    'type' => FALSE,
    'bankcode' => FALSE,
    'bankaccount' => FALSE,
    'iban' => FALSE,
    'accountHolder' => FALSE,
    'mandateReference' => FALSE,
    'mandateSignedOn' => FALSE,
    'mandateReceiverName' => FALSE,
    'mandateSequence' => FALSE,
    'pkn' => FALSE,
    'urlNotify' => FALSE,
    'pptoken' => FALSE,
  );


  /*
   * Includes any response field parameter of the API.
   */
  protected $responseFields = array(
    'rc'=> TRUE,
    'msg' => TRUE,
    'reference' => FALSE,
    'backendTxId' => FALSE,
    'mandateReference' => FALSE,
  	'resultPayment' => FALSE
  );

  /*
   * Includes any notify parameter of the API.
  */
  protected $notifyFields = array(
  		'gcReference'=> TRUE,
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
  protected $requestURL = "https://payment.girosolution.de/girocheckout/api/v2/transaction/payment";

  /*
   * If true the request method needs a notify page to receive the transactions result.
   */
  protected $hasNotifyURL = TRUE;

  /*
   * If true the request method needs a redirect page where the customer is sent back to the merchant.
   */
  protected $hasRedirectURL = FALSE;

  /*
   * The result code number of a successful transaction
   */
  protected $paymentSuccessfulCode = 4000;
}