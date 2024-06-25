<?php

//https://www.youtube.com/watch?v=GtzDpwLdBB0&t=434s

function send_FCM()
{
	// $url = "POST https://fcm.googleapis.com/v1/projects/miraclenova-59b7d/messages:send";
	$url = "https://fcm.googleapis.com/fcm/send";
	
	$api_key = "AAAAweMFKsw:APA91bEMuizQs8UCVI4-NNs8dGpZfyWG5yL-dpHyn02uO53lORCw8ctrO_GHCQiBFrWrFks1QaJ1mruMqQ7ynq-n-pe0etDmxF5BN-H6TVcTxJKX0Eb1xLb89ZhMjL0mRhuhsl76Vrzv";
	
	$To ="cpUtjhezQdC_-jm6O3YhOB:APA91bF_s67VWQliqw0ijyecpKXuswQsbtYcm2ON9_7EMnfD1P58ioC1r64WK6vg5ArdJrZ7zexxVfm96HiRmGVQM5hbKZZAumAxkUyoyXlbHeR1oBVQdGuV4OqnNv88hzMb-4DKjU78";
	
	$action_url = 'https://novacomonline.ehpdemo.online/javahouseafricaApp/index.php/Cust_home/compose?Id=10787';
	
	$notifData = [
					'title'=>'JavaHouse Demo Notification',
					'body'=>'JavaHouse Demo App Notification Body',
					'click_action'=>$action_url
				];
	
/* 	$dataPayload = [
					'to'=>'VIP',
					'data'=>'2023-05-22',
					'other_data'=>'Data kdsjkddjkdjk dkdk'
				]; */
	$notifBody = [
					'notification'=>$notifData,
					'to'=> $To
					];
				
	$notifBodyReq = json_encode($notifBody);
	
	$curl = curl_init();
	curl_setopt_array($curl, array(
	CURLOPT_URL => $url, 
	CURLOPT_POST => true,
	CURLOPT_POSTFIELDS => $notifBodyReq,  
	CURLOPT_HTTPHEADER => array('Authorization:key='.$api_key,'Content-Type: application/json')));
	
	$response =curl_exec($curl);
	$data = json_decode($response,true);
	echo $data;
	curl_close($curl);
}
send_FCM();
?>