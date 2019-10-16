<?php
// Split Temporary Variable
// 同一個變數先後被設定過兩次內容，兩次的意義各不相同。
// 應該取兩個不同的變數名稱。

$quanity = 2;
$price = 25;

$x = $quanity * $price;
$x = $x * 1.05;

echo $x;

?>