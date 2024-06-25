<?php
//https://www.youtube.com/watch?v=hkEGHGbwLIk
// https://www.youtube.com/watch?v=1bpNSynUrl8&t=134s
error_reporting(0);
$arr = array(1,2,3,3,4,5,1,2,3,5,6,7,7,2);

print_r($arr);
echo "<br>";

$itemcountArray = [];

foreach($arr as $value)
{
	if($itemcountArray[$value])
	{
		$itemcountArray[$value]++;
	}
	else
	{
		$itemcountArray[$value]= 1;
	}
}
$occ = max($itemcountArray);
foreach($itemcountArray as $key=>$val)
{
	if($occ == $val)
	{
		$result[] = $key;
	}
}
echo "<br>";

print_r($itemcountArray);

echo "<br>";

echo 'result '.$result[0];
/* asort($itemcountArray);
echo "<br>";
echo "<br>";

print_r($itemcountArray);


ksort($itemcountArray);
echo "<br>";
echo "<br>";

print_r($itemcountArray);
 */
?>