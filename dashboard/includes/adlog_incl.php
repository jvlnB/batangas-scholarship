<?php
session_start();


//include the connection
require_once 'db_admin.php';


if (isset ($_POST["submit"]))
{

 if(!empty(trim($_POST['username'])) && !empty(trim($_POST['loginPassword']) ))
    {

        $email = mysqli_real_escape_string($conn, $_POST["username"]);
        $pass = mysqli_real_escape_string($conn, $_POST["loginPassword"]);

        $login_query = "SELECT * FROM `adminlogin` WHERE username ='$email' AND password = '$pass' LIMIT 1";
        $login_query_run = mysqli_query($conn, $login_query);
        if (mysqli_num_rows($login_query_run) > 0) 
        
        {


            $row = mysqli_fetch_array ($login_query_run);

            $admin = $row['Username'];
                $_SESSION['admin'] = $admin;

            $_SESSION['admin_auth'] = TRUE;
                $_SESSION ['auth-user'] = [
                    'username' => $row['Username'],
                ]; 

                header("location: ../dashboard.php?status=loggedin");
            }
            else
            {
                $_SESSION['status'] = "Invalid email or password!";
                $_SESSION['status_code'] = "warning";
                header("location: ../admin_login.php?status=wrongemailorpass");
            }

        }  else {
            $_SESSION['status'] = "All fields are required";
        $_SESSION['status_code'] = "warning";
        header("location: ../admin_login.php?status=allfieldsrequired");
        }

} 
        else 
        {
            $_SESSION['status'] = "System Error";
            $_SESSION['status_code'] = "error";
            header("location: ../admin_login.php?status=syserror");
        } 

      