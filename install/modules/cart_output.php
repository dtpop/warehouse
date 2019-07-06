<?php /* UK . 370 . Warehouse Cart Page - Output - Id: 13 */ 

$cart = warehouse::get_cart();
$fragment = new rex_fragment();
$fragment->setVar('cart',$cart);
echo $fragment->parse('wh_cart_page.php');


?>
