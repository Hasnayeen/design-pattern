<?php
class Person{
	private $name;
	private $profession;

	public function __construct($name){
		$this->name = $name;
	}

	public function getProfession(Profession $profession){

		$this->profession = $profession->professionInfo();
	}
}

interface Profession{
	public function professionInfo();
}

class Doctor implements Profession{
	public function professionInfo(){
		echo "I am a Doctor";
	}
}

class Engineer implements Profession{
	public function professionInfo(){
		echo "I am a Engineer";
	}
}

class Teacher implements Profession{
	public function professionInfo(){
		echo "I am a Teacher";
	}
}

$person = new Person("nehal");
$person->getProfession(new Teacher);