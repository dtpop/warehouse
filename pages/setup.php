<?php


if (rex::getUser()->isAdmin()) {
    
    $content = '';
    if (rex_request('install_modules','int') == 1) {
    
        $modules = [
            ['file'=>'cart'  , 'name'=>'Warehouse Warenkorb'],
            ['file'=>'checkout'  , 'name'=>'Warehouse Checkout'],
            ['file'=>'orders'  , 'name'=>'Warehouse Bestellungen'],
            ['file'=>'summary'  , 'name'=>'Warehouse Zusammenfassung'],
            ['file'=>'warehouse'  , 'name'=>'Warehouse Produkt Liste und Detail'],
            ['file'=>'paypal_start'  , 'name'=>'Warehouse Paypal Start'],
            ['file'=>'paypal_success'  , 'name'=>'Warehouse Paypal Zahlung erfolgt'],
        ];

        foreach ($modules as $module) {
            $module_id = 0;
            

            $gm = rex_sql::factory();
            $mod_found = $gm->getArray('select * from '.rex::getTable('module').' WHERE name LIKE "%' . $module['name'] . '%"');
            
            if (count($mod_found)) {
                $module_id = $mod_found[0]['id'];
            }
            

            $input = rex_file::get(rex_path::addon('warehouse', 'install/modules/'.$module['file'].'_input.php'));
            $output = rex_file::get(rex_path::addon('warehouse', 'install/modules/'.$module['file'].'_output.php'));

            $mi = rex_sql::factory();
            // $mi->debugsql = 1;
            $mi->setTable(rex::getTable("module"));
            $mi->setValue('input', $input);
            $mi->setValue('output', $output);

            if ($module_id) {
                $mi->setWhere('id="' . $module_id . '"');
                $mi->update();
                echo rex_view::success('Modul "' . $module['name'] . '" wurde aktualisiert');
            } else {
                $mi->setValue('name', $module['name']);
                $mi->insert();
                echo rex_view::success('Warehouse Modul wurde angelegt unter "' . $module['name'] . '"');
            }
        }
    }
    
    if (rex_request('install_email_templates','int') == 1) {
        $sql = rex_sql::factory();
        $sql->setQuery(
                "INSERT INTO `rex_yform_email_template` (`name`, `mail_from`, `mail_from_name`, `mail_reply_to`, `mail_reply_to_name`, `subject`, `body`, `body_html`, `attachments`) VALUES ('wh_customer', 'webserver@yourdomain.de', 'Ihr Shopname', '', '', 'Bestellbestätigung', 'Sehr geehrter Kunde\r\n\r\nWir bedanken uns bei Ihnen für die Bestellung in unserem Webshop. Hiermit senden wir Ihnen die Bestellbestätigung. Wir werden Ihre Bestellung so schnell als möglich bearbeiten.\r\n\r\nWenn Sie Fragen zum Stand ihrer Bestellung haben, wenden Sie sich gerne an uns.\r\n\r\n<?php echo warehouse::get_order_text(); ?>\r\n\r\nIhre Firma\r\n\r\nDiese Mail wurde automatisch erstellt - bitte nicht antworten.', '', '');"
                );
        $sql->setQuery(
"INSERT INTO `rex_yform_email_template` (`name`, `mail_from`, `mail_from_name`, `mail_reply_to`, `mail_reply_to_name`, `subject`, `body`, `body_html`, `attachments`) VALUES ('wh_order', 'REX_YFORM_DATA[field=\"email\"]', 'REX_YFORM_DATA[field=\"firstname\"] REX_YFORM_DATA[field=\"lastname\"] - REX_YFORM_DATA[field=\"company\"]', '', '', 'Bestellung aus Webshop', 'Bestellung von\r\n\r\nREX_YFORM_DATA[field=\"firstname\"] REX_YFORM_DATA[field=\"lastname\"]\r\n\r\n<?php echo warehouse::get_order_text(); ?>\r\n \r\n \r\n<?php echo warehouse::get_user_data_text(); ?>\r\n', '', '');
"                
                );
        echo rex_view::success('E-Mail Templates wurden angelegt.');
     
    }   

    $content .= '<h2>Module intallieren</h2>';
    $content .= '<p><a class="btn btn-primary" href="index.php?page=warehouse/setup&amp;install_modules=1" class="rex-button">Module installieren</a></p>';
    
    $content .= '<h2>E-Mail Templates intallieren</h2>';
    $content .= '<p><a class="btn btn-primary" href="index.php?page=warehouse/setup&amp;install_email_templates=1" class="rex-button">E-Mail Templates installieren</a></p>';
    
    $content .= '<p><strong>Hinweis:</strong> Module mit gleichem Namen werden überschrieben.</p>';
    

    $fragment = new rex_fragment();
    $fragment->setVar('title', $this->i18n('install_modul'), false);
    $fragment->setVar('body', $content, false);
    echo $fragment->parse('core/page/section.php');
}