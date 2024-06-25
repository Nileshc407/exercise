<?php
$start = microtime(true);
echo "<br> start : ".$start;

for($i=0;$i<2000;$i++)
{
	echo "<br>echo statement : ";
}
$end = microtime(true);
echo "<br> end : ".$end;

$exec_time = ($end-$start)/60;

echo "<br> exec time is ".$exec_time;
?>