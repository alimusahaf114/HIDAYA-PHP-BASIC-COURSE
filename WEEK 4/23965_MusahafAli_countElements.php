<?php

$arr = [23,45,67,87,45,34,23,90,12,33,21];
$count = 0 ;
for($i = 0 ; isset($arr[$i]) ; $i++){
    $count++;
}

echo "Number of Elements in Array = $count";
?>