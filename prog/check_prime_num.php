<?php
//check number is prime or not
$number = 100;
$prime_num = array();
for($i=2;$i<=$number;$i++)
{
	$result = check_prime($i);
	if($result == "prime")
	{
		$prime_num[] = $i;
	}
}
echo implode(", ",$prime_num);

function check_prime($num)
{	
	$flag = 0;
	for($i=2;$i<$num;$i++)
	{
		if($num%$i==0)
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