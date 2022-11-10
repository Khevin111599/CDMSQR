<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "db_barangay";

// Create connection
$con = new mysqli($servername, $username, $password, $db);

// Check connection
if ($con->connect_error) {
  die("Connection failed: " . mysqli_connect_error($con));
}
// echo "Connected successfully";
?>