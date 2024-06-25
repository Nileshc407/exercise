<?php
interface interf1
{
	const name = "Nilesh";
	function interf1_func();
}
class class1 implements interf1
{
	function interf1_func()
	{
		echo "interf1_func function call";
	}
	function class1_func()
	{
		echo "class1 function call";
	}
}

$obj1 = new class1();
$obj1->class1_func();
echo "<br>";
$obj1->interf1_func();

echo "<br> my name is : ".class1::name;
echo "<br> my name is : ".$obj1::name;
?>