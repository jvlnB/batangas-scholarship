<?php

include 'head_in2.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Requirements</title>
	<link rel="shortcut  icon" type="Image/png" href="Images/batangas logo.png" width: 500%>
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
	<section class="py-5 my-5">
		<div class="container">
			<div class="bg-transparent shadow rounded-lg d-sm-flex">
            <div class="p-4">
                <i class="fa fa-chevron-left" aria-hidden="true" onclick="window.history.back();"> <a href="profile_disp.php" style="color:black;">back</a></i><br>
						<div class="tab-content p-4 p-md-5" id="v-pills-tabContent">
 <h3>Uploading of Requirements</h3>
						<div class="card">
							<div class="card-body" style="overflow: auto;">
						<p>Kindly submit all the needed requirements. Make sure that you already have your generated evaluation form from <a href="profile_disp.php"><b>Generate Evaluation Form Tab</b></a>.  </p>
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

													<input type="file" name = "regForm" id="file-docu"accept="application/pdf" required>
													<label for="file" id="upload"></label>
</td>
										</tr>
											<tr>
												<td>
													Certified True Copy of Grades
												</td>
												<td>
														<input type="file" name = "grades" id="file-docu" accept="application/pdf" required>
														<label for="file" id="upload"></label>
												</td>
										</tr>
												<tr>
												<td>
													Generated Evaluation Form
												</td>
												<td>
														<input type="file" name = "eval" id="file-docu" accept="application/pdf" required>
														<label for="file" id="upload"></label>
												</td>
										</tr>
										
										<tr>
											<td>
												Photocopy of Student I.D.
											</td>
											<td>
													<input type="file" name="studID" id="file-docu"accept="application/pdf" required>
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
					
</body>
</html>