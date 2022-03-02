<?php
session_start();
include('db_user.php');

if(isset($_POST['dec'])){
    $dec=$_POST['dec'];
    $id = $_SESSION['evaluateid'];

 $sql = "UPDATE `requirements` SET `regStatus`= '$dec' WHERE `userID`= '$id'";
 if (mysqli_query($conn, $sql)) {
    echo "<span style='color: green'>Validated!</span>";
} else {
    echo "<span style='color: red'>Some error in running the database query.</span>";
}
}

if(isset($_POST['dec1'])){
    $dec1=$_POST['dec1'];
    $id = $_SESSION['evaluateid'];

 $sql1 = "UPDATE `requirements` SET `gr_evalStatus`= '$dec1' WHERE `userID`= '$id'";
 if (mysqli_query($conn, $sql1)) {
    echo "<span style='color: green'>Validated!</span>";
} else {
    echo "<span style='color: red'>Some error in running the database query.</span>";
}
}

if(isset($_POST['dec2'])){
    $dec2=$_POST['dec2'];
    $id = $_SESSION['evaluateid'];

 $sql2 = "UPDATE `requirements` SET `id_status`= '$dec2' WHERE `userID`= '$id'";
 if (mysqli_query($conn, $sql2)) {
    echo "<span style='color: green'>Validated!</span>";
} else {
    echo "<span style='color: red'>Some error in running the database query.</span>";
}
}

if(isset($_POST['apr'])){
    $apr=$_POST['apr'];
    $rea=$_POST['reason'];
    $id = $_SESSION['evaluateid'];
    $_SESSION['res']=$apr;
    $_SESSION['reason'] = $rea;

 $sql3 = "UPDATE `requirements` SET `status`= '$apr', `dis_reason` = '$rea' WHERE `userID`= '$id'";
 if (mysqli_query($conn, $sql3)) {

    echo "<span style='color: green'><br>$apr!<br></span>";
    include 'itexmo.php';
} else {
    echo "<span style='color: red'>Some error in running the database query.</span>";
}
}

