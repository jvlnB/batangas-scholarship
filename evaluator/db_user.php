
<?php 
$host="localhost";
$user="u231655845_batangas";
$password="Bats21capitol"; //password of phpMyAdmin
$db="u231655845_scholar"; //name of the database

//create connection
$conn = mysqli_connect($host,$user,$password, $db);

if(!$conn){
  die ("Failed to connect". mysqli_connect_error());
  exit();
} 