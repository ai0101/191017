<?php
$quanity = 2;
$price = 25;

$preTax = $quanity * $price;
$afterTax = $preTax * 1.05;

echo $afterTax;

?>