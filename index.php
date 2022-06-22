<?php 

include_once 'core/partials/allpos.php';
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
	<div class="row">
		<div class="col-sm-6">
		<div class="card">
		  <div class="card-body">
		  	<form method="post" action="core/partials/add.php" enctype="multipart/form-data">
		  		<h1 class="mb-5">Inser New User</h1>
		  		<div class="row g-3 align-items-center mb-5">
  					<div class="col-auto">
    					<label for="fname" class="col-form-label">First Name</label>
  					</div>
  					<div class="col-auto">
    					<input type="text" id="fname" name="fname" class="form-control" aria-describedby="HelperName" required>
  					</div>
  					<div class="col-auto">
    					<span id="HelperName" class="form-text">Use only alphabeth letters up to 2 min - 30 max.
    					</span>
  					</div>
				</div>
				<div class="row g-3 align-items-center mb-5">
  					<div class="col-auto">
    					<label for="lname" class="col-form-label">Last Name</label>
  					</div>
  					<div class="col-auto">
    					<input type="text" id="lname" name="lname" class="form-control" aria-describedby="HelperLName" required>
  					</div>
  					<div class="col-auto">
    					<span id="HelperLName" class="form-text">Use only alphabeth letters up to 2 min - 30 max.
    					</span>
  					</div>
				</div>
		  		<div class="form-check mb-5">
  					<input class="form-check-input" type="radio" name="gender" id="flexRadioDefault1" value="1" checked>
  					<label class="form-check-label" for="flexRadioDefault1">Male
  					</label>
				</div>
				<div class="form-check mb-5">
  					<input class="form-check-input" type="radio" name="gender" id="flexRadioDefault2" value="2">
  					<label class="form-check-label" for="flexRadioDefault2">Female
  					</label>
				</div>
				<select class="form-select mb-5 col-sm-6" name="positions" aria-label="Default select example" required>
  					<option selected>Open this select Position</option>
  					<?php foreach ($allpos as $res ):?>
  					<option value="<?=$res->id?>"><?=$res->position?></option>
  					<?php endforeach; ?>
  				</select>
  				<div class="mt-5 mb-5">
				<a class="btn-primary" href="addnewposition.php" style="padding: 10px;border-radius: 10px;text-decoration: none;">Add new position</a></div>
				<div class="row g-3 align-items-center mb-5">
  					<div class="col-auto">
    					<label for="addimg" class="col-form-label">Upload profile IMG</label>
  					</div>
  					<div class="col-auto">
    					<input type="file" id="addimg" class="form-control" name="addimg" aria-describedby="HelperImg">
  					</div>
  					<div class="col-auto">
    					<span id="HelperImg" class="form-text">Uploade your pic, JPG or PNG up to 5MB size.
    					</span>
  					</div>
				</div>
				<div class="row g-3 align-items-center mb-5">
  					<div class="col-auto">
    					<label for="addcv" class="col-form-label">Upload Your CV</label>
  					</div>
  					<div class="col-auto">
    					<input type="file" id="addcv" class="form-control" name="addcv" aria-describedby="HelperCV">
  					</div>
  					<div class="col-auto">
    					<span id="HelperCV" class="form-text">Use only PDF format.
    					</span>
  					</div>
  					
				</div>
				<button type="submit" class="btn btn-primary" type="submit" name="submit">Create new User</button>
		  	</form>
		  </div>
		</div>
		</div>

		<div class="col-sm-6">
			<h1>List of Users</h1>
			<?php
    			foreach ($allusers as $usr): 
    				$image='uploads/'.$usr->id.$usr->firstname.'.jpg';
    				$image1='uploads/'.$usr->id.$usr->firstname.'.jpeg';
    				$image2='uploads/'.$usr->id.$usr->firstname.'.png';
					?>
			<div class="card flex-row mt-2">
					<?php if(file_exists($image)){
							echo "<img src='".$image."' style='width:10vh;height:10vh;'>";
						}elseif (file_exists($image1)) {
							echo "<img src='".$image1."' style='width:10vh;height:10vh;'>";
						}elseif (file_exists($image2)) {
							echo "<img src='".$image."' style='width:10vh;height:10vh;'>";
						}
					 ?>
			  		<div class="card-body">
    				<h4 class="card-title h5 h4-sm">Name: <?=$usr->firstname?> | Lastname: <?=$usr->lastname?></h4>
    				<a href="singlepage.php?id=<?=$usr->id?>" class="btn-primary mt-2" style="padding: 10px; border-radius: 10px;">Open</a>
  				</div>
			</div>  
		<?php endforeach?>
		</div>
	</div>
	</div>
</div>
</body>
</html>