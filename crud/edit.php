<?php
include "db.php";

$id = $_REQUEST["id"];
$quy = "SELECT * FROM user_master WHERE id = $id";
$result = mysqli_query($conn,$quy);
while($row = mysqli_fetch_assoc($result)){
	$name = $row["name"];
	$phone = $row["contact"];
	$email = $row["email"];
}
?>

<html>
<head><title>crud opration</title></head>
<body>
	<form method="post" action="#">
		<table style="border-style:none;">
			<tr><td><label>Name : </label></td><td><input type="text" name="name" placeholder="enter name" value="<?php echo $name; ?>"></td></tr>
			<tr><td><label>Phone : </label></td><td><input type="text" name="phone" placeholder="enter phone number" value="<?php echo $phone; ?>"></td></tr>
			<tr><td><label>Email : </label></td><td><input type="text" name="email" placeholder="enter email id" value="<?php echo $email; ?>"></td></tr>
			<tr><td></td><td><button type="submit" name="update">submit</button></td>
		</table>
	</form>
</body>
</html>
<?php
if(isset($_POST["update"])){
	$name = mysqli_real_escape_string($conn,$_REQUEST["name"]);
	$phoneNo = mysqli_real_escape_string($conn,$_REQUEST["phone"]);
	$emailId = mysqli_real_escape_string($conn,$_REQUEST["email"]);
	
	$up = "UPDATE user_master set name = '$name', contact = '$phoneNo', email = '$emailId' WHERE id = '$id'";
	$update = mysqli_query($conn,$up);
	
	header("location:index.php");
	exit();
}
?>
<?php
$sel = "SELECT * FROM user_master";
$select = mysqli_query($conn,$sel);
$result = mysqli_num_rows($select);
if($result > 0){
	echo "<table id='dataTable'>";
	echo "<th colspan='2'>action</th><th>name</th><th>contact no</th><th>email id</th>";
	while($row = mysqli_fetch_assoc($select)){
		echo "<tr>
		<td><a href='edit.php?id=".$row["id"]."'>edit</a></td>
		<td><a href='delete.php?id=".$row["id"]."'>delete</a></td>
		<td>".$row["name"]."</td><td>".$row["contact"]."</td><td>".$row["email"]."</td>
		</tr>";
	}
	echo "</table>";
}
?>
<style>
#dataTable{
	th, td {
	border: 1px solid black;
	}
}
</style>