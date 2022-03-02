<?php
if (!isset($_SESSION['authenticated']))
{
    $_SESSION['status']= "Please Login to Continue!";
    header("location: ./userlogin.php");
    exit(0);
}

?>
