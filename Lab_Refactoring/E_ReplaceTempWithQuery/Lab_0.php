<?php
// 變數的內容存的是一個運算式，將運算式轉成函式。
// 1. 找出內容只被設定過一次的臨時變數
// 2. 將等號右邊的運算式，擷取成一個 private 獨立函數。

// TODO: $basePrice 變數那邊，套用 Replace Temp with Query 手法

$objItem = new OrderItem ( "iPhone6", 2, 30000 );
echo $objItem->getPrice ();

class OrderItem {
	private $_productName = "";
	private $_quantity = "";
	private $_itemPrice = "";
	
	function __construct($productName, $quantity, $itemPrice) {
		$this->_productName = $productName;
		$this->_quantity = $quantity;
		$this->_itemPrice = $itemPrice;
	}
	
	function getPrice() {
		$basePrice = $this->_quantity * $this->_itemPrice;
		if ($basePrice > 10000)
			return $basePrice * 0.90;
		else
			return $basePrice * 0.95;
	}
}

?>