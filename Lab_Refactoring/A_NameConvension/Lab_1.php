<?php
function showStar($iCount, $sWhat = "*") {
	$result = "";
	for ($i = 1; $i <= $iCount; $i++) {
		$result .= $sWhat;
	}
	echo $result;
}

$iHowMany = 3;
showStar($iHowMany);
?>
