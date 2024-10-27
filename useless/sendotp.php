<?pHp

 
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $email=$_POST['email'];
    // echo $email;
    
    // session_start();
    // $_SESSION['email']=$email;
 
    require 'dbconnect.php';
    if(!$conn)
    {
        die("failed to coonect database").mysqli_connect_error();
    }
    else
    {

         $sqlc="SELECT * FROM `idpass` WHERE `email`='$email'";
        
         $exits=mysqli_query($conn,$sqlc);
         $noOfROws=mysqli_num_rows($exits);
        //  echo $noOfROws;
        if($noOfROws>0)
        {
            $otp=rand(0000,9999);
            // $sql="SELECT * FROM `otpd` where  `email`='$email'";
            $sqle="SELECT * FROM `otpd` WHERE ` email`='$email'";
            $exitsotp=mysqli_query($conn,$sqle);
            $noOfROwsotp=mysqli_num_rows($exitsotp);

            if($noOfROwsotp>0)

            {
                $update="UPDATE `otpd` SET  `otp`='$otp' WHERE ` email`='$email'";
                $insertu=mysqli_query($conn,$update);
                echo"yes";
            }
            else
            {
                $insert="INSERT INTO `otpd` (`otpid`, ` email`, `otp`) VALUES (NULL, '$email', '$otp')";
                $insertq=mysqli_query($conn,$insert);
                echo'yes';
            }
            
                    

//working_directory/emailBuilder.php

require('C:\xampp\htdocs\ganesh\Mail\mail\PHPMailerAutoload.php');
require('C:\xampp\htdocs\ganesh\Mail\mail\class.smtp.php');
require('C:\xampp\htdocs\ganesh\Mail\mail\class.phpmailer.php');

$to=$email;
$subject="otp verufaction mail";
$msg=$otp;
smtp_mailer($to,$subject, $msg);
// $mail=new PHPMailer();
// $credentials = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// $apiInstance = new SendinBlue\Client\Api\TransactionalEmailsApi(new GuzzleHttp\Client(),$credentials);

// $sendSmtpEmail = new \SendinBlue\Client\Model\SendSmtpEmail([
//      'subject' => 'from the PHP SDK!',
//      'sender' => ['name' => 'Sendinblue', 'email' => 'contact@sendinblue.com'],
//      'replyTo' => ['name' => 'Sendinblue', 'email' => 'contact@sendinblue.com'],
//      'to' => [[ 'name' => 'Max Mustermann', 'email' => 'example@example.com']],
//      'htmlContent' => '<html><body><h1>This is a transactional email {{params.bodyMessage}}</h1></body></html>',
//      'params' => ['bodyMessage' => 'made just for you!']
// ]);

// try {
//     $result = $apiInstance->sendTransacEmail($sendSmtpEmail);
//     print_r($result);
// } catch (Exception $e) {
//     echo $e->getMessage(),PHP_EOL;
// }


        //   smtp_mailer($email,"OTP validation ",$otp);
        //    ini_set('SMTP','localhost');
        //     ini_set('smtp_port',80);
        //    $to      = $email;
        //    $subject = 'the subject';
        //    $message = $otp;
        //    $headers = 'From: ganeshswami184.com' . "\r\n" .
        //        'Reply-To: webmaster@example.com' . "\r\n" .
        //        'X-Mailer: PHP/' . phpversion();
          
        //    mail($to, $subject, $message, $headers);
           
        }
         else 
        {
            echo'no';
        }
   }
} 
function smtp_mailer($to,$subject, $msg){
    $mail = new PHPMailer(); // create a new object
    $mail->IsSMTP(); // enable SMTP
    $mail->SMTPDebug = 2; // debugging: 1 = errors and messages, 2 = messages only
    $mail->SMTPAuth = true; // authentication enabled
    $mail->SMTPSecure =PHPMailer::ENCRYPTION_SMTPS; // secure transfer enabled REQUIRED for GMail
     $mail->Host = "smtp.gmail.com";
    $mail->Port = 587; //465; // or 587
    $mail->IsHTML(true);
    $mail->Username = 'ganeshpswami184@gmail.com';
    $mail->Password = 'Ganeshs@41525';
    $mail->SetFrom('ganeshpswami184@gmail.com','libray');
    $mail->Subject = $subject;
    $mail->Body =$msg;
    $mail->AddAddress($to);
    if(!$mail->Send()){
        echo "Mailer Error: " . $mail->ErrorInfo;
    }else{
        echo "Message has been sent";
    }
}
  ?>