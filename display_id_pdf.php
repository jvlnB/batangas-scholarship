<?php
      session_start();

	$id= $_SESSION['shID'];
        ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?php echo $id; ?></title>
    <link rel="shortcut  icon" type="Image/png" href="Images/batangas logo.png">
  </head>
  <body>
    <div style="background-color: black;">
      <embed type="application/pdf" src="upload/requirements/<?php echo $id; ?> " style = "width:100vw;height:100vh;">
    <?php

      ?>

    </div>

  </body>
</html>