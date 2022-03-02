<?php

session_start();

require_once 'db_user.php';

if (isset ($_POST["change"]))
{
    $file = $_FILES['image']['name'];
    $regcode = $_SESSION['regcode'];

    $upload = "UPDATE 'userinformation' SET profPic = '$file'  WHERE 'Registration Code' = '$regcode';";
    $upload_run = mysqli_query($conn , $upload);

    if ($upload_run){
        $_SESSION['status'] = "Saved Successfully";
        $_SESSION['status_code'] = "success";
    move_uploaded_file($_FILES['image']['tmp_name'], "$file");
   
    }
 
}
else {
    header("location: ../profile_disp.php?systemerror");
    exit();
    
}
