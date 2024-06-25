<?php
//https://www.youtube.com/watch?v=9YTy7V5AYdA&list=PLWCLxMult9xfY_dsYicKGcCLhlZ6YXFMh&index=3
if(isset($_COOKIE['user_email']))
{
	$user_email = $_COOKIE['user_email'];
}
else
{
	$user_email = Null;
}
?>
<html>
<body>
<head><title>Air-India</title></head>
<form method="post" action="#" align="center">
	<div class="first_box">
		<img src="img/logo.jpg"></img><br>
		<br><label>Email Address : </label><input type="text" class="text" id="email" name="email" placeholder="Enter User Email" required value="<?php if($user_email != Null) { echo $user_email; } ?>"><br><br>
		<span class="success_msg"></span><br>
		<span class="error_msg_email"></span><br>
		<button type="button" class="btn" onclick="send_otp()">Submit</button><br><br>
	</div>

	<div class="second_box">
		<img src="img/logo.jpg"></img><br>
		<br><label>OTP : </label><input type="text" class="text" id="otp" name="otp" placeholder="Enter Login OTP" required><br><br>
		<span class="error_msg_otp"></span><br>
		<button type="button" class="btn" onclick="submit_otp()">Submit</button><br><br>
	</div>
</form>
</body>
</html>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
function send_otp()
{
	var email = jQuery('#email').val();	
	if(email !="")
	{
		jQuery('.success_msg').html('Please Wait...');
		
		jQuery.ajax({
		url:'login.php',
		type:'post',
		data:{email:email},
		success:function(result)
		{
			if(result=="exist")
			{
				jQuery('.success_msg').hide();
				jQuery('.first_box').hide();
				jQuery('.second_box').show();
			}
			else if(result == "not exist")
			{
				jQuery('.success_msg').hide();
				jQuery('#email').val('');
				jQuery('.error_msg_email').show();
				jQuery('.error_msg_email').html('Please Enter Valid Email Address!');
				setTimeout(function(){
					jQuery('.error_msg_email').hide();
				},3000);
			}
		}
		});
	}
	else
	{
		jQuery('.error_msg_email').show();
		jQuery('.error_msg_email').html('Please Enter Valid Email Address !');
		setTimeout(function(){
		jQuery('.error_msg_email').hide();
		},3000);
	}
}
function submit_otp()
{
	var otp = jQuery('#otp').val();
	
	jQuery.ajax({
		url:'otp_validation.php',
		type:'post',
		data:{otp:otp},
		success:function(result)
		{
			if(result == 1)
			{
				window.location='welcome.php';
			}
			else if(result == 0)
			{
				jQuery('.error_msg_otp').show();
				jQuery('.error_msg_otp').html('Please Enter Valid OTP !');
				jQuery('#otp').val('');
				setTimeout(function(){
					jQuery('.error_msg_otp').hide();
				},4000);
			}
		}
	});
}
</script>
<style>
.second_box{
	display:none;
	background: white;
	width: 350px;
	margin-left: 100px;
    margin-top: 40px;
}
.first_box{
	background: white;
	width: 350px;
	margin-left: 100px;
    margin-top: 40px;
}
.error_msg_email,.error_msg_otp{
	color:#e32526;
}
body{
	background-image: url('img/background-img.jpg');
	background-size: cover, contain, auto;
}
.btn
{
	background-color: #e32526;
    width: 86px;
    height: 33px;
	border-color: #e32526;
}
.text{
	height: 34px;
    width: 200px;
}
</style>