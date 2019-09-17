<?php /* wh05 . Katalog - Liste und Detailansicht Shop - Output  */ 
$wh_prop = rex::getProperty('wh_prop');

if (rex::isBackend()) {
    echo '<h2>Warehouse Kategorie- und Detailansicht</h2>';
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
                $article = wh_articles::get_articles(0,[$data_id],false,true);
            }
            
            $attributes = wh_articles::get_attributes_for_article($article[0]);
            $fragment = new rex_fragment();
            $fragment->setVar('article',$article[0]);
            $fragment->setVar('articles',$article);
            $fragment->setVar('attributes',$attributes);
            echo $fragment->parse('wh_article_detail.php');
        } elseif ($profile->getTableName() == rex::getTable('wh_categories')) {
            $fragment = new rex_fragment();
            
            // Listenanzeige Unterkategorie
            $categories = wh_categories::get_children($data_id);
            if ($categories) {
                $fragment->setVar('tree',$categories);
                $fragment->setVar('path',$wh_prop['path']);
                echo $fragment->parse('wh_catalog.php');
            }
            
            // Nur Artikel - keine Varianten
            $articles = wh_articles::get_articles($data_id,[]);
            $category = wh_categories::get($data_id)->getData();
            if (isset($articles[0])) {
                $fragment->setVar('items',$articles);
                $fragment->setVar('category',$category);
                $fragment->setVar('path',$wh_prop['path']);
                echo $fragment->parse('wh_article_with_variants.php');
                echo $fragment->parse('wh_scheme_article_with_variants.php');
            }
        }
    } else {
        // Katalog
        $fragment = new rex_fragment();
        $fragment->setVar('tree',$wh_prop['tree']);
        echo $fragment->parse('wh_catalog.php');
    }
    
}

?>