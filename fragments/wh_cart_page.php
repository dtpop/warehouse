<?php
$cart = $this->cart;
$showcart = $this->mode == 'template' && rex_request('showcart', 'int') ? 1 : 0;
$rex_article_id = rex_article::getCurrentId();
?>
<div class="grid-container fluid">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell small-12">
                <h2>Warenkorb</h2>

                <?php if (!$cart) : ?>
                    <p>{{ Der Warenkorb ist leer }}</p>
                <?php else : ?>

                    <div class="table wh_cart_table">
                        <div class="tr thead">
                            <div class="th col1">Artikel</div>
                            <div class="th col2 text-right">Einzelpreis <?= rex_config::get('warehouse', 'currency_symbol') ?></div>
                            <div class="th col3 text-right">Anzahl&emsp;</div>
                            <div class="th col4 text-right">Betrag <?= rex_config::get('warehouse', 'currency_symbol') ?></div>
                            <div class="th col5">&nbsp;</div>
                        </div>
                        <?php foreach ($cart as $k => $item) : ?>
                            <div class="tr tbody">
                                <div class="td align-left col1"><?= html_entity_decode($item['name']) ?></div>
                                <div class="td col2 text-right"><?= number_format($item['price'], 2) ?></div>
                                <div class="td col3 no-wrap td_wh_count text-right">
                                    <a href="/index.php?current_article=<?= $rex_article_id ?>&showcart=<?= $showcart ?>&action=modify_cart&art_uid=<?= $k ?>&mod=-1" class="button tiny">-</a>
                                    <span class="countnum"><?= $item['count'] ?></span>
                                    <a href="/index.php?current_article=<?= $rex_article_id ?>&showcart=<?= $showcart ?>&action=modify_cart&art_uid=<?= $k ?>&mod=+1" class="button tiny">+</a>
                                </div>
                                <div class="td col4 text-right"><?= number_format($item['total'], 2) ?></div>
                                <div class="td col5 text-right">
                                    <a href="/index.php?current_article=<?= $rex_article_id ?>&showcart=<?= $showcart ?>&action=modify_cart&art_uid=<?= $k ?>&mod=del" class="button">{{ delete }}</a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        <div class="tr tfoot">
                            <div class="td col1 align-left">{{ Versandkosten }}</div><div class="td col2">&nbsp;</div><div class="td col3">&nbsp;</div><div class="td col4 text-right"><?= number_format(warehouse::get_shipping_cost(), 2) ?></div><div class="td col5">&nbsp;</div>
                        </div>
                        <div class="tr tfoot">
                            <div class="td col1 align-left">{{ Total }}</div><div class="td col2">&nbsp;</div><div class="td col3">&nbsp;</div><div class="td col4 text-right"><?= number_format(warehouse::get_cart_total(), 2) ?></div><div class="td col5">&nbsp;</div>
                        </div>
                    </div>

                    <p>
                        <?php if (rex_session('current_page')) : ?>
                            <a href="<?= warehouse::clean_url(rex_session('current_page')) ?>" class="button">Zurück</a>&nbsp;&nbsp;
                        <?php endif ?>
                        <a href="<?= rex_getUrl(rex_config::get('warehouse', 'address_page')) ?>" class="button">Weiter</a>
                    </p>
                <?php endif ?>
            </div>
        </div>
    </div>
</div>
