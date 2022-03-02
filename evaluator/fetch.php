<?php
session_start();
include 'db_user.php';
$id=$_SESSION['evaluateid'];

$qry= $conn->query("SELECT * from requirements where userID= '$id'");

while ($data = $qry->fetch_assoc()):
    //print_r($data);
    ?>
    <tr>
        <td<?php echo $data['regStatus'];?>></td>
        <td<?php echo $data['gr_evalStatus'];?>></td>
        <td<?php echo $data['id_status'];?>></td>

    </tr>
    <?php 
    endwhile;
    ?>