<?php
session_start();
require 'db_user.php';

if(isset($_POST['eval'])) 
{
	$path = '../upload/requirements/';
    $userID = $_SESSION['userID'];
	$filename1 = $_FILES['evaluation_form']['name'];
	$file1 = $_FILES['evaluation_form']['tmp_name'];
	$newFilePath = $path.$_FILES['evaluation_form']['name'];

	move_uploaded_file($file1, $newFilePath);
	$queryAdd = "UPDATE requirements SET `eval_form`='$filename1' WHERE userID = $userID;";
	$sqlAdd = mysqli_query($conn, $queryAdd);

	if($sqlAdd){
		$_SESSION['status'] = 'Your files is successfully submitted.';
		header("location: ../profile_disp.php#?uploaded");
		
	} else {
		$_SESSION['status'] = $conn->error;
		header("location: ../profile_disp.php#?error");
	}
} else {
	$_SESSION['error'] = 'Fill Up Add Form First.';
	header("location: ../profile_disp.php#?fillup");
}
