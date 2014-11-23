<?php
class Person{
	private $name;
	private $profession;

	public function __construct($name,$profession){
		$this->name = $name;
		$this->profession=$profession;
	}

	public function getName(){
		return $this->name;
	}

	public function getProfession(){
		return $this->profession;
	}
}

class PersonAdapter{
	private $person;
	private $profession;

	public function __construct(Person $person){
		$this->person=$person;
	}

	public function experience($year){
		echo $this->person->getName() . " has {$year} years of experince as a ". $this->person->getProfession();
	}
}

$person = new Person("nehal","doctor");
$personAdapter = new PersonAdapter($person);
$personAdapter->experience(5);