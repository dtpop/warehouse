<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$form = rex_config_form::factory('warehouse');
$form->addFieldset('Warehouse - Einstellungen');

$field = $form->addLinkmapField('cart_page');
$field->setLabel('Warenkorbseite');

$field = $form->addLinkmapField('address_page');
$field->setLabel('Adresseingabe Seite');

$field = $form->addLinkmapField('order_page');
$field->setLabel('Bestellung Seite');

$field = $form->addLinkmapField('thankyou_page');
$field->setLabel('Danke Seite');

$field = $form->addLinkmapField('my_orders_page');
$field->setLabel('Meine Bestellungen');

$field = $form->addLinkmapField('paypal_page_start');
$field->setLabel('Paypal Startseite');

$field = $form->addLinkmapField('paypal_page_success');
$field->setLabel('Paypal Zahlung erfolgt');

$field = $form->addLinkmapField('paypal_page_error');
$field->setLabel('Paypal Fehler');

$field = $form->addTextField('currency');
$field->setLabel('Währung (z.B. EUR)');
// $field->setNotice('Es können mehrere Adressen angegeben werden. Adressen bitte mit Komma trennen.');

$field = $form->addTextField('currency_symbol');
$field->setLabel('Währungssymbol (z.B. €)');

$field = $form->addTextField('tax_value');
$field->setLabel('Steuersatz [%]');

$field = $form->addTextField('tax_value_1');
$field->setLabel('Steuersatz 1 [%]');

$field = $form->addTextField('tax_value_2');
$field->setLabel('Steuersatz 2 [%]');

$field = $form->addTextField('tax_value_3');
$field->setLabel('Steuersatz 3 [%]');

$field = $form->addTextField('tax_value_4');
$field->setLabel('Steuersatz 4 [%]');

$field = $form->addTextField('country_codes');
$field->setLabel('Mögliche Länder für die Lieferung');
$field->setNotice('Als JSON in der Form <code>{"Deutschland":"DE","Österreich":"AT","Schweiz":"CH"}</code> angeben.');

$field = $form->addSelectField('cart_mode');
$field->setLabel('Warenkorb Modus');
$select = $field->getSelect();
$select->addOptions([
    'cart'=>'Warenkorb',
    'page'=>'Artikelseite'
]);
$field->setNotice('Es kann entweder die Warenkorbseite aufgerufen werden oder die vorherige Artikelseite. Wenn die Artikelseite aufgerufen wird, so wird showcart=1 als Get-Parameter angehängt.');

$res = rex_sql::factory()->getArray('SELECT name FROM '.rex::getTable('yform_email_template'));
$options = array_column($res, 'name');

$field = $form->addSelectField('email_template_customer');
$field->setLabel('E-Mail Template Kunde');
$select = $field->getSelect();
$select->addOptions($options,true);

$field = $form->addSelectField('email_template_seller');
$field->setLabel('E-Mail Template Bestellung');
$select = $field->getSelect();
$select->addOptions($options,true);

$field = $form->addTextField('order_email');
$field->setLabel('Bestellungen E-Mail Empfänger');
$field->setNotice('Mehrere E-Mail Empfänger können mit Komma getrennt werden.');

// ==== Paypal

$form->addFieldset('Paypal Einstellungen');

$field = $form->addTextField('paypal_client_id');
$field->setLabel('Paypal Client Id');

$field = $form->addTextField('paypal_secret');
$field->setLabel('Paypal Secret');

$field = $form->addCheckboxField('sandboxmode');
$field->setLabel('Paypal Sandbox ein');
$field->addOption('Paypal Sandbox ein', "1");


$field = $form->addTextField('paypal_sandbox_client_id');
$field->setLabel('Paypal Sandbox Client Id');

$field = $form->addTextField('paypal_sandbox_secret');
$field->setLabel('Paypal Sandbox Secret');

$field = $form->addTextField('paypal_getparams');
$field->setLabel('Paypal Zusätzliche Get-Parameter für Paypal');
$field->setNotice('z.B. um Maintenance bei der Entwicklung zu verwenden. Als JSON in der Form <code>{"key1":"value1","key2":"value2"}</code> angeben.');
 
// ==== Frachtrechnung

$form->addFieldset('Frachtrechnung');

$field = $form->addTextField('shipping');
$field->setLabel('Versandkosten Standard');
$field->setNotice('Kann leer bleiben, wenn Sonderfrachtberechnung definiert ist.');

$field = $form->addSelectField('shipping_mode');
$field->setLabel('Frachtberechnung');
$select = $field->getSelect();
$select->addOptions([
    0 => 'Standard (Pauschal)',
    'pieces' => 'nach Stück',
]);

$field = $form->addTextField('shipping_parameters');
$field->setLabel('Fracht Parameter');
$field->setNotice('Paramter für die Frachtberechnung. Als JSON in der Form <code>[[">",4,10.5],[">",2,7.9],[">",0,5.9]]</code> angeben. Jede Bedingung besteht aus drei Elementen. Als Kondition sind die Angaben <code>&gt;</code>, '
        . '<code>&lt;</code> oder <code>=</code> möglich. Der zweite Wert steht für die Anzahl, der dritte für den Frachtpreis. Die erste Bedingung die erfüllt ist, wird für die Frachtberechnung verwendet. Wenn keine Bedingung erfüllt ist, wird der Standardfrachtpreis berechnet.');

$content = $form->get();

$fragment = new rex_fragment();
$fragment->setVar('title', 'Einstellungen');
$fragment->setVar('body', $content, false);
$content = $fragment->parse('core/page/section.php');

echo $content;

