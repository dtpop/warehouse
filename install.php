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

rex_sql_table::get(rex::getTable('wh_attributes'))
  ->ensureColumn(new rex_sql_column('pricemode', 'varchar(191)', false, ''))
  ->alter();

