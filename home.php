<?php 
session_start();
include 'incl/authentication.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Batangas Scholarship Program</title>
    <link rel="icon" href="batangas_logo.ico">
    <link rel="stylesheet" href="homes 24.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
         <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" ></script>
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
    <div class="cover">
    <!-------Slider------->
    <div id="slider">
      <div id="HeaderSlider" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#HeaderSlider" data-bs-slide-to="0" class="active" aria-current="false" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#HeaderSlider" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#HeaderSlider" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="Images/FB.2.jpg" class="d-block w-100" height="600" id="image" alt="">
            <div class="carousel-caption d-none d-md-block">
              <h5></h5>
              <p></p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="Images/FB.1.jpg" class="d-block w-100" height="600"id="image" alt="">
            <div class="carousel-caption d-none d-md-block">
              <h5></h5>
              <p></p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="Images/FB.3.jpg" class="d-block w-100" height="600"  id="image" alt="">
            <div class="carousel-caption d-none d-md-block">
              <h5></h5>
              <p></p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#HeaderSlider" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#HeaderSlider" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    </div>
    
    <?php
    
    require_once 'dashboard/includes/db_admin.php';

		$sql = mysqli_query($conn, "SELECT * FROM announcement;");
					$row = mysqli_fetch_array ($sql); 
					$pic = $row['img'];
					?>
    
<div class="con">
    <div class="header">
        <h2>Announcement</h2>
    </div>
    <div class="row">
        <div class="leftcolumn">
            <div class="card">
                <h2><?php echo $row['title'];?></h2>
                <h5>DATE POSTED: <?php echo $row['date_posted'];?></h5>
                <div class="fakeimg" style="height:350px;">
                    <img src="dashboard/Images/announce/<?php echo $pic; ?>"></img>
                </div><br>
                <h5><?php echo $row['message'];?></h5>
                </div>
            </div>
        </div>
    </div>
</div>
    <?php
    include 'footer.php'; ?>
</body>
</html>