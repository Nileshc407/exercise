<?php
class magic
{
	function __construct($num1,$num2)
	{
		$this->a = $num1;
		$this->b = $num2;
		
		echo "constructor initializing..<br>";
	}
	function getSum()
	{
		return $this->a+$this->b;
	}
	function __destruct()
	{
		echo "<br>object is no more destructor initializing...";
	}
	function getMultiply()
	{
		return $this->a*$this->b;
	}
	function __call($method_name,$arguments)
	{
		echo "<br> Method $method_name was called with arguments : ".implode(', ',$arguments);
	}
	function __toString()
	{
		return '<br> This is the object of magic class';
	}
}

$obj = new magic(10,50);
echo "sum of num is : ".$obj->getSum();
echo "<br>multiplication of num is : ".$obj->getMultiply();
echo $obj->getSum1(50,60);
echo $obj;
?>