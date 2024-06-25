<?php
$num = 12345;
function revNum($num)
{
	$count = strlen($num);
    $result = '';
	for($i = $count-1;$i>=0;$i--)
	{
		$result .= $num[$i];
	}
	return $result;
}
echo revNum('12345');
?>