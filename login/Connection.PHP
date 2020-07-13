<?php
 
    $con=mysqli_connect('localhost','root','','store');
 
    if(!$con)
    {
        die('Please Check Your Connection'.mysqli_error($con));
    }
?>