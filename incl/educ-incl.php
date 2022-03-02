<?php
session_start();

require_once 'db_user.php';

if(isset($_POST["submitEduc"])) {

    $program = $_POST["program-name"];
   $year = $_POST["year-name"];
   $units = $_POST["units-num"];
   $expGrad = $_POST["year-num"];
   $chckbx = $_POST["grad"];
   $schName = $_POST["schName"];
   $schAdd = $_POST["schAdd"];
   $userID = $_SESSION['userID'];

   $update = "UPDATE userinfo SET program='$program',year_lvl='$year',units='$units',exp_grad='$expGrad',sch_name='$schName',sch_add='$schAdd' WHERE userID = $userID;";
   $update_run = mysqli_query($conn, $update);

   if (($update_run) == true )
   {

   header ("location: ../educ_display.php?updated");
}
   else if (($insert_qry_run) == false )
    {
        header ("location: ../educational.php?error");
   }
}
