<?php
$number = 12321;
$temp = $number;
$sum = 0;

while(floor($temp))
{
	$digit = $temp % 10;
	$sum = $sum * 10 + $digit;
	$temp = $temp / 10;
}

if($sum == $number)
{
	echo "given number is palindrone";
}
else
{
	echo "given number is not palindrome";
}

?>