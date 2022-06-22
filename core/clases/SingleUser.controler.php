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
		$data =$this->showUser($this->id);// sendig id to method and returning rest true $data
		return $data;
	}
}