<?php
include('includes/header.php');
include 'includes/auth.php';

?>
   <link rel="stylesheet" href="homes.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
         <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" ></script>
</head>
<body>
  <div class="row-body">
    <!-------Slider------->
    <div id="slider">
      <div id="HeaderSlider" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#HeaderSlider" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#HeaderSlider" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#HeaderSlider" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="Images/FB.1.jpg" class="d-block w-100" alt="">
            <div class="carousel-caption d-none d-md-block">
              <h5></h5>
              <p></p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="Images/FB.2.jpg" class="d-block w-100" alt="">
            <div class="carousel-caption d-none d-md-block">
              <h5></h5>
              <p></p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="Images/FB.3.jpg" class="d-block w-100" alt="">
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
    
    require_once 'includes/db_admin.php';

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
                <h2 center><?php echo $row['title'];?></h2>
                <h5>DATE POSTED: <?php echo $row['date_posted'];?></h5>
                <div class="fakeimg" style="height:350px;">
                    <img src="Images/announce/<?php echo $pic; ?>"></img>
                </div><br>
                <h5><?php echo $row['message'];?></h5>
                </div>
            </div>
        </div>
    </div>
</div>
    <?php
include('includes/scripts.php');
?>
   