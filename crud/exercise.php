<?php
$varGlob = "i am a global variable!";

define("constVar","i am constant variable");

echo constVar;

function getVar()
{
	static $i = 0;
	$i++;
	global $varGlob;
	echo "<br>".$varGlob;
	echo "<br>getVar function is here!";
	echo "<br>count of function call".$i;
	echo "<br>******************";
}

getVar();
getVar();
getVar();
?>