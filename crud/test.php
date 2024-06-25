<?php
$number = array(1,2,3,4,4,2,1,2);
$result=[];
foreach($number as $value)
{
	if(isset($result[$value])){
		$result[$value]++;
	}
	else{
		$result[$value]  = 1;
	}
}
$maxVal = max($result);
echo "max val ".$maxVal;
foreach($result as $key => $val)
{
	if($maxVal == $val){
		$finalResult = $key;
	}
}
echo "<br>max occurance ".$finalResult;
?>