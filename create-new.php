<?php
session_start();
?>

<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Password</title>
    <link rel="shortcut  icon" type="Image/png" href="Images/batangas logo.png">
    <link rel="stylesheet" href="reg.css">
    <link rel=""stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" ></script>
   </head>
<body>
  <div class="container">
        <div class="title">Change Password</div>
        <div class="content">
          <form action="incl/update-pass.php" method = "POST">
            <div class="user-details">
              <div class="input-box">
                <br>
                 <span class="details">New Password</span>
                <input type="text" name = "newPass" placeholder="Enter your new password" required>
              </div>
              <div class="input-box">
                <br><span class="details">Confirm Password</span>
                <input type="text" name = "newPassRpt" placeholder="Confirm your new password" required>
              </div>
              </div>
            <div class="button">
              <input type="submit" name = "update" value="Update">
            </div>
          </form>
        </div>
      </div>    
    </div>
  </div>

</body>
</html>
