<?php
$url_to_check = "https://saasapi.igainapp.in/v1/member.php/mypoints";

$curl = curl_init();
$input = array("membershipid"=>"14000000074");
$input = json_encode($input);
curl_setopt_array($curl,array(
		CURLOPT_URL => $url_to_check,
		CURLOPT_RETURNTRANSFER =>true,
		CURLOPT_CUSTOMREQUEST => 'POST',
		CURLOPT_POSTFIELDS => $input,
		CURLOPT_HTTPHEADER => array('Authorization: 033ebc1f7e02174e4b386ee7981de53fa6adea5f:906dc483564123d3:my44Fc7wisYFblnPy5JyCg==',
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