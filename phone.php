<?php
$phone = "9657407307";
echo $phone.'<br>';
$count = strlen($phone);
$limit = 6;
$phone1 = '';
for($i=0;$i<strlen($phone);$i++)
{
	if($i<$limit)
	{
		$phone1 .=$phone[$i];
	}
	else
	{
		$phone1 .='X';
	}
}
echo $phone1;
?>