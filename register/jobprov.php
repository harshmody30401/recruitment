<?php
include('general.php');

$Oemail = $_POST['email'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$password = $_POST['password'];
$phone = $_POST['phone'];
$ctype = $_POST['ctype'];
$location = $_POST['location'];

$sql = "INSERT INTO jobprovider (Official_email,First_name, Last_name, Password, Mobile_No, Company_type, Location)
 VALUES ('$Oemail','$fname', '$lname', '$password', '$phone', '$ctype', '$location')";

if ($conn->query($sql) === TRUE)  {
    echo "New record created successfully";
}
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
