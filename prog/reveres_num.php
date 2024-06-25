<?php
//reveres number
$number = 12345;
$sum = 0;
while($number !=0)
{
	$rem = $number%10;
	$sum=$sum*10+$rem;
	$number = (int)($number / 10);	
}
echo "Reveres number ".$sum;
?>