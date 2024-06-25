<?php
$names = array(
	array('name'=>'shivansh','day'=>25,'month'=>02,'year'=>2019),
	array('name'=>'shivanya','day'=>02,'month'=>06,'year'=>2019),
	array('name'=>'nilesh','day'=>15,'month'=>02,'year'=>1991)
	);
	
	for($i=0;$i<count($names);$i++)
	{
		foreach($names[$i] as $key => $values)
		{
			echo $key." : ".$values." ";
		}
		echo "<br>";
	}
	
	echo "<br>";	
	
	foreach($names as $person)
	{
		echo "name : ".$person['name']." ";
		echo "<br>";
	}
?>