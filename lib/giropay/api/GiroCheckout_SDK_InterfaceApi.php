<?php
/**
 * Interface API has to be implemented, if a a new payment method has to be created
 *
 * @package GiroCheckout
 * @version $Revision: 174 $ / $Date: 2016-11-09 16:44:31 -0300 (Wed, 09 Nov 2016) $
 */

interface GiroCheckout_SDK_InterfaceApi {

    /**
     * Returns all API call param fields in the correct order.
     *
     * @param mixed[] $params
     */
    public function getSubmitParams($params);

    /**
     * Returns all response param fields in the correct order.
     *
     * @param mixed[] $response
     */
    public function checkResponse($response);

    /**
     * Returns all notify param fields in the correct order.
     *
     * @param mixed[] $notify
     */
    public function checkNotification($notify);

    /**
     * Returns true if a hash has to be added to the API call.
     */
    public function needsHash();

    /**
     * Returns the API request URL where the call has to be sent to.
     */
    public function getRequestURL();

    /**
     * Returns the API needs a notify URL, where the transaction result has to be sent to.
     */
    public function hasNotifyURL();

    /**
     * Returns if the API needs a redirect URL, where the customer has to be sent to after payment.
     */
    public function hasRedirectURL();

    /**
     * Returns the ResultCode of an successful transaction.
     */
    public function getTransactionSuccessfulCode();

    /**
     * Returns the ResultCode of an successful AVS check (age verification system).
     */
    public function getAVSSuccessfulCode();

    /**
     * Returns the parameter name of the hash in the notify or redirect API call from GiroConnect.
     */
    public function getNotifyHashName();

    /**
     * Do some special validations for this payment method.
     */
    public function validateParams( $p_aParams, &$p_strError );
} 