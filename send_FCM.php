<?php
//https://www.youtube.com/watch?v=GtzDpwLdBB0
function send_FCM()
{
	 $url = "https://fcm.googleapis.com/fcm/send";
	// $url = "POST https://fcm.googleapis.com/v1/projects/miraclenova-59b7d/messages:send";
	// $api_key = "BN8RcEW8xgFUQ3OQzfGP0cxqH_pJ2zunGZrlK_uVlECN90b9yjEtzV86FO-iMM-mBGYDV0PdQeYdBzD_UGcA0MI";
	$api_key = "AAAAZyU5NEI:APA91bHVn7UJOxb5sob3WF_fGRWI-8rOlvhfktNxlf0FWRwtM86vOXU1PAGXN0opp3o8OKwX4QutcR0In04bxV2J2jxa-O_pK1FK_E0LfUfDmstTW00VR01k9NnbP3QRq-BrdBNYy-yj";
	$To ='443006137410';
	$headers = array(
					'Authorization:key='.$api_key,
					'Content-Type:application/json'
					);
					
	$notifData = [
					'title'=>'My New Notification',
					'body'=>'My Notification Body'
				];
	//optional		
	$dataPayload = [
					'to'=>'VIP',
					'data'=>'2023-05-22',
					'other_data'=>'Data kdsjkddjkdjk dkdk'
				];
	$notifBody = [
					'notification'=>$notifData,
					'to'=> $To
				];
				//'data'=>$dataPayload, //optional
				//'time_to_live'=>3600, //optional
				//'registration_ids'=> 'array of registration ids',
				
	$notifBodyReq = json_encode($notifBody);
	
	$curl = curl_init();
	/* curl_setopt($ch,CURLOPT_URL,$url);
	curl_setopt($ch,CURLOPT_POST,true);
	curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
	curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode($notifBody));
	 */
	curl_setopt_array($curl, array(
	  CURLOPT_URL => $url,
	  // CURLOPT_RETURNTRANSFER => true,
	  // CURLOPT_ENCODING => '',
	  // CURLOPT_MAXREDIRS => 10,
	  // CURLOPT_TIMEOUT => 0,
	  CURLOPT_POST => true,
	  // CURLOPT_FOLLOWLOCATION => true,
	  // CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	  // CURLOPT_CUSTOMREQUEST => 'POST',
	  CURLOPT_POSTFIELDS => $notifBodyReq,  
	  CURLOPT_HTTPHEADER => array(
		'Authorization:key='.$api_key,
		'Content-Type: application/json'
	  ),
	));
	$response =curl_exec($curl);
	$data = json_decode($response,true);
	echo $data;
	// print($data);
	curl_close($curl);
}
send_FCM();
?>