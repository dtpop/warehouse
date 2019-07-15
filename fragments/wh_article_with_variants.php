<?php
$main_item = $this->items[0];
$specifications = rex_var::toArray($main_item->specifications_1);
?>
<div class="uk-grid-margin uk-first-column">
    <div class="uk-grid-medium uk-grid" uk-grid="">
        <div class="grid-x grid-padding-x">
            <div class="cell small-12 medium-6">
                <h2><?= $main_item->name_1 ?></h2>
                <?= $main_item->longtext_1 ?>
                <?php if ($specifications) : ?>
                    <dl>
                        <?php foreach ($specifications as $spec) : ?>
                            <dt><?= $spec[0] ?></dt>
                            <dd><?= $spec[1] ?></dd>
                        <?php endforeach ?>
                    </dl>
                <?php endif ?>
            </div>
            <div class="cell small-12 medium-6">
                <img src="/images/product/<?= $main_item->image ?>" class="margin-bottom-2">
                
                <?php foreach ($this->items as $item) : ?>
                    <div class="article_item">
                        <form action="/index.php" method="post">
                            <input type="hidden" name="art_id" value="<?= $item->get_art_id() ?>">
                            <input type="hidden" name=action value="add_to_cart">
                            <div class="grid-x grid-margin-x">
                                <div class="cell medium-6">
                                    <p class="priceline"><?= $item->var_name ?> - <?= $item->get_price(true) ?></p>
                                </div>
                              <div class="cell medium-6 wh-order-cell">
                                  <label for="wh_count_<?= $item->get_art_id() ?>" class="button tiny switch_count" data-value="-1">-</label><input name="order_count" type="text" class="order_count" id="wh_count_<?= $item->get_art_id() ?>" value="1"><label for="wh_count_<?= $item->get_art_id() ?>" class="button tiny switch_count" data-value="+1">+</label>
                                  <button type="submit" name="submit" value="1" class="button order_button">{{ Bestellen }}</button>
                              </div>
                            </div>
                        </form>
                    </div>
                <?php endforeach ?>                
            </div>
        </div>
    </div>
</div>
