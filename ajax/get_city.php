<?php
include("db.php");
$id = $_REQUEST['id'];
$result = $conn->query("SELECT * FROM city_master WHERE state_id = $id");
if($result->num_rows>0)
{
	while($row = mysqli_fetch_object($result))
	{
		$city [] = array('id'=>$row->id,"name"=>$row->name);
	}
}
else
{
	$city = null;
}
echo json_encode($city);
?>