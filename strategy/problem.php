<?php
class Person{
	private $name;
	private $profession;

	public function __construct($name){
		$this->name = $name;
	}

	public function getProfession($profession){
		switch ($profession) {
			case 'doctor':
				$this->doctor();
				break;
			case 'engineer':
				$this->engineer();
				break;
			case 'teacher':
				$this->teacher();
				break;
		}
	}

	public function doctor(){
		echo $this->name . " is a doctor";
	}
	public function engineer(){
		echo $this->name . " is a engineer";
	}
	public function teacher(){
		echo $this->name . " is a teacher";
	}
}

$person = new Person("nehal");
$person->getProfession("doctor");