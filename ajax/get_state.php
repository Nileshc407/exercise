<?php
include("db.php");
$id = $_REQUEST['id'];
$result = $conn->query("SELECT * FROM state_master WHERE country_id = $id");
if($result->num_rows > 0){
	while($row = mysqli_fetch_object($result))
	{
		$state[] = array('id'=>$row->id,'name'=>$row->name);
	}
}
else
{
	$state = null;
}
echo json_encode($state);
?>