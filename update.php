<?php

rex_sql_table::get(rex::getTable('wh_attributes'))
  ->ensureColumn(new rex_sql_column('pricemode', 'varchar(191)', false, ''))
  ->alter();
rex_sql_table::get(rex::getTable('wh_orders'))
  ->ensureColumn(new rex_sql_column('paypal_confirm_token', 'text', false, ''))
  ->alter();

