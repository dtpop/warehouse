<?php

rex_yform_manager_dataset::setModelClass('rex_wh_articles', wh_articles::class);
rex_yform_manager_dataset::setModelClass('rex_wh_categories', wh_categories::class);
rex_yform_manager_dataset::setModelClass('rex_wh_orders', wh_orders::class);

rex_yform::addTemplatePath($this->getPath('ytemplates'));
// rex_yform::addTemplatePath(rex_path::addon('warehouse', 'ytemplates'));


if (rex::isBackend()) {
    rex_view::addJsFile($this->getAssetsUrl('scripts/wh_be_script.js'));    
}

if (!rex::isBackend()) {
    
    $curDir = __DIR__;
    require_once $curDir . '/functions/helper.php';
    
    rex_login::startSession();
    
    rex_extension::register('PACKAGES_INCLUDED', function() {
        if (rex_request('action','string') == 'add_to_cart') {
            warehouse::add_to_cart();
        }
        if (rex_request('action','string') == 'modify_cart') {
            // wird aufgerufen aus dem Warenkorb mit mod=+1 oder mod=-1 + art_id=...
            warehouse::modify_cart();
        }
        // löscht Anzahl 0-Artikel auf der Bestellbestätigungsseite komplett aus dem Warenkorb
        if (rex_article::getCurrentId() == rex_config::get('warehouse','order_page')) {
            warehouse::clean_cart();
        }
        
        $manager = Url\Url::resolveCurrent();
        $wh_prop = [
            'sitemode'=>'none',
            'seo_title'=>'',
            'path'=>[],
            'tree'=>[]
        ];
        if ($manager) {
            $profile = $manager->getProfile();
            $seo = $manager->getSeo();
//            dump($seo);
//            dump($profile);
            $data_id = (int) $manager->getDatasetId();
            if ($profile->getTableName() == rex::getTable('wh_articles')) {
                // Artikel
                if ($var_id = rex_get('var_id','int')) {
                    $article = wh_articles::get_articles(0,[$data_id,$var_id],true);
                } else {
                    $article = wh_articles::get_articles(0,[$data_id],true,0,1);
                }                
                $wh_prop['sitemode'] = 'article';
                $wh_prop['seo_title'] = $article->get_name();
                $wh_prop['path'] = warehouse::get_path($article->category_id);                
            } elseif ($profile->getTableName() == rex::getTable('wh_categories')) {
                // Kategorie
                $wh_prop['sitemode'] = 'category';
                $wh_prop['seo_title'] = $seo['title'];
                $wh_prop['path'] = warehouse::get_path($data_id);                
            }
            $curl = rtrim(rex_yrewrite::getFullPath(),'/').$_SERVER['REQUEST_URI'];
            rex_set_session('current_page',$curl);            
        }
        $wh_prop['tree'] = warehouse::get_category_tree();
        rex::setProperty('wh_prop',$wh_prop);
        
        if (rex_article::getCurrentId() == rex_config::get('warehouse','thankyou_page')) {
            // Bei Dankeseite Paypal bestätigen
            if (rex_get('paymentId')) {
                warehouse::set_cart_from_payment_id(rex_get('paymentId'));
                wh_paypal::execute_payment();
                // Führt den E-Mail Versand im Hintergrund aus
                $yf = warehouse::summary_form(true);
                warehouse::clear_cart();
            }
        }
        
        
    });
    
    
}

