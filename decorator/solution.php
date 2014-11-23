<?php
class Person{
	private $name;

	public function __construct($name){
		$this->name=$name;
	}

	public function action(){
		echo "$this->name can act like a human being. ";
	}
}

abstract class ActionDecorator{
	public abstract function action();
}

class Talk extends ActionDecorator{
	private $person;

	public function __construct(Person $person){
		$this->person = $person;
	}

	public function action(){
		echo "He can talk. ";
	}
}

class Walk extends ActionDecorator{
	public $person;

	public function __construct(Person $person){
		$this->person = $person;
	}

	public function action(){
		echo "He can walk. ";
	}
}

class Run extends ActionDecorator{

	public $person;

	public function __construct(Person $person){
		$this->person = $person;
	}

	public function action(){
		echo "He can run. ";
	}
}

$person = new Person("nehal");
$walk = new Walk($person);
$walk->action();
echo "<br>";
$talk = new Talk($person);
$talk->action();
echo "<br>";
$person->action().$talk->action().$walk->action();