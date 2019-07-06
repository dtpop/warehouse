<?php /* UK . 390 . Checkout - Adresseingabe - Output - Id: 14 */ 

$userdata = warehouse::get_user_data();
$userdata = warehouse::ensure_userdata_fields($userdata);


$yf = new rex_yform();

$yf->setObjectparams('form_action',rex_getUrl('REX_ARTICLE_ID'));
// $yf->setObjectparams('form_showformafterupdate', 0);
$yf->setObjectparams('form_wrap_class', 'yform');
$yf->setObjectparams('debug',0);
$yf->setObjectparams('form_ytemplate','uikit,bootstrap,classic');
$yf->setObjectparams('form_class', 'uk-form-horizontal rex-yform wh_checkout');

$yf->setValueField('html',['','<section class="uk-first-column">
                        <div class="uk-card uk-card-default uk-card-small uk-card-body tm-ignore-container">
                            <div class="uk-grid-small uk-child-width-1-1 uk-child-width-1-2@s uk-grid" uk-grid="">
                                <div class="uk-first-column">
']);

$yf->setValueField('text',['firstname','Vorname',$userdata['firstname'],'[no_db]',['required'=>'required']]);
$yf->setValueField('html',['','</div><div>']);
$yf->setValueField('text',['lastname','Nachname',$userdata['lastname'],'[no_db]',['required'=>'required']]);
$yf->setValueField('html',['','</div><div class="uk-grid-margin uk-first-column">']);
$yf->setValueField('text',['company','Firma',$userdata['company'],'[no_db]',['required'=>'required']]);
$yf->setValueField('html',['','</div><div>']);
$yf->setValueField('text',['department','Abteilung',$userdata['department'],'[no_db]',['required'=>'required']]);
$yf->setValueField('html',['','</div><div class="uk-grid-margin uk-first-column">']);
$yf->setValueField('text',['address','Adresse',$userdata['address'],'[no_db]',['required'=>'required']]);
$yf->setValueField('html',['','</div><div>']);
$yf->setValueField('text',['zip','PLZ',$userdata['zip'],'[no_db]',['required'=>'required']]);
$yf->setValueField('html',['','</div><div class="uk-grid-margin uk-first-column">']);
$yf->setValueField('text',['city','Ort',$userdata['city'],'[no_db]',['required'=>'required']]);
$yf->setValueField('html',['','</div><div>']);
$yf->setValueField('text',['country','Land',$userdata['country'],'[no_db]',['required'=>'required']]);
$yf->setValueField('html',['','</div><div class="uk-grid-margin uk-first-column">']);
$yf->setValueField('text',['email','E-Mail',$userdata['email'],'[no_db]',['required'=>'required']]);
$yf->setValueField('html',['','</div><div>']);
$yf->setValueField('text',['phone','Telefon',$userdata['phone'],'[no_db]']);
$yf->setValueField('html',['','</div>']); // uk-first-column
$yf->setValueField('html',['','</div>']); // uk-grid-small

$yf->setValueField('html',['','<div class="uk-grid-margin uk-first-column">']);
$yf->setValueField('html',['','<button uk-toggle="target: #separate_delivery_address" type="button" class="uk-button">Abweichende Lieferadresse</button>']);
$yf->setValueField('html',['','</div>']);

$yf->setValueField('html',['','<div id="separate_delivery_address" class="uk-grid-margin uk-grid-small uk-child-width-1-1 uk-child-width-1-2@s uk-grid" uk-grid="" hidden>']);

$yf->setValueField('html',['','<div class="uk-grid-margin uk-first-column">']);
$yf->setValueField('text',['to_firstname','Vorname',$userdata['to_firstname'],'[no_db]']);
$yf->setValueField('html',['','</div><div>']);
$yf->setValueField('text',['to_lastname','Nachname',$userdata['to_lastname'],'[no_db]']);
$yf->setValueField('html',['','</div><div class="uk-grid-margin uk-first-column">']);
$yf->setValueField('text',['to_company','Firma',$userdata['to_company'],'[no_db]']);
$yf->setValueField('html',['','</div><div>']);
$yf->setValueField('text',['to_department','Abteilung',$userdata['to_department'],'[no_db]']);
$yf->setValueField('html',['','</div><div class="uk-grid-margin uk-first-column">']);
$yf->setValueField('text',['to_address','Adresse',$userdata['to_address'],'[no_db]']);
$yf->setValueField('html',['','</div><div>']);
$yf->setValueField('text',['to_zip','PLZ',$userdata['to_zip'],'[no_db]']);
$yf->setValueField('html',['','</div><div class="uk-grid-margin uk-first-column">']);
$yf->setValueField('text',['to_city','Ort',$userdata['to_city'],'[no_db]']);
$yf->setValueField('html',['','</div><div>']);
$yf->setValueField('text',['to_country','Land',$userdata['to_country'],'[no_db]']);

$yf->setValueField('html',['','</div></div>']); // uk-grid hidden

$yf->setValueField('html',['','<div class="uk-grid-margin uk-grid-small uk-child-width-1-1 uk-child-width-1-2@s uk-grid" uk-grid="">']);
$yf->setValueField('html',['','<div class="uk-grid-margin uk-first-column">']);
$yf->setValueField('textarea',['note','Bemerkung',$userdata['note'],'[no_db]',[],'{{ Notiz Bemerkung }}']);

// $yf->setValueField('choice',['payment_type','<p class="bigtext s-b-10">{{ Zahlungsart }}</p>','Rechnung=invoice,Paypal=paypal',$userdata['payment_type'] ?: 'invoice']);
$yf->setValueField('choice',["payment_type","{{ Payment Type }}",'Vorauskasse=prepayment,Rechnung=invoice,Paypal=paypal',1,0]);

$yf->setValueField('html',['','</div>']);
$yf->setValueField('html',['','</div>']);

$yf->setValueField('submit',['send','Weiter ...','','[no_db]','','uk-button uk-margin-top']);

$yf->setValueField('html',['','</div>
                    </section>
']);


$yf->setValidateField('empty',['payment_type','Bitte füllen Sie alle markierten Felder aus']);
$yf->setValidateField('empty',['firstname','Bitte füllen Sie alle markierten Felder aus']);
$yf->setValidateField('empty',['email','Bitte füllen Sie alle markierten Felder aus']);
$yf->setValidateField('email',['email','Bitte geben Sie eine gültige E-Mail Adresse ein']);

$yf->setActionField('callback', ['warehouse::save_userdata_in_session']);
$yf->setActionField('redirect',[rex_config::get('warehouse','order_page')]);

$form = $yf->getForm();

$fragment = new rex_fragment();
$fragment->setVar('form',$form);
echo $fragment->parse('wh_checkout_page.php');

?>