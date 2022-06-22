<?php 

include_once 'AddNewPosition.php';


class AddNewPositionControler extends AddNewPosition
{
	
	private $position_name;
	private $position_descritpion;

	function __construct($position_name,$position_descritpion)
	{
		$this->position_name = $position_name;
		$this->position_descritpion = $position_descritpion;
	}

	public function insertPosition(){
		if ($this->checkEmpty() == false) {
			header("Location:../../addnewposition.php?error=emptyinput"); //if there is an empty field
			exit();
		}
		if ($this->checkInput() == false) {
			header("Location:../../addnewposition.php?error=checkinput"); //if used something other then letters
			exit();
		}
		if ($this->inputInbase() == false) {
			header("Location:../../addnewposition.php?errinbase"); // if in base 
			exit();
		}
		$new = $this->addPosition($this->position_name,$this->position_descritpion);
		if ($new == true) {
			header("Location:../../index.php?sucposad");
			exit();
		}

	}

	private function checkEmpty(){
		$result;
		if (empty($this->position_name) || empty($this->position_descritpion)){
			$result = false;
		}else{
			$result = true;
		}
		return $result;
	}
	private function checkInput(){ // provere unetih podataka putem php funkcije preg_match;
		$result;
		$match = "/^[a-zA-Z]*$/";
		if (!preg_match($match,$this->position_name) && !preg_match($match,$this->position_descritpion)) {
			$result = false;
		}else{
			$result = true;
		}
		return $result;
	}
	private function inputInbase(){ // metoda provere da li postoji vec klijent na osnovu emaila i telefona;
		$result;
		if (!$this->checkPosition($this->position_name)) {
			$result = false;
		}else{
			$result = true;
		}
		return $result;
	}
}