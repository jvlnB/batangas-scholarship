<?php 
session_start();
include 'incl/authentication.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="navbar_index0.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
    
     <!----NavigationBar---->
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
</body>
</html>