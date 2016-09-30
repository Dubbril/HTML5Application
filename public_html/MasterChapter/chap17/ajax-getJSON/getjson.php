<?php
$p = $_GET['product'];

$products = array();
$products['Apple'] = array('ProductName'=>'iPhone', 'Price'=>22000);
$products['Samsung'] = array('ProductName'=>'Galaxy', 'Price'=>20000);
$products['Nokia'] = array('ProductName'=>'Lumia', 'Price'=>18000);

$result = $products[$p];
echo json_encode($result);
?>