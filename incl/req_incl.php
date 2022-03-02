<?php
session_start();

require_once 'db_user.php';

function get_size_reg($size_reg) {
    $kb = $size_reg / 1000000;
$format = number_format($kb, 2). 'MB';
return $format;
}
function get_size_grades($size_grades) {
    $kb = $size_grades / 1000000;
$format = number_format($kb, 2). 'MB';
return $format;
}
function get_size_id($size_id) {
    $kb = $size_id / 1000000;
$format = number_format($kb, 2). 'MB';
return $format;
}
function get_size_eval($size_eval) {
    $kb = $size_id / 1000000;
$format = number_format($kb, 2). 'MB';
return $format;
}
//echo get_size_reg($_FILES['regForm']['size']);
//echo get_size_grades($_FILES['grades']['size']);
//echo get_size_id($_FILES['studID']['size']);

if (isset($_POST["save"])){

$path = '../upload/requirements/';
$size_reg = get_size_reg($_FILES['regForm']['size']);
$size_grades = get_size_grades($_FILES['grades']['size']);
$size_id = get_size_id($_FILES['studID']['size']);
$size_eval = get_size_eval($_FILES['eval']['size']);


 
    $file1 = $_FILES['regForm']['name'];
    $file2 = $_FILES['grades']['name'];
    $file3 = $_FILES['studID']['name'];
     $file4 = $_FILES['eval']['name'];


    $temp_file1 =  $_FILES['regForm']['tmp_name'];
    $temp_file2 =  $_FILES['grades']['tmp_name'];
    $temp_file3 =  $_FILES['studID']['tmp_name'];
    $temp_file4 =  $_FILES['eval']['tmp_name'];

    $newFilePath = $path.$_FILES['regForm']['name'];
   $newFilePath1 = $path.$_FILES['grades']['name'];
   $newFilePath2 = $path.$_FILES['studID']['name'];
   $newFilePath3 = $path.$_FILES['eval']['name'];

    $userID = $_SESSION['userID'];


if($size_reg < 3.0 && $size_grades < 3.0 && $size_id < 3.0 && $size_eval < 3.0) {

            move_uploaded_file($temp_file1, $newFilePath);
            move_uploaded_file($temp_file2, $newFilePath1);
            move_uploaded_file($temp_file3, $newFilePath2);
            move_uploaded_file($temp_file4, $newFilePath3);
            $sql = "INSERT INTO  requirements(`regFile_name`, `grFile_name`, `idFile_name`, `eval_form` , `userID`) VALUES ('$file1', '$file2', '$file3', '$file4', '$userID');";
            $sql_run = mysqli_query($conn, $sql);
                        if ($sql_run == true) {
                            if (!empty($file1) && !empty($file2) && !empty($file3) && !empty($file4)){
                                 $insertQuery = mysqli_query($conn, "INSERT INTO tbl_notif (eval_count) VALUES('$userID')");
                            }
                           
                            header("location: ../profile_disp.php?movedfiles");
                            exit();
                        } else {
                        echo ("Error desc: " . mysqli_error($conn));
                        exit();
                        }
     } else {
        echo "File too large";
    }
    } else{
header("location: ../profile_disp.php?systemerror");
}

?>
