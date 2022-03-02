<?php
session_start();
include 'eval_incl/auth.php';




?>

<!DOCTYPE html>
<html lang="en">
<head?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Evaluator </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="nav_bar_style.css">
</head>
<body>
<section id="nav-bar">
        <nav class="navbar navbar-expand-lg navbar-light navbar-fixed-top">
            <div class="container-fluid">
              <a class="navbar-brand" href="#"><img src="batangas logo.png"><p>BATANGAS PROVINCIAL CAPITOL<br>Scholarship Office</p></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="eval_home.php">HOME</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link evalButton" href="eval_eval.php">EVALUATION<span class="label label-pill label label-defaultt" style="border-radius:25px; position:absolute; top: 30px; right:18rem; background-color: red"></span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="https://mail.hostinger.com/?clearSession=true&_user=admin@him-batangas-scholarship.com">MESSAGES</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="eval_dash.php">LIST</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="eval_incl/evalLogout_incl.php">LOGOUT</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    </section>
</body>
</html>
