<?php

include_once $_SERVER['DOCUMENT_ROOT'].'/core/database/database.php';

class AddNewPosition extends Database
{

	protected function checkPosition($position_name){ // Checking if position is allready in database;
		$stmt = $this->connection()->prepare("SELECT position FROM positions WHERE position = ? ");
		if (!$stmt->execute(array($position_name))) {
			$stmt = null;
			header("Loaction:../../addnewposition.php?error=stmtfailed");
			exit();
		}
			$resultCheck;
		if ($stmt->rowCount() > 0) {
			$resultCheck = false;
		}else{
			$resultCheck = true;
		}
		return $resultCheck;	
		$stmt = null;
	}

	protected function addPosition($position_name,$position_descritpion){ // adding new psotitin;
		$stmt = $this->connection()->prepare("INSERT INTO positions (position,description) VALUES (?, ?);");
		
		if (!$stmt->execute(array($position_name,$position_descritpion))) {
			$stmt = null;
			header("Loaction:../../addnewposition.php?error=stmtfailed");
			exit();
		}
		
		return $stmt = true;	
	}

	public function getAllPositions(){ // getting all positions as objects and returning it true $result;
			$stmt = $this->connection()->prepare("SELECT * FROM positions");
			$stmt->execute();
			$result = $stmt->fetchAll(PDO::FETCH_OBJ);
			return $result; 
		}

} 