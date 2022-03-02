<?php

session_start();

// Sending Inquiry//

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require('../phpmailer/vendor/autoload.php');
function send_inquiry($name, $email, $subj, $message) {
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
        $mail->setFrom('admin@him-batangas-scholarship.com', $name);
        $mail->addAddress('admin@him-batangas-scholarship.com');     //Add a recipient

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = $subj;
        $email_header = 'From: '. $email . "<br>" ;// Sender's Email
        $email_header .= 'Cc: '. $email . "<br><br>"; // Carbon copy to Sender
        $email_message = $message;
        $email_template = $email_header . $email_message;
        $mail->Body = $email_template;
        $mail->send();
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}


if(isset($_POST['submit'])){

$qryReq = $_SESSION['reqexist'];
$email = $_SESSION['email'];
$name =  $_SESSION['userID'];
$subj = $_POST['sub'];
$message = $_POST['msg'];

send_inquiry($name, $email, $subj, $message);
    $_SESSION['statMes'] = "Message Sent!";
    header("location: req_welcome.php");
}