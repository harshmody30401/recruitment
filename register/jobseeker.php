<?php
include('general.php');
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$password = $_POST['password'];
$phone = $_POST['phone'];
$location = $_POST['location'];

$sql = "INSERT INTO jobseeker(First_name, Last_name, Email,Password, Mobile_No, Location)
 VALUES ('$fname', '$lname', '$email', '$password', '$phone', '$location')";

if ($conn->query($sql) === TRUE)  {
    echo "New record created successfully";
}
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
