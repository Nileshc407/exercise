<?php
//1.Find the Factoral of n number

$number = 10;
$fact = 1;
for($i=1;$i<=$number;$i++)
{
	$fact = $fact * $i;
}
echo "Factorial is ".$fact;
?>