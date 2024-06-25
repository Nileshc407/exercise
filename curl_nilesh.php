<?php
$token = "cMEz95sPQhaB-SdlATH7uP:APA91bGe987eZWY673GQUhZ9D_e-G3JxuUSMBVZ71C1q-uyans5ahmjXt-qZVb4pAWdedLx2DUUECLT5r66G-1-EVCDQGuIkbgYlm-xA2qsBcT9tihdbzXqOvobuOgM3lwjm4-aT7BOQ";
$id = "6630";
$redirect_to = "ReadNotification";

$title = "New Message";
$body = "Hello, this is a test message from postman";

$input_to = array("to"=>$token);
$input_data = array("id"=>$id,"redirect_to"=>$redirect_to);
$notification_data = array("title"=>$title,"body"=>$body);

$notification = array("to"=>$token,"data"=>$input_data,"notification"=>$notification_data);
$input_json = json_encode($notification);
$output_json = json_decode($input_json,true);

echo print_r($input_json);

{
	"to":"cMEz95sPQhaB-SdlATH7uP:APA91bGe987eZWY673GQUhZ9D_e-G3JxuUSMBVZ71C1q-uyans5ahmjXt-qZVb4pAWdedLx2DUUECLT5r66G-1-EVCDQGuIkbgYlm-xA2qsBcT9tihdbzXqOvobuOgM3lwjm4-aT7BOQ",
	"data":{
		"id":"6630",
		"redirect_to":"ReadNotification"
		},
		"notification":{
			"title":"New Message",
			"body":"Hello, this is a test message from postman"
			}
		}

{
  "to": "cMEz95sPQhaB-SdlATH7uP:APA91bGe987eZWY673GQUhZ9D_e-G3JxuUSMBVZ71C1q-uyans5ahmjXt-qZVb4pAWdedLx2DUUECLT5r66G-1-EVCDQGuIkbgYlm-xA2qsBcT9tihdbzXqOvobuOgM3lwjm4-aT7BOQ",
  "data": {
    "id": "6630",
  "redirect_to":"ReadNotification"
  },
  "notification": {
    "title": "New Message",
    "body": "Hello, this is a test message from postman"
  }
}
?>