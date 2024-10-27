
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="comment.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/comment.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Latest compiled and minified CSS -->
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"> -->

<!-- jQuery library -->
<!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script> -->

<!-- Popper JS -->
<!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script> -->

<!-- Latest compiled JavaScript -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script> -->
    <title>bookadd</title>
</head>
<body>
<!-- <div >
        <header class="silder" style="background-image: url(photo/contact2.jpeg);">
            <div class="div1">
                <nav class="navbar123">
                    <img src="photo/logo.jpeg" alt="" width="130px" height="60">
                    <ul>
                        <li><a class="link" href="index.php">HOME</a></li>
                        <li><a class="link" href="bookadd.php">BOOKS</a></li>
                        <li><a class="link" href="about.php">ABOUT US</a></li>
                        <li><a class="link" href="comment.php">COMMENT</a></li>
                        <li><a class="link" href="contactus.php">CONTACT US</a></li>
                        <li><a class="link" href="login.php">LOGIN</a></li>-->
                        <div >
        <header class="silder" style="background-image: url(photo/contact2.jpeg);">
                        <?php
                        require 'nav.php';
                        ?>
                        </div>
                    <!-- </ul>
                    <p>Knowledge library</p>
                </nav>
    

            </div>
        </header>
     
    </div>  -->
    <!-- <script src="video.js"></script> -->
<form action="commentsubmit.php" method="POST">
    <h1 class="author_title">Contact Us
        <p style="font-size: 20px; padding:10px;">GET IN TOUCH</p>
        <hr class="author_title_line" width="450" color="red"> </h1>
<?php
if(isset($_SESSION['status']))
{
  ?>
  <div>
<?php echo "<div style='color:white; font-size:30px; border:1px solid red; margin-left: 20%; margin-right: 20%; 
background-color: rgba(255,0, 0,0.7); border-radius:10px; margin-bottom:15px; text-align:center;'>Your Lovely Comment Are Successfully Submited</div>";?>
</div>
<?php
unset ( $_SESSION['status']);

}
?>
        
<div class="contactus">
       
<div class="fname">
  <label class="fieldname">Full Name : </label><br>
  <input type="text" class="textsize" name="name" id="" placeholder=" Enter Your Full Name" required>
</div>

  <div class="cusername">
    <label >Username : </label><br>
    <input type="text" class="textsize" name="usernamec" id="" placeholder="Enter Username" required>
  </div>

  <div class="message">
    <label>Message : </label><br>
    <textarea class="messagebox" name="comment" id="" rows="3" placeholder="Type Your Message Here......" required></textarea>
  </div>
  <button class="submitbtn" name="submit">Submit</button>
 
  </div>
</form>

<br><br>
<div class="lastpoint">
        <div class="socialicon">
            <a href="#" class="fa fa-facebook"></a>
            <a href="#" class="fa fa-twitter"></a>
            <a href="https://en.wikipedia.org/wiki/Library#:~:text=A%20library%20is%20a%20collection%20of%20sources%20of,or%20room%2C%20or%20a%20virtual%20space%2C%20or%20both." class="fa fa-google"></a>
            <a href="#" class="fa fa-instagram"></a>
        </div>
        <div class="lastpointname">
            <p><b style="color: rgb(216, 27, 27);">Bad</b> libraries build collections, <b style="color: rgb(27, 40, 216);">Good</b> libraries build services, <b style="color: rgb(61, 223, 20);">Great</b> libraries build communities.</p>
            <h2> <b style="font-size:xx-large;">Created By: </b><br> Yogesh Hanument Sutar <br> Ganesh Pradeep Swami <br> Deepak Narayanadatta Kandpal</h2>
        </div>
    </div>
</body>
</html>