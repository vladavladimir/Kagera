<?php

include_once $_SERVER['DOCUMENT_ROOT'].'/core/database/database.php';

class Users extends Database
{

	public function insetUser($name,$lname,$position,$gender){ // getting data for insert 
		$stmt = $this->connection()->prepare("INSERT INTO users(firstname,lastname,position,type) VALUES(?,?,?,?)"); // preparing sql query
		if (!$stmt->execute(array($name,$lname,$position,$gender))) { // adding data adn executing
			$stmt = null;
			header("Loaction:../../index.php?error=stmtfailed"); // if something is wrong redirect with msg
			exit();
		}
			$resultCheck;
		if ($stmt->rowCount() > 0) { // checking if there is a new entery
			$stmt = $this->connection()->prepare("CALL Copynewuser"); // call for sql procedure to copy firstname and lastname to table partners
			$stmt->execute();
			$stmt = $this->connection()->prepare("SELECT max(id) FROM users");// preparing sql query
			$stmt->execute();
			$id = $stmt->fetch(PDO::FETCH_NUM); // fetching las inser id and returning it
			return $id;
		}else{
			return $resultCheck = false; // return false if something went wrong
		}
	}

	public function getAllUsers(){
		$stmt = $this->connection()->prepare("SELECT * FROM users"); // preparing sql query
		$stmt->execute(); // exexuting query
		$allintable = $stmt->fetchALL(PDO::FETCH_OBJ); // fetchimg all as an object binding and returnint treu $alllintabele
		return $allintable;
	}

	public function showUser($id){ // receiving id
		$stmt = $this->connection()->prepare("SELECT u.id,u.firstname,u.lastname,p.position,p.description,t.usertype FROM users u JOIN positions p ON u.position = p.id JOIN type t ON u.type = t.id WHERE u.id = ?"); // joining 3 tables to get all the data
		if (!$stmt->execute(array($id))) { // exexuting sql query
			$stmt = null;
			header("Location:");
		}
		$data = $stmt->fetch(PDO::FETCH_OBJ); // fetch data as an object adn add it to $data and then return it
		return $data;
	}
} 
