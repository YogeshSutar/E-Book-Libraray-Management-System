<?php
session_start();
 
require 'nav.php';
require 'dbconnect.php';

// $search="SELECT * from `txn` where `username`='$username'";
// $insert=mysqli_query($conn,$search);

// $data=mysqli_fetch_assoc($insert);
// $status=$data['status'];
// $username= $data['username'];
// if($status=="success"){
// $bokname=$_GET['bookname'];
// $sql="INSERT INTO `books_user`(`id`, `username`, `book_name`) VALUES ('','$username','$bookname'";
// $insert=mysqli_query($conn,$sql);
// }?>
<html>

<head>
    
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
  
      <!-- style CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <style>
       
    body{
      z-index:-1;
      margin-top:3rem;
    }
      .book_container{
        align-items:center;
        padding:10px,15px;
      }
      .books{
        
          display: inline-block;
         margin: 10px;
         
      }
     
       
    .Row {
        display: flex;
        flex-direction: row;
    }
    #ques{
      z-index: -1;
    }
    </style>
</head>

<body>
    <!-- <form action="books.php" method="POST">
        <select value='select book name from list' name='bookname'>

            <option>python</option>
            <option>java</option>
            <option> horror</option>
            <option> ml</option>
            <option> dwf</option>
        </select>
        <input type="submit" value="search">

    </form> -->

<?php

require 'dbconnect.php';
// $username=$_SESSION['username'];
$bookname='All';
//  $bookname=$_POST['bookname'];
if(isset($_SESSION['username']))
{
  if($bookname='All')
  {
   $sql="SELECT * FROM `books`";// where `category`='$bookname'";
   $insert=mysqli_query($conn,$sql);
     }
     else
     {

      $sql="SELECT * FROM `books` where `category`='$bookname'";
      $insert=mysqli_query($conn,$sql);
     }   //$noOfRows=mysqli_num_rows($insert);
 
    
    // require 'displayimg.php';
 ?>
  <div class="container my-4" id="ques">
      
        <div class="row my-4">
            <?php
            //  <!-- Fetch all the categories and use a loop to iterate through categories -->

    // $sql = "SELECT * FROM `categories`"; 
    // $result = mysqli_query($conn, $sql);

    while($data = mysqli_fetch_assoc($insert)){
     // echo $row['category_id'];
      $img=$data['book_img'];
     $bookname= $data['book_name'];
     $price = $data['price'];
     $desc = $data['book_desc'];
     $pdf=$data['book_pdf'];
     $auther=$data['auther'];
     $sqlb="SELECT * FROM `books_user` where `book_name`='$bookname' and `username`='$username'";
     $insertb=mysqli_query($conn,$sqlb);
     $noOfRowsb=mysqli_num_rows($insertb);
     if($noOfRowsb>0)
     {
     echo '<div class="col-md-4 my-2">
             <div class="card" style="width: 18rem; z-index:-1;">
                 <img src="img\\'.$img.'" class="card-img-top" alt="image for this category">
                 <div class="card-body">
                 <h5 class="card-title">'.$bookname.'</h5>
                 <p>'.$price.'<br>'.$auther.'<br></p>
                 <p class="card-text">'.substr($desc,0,50).'....</p>
                      
                     <p class="card-text">' . substr($desc, 0, 90). '... </p>
                     <a href="book_pdf\\'. $pdf .'" class="btn btn-primary">To Read Book</a>
       
                     
                    
                 </div>
             </div>
           </div>';
    }
    else{

      echo'<div class="col-md-4 my-2">
             <div class="card" style="width: 18rem;">
                 <img src="img\\'.$img.'" class="card-img-top" alt="image for this category">
                 <div class="card-body">
                 <h5 class="card-title">'.$bookname.'</h5>
                 <p>'.$price.'<br>'.$auther.'<br></p>
                 <p class="card-text">'.substr($desc,0,50).'....</p>
                    
                     <p class="card-text">' . substr($desc, 0, 90). '... </p>
                    <a href="TxnTest.php?bookname='.$bookname.'& username='.$username.'"class="btn btn-primary"  >buy</a>
       
                     
                    
                 </div>
             </div>
           </div>';
    } 
  }
    ?>    
   </div>
</div>
   
  
          
          

<?php
  
   
  echo'<!doctype html>
  <html lang="en">
    <head>
        
    </head>
    ';  
       
       

}
else
{

  echo'<P  style="margin-top:0px;">please login first<a href="login.php">login</a></p>';
  
}
 
?>
</body>

</html>








<!-- wqlihjfiref

f
e
fer
f
e-->
 