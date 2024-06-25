<?php
//Check Whether a Number is Prime or Not
$number = 5;
$prime_num = array();
for($i=2;$i<=$number;$i++)
{
	$result = checkprime($i);
	if($result == "prime")
	{
		$prime_num[] = $i;
	}
	
}

$prime_num = implode(",",$prime_num);
echo $prime_num;

function checkprime($number)
{
	$flag = 0;
	
	for($i=2;$i<$number;$i++)
	{
		if($number%$i==0)
		{
			$flag = 1;
			break;
		}
		
	}
	if($flag == 0)
	{
		return "prime";
		
	}
	else
	{
		return "not prime";
	}
}
?>