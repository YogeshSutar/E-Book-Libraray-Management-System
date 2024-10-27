<?php

session_start();
// error_reporting(23);
require("connection.php");
// $username=$_SESSION['username'];

// $email=$_SESSION['email']; 
if( isset($_POST['reset']) ){
// $query="SELECT * FROM `users` WHERE `email`='$_POST[email]' ";
// $result=mysqli_query($con,$query);
// if($result){
    // $reset_token = $_POST['resettoken'];

    $newpassword=$_POST['newpassword'];
    $verifypassword=$_POST['verifypassword'];
    
    if($newpassword==$verifypassword)
    {
  $reset_token=$_SESSION['resettoken'];
  $_SESSION['resettoken']=$reset_token;

        // $query ="UPDATE `users` SET `password`='$verifypassword' WHERE `email`='$_POST[email]'";
  $query = "UPDATE `users` set `password` ='".password_hash($newpassword,PASSWORD_DEFAULT)."' WHERE `resettoken`= '".$reset_token."' ";

        $result_reset=mysqli_query($con, $query);
        if($result_reset)
        {
            if(mysqli_affected_rows($con)>0){
                echo "password reset successfully";
                 header('location:login.php');
            }
            else{
                echo "not reset";
            }
        }else{
            echo "no result";
        }

    }
    
else{
    echo "<div style='color:white; font-size:30px; border:1px solid red; margin-left: 20%; margin-right: 20%; background-color: rgba(255,0, 0,0.7); border-radius:10px; margin-bottom:15px;'>Wrong OTP</div>";
}
    
}

// session_destroy();
  // }
// else{
  // echo "last password do not match";
// }
// if( isset($_POST['reset']) && isset($_POST['username'])){
// $pass=password_hash($_POST['newpassword'],PASSWORD_BCRYPT);
// $update="UPDATE `users` SET `password`='$pass' WHERE `username`='$_POST[username]'";
// if(mysqli_query($con, $update)){
//   echo "<script>
//   alert('pass update');
//   window.location.href='login.php';
//   </script>";
// }
// else{
//   echo "<script>
//   alert('server down try again leter');
//   window.location.href='login.php';
//   </script>";
// }

// }

// if(isset($_POST['reset'])){
// $newpassword = $_POST["newpassword"];
// $verifypassword = $_POST["verifypassword"];

// if($newpassword == $verifypassword)
// {
//   // $randomCode = $_POST['$'];
//   $reset_token=$_SESSION['resettoken'];
//   // $result_fetch=mysqli_fetch_assoc($randomCode);

//   $_SESSION['resettoken']=$reset_token;
//   $reset_query = "UPDATE `users` set `password` ='".password_hash($newpassword,PASSWORD_DEFAULT)."' WHERE `resettoken`= '".$reset_token."' ";

//   // if($reset_query)
//   // {
//   //   // header('location:login.php');
//   //   echo "'password link send to mail';";
//   //   header('location:login.php');
//   // }
//   if(mysqli_query($con, $reset_query))
//   {
//      #if data inserted
//       echo "<script>
//       alert('registration sucssesfully');
//       window.location.href='login.php';
//       </script>";
//   }
//   else{
//     echo "<script>
//     alert('erong');
//     window.location.href='passreset.php';
//     </script>";
//   }
// }
// else{
//         echo " password do not match";
        
//     }
// }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>

body{
            background-image: url(images/sendotp.jpg);


            padding: 90px;
            margin: 20px;
            text-align: center;
        }

        p{
            font-size: 35px;
            color: white;
        }
        button {
            font-size: 28px;
            margin: 25px 120px;
            padding: 5px 25px;
            outline: none;
            border-radius: 10px;
            border: 2px solid white;
            color: white;
            background: none;
        }
        button:hover {
            color: black;
            background: rgb(96, 208, 241);
            transition: 0.4s;
        }
        input{
            background: rgb(0,0,0,0.8);
            color: white;
            font-size: 20px;
            border-radius: 10px;
            text-align: center;
            padding: 10px 50px;
            margin: 10px;
        }

        
        .newpass{
            margin-left: 20%;
            margin-right: 20%;
            padding: 2%;
            background-color: rgba(0, 0, 0,0.7);
            border-radius: 10px;
        }
    </style>
    <title>new password</title>
</head>
<body>
<form action="" method="POST">
  <div class="newpass">
<p>Password:</p>
      <input type="password" name="newpassword" id="newpassword" placeholder="Enter new Password" requierd>
      <p>confirm Password:</p>
      <input type="password" name="verifypassword" id="verifypassword" placeholder="Enter verify password" requried>



      <button type="submit" name="reset" ><b>reset password</b></button>
      </div> 
    </form>
    </body>
</html> 