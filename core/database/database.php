<?php 

class Database
{
	
	private string $host = 'localhost';
	private string $username = 'root';
	private string $dbname = 'kagera';
	private string $password = '';

	public function connection()
	{
		try {

			$conn = new PDO("mysql:host=$this->host;dbname=$this->dbname",$this->username,$this->password);
		  // set the PDO error mode to exception
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		 
			return $conn;

		} catch(PDOException $e) {

			echo "Connection failed: " . $e->getMessage();
		}
	}
}