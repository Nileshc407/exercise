<?php
//Fibonacci Series Program in PHP

$number = 6;
$n1 = 0;
$n2 = 1;
echo $n1.' '.$n2;
for($i=2;$i<$number;$i++)
{
	$n3=$n1+$n2;
	echo ' '.$n3;
	$n1=$n2;
	$n2=$n3;
}
?>