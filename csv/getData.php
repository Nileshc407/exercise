<?php
$csvFile = fopen('dataFile.csv','r');

if($csvFile == false)
{
	echo 'unable to open file';
}
else
{
	for($i = 1; $data = fgetcsv($csvFile); $i++)
	{
		if($i<=1)
		{
			continue;
		}
		
		echo '<pre>';
		print_r($data);
	}
}
?>