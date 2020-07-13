<?php
$servername = "localhost";
$username = "root";
$passwor= "";
$dbname = "store";

$email=$_POST['email'];
$password=$_POST['password'];

// Create connection
$conn = new mysqli($servername, $username, $passwor, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}