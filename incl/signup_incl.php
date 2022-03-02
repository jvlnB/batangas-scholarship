<?php
session_start();

// Email Verification //

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require('../phpmailer/vendor/autoload.php');
function sendEmail_verify ($firstName, $regEmail, $token) {
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
        $mail->addAddress($regEmail);     //Add a recipient

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Email Verification for Batangas Capitol Scholarship Website Registration';
        $email_header =
            "<h3>Hi " . "<b>" . $firstName . "</b>" . ',</h3>';
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

if (isset ($_POST['submit']))
{
   //PERSONAL INFO
   $firstName = $_POST["name"];
   $middleName = $_POST["middle"];
   $lastName = $_POST["lname"];
   $suffix = $_POST["suffix"];
   $bday = $_POST["bday"];
   $bplace = $_POST["bplace"];
   $age = $_POST["age"];
   $gender = $_POST["sex"];
   $num = $_POST["num"];
   $category = $_POST["scholar"];
   $houseAdd = $_POST["houseAdd"];
   $brgy = $_POST["barangay"];
   $city = $_POST["city"];
   $province = $_POST["province"];
   //EDUCATIONAL BG
   $program = $_POST["program"];
   $yr = $_POST["yrLvl"];
   $units = $_POST["units"];
   $expGrad = $_POST["expGrad"];
   $grad = $_POST["graduating"];
   $schName = $_POST["schName"];
   $schAdd = $_POST["schAdd"];
   //ACCOUNT DETAILS
   $regEmail = $_POST["regEmail"];
   $regPass = $_POST["regPwd"];
   $regPwdRepeat = $_POST["pwdRepeat"];
   $code = $_POST["rcode"];

$token = md5(time().$firstName);

if ($regPass != $regPwdRepeat) { //check if the password input matches the confim password input
    $_SESSION['status'] = "Passwords doesn't match!";
    $_SESSION['status_code'] = "warning";
    header ("location: ../reg.php?passworddontmatch");  
    exit();
}
else 
{
$checkreg = "SELECT * FROM regcodes WHERE code = '$code'";
$checkreg_run = mysqli_query($conn, $checkreg);

    if (mysqli_num_rows($checkreg_run) <=0) {
          $_SESSION['status'] = "Code does not exist!";
    $_SESSION['status_code'] = "error";
        header ("location: ../reg.php?invalidcode");
    } else {
    
        $check_email_query = "SELECT * FROM accounts WHERE email = '$regEmail'";
        $check_query_run = mysqli_query($conn, $check_email_query);
            if (mysqli_num_rows($check_query_run) > 0) { //check if email already exists
            $_SESSION['status'] = "Email already exists";
            $_SESSION['status_code'] = "warning";
            header ("location: ../reg.php?emailalreadyexists");
            exit();
    }
    else {
        //insert account details to 'accounts' table in the database
    $accounts = "INSERT INTO accounts (email, pass, code, verify_key) VALUES ('$regEmail', '$regPass', '$code', '$token');";
    $accounts_qry = mysqli_query($conn, $accounts);

    if ($accounts_qry) { 
        //get userid from accounts
        $query = "SELECT * FROM accounts WHERE email ='$regEmail'";
        $query_run = mysqli_query($conn, $query);

        if (mysqli_num_rows($query_run) >=1 ) {
            $row = mysqli_fetch_array ($query_run);
            $userID = $row['userID'];
            $_SESSION['userid'] = $userID;
        }
            //insert user information to 'userinfo' table in the database
            $insertInfo = "INSERT INTO `userinfo`(`userID`, `first_name`, `middle_name`, `last_name`, `suffix`, `bday`, `bplace`, `age`,
            `sex`, `num`, `category`, `house_Add`, `brgy`, `city`, `province`, `program`, `year_lvl`, `units`,
             `exp_grad`, `graduating`, `sch_name`, `sch_add`) VALUES ('$userID', '$firstName', '$middleName', '$lastName', '$suffix', '$bday',
             '$bplace', '$age', '$gender', '$num', '$category', '$houseAdd', '$brgy', '$city', '$province', '$program', '$yr', '$units', '$expGrad', '$grad', '$schName', '$schAdd');";
            $insertInfo_qry = mysqli_query($conn, $insertInfo);

            if ($insertInfo_qry) {

                sendEmail_verify($firstName, $regEmail, $token); //send verification email

                $_SESSION['status'] = "Registered! Please check your email for verification";
                $_SESSION['status_code'] = "success";
                header("location: ../userlogin.php?registered");
                exit();
            } else {
                $conn -> error;
            }          
    } //closing if statement for getting userid
    else {
        $conn -> error;
    }
    }// closing else if email is available

}// closing else statement if the pass and confirm pass matched

}
}