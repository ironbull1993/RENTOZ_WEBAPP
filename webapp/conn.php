<?php
$servername = "localhost";
$username = "mmbuji";
$password = "909395";
$dbname = "mifis";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 
?>
