<?php
// TODO: 針對 MoreThan5() 函式，套用 Inline Method 手法

$amount = 7;
$rating = MoreThan5($amount) ? 'A' : 'B';
echo $rating;

function MoreThan5($amount) {
	return $amount > 5;
} 

?>


