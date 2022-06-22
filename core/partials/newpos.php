<?php

include_once '../clases/AddNewPosition.controler.php';

if (isset($_POST['addpos'])) {

	$pos_name = htmlspecialchars($_POST['posname']); // fetch data from form
	$pos_desc = htmlspecialchars($_POST['posdesc']);

	$add_pos = new AddNewPositionControler($pos_name,$pos_desc); // send data do class
	$add_pos->insertPosition(); // call for insert methode
}