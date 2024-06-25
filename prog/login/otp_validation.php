<?php
session_start();
include 'db.php';
if($conn)
{
	if($_SESSION['User_email'] != Null)
	{
		$User_email = $_SESSION['User_email'];
	}
	
	$otp = $_REQUEST['otp'];
	
	$query = mysqli_query($conn,"select * from igain_enrollment where User_name='$User_email' AND Otp ='$otp'");
	
	$count = mysqli_num_rows($query);
	if($count > 0)
	{
		$_SESSION['Login_flag'] = 1;
		echo 1;
	}
	else
	{
		$_SESSION['Login_flag'] = 0;
		echo 0;
	}
}
else
{
	echo mysqli_error($conn);
}
?>