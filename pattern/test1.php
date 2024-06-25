<?php
ini_set('display_errors',1);
error_reporting(E_ALL);

$num = 0;
$i = 0;
try
{
	if($num<=0)
	{
		throw new Exception('value must be greater that zero! error occurred!');
	}
}
catch(Exception $e)
{
	echo $e->getMessage();
}
finally
{
	echo "<br>finally block executed!";
}
// $result = $num/$i;
// echo 'result '.$result;
?>