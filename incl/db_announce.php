<?php 
$host="localhost";
$user="u231655845_announce";
$password="Psbbats21capitol"; //password of phpMyAdmin
$db="u231655845_announcement"; //name of the database

//create connection
$connAnn = mysqli_connect($host,$user,$password, $db);

if(!$connAnn) {
  die ("Failed to connect". mysqli_connect_error());
  exit();
} 