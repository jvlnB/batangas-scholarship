<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration Form</title>
    <link rel="shortcut  icon" type="Image/png" href="Images/batangas logo.png" width: 500%>
    <link rel="stylesheet" href="registration.css">
    <link rel=""stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" ></script>
   </head>
<body>
  <div class="container">
    <br><div class="title">Registration</div>
    <div class="content">
      <form action="incl/signup_incl.php" method="POST">
        <div class="user-details"> 
          <div class="input-box">
            <hr color="#FFEA61" style="width:311%; overflow: hidden;"><br>
            <h4>Personal Information</h4><br>
            <span class="details">Last Name</span>
            <input type="text" name ="lname" required>
          </div>
          <div class="input-box">
           <br><br><br> <span class="details">First Name</span>
            <input type="text" name ="name"  required>
          </div>
          <div class="input-box">
            <br><br><br><span class="details">Middle Name</span>
            <input type="text" name ="middle" >
          </div>
          <div class="input-box">
            <span class="details">Name Suffix</span>
            <input type="text" name ="suffix" placeholder="(Ex:Jr, Sr, III)">
          </div>
          <div class="input-box">
            <span class="details">Birth Date</span>
            <input type="date" name ="bday" placeholder="mm/dd/yy" required>
          </div>
          <div class="input-box">
            <span class="details">Birth Place</span>
            <input type="text" name ="bplace" placeholder="" required>
          </div>
          <div class="input-box">
            <span class="details">Age</span>
            <input type="text" name ="age" placeholder="" required>
          </div>
          <div class="input-box">
            <span class="details">Sex</span>
            <select name="sex">
                <option value=""></option>
                <option value="male">Male</option>
	              <option value="female">Female</option>
            </select>
          </div>
          <div class="input-box">
            <span class="details">Scholarship</span>
            <select name="scholar">
                <option value=""></option>
                <option value="BPEAP">BPEAP</option>
	              <option value="BPSP -SCHEME 1">BPSP -SCHEME 1</option>
                <option value="BPSP -SCHEME 2">BPSP -SCHEME 2</option>
                <option value="PWD">PWD</option>
            </select>
          </div>
          <div class="input-box">
            <span class="details">Contact Number</span>
            <input type="tel" name ="num" placeholder="Enter your number" required>
          </div>
        </div>
        <div class="user-details">
        <div class="input-box1">
          <h4>Address</h4>
          <span class="details">(House/Block/Lot No./Street/Subdivision/Village)</span>
          <input type="text" name ="houseAdd" required>
        </div>
      </div>
        <div class="user-details">
        <div class="input-box2">
          <span class="details">Barangay</span>
          <input type="text" name ="barangay" required>
        </div>
        <div class="input-box2">
          <span class="details">City/Municipality</span>
          <select name ="city"required>
									<option value=""></option>
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
        <div class="input-box2">
          <span class="details">Province</span>
          <input type="text" name ="province" required>
        </div>
        <br><br><br><hr color="#FFEA61" style="width:440%;">
      </div>
     <!---Educational Background--->
     <h4>Educational Background</h4>
        <div class="user-details">

        <div class="input-box3">
           <span class="details">Program/Course</span>
           <input type="text" name ="program" placeholder="" required>
        </div>
        <div class="input-box3">
          <span class="details">Year Level</span>
          <input type="text" name ="yrLvl" placeholder="" required>
        </div>
        <div class="input-box3">
          <span class="details">Total Number of Units</span>
          <input type="text" name ="units" placeholder="" required>
        </div>
        <div class="input-box3">
          <span class="details">Expected Year of Graduation</span>
          <input type="text" name ="expGrad" placeholder="" required>
        </div>
        <div class="input-box3">
          <span class="details">School Name</span>
          <input type="text" name ="schName" placeholder="" required>
        </div>
        <div class="input-box3">
          <span class="details">School Address</span>
          <input type="text" name ="schAdd" placeholder="" required>
        </div>
        </div>
        <div class="user-details">
          <hr color="#FFEA61" style="width:440%;">
        <div class="input-box">
          <br><h4>Account Information</h4>
          <br><span class="details">Email</span>
          <input type="email" name ="regEmail" placeholder="Enter your email" required>
        </div>
        <div class="input-box">
          <br><br><br><span class="details">Password</span>
          <input type="password" name ="regPwd" placeholder="Enter your password" required>
        </div>
        <div class="input-box">
          <br><br><br><span class="details">Confirm</span>
          <input type="password" name ="pwdRepeat" placeholder="Confirm Password" required>
        </div>
        <div class="input-box">
          <br><br><br><span class="details">Registration Code</span>
          <input type="text" name ="rcode" placeholder="Enter your Code" required>
        </div>
        </div>
        <div class="button">
          <input type="submit" name ="submit" value="Register">
        </div>
      </form>
    </div>
  </div>
</body>
</html>
<?php
include 'incl/scripts.php';
?>
