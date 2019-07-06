<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$user_data = $this->wh_userdata;
?>
<p class="bigtext s-t-20">{{ Bestellübersicht }}</p>
<table class="wh_table_std uk-table uk-table-striped uk-table-justify uk-table-small" id="table_order_summary">
    <thead>
        <tr>
            <th></th>
            <th class="uk-text-right"><?= rex_config::get('warehouse','currency') ?></th>
        </tr>
    </thead>
    <?php foreach ($this->cart as $item) : ?>
    <tr>
        <td class="col1">
            <?= html_entity_decode($item['name']) ?><br>
            <?= $item['count'] ?> x à <?= rex_config::get('warehouse','currency') ?> <?= number_format($item['price'],2) ?>
        </td>
        <td class="col2 uk-text-right"><?= rex_config::get('warehouse','currency') ?>&nbsp;<?= number_format($item['total'],2) ?></td>
    </tr>
    <?php endforeach ?>
    <tr class="tr_shipping">
        <td class="col1">{{ Versandkosten }} <?= $this->wh_userdata['country'] ?></td>
        <td class="col2 uk-text-right"><?= rex_config::get('warehouse','currency') ?>&nbsp;<?= number_format(warehouse::get_shipping_cost(),2) ?></td>
    </tr>
    <tr class="tr_total">
        <td class="bigtext col1">{{ Total }}</td>
        <td class="bigtext col2 uk-text-right"><?= rex_config::get('warehouse','currency') ?>&nbsp;<?= number_format(warehouse::get_cart_total(),2) ?></td>
    </tr>
</table>

<p class="s-b-0 s-t-40">{{ Lieferadresse }}:</p>
<p class="s-0">
    <?= $user_data['firstname'] . ' ' . $user_data['lastname'] ?><br>
    <?= $user_data['address'] ?><br>
    <?= $user_data['zip'] . ' ' . $user_data['city'] ?><br>
    <?= $user_data['country_NAME'] ?>
</p>

<p class="s-b-0 s-t-40">{{ Rechnungsadresse }}:</p>

<?php if ($user_data['separate_delivery_address'] == 1) : ?>
    <p class="s-0">{{ Entspricht der Lieferadresse }}</p>
<?php else: ?>
<p class="s-0">
    <?= $user_data['to_firstname'] . ' ' . $user_data['to_lastname'] ?><br>
    <?= $user_data['to_address'] ?><br>
    <?= $user_data['to_zip'] . ' ' . $user_data['to_city'] ?><br>
    <?= $user_data['to_country_NAME'] ?>    
</p>
<?php endif ?>

<p class="s-t-40 s-b-0">{{ Zahlungsart }}:</p>
<p class="s-t-0 s-b-40">{{ payment_<?= $user_data['payment_type']?> }}</p>