<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="login2.css">
  <title>Login Form</title>
  <link rel="shortcut  icon" type="Image/png" href="Images/batangas logo.png">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
         <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" ></script>
 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
</head>
  </head>
  <body>
      <!----NavigationBar---->
      <?php include 'isapanghead.php'; ?>
      
   <!---LOGIN FORM--->
    <div class="container">
      <div class="wrapper">
        <div class="title"><span>Login Form</span></div>
        <form action="incl/login_inc.php" class="form" method = "post">
          <div class="row">
            <i class="fas fa-user"></i>
            <input type="text" name="email" placeholder="Email or Phone" required>
          </div>
          <div class="row">
            <i class="fas fa-lock"></i>
            <input type="password" name="loginPassword" placeholder="Password" required>
          </div>
          <p>Did not receive your Verification Email? <a href="#resend-email" class="resend-email">Resend</a></p>
          <div class="pass"><a href="#forgot-pw">Forgot password?</a></div>
          <div class="row button">
            <input type="submit" name="submit" value="Login">
          </div>
          <div class="signup-link"> <a href="reg.php">Register</a></div>
        </form>

        <div id="resend-email">
          <form action="incl/resend-code.php" method= "post" class="form">
            <a href="#" class="close">&times;</a>
            <h2>Resend Email Verification</h2>
            <div class="row">
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
            <div class="row">
              <input type="email" name="email" id="email" required>
              <label for="email">Email</label>
            </div>
            <input type="submit" name = "forgot" value="Submit" class="submit-btn">
          </form>
      </div>
    </div>
    <?php
    include 'footer.php';    ?>
  </body>
</html>