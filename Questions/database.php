<?php
$hostName = "localhost";
$userName = "rgxszumy_worshipcentre_user";
$password = "1234";
$databaseName = "rgxszumy_worshipcenter";
 $conn = new mysqli($hostName, $userName, $password, $databaseName);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>


