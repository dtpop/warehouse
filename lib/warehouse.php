<?php

class warehouse {

    static $fields = [
        'firstname', 'lastname', 'birthdate', 'company', 'department', 'address', 'zip', 'city', 'country', 'email', 'phone',
        'to_firstname', 'to_lastname', 'to_company', 'to_department', 'to_address', 'to_zip', 'to_city', 'to_country',
        'separate_delivery_address', 'payment_type', 'note', 'iban', 'bic', 'direct_debit_name'
    ];

    public static function ensure_userdata_fields ($user_data) {
        foreach (self::$fields as $field) {
            if (!isset($user_data[$field])) {
                $user_data[$field] = '';
            }            
        }
        if (rex_addon::get('ycom')->isAvailable()) {
            $ycom_user = rex_ycom_auth::getUser();
            if ($ycom_user) {
                $ycom_userdata = $ycom_user->getData();
                // Sonderfall name
                if ($user_data['lastname'] == '') {
                    $user_data['lastname'] = $ycom_userdata['name'];
                }
                foreach ($user_data as $k=>$v) {
                    if (isset($ycom_userdata[$k]) && $v == '') {
                        $user_data[$k] = $ycom_userdata[$k];
                    }
                }
    //            dump($ycom_user->getData());
            }
        }

        return $user_data;
    }

    public static function get_paypal_client_id() {
        if (rex_config::get('warehouse', 'sandboxmode')) {
            return rex_config::get('warehouse', 'paypal_sandbox_client_id');
        }
        return rex_config::get('warehouse', 'paypal_client_id');
    }
    
    public static function get_paypal_secret() {
        if (rex_config::get('warehouse', 'sandboxmode')) {
            return rex_config::get('warehouse', 'paypal_sandbox_secret');
        }
        return rex_config::get('warehouse', 'paypal_secret');
    }

    public static function add_to_cart() {
        $added = 0;
        $art_id = trim(rex_request('art_id'),'_');
        $article = wh_articles::get_article($art_id);
        $attr_ids = rex_request('wh_attr','array',[]);
        $art_uid = trim($art_id . '$$' . implode('$$',$attr_ids),'$');
        $attributes = wh_articles::get_selected_attributes($article, $attr_ids);

        $art = [];
        $art['count'] = rex_request('order_count', 'int') ?: 1;
        $art['price'] = $article->get_price();
        if ($article->var_freeprice) {
            $art['price'] = abs(rex_request('price', 'float'));
            $art_id .= '-' . $art['price'];
        }
        $art['name'] = $article->get_name();
        $art['cat_name'] = $article->cat_name;
        $art['cat_id'] = $article->cat_id;
        $art['description'] = $article->art_description;
        $art['image'] = $article->get_image();
        $art['art_id'] = $art_id;
        $art['var_id'] = $article->var_id;
        $art['var_whvarid'] = $article->var_whvarid;
        $art['whid'] = $article->whid;
        $art['tax'] = $article->tax;
        $art['free_shipping'] = $article->free_shipping;
        $art['attributes'] = [];
        
        foreach ($attributes as $attr) {
            $art['attributes'][] = $attr->getData();
            $art['price'] += $attr->price;
            $art['name'] .= ' - ' . $attr->label;
        }

        $cart = self::get_cart();
        if ($art['count'] > 0) {
            if (isset($cart[$art_uid])) {
    //            unset($cart[$art_id]);
                $cart[$art_uid]['count'] += $art['count'];
            } else {
                $cart[$art_uid] = $art;
            }
            $added = 1;
        }

        rex_set_session('wh_cart', $cart);
        dump($cart);
        self::cart_recalc();
        self::redirect_from_cart($added,1);
    }

    /*
    public static function add_group_to_cart() {
        $group = rex_request('group', 'array');
        $cart = self::get_cart();
        $added = 0;
        foreach ($group as $pos) {
            if (!$pos['order_count'])
                continue; // nichts oder 0 eingetragen
            $art_id = $pos['art_id'];
            $article = wh_articles::get_article($art_id);
            $art = [];
            $art['count'] = $pos['order_count'];
            $art['price'] = $article->get_price();
            if ($article->var_freeprice) {
                $art['price'] = abs($pos['price']);
//                $art['price'] = $pos['price'];
                $art_id .= '-' . $art['price'];
            }
            $art['name'] = $article->get_name();
            $art['description'] = $article->art_description;
            $art['art_id'] = $art_id;
            $art['free_shipping'] = $article->free_shipping;
            
            if ($art['count'] > 0) {
                if (isset($cart[$art_id])) {
        //            unset($cart[$art_id]);
                    $cart[$art_id]['count'] += $art['count'];
                } else {
                    $cart[$art_id] = $art;
                }
                $added = 1;
            }
            
            
//            $cart[$art_id] = $art;
            $added = 1;
        }
        rex_set_session('wh_cart', $cart);
        self::cart_recalc();
        self::redirect_from_cart($added,1);
    }
*/
    
    public static function cart_recalc() {
        $cart = self::get_cart();
        foreach ($cart as $k=>$art) {
            
            $tax = rex_config::get('warehouse','tax_value');
            if ($art['tax']) {
                $taxpercent = rex_config::get('warehouse',$art['tax']);
            }
            $factor = (100 + $taxpercent)/100;
            $cart[$k]['price_netto'] = round((float) $art['price'] / $factor, 2);
            $cart[$k]['total'] = $art['price'] * $art['count'];
            $cart[$k]['taxval'] = ((float) $art['price'] - $cart[$k]['price_netto']) * $art['count'];
            $cart[$k]['taxpercent'] = $taxpercent;
            $cart[$k]['total'] = $art['price'] * $art['count'];
        }
        rex_set_session('wh_cart', $cart);
    }
    
    
    /**
     * Löscht showcart=1 aus der Url
     * @param type $url
     * @return type
     */
    public static function clean_url ($url) {
        $prev_url = str_replace('?showcart=1&','?',$url);
        $prev_url = str_replace('?showcart=1','',$prev_url);
        $prev_url = str_replace('&showcart=1','',$prev_url);
        return $prev_url;        
    }
    
    
    /**
     * Regelt das Redirect nach Modifikationen des Warenkorbs
     * Aus Artikelseiten wird der request Parameter current_article als Redaxo Article Id angenommen
     * 
     * @param type $added - wenn ein Artikel erfolgreich hinzugefügt wurde, wird 1 übergeben
     */
    public static function redirect_from_cart($added = 0, $force_current_page = 0) {
        $old_page_id = rex_request('current_article', 'int', 0);
        if (rex_request('action') == 'modify_cart' || rex_request('action') == 'add_group_to_cart') {
            $added = 1;
        }
        
        if (rex_session('current_page') && (!$old_page_id || $force_current_page)) {
            $prev_url = self::clean_url(rex_session('current_page'));
            $deli = strpos($prev_url,'?') ? '&' : '?';
            if (rex_config::get('warehouse','cart_mode') == 'cart') {
                rex_redirect(rex_config::get('warehouse','cart_page'));
            } else {
                rex_response::sendRedirect($prev_url . $deli .'showcart=1');
            }
        }

        if ($added && $old_page_id > 0) {
            // wenn in den Settings auf Cart eingestellt ist, auf Cart weiterleiten
            if (rex_config::get('warehouse', 'cart_mode') == 'cart') {
                rex_redirect(rex_config::get('warehouse', 'cart_page'));
            } else {
                if (rex_request('old_url')) {
                    $oldpage = rex_request('old_url');
                    if ($added) {
                        $oldpage .= '?showcart=1';
                    }
                } else {
                    $oldpage = rtrim(rex::getServer(), '/') . rex_getUrl(rex_request('current_article'), '', ['showcart' => 1]);
                }
                rex_response::sendRedirect($oldpage);
            }
        } elseif ($old_page_id > 0) {
            $oldpage = rtrim(rex::getServer(), '/') . rex_getUrl(rex_request('current_article'), '', ['error' => 1]);
            rex_response::sendRedirect($oldpage);
        } else {
            rex_redirect(rex_config::get('warehouse', 'cart_page'));
        }
    }

    /**
     * 
     */
    public static function modify_cart() {
        $cart = self::get_cart();
        $art_uid = rex_get('art_uid');
//        dump($art_uid); exit;
        $mod = rex_get('mod', 'int');
        if (isset($cart[$art_uid])) {
            if ($mod == 'del') {
                unset($cart[$art_uid]);
            } else {
                $cart[$art_uid]['count'] += $mod;
                if ($cart[$art_uid]['count'] < 0)
                    $cart[$art_uid]['count'] = 0;
                $cart[$art_uid]['total'] = $cart[$art_uid]['price'] * $cart[$art_uid]['count'];
            }
            rex_set_session('wh_cart', $cart);
        }
        self::cart_recalc();
        if (rex_request('showcart','int')) {
            self::redirect_from_cart();
        } else {
            rex_redirect(rex_config::get('warehouse', 'cart_page'));
        }
    }

    /**
     * Total (Warenkorb mit Shipping)
     * @return type
     */
    public static function get_cart_total() {
        $sum = self::get_sub_total();
        $sum += self::get_shipping_cost();
        return $sum;
    }

    /**
     * Sub Total (Warenkorb ohne Shipping)
     * @return type
     */
    public static function get_sub_total() {
        $cart = self::get_cart();
        $sum = 0;
        foreach ($cart as $item) {
            $sum += $item['total'];
        }
        return $sum;
    }

    public static function get_sub_total_netto() {
        $cart = self::get_cart();
        $sum = 0;
        foreach ($cart as $item) {
            $sum += $item['price_netto'] * $item['count'];
        }
        return $sum;
    }

    public static function get_tax_total() {
        $cart = self::get_cart();
        $sum = 0;
        foreach ($cart as $item) {
            $sum += $item['taxval'];
        }
        return $sum;
    }

    public static function cart_positions_count() {
        return count(rex_session('wh_cart', 'array'));
    }

    /**
     * Versandkosten nur berechnen, wenn versandkostenpflichtige Artikel verschickt werden
     * @return type
     */
    public static function get_shipping_cost() {
        return wh_shipping::get_cost();
    }

    public static function get_cart() {
        return rex_session('wh_cart', 'array');
    }

    public static function get_user_data() {
        return rex_session('user_data', 'array');
    }

    /**
     * Warenkorb kann nur geladen werden, wenn die Bestellung noch nicht abgeschlossen ist
     * @param type $paypal_id
     */
    public static function set_cart_from_payment_id($paypal_id) {
        $data = rex_sql::factory()
                ->setTable(rex::getTable('wh_orders'))
                ->setWhere('paypal_id = :paypal_id', ['paypal_id' => $paypal_id])
//                ->setWhere('paypal_confirm = :empty', ['empty' => ''])
                ->select('order_json')
                ->getArray()
        ;
        if ($data) {
            $cart = json_decode($data[0]['order_json'], true);
            rex_set_session('wh_cart', $cart['cart']);
            rex_set_session('user_data', $cart['user_data']);
        }
    }

    public static function get_tax() {
        $sub_total = self::get_sub_total();
        $tax = rex_config::get('warehouse', 'tax_value');
        $tax_value = round(($sub_total / (100 + $tax) * $tax), 2);
        return $tax_value;
    }

    public static function get_cart_netto() {
        return self::get_sub_total_netto();
    }

    public static function clear_cart() {
        rex_unset_session('wh_cart');
    }
    
    // für Aufruf aus yform Action
    public static function save_order() {
        self::save_order_to_db(0);
    }

    public static function save_order_to_db($paypal_id = '') {
        $cart = self::get_cart();
        foreach ($cart as $k=>$v) {
            unset($v['attributes']);
            unset($v['description']);
            $cart[$k] = $v;
        }
        $shipping = self::get_shipping_cost();
        $total = self::get_cart_total();
        $user_data = rex_session('user_data', 'array');

        $order_text = self::get_user_data_text();
        $order_text .= PHP_EOL . PHP_EOL;
        $order_text .= self::get_order_text();

        $sql = rex_sql::factory();
//        $sql->setDebug();
        $values = [
            'order_total' => $total,
            'paypal_id' => $paypal_id,
            'order_json' => json_encode([
                'cart' => $cart,
                'user_data' => $user_data
            ]),
            'createdate' => date('Y-m-d H:i:s'),
            'order_text' => $order_text,
            'firstname' => $user_data['firstname'],
            'lastname' => $user_data['lastname'],
            'birthdate' => $user_data['birthdate'] ?: '',
            'address' => $user_data['address'],
            'zip' => $user_data['zip'],
            'city' => $user_data['city'],
            'email' => $user_data['email']
        ];
        if (rex_addon::get('ycom')->isAvailable()) {
            $ycom_user = rex_ycom_auth::getUser();
            if ($ycom_user) {
                $values['ycom_userid'] = $ycom_user->id;
            }
        }
        
        $sql->setTable(rex::getTable('wh_orders'));
        $sql->setValues($values);
        $sql->insert();
    }

    public static function get_order_text() {
        $cart = self::get_cart();
        $shipping = self::get_shipping_cost();
        $total = self::get_cart_total();

        $out = '';
        $out .= mb_str_pad('Art. Nr.', 20, ' ', STR_PAD_RIGHT);
        $out .= mb_str_pad('Artikel', 45, ' ', STR_PAD_RIGHT);
        $out .= mb_str_pad('Anzahl', 7, ' ', STR_PAD_LEFT);
        $out .= mb_str_pad(rex_config::get('warehouse','currency'), 10, ' ', STR_PAD_LEFT);
        $out .= mb_str_pad(rex_config::get('warehouse','currency'), 10, ' ', STR_PAD_LEFT);
        $out .= PHP_EOL;
        $out .= str_repeat('-', 92);
        $out .= PHP_EOL;

        foreach ($cart as $pos) {
            if ($pos['var_whvarid']) {
                $out .= mb_str_pad(mb_substr(html_entity_decode($pos['var_whvarid']), 0, 20), 20, ' ', STR_PAD_RIGHT);
            } else {
                $out .= mb_str_pad(mb_substr(html_entity_decode($pos['whid']), 0, 20), 20, ' ', STR_PAD_RIGHT);                
            }
            $out .= mb_str_pad(mb_substr(html_entity_decode($pos['name']), 0, 45), 45, ' ', STR_PAD_RIGHT);
            $out .= mb_str_pad($pos['count'], 7, ' ', STR_PAD_LEFT);
            $out .= mb_str_pad(number_format($pos['price_netto'], 2), 10, ' ', STR_PAD_LEFT);
            $out .= mb_str_pad(number_format($pos['price_netto'] * $pos['count'], 2), 10, ' ', STR_PAD_LEFT);
            $out .= PHP_EOL;
            foreach ($pos['attributes'] as $attr) { 
                $out .= str_repeat(' ', 20);
                $out .= mb_substr(html_entity_decode($attr['value'].'  '.$attr['at_name'].': '.$attr['label']), 0, 70);
                $out .= PHP_EOL;
            }
            $out .= str_repeat(' ', 20);
            $out .= mb_substr(html_entity_decode('Steuer: '.$pos['taxpercent'].'% = '.number_format($pos['taxval'],2)), 0, 70);
            $out .= PHP_EOL;
            
        }
        $out .= str_repeat('-', 92);
        $out .= PHP_EOL;
        $out .= mb_str_pad('Summe', 55, ' ', STR_PAD_RIGHT);
        $out .= mb_str_pad(number_format(warehouse::get_sub_total_netto(), 2), 37, ' ', STR_PAD_LEFT);
        $out .= PHP_EOL;
        $out .= mb_str_pad('Mehrwertsteuer', 55, ' ', STR_PAD_RIGHT);
        $out .= mb_str_pad(number_format(warehouse::get_tax_total(), 2), 37, ' ', STR_PAD_LEFT);
        $out .= PHP_EOL;
        $out .= mb_str_pad('Versand', 55, ' ', STR_PAD_RIGHT);
        $out .= mb_str_pad(number_format($shipping, 2), 37, ' ', STR_PAD_LEFT);
        $out .= PHP_EOL;
        $out .= str_repeat('-', 92);
        $out .= PHP_EOL;
        $out .= mb_str_pad('Total', 55, ' ', STR_PAD_RIGHT);
        $out .= mb_str_pad(number_format($total, 2), 37, ' ', STR_PAD_LEFT);
        $out .= PHP_EOL;
        $out .= str_repeat('=', 92);
        $out .= PHP_EOL;
        return $out;
    }

    public static function get_user_data_text() {
        $user_data = self::get_user_data();
        $out = '';

        $out .= 'Rechnungsadresse' . PHP_EOL;
        $out .= PHP_EOL;

        $out .= $user_data['company'] ? $user_data['company'] . PHP_EOL : '';
        $out .= $user_data['firstname'] . ' ' . $user_data['lastname'] . PHP_EOL;
        $out .= $user_data['department'] ? $user_data['department'] . PHP_EOL : '';
        $out .= $user_data['address'] ? $user_data['address'] . PHP_EOL : '';
        $out .= $user_data['country'] . ' ' . $user_data['zip'] . ' ' . $user_data['city'] . PHP_EOL;
        $out .= PHP_EOL;
        $out .= $user_data['phone'] ? 'Telefon: ' . $user_data['phone'] . PHP_EOL : '';
        $out .= $user_data['email'] ? $user_data['email'] . PHP_EOL : '';
        $out .= PHP_EOL;
        if (isset($user_data['birthdate']) && $user_data['birthdate']) {
            $out .= 'Geburtsdatum:' . PHP_EOL;
            $out .= $user_data['birthdate'] . PHP_EOL;
        }
        $out .= PHP_EOL;
        $out .= 'Lieferadresse' . PHP_EOL;
        $out .= PHP_EOL;

        $out .= $user_data['to_company'] ? $user_data['to_company'] . PHP_EOL : '';
        $out .= $user_data['to_firstname'] . ' ' . $user_data['to_lastname'] . PHP_EOL;
        $out .= $user_data['to_department'] ? $user_data['to_department'] . PHP_EOL : '';
        $out .= $user_data['to_address'] ? $user_data['to_address'] . PHP_EOL : '';
        $out .= $user_data['to_country'] . ' ' . $user_data['to_zip'] . ' ' . $user_data['to_city'] . PHP_EOL;
        $out .= PHP_EOL;
        $out .= $user_data['note'] ? 'Bemerkung:' . PHP_EOL . $user_data['note'] . PHP_EOL : '';
        $out .= PHP_EOL;
        $out .= 'Zahlungsweise: ' . self::get_payment_type($user_data['payment_type']) . PHP_EOL;
        $out .= PHP_EOL;
        if ($user_data['payment_type'] == 'direct_debit') {
            $out .= 'IBAN: ' . $user_data['iban'] . PHP_EOL;
            $out .= 'BIC: ' . $user_data['bic'] . PHP_EOL;
            if ($user_data['direct_debit_name']) {
                $out .= 'Kontoinhaber: ' . $user_data['direct_debit_name'] . PHP_EOL;
            } else {
                $out .= 'Kontoinhaber: ' . $user_data['firstname'] . ' ' . $user_data['lastname'] . PHP_EOL;
            }
            
        }

        return $out;
    }

    /**
     * Funktion wird aus wh_paypal->execute_payment aufgerufen, wenn die Zahlung abgeschlossen ist.
     * Kann nur einmal ausgeführt werden (wenn paypal_confirm noch leer ist).
     * 
     */
    public static function paypal_approved($payment) {
        $sql = rex_sql::factory()->setTable(rex::getTable('wh_orders'))
                ->setWhere('paypal_id = :paypal_id', ['paypal_id' => $payment->id])
                ->setWhere('paypal_confirm = :empty', ['empty' => ''])
        ;
        $sql->setValue('paypal_confirm', date('Y-m-d H:i:s'));
        $sql->update();
        // db
        // $payment->id = paypalId
    }

    public static function get_items_count_in_basket() {
        return count(rex_session('wh_cart', 'array'));
    }

    /**
     * Aufruf aus Action der Adresseingabe
     * @param type $params
     */
    public static function save_cart_in_session($params) {
        $value_pool = $params->params['value_pool']['email'];
        rex_set_session('wh_data', $value_pool);
    }

    /**
     * Aufruf aus Action der Adresseingabe
     * @param type $params
     */
    public static function save_userdata_in_session($params) {
        $value_pool = $params->params['value_pool']['sql'];
        foreach (self::$fields as $field) {
            if (in_array('to_'.$field,self::$fields)) {
                $value_pool['to_' . $field] = $value_pool['to_' . $field] ?: $value_pool[$field];
            }
        }
        rex_set_session('user_data', $value_pool);
    }
    
    /**
     * Sortiert Elemente aus, die 0 Stück haben
     */
    public static function clean_cart () {
        $mycart = self::get_cart();
        foreach ($mycart as $k=>$v) {
            if ($v['count'] == 0) {
                unset($mycart[$k]);
            }
        }
        rex_set_session('wh_cart', $mycart);
    }
    
    public static function get_path($cat_id) {
        
        $path = [];
        $qry = 'SELECT name_'.rex_clang::getCurrentId().' `name`, `id`, parent_id FROM '.rex::getTable('wh_categories').' WHERE `id` = :id';
        $sql = rex_sql::factory();
        while ($cat_id > 0) {
            $current = $sql->getArray($qry,['id'=>$cat_id]);
            $path[] = $current[0];
            $cat_id = $current[0]['parent_id'];
        }
        return array_reverse($path);
    }
    
    public static function get_category_tree ($depth = 2) {
        $otree = new wh_helper();
        $otree->set_query('SELECT id, name_'.rex_clang::getCurrentId().' name, image, parent_id FROM '.rex::getTable('wh_categories').' WHERE status = 1 AND parent_id = |parent_id| ORDER BY prio' );
        $otree->set_maxlev($depth);
        $tree = $otree->sql_full_tree();
        return $tree;        
    }
    
    public static function get_payment_type ($payment_key) {
        $payment_types = [
            'prepayment'=>'Vorauskasse',
            'invoice'=>'Rechnung',
            'paypal'=>'Paypal',
            'direct_debit'=>'SEPA Lastschrift',
            ];
        if (isset($payment_types[$payment_key])) {
            return $payment_types[$payment_key];
        } else {
            return $payment_key;
        }
    }


}
