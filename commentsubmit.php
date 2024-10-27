<?php
session_start();
require('connection.php');
if(isset($_POST['submit']))
{
$name=$_POST['name'];    
$usernamec=$_POST['usernamec'];    
$comment=$_POST['comment'];    
date_default_timezone_set('Asia/kolkata');
$date=date("Y-m-d");
$query="INSERT INTO `comment`(`name`,`usernamec`, `comment`,`send_at`) VALUES ('$name','$usernamec','$comment','$date')";
$result=mysqli_query($con, $query);
if($result==true)
{
    // echo "submit succesfully
    // header('Location:contact.php')";
    // echo "'submit succesfully';";
    $_SESSION['status']="submit succesfully";
    header('location:comment.php');
    // window.location.href='contact.php'";
}
else{
    echo "something want wrong";
}
}

?>