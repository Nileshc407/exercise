<?php
echo "<p style='text-align:center;'>";
$n=5;
for($i=0;$i<$n;$i++)
{ 
	for($j=0;$j<=$i;$j++)
	{
		echo " * ";
	}
	echo "<br>";
}
echo "</p> <br>";

for($i=0;$i<$n;$i++)
{ 
	for($j=0;$j<=$i;$j++)
	{
		echo " * ";
	}
	echo "<br>";
}
echo "<br>";

for($i=0;$i<$n;$i++)
{ 
	for($j=0;$j<=$i;$j++)
	{
		echo " * ";
	}
	echo "<br>";
}

for($i=4;$i>=0;$i--)
{ 
	for($j=0;$j<=$i;$j++)
	{
		echo " * ";
	}
	echo "<br>";
}

echo "<br>";

$num = 1;
for($i=0;$i<$n;$i++)
{
	for($j=0;$j<=$i;$j++)
	{
		echo " ".$num." ";
	}
	echo "<br>";
	$num++;
}
echo "<br>";

for($i=0;$i<=$n;$i++)
{
	for($j=1;$j<=$i;$j++)
	{
		echo " ".$j." ";
	}
	echo "<br>";
}
echo "<br>";
?>