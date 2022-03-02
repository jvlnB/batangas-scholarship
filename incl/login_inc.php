<?php
session_start();
//include the connection
require_once 'db_user.php';


if (isset ($_POST["submit"]))
{

    if(!empty(trim($_POST['email'])) && !empty(trim($_POST['loginPassword']) ))
    {
        $email = mysqli_real_escape_string($conn, $_POST["email"]);
        $pass = mysqli_real_escape_string($conn, $_POST["loginPassword"]);

        $login_query = "SELECT * FROM accounts WHERE email ='$email' AND pass = '$pass' LIMIT 1";
        $login_query_run = mysqli_query($conn, $login_query);
        if (mysqli_num_rows($login_query_run) > 0) 
        {

          

            $row = mysqli_fetch_array ($login_query_run);
            //echo $row['verify_status'];

            $userID = $row['userID'];
            $_SESSION['userID'] = $userID;

            $emailAdd = $row['email'];
               $_SESSION['email'] = $emailAdd;


            if ($row['verify_status'] == 1) 
            {

                $_SESSION['authenticated'] = TRUE;
                $_SESSION ['auth-user'] = [
                    'email' => $row['email'],
                ];

                header("location: ../home.php?loggedin");
            }
            else
            {
                $_SESSION['status'] = "Email not verified. Please verify your email.";
                header("location: ../userlogin.php?notverified");
            }

        } 
        else 
        {
            $_SESSION['status'] = "Invalid email or password.";
            header('location: ../userlogin.php?invalid');
        }
    } 
    else
    {
        $_SESSION['status'] = "Something went wrong. Please try again later.";
        header("location: ../userlogin.php?systemerror");
    } 
}