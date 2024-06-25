<?php
$inputObject = array("name"=>"nilesh","mobile"=>"9657407307","email"=>"nileshc@gmail.com");
echo "<pre>";
$inputObject1 =  json_encode($inputObject);

$decodeResult = json_decode($inputObject1,true);
print_r($decodeResult);

$inputArrayObject = array(array("item_code"=>"1023-29","name"=>"chicken burger","qty"=>"1","price"=>"1000.00"),array("item_code"=>"1023-10","name"=>"chicken rice","qty"=>"1","price"=>"500.00"), array("item_code"=>"1023-10","name"=>"BBQ Chic Macon* Halaal","qty"=>"1","price"=>"1500.00"));

$encodeResult1 = json_encode($inputArrayObject);
$decodeResult1 = json_decode($encodeResult1,true);
echo "<br>";
echo "<pre>";
print_r($decodeResult1);

echo $decodeResult1[1]['name'];


?>