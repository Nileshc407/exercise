<?php
$car_name = "tata,honda,hundai,mahindra";
$carname = explode(',',$car_name);
print_r($carname);
echo "<br>";

$name = implode(' , ',$carname);
echo $name; 
?>