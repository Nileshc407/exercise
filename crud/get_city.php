<?php
include("db.php");
$id = $_REQUEST['id'];
$result = $conn->query("select * from city_master where state_id = $id");
if($result->num_rows > 0){
	while($row = mysqli_fetch_object($result)){
		$resp[] = array("id"=>$row->id,"name"=>$row->name);
	}
}
else{
	$resp = null;
}
echo json_encode($resp);
<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://fcm.googleapis.com/fcm/send',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{
    "to":"fRFNb0eGRJ-Gy-OjD2-oxT:APA91bGY2UCPpu1qCqr4JjApRj2JE2z5F24g75yizbbUaX5gvQH-S1f62KyR_AbB2MZUHnSNen7eDDTfo8iUu5WcSrYTqZge5IDJUo1mDFX1LM7sMblAK51m6FhOTnWD-12U0PtKST2f",
    "notification":{
        "title":"New Message",
        "body":"Hello, this is test message from postman",
        "click_action":"https://novacomonline.ehpdemo.online/javahouseafricaApp/index.php/Cust_home/compose?Id=20258"
        }
}',
  CURLOPT_HTTPHEADER => array(
    'Authorization: key=AAAAweMFKsw:APA91bEMuizQs8UCVI4-NNs8dGpZfyWG5yL-dpHyn02uO53lORCw8ctrO_GHCQiBFrWrFks1QaJ1mruMqQ7ynq-n-pe0etDmxF5BN-H6TVcTxJKX0Eb1xLb89ZhMjL0mRhuhsl76Vrzv',
    'Content-Type: application/json'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;

?>