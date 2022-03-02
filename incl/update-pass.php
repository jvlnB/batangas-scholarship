<?php
session_start();

//include the connection
require_once 'db_user.php';


if (isset ($_POST["update"]))
{
    $pass = $_POST["newPass"];
    $newPassRpt = $_POST["newPassRpt"];
    $token = $_SESSION['token'];

    if ($pass !==  $newPassRpt) {
            $_SESSION['status'] = "Passwords doesn't match!";
         $_SESSION['status_code'] = "warning";
         header ("location: ../create-new.php?passworddontmatch");  
        } 
        else 
        {
            // update users password to the database
        $sql = "UPDATE accounts SET pass = '$pass'  WHERE verify_key = '$token';";
        $sql_query = mysqli_query($conn, $sql);
           
         if($sql_query) 
         {
            $_SESSION['status'] = "Password successfully updated!";
            $_SESSION['status_code'] = "success";
            header("location: ../userlogin.php?success");
            exit();             
        } 
        else
        {
            $_SESSION['status'] = "Update Failed!";
            $_SESSION['status_code'] = "error";
         header("location: ../create-new.php?error");
         exit();
    }
}
}