<?php
//Find the Largest Number Among Three Numbers

$num1 = 150;
$num2 = 50;
$num3 = 150;

if($num1>=$num2 && $num1>=$num3)
{
	echo "<br> The largest number is num1 ".$num1;
}
if($num2>=$num1 && $num2>=$num3)
{
	echo "<br> The largest number is num2 ".$num2;
}
if($num3>=$num1 && $num3>=$num2)
{
	echo "<br> The largest number is num3 ".$num3;
}
?>