<?php
$name = 'nilesh';
$age = '32 years';
define('a','a is constant');


echo '<br> my name is '.$name.' and age is '.$age;

// echo getData();
// require('error_type.php');
// echo '<br>my contact number are as follow '.$contact;

$skill = ['php','mysql','javascript'];
// $result = $a+$b;
// echo "<br> skills are ".$skill1[3];
$number = 123456789012345;
echo rand($number,16);
echo "<br> continue execution";


$cars = array("name"=>"Volvo","price"=>"10000");

$encode_data = json_encode($cars);

$result = json_decode($encode_data);
echo $result->name;

?>