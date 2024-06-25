<?php
interface interf1
{
	function interf1_func();
}
class class1 implements interf1
{
	function interf1_func()
	{
		return "class1 function call";
	}
}
$obj1 = new class1();
echo $obj1->interf1_func();
?>