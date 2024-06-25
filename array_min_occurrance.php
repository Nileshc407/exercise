<?php
$arr = array(1,2,2,1,1,3,1,2,4,3,4,5,4);

print_r($arr);

$countarray = [];
foreach($arr as $value)
{
	if($countarray[$value])
	{
		$countarray[$value]++;
	}
	else
	{
		$countarray[$value] = 1;
	}
}
$minCount = min($countarray);
echo "<br>";
print_r($countarray);
echo "<br>";
echo "min-count ".$minCount;

$lessOccurrance = array();

foreach($countarray as $number => $count)
{
	if($count == $minCount)
	{
		$lessOccurrance[] = $number;
	}
}
echo "<br>";
echo "less Occurance Value is ".$lessOccurrance[0];
?>