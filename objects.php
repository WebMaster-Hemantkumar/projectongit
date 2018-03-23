<?php
class Product {
	 private $name;
	 private $price;
	 
	 public function __construct($name, $price) {
	 	 $this->name = $name;
	 	 $this->price = $price;
	 }
	 public function getdetails() 
	 {
	 	return  $this->name . " : " .  $this->price;
	 }
}

class  TaxProduct  extends Product {
	private $taxrate;
	
	public function __construct($name, $price, $taxrate) {
		parent::__construct($name,$price);
		$this->taxrate = $taxrate;
	}
	
	public function getdetails(){
		return parent::getdetails(). " : ". $this->taxrate;
	}
	
}

$p1 = new product("HP Pavilion", 55000);
echo "<p>Details = " . $p1->getdetails();

$p2 = new TaxProduct("Nike Shoe", 2500,15.0);
echo "<p>Details = ". $p2->getdetails();


?>