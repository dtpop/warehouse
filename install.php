<?php

// Tabellen

$tables = [
    'wh_articles',
    'wh_article_variants',
    'wh_categories',
    'wh_attributes',
    'wh_attribute_values',
    'wh_attributegroups',
    'wh_orders'    
];

foreach ($tables as $table) {
    $content = rex_file::get(rex_path::addon('warehouse', 'install/tablesets/'.$table.'.json'));
    rex_yform_manager_table_api::importTablesets($content);
}

if (rex_plugin::get('ycom','auth')->isAvailable()) {
    $table = rex_sql_table::get(rex::getTable('ycom_user'));
    $table
        ->ensurePrimaryIdColumn()
        ->ensureColumn(new rex_sql_column('birthdate', 'varchar(191)'))
        ->ensureColumn(new rex_sql_column('company', 'varchar(191)'))
        ->ensureColumn(new rex_sql_column('address', 'varchar(191)'))
        ->ensureColumn(new rex_sql_column('country', 'varchar(191)'))
        ->ensureColumn(new rex_sql_column('zip', 'varchar(191)'))
        ->ensureColumn(new rex_sql_column('city', 'varchar(191)'))
        ->ensureColumn(new rex_sql_column('agecheck', 'varchar(191)'))
        ->ensure();    
}