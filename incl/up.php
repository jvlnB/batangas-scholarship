<?php
session_start();

require_once 'db_user.php';

function get_size($size) {
    $kb = $size / 1000000;
$format = number_format($kb, 2). 'MB';
return $format;
}
//echo get_size_reg($_FILES['regForm']['size']);
//echo get_size_grades($_FILES['grades']['size']);
//echo get_size_id($_FILES['studID']['size']);

if (isset($_POST["change"])){

	$path = '../upload/profiles/';
	$size = get_size($_FILES['image']['size']);
    $file1 = $_FILES['image']['name'];
	$temp_file1 =  $_FILES['image']['tmp_name'];
	$newFilePath = $path.$_FILES['image']['name'];
	$userID = $_SESSION['userID'];


	if($size < 2.0) {

								//add updated files to the folder
							move_uploaded_file($temp_file1, $newFilePath);
							$update ="UPDATE `userinfo` SET `profPic`='$file1' WHERE userID = $userID";
							$update_run = mysqli_query($conn, $update);
										if ($update_run == true) {
											header("location: ../incl/req_welcome.php?updated");
											exit();
										} else {
										 $_SESSION['status'] = "Something went wrong!";
                $_SESSION['status_code'] = "error";
                	header("location: ../profile_disp.php?error");
										}
									


	} else {
        echo "File too large";
    }

} else{
     $_SESSION['status'] = "Something went wrong!";
                $_SESSION['status_code'] = "error";
	header("location: ../requirements.php?systemerror");
	}




?>