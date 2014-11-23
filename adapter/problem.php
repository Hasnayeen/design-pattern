<?php
class Person{
	private $name;
	private $profession;

	public function __construct($name,$profession){
		$this->name=$name;
		$this->profession=$profession;
	}

	public function getProfession(){
		return $this->name . " is a " . $this->profession;
	}
}

$person = new Person("nehal","Doctor");
echo $person->getProfession();