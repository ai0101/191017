<?php
// TODO: 將「產生冷號熱號數列」那段的程式擷取成新函式。
// TODO: 練習將「讀取資料檔」那段的程式擷取成新函式。

// 讀取資料檔
$sData = "";
$f = fopen ( "pick3.txt", "r" );
while ( ! feof ( $f ) ) {
	$line = fgets ( $f );
	$sData .= Trim ( $line );
}
fclose ( $f );

// 產生冷號熱號數列
$result = "0123456789";
$iLen = strlen ( $sData );
for($iPos = 0; $iPos < $iLen; $iPos ++) {
	$ch = substr ( $sData, $iPos, 1 );
	$result = $ch . str_replace ( $ch, "", $result );
}
echo substr ( $result, 0, 5 ) . "-" . substr ( $result, 5, 5 );

?>
