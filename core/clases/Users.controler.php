<?php

include_once 'Users.php';

class UsersControler extends Users
{
	
	private $name;
	private $lname;
	private $position;
	private $gender;
	
	
	public function __construct($name,$lname,$gender,$position){
		$this->name = $name;
		$this->lname = $lname;
		$this->position = $position;
		$this->gender = $gender;
		
	}

	public function InserNewUser(){
		if ($this->checkEmpty() == false) {
			header("Location:../../index.php?error=emptyinput"); //ako je neko polje prazno
			exit();
		}
		if ($this->checkInput() == false) {
			header("Location:../../index.php?error=checkinput"); //ako se koristi neko od nedozvoljenih karaktera
			exit();
		}
		
		$res =$this->insetUser($this->name,$this->lname,$this->gender,$this->position);
		return $res;
	}

	private function checkEmpty(){
		$result;
		if (empty($this->name) || empty($this->lname) || empty($this->gender) || empty($this->position)){
			$result = false;
		}else{
			$result = true;
		}
		return $result;
	}

	private function checkInput(){ // provere unetih podataka putem php funkcije preg_match;
		$result;
		$match = "/^[a-zA-Z]*$/";
		if (!preg_match($match,$this->name) && !preg_match($match,$this->lname)) {
			$result = false;
		}else{
			$result = true;
		}
		return $result;
	}
}
