<?php
$client_key ="kg-1IR52ltwozpiV";
$client_secret1 ="QQN_k12_zbPahVqB3xCZvw0te6Ks6-qf3GZvBX3UWzTKH7yrxR6Wdm2xXS55z7Ey";
$Authorization1 = $client_key.':'.$client_secret1;
				

$Authorization = base64_encode($Authorization1);

echo $Authorization;

?>