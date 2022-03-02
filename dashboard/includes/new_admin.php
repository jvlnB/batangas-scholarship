<?php 
$host="localhost";
$user="u231655845_admin";
$password="Batsadmin21"; //password of phpMyAdmin
$db="u231655845_admin_eval"; //name of the database

//create connection
$conn2 = mysqli_connect($host,$user,$password, $db);

if(!$conn2){
  die ("Failed to connect". mysqli_connect_error());
  exit();
} 