<?php
session_start(); 

      session_destroy();
      unset($_SESSION['admin_auth']);
      header("location: ../admin_login.php");

?>