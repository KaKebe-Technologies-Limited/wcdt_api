<?php
$hostName = "localhost";
$userName = "u850523537_wcdtuser";
$password = "Admin@101619";
$databaseName = "u850523537_wcdt";
 $conn = new mysqli($hostName, $userName, $password, $databaseName);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>

