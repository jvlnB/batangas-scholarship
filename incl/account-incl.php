<?php
session_start();

include 'db_user.php';
if (isset($_POST["save"])) {

    $userID =$_SESSION['userID'];
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
 
   /*$check_user = "SELECT * FROM userinfo WHERE userID = '$userID'";
   $check_user_run = mysqli_query($conn, $check_user);
   if(mysqli_num_rows($check_user_run)>0) {
   echo "Already filled the information needed";
   } else {

   $insert_qry = "INSERT INTO userinfo (userID, first_name, middle_name, last_name, suffix, bday, bplace, age, sex, num, 
   category, house_Add, brgy, city, province) VALUES ('$userID', '$firstName', '$middleName', '$lastName', '$suffix', '$bday', '$bplace', '$age', '$gender', '$num', '$category', '$houseAdd', '$brgy', '$city', '$province');";
   $insert_qry_run = mysqli_query($conn, $insert_qry);

   */
    $update = "UPDATE `userinfo` SET `first_name`='$firstName', `middle_name`='$middleName',`last_name`='$lastName',
    `suffix`='$suffix',`bday`='$bday',`bplace`='$bplace', `age`='$age',`sex`='$gender',`num`='$num',
    `category`='$category',`house_Add`='$houseAdd', `brgy`='$brgy',`city`='$city',
    `province`='$province', `date_updated`=now() WHERE userID = $userID";
       $update_run = mysqli_query($conn, $update);

   if (($update_run) == true )
   {
    //echo "Information Saved";
    header("location: ../personal_display.php?updated");
    }
   else if (($update_run) == false )
    {
        //echo "Something went wrong!";
        header("location: ../personal.php?error");
}
   }