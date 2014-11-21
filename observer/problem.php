<?php
class Person{
	private $name;
	private $cash;

	public function __construct($name,$cash){
		$this->name = $name;
		$this->cash = $cash;
	}

	public function buy($amount,$asset){
		$this->cash -= $amount;
		$this->asset[] = $asset;
		echo "You bought a " .$asset . "<br>";
		echo "Your current cash balance is " . $this->cash . "<br>";
	}

	public function sell($amount){
		$this->cash += $amount;
		echo "Your current cash balance is " . $this->cash . "<br>";
	} 
}

$person = new Person("Usman",5000000);
$person->buy(2000000,"car");