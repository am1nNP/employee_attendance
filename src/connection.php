<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="emp_db";
// Create connection
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
  die("ارتباط برقرار نشد: " . $conn->connect_error);
}
?> 