<?php
include('general.php');
$email = $_POST['email'];
$dept = $_POST['dept'];
$password = $_POST['password'];
$phone = $_POST['phone'];
$location = $_POST['location'];

$sql = "INSERT INTO collegereg (email,head password, phone,location)
 VALUES ('$email','$dept', '$password', '$phone', '$location')";

if ($conn->query($sql) === TRUE)  {
    echo "New record created successfully";
}
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
