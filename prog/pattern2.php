<?php
//pattern2
$n = 16;
$k = 15;
for($i=0;$i<=$n;$i++)
{
	for($j=0;$j<$i;$j++)
	{
		echo " * ";
	}
	echo "<br>";
}
for($i=0;$i<=$n;$i++)
{
	for($j=0;$j<$k;$j++)
	{
		echo " * ";
	}
	echo "<br>";
	$k--;
}
?>