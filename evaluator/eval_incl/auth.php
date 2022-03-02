<?php
if (!isset($_SESSION['eval_auth']))
{
    $_SESSION['status']= "Please Login to Continue!";
    header("location: ./eval_login.php");
    exit(0);
}

?>