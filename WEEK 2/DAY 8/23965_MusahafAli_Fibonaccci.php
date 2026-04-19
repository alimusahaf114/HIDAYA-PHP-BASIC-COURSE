<?php

$limit = 10; 

$a = 0;
$b = 1;

echo $a . " " . $b . " ";

for ($i = 3; $i <= $limit; $i++) {
    $preceding = $a + $b;
    echo $preceding . " ";
    
    
    $a = $b;
    $b = $preceding;
}

?>