
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bookadd.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>bookadd</title>
</head>
<body>
<div >
        <header class="silder" style="background-image: url(photo/library4.jpg)">
            <div class="div1">
                <nav class="navbar123">
                    <img src="photo/logo.jpeg" alt="" width="130px" height="60">
                    <ul>
                        <li><a class="link" href="index.php" style="text-decoration: none;">HOME</a></li>
                        <li><a class="link" href="bookadd.php" style="text-decoration: none;">BOOKS</a></li>
                        <li><a class="link" href="about.php" style="text-decoration: none;">ABOUT US</a></li>
                        <li><a class="link" href="comment.php" style="text-decoration: none;">COMMENT</a></li>
                        <li><a class="link" href="contactus.php" style="text-decoration: none;">CONTACT US</a></li>
                        <!-- <li><a class="link" href="login.php" style="text-decoration: none;">LOGIN</a></li> -->
<?php
session_start();
require 'navbarall.php';
?>


                    </ul>
                    <p>Knowledge library</p>
                </nav>
    

            </div>
        </header>
     
    </div>
    <!-- <script src="video.js"></script> -->
    


    
<!-- <form action="upload.php" method="POST" enctype="multipart/form-data">
    <h1 class="text-white bg-dark text-center"> 
        Insert Book Details
    </h1>
  <div class="form-group " style="margin: 20px;" >


    <label for="name">Book Name:</label>
    <input type="text" class="form-control" id="name" placeholder="Enter Book Name" name="bookname" required>

  

  <div class="form-group">
    <label for="author">Book Author:</label>
    <input type="text" class="form-control" id="author" placeholder="Enter Book Author Name" name="bookauthor" required>

  </div>
  <div class="form-group">
    <label for="image">Upload Book Image:</label>
    <input type="file" class="form-control" id="image" placeholder="Upload Book Image" name="bookimage" required >

  </div>
  <div class="form-group">
    <label for="pdf">Upload Book pdf:</label>
    <input type="file" class="form-control" id="pdf" placeholder="Upload Book pdf" name=" bookpdf" required>

  </div>

  <div class="form-group form-check">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox" name="remember" required> I Fill Details
      <div class="valid-feedback">Valid.</div>

    </label>
  </div>
  </div>
  <button type="submit" name="submit" class="btn btn-primary" style="margin: 20px;">Submit</button>


</form> -->

<?php

require 'dbconnect.php';
//  $username=$_SESSION['username'];
 
//  $bookname=$_POST['bookname'];
if(isset($_SESSION['username']))
{


  $sql="SELECT * FROM `books`";
   
   $insert=mysqli_query($conn,$sql);

    //  else
    //  {

    //   $sql="SELECT * FROM `books` where `category`='$bookname'";
    //   $insert=mysqli_query($conn,$sql);
    //  }   //$noOfRows=mysqli_num_rows($insert);
 
    
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
             <div class="card" style="width: 18rem; z-index:1;">
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
             <div class="card" style="width: 18rem; z-index:1;">
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

    <!--- team members name last part  -->
    <div class="lastpoint1">
        <div class="socialicon">
            <a href="#" class="fa fa-facebook"></a>
            <a href="#" class="fa fa-twitter"></a>
            <a href="https://en.wikipedia.org/wiki/Library#:~:text=A%20library%20is%20a%20collection%20of%20sources%20of,or%20room%2C%20or%20a%20virtual%20space%2C%20or%20both." class="fa fa-google"></a>
            <a href="#" class="fa fa-instagram"></a>
        </div>
        <div class="lastpointname1">
            <p class="quotes"><b style="color: rgb(216, 27, 27);">Bad</b> libraries build collections, <b style="color: rgb(27, 40, 216);">Good</b> libraries build services, <b style="color: rgb(61, 223, 20);">Great</b> libraries build communities.</p>
            <h2 class="termname"> <b style="font-size:xx-large;">Created By: </b><br>Ganesh Pradeep Swami <br> Yogesh Hanument Sutar <br>  Deepak Narayanadatta Kandpal</h2>
        </div>
    </div>
</body>
</html>