<?php 

include_once 'core/clases/AddNewPosition.php';
include_once 'core/clases/Users.php';

$positons = new AddNewPosition();
$allpos = $positons->getAllPositions();

$users = new Users();
$allusers = $users->getAllUsers();