<?php
$num = 0;

try
{
	if($num <= 0)
	{
		throw new Exception("value must be greater than zero!");
	}
	return true;
}
catch(Exception $e)
{
	echo $e->getMessage();
}
finally
{
	echo "<br> finally block executed!";
}
?>