<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require('../phpmailer/vendor/autoload.php');
function resendEmail_verify ($name, $email, $token) {
    $mail = new PHPMailer(true);
    try {
      //Server settings
        $mail->SMTPDebug = 0; //SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.hostinger.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'admin@him-batangas-scholarship.com';                     //SMTP username
        $mail->Password   = 'Psbbats21capitol';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS

        //Recipients
        $mail->setFrom('admin@him-batangas-scholarship.com', 'Batangas Capitol Scholarship');
        $mail->addAddress($email);     //Add a recipient

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Resent Email Verification for Batangas Capitol Scholarship Website Registration';
        $email_header =
            "<h3>Hi " . "<b>" . $name . "</b>" . ',</h3>';
        $email_message = "<br>You have successfully created your account.<br>
        <a href='http://him-batangas-scholarship.com/incl/accountverification.php?token=$token'>Click Here</a> to verify your account";
        $email_footer = "<br>This is a system generated message. Please do not reply.";
        $email_template = $email_header . $email_message . $email_footer;
        $mail->Body = $email_template;
        $mail->send();
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}

require_once 'db_user.php';

if(isset($_POST['resend']))
{
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $checkemail_query = "SELECT * FROM accounts WHERE email = '$email' LIMIT 1";
$checkquery_run = mysqli_query($conn, $checkemail_query);

    if (mysqli_num_rows($checkquery_run) > 0) 
{
    $row = mysqli_fetch_array ($checkquery_run);
    //echo $row['verify_status'];

    if ($row['verify_status'] == "0") 
    {
        $name = $row['usersName'];
        $email = $row['email'];
        $token = $row['verify_key'];

        resendEmail_verify ($name, $email, $token);
        $_SESSION['status'] = "Verification Email Link has been sent to your email address!";
        $_SESSION['status_code'] = "success";
        header("location: ../login.php");
    }
    else
    {
        $_SESSION['status'] = "Email already verified. Please Login.";
        $_SESSION['status_code'] = "warning";
        header("location: ../login.php");
    }

}
else {
    $_SESSION['status'] = "Email is not registered. Please register now";
    $_SESSION['status_code'] = "warning";
    header ("location: ../registrationform.php");
    exit();
}

}
?>