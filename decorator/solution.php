<?php
class Person implements ActionDecorator{
	private $name;

	public function __construct($name){
		$this->name=$name;
	}

	public function action(){
		echo "$this->name can act like a human being. ";
	}
}

interface ActionDecorator{
	public function action();
}

class Talk implements ActionDecorator{
	private $person;

	public function __construct(ActionDecorator $actionDecorator){
		$this->person = $actionDecorator;
		$this->person->action();
	}

	public function action(){
		echo "He can talk. ";
	}
}

class Walk implements ActionDecorator{
	public $person;

	public function __construct(ActionDecorator $actionDecorator){
		$this->person = $actionDecorator;
		$this->person->action();
	}

	public function action(){
		echo "He can walk. ";
	}
}

class Run implements ActionDecorator{

	public $person;

	public function __construct(ActionDecorator $actionDecorator){
		$this->person = $actionDecorator;
		$this->person->action();
	}

	public function action(){
		echo "He can run. ";
	}
}

$person = new Person("john doe");
$person = new Walk($person);
$person = new Talk($person);
$person = new Run($person);
$person->action();