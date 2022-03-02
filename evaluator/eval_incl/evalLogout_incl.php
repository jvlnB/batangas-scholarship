<?php
session_start();

      session_destroy();
      unset($_SESSION['eval_auth']);
      header("location: ../eval_login.php");

?>