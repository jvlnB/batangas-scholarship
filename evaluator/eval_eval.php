<?php 
    include 'nav_bar.php';
    ?> 
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" ></script>
	<link rel="stylesheet" type="text/css" href="eval_eval1.css">
</head>
<body>
	<section class="py-5 my-5">
		<div class="container">
			<div class="outer">
      <div class="table-responsive">
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
      <thead>
<tr>
<th>NAME</th>
<th>Registration Form</th>
<th>Grades</th>
<th>Photocopy of ID</th>
<th>Evalution Form</th>
<th>Operation</th>
</tr>
</thead>
                    
</div>
 </div>
		</div>
    <?php

include 'db_user.php';

$area = $_SESSION['area'];

$sql = "SELECT userinfo.userID, userinfo.first_name, userinfo.middle_name, userinfo.last_name, userinfo.city, requirements.regFile_name, requirements.grFile_name, requirements.idFile_name, requirements.eval_form, requirements.status FROM userinfo INNER JOIN requirements ON userinfo.userID=requirements.userID WHERE city = '$area' AND status='' AND eval_form != '' AND regFile_name != '' AND grFile_name != '' AND idFile_name != ''";
if (mysqli_query($conn, $sql)) {
echo "";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
$count=1;
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) >= 1) {
// output data of each row
while($row = mysqli_fetch_assoc($result)) { $id = $row['userID']; ?>
<tbody>
<tr>
<td>
<?php 
$first = $row['first_name'];
$middle = $row['middle_name'];
$last = $row['last_name'];

$nameFull= $last.", ".$first." ".$middle;

echo $nameFull; ?>
</td>
<td>
<?php echo $row['regFile_name']; ?>
</td>
<td>
<?php echo $row['grFile_name']; ?>
</td>
<td>
<?php echo $row['idFile_name']; ?>
</td>
<td>
<?php echo $row['eval_form']; ?>
</td>
<td>
<a href="evaluation.php?evaluateid=<?php echo $id?>" class="eval-btn"> Evaluate</a>
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

	</section>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>
<?php 
    include 'footer.php';
    ?>