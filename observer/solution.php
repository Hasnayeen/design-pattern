<?php
class Person{
	public $name;
	public $cash;
	public $asset=array();
	protected $_observer=array();

	public function __construct($name,$cash){
		$this->name = $name;
		$this->cash = $cash;
	}

	public function addObserver($type,$observer){
		$this->_observer[$type][] = $observer;
	}

	public function notifyObserver($type){
		if(isset($this->_observer[$type])) {
			foreach($this->_observer[$type] as $observer){
				$observer->update($this);
			}
		}
	}

	public function buy($amount,$asset){
		$this->cash -= $amount;
		$this->asset[] = $asset;
		$this->notifyObserver('buy');
	}

	public function sell($amount){
		$this->cash += $amount;
		$this->notifyObserver('sell');
	} 
}

class BuyAssetNotifyObserver{
	public function update(Person $person){
		echo "You bought a " . end($person->asset) . "<br>";
		echo "Your current cash balance is " . $person->cash . "<br>";
		$person->addObserver('tax',($observer2 = new TaxNotifyObserver));
		$person->notifyObserver('tax');
	}
}

class SellProductNotifyObserver{
	public function update(Person $person){
		echo "You sold a product <br>";
		echo "Your current cash balance is " . $person->cash ."<br>";
		$person->addObserver('tax',($observer2 = new TaxNotifyObserver));
		$person->notifyObserver('tax');
	}

}

class TaxNotifyObserver{
	public function update(Person $person){
		if($person->cash >= 10000000){
			echo "You are eligible for tax. Your tax have been deducted from your cash.<br>";
			$person->cash = $person->cash - (($person->cash * 2.5)/1000);
			echo "Your current cash balance is " . $person->cash;
		}
	}
}

$person = new Person("Usman",15000000);
$observer = new BuyAssetNotifyObserver();
$person->addObserver('buy',$observer);
$person->buy(2000000,'car');