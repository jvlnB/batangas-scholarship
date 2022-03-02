<?php 
    include 'nav_bar.php';
    ?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="eval_dash1.css">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
         <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" ></script>
</head>
<body>

<div class="table-responsive">
<table id="dataTable" class="table table-bordered" width="100%" cellspacing="0">
<thead>
<tr>
<th>ID</th>
<th>First Name</th>
<th>Middle Name</th>
<th>Last Name</th>
<th>City/ Municipality</th>
</tr>
</thead>
<tfoot>
<tr>
<th>ID</th>
<th>First Name</th>
<th>Middle Name</th>
<th>Last Name</th>
<th>City/ Municipality</th>
</tr>
</tfoot>
<?php

include 'db_user.php';

$area = $_SESSION['area'];

$sql = "SELECT * from userinfo where city = '$area'";
if (mysqli_query($conn, $sql)) {
echo "";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
$count=1;
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
// output data of each row
while($row = mysqli_fetch_assoc($result)) { ?>
<tbody>
<tr>
<th>
<?php echo $row['userID']; ?>
</th>
<td>
<?php echo $row['first_name']; ?>
</td>
<td>
<?php echo $row['middle_name']; ?>
</td>
<td>
<?php echo $row['last_name']; ?>
</td>
<td>
<?php echo $row['city']; ?>
</td>
</tr>
</tbody>
<?php
$count++;
}
} else {
echo '0 results';
}
?>
</table>
 <button type="submit" onclick="tableToExcel()">GENERATE/ PRINT</button><BR>

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="//cdn.rawgit.com/rainabba/jquery-table2excel/1.1.0/dist/jquery.table2excel.min.js"></script>

<script>
    function tableToExcel() {
        $("#dataTable").table2excel({
    exclude: ".excludeThisClass",
    name: "Worksheet Name",
    filename: "list.xls", // do include extension
    preserveColors: false // set to true if you want background colors and font colors preserved
});
}
</script>

</div>
<div>
    <?php
    include 'footer.php';
    ?>
    </div>
    
</body>
</html>