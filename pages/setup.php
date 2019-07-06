<?php


if (rex::getUser()->isAdmin()) {
    
    $content = '';
    if (rex_request('install','int') == 1) {
    
        $modules = [
            ['file'=>'cart'  , 'name'=>'Warehouse Warenkorb'],
            ['file'=>'checkout'  , 'name'=>'Warehouse Checkout'],
            ['file'=>'orders'  , 'name'=>'Warehouse Bestellungen'],
            ['file'=>'summary'  , 'name'=>'Warehouse Zusammenfassung'],
            ['file'=>'warehouse'  , 'name'=>'Warehouse Produkt Liste und Detail']
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

    $content .= '<p>Module intallieren</p>';

    $content .= '<p><a class="btn btn-primary" href="index.php?page=warehouse/setup&amp;install=1" class="rex-button">Module installieren</a></p>';

    $fragment = new rex_fragment();
    $fragment->setVar('title', $this->i18n('install_modul'), false);
    $fragment->setVar('body', $content, false);
    echo $fragment->parse('core/page/section.php');
}