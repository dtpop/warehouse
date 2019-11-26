<?php
/* Paypal Zahlung erfolgt */
// Paypal Zahlung bestätigen, Erfolg loggen, weiter leiten zur Danke-Seite
if (rex::isBackend()) {
    echo '<h2>PayPal Abschluss der Zahlung, Bestätigungsmail und Bestellmail verschicken.</h2>';
    return;
} else {
    $pp = new wh_paypal();
    $pp->execute_payment();
    
    // log payment
    warehouse::paypal_approved($payment);

    $cart = warehouse::get_cart();
    $wh_userdata = warehouse::get_user_data();
    
    $yf = new rex_yform();
    $fragment = new rex_fragment();
    $fragment->setVar('cart', $cart);
    $fragment->setVar('wh_userdata', $wh_userdata);
    
    $yf->setObjectparams('csrf_protection',false);
    $yf->setValueField('hidden', ['email', $wh_userdata['email']]);
    $yf->setValueField('hidden', ['firstname', $wh_userdata['firstname']]);
    $yf->setValueField('hidden', ['lastname', $wh_userdata['lastname']]);
    $yf->setValueField('hidden', ['payment_type', $wh_userdata['payment_type']]);
    
    foreach (explode(',', rex_config::get('warehouse', 'order_email')) as $email) {
        $yf->setActionField('tpl2email', [rex_config::get('warehouse', 'email_template_seller'), '', $email]);
    }
    $yf->setActionField('tpl2email', [rex_config::get('warehouse', 'email_template_customer'), 'email']);
    $yf->setActionField('callback', ['warehouse::clear_cart']);
//    $yf->setActionField('redirect', [rex_config::get('warehouse', 'thankyou_page')]);
    
    $yf->getForm();
    $yf->setObjectparams('send',1);
    $yf->executeActions();    
    
    
//    rex_redirect(rex_config::get('warehouse','thankyou_page'));
    rex_response::sendRedirect(rex_getUrl(rex_config::get('warehouse','thankyou_page'), '', rex_config::get('warehouse','paypal_getparams') ? json_decode(rex_config::get('warehouse','paypal_getparams')) : [],true), '&');    
    // json_decode(rex_config::get('warehouse','paypal_getparams'),true)
    
}
?>