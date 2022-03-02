<?php
if (!isset($_SESSION['admin_auth']))
{
    $_SESSION['status']= "Please Login to Continue!";
    header("location: admin_login.php");
    exit(0);
}

?>
