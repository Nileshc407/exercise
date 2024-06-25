<?php
include "db.php";
if(isset($_REQUEST['id']))
{
	$id = $_REQUEST['id'];
	$sesql = "SELECT * FROM igain_enrollment WHERE id = $id";
	if($sesql = mysqli_query($con,$sesql))
	{
		while($row = mysqli_fetch_assoc($sesql))
		{
			$id = $row['id'];
			$fname = $row['First_name'];
			$lname = $row['Last_name'];
			$email = $row['User_email_id'];
			$phone = $row['Phone_no'];
		}
	}
	else
	{
		echo "Record not found !";
	}
}
?>

<html>
<head><title>Edit Member</title>
<!-- Add the Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<!-- Add the Bootstrap JavaScript (optional, only if you need JavaScript features) -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<form action="#" method="post">
  <div class="container-i">
        <div class="row">  
			<div class="col-sm-12">
				<a href="add_new.php"><button type="button" class="btn btn-primary" name="add_new">Add New</button></a>
				<h5>Edit Member Details</h5>
				<div class="col-sm-6">
					<label>First Name : </label> <input type="text" name="fname" value="<?php echo $fname; ?>" required>
					<label>Email Id : </label> <input type="text" name="email" value="<?php echo $email; ?>" required>
				</div>
				<div class="col-sm-6">
					<label>Last Name : </label> <input type="text" name="lname" value="<?php echo $lname; ?>" required>
					<label>Contact : </label> <input type="text" name="contact" value="<?php echo $phone; ?>" required>
				</div>
				<input type="hidden" name="id" value="<?php echo $id; ?>">
				<button type="submit" class="btn btn-primary" name="update">Update</button>
			</div>
		</div>
   </div>
</form>
</body>
</html>

<?php
if(isset($_POST['update']))
{	
	$id = $_REQUEST['id'];
	$fname = $_REQUEST['fname'];
	$lname = $_REQUEST['lname'];
	$email = $_REQUEST['email'];
	$contact = $_REQUEST['contact'];
	
	$qry = "UPDATE igain_enrollment SET  First_name = '$fname',Last_name = '$lname',User_email_id = '$email',Phone_no = '$contact' WHERE id = '$id'";
	
	if(mysqli_query($con,$qry))
	{
		echo "Record Updated successfully.";
		header("Location: add_new.php");
	}
	else
	{
		echo "Error: " . $qry . "<br>" . mysqli_error($con);
	}
	$lastInsertedID = mysqli_insert_id($con);
	echo "Last inserted ID: " . $lastInsertedID;
}


$qry1 = "select * from igain_enrollment";
$result = mysqli_query($con,$qry1);

echo "<table border='1'>";
echo "<th>id</th><th>First Name</th><th>Last Name</th><th>Email</th><th>Contact</th><th colspan='2'>Action</th>";
while($row = mysqli_fetch_assoc($result))
{
	echo "<tr>";
	echo "<td>".$row['id']."</td>";
	echo "<td>".$row['First_name']."</td>";
	echo "<td>".$row['Last_name']."</td>";
	echo "<td>".$row['User_email_id']."</td>";
	echo "<td>".$row['Phone_no']."</td>";
	echo "<td><a href='edit.php?id=".$row['id']."'><button>Edit</button></a></td>";
	echo "<td><a href='delete.php?id=".$row['id']."'><button>Delete</button></a></td>";
	echo "</tr>";
}
echo "</table>";	
?>