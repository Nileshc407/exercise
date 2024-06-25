<?php
$url_to_check = "https://accounts.xoxoday.com/chef/v1/oauth/api";
$token = "eyJ0b2tlbkNvbnRlbnQiOnsiaXNzdWVkRm9yIjoidGVzdCIsInNjb3BlIjoiIiwiaXNzdWVkQXQiOjE2OTYxMDIyMDI2MzIsImV4cGlyZXNBdCI6IjIwMjMtMTAtMTVUMTk6MzA6MDIuNjMyWiIsInRva2VuX3R5cGUiOiJVU0VSIn0sImFfdCI6ImV5SmxibU1pT2lKQk1USTRRMEpETFVoVE1qVTJJaXdpWVd4bklqb2lSVU5FU0MxRlV5SXNJbXRwWkNJNkltVnVZeUlzSW1Wd2F5STZleUpyZEhraU9pSkZReUlzSW1OeWRpSTZJbEF0TWpVMklpd2llQ0k2SWpSMVYwazVVM1pWVFdKRVpESlhlbGhVUm10SFdVdGlNbWhJWnpOTE9YVTVja1pYYm0xUWFVWmZXbU1pTENKNUlqb2liMDR5TjFWcllWWkNkM3BJU2tWaGVIbGpiVEYxZVU5RmR5MXplakJmYVRaellqZFdjRzVpYlU5Nk1DSjlmUS4uN2k1Z1QxSGlDM29ZTzByemtEUGJWQS5vbm5Fa3Z5emVCSTFjejBDdWxTdkhvcXFCRGFKSDhON1NXakxmZWhxdjBhcWkzdzc4ZXZ3TG9LdFBjZWZOalY4VzloMEZqSlhjbTA3UXcxUUdNRUh0TW54Y3Qxd3dqMlBGQ3RRbkdOQ1NWb2p2Z1c0WXlpbTlXbXk4T2gzZUV2VXkzdVZjSG9BcEo3NVQ1YmhHaU1rTjNNd0EwZ0ZqN0JKLTZLSUdSWExhLTFGaDdpTUNsNDFnaU1ydjZHRGFCNzZVSnJZa0NVMHlmQXBjci1ZWndfVGs0RXZ5U3RmV3Zpd3dBd3o3bmpFcGNqSkY2Nk9OUzJUaVlhODJONFp1emF3SXRRTG5hY1JaSFJnY0I1ZHRwdGhFNkp0b2JRMU5OQ0lfVVdTZVJIbTVJdUtGMXlOdHZ5ZVFoZVB1eklIaFRrWi1sNS1SbE5uR3Y1ZGhMZW9KSGRCX3RCbm52d1otVGYxWXluMkQ4bHRpbGEyS0ZLVkV2V3VwanJwMkFOYVpOUkliZHg3RE1sTno2NmJ1TFpfOTk4ajlEUGpkbXV4UUtqMlAxNm92VTlFdkVFWHNLWW9MeVRrREljdHFac2M2MTdKUTZWVFUyZ09UWktrNkxiTGg2OG5ycjVYOHlDUUhDaml2Y1BOamp6d0F3NWR1bmR0LVJQbUFaVXVFUHNub2VoUzhyVEhZcDEyeUQ0N3FadXhEY1JTRDdsRjJNU1M3Z0NabUsxU0otaXlMVDRrQ0pvUlFQTDhmZjgtMWRVYlREa1F1SkZ6MUlQZU4wQlpudmxyRjNPZ0RtUHEzU2dVQ1Z5cC0xbFIydFA2aG1UczYtVTNlZk1zbFVFZWxDWFJROFgybV9LRkxuNkxvRnoweW1yR1djM3Z4ZllYbm43QTZYZGVNMy1SdU90S0JSRGJCLUJ4LWV1MTlBQUFoaUNJV1AtMlNoNzZTNU1JYzYwLTUxaG1jdFpwTEY2TENISUNsZjFVcS1lLUhBMFIzRFl1d2UwQndRbnp1ZXBONTFKYjctb3QxTFZ1Qml6SGUxRThaTUI2YkRSQ0xnNnBSbjBidkIzSFJyU2JIMEtIbkJSakN6cm03X3lSVE16RTVaaHVKU21XdXZpQ19DV0xienZtT0plQ0RDRHc5dy45QXVOanowRS1YbEVrTWo0Y3BTOEZ3In0=";

$curl = curl_init();
$postarray= array(); 
$Symbol_of_currency = "INR";
$Merchandize_category_id = "food_restaurant";
			
$currencyCodearray = array('key'=>'currencyCode','value'=>$Symbol_of_currency);
$codearray= array('key'=>'type','value'=>"code");
$categoryarray= array('key'=>'voucher_category','value'=>$Merchandize_category_id);
$deliveryarray= array('key'=>'deliveryType','value'=>'realtime');

$filtersarray= array($currencyCodearray,$codearray,$categoryarray,$deliveryarray); 
$variablesarray["data"]= array('limit'=>'0','page'=>'0','includeProducts'=>'','excludeProducts'=>'','filters'=>$filtersarray);  
$postarray = array('query' =>'plumProAPI.mutation.getVouchers', 'tag' =>'plumProAPI', 'variables' =>$variablesarray);
$input = json_encode($postarray);
				
curl_setopt_array($curl,array(
		CURLOPT_URL => $url_to_check,
		CURLOPT_RETURNTRANSFER =>true,
		CURLOPT_CUSTOMREQUEST => 'POST',
		CURLOPT_POSTFIELDS => $input,
		CURLOPT_HTTPHEADER => array('Authorization: Bearer '.$token.'',
		'Content-Type: application/json'),
		));
$response = curl_exec($curl);
curl_close($curl);
$result = json_decode($response,true);

echo "<pre>";
print_r($result);

// $http_code = curl_getinfo($curl, CURLINFO_HTTP_CODE);
$http_code = curl_getinfo($curl);
// echo "<pre>";
// print_r($http_code);
if ($http_code['http_code'] == 200) {
    echo "Internet is connected.";
} else {
    echo "Internet is not connected.";
}
?>