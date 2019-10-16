<?php
// Introduce Explaining Variable
// TODO: 將複雜的運算式的結果，存入一個意義簡明的變數。

$url = "http://" . str_replace ( 
		basename($_SERVER ["REQUEST_URI"]), 
		"dest.php", 
		$_SERVER ["SERVER_NAME"] . ":" . 
		$_SERVER ["SERVER_PORT"] . 
		$_SERVER ["REQUEST_URI"] );

echo $url;

?>
