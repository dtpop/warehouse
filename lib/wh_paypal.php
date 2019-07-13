<?php

// http://paypal.github.io/PayPal-PHP-SDK/sample/doc/payments/ExecutePayment.html

use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\Transaction;
use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Api\Amount;
use PayPal\Api\ShippingAddress;
use PayPal\Api\Authorization;

class wh_paypal {

    public function init_paypal() {


        $cart = warehouse::get_cart();
        $user_data = warehouse::get_user_data();

        // Umgebung Sandbox oder Produktion aus Konfiguration abfragen
        $env = rex_config::get('warehouse', 'sandboxmode') ? 'sandbox' : 'live';

        $client_id = warehouse::get_paypal_client_id();
        $paypal_secret = warehouse::get_paypal_secret();

        if (rex::isDebugMode()) {
            rex_logger::factory()->log('notice', 'Client: ' . $client_id . PHP_EOL . 'Secret: ' . $paypal_secret, [], __FILE__, __LINE__);
        }

        // 2. Provide your Secret Key. Replace the given one with your app clientId, and Secret
        // https://developer.paypal.com/webapps/developer/applications/myapps
        $apiContext = new \PayPal\Rest\ApiContext(
                new \PayPal\Auth\OAuthTokenCredential(
                $client_id, // ClientID
                $paypal_secret       // ClientSecret
                )
        );

        if ($env != 'sandbox') {
            $apiContext->setConfig(['mode' => 'live']);
        }


        if (rex::isDebugMode()) {
//            dump($apiContext); exit;
//            rex_logger::factory()->log('apiContext',dump$apiContext,[],__FILE__,__LINE__);
        }


        // 3. Lets try to create a Payment
        // https://developer.paypal.com/docs/api/payments/#payment_create
        $payer = new \PayPal\Api\Payer();
        $payer->setPaymentMethod('paypal');

        $items = [];

        foreach ($cart as $position) {
            $item = new Item();
            $item->setName($position['name'])
                    ->setCurrency(rex_config::get('warehouse', 'currency'))
                    ->setQuantity($position['count'])
                    ->setPrice($position['price_netto'])
            ;
            $items[] = $item;
        }

        $itemList = new ItemList();
        $itemList->setItems($items);

        $details = new Details();
        $details->setShipping(warehouse::get_shipping_cost())
                ->setTax(warehouse::get_tax_total())
                ->setSubtotal(warehouse::get_sub_total_netto());

        $amount = new \PayPal\Api\Amount();
        $amount->setTotal(warehouse::get_cart_total())
                ->setCurrency(rex_config::get('warehouse', 'currency'))
                ->setDetails($details);

//            'firstname','lastname','company','department','address','zip','city','country'


        $shipping_address = new ShippingAddress();
        $shipping_address->setRecipientName($user_data['to_firstname'] . ' ' . $user_data['to_lastname']);
        $shipping_address->setLine1($user_data['to_address']);
        $shipping_address->setLine2($user_data['to_department']);
        $shipping_address->setCountryCode($user_data['to_country']);
        $shipping_address->setPostalCode($user_data['to_zip']);
        $shipping_address->setCity($user_data['to_city']);
//        $shipping_address->setState('XXXXXX');

        $itemList->setShippingAddress($shipping_address);


        $transaction = new \PayPal\Api\Transaction();
        $transaction->setAmount($amount)
                ->setItemList($itemList)
                ->setDescription("Payment description")
                ->setInvoiceNumber(uniqid());

        $redirectUrls = new \PayPal\Api\RedirectUrls();
        
        $redirectUrls->setReturnUrl(trim(rex::getServer(), '/') . rex_getUrl(rex_config::get('warehouse', 'paypal_page_success'),'',json_decode(rex_config::get('warehouse','paypal_getparams'),true),'&'));
//        $redirectUrls->setReturnUrl(trim(rex::getServer(), '/') . '/index.php?article_id=' . rex_config::get('warehouse', 'paypal_page_success'));
        $redirectUrls->setCancelUrl(trim(rex::getServer(), '/') . rex_getUrl(rex_config::get('warehouse', 'paypal_page_error')));

        $payment = new \PayPal\Api\Payment();
        $payment->setIntent('sale')
                ->setPayer($payer)
                ->setTransactions(array($transaction))
                ->setRedirectUrls($redirectUrls);
        /*
          dump(['sub_total'=>warehouse::get_sub_total_netto()]);
          dump(['tax'=>warehouse::get_tax_total()]);
          dump(['shipping'=>$shipping]);
          dump(['total_amount'=>$total_amount]);
          dump(['items'=>$items]);
         */

        // 4. Make a Create Call and print the values
        try {
            $payment->create($apiContext);
            $approval_link = $payment->getApprovalLink();
            warehouse::save_order_to_db($payment->id);
            if (rex::isDebugMode()) {
                rex_logger::factory()->log('notice', (string) $payment, [], __FILE__, __LINE__);
                rex_logger::factory()->log('notice', 'Payment-Id: '.$payment->id.PHP_EOL.'Approval-Link: '.$approval_link, [], __FILE__, __LINE__);
            }
            rex_response::sendRedirect($approval_link);
            /*
             * Kann für Debug Zwecke verwendet werden wenn kein Redirect gemacht wird (Zeile rex_response.... auskommentieren)
             */
            if ($env == 'sandbox') {
                echo '<pre>';
                echo $payment;

                echo "\n\nRedirect user to approval_url: " . $payment->getApprovalLink() . "\n";
                echo '</pre>';
            }
        } catch (\PayPal\Exception\PayPalConnectionException $ex) {
            // This will print the detailed information on the exception.
            //REALLY HELPFUL FOR DEBUGGING
            if ($env == 'sandbox') {
                echo $ex->getData();
            }
            rex_logger::factory()->log('notice', (string) $ex->getData(), [], 'wh_paypal.php', __LINE__);
            if (!rex::getProperty('debug')) {
                rex_redirect(rex_config::get('warehouse', 'paypal_page_error'));
            }
        }
    }

    /**
     * Todo: Erfolg loggen
     * Warenkorb wird wieder geladen
     * Zahlung bei paypal bestätigt
     * 
     * @return type
     */
    static function execute_payment() {

        $env = rex_config::get('warehouse', 'sandboxmode') ? 'sandbox' : 'live';


        $client_id = warehouse::get_paypal_client_id();
        $paypal_secret = warehouse::get_paypal_secret();

        // 2. Provide your Secret Key. Replace the given one with your app clientId, and Secret
        // https://developer.paypal.com/webapps/developer/applications/myapps
        $apiContext = new \PayPal\Rest\ApiContext(
                new \PayPal\Auth\OAuthTokenCredential(
                $client_id, // ClientID
                $paypal_secret       // ClientSecret
                )
        );

        if ($env != 'sandbox') {
            $apiContext->setConfig(['mode' => 'live']);
        }

        $paymentId = $_GET['paymentId'];
        try {
            $payment = Payment::get($paymentId, $apiContext);
        } catch (Exception $ex) {
            rex_redirect(rex_config::get('warehouse', 'paypal_page_error'));
        }

        $execution = new PaymentExecution();
        $execution->setPayerId($_GET['PayerID']);

        $transaction = new Transaction();
        $amount = new Amount();
        $details = new Details();

        $cart = warehouse::set_cart_from_payment_id($paymentId);

        if (rex::isDebugMode()) {
            rex_logger::factory()->log('notice', var_export($cart, true), [], __FILE__, __LINE__);
        }

        $details->setShipping(warehouse::get_shipping_cost())
                ->setTax(warehouse::get_tax_total())
                ->setSubtotal(warehouse::get_sub_total_netto());

        $amount->setCurrency(rex_config::get('warehouse', 'currency'));
        $amount->setTotal(warehouse::get_cart_total());
        $amount->setDetails($details);
        $transaction->setAmount($amount);

        $execution->addTransaction($transaction);

        try {
            $result = $payment->execute($execution, $apiContext);

            if (rex::isDebugMode()) {
                rex_logger::factory()->log('notice', (string) $result, [], __FILE__, __LINE__);
            }
//                ResultPrinter::printResult("Executed Payment", "Payment", $payment->getId(), $execution, $result);

            try {
                $payment = Payment::get($paymentId, $apiContext);
            } catch (Exception $ex) {

                if (rex::isDebugMode()) {
                    rex_logger::factory()->log('notice', (string) $ex, [], __FILE__, __LINE__);
                }
//                    ResultPrinter::printError("Get Payment", "Payment", null, null, $ex);
                rex_redirect(rex_config::get('warehouse', 'paypal_page_error'));
                exit(1);
            }
        } catch (Exception $ex) {

            if (rex::isDebugMode()) {
                rex_logger::factory()->log('error', 'Paypal Fehler', [], __FILE__, __LINE__);
            }
//                rex_redirect(rex_config::get('warehouse', 'paypal_page_error'));
//                ResultPrinter::printError("Executed Payment", "Payment", null, null, $ex);
            exit(1);
        }

        if (rex::isDebugMode()) {
            rex_logger::factory()->log('notice', (string) $payment, [], __FILE__, __LINE__);
        }
//            ResultPrinter::printResult("Get Payment", "Payment", $payment->getId(), null, $payment);



//        return $payment;
        return;
    }

}
?>


<?php /*
 *
 * 
  Username: seller-21_api1.dtp-net.de
  Password: WNCW92JZUHVFHLSJ
  Signature: AvhZGTGxZB0.G.jJHv-4ESMdxGNXAAT08wnnYpfQdwIX7FQwtvyqBvWb
 * 
 * 
  Sandbox Account
  seller-21@dtp-net.de
  AccessToken
  access_token$sandbox$6528gtjckqvhg737$52a24e7d2e2441714378f30da164ee19
  ExpiryDate
  24 Jul 2028


  SANDBOX API CREDENTIALS
  Sandbox account
  seller22-facilitator@dtp-net.de
  Client ID
  AQbo4h5SymUCyVjegcrFM2D1IuOdOUEJQpJznz1z--U9ytjTiyMuq2KbKN1Cy83vpZ4B3JpI52RMqo__


  Secret - Created: Jul 24, 2018
  EO8VFo5tZUqAE5twDT_5zZGYkObgJYgbFiPOstiW7FoZPBUhJJv9xkq25EQ4q3kSWbxzAAB2z0E1r7BM


  Real (nicht Sandbox)
  Händler-Nr.YMUJTWWP5ZBZG
 * 

 * 
 * 
 * 
  Ergebnis von $payment:

  {
  "intent": "sale",
  "payer": {
  "payment_method": "paypal"
  },
  "transactions": [
  {
  "amount": {
  "total": "0.10",
  "currency": "CHF",
  "details": {
  "subtotal": "0.10",
  "tax": "0.00",
  "shipping": "0.00"
  }
  },
  "description": "Payment description",
  "invoice_number": "5bdf231a40ec5",
  "item_list": {
  "items": [
  {
  "name": "Gutschein &ndash; Wertgutschein mit frei w\u00e4hlbarem Betrag.",
  "price": "0.10",
  "currency": "CHF",
  "quantity": 1
  }
  ],
  "shipping_address": {
  "recipient_name": "Test Testtest",
  "line1": "Teststra\u00dfe",
  "line2": "",
  "city": "Irgendwo",
  "postal_code": "45612",
  "country_code": "CH"
  }
  },
  "related_resources": []
  }
  ],
  "redirect_urls": {
  "return_url": "http://tanjagrandits.zephir.ch/shop/onlineshop/danke/",
  "cancel_url": "http://tanjagrandits.zephir.ch/shop/onlineshop/paypal-error/"
  },
  "id": "PAYID-LPPSGHI27K1673587312622B",
  "state": "created",
  "create_time": "2018-11-04T16:49:32Z",
  "links": [
  {
  "href": "https://api.paypal.com/v1/payments/payment/PAYID-LPPSGHI27K1673587312622B",
  "rel": "self",
  "method": "GET"
  },
  {
  "href": "https://www.paypal.com/cgi-bin/webscr?cmd=_express-checkout&token=EC-6Y989533D94445443",
  "rel": "approval_url",
  "method": "REDIRECT"
  },
  {
  "href": "https://api.paypal.com/v1/payments/payment/PAYID-LPPSGHI27K1673587312622B/execute",
  "rel": "execute",
  "method": "POST"
  }
  ]
  }

 */
?>

