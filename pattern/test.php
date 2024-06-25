<?php
class myClass
{
	protected function myMethod()
	{
		echo "<br>bas class protected method";
	}
	protected function secondMethod()
	{
		echo "<br>base calss second normal method";
		$this->myMethod();
	}
}
class derived extends myClass
{
	function secondMethod()
	{
		echo "<br>derived class normal method";
		 parent::secondMethod();
	}
}
$obj = new derived();
$obj->secondMethod();
// $obj->protectdMethod();


/* 
$Hello = "Geek for Geek";

$a = 'Hello';

echo ' variable '.$a;
echo '<br>';
echo ' reference '.$$a; */
?>