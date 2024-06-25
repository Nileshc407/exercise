<?php
//revers string
/* function reversString($str)
{
	$length = strlen($str);
	$result ='';
	for($i=$length-1;$i>=0;$i--)
	{
		$result .= $str[$i];
	}
	return $result;
}
echo reversString('Hellow');
 */
 
 $arr1 = array('ba','b','c');
 $arr2 = array('ba','bv','c');
 $arr3 = array('b','bc','bi');
 

 
// $result = array_combine($arr1,$arr3); 

$result = array_merge($arr1,$arr2);

 print_r($result);
 
 $arr11 = array('a','b','c');
 $arr22 = array('a','b','c');
 $arr33 = array('b','c','c');
 $result = array_intersect($arr11,$arr22,$arr33);
 
 echo "<br>";
 print_r($result);
?>