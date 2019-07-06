<div class="uk-grid-margin uk-first-column">
    <div class="uk-grid-medium uk-grid" uk-grid="">
        <div class="uk-width-1-1 uk-width-expand@m uk-first-column">
            <div class="uk-card uk-card-default uk-card-small tm-ignore-container">
                <header class="uk-card-header uk-text-uppercase uk-text-muted uk-text-center uk-text-small uk-visible@m">
                    <div class="uk-grid-small uk-child-width-1-2 uk-grid" uk-grid="">
                        <div class="uk-first-column">product</div>
                        <div>
                            <div class="uk-grid-small uk-child-width-expand uk-grid" uk-grid="">
                                <div class="uk-first-column">price</div>
                                <div class="tm-quantity-column">quantity</div>
                                <div>sum</div>
                                <div class="uk-width-auto">
                                    <div style="width: 20px;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
                
                <?php foreach ($this->cart as $uid=>$item) : ?>
                    <?php $base_id = explode('__',$item['art_id'])[0] ?>
                <!-- Item -->
                <div class="uk-card-body">
                    <div class="uk-grid-small uk-child-width-1-1 uk-child-width-1-2@m uk-flex-middle uk-grid" uk-grid="">
                        <!-- Product cell-->
                        <div class="uk-first-column">
                            <div class="uk-grid-small uk-grid" uk-grid="">
                                <div class="uk-width-1-3 uk-first-column">
                                    <div class="tm-ratio tm-ratio-4-3">
                                        <?php if ($item['image']) : ?>
                                        <a class="tm-media-box" href="<?= rex_getUrl('','',['wh_art_id'=>$base_id]) ?>">
                                            <figure class="tm-media-box-wrap"><img src="/images/products/<?= $item['image'] ?>" alt="<?= $item['name'] ?>"></figure>
                                        </a>
                                        <?php endif ?>
                                    </div>
                                </div>
                                <div class="uk-width-expand">
                                    <div class="uk-text-meta"><?= $item['cat_name'] ?></div>
                                    <a class="uk-link-heading" href="<?= rex_getUrl('','',['wh_art_id'=>$base_id]) ?>"><?= html_entity_decode($item['name']) ?></a>
                                </div>
                            </div>
                        </div>
                        <!-- Other cells-->
                        <div>
                            <div class="uk-grid-small uk-child-width-1-1 uk-child-width-expand@s uk-text-center uk-grid" uk-grid="">
                                <div class="uk-first-column">
                                    <div class="uk-text-muted uk-hidden@m">{{ Price }}</div>
                                    <div><?= rex_config::get('warehouse','currency_symbol').number_format($item['price'],2) ?></div>                        
                                </div>
                                <div class="tm-cart-quantity-column">
                                    <a href="/index.php?current_article=<?= rex_article::getCurrentId() ?>&action=modify_cart&art_uid=<?= $uid ?>&mod=-1" uk-icon="icon: minus; ratio: .75" class="uk-icon">-</a>
                                    <input class="uk-input tm-quantity-input" id="product-1" type="text" maxlength="3" value="<?= $item['count'] ?>" disabled>
                                    <a href="/index.php?current_article=<?= rex_article::getCurrentId() ?>&action=modify_cart&art_uid=<?= $uid ?>&mod=+1" uk-icon="icon: plus; ratio: .75" class="uk-icon">+</a>
                                </div>
                                <div>
                                    <div class="uk-text-muted uk-hidden@m">Sum</div>
                                    <div><?= rex_config::get('warehouse','currency_symbol').number_format($item['total'],2) ?></div>                        
                                </div>
                                <div class="uk-width-auto@s"><a href="/index.php?current_article=<?= rex_article::getCurrentId() ?>&action=modify_cart&art_uid=<?= $uid ?>&mod=del" class="uk-text-danger" uk-tooltip="Remove" title="" aria-expanded="false"><span uk-icon="close" class="uk-icon">{{ delete }}</span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- // Item -->
                <?php endforeach ?>
                
            </div>
        </div>
        <div class="uk-width-1-1 tm-aside-column uk-width-1-4@m">
            <div class="uk-card uk-card-default uk-card-small tm-ignore-container uk-sticky" uk-sticky="offset: 30; bottom: true; media: @m;">
                <div class="uk-card-body">
                    <div class="uk-grid-small uk-grid" uk-grid="">
                        <div class="uk-width-expand uk-text-muted uk-first-column">{{ Subtotal }}</div>
                        <div><?= rex_config::get('warehouse','currency_symbol') ?>&nbsp;<?= number_format(warehouse::get_sub_total(),2) ?></div>
                    </div>
                    <div class="uk-grid-small uk-grid" uk-grid="">
                        <div class="uk-width-expand uk-text-muted uk-first-column">{{ Shipping }}</div>
                        <div class="uk-text"><?= rex_config::get('warehouse','currency_symbol') ?>&nbsp;<?= number_format(warehouse::get_shipping_cost(),2) ?></div>
                    </div>
                </div>
                <div class="uk-card-body">
                    <div class="uk-grid-small uk-flex-middle uk-grid" uk-grid="">
                        <div class="uk-width-expand uk-text-muted uk-first-column">{{ Total }}</div>
                        <div class="uk-text-lead uk-text-bolder"><?= rex_config::get('warehouse','currency_symbol') ?>&nbsp;<?= number_format(warehouse::get_cart_total(),2) ?></div>
                    </div><a class="uk-button uk-button-primary uk-margin-small uk-width-1-1" href="<?= rex_getUrl(rex_config::get('warehouse','address_page')) ?>">checkout</a></div>
            </div>
            <div class="uk-sticky-placeholder" hidden="" style="height: 230px; margin: 0px;"></div>
        </div>
    </div>
</div>
