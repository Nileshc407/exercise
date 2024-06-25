<?php
$array1 = [1, 2, 3, 4];
$array2 = [33, 44, 5, 6];

$intersection = array_intersect($array1, $array2);

if (!empty($intersection)) {
    echo "Found!";
} else {
    echo "Not found!";
}

?>