<?php
$num = array(1,2,3,4,5,2,3,1,1,6);
print_r($num);

$ass_array = array();

foreach($num as $value)
{
	if(isset($ass_array[$value]))
	{
		$ass_array[$value]++;
	}
	else
	{
		$ass_array[$value] = 1;
	}
}
echo "<br>";
print_r($ass_array);
echo "<br>";
$min_count = max($ass_array);
echo "min is ".$min_count;
$final_result = array();
foreach($ass_array as $key => $val)
{
	if($min_count == $val)
	{
		$final_result[] = $key;
	}
}
echo "<br>";
echo "result is ".$final_result[0];

//undefined variable error handaling error
echo "<br>";
$a=1000;
echo @$a;
?>