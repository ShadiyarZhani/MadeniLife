<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "madeni_life_db";

$connection = new mysqli($servername, $username, $password, $dbname);

if ($connection->connect_error) {
  die("Connection failed: " . $connection->connect_error);
} else {
  print("Good Damir");
} 
?>