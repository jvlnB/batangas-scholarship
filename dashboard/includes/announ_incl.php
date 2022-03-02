<?php
require_once 'db_admin.php';

function get_size($size) {
    $kb = $size / 1000000;
$format = number_format($kb, 2). 'MB';
return $format;
}

if (isset($_POST["submit"])){
    session_start();
    
    $title=$_POST['title'];
    $msg =$_POST['text_ann'];
    $path = '../Images/announce/';
    $size = get_size($_FILES['img']['size']);
    
    
        $file = $_FILES['img']['name'];
        $temp_file =  $_FILES['img']['tmp_name'];
        $newFilePath = $path.$_FILES['img']['name'];

        if($size < 8.0) {
            move_uploaded_file($temp_file, $newFilePath);
            // $sql = "INSERT INTO `announcement`(`title`, `message`, `img`) VALUES ($title, $msg, $file)";
            $sql = "UPDATE announcement SET `title`='$title', `message`= '$msg', `img`= '$file' WHERE id = '1'";
            $sql_run = mysqli_query($conn, $sql);
            if($sql_run) {
                $_SESSION['post']="Announcement Posted!";
                header("location: ../create_ann.php?posted");
            } else {
                echo("Error description: " . mysqli_error($conn));
               // header("location: ../create_ann.php?systemerror");
            }

    

}
}