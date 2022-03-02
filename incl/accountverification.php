<?php
session_start();
include 'db_user.php';

if (isset($_GET['token'])){
    $token = $_GET['token'];
    $verify_query = "SELECT verify_key, verify_status FROM accounts WHERE verify_key = '$token' LIMIT 1";
    $verify_query_run = mysqli_query($conn, $verify_query);

    if (mysqli_num_rows($verify_query_run) > 0){

        $row = mysqli_fetch_array($verify_query_run);
        //echo $row['verify_key'];
        if($row['verify_status'] == "0") {

            $clicked_token= $row['verify_key'];
            $update_query = "UPDATE accounts SET verify_status = '1' WHERE verify_key = '$clicked_token'LIMIT 1";
            $update_query_run = mysqli_query($conn, $update_query);

            if ($update_query_run) {
                $_SESSION['status'] = "Your account has been verified successfully!";
                $_SESSION['status_code'] = "success";
                header("location: ../userlogin.php?success");
                exit(0);

            } else {
                $_SESSION['status'] = "Verification Failed!";
                $_SESSION['status_code'] = "error";
                header("location: ../userlogin.php?error=verificationfailed");
                exit(0);
            }

        } else {
            $_SESSION['status'] = "Email already verified. Please Login";
            $_SESSION['status_code'] = "warning";
            header("location: ../userlogin.php?emailalreadyverified ");
        }

    }  else{
        $_SESSION['status'] = "This token does not exists";
        $_SESSION['status_code'] = "error";
        header("location: ../reg.php");
    }
} else {
    $_SESSION['status'] = "Not Allowed";
    $_SESSION['status_code'] = "error";
        header("location: ../reg.php");
}
