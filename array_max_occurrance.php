<?php
$arr= array(1,2,1,2,2,3,2,4,5);

print_r($arr);

$arr_assoc =[];
foreach($arr as $value)
{
	if(isset($arr_assoc[$value]))
	{
		$arr_assoc[$value]++;
	}
	else
	{
		$arr_assoc[$value] = 1;
	} 
}
echo "<br>";
print_r($arr_assoc);

$max_count = max($arr_assoc);
echo "<br>";
echo "max count is ".$max_count;
$max_occurance = array();
foreach($arr_assoc as $key => $number)
{
	if($max_count == $number)
	{
		$max_occurance[] = $key;
	}
}
echo "<br>";
echo "max occurance is ".$max_occurance[0];
?>