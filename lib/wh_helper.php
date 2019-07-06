<?php

class wh_helper {
    
    private $query;
    private $tree = [];
    private $maxlev = 0;
    
    public function sql_full_tree($parent_id = 0, $level = 0, $depth = 0) {

        $return = array();
        $level++;

        $sql = rex_sql::factory();
//        $sql->setDebug(1);
        $sql->setQuery(str_replace('|parent_id|', $parent_id, $this->query));

        $res = $sql->getArray();
        
//        dump($res); exit;

        if ($res != NULL) {

            foreach ($res as $t) {
                $v = str_repeat('- ', $level - 1) . $t['name'];
                $k = $t['id'];
                $lev = $t;
                $lev['name'] = $v;
                $lev['name_raw'] = $t['name'];
//                $lev = array('id' => $k, 'name' => $v, 'name_raw' => $t['name']);
                if ($this->maxlev > 0 && $level < $this->maxlev && $next_lev = $this->sql_full_tree($k, $level, $depth)) {
                    $lev['level'] = $next_lev;                    
                }
                $return[] = $lev;
            }
        }
        return $return;
    }
    
    public function set_query($query) {
        $this->query = $query;
    }
    
    public function set_maxlev($maxlev) {
        $this->maxlev = $maxlev;
    }
    
    public static function restore_installation () {
        rex_backup::importDb(rex_path::base('redaxo/data/addons/backup/base_installation.sql'));
        rex_logger::factory()->log(1,'Installation wieder hergestellt.');        
    }
    
    
}