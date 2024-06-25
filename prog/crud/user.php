<a href="add_new.php"><button>Add New</button></a>
<?php
include 'db.php';

$qry = "select * from igain_enrollment";
$result = mysqli_query($con,$qry);

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