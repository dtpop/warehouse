<?php

rex_sql_table::get(rex::getTable('wh_attributes'))
  ->ensureColumn(new rex_sql_column('pricemode', 'varchar(191)', false, ''))
  ->alter();

