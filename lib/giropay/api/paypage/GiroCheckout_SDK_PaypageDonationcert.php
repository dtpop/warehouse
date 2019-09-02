<?php
/**
 * Received the data for the donation certificate (Spendenbescheinigung) related to a recente donation.
 *
 * @package GiroCheckout
 * @version $Revision: 225 $ / $Date: 2017-09-04 16:11:20 -0300 (Mon, 04 Sep 2017) $
 */
class GiroCheckout_SDK_PaypageDonationcert extends GiroCheckout_SDK_AbstractApi implements GiroCheckout_SDK_InterfaceApi {

    /*
     * Includes any parameter field of the API call. True parameter are mandatory, false parameter are optional.
     * For further information see the API documentation.
     */
    protected $paramFields = array(
      'merchantId'      => TRUE,
      'projectId'       => TRUE,
      'reference'       => TRUE,  // Reference (UUID) to related transaction
      'company'         => FALSE,
      'lastname'        => TRUE,
      'firstname'       => TRUE,
      'address'         => TRUE,
      'zip'             => TRUE,
      'city'            => TRUE,
      'country'         => TRUE,
      'email'           => TRUE,
    );

    /*
     * Includes any response field parameter of the API.
     */
    protected $responseFields = array(
        'rc'=> TRUE,
        'msg' => TRUE,
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
    protected $requestURL = "https://payment.girosolution.de/girocheckout/api/v2/paypage/setdonationcert";

    /*
     * If true the request method needs a notify page to receive the transactions result.
     */
    protected $hasNotifyURL = FALSE;

    /*
     * If true the request method needs a redirect page where the customer is sent back to the merchant.
     */
    protected $hasRedirectURL = FALSE;
}