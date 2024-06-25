<?php
$k = 0;
for($i=1;$i<=10;$i++)
{
	for($k=1;$k<=$i;$k++)
	{
		echo "&nbsp";
	}
	for($j=1;$j<=10;$j++)
	{
		echo " * ";	
	}
	echo "<br>";	
}

/* for($i=2;$i<=10;$i++)
{
	for($j=1;$j<=$i;$j++)
	{
		echo " * ";
	}
	echo "<br>";
} */
?>