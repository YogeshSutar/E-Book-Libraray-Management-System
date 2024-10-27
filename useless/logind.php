<?php 
//require 'nav.php';
require 'dbconnect.php';?>
<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <!-- style CSS -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <style>
          body{
           margin-top:3rem;
          }
          </style>
</head>
<body>
 <h1> profile</h1>
 <?php
 session_start();
 $username=$_SESSION['username'];
 if(isset($_SESSION['username']))
 {
   $sql="SELECT * FROM `idpass` where `username`='$username'";
   $insert=mysqli_query($conn,$sql);
   $noofvalues=mysqli_num_rows($insert);
   while($data=mysqli_fetch_assoc($insert))
   {
     echo"name agsh <br>";
     print_r($data['name']);
     echo"<br>username<br>";
     print_r($data['username']);
     echo"<br>mobile number<br>";
     print_r($data['mobileno']);
     echo"<br>email <br>";
     print_r($data['email']);
     echo"book have in cart";
  }
  $sqlb="SELECT * FROM `book_user` where `username`='$username'";
   $insertb=mysqli_query($conn,$sqlb);
   $noofvaluesb=mysqli_num_rows($insertb);
   if($noofvaluesb>0)
   {
   while($datab=mysqli_fetch_assoc($insertb))
   {
      echo"book have in cart<br>";
      $bookname=$datab['book_name'];
      $sql="SELECT * FROM `book` where `bookname`='$bookname'";
      $insert=mysqli_query($conn,$sql);
      $data=mysqli_fetch_assoc($insert);
      echo'br';
      print_r($data['book_pdf']);

      echo'<br>';
   }
   }
   else{
     echo "no books purches";
   }
 }
 ?>
</body>
</head>