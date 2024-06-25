<?php error_reporting(E_ALL); ?>
<html>
<head><title>setCookies</title></head>
<body>
<form method="post" action="#">
	<table style="border:none">
		<tr><td><label>user name</label></td><td><input type="text" name="userName" placeholder="enter user name" value="<?php if(isset($_COOKIE['userName'])){ echo $_COOKIE['userName']; } ?>"></td></tr>
		<tr><td><label>password</label></td><td><input type="text" name="password" placeholder="enter password" value="<?php if(isset($_COOKIE['password'])){ echo $_COOKIE['password']; } ?>"></td></tr>
		<tr><td></td><td><input type="checkbox" id="remember" name="rememberme[]" value="1" <?php if(isset($_COOKIE['userName'])){ echo "checked"; }?>>Remember me</checkbox></td></tr>
		<tr><td></td><td><button type="submit" name="submit">submit</button></td></tr>
	</table>
</form>
</body>
</html>
<?php
if(isset($_POST['submit'])){
	$userName = $_POST['userName'];
	$password = $_POST['password'];
	if(isset($_POST['rememberme']) && is_array($_POST['rememberme'])){
		foreach($_POST['rememberme'] as $checkVal){
			$rememberMe = $checkVal;
		}
	}
	else{
		$rememberMe = 0;
	}
	if($userName !=Null && $password !=Null){
		if($rememberMe == 1){
			setcookie('userName',$userName, time()+3600);
			setcookie('password',$password, time()+3600);
		}
		else{
			setcookie('userName','', time()-3600);
			setcookie('password','', time()-3600);
		}
		header('location:setCookies.php');
		echo "login successful";
	}
	else{
		echo "please enter user name and password!";
	}
}
?>