<?php
$con = new mysqli("localhost","root","","novacom_devp");
if($con)
{
	//echo "connected to db";
}
else
{
	die(mysqli_error($con));
}

?>