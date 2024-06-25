<?php
// Account details
$apiKey = "NGQzNDczNmU0YTY4MzU2Nzc4NzA3NDUzNzU0MTMwNTY=";
// Message details
$numbers = "919657407307";
$sender = "TXTLCL";

$message  = urlencode("this is test mesg");
echo $message;
echo urldecode($message);
$message = rawurlencode('This is your message');
echo "<br>";
echo $message;
  
// $numbers = implode(",", $numbers);
 
// Prepare data for POST request
$data = array('apikey' => $apiKey, 'numbers' => $numbers, 'sender' => $sender, 'message' => $message);
// Send the POST request with cURL
$ch = curl_init("https://api.textlocal.in/send/");
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);
// Process your response here
echo $response;
?>

