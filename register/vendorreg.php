<?php
include('general.php');
$email = $_POST['email'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$password = $_POST['password'];
$phone = $_POST['phone'];
$ctype = $_POST['ctype'];
$location = $_POST['location'];

$sql = "INSERT INTO vendorreg (email, first, last, password, phone, ctype, location)
 VALUES ('$email','$fname', '$lname', '$password', '$phone', '$ctype', '$location')";

if ($conn->query($sql) === TRUE)  {
    echo "New record created successfully";
}
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
