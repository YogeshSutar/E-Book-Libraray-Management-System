<?php
require 'nav.php';
require 'dbconnect.php';
session_start();
$email=$_SESSION['email'];
$sql="SELECT * FROM `otpd` WHERE `otp`='$otp and `email`='$email'";
$noOfRows=mysqli_num_rows($con,$sql);
if($noOfRows==0)
{
    echo'no';
}
else{
    echo"yes";
    header('location:home.php');
}
?>