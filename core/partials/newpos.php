<?php

include_once '../clases/AddNewPosition.controler.php';

if (isset($_POST['addpos'])) {

	$pos_name = $_POST['posname'];
	$pos_desc = $_POST['posdesc'];

	$add_pos = new AddNewPositionControler($pos_name,$pos_desc);
	$add_pos->insertPosition();
}