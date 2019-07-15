<?php
/* -- Warehouse Paypal Start -- */
if (rex::isBackend()) {
    echo '<h2>Paypal Start</h2>';
    return;
} else {
    $paypal = new wh_paypal();
    $paypal->init_paypal();
}
?>