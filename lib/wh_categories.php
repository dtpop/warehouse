<?php

class wh_categories extends \rex_yform_manager_dataset {

    public static function get_children($cat, $depth = 1) {
        $clang = rex_clang::getCurrentId();
        $tree_select = new rex_yform_value_select_sql_tree();
        $tree_select->set_query('SELECT id, image, name_'.$clang.' name FROM rex_wh_categories WHERE status = 1 AND parent_id = |parent_id| ORDER BY prio');
        $data = $tree_select->sqlTree($cat, $depth);
        return $data;
    }

}
