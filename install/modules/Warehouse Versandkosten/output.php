<?php /* -- Warehouse Versandkosten -- */ ?>
<h2>Versandkosten</h2>

<?php
$fragment = new rex_fragment();
echo $fragment->parse('wh_shipping_cost.php');
?>