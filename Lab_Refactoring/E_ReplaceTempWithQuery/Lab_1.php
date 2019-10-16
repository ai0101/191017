<?php
$objItem = new OrderItem("iPhone6", 2, 30000);
echo $objItem->getPrice();

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
		if ($this->basePrice() > 10000)
			return $this->basePrice() * 0.90;
		else
			return $this->basePrice() * 0.95;
	}
	
	private function basePrice() {
		return $this->_quantity * $this->_itemPrice;
	}
	
}

?>