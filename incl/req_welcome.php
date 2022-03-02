<?php

session_start();
include 'db_user.php';

$userID = $_SESSION['userID'];

$exist = "SELECT * FROM requirements where userID = $userID";
$exist_run = mysqli_query($conn, $exist);

$_SESSION['reqexist'] = $exist_run;
if (mysqli_num_rows($exist_run) > 0) { 
    header("location: ../profile_disp.php");
} else {
    header("location: ../profile_wo_req.php");
}