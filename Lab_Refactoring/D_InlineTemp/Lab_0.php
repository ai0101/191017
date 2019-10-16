<?php
// TODO: 針對 $total，套用 Inline Temp 手法

echo calculateTotal(10, 5);

function calculateTotal($unitPrice, $count)
{
	$total = $unitPrice * $count;
	return $total;
}

?>