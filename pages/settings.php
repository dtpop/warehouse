<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$config = rex_request('config', array(
    array('func', 'string'),
    array('cart_page', 'string'),
    array('address_page', 'string'),
    array('order_page', 'string'),
    array('thankyou_page', 'string'),
    array('my_orders_page', 'string'),
    array('paypal_client_id', 'string'),
    array('paypal_secret', 'string'),
    array('paypal_page_start', 'string'),
    array('paypal_page_success', 'string'),
    array('paypal_page_error', 'string'),
    array('paypal_sandbox_client_id', 'string'), // Sandbox
    array('paypal_sandbox_secret', 'string'), // Sandbox
    array('sandboxmode', 'string'),
    array('paypal_getparams', 'string'),
    array('tax_value', 'string'),
    array('tax_value_1', 'string'),
    array('tax_value_2', 'string'),
    array('tax_value_3', 'string'),
    array('tax_value_4', 'string'),
    array('country_codes', 'string'),
    array('order_email', 'string'),
    array('shipping', 'string'),
    array('currency', 'string'),
    array('currency_symbol', 'string'),
    array('cart_mode', 'string'),  // wie verhält sich der Warenkorb, wenn man einen Artikel in den Warenkorb legt
//    array('order_page', 'array'),
    array('submit', 'boolean'),
    array('email_template_customer', 'string'),
    array('email_template_seller', 'string')    
));

$form = '';

if ($config['submit']) {
    // show is saved field
//    $this->setConfig('oeffnungszeiten', $config['oeffnungszeiten']);
//    rex_config::get('ebh_settings');
//    $oeffnungszeiten = preg_replace('%[^\d\.\- "\[\],]%','',$config['oeffnungszeiten']);
    rex_config::set('warehouse','cart_page',$config['cart_page']);
    rex_config::set('warehouse','address_page',$config['address_page']);
    rex_config::set('warehouse','order_page',$config['order_page']);
    rex_config::set('warehouse','thankyou_page',$config['thankyou_page']);
    rex_config::set('warehouse','my_orders_page',$config['my_orders_page']);
    rex_config::set('warehouse','paypalkey',$config['paypalkey']);
    rex_config::set('warehouse','paypalemail',$config['paypalemail']);
    rex_config::set('warehouse','tax_value',$config['tax_value']);
    rex_config::set('warehouse','tax_value_1',$config['tax_value_1']);
    rex_config::set('warehouse','tax_value_2',$config['tax_value_2']);
    rex_config::set('warehouse','tax_value_3',$config['tax_value_3']);
    rex_config::set('warehouse','tax_value_4',$config['tax_value_4']);
    rex_config::set('warehouse','country_codes',$config['country_codes']);
    rex_config::set('warehouse','order_email',$config['order_email']);
    rex_config::set('warehouse','shipping',$config['shipping']);
    rex_config::set('warehouse','paypal_client_id',$config['paypal_client_id']);
    rex_config::set('warehouse','paypal_secret',$config['paypal_secret']);
    rex_config::set('warehouse','paypal_sandbox_client_id',$config['paypal_sandbox_client_id']);
    rex_config::set('warehouse','paypal_sandbox_secret',$config['paypal_sandbox_secret']);
    rex_config::set('warehouse','sandboxmode',$config['sandboxmode']);
    rex_config::set('warehouse','paypal_getparams',$config['paypal_getparams']);
    rex_config::set('warehouse','paypal_page_start',$config['paypal_page_start']);
    rex_config::set('warehouse','paypal_page_success',$config['paypal_page_success']);
    rex_config::set('warehouse','paypal_page_error',$config['paypal_page_error']);
    rex_config::set('warehouse','currency',$config['currency']);
    rex_config::set('warehouse','currency_symbol',$config['currency_symbol']);
    rex_config::set('warehouse','cart_mode',$config['cart_mode']);
    rex_config::set('warehouse','email_template_customer',$config['email_template_customer']);
    rex_config::set('warehouse','email_template_seller',$config['email_template_seller']);

    $form .= rex_view::info('Werte gespeichert');
}


// open form
$form .= '
    <form action="' . rex_url::currentBackendPage() . '" method="post">
        <fieldset>
        <legend>Warehouse - Einstellungen</legend>
';


// Warenkorbseite
$formElements = [];
$n = [];
$n['label'] = '<label>Warenkorbseite</label>';
$n['field'] = rex_var_link::getWidget(1, 'config[cart_page]',$this->getConfig('cart_page'));
// $n['note'] = $this->i18n('glossar_cache_exclude_articles_note');
$formElements[] = $n;
$fragment = new rex_fragment();
$fragment->setVar('elements', $formElements, false);
$form .= $fragment->parse('core/form/container.php');

// Adresseingabe Seite
$formElements = [];
$n = [];
$n['label'] = '<label>Adresseingabe Seite</label>';
$n['field'] = rex_var_link::getWidget(2, 'config[address_page]',$this->getConfig('address_page'));
$formElements[] = $n;
$fragment = new rex_fragment();
$fragment->setVar('elements', $formElements, false);
$form .= $fragment->parse('core/form/container.php');

// Bestellung Seite
$formElements = [];
$n = [];
$n['label'] = '<label>Bestellung Seite</label>';
$n['field'] = rex_var_link::getWidget(3, 'config[order_page]',$this->getConfig('order_page'));
$formElements[] = $n;
$fragment = new rex_fragment();
$fragment->setVar('elements', $formElements, false);
$form .= $fragment->parse('core/form/container.php');

// Danke Seite
$formElements = [];
$n = [];
$n['label'] = '<label>Danke Seite</label>';
$n['field'] = rex_var_link::getWidget(4, 'config[thankyou_page]',$this->getConfig('thankyou_page'));
$formElements[] = $n;
$fragment = new rex_fragment();
$fragment->setVar('elements', $formElements, false);
$form .= $fragment->parse('core/form/container.php');

// Meine Bestellungen
$formElements = [];
$n = [];
$n['label'] = '<label>Meine Bestellungen</label>';
$n['field'] = rex_var_link::getWidget(8, 'config[my_orders_page]',$this->getConfig('my_orders_page'));
$formElements[] = $n;
$fragment = new rex_fragment();
$fragment->setVar('elements', $formElements, false);
$form .= $fragment->parse('core/form/container.php');

// Paypal Startseite
$formElements = [];
$n = [];
$n['label'] = '<label>Paypal Startseite</label>';
$n['field'] = rex_var_link::getWidget(5, 'config[paypal_page_start]',$this->getConfig('paypal_page_start'));
$formElements[] = $n;
$fragment = new rex_fragment();
$fragment->setVar('elements', $formElements, false);
$form .= $fragment->parse('core/form/container.php');

// Paypal Erfolgsseite
$formElements = [];
$n = [];
$n['label'] = '<label>Paypal Zahlung erfolgt</label>';
$n['field'] = rex_var_link::getWidget(6, 'config[paypal_page_success]',$this->getConfig('paypal_page_success'));
$formElements[] = $n;
$fragment = new rex_fragment();
$fragment->setVar('elements', $formElements, false);
$form .= $fragment->parse('core/form/container.php');

// Paypal Fehlerseite
$formElements = [];
$n = [];
$n['label'] = '<label>Paypal Fehler</label>';
$n['field'] = rex_var_link::getWidget(7, 'config[paypal_page_error]',$this->getConfig('paypal_page_error'));
$formElements[] = $n;
$fragment = new rex_fragment();
$fragment->setVar('elements', $formElements, false);
$form .= $fragment->parse('core/form/container.php');

// Währung
$formElements = [];
$n = [];
$n['label'] = '<label for="warehouse-currency">Währung (z.B. EUR)</label>';
$n['field'] = '<input class="form-control" id="warehouse-currency" type="text" name="config[currency]" value="' . $this->getConfig('currency') . '" />';
$formElements[] = $n;
$fragment->setVar('elements', $formElements, false);
$form .= $fragment->parse('core/form/container.php');

// Währung - Symbol
$formElements = [];
$n = [];
$n['label'] = '<label for="warehouse-currency">Währungssymbol (z.B. €)</label>';
$n['field'] = '<input class="form-control" id="warehouse-currency_symbol" type="text" name="config[currency_symbol]" value="' . $this->getConfig('currency_symbol') . '" />';
$formElements[] = $n;
$fragment->setVar('elements', $formElements, false);
$form .= $fragment->parse('core/form/container.php');

// Versandkosten
$formElements = [];
$n = [];
$n['label'] = '<label for="warehouse-shipping">Versandkosten</label>';
$n['field'] = '<input class="form-control" id="warehouse-shipping" type="text" name="config[shipping]" value="' . $this->getConfig('shipping') . '" />';
$formElements[] = $n;
$fragment->setVar('elements', $formElements, false);
$form .= $fragment->parse('core/form/container.php');

// Steuersatz
$formElements = [];
$n = [];
$n['label'] = '<label for="warehouse-tax">Steuersatz [%]</label>';
$n['field'] = '<input class="form-control" id="warehouse-tax" type="text" name="config[tax_value]" value="' . $this->getConfig('tax_value') . '" />';
$formElements[] = $n;
$fragment->setVar('elements', $formElements, false);
$form .= $fragment->parse('core/form/container.php');

// Steuersatz 1
$formElements = [];
$n = [];
$n['label'] = '<label for="warehouse-tax">Steuersatz 1 [%]</label>';
$n['field'] = '<input class="form-control" id="warehouse-tax_1" type="text" name="config[tax_value_1]" value="' . $this->getConfig('tax_value_1') . '" />';
$formElements[] = $n;
$fragment->setVar('elements', $formElements, false);
$form .= $fragment->parse('core/form/container.php');

// Steuersatz 2
$formElements = [];
$n = [];
$n['label'] = '<label for="warehouse-tax">Steuersatz 2 [%]</label>';
$n['field'] = '<input class="form-control" id="warehouse-tax_2" type="text" name="config[tax_value_2]" value="' . $this->getConfig('tax_value_2') . '" />';
$formElements[] = $n;
$fragment->setVar('elements', $formElements, false);
$form .= $fragment->parse('core/form/container.php');

// Steuersatz 3
$formElements = [];
$n = [];
$n['label'] = '<label for="warehouse-tax">Steuersatz 3 [%]</label>';
$n['field'] = '<input class="form-control" id="warehouse-tax_3" type="text" name="config[tax_value_3]" value="' . $this->getConfig('tax_value_3') . '" />';
$formElements[] = $n;
$fragment->setVar('elements', $formElements, false);
$form .= $fragment->parse('core/form/container.php');

// Steuersatz 4
$formElements = [];
$n = [];
$n['label'] = '<label for="warehouse-tax">Steuersatz 4 [%]</label>';
$n['field'] = '<input class="form-control" id="warehouse-tax_4" type="text" name="config[tax_value_4]" value="' . $this->getConfig('tax_value_4') . '" />';
$formElements[] = $n;
$fragment->setVar('elements', $formElements, false);
$form .= $fragment->parse('core/form/container.php');

// Ländercodes / Lieferländer
$formElements = [];
$n = [];
$n['label'] = '<label for="warehouse-country_codes">Mögliche Länder für die Lieferung</label>';
$n['field'] = '<input class="form-control" id="warehouse-country_codes" type="text" name="config[country_codes]" value=\'' . $this->getConfig('country_codes') . '\' />';
$n['note'] = 'Als JSON in der Form <code>{"Deutschland":"DE","Österreich":"AT","Schweiz":"CH"}</code> angeben.';
$formElements[] = $n;
$fragment->setVar('elements', $formElements, false);
$form .= $fragment->parse('core/form/container.php');




// Paypal Client Id
$formElements = [];
$n = [];
$n['label'] = '<label for="warehouse-pp-clientid">Paypal Client Id</label>';
$n['field'] = '<input class="form-control" id="warehouse-pp-clientid" type="text" name="config[paypal_client_id]" value="' . $this->getConfig('paypal_client_id') . '" />';
$formElements[] = $n;
$fragment->setVar('elements', $formElements, false);
$form .= $fragment->parse('core/form/container.php');

// Paypal Client Secret
$formElements = [];
$n = [];
$n['label'] = '<label for="warehouse-pp-key">Paypal Secret</label>';
$n['field'] = '<input class="form-control" id="warehouse-pp-secret" type="text" name="config[paypal_secret]" value="' . $this->getConfig('paypal_secret') . '" />';
$formElements[] = $n;
$fragment->setVar('elements', $formElements, false);
$form .= $fragment->parse('core/form/container.php');

// Sandbox benutzen
$formElements = [];
$n = [];
$n['label'] = '<label for="warehouse-sandbox-on">Paypal Sandbox ein</label>';
$n['field'] = '<input type="checkbox" id="warehouse-sandbox-on" name="config[sandboxmode]" value="1" '.($this->getConfig('sandboxmode') == 1 ? ' checked="checked"' : '').' />';
// $n['note'] = $this->i18n('use_cache_infotext');
$formElements[] = $n;
$fragment = new rex_fragment();
$fragment->setVar('elements', $formElements, false);
$form .= $fragment->parse('core/form/checkbox.php');

// Paypal Zusätzlicher Get-String
$formElements = [];
$n = [];
$n['label'] = '<label for="warehouse-ppsb-paypal_getparams">Paypal Zusätzliche Get-Parameter für Paypal</label>';
$n['field'] = '<input class="form-control" id="warehouse-ppsb-paypal_getparams" type="text" name="config[paypal_getparams]" value=\'' . $this->getConfig('paypal_getparams') . '\' />';
$n['note'] = 'z.B. um Maintenance bei der Entwicklung zu verwenden. Als JSON in der Form <code>{"key1":"value1","key2":"value2"}</code> angeben.';
$formElements[] = $n;
$fragment->setVar('elements', $formElements, false);
$form .= $fragment->parse('core/form/container.php');

// Paypal Client Id Sandbox
$formElements = [];
$n = [];
$n['label'] = '<label for="warehouse-ppsb-clientid">Paypal Sandbox Client Id</label>';
$n['field'] = '<input class="form-control" id="warehouse-ppsb-clientid" type="text" name="config[paypal_sandbox_client_id]" value="' . $this->getConfig('paypal_sandbox_client_id') . '" />';
$formElements[] = $n;
$fragment->setVar('elements', $formElements, false);
$form .= $fragment->parse('core/form/container.php');

// Paypal Secret Sandbox
$formElements = [];
$n = [];
$n['label'] = '<label for="warehouse-ppsb-key">Paypal Sandbox Secret</label>';
$n['field'] = '<input class="form-control" id="warehouse-ppsb-secret" type="text" name="config[paypal_sandbox_secret]" value="' . $this->getConfig('paypal_sandbox_secret') . '" />';
$formElements[] = $n;
$fragment->setVar('elements', $formElements, false);
$form .= $fragment->parse('core/form/container.php');


// cart_mode
$formElements = [];
$sel = new rex_select();
$sel->setId('warehouse_cartmode');
$sel->setName('config[cart_mode]');
$sel->setSize(1);
$sel->setAttribute('class', 'form-control selectpicker');
$sel->setSelected($this->getConfig('cart_mode'));
$options = [
    'cart'=>'Warenkorb',
    'page'=>'Artikelseite'
];
foreach ($options as $k=>$v) {
    $sel->addOption($v, $k);
}
$n = [];
$n['label'] = '<label for="warehouse_cartmode">Warenkorb Modus</label>';
$n['field'] = $sel->get();
$n['note'] = 'Es kann entweder die Warenkorbseite aufgerufen werden oder die vorherige Artikelseite. Wenn die Artikelseite aufgerufen wird, so wird showcart=1 als Get-Parameter angehängt';
$formElements[] = $n;
$fragment->setVar('elements', $formElements, false);
$form .= $fragment->parse('core/form/container.php');


// E-Mail Template Customer
$formElements = [];
$sel = new rex_select();
$sel->setId('warehouse_email_template_customer');
$sel->setName('config[email_template_customer]');
$sel->setSize(1);
$sel->setAttribute('class', 'form-control selectpicker');
$sel->setSelected($this->getConfig('email_template_customer'));
$sql = rex_sql::factory();
$sql->setQuery('SELECT name FROM '.rex::getTable('yform_email_template'));
$res = $sql->getArray();
$options = [];
foreach ($res as $r) {
    $sel->addOption($r['name'], $r['name']);
}
$n = [];
$n['label'] = '<label for="warehouse_email_template_customer">E-Mail Template Kunde</label>';
$n['field'] = $sel->get();
$formElements[] = $n;
$fragment->setVar('elements', $formElements, false);
$form .= $fragment->parse('core/form/container.php');

// E-Mail Template Bestellung
$formElements = [];
$sel = new rex_select();
$sel->setId('warehouse_email_template_seller');
$sel->setName('config[email_template_seller]');
$sel->setSize(1);
$sel->setAttribute('class', 'form-control selectpicker');
$sel->setSelected($this->getConfig('email_template_seller'));
$options = [];
foreach ($res as $r) {
    $sel->addOption($r['name'], $r['name']);
}
$n = [];
$n['label'] = '<label for="warehouse_email_template_seller">E-Mail Template Bestellung</label>';
$n['field'] = $sel->get();
$formElements[] = $n;
$fragment->setVar('elements', $formElements, false);
$form .= $fragment->parse('core/form/container.php');


// Empfänger E-Mail für Bestellungen
$formElements = [];
$n = [];
$n['label'] = '<label for="warehouse-order_email">Bestellungen E-Mail Empfänger</label>';
$n['field'] = '<input class="form-control" id="warehouse-order_email" type="text" name="config[order_email]" value="' . $this->getConfig('order_email') . '" />';
$n['note'] = 'Mehrere E-Mail Empfänger können mit Komma getrennt werden.';
$formElements[] = $n;
$fragment->setVar('elements', $formElements, false);
$form .= $fragment->parse('core/form/container.php');


$form .= '</fieldset>';

$form .= '<fieldset>'
        . '<legend></legend>';



// create submit button
$formElements = array();
$elements = array();
$elements['field'] = '
  <input type="submit" class="btn btn-save rex-form-aligned" name="config[submit]" value="Einstellungen übernehmen" ' . rex::getAccesskey(rex_i18n::msg('sked_config_save'), 'save') . ' />
';
$formElements[] = $elements;

// parse submit element
$fragment = new rex_fragment();
$fragment->setVar('elements', $formElements, false);
$form .= $fragment->parse('core/form/submit.php');

// close form
$form .= '
    </fieldset>
  </form>
';

$fragment = new rex_fragment();
$fragment->setVar('class', 'edit');
$fragment->setVar('title', 'Einstellung');
$fragment->setVar('body', $form, false);
echo $fragment->parse('core/page/section.php');
