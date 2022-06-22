<?php

include_once $_SERVER['DOCUMENT_ROOT'].'/core/database/database.php';

class Users extends Database
{

	public function insetUser($name,$lname,$position,$gender){
		$stmt = $this->connection()->prepare("INSERT INTO users(firstname,lastname,position,type) VALUES(?,?,?,?)"); 
		if (!$stmt->execute(array($name,$lname,$position,$gender))) {
			$stmt = null;
			header("Loaction:../../index.php?error=stmtfailed");
			exit();
		}
			$resultCheck;
		if ($stmt->rowCount() > 0) {
			$stmt = $this->connection()->prepare("CALL Copynewuser");
			$stmt->execute();
			$stmt = $this->connection()->prepare("SELECT max(id) FROM users");
			$stmt->execute();
			$id = $stmt->fetch(PDO::FETCH_NUM);
			return $id;
		}else{
			return $resultCheck = false;
		}
	}

	public function getAllUsers(){
		$stmt = $this->connection()->prepare("SELECT * FROM users");
		$stmt->execute();
		$allintable = $stmt->fetchALL(PDO::FETCH_OBJ);
		return $allintable;
	}

	public function showUser($id){
		$stmt = $this->connection()->prepare("SELECT u.id,u.firstname,u.lastname,p.position,p.description,t.usertype FROM users u JOIN positions p ON u.position = p.id JOIN type t ON u.type = t.id WHERE u.id = ?");
		if (!$stmt->execute(array($id))) {
			$stmt = null;
			header("Location:");
		}
		$data = $stmt->fetch(PDO::FETCH_OBJ);
		return $data;
	}
} 
