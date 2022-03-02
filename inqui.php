<?php
include 'head_in2.php';

$email = $_SESSION['email'];
$userName =  $_SESSION['user'];
?>

<!DOCTYPE html>
<html lang="en">
<he>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="shortcut  icon" type="Image/png" href="Images/batangas logo.png">
    <link rel="stylesheet" href="inqui.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
<!-- Body Starts Here -->
<body>
<div class="container">
<!-- Feedback Form Starts Here -->
<div id="feedback">
<!-- Heading Of The Form -->
<div class="head">
<h3>Contact Us!</h3>
<p>Send your inquiries here.</p>
</div>
<br>
<!-- Contact us Form -->
<form action="incl/inq_incl.php" id="form" method="post" name="form">
<input name="vname" placeholder="<?php echo "$userName "?>" type="text" value="<?php echo "$userName "?>" hidden>
<input name="vemail" placeholder="Your Email" type="text" value="<?php echo "$email "?>" hidden >
<input name="sub" placeholder="Subject" type="text" value="">
<label>Your Inquiry</label>
<textarea name="msg" placeholder="Type your text here..."></textarea>
<input id="send" name="submit" type="submit" value="Send">
</form>
</div>

<!-- Contact Us Form Ends Here -->
</div>
<?php
include 'footer.php';
?>
</body>
<!-- Body Ends Here -->
</html>