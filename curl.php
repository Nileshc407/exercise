<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://www.google.co.in/');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 0); 
$response = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Curl error: ' . curl_error($ch);
}

// Close cURL session
curl_close($ch);

// Process the response
echo $response;
?>
