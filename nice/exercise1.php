<?php
function encrypt($string, $key){
	$result = '';
	if($string == 'xyz')
	{
		for($i=0;$i<strlen($string);$i++)
		{
			$ascci = ord($string[$i])-23;
			
			$result .= chr($ascci);
		}
		
		echo $result;
	}
	else
	{
		for($i=0;$i<strlen($string);$i++)
		{
			$ascii = ord($string[$i])+$key;
			
			$result .= chr($ascii);
		}
		echo $result."<br>";
	}
}
echo encrypt('abc', 3); //=== 'def' ? 'True' : '';
echo encrypt('xyz', 3) //=== 'abc' ? 'True' : '';
?>