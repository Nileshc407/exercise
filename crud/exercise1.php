<?php
class myClass
{
	const myConst = "this is class constant!";
	function myFunction()
	{
		echo self::myConst;
		echo "<br>my function is here!";
	}
}
$myObj = new myClass();
$myObj->myFunction();
echo "<br>".myClass::myConst;
echo "<br>".$myObj::myConst;
?>