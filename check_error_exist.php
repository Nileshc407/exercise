<?php
exec("php -l error_types.php",$output,$result);
if($result == 0 )
{
	include("error_types.php");
}
else
{
	echo "<pre>";
	print_r($output);
}
?>
