<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of wh_shipping
 *
 * @author wolfgang
 */
class wh_shipping {
    
    public static function get_cost() {
        if (rex_config::get('warehouse','shipping_mode') == 'pieces') {
            $cart = warehouse::get_cart();
            $shipping_params = json_decode(rex_config::get('warehouse','shipping_parameters'));
            $sum_pcs = 0;
            foreach ($cart as $ci) {
                $sum_pcs += $ci['count'];
            }
            $shipping = rex_config::get('warehouse', 'shipping');
            foreach ($shipping_params as $param) {
                switch ($param[0]) {
                    case '>':
                        if ($sum_pcs > $param[1]) {
                            return $param[2];
                        }
                        break;
                    case '<':
                        if ($sum_pcs < $param[1]) {
                            return $param[2];
                        }
                        break;
                    case '=':
                        if ($sum_pcs == $param[1]) {
                            return $param[2];
                        }
                        break;
                }
            }
        }
        return rex_config::get('warehouse', 'shipping');
    }
    
}
