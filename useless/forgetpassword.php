<?php
  require 'nav.php'; 
?>
<!doctype html>
<html>
    <head>
    <title>forgetpassword</title>
 <script src="jquery-3.6.0.min.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
</head>
<body>
<form class="container loginform"   method='POST' style="margin-top:50px;">
        
       
          
          <input type="text"placeholder="Entre The Email" class="form-control my-3 box"  id='email'   aria-describedby="emailHelp"   required>
          <span class=" erorr"> </span>
         
 
         <input type="button" class="btn btn-primary box "onclick="send_otp()" value="Send OTP">
      


  
          <input placeholder='OTP'type="text" class="form-control my-3 box1"  size='5' id='otp'  maxlength='11'  aria-describedby="emailHelp"   required>
         <span class="erorr"> </span>
          <button type="button" class="box1 btn btn-primary box1" onclick="submit_otp()">Submit OTP</button>
      
      </form>
      <script>
function send_otp()
{
	console.log("before");
	var email=jQuery('#email').val();
	jQuery.ajax({
		url:'sendotp.php',
		type:'post',
		data:'email='+email,
		success:function(result)
		{
			if(result=='yes'){
				jQuery('.box1').show();
				jQuery('.box').hide();
			}
			if(result=='no'){
				jQuery('#error').html('Please enter valid email');
			}
		}
	});
	console.log("after");
}

function submit_otp()
{
	var otp=jQuery('#otp').val();
	jQuery.ajax({
		url:'checkotp.php',
		type:'post',
		data:'otp='+otp,
		success:function(result){
			if(result=='yes'){
			 console.log('yes');
			}
			if(result=='no'){
				jQuery('#error').html('Please enter valid otp');
			}
		}
	});
}
</script>
<style>
 .box1{display:none;}
.erorr{color:red;}
</style>
</body>
</html>