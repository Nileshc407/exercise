<html>
<head><title>Add New Member</title>
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
				<h5>Add New Member Details</h5>
				<div class="col-sm-6">
					<label>First Name : </label> <input type="text" name="fname" required>
					<label>Email Id : </label> <input type="text" name="email" required>
				</div>
				<div class="col-sm-6">
					<label>Last Name : </label> <input type="text" name="lname" required>
					<label>Contact : </label> <input type="text" name="contact" required>
				</div>
				<button type="submit" class="btn btn-primary" name="submit">Save</button>
			</div>
		</div>
   </div>
</form>
</body>
</html>

<?php
include "db.php";
if(isset($_POST['submit']))
{	
	$fname = $_REQUEST['fname'];
	$lname = $_REQUEST['lname'];
	$email = $_REQUEST['email'];
	$contact = $_REQUEST['contact'];
	
	$qry = "INSERT INTO igain_enrollment(First_name,Last_name,User_email_id,Phone_no)VALUES('$fname','$lname','$email','$contact')";
	
	if(mysqli_query($con,$qry))
	{
		echo "Record inserted successfully.";
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