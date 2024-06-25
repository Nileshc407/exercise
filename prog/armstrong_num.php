<?php
//Check Armstrong Number of three digits

$number = 153;
$sum = 0;
$temp = $number;
while($temp!=0)
{
	$rem = $temp%10;
	$sum = $sum+$rem*$rem*$rem;
	$temp = $temp/10;
}
if($number == $sum)
{
	echo "The give number is amrstrong number";
}
else
{
	echo "The given number is not armstrong number";
}

?>