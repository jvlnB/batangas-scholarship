<?php
session_start();
include 'incl/db_user.php';
include 'incl/authentication.php';

$user = $_SESSION['userID'];

$qry = "SELECT * FROM userinfo WHERE userID = '$user'";
$qry_run = mysqli_query($conn, $qry);

if (mysqli_num_rows($qry_run) > 0) {

	$row = mysqli_fetch_array ($qry_run);

	$profile = $row['profPic'];
	$name = $row['first_name'];
	$middle = $row['middle_name'];
	$lname = $row['last_name'];
	$suffix = $row['suffix'];
	$bday = $row['bday'];
	$bplace = $row['bplace'];
	$age = $row['age'];
	$sex = $row['sex'];
	$num = $row['num'];
	$cat = $row['category'];
	$house = $row['house_Add'];
	$brgy = $row['brgy'];
	$city = $row['city'];
	$province = $row['province'];

	$program = $row['program'];
	$yr = $row['year_lvl'];
	$units = $row['units'];
	$grad = $row['exp_grad'];
	$schName = $row['sch_name'];
	$schAdd = $row['sch_add'];

	$_SESSION['name'] = $name;
	$_SESSION['middle'] = $middle;
	$_SESSION['lname'] = $lname;
	$_SESSION['category'] = $cat;
	$_SESSION['year'] = $yr;
	$_SESSION['schName'] = $schName;
	$_SESSION['num'] = $num;

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Profile</title>
	<link rel="shortcut  icon" type="Image/png" href="Images/batangas logo.png">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" ></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="profile0.css">
</head>
<body>
         <section id="nav-bar">
        <nav class="navbar navbar-expand-lg navbar-light navbar-fixed-top">
            <div class="container-fluid">
              <a class="navbar-brand" href="#"><img src="Images/Bat_Logo.png"/></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="" href="home.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="procedure.php">Procedures</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="incl/req_welcome.php">Profile</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="incl/logout_incl.php">Logout</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    </section>
	<script>
$(document).ready(function(){
  $(this).scrollTop(0);
});
</script>
	<section class="py-5 my-5">
		<div class="container">
			<div class="bg-transparent shadow rounded-lg d-sm-flex">
				<div class=" profile profile-tab-nav border-right">
					<div class="p-4">
						<div class="img-circle text-center mb-3">
<?php
		$disprof = "SELECT profPic FROM userinfo WHERE userID = '$user' AND profPic != ''";
				$disprof_run = mysqli_query($conn, $disprof);

				if (mysqli_num_rows($disprof_run)) {

				echo "<img src='upload/profiles/$profile'>";
				
				}	else if (mysqli_num_rows($disprof_run) == '') {
				echo "<img src='Images/avatar.png'>";
				} 
				?> 					    <a href="change_profile.html">
						        <i class="fa fa-pencil"> </i>
						    </a>
						</div>
					</div>
			 
					

					<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
						<a class="nav-link active" id="account-tab" data-toggle="pill" href="#account" role="tab" aria-controls="account" aria-selected="true">
							Account
						</a>
						<a class="nav-link" id="educ-tab" data-toggle="pill" href="#educ" role="tab" aria-controls="educ" aria-selected="false">
							Educational Background
						</a>
						<a class="nav-link" id="evaluation-tab" data-toggle="pill" href="#evaluation" role="tab" aria-controls="evaluation" aria-selected="false">
							Generate Evaluation Form
						</a>
						<a class="nav-link" id="requirement-tab" data-toggle="pill" href="#requirement" role="tab" aria-controls="requirement" aria-selected="false">
							Uploading of Requirements
						</a>
						<a class="nav-link" id="inquiries-tab" data-toggle="pill" href="#inquiries" role="tab" aria-controls="inquiries" aria-selected="false">
							Inquiries
						</a>
					</div>
				</div>
			<!----Account----->
				<div class="tab-content p-4 p-md-5" id="v-pills-tabContent">
				
					<div class="tab-pane fade show active" id="account" role="tabpanel" aria-labelledby="account-tab">

                    <h3 class="mb-4">Account Information</h3>
						<div class="row">

							<div class="col-md-4">
								<div class="form-group">
								
								  	<label>First Name</label>
								  	<input type="text" name="name" id="first-name" value="<?php echo $name;?>" class="form-control form-control-sm" disabled>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
								  	<label>Middle Name</label>
								  	<input type="text" name="middle" id="middle-name" value="<?php echo $middle;?>" class="form-control form-control-sm" disabled >
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
								  	<label>Last Name</label>
								  	<input type="text" name="lname" id="last-name" value="<?php echo $lname;?>" class="form-control form-control-sm"  disabled>
								</div>
							</div>
							<div class="suffix col-md-2">
								<div class="form-group">
								  	<label>Name Suffix</label>
								  	<input type="text" name="suffix" id="suffix" value="<?php echo $suffix;?>" class="form-control form-control-sm"  disabled >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
								  	<label>Birth Date</label>
								  	<input type="text" name="bday" id="bday" class="form-control" value="<?php echo $bday;?>" disabled>
								</div>
							</div>
							<div class="col-md-5">
								<div class="form-group">
								  	<label>Birth Place</label>
								  	<input type="text" name="bplace" value="<?php echo $bplace;?>" id="bplace" class="form-control" disabled>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
								  	<label>Age</label>
								  	<input type="text" name="age" value="<?php echo $age;?>" id="age"class="form-control" disabled>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
								
								  	<label>Sex</label>
								  	<input type="text" name="name" id="first-name"value="<?php echo $sex;?>" class="form-control form-control-sm" disabled>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Phone Number</label>
								  	<input type="text" name="num" value="<?php echo $num;?>" class="form-control" disabled>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
								
								  	<label>Scholarship Category</label>
								  	<input type="text" name="name" id="first-name" value="<?php echo $cat;?>" class="form-control form-control-sm" disabled>
								</div>
							</div>
							
							<div class="col-md-12">
								<div class="form-group">
								  	<label>House Address</label>
								  	<input type="text" name="houseAdd" id="houseAdd" value="<?php echo $house;?>" class="form-control" disabled>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
								
								  	<label>Barangay</label>
								  	<input type="text" name="name" id="first-name" value="<?php echo $brgy;?>" class="form-control form-control-sm" disabled>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
								
								  	<label>City/ Municipality</label>
								  	<input type="text" name="name" id="first-name" value="<?php echo $city;?>" class="form-control form-control-sm" disabled>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
								  	<label>Province</label>
								  	<input type="text" name="province" id="province" class="form-control" value="<?php echo $province;?>" disabled>
								</div>
							</div>
						</div>
						<div class="input-group">
        <a href="personal.php" class="submit-btn btn-reg" >UPDATE</a>

						</div>
											</div>

			
					
					<!---- /Account ----->
					<!---- Educational BG----->
						<div class="tab-pane fade" id="educ" role="tabpanel" aria-labelledby="educ-tab">
                        <h3 class="mb-4">Educational Background</h3>
                <div class="row">
                <div class="col-md-9">
                <div class="form-group">
                <label>Program/Course/Strand</label>
                <input type="text" name="program-name" id="program-name"class="form-control form-control-sm" value="<?php echo $program;?>" disabled>
                </div>
                </div>
                <div class="col-md-3">
                <div class="form-group">
                <label>Year/ Grade Level</label>
                <input type="text" name="year-name" id="year-name" class="form-control form-control-sm" value="<?php echo $yr;?>" disabled>
                </div>
                </div>
                <div class="col-md-4">
                <div class="form-group">
                <br><label>Total No. of Units</label>
                <input type="text" name="units-num" id="units-num" class="form-control form-control-sm" value="<?php echo $units;?>" disabled>
                </div>
                </div>
                <div class="col-md-4">
                <div class="form-group">
                <br><label>Expected Year of Graduation</label>
                <input type="text" name="year-num" id="year-num" class="form-control form-control-sm" value="<?php echo $grad;?>" disabled >
                </div>
                </div>
                <div class="col-md-6">
                <div class="form-group">
                <label>School Name</label>
                <input type="text" name = "schName" class="form-control form-control-sm"  value="<?php echo $schName;?>" disabled>
                </div>
                </div>
                <div class="col-md-6">
                <div class="form-group">
                <label>School Address</label>
                <input type="text" name="schAdd" class="form-control form-control-sm" value="<?php echo $schAdd;?>" disabled >
                </div>
                </div>
                </div>
                <div>
                <div class="input-group">
        <a href="educational.php" class="submit-btn btn-reg" >UPDATE</a>
</div>
							</div>
</div>
					<!---- /Educational BG----->
					<!---- Requirements----->
					<div class="tab-pane fade" id="requirement" role="tabpanel" aria-labelledby="requirement-tab">
					    <h3>Uploading of Requirements</h3>
						<div class="card">
							<div class="card-body" style="overflow: auto;">
						<p>Kindly submit all the needed requirements. Make sure that you already have your generated evaluation form from <b>Generate Evaluation Form Tab</b>.  </p>
						<hr>
								<table class="table">
									<thead>
                                        <tr>
                                            <th width="50%">Requirement</th>
											<th>Submit</th>
                                        </tr>
										
                                    </thead>
									<tbody>
									<form action="incl/req_incl.php" method='post' enctype="multipart/form-data">

										<tr>
											<td>
												Certified True Copy of Registration Form/ Proof of Enrollment
											</td>
											<td>

													<input type="file" name = "regForm" id="file-docu"accept="application/pdf">
													<label for="file" id="upload"></label>
</td>
										</tr>
											<tr>
												<td>
													Certified True Copy of Grades
												</td>
												<td>
														<input type="file" name = "grades" id="file-docu" accept="application/pdf" >
														<label for="file" id="upload"></label>
												</td>
										</tr>
												<tr>
												<td>
													Generated Evaluation Form
												</td>
												<td>
														<input type="file" name = "eval" id="file-docu" accept="application/pdf" >
														<label for="file" id="upload"></label>
												</td>
										</tr>
										
										<tr>
											<td>
												Photocopy of Student I.D.
											</td>
											<td>
													<input type="file" name="studID" id="file-docu"accept="application/pdf">
													<label for="file" id="upload"></label>											
												</td>
												</tr>
									</tbody>
								
								</table>
								<button type="submit" name = "save">Save</button>
								</form>
							</div>
						</div>
					</div>
		<!-----Inquiries ----->			
					<div class="tab-pane fade" id="inquiries" role="tabpanel" aria-labelledby="inquiries-tab">

                    <?php

$email = $_SESSION['email'];
$userName =  $name . $middle . $lname;
?>

						<h3 class="mb-4">Inquiries</h3>
						<div class="card">
							<div class="card-body" style="overflow: auto;">
							     <?php
if(isset($_SESSION['statMes'])) {
  ?>
  <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
  </symbol>
  <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
  </symbol>
  <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
  </symbol>
</svg>
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <svg class="bi flex-shrink-0 me-2" width="18" height="18" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
    <?php echo $_SESSION['statMes'];?>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
     <?php
      unset ($_SESSION['statMes']);
 }
  ?>
									<div class="form-group">
										<label for="message">Questions/Inquiries</label><br>
                                        <form action="incl/inq_incl.php" id="form" method="post" name="form">
<input name="vname" placeholder="<?php echo "$userName "?>" type="text" value="<?php echo "$userName "?>" hidden>
<input name="vemail" placeholder="Your Email" type="text" value="<?php echo "$email "?>" hidden >
<input name="sub" placeholder="Subject" type="text" value="Question/ Inquiry" hidden>
										<textarea type="text" id="message" name="msg" cols="30" rows="10" placeholder="Type your text here..." required></textarea>
									</div>
									<button type="submit" name = "submit">
										Send
									</button>
								</form>
							</div>
						</div>
					</div>
		<!-----/Inquiries ----->	

		
		
		<!-----Evaluation Form ----->
					<div class="tab-pane fade" id="evaluation" role="tabpanel" aria-labelledby="evaluation-tab">
					<form action = "makepdf.php" method = "POST">
						<div class="card">
							<div class="card-body" style="overflow: auto;">
								<h3 class="mb-4">Generate Evaluation Form</h3>



		<!-----Grades ----->
							<p>
								Direction: 
							</p>
							<table class="table">
								<thead>
									<tr>
										<th width="50%">Subject</th>
										<th>Units</th>
										<th>Final Grade</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="title" data-col-title="Subject">
											<input type="text" class="sub" name="sub1" id="">
										</td>
										<td class="title" data-col-title="Units">
											<input type="text" name="un1" id="">
										</td>
										<td class="title" data-col-title="Final Grade">
											<input type="text" name="gr1" id="">
										</td>
									</tr>
									<tr>
										<td class="title" data-col-title="Subject">
											<input type="text" class="sub" name="sub2" id="">
										</td>
										<td class="title" data-col-title="Units" >
											<input type="text" name="un2" id="">
										</td>
										<td class="title" data-col-title="Final Grade">
											<input type="text" name="gr2" id="">
										</td>
									</tr>
									<tr>
										<td class="title" data-col-title="Subject">
											<input type="text" class="sub" name="sub3" id="">
										</td>
										<td class="title" data-col-title="Units">
											<input type="text" name="un3" id="">
										</td>
										<td class="title" data-col-title="Final Grade">
											<input type="text" name="gr3" id="">
										</td>
									</tr>
									<tr>
										<td class="title" data-col-title="Subject">
											<input type="text" class="sub" name="sub4" id="">
										</td>
										<td class="title" data-col-title="Units">
											<input type="text" name="un4" id="">
										</td>
										<td class="title" data-col-title="Final Grade">
											<input type="text" name="gr4" id="">
										</td>
									</tr>
									<tr>
										<td class="title" data-col-title="Subject">
											<input type="text" class="sub" name="sub5" id="">
										</td>
										<td class="title" data-col-title="Units">
											<input type="text" name="un5" id="">
										</td>
										<td class="title" data-col-title="Final Grade">
											<input type="text" name="gr5" id="">
										</td>
									</tr>
									<tr>
										<td class="title" data-col-title="Subject">
											<input type="text" class="sub" name="sub6" id="">
										</td>
										<td class="title" data-col-title="Units">
											<input type="text" name="un6" id="">
										</td>
										<td class="title" data-col-title="Final Grade">
											<input type="text" name="gr6" id="">
										</td>
									</tr>
									<tr>
										<td class="title" data-col-title="Subject">
											<input type="text" class="sub" name="sub7" id="">
										</td>
										<td class="title" data-col-title="Units">
											<input type="text" name="un7" id="">
										</td>
										<td class="title" data-col-title="Final Grade">
											<input type="text" name="gr7" id="">
										</td>
									</tr>
									<tr>
										<td class="title" data-col-title="Subject">
											<input type="text" class="sub"  name="sub8" id="">
										</td>
										<td class="title" data-col-title="Units">
											<input type="text" name="un8" id="">
										</td>
										<td class="title" data-col-title="Final Grade"> 
											<input type="text" name="gr8" id="">
										</td>
									</tr>
									<tr>
										<td class="title" data-col-title="Subject">
											<input type="text" class="sub" name="sub9" id="">
										</td>
										<td class="title" class="title" data-col-title="Units">
											<input type="text" name="un9" id="">
										</td>
										<td class="title" data-col-title="Final Grade">
											<input type="text" name="gr9" id="">
										</td>
									</tr>
									<tr>
										<td class="title" data-col-title="Subject">
											<input type="text" class="sub" name="sub10" id="">
										</td>
										<td class="title" data-col-title="Units">
											<input type="text" name="un10" id="">
										</td>
										<td class="title" data-col-title="Final Grade">
											<input type="text" name="gr10" id="">
										</td>
									</tr>
									<tr>
										<td class="title" data-col-title="Subject">
											<input type="text" class="sub" name="sub11" id="">
										</td>
										<td class="title" data-col-title="Units">
											<input type="text" name="un11" id="">
										</td>
										<td class="title" data-col-title="Final Grade">
											<input type="text" name="gr11" id="">
										</td>
									</tr>
									<tr>
										<td class="title" data-col-title="Subject">
											<input type="text" class="sub" name="sub12" id="">
										</td>
										<td class="title" data-col-title="Units">
											<input type="text" name="un12" id="">
										</td>
										<td class="title" data-col-title="Final Grade">
											<input type="text" name="gr12" id="">
										</td>
									</tr>
									<tr>
										<td>
											<h5 class="gen-ave">TOTAL/General Average:</h5>
										</td>
										<td><input type="text" name="total_units" id="" placeholder="Total No. of Units"> </td>
										<td><input type="text" name="gwa_gr" id=""placeholder="GWA"></td>
									</tr>
								</tbody>
							</table>

							<div class="reference">
									  <label>Name of Functionary:</label>
									  <input type="text" name="func"><br>
									  <label>Relation:</label>
									  <input type="text" name="rel"><br>
									  <label>Position:</label>
									  <input type="text" name="pos">
							</div>

						
					
				<!-- Grades End -->
								<div class="form-group row">
									<button type = "submit" name = "submit" target="_blank" class="btn btn-scholar btn-block mt-3">Generate Evaluation Form</button>
									</form>
								</div>
								</div>


		<!-----Evaluation Form ----->
				</div>
			</div>
		</div>
	</section>

	<!-- Main Footer -->
	<?php include'footer.php'; ?>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	</body>
</html>