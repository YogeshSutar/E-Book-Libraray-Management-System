<?php
session_start();
require 'dbconnect.php';
require 'nav.php';
$book=$_GET['bookname'];
$sql="SELECT *FROM `books` where `book_name`='$book'";
$insert=mysqli_query($conn,$sql);
$noofrows=mysqli_num_rows($insert);
if($noofrows>0)
{
    while($data=mysqli_fetch_assoc($insert))
    {
         
        $bookpdf=$data['book_desc'];
         print_r($data['book_desc']);

    }
}
echo'

';
?>