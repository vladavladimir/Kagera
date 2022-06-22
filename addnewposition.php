<?php 

include_once 'core/partials/msg.php';

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Kagera Users</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
<form method="post" action="core/partials/newpos.php">
	<center><h1 class="mt-5">Add New positon to the roster and add detailed description</h1>
	
	<div class="col-sm-6 mt-5">
  <label for="exampleFormControlInput1" class="form-label">New position</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" name="posname" placeholder="Administrator" required>
</div>
<div class="col-sm-6 mt-5">
  <label for="exampleFormControlTextarea1" class="form-label">Postion Description</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" name="posdesc" rows="3" required></textarea>

<button class="btn-primary col-sm-2 mt-5" type="submit" name="addpos">Add Position</button>
</div>
</center>
</form>
</body>
</html>