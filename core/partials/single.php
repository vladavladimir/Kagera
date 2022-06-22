<?php 

include_once 'core/clases/SingleUser.controler.php';

$id = $_GET['id']; // get id from URL

$userdata = new SingleUserControler($id); // send id to class
$show = $userdata->getSingleUser(); // got true methode and returned data bind in $show


