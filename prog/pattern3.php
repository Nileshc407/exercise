<?php
//pattern3
$n=35;
for($i=0;$i<$n;$i++)
{
	for($j=0;$j<$n-$i;$j++)
	{
		echo "&nbsp;&nbsp;";
	}
	for($k=0;$k<=$i;$k++)
	{
		echo "* &nbsp;";
	}
	echo "<br>";
}
?>
