<?php 
session_start();
require_once('connection.php');
    if(isset($_POST['Login']))
    {
       $email = $_POST['email'];
	   $password = $_POST['password'];
            $query="select * from login where email='$email' and password='$password'";
            $result=mysqli_query($con,$query);
			
			
            if(mysqli_num_rows($result))
            {
               $_SESSION['email']=$_POST['email'];
			   $_SESSION['password']=$_POST['password'];
                header("location:../indexlogout.php");
            }
            else
            {
                header("location:login.php?Invalid=Incorrect Email or Password");
            }
       
    }
    else
    {
        echo 'connection failed';
    }

?>