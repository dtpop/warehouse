<?php

// Tabellen

$tables = [
    'warehouse',
];

foreach ($tables as $table) {
    $content = rex_file::get(rex_path::addon('warehouse', 'install/tablesets/'.$table.'.json'));
    $content = str_replace('"precision":""','"precision":"10"',$content);
    rex_yform_manager_table_api::importTablesets($content);
}

/*
rex_sql_table::get(rex::getTable('wh_attributes'))
  ->ensureColumn(new rex_sql_column('pricemode', 'varchar(191)', false, ''))
  ->alter();
*/

rex_delete_cache();
rex_yform_manager_table::deleteCache();
  
