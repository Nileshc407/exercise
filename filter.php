<?php
echo '***********email validate******************<br>';
$email = 'nileshc@miraclecartes.com';
if(filter_var($email,FILTER_VALIDATE_EMAIL) == true)
{
	echo 'successful!';
}
else
{
	echo 'provide valid email id';
}

echo '<br>***********number validate******************<br>';
$num = 10001;
if(filter_var($num,FILTER_VALIDATE_INT) == true)
{
	echo 'successful!';
}
else
{
	echo 'provide valid number';
}
echo '<br>***********URL validate******************<br>';
$url = 'https://www.igainspark.com';
if(filter_var($url,FILTER_VALIDATE_URL)==true)
{
	echo 'successful!';
}
else
{
	echo 'provide valid url';
}
echo '<br>***********Validate an Integer Within a Range******************<br>';

$n1= 199;
$min = 1;
$max = 200;
if(filter_var($n1, FILTER_VALIDATE_INT, array("options"=>array("min_rage"=>$min,"max_range"=>$max))) == true)
{
	echo "variable value is within the legal range";
}
else
{
	echo "variable value is not within the legal range";
}
?>