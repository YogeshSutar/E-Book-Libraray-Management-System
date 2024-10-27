<?php

require 'dbconnect.php';
$bookname=$_GET['bookname']
$sql="SELECT * FROM `books` where `book_name`='$bookname'";// where `category`='$bookname'";
$insert=mysqli_query($conn,$sql);
 
//$noOfRows=mysqli_num_rows($insert);
$row=mysqli_fetch_assoc($insert);

     $img=$row['book_img'];

header("content-type:image/jpeg");
 
?>