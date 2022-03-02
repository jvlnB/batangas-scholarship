<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="userlog3.css">
  <title>Login Form</title>
  <link rel="shortcut  icon" type="Image/png" href="Images/batangas logo.png" width: 500%>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
         <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" ></script>
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
</head>
<body>
  <div class="login-wrapper">
    <form action="incl/login_inc.php" class="form" method = "post">
      <a href="index.php"><img src="Images/avatar.png" alt=""></a>
               <?php
if(isset($_SESSION['status'])) {
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
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <svg class="bi flex-shrink-0 me-2" width="18" height="18" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
    <?php echo $_SESSION['status'];?>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
     <?php
      unset ($_SESSION['status']);
 }
  ?>
      <h2>Login</h2>
      <div class="input-group">
        <span id="check-email"></span>
        <input type="email" name="email" id="email" onInput = "checkEmail()" required>
        <label for="loginUser">Email Address</label>
      </div>
      <div class="input-group">
        <input type="password" name="loginPassword" id="loginPassword"  required>
        <label for="loginPassword">Password</label>
      </div>
<p>Did not receive your Verification Email? <a href="#resend-email" class="resend-email">Resend</a></p>
      <a href="#forgot-pw" class="forgot-pw">Forgot Password?</a>
      <input type="submit" name = "submit" value="Login" class="submit-btn"> 
      <div class="input-group">
        <a href="reg.php" class="submit-btn btn-reg" >Register</a>
        </div>
    </form>

    <div id="resend-email">
      <form action="incl/resend-code.php" method= "post" class="form">
        <a href="#" class="close">&times;</a>
        <h2>Resend Email Verification</h2>
        <div class="input-group">
          <input type="email" name="email" id="email" required>
          <label for="email">Email</label>
        </div>
        <input type="submit" name = "resend" value= "Resend" class="submit-btn">
      </form>
    </div>

    <div id="forgot-pw">
      <form action="incl/forgot-pass.php" method = "post" class="form">
        <a href="#" class="close">&times;</a>
        <h2>Reset Password</h2>
        <div class="input-group">
          <input type="email" name="email" id="email" required>
          <label for="email">Email</label>
        </div>
        <input type="submit" name = "forgot" value="Submit" class="submit-btn">
      </form>
    </div>
    
  </div>
</body>
</html>
