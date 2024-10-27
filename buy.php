<?php
session_start();
require 'dbconnect.php';

$username=$_SESSION['username'];
// $orderid=$_GET['orderid'];
// echo $orderid;
$search="SELECT * from `txn` where `username`='$username'";
$insertt=mysqli_query($conn,$search);
$data=mysqli_fetch_assoc($insertt);
$total = mysqli_num_rows($insertt);
echo $total; 
 $bookname=$data['bookname'];
 
 $sql="INSERT into books_user values('NULL','$username','$bookname')";
  $insert=mysqli_query($conn,$sql);
  
$sql="DELETE FROM `txn` WHERE `username`='$username'";
$insert=mysqli_query($conn,$sql);
 header('location:books.php');

?>