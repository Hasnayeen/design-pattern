<?php
class Person{
	private $name;
	private $profession;

	public function __construct($name){
		$this->name=$name;
	}

	public function getProfession($profession){
		$this->profession=$profession;
		return $profession;
	}
}

$person = new Person("nehal");
echo $person->getProfession("Doctor");