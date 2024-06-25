<?php
if(isset($_POST['submit']))
{
	$email = $_POST['email'];
	//echo $email;
	$domain = substr(strrchr($email,"@"),1);
	echo $domain."<br>";
}
?>
<form method="post">
<input type="text" name="email">
<button type="submit" name="submit">submit</button>
</form>