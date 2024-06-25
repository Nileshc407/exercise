<?php
include 'db.php';
$id = $_REQUEST['id'];
if($id)
{
	$qry = "delete from igain_enrollment where id = $id";
	
	$result = mysqli_query($con,$qry); 
	
	if($result == true)
	{
		include 'add_new.php';
	}
	else
	{
		echo "Record deleted unsucesfull";
	}
}
?>