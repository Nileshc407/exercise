<?php
include "db.php";
$id = $_REQUEST['id'];
$result = $conn->query("select * from state_master where country_id = $id");
if($result->num_rows >0){
	while($row = mysqli_fetch_object($result)){
		$resp[] = array("id"=>$row->id,"name"=>$row->name);
	}
}
else{
	$resp = null;
}
echo json_encode($resp);
?>