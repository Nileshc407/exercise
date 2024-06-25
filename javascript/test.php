<?php
$num = array('1','1','2','2','3','4','2');
print_r($num);

$secondNum = [];

foreach($num as $val){
	if(isset($secondNum[$val])){
		$secondNum[$val]++;
	}else{
		$secondNum[$val]=1;
	}
}
$maxOccurance = max($secondNum);
print_r($secondNum);

foreach($secondNum as $key => $value){
	if($value == $maxOccurance){
		$maxResult[]=$key;
	}
}
echo "max occurance is ".$maxResult[0].' No. of occurance is '.$maxOccurance;
?>