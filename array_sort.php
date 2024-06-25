<?php
$cars = array("Volvo", "BMW", "Toyota");
sort($cars);
print_r($cars);
echo"<br>";

$numbers = array(4, 6, 2, 22, 11);
rsort($numbers);
print_r($numbers);
echo"<br>";


$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
krsort($age);
print_r($age);
echo"<br>";
?>