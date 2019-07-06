<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of tg_helper
 *
 * @author wolfgang
 */
class tg_helper {
    public static function get_attributes_for_articles ($articles,$attr_id) {
        $lines = [];
        foreach ($articles as $art) {
            foreach ($art->attributes as $attr) {
                if ($attr->attribute_id == $attr_id) {
                    // wegen Multiselect Mehrfachauswahl möglich
                    $ls = explode(',',$attr->value);
                    foreach ($ls as $l) {
                        $lines[$l] = $l;                        
                    }
                }
            }
        }
        return $lines;
    }
    
    /**
     * 
     * @param type $article
     * @param type $attr_id
     * @param type $value
     * @param type $is_multiple - bei Multiselect Werten
     * @return boolean
     */
    public static function art_has_attr ($article,$attr_id,$value,$is_multiple = false) {
        foreach ($article->attributes as $attr) {
//            dump($attr);
            if ($attr->attribute_id == $attr_id) {
                if ($is_multiple) {
                    $values = explode(',',$attr->value);
                    if (in_array($value,$values)) {
                        return true;
                    }
                } else {
                    if ($attr->value == $value) {
                        return true;
                    }
                }
            }
        }
        return false;
    }
    
    
}
