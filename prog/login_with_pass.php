<form method="post" action="#">
<label>User Name : </label>
<input type="text" name="userName"><br><br>
<label>Password : &nbsp;</label>
<input type="text" name="password"><br><br>
<button type="submit" name="submit">Login</button>
</form>
<?php
if(isset($_POST['submit']))
{
	$con = new mysqli('localhost','root','','novacom_devp');
	if($con->connect_error)
	{
		die("Connection failed: " . $con->connect_error);
	}
	else
	{
		$User_name =  $_POST['userName']; 
		$Password =  $_POST['password'];
		
		$qry = "SELECT * FROM igain_enrollment WHERE User_name = '$User_name'";
		
		$result = $con->query($qry);
		
		if($result->num_rows > 0)
		{
			while($row = mysqli_fetch_assoc($result))
			{
				$Cust_name = ucfirst($row['First_name']).' '.$row['Last_name'];
				$Cust_email = $row['User_email_id'];
				$Cust_phone_no = $row['Phone_no'];
				
				$db_password = $row['Password'];
				$password_result = password_verify($Password,$db_password);
			}
			if($password_result == 1)
			{
				//echo "Login Successfull <br>";
				
				echo "Hello, ".$Cust_name." Welcome to Our Website";
			}
			else
			{
				echo "Please provide correct password!";
			}
		}
		else
		{
			echo  "user not found!";
		}
	}
}
?>