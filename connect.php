<?php
$servername = "localhost";
$username = "root";
$password = "cdti1234";
$dbname = "db_thanakorn";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
//echo "ok";
?>
