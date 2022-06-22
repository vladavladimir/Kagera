<?php 

include_once '../clases/SavingPic.controler.php'; 
include_once '../clases/Users.controler.php';

if (isset($_POST['submit']) && isset($_FILES['addimg']) && isset($_FILES['addcv'])) { // once form button is prest activate
	// getting info from index form
	$name = htmlspecialchars($_POST['fname']);
	$lname = htmlspecialchars($_POST['lname']);
	$gender = $_POST['gender'];
	$position = $_POST['positions'];
	//getting info on pic
	$img_name = $_FILES['addimg']['name'];
	$img_type = $_FILES['addimg']['type'];
	$img_size = $_FILES['addimg']['size'];
	$img_error = $_FILES['addimg']['error'];
	$img_temp_path = $_FILES['addimg']['tmp_name'];
	//getting info on CV
	$cv_name = $_FILES['addcv']['name'];
	$cv_type = $_FILES['addcv']['type'];
	$cv_size = $_FILES['addcv']['size'];
	$cv_error = $_FILES['addcv']['error'];
	$cv_temp_path = $_FILES['addcv']['tmp_name'];

$addnewu = new UsersControler($name,$lname,$position,$gender); // sending data to class
$result = $addnewu->InserNewUser(); // getting results and binding it to $result
if ($img_error === 0) { // check if there is a pic and no err
		if ($img_size > 5000) { // chceking that size is no more then 5mb
			$lastid = $result[0];// last id
			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION); // get info on img
			$img_ex_lc = strtolower($img_ex); // lowercase all info
			$allowed_exs = array("jpg","jpeg","png"); // alowed extesions
				if (in_array($img_ex_lc,$allowed_exs)) {
					$new_img_name = $lastid.$name.'.'.$img_ex_lc; // adding new name to the pic
					$img_upload_path = '../../uploads/'.$new_img_name; // seting path to the folder where the pic is stored
					move_uploaded_file($img_temp_path, $img_upload_path); // moving from tmp to designated folder loc
					if ($cv_error === 0) { // check if there is a cv and no err
						if ($cv_size > 30000) { // chceking that size is no more then 30mb
						$cv_ex = pathinfo($cv_name, PATHINFO_EXTENSION); // get info on cv
						$cv_ex_lc = strtolower($cv_ex); // lowercase all info
						$allowed_exs_cv = array("pdf"); // alowed extesions
						if (in_array($cv_ex_lc,$allowed_exs_cv)) {
							$new_cv_name = $lastid.$name.'.'.$cv_ex_lc; // adding new name to the cv
							$cv_upload_path = '../../uploadscv/'.$new_cv_name; // seting path to the folder where the cv is stored
							move_uploaded_file($cv_temp_path, $cv_upload_path); // moving from tmp to designated folder loc
							} else{
							header("Location:../../index.php?errextcv");// wrong extenstion CV redirecr with a msg	
							}
						}else{
						header("Location: ../../index.php?errsizecv");// if size to big redirect with a msg
						exit();
						}
					}else{
					header("Location: ../../index.php?errwrongcv"); // no file or something went wront redirect witha msg
					exit();
					}
				} else{
					header("Location:../../index.php?errext");// wrong extenstion redirecr with a msg
					exit();	
				}
		}else{
			header("Location: ../../index.php?errsize");// if size to big redirect with a msg
			exit();
		}
	}else{
		header("Location: ../../index.php?errwrong"); // no file or something went wront redirect witha msg
		exit();
	}
if ($result !== null) {
	header("Location: ../../index.php?sucinsert");
	exit();
}
}else{
	header("Loaction: ../../index.php?errform"); // form did not went true\
	exit();
}

