<?php 

include_once 'core/clases/SingleUser.controler.php';

$id = $_GET['id'];

$userdata = new SingleUserControler($id);
$show = $userdata->getSingleUser();


