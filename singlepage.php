<?php 

include_once 'core/partials/single.php';

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
<body><center>
	<div class="card mt-5" style="width: 48rem; height: 100vh">

		<?php 
		$image='uploads/'.$show->id.$show->firstname.'.jpg';  
    $image1='uploads/'.$show->id.$show->firstname.'.jpeg';
    $image2='uploads/'.$show->id.$show->firstname.'.png';
    $cv = 'uploadscv/'.$show->id.$show->firstname.'.pdf';
    if(file_exists($image)){
							echo "<img src='".$image."'class='card-img-top' style='width: 48rem; height: 38rem'>";//used to check extesion adn if file matc show it
						}elseif (file_exists($image1)) {
							echo "<img src='".$image1."'class='card-img-top' style='width: 48rem; height: 38rem'>";
						}elseif (file_exists($image2)) {
							echo "<img src='".$image."'class='card-img-top' style='width: 48rem; height: 38rem'>";
						}

		 ?>
  
  <div class="card-body">
  	<h2>Name: <?=$show->firstname?> | Lastname: <?=$show->lastname?></h2>
  	<p class="card-text">Gender : <?=$show->usertype?></p>
    <p class="card-text">Position : <?=$show->position?></p>
    <p class="card-text">Description : <?=$show->description?></p>
    <p>CV</p>
    <iframe src="<?=$cv;?>" width="100%" height="150%">
  </div>
</div></center>
</body>
</html>