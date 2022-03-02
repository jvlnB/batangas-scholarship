<?php

include 'head_in2.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Educational Background</title>
	<link rel="shortcut  icon" type="Image/png" href="Images/batangas logo.png">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" ></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="profile.css">
</head>
<body>
</section>
	<section class="py-5 my-5">
		<div class="container">
			<div class="bg-transparent shadow rounded-lg d-sm-flex">
            <div class="p-4">
						


<div class="tab-content p-4 p-md-5" id="v-pills-tabContent">	
						<form id="educ_form" action = "incl/educ-incl.php" method = "POST">
						<span id="result"></span>
							<h3 class="mb-4">Educational Background</h3>
							<div class="row">
								<div class="col-md-9">
									<div class="form-group">
										  <label>Program/Course</label>
										  <input type="text" name="program-name" id="program-name"class="form-control form-control-sm" value="" >
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										  <label>Year Level</label>
										  <input type="text" name="year-name" id="year-name" class="form-control form-control-sm" value="" >
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										  <br><label>Total No. of Units</label>
										  <input type="text" name="units-num" id="units-num" class="form-control form-control-sm" value="" >
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										  <br><label>Expected Year of Graduation</label>
										  <input type="text" name="year-num" id="year-num" class="form-control form-control-sm" value=""  >
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										  <label>School Name</label>
										  <input type="text" name = "schName" class="form-control form-control-sm" >
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										  <label>School Address</label>
										  <input type="text" name="schAdd" class="form-control form-control-sm">
									</div>
								</div>
							</div>
							<div>
							<button class="btn btn-primary" id = "save" name = "submitEduc">Save</button>
</div>
							</div>
</form>
<!--

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
					$("#save").click( function() {
  $.post( $("#educ_form").attr("action"), 
          $("#educ_form :input").serializeArray(), 
          function(info){ $("#result").html(info); });
		  $('html, body').animate({ scrollTop: 0 }, 0); //scroll to top
		  clearInput();
        });
 $("#educ_form").submit( function() {
   return false;
 });
 function clearInput() {
    $("#educ_form :input").each( function() {
       $(this).val('');
    });
  }
 </script>
-->

</body>
</html>