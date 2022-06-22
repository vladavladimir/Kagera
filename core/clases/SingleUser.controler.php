<?php 

include_once 'Users.php';


class SingleUserControler extends Users
{
	private $id;

	function __construct($id)
	{
		$this->id = $id;
	}

	public function getSingleUser(){
		$data =$this->showUser($this->id);
		return $data;
	}
}