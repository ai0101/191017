<?php
// TODO: 針對參數與變數，改用比較符合變數用途的名稱。

function showStar($x, $y = "*") {
	$a = "";
	for ($i = 1; $i <= $x; $i++) {
		$a .= $y;
	}
	echo $a;
}

$iHowMany = 3;
showStar($iHowMany);
?>
