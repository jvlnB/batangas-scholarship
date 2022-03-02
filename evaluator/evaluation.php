<?php 
    include 'nav_bar.php';
	include 'db_user.php';
	
	if(isset($_GET['evaluateid'])) {
		$id=$_GET['evaluateid'];
		$_SESSION['evaluateid']=$id;

		$qry = "SELECT * FROM userinfo WHERE userID = '$id' LIMIT 1";
		$qry_run = mysqli_query($conn, $qry);

		$row = mysqli_fetch_array ($qry_run);
	
		$profile = $row['profPic'];
		$name = $row['first_name'];
		$middle = $row['middle_name'];
		$lname = $row['last_name'];
		$num = $row['num'];

		$_SESSION['num'] = $num;

		$full_name= $lname. "," . " ".  $name." ".$middle;
		$_SESSION['name']= $name;


		$qry_req = "SELECT * FROM requirements WHERE userID = '$id' LIMIT 1";
		$qry_req_run = mysqli_query($conn, $qry_req);
	
		$row1 = mysqli_fetch_array ($qry_req_run);
		
		$reg = $row1['regFile_name'];
		$gr = $row1['grFile_name'];
		$idF = $row1['idFile_name'];
		$eval = $row1['eval_form'];
		
	}
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
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

	<link rel="stylesheet" type="text/css" href="eval.css">
</head>
<body>
	<section class="py-xxl-5 my-xxl-5">
		<div class="container">
			<div class="bg-transparent shadow rounded-lg d-sm-flex">
				<div class=" profile profile-tab-nav border-right">
					<div class="p-4">
						<div class="img-circle text-center mb-3">
						<?php
		$disprof = "SELECT profPic FROM userinfo WHERE userID = '$id' AND profPic != ''";
				$disprof_run = mysqli_query($conn, $disprof);

				if (mysqli_num_rows($disprof_run)) {

				echo "<img src='../upload/profiles/$profile'>";
				
				}	else if (mysqli_num_rows($disprof_run) == '') {
				echo "<img src='Images/avatar.png'>";
				} 
				?> 	
							<h5><?php echo $full_name ?></h5>
						</div>
					</div>
					<script src="photo.js"></script>
					<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
						<a class="nav-link active" id="reg-form-tab" data-toggle="pill" href="#reg-form" role="tab" aria-controls="reg-tab" aria-selected="true">
							Registration
						</a>
						<a class="nav-link" id="grade-tab" data-toggle="pill" href="#grade" role="tab" aria-controls="grade-tab" aria-selected="false">
							Grade
						</a>
						<a class="nav-link" id="ID-tab" data-toggle="pill" href="#ID" role="tab" aria-controls="ID" aria-selected="false">
							Student I.D
						</a>
						<a class="nav-link" id="summary-tab" data-toggle="pill" href="#summary" role="tab" aria-controls="summary" aria-selected="false">
							Summary
						</a>
					</div>
				</div>

<!--Scripts -->

				<script>

$(document).ready(function(){
  $(this).scrollTop(0);
});


				function reg(){
				$(document).ready(function(){
				$("#reg").click(function() {
				var dec = $(this).val(); 
				$.ajax({
				type: "POST",
				url: "validation.php",
				data: {dec:dec},
				success: function(response){
				$('#sp').html(response)
				}
				});
				});
				});

				$(document).ready(function(){
				$("#notreg").click(function() {
				var dec = $(this).val(); 
				$.ajax({
				type: "POST",
				url: "validation.php",
				data: {dec:dec},
				success: function(response){
				$('#sp').html(response)
				}
				});
				});
				});
				}

				function gr() {
				$(document).ready(function(){
				$("#gr").click(function() {
				var dec1 = $(this).val(); 
				$.ajax({
				type: "POST",
				url: "validation.php",
				data: {dec1:dec1},
				success: function(response){
				$('#sp1').html(response)
				}
				});
				});
				});

				$(document).ready(function(){
				$("#notgr").click(function() {
				var dec1 = $(this).val(); 
				$.ajax({
				type: "POST",
				url: "validation.php",
				data: {dec1:dec1},
				success: function(response){
				$('#sp1').html(response)
				}
				});
				});
				});
				}

				function photoid () {
				$(document).ready(function(){
				$("#idfile").click(function() {
				var dec2 = $(this).val(); 
				$.ajax({
				type: "POST",
				url: "validation.php",
				data: {dec2:dec2},
				success: function(response){
				$('#sp2').html(response)
				}
				});
				});
				});

				$(document).ready(function(){
				$("#notidfile").click(function() {
				var dec2 = $(this).val(); 
				$.ajax({
				type: "POST",
				url: "validation.php",
				data: {dec2:dec2},
				success: function(response){
				$('#sp2').html(response)
				}
				});
				});
				});
			}

				function final () {
				$(document).ready(function(){
				$("#apr").click(function() {
				var apr = $(this).val(); 
				$.ajax({
				type: "POST",
				url: "validation.php",
				data: {apr:apr},
				success: function(response){
				$('#sp3').html(response)
				}
				});
				});
				});

				$(document).ready(function(){
				$("#notapr").click(function() {
				var apr = $(this).val();
				var reason = $("#rea").val();
				$.ajax({
				type: "POST",
				url: "validation.php",
				data: {apr:apr,
				    reason: reason,
				},
				success: function(response){
				$('#sp3').html(response)
				}
				});
				});
				});
			}
			/*function fetch () {
			    $(document).ready(function(){
 				$.ajax({
				type: "GET",
				url: "fetch.php",
				dataType: html,
				success: function(response){
				$('#summary').html(response)
				}
				});
				});
			}*/
			


				</script>

<!----Registration Form---->
					<div class="tab-content p-4 p-md-5" id="v-pills-tabContent">
					<div class="tab-pane fade show active" id="reg-form" role="tabpanel" aria-labelledby="reg-form-tab">
					<h3 class="mb-4">Certified True Copy of Registration/Proof of Enrollment</h3>
					<div class="row">
					<div class="col-md-12" style="overflow: auto;">
					<div class="form-group">
			
				<?php

				$qry1 = "SELECT regFile_name FROM requirements WHERE userID = $id LIMIT 1";
				$qry_run1 = mysqli_query($conn, $qry1);

				if (mysqli_num_rows($qry_run1) > 0) {
				echo "<embed src='../upload/requirements/$reg' type='application/pdf' width='120%' height='600px'>
				";
				} else { 
				echo "no data";
				} 
				?> 

					</div>
					</div>

					<input type="submit" id="reg" class="btn btn-primary" onclick="reg()"  name="dec" value="Valid"></input>
					<input type="submit" id="notreg" class="btn btn-primary" onclick="reg()" name="dec" value="Not Valid"></input>

					<span id="sp"></span>

					</div>
					</div>
<!---- /Registration Form ----->


<!---- Grades and Eval---->
					<div class="tab-pane fade" id="grade" role="tabpanel" aria-labelledby="grade-tab">
					<h3 class="mb-4">Certified True Copy of Grades And Evaluation Form</h3>
					<div class="row">
					<div class="col-md-6" style="overflow: auto;">
					<div class="form-group">
					    
					    	<?php

				$qrygr = "SELECT grFile_name FROM requirements WHERE userID = $id LIMIT 1";
				$qrygr_run = mysqli_query($conn, $qrygr);

				if (mysqli_num_rows($qrygr_run) > 0) {
				echo "<embed src='../upload/requirements/$gr' type='application/pdf' width='120%' height='600px'>
				";
				} else { 
				echo "no data";
				} 
				?> 
					</div>
					</div>
					<div class="col-md-6" style="overflow: auto;">
					<div class="form-group">
					<div class="inner">
					    
					    <?php

				$qryEval = "SELECT eval_form FROM requirements WHERE userID = $id LIMIT 1";
				$qryEval_run = mysqli_query($conn, $qryEval);

				if (mysqli_num_rows($qryEval_run) > 0) {
				echo "<embed src='../upload/requirements/$eval' type='application/pdf' width='120%' height='600px'>
				";
				} else { 
				echo "no data";
				} 
				?> 
					</div>
					</div>
					</div>
					<input type="submit" id="gr" class="btn btn-primary"  onclick="gr()" name="dec1" value="Valid"></input>
					<input type="submit" id="notgr" class="btn btn-primary" onclick="gr()" name="dec1" value="Not Valid"></input>
					<span id="sp1"></span>
					</div>
					</div>
		<!---- /Grades and Eval----->



		<!---- Student ID----->
					<div class="tab-pane fade" id="ID" role="tabpanel" aria-labelledby="ID-tab">
					<h3 class="mb-4">Photocopy of Student I.D</h3>
					<div class="row">
					<div class="col-md-11" style="overflow: auto;">
					<div class="form-group">
					    
             <?php

				$qryid = "SELECT idFile_name FROM requirements WHERE userID = $id LIMIT 1";
				$qryid_run = mysqli_query($conn, $qryid);

				if (mysqli_num_rows($qryid_run) > 0) {
				echo "<embed src='../upload/requirements/$idF' type='application/pdf' width='120%' height='600px'>
				";
				} else { 
				echo "no data";
				} 
				?> 
					</div>
					</div>

					<input type="submit" id="idfile" class="btn btn-primary"  onclick="photoid()" name="dec2" value="Valid"></input>
					<input type="submit" id="notidfile" class="btn btn-primary" onclick="photoid()" name="dec2" value="Not Valid"></input>
					<span id="sp2"></span>
					</div>
					</div>
		<!-----/Student ID ----->
		

		<!-----Summary ----->
					<div class="tab-pane fade" id="summary" onload="fetch()" role="tabpanel" aria-labelledby="summary-tab">
					<h3 class="mb-4">Summary</h3>
					<div class="card">
					<div class="card-body" style="overflow: auto;">
					<table class="table">
					<thead>
					<tr>
					<th>Requirements</th>
					<th>Status</th>
					</tr>
					</thead>
					<tbody>
					<tr>
					<td>
					Certified True Copy of Registration Form/Proof of Enrollment
					</td>
					<td>
					    
					    
					<?php
					
						$disp = "SELECT regStatus FROM requirements WHERE userID = '$id'";
				$disp_run = mysqli_query($conn, $disp);

				if (mysqli_num_rows($disp_run) > 0) {
				$row_dispReg = mysqli_fetch_array ($disp_run);
				$dispReg= $row_dispReg['regStatus'];
				echo "<p style='color:green;'>$dispReg</p>";
				} else { 
				echo "<p style='color:orange;'>for validation</p>";
				} 
				?>  
					</td>
					</tr>
					<tr>
					<td>
					Certified True Copy of Grades/ Evaluation Form
					</td>
					<td>
					    
				<?php

				$disp1 = "SELECT gr_evalStatus FROM requirements WHERE userID = '$id'";
				$disp1_run = mysqli_query($conn, $disp1);

				if (mysqli_num_rows($disp1_run) == 1) {
				$row_dispGr = mysqli_fetch_array ($disp1_run);
				$dispGr= $row_dispGr['gr_evalStatus'];
				echo "<p style='color:green;'>$dispGr</p>";
				} else { 
				echo "<p style='color:orange;'>for validation</p>";
				} 
				?>  
					</td>
					</tr>
					<tr>
					<td>
					Photocopy of Student I.D.
					</td>
					<td>
				<?php

				$disp2 = "SELECT id_status FROM requirements WHERE userID = '$id'";
				$disp2_run = mysqli_query($conn, $disp2);

				if (mysqli_num_rows($disp2_run) ==1 ) {
				$row_dispID = mysqli_fetch_array ($disp2_run);
				$dispID= $row_dispID['id_status'];
				echo "<p style='color:green;'>$dispID</p>";
				} else { 
				echo "<p style='color:orange;'>for validation</p>";
				} 
				?> 
					</td>
					</tbody>
					</table>
					<input type="submit" id="apr" class="btn btn-primary" onclick="final()"  name="apr" value="APPROVED"></input>
					<input type="submit" id="notapr1" class="btn btn-primary" name="apr" value="DISAPPROVED"></input>
					
										<div class="text" style="display:none;">
										    <b>Reason for Disapproval:  </b><br>
					   <input placeholder="Type your reason here..."id="rea" name="reason"></input>
					    <input type="submit" id="notapr" class="btn btn-primary" onclick="final()" name="apr" value="DISAPPROVED"></input>
					</div>
					<script>
	document.getElementById('notapr1').addEventListener('click', function() {
document.querySelector('.text').style.display = 'flex';
document.getElementById('notapr1').style.display='none';
document.getElementById('apr').style.display='none';


});
</script>
					
					<span id="sp3"></span>	
					</div>
					</div>
		<!-----/Summary ----->
				</div>
			</div>
		</div>
	</section>

<?php 
    include 'footer.php';
    ?>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>