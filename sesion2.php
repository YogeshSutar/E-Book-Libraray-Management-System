<?php
session_start();
if(isset($_SESSION['lastname']))

echo "welcon ".$_SESSION['lastname'];

else
// echo"log in plesse";
    header("location:session.php");

?>