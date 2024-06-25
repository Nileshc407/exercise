<?php
declare(strict_types = 1);
$x = 5;

function test_scop()
{
	global $x;
	$y =10;
	echo 'this is test scop method variable value is : '.$x;
	echo "<br>local var value is ".$y;
	
}
test_scop();

echo "<br>global var value is ".$x;
echo "<br>***********************<br>";

function test_scop1()
{
	static $i = 0;
	echo "<br> value of i is ".$i;
	$i++;
}
for($j=0;$j<3;$j++)
{
	test_scop1();
}
$num = 407;
print '<br> this is printed through print statement '.$num;
echo '<br> this is printed through echo statement '.$num;
echo "<br>***************************<br>";

define('INFO','this is constant defined by variable scope test file');
define('datatype',['string','int','float','boolean','array','object','null','resource']);
echo INFO;
echo "<br>";
echo datatype['0'];
echo "<br>****************<br>";
$q = 3;
$b=0;
if($q<=>$b)
{
	echo 'if ecexuted';
}
else
{
	echo 'elese executed';
}
echo "<br>****************<br>";
function writeMsg( $name = 'nilesh') 
{
	echo "Hello ".$name."<br>";
}
WRITEMSG('nitin');
WRITEMSG();
WRITEMSG('shivansh');
echo "<br>****************<br>";

function add(float $a, float $b) : float 
{
	return $a+$b;
}
echo add(10,20);

echo "<br>****************<br>";

$arr = array("Hello","World","Beautiful","Day!","2019");
echo implode (" ",$arr); 

echo "<br>****************<br>";

$str ="Hello World Beautiful Day! 2019";

$result = explode(" ",$str);
print_r($result);

echo "<br>****************<br>";

echo "<br> coalescing operator </br>";
$variable_set = 1001;

echo $variable_set ?? 'this variable is not set!';
?>