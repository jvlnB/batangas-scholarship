<?php
      session_start();
 $reg=	$_SESSION['shreg'];
        ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?php echo $reg; ?></title>
    <link rel="short icon" type="Image/batangas logo.png">
  </head>
  <body>
    <div style="background-color: black;">
      <embed type="application/pdf" src="upload/requirements/<?php echo $reg; ?> " style = "width:100vw;height:100vh;">
    <?php

      ?>

    </div>

  </body>
</html>