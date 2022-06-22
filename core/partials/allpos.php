<?php 

include_once 'core/clases/AddNewPosition.php';
include_once 'core/clases/Users.php';

$positons = new AddNewPosition(); // callinf calls
$allpos = $positons->getAllPositions(); // geting return data from method and binding it to the $allpos

$users = new Users(); // callinf calls
$allusers = $users->getAllUsers();// geting return data from method and binding it to the $alluser