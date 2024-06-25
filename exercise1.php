<?php
//Declaring The Return Type

declare(strict_types=1); // strict requirement
function addNumbers(float $a, float $b) : float 
{
	return $a + $b;
}

//echo addNumbers(1.2, 5.2); 
		
//Anonymous Class
		
$Myobj = new class {
	public function say_hello()
	{
		echo "Hello World !!";
	}
};

$Myobj->say_hello();
?>