<?php 
session_start();
include_once 'eval_incl/scripts.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="eval_login.css">
  <title>Login Form</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
         <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" ></script>
</head>
<body>
  <div class="login-wrapper">
    <form action="eval_incl/evalLogin_incl.php" class="form" method = "post">
      <img src="avatar.png" alt="">
      <h2>EVALUATOR</h2>
      <div class="input-group">
        <input type="username" name="username" id="username" required>
        <label for="loginEval">USERNAME</label>
      </div>
      <div class="input-group">
        <input type="password" name="loginPassword" id="loginPassword" required>
        <label for="loginPassword">PASSWORD</label>
      </div>
      <input type="submit" name = "submit" value="Login" class="submit-btn"> 
    </div>
  </div>
</body>
</html>