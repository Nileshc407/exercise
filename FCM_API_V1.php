<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://fcm.googleapis.com/v1/projects/miraclenova-59b7d/messages:send',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{
        "message": {
          "notification": {
            "title": "Notification Title",
            "body": "Notification Body",
            "image": "https://example.com/image.jpg"
          },
          "token": "DEVICE_TOKEN"
        }
}',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json ',
    'Authorization: Bearer AAAAZyU5NEI:APA91bHVn7UJOxb5sob3WF_fGRWI-8rOlvhfktNxlf0FWRwtM86vOXU1PAGXN0opp3o8OKwX4QutcR0In04bxV2J2jxa-O_pK1FK_E0LfUfDmstTW00VR01k9NnbP3QRq-BrdBNYy-yj'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
