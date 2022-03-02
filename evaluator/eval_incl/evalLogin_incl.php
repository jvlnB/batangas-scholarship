<?php
session_start();


//include the connection
require_once 'db_evaluators.php';


if (isset ($_POST["submit"]))
{
        $email = mysqli_real_escape_string($conn, $_POST["username"]);
        $pass = mysqli_real_escape_string($conn, $_POST["loginPassword"]);

        $login_query = "SELECT * FROM `evaluators_accs` WHERE username ='$email' AND password = '$pass' LIMIT 1";
        $login_query_run = mysqli_query($conn, $login_query);
        if (mysqli_num_rows($login_query_run) >= 1) 
        
        {

            $row = mysqli_fetch_array ($login_query_run);

            $area = $row['area'];
            $_SESSION['area'] = $area;

            $_SESSION['eval_auth'] = TRUE;
                $_SESSION ['auth-user'] = [
                    'email' => $row['email'],
                ];  
                header("location: ../eval_home.php?success");
            }
            else
            {
                $_SESSION['ms'] = "Invalid email or password!";
                $_SESSION['con'] = "warning";
                header("location: ../eval_login.php?wrongemailorpass");
            }
} 
        else 
        {
            $_SESSION['ms'] = "System Error";
            $_SESSION['con'] = "error";
            header("location: ../eval_login.php?syserror");
        } 

      