<?php


$url = "http://" . str_replace ( 
		basename($_SERVER ["REQUEST_URI"]), 
		"dest.php", 
		RequestUrl() );

echo $url;


function RequestUrl()  {
	return $_SERVER ["SERVER_NAME"] . ":" .
			$_SERVER ["SERVER_PORT"] .
			$_SERVER ["REQUEST_URI"];
}

?>
