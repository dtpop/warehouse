<?php

$tables = [
    'wh_articles',
    'wh_article_variants',
    'wh_categories',
    'wh_attributes',
    'wh_attribute_values',
    'wh_attributegroups',
    'wh_orders'    
];

$sql = rex_sql::factory();

foreach ($tables as $table) {
    $sql->setQuery('DELETE FROM `'.rex::getTable('yform_table').'` WHERE table_name = "'.rex::getTable($table).'"');
    $sql->setQuery('DELETE FROM `'.rex::getTable('yform_field').'` WHERE table_name = "'.rex::getTable($table).'"');
    $sql->setQuery('DELETE FROM `'.rex::getTable('yform_history').'` WHERE table_name = "'.rex::getTable($table).'"');
    rex_sql_table::get(rex::getTable($table))->drop();
}

