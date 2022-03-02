<?php

include 'head_in2.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Batangas Scholarship</title>
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" ></script>
<link rel="stylesheet" type="text/css" href="profile0.css">
<link rel="short icon" type="Images/batangas logo.png">
</head>

<body>
<div class="tab-content p-4 p-md-5" id="v-pills-tabContent">

<form id="account_form" action ="incl/account-incl.php" method="POST">
<span id="result"></span>
<h3 class="mb-4">Account Information</h3>
<div class="row">

<div class="col-md-4">
<div class="form-group">

<label>First Name</label>
<input type="text" name="name" id="first-name"class="form-control form-control-sm" required>
</div>
</div>
<div class="col-md-3">
<div class="form-group">
<label>Middle Name</label>
<input type="text" name="middle" id="middle-name" class="form-control form-control-sm"  >
</div>
</div>
<div class="col-md-3">
<div class="form-group">
<label>Last Name</label>
<input type="text" name="lname" id="last-name" class="form-control form-control-sm"  required>
</div>
</div>
<div class="suffix col-md-2">
<div class="form-group">
<label>Name Suffix</label>
<input type="text" name="suffix" id="suffix" class="form-control form-control-sm"   >
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<label>Birth Date</label>
<input type="date" name="bday" id="bday" class="form-control" placeholder="mm/dd/yyyy" required>
</div>
</div>
<div class="col-md-5">
<div class="form-group">
<label>Birth Place</label>
<input type="text" name="bplace" id="bplace" class="form-control" required>
</div>
</div>
<div class="col-md-3">
<div class="form-group">
<label>Age</label>
<input type="text" name="age" id="age"class="form-control" required>
</div>
</div>
<div class="col-md-3">
<div class="form-group">
<span class="details">Sex</span>
<select name="sex" id="sex" class="form-control form-control-sm" required> 
<option ></option>
<option value="Male">Male</option>
<option value="Female">Female</option>
</select>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label>Phone Number</label>
<input type="text" name="num" class="form-control" >
</div>
</div>
<div class="scholar-details">
<div class="form-group">
<input type="radio" name="scholar" value = "BSEAP" id="dot-1" required>
<input type="radio" name="scholar" value = "BSEAP -SCHEME1" id="dot-2" required>
<input type="radio" name="scholar" value = "BSEAP -SCHEME2" id="dot-3" required>
<input type="radio" name="scholar" value = "PWD" id="dot-4" required> 
<span class="scholar-title">Scholar Categories</span>
<div class="category">
<label for="dot-1">
<span class="dot one"></span>
<span class="scholar" value = "BSEAP">BSEAP</span>
</label>
<label for="dot-2">
<span class="dot two"></span>
<span class="scholar" value = "BSEAP -SCHEME1">BPSP -SCHEME1</span>
</label>
<label for="dot-3">
<span class="dot three"></span>
<span class="scholar" value = "BSEAP -SCHEME2">BPSP - SCHEME2</span>
</label>
<label for="dot-4">
<span class="dot four"></span>
<span class="scholar" value = "PWD">PWD</span>
</label>
</div>
</div>
</div>

<div class="col-md-12">
<div class="form-group">
<label>House Address</label>
<input type="text" name="houseAdd" id="houseAdd" class="form-control" required>
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<span class="details">Barangay</span>
<select name="barangay" id="barangay"class="form-control form-control-sm" required> 
<option ></option>
<option value="uno">uno</option>
<option value="dos">dos</option>
</select>
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<span class="details">City/Municipality</span>
<select name="city" id="city"class="form-control form-control-sm" required> 
<option ></option>
<option value="4211">Agoncillo</option>
<option value="4205">Alitagtag</option>
<option value="4213">Balayan</option>
<option value="4219">Balete</option>
<option value="4200">Batangas City</option>
<option value="4201">Bauan</option>
<option value="4212">Calaca</option>
<option value="4215">Calatagan</option>
<option value="4222">Cuenca</option>
<option value="4230">Ibaan</option>
<option value="4221">Laurel</option>
<option value="4209">Lemery</option>
<option value="4216">Lian</option>
<option value="4217">Lipa City</option>
<option value="4229">Lobo</option>
<option value="4202">Mabini</option>
<option value="4233">Malvar</option>
<option value="4223">Mataasnakahoy</option>
<option value="4231">Nasugbu</option>
<option value="4224">Padre Garcia</option>
<option value="4225">Rosario</option>
<option value="4227">San Jose</option>
<option value="4226">San Juan</option>
<option value="4210">San Luis</option>
<option value="4207">San Nicolas</option>
<option value="4204">San Pascual</option>
<option value="4206">Santa Teresita</option>
<option value="4234">Sto. Tomas City</option>
<option value="4208">Taal</option>
<option value="4220">Talisay</option>
<option value="4232">Tanauan City</option>
<option value="4228">Taysan</option>
<option value="4203">Tingloy</option>
<option value="4214">Tuy</option>
</select>
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<label>Province</label>
<input type="text" name="province" id="province" class="form-control" value="Batangas" required>
</div>
</div>
</div>
<div>
<button id ="save" name = "save" class="btn btn-primary">Save</button>
</form>
</div>
</div>
</body>
</html>