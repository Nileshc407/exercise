<?php
//array_map function
function squre($number)
{
	return $number*$number;
}
$number = [1,2,3,4,5,6];
// print_r($number);

$squreNumber = array_map('squre',$number);

print_r($squreNumber);



function evenNumber($num)
{
	return $num%2==0;
}
$evenResult = array_filter($number,function($number){
	return $number%2==0;
});
print_r($evenResult);
?>