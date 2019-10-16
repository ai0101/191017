<?php

$sData = readDataFile("pick3.txt");
showHotColdList($sData);


// 讀取資料檔
function readDataFile($sFilname) {
	$result = "";
	$f = fopen ( $sFilname, "r" );
	while ( ! feof ( $f ) ) {
		$line = fgets ( $f );
		$result .= Trim ( $line );
	}
	fclose ( $f );
	return $result;
}

// 顯示冷號熱號數列
function showHotColdList($sData) {
	$result = "0123456789";
	$iLen = strlen ( $sData );
	for($iPos = 0; $iPos < $iLen; $iPos ++) {
		$ch = substr ( $sData, $iPos, 1 );
		$result = $ch . str_replace ( $ch, "", $result );
	}
	echo substr ( $result, 0, 5 ) . "-" . substr ( $result, 5, 5 ); 
}

?>
