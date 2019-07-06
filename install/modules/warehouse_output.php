<?php /* UK . 350 . Kategorie - Output 

https://chekromul.github.io/uikit-ecommerce-template

 *  */ 

if (rex::isBackend()) {
    echo '<h2>Warehouse Kategorie</h2>';
} else {
    $manager = Url\Url::resolveCurrent();
    if ($manager) {
        $profile = $manager->getProfile();
        $data_id = (int) $manager->getDatasetId();
        if ($profile->getTableName() == rex::getTable('wh_articles')) {
            // Detailanzeige
            if ($var_id = rex_get('var_id','int')) {
                $article = wh_articles::get_articles(0,[$data_id,$var_id],true);
            } else {
//                $article = wh_articles::get_articles(0,[$data_id],true);
                $article = wh_articles::get_articles(0,[$data_id],false,true);
            }
            
            $attributes = wh_articles::get_attributes_for_article($article[0]);
//            dump($attributes[3]['attr']);
//            dump($attributes[3]['data'][0]->getData());
            $fragment = new rex_fragment();
            $fragment->setVar('article',$article[0]);
            $fragment->setVar('articles',$article);
            $fragment->setVar('attributes',$attributes);
            echo $fragment->parse('wh_article_detail.php');
        } elseif ($profile->getTableName() == rex::getTable('wh_categories')) {
            // Listenanzeige Kategorie
            
            // Nur Artikel - mit Varianten
            //  $articles = wh_articles::get_articles($data_id,[]);

            // Nur Artikel - keine Varianten
            $articles = wh_articles::get_articles($data_id,[],false,false,true);
            $fragment = new rex_fragment();
            $fragment->setVar('articles',$articles);
            echo $fragment->parse('wh_article_list.php');
        }
    } else {
        // Katalog
        $wh_prop = rex::getProperty('wh_prop');
        $fragment = new rex_fragment();
        $fragment->setVar('tree',$wh_prop['tree']);
        echo $fragment->parse('wh_catalog.php');
    }
    
}

?>