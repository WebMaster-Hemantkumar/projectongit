<?php

  class  Account {
  	
  	var  $cname,$balance;
  	static $minbal= 5000;
  	
  	function Account($cname) {
  		$this->cname = $cname;
  		$this->balance = 0;
  	}
  	function deposit($amount) {
  		$this->balance += $amount;
  	}
  	function getcustomer() {
  		return $this->cname;
  	}
  	function getbalance() {
  		return $this->balance;
  	}
  	function getminbal() {
  		return  Account::$minbal;
  	}
  }

  class JointAccount extends Account {
  	var $cname2;
  	
  	function JointAccount($cname1, $cname2) {
  		parent::Account($cname1);
  		$this->cname2 = $cname2;
  	}
  	
  	function getcustomer() {
  		return  $this->cname. " , ". $this->cname2;
  	}
  }
?>

<h1>Using Class Account</h1>

<?php

 $a1 = new Account("Srikanth");
 $a2 = new JointAccount("Srikanth","Padmaja");
 
 $a1->deposit(10000);
 echo "Balance =". $a1->getbalance();
 
 $bal = $a1->getbalance();
 echo "<p>Balance  :". $bal;
 
 echo "<p>Mininum Balance : ". Account::getminbal();
 
 echo "<p>Joint account -> ". $a2->getcustomer();
 
 
?>