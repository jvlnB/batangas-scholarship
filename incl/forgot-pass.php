<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require('../phpmailer/vendor/autoload.php');
function sendPass_update($name, $email, $token) {
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
        $mail->Subject = 'Forgot Password';
        $email_header =
            "<h3>Good day!</h3>";
        $email_message = " <a href='http://him-batangas-scholarship.com/create-new.php?token=$token'>Click Here</a> to update your password. 
        <br>If you did not request to change your password, please disregard tis e-mail.<br>"; 
        $email_footer = "<br><br>This is a system generated message. Please do not reply.";
        $email_template = $email_header . $email_message . $email_footer;
        $mail->Body = $email_template;
        $mail->send();
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}

require_once 'db_user.php';

if(isset($_POST['forgot']))
{
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $checkemail_query = "SELECT * FROM accounts WHERE email = '$email' LIMIT 1";
$checkquery_run = mysqli_query($conn, $checkemail_query);

    if (mysqli_num_rows($checkquery_run) >= 1) 
{
    $row = mysqli_fetch_array ($checkquery_run);
    $name = $row['usersName'];
   $token = $row['verify_key'];
   $_SESSION['token'] = $token;

        sendPass_update($name, $email, $token);
        $_SESSION['status'] = "An e-mail has been sent to $email.";
        $_SESSION['status_code'] = "success";
        header("location: ../userlogin.php");
  /*  }
    else
    {
        $_SESSION['status'] = "Email already verified. Please Login.";
        $_SESSION['status_code'] = "warning";
        header("location: ../login.php");
    }*/

}
else {
    $_SESSION['status'] = "Email is not registered. Please register now";
    $_SESSION['status_code'] = "warning";
    header ("location: ../reg.php");
    exit();
}

}
?>