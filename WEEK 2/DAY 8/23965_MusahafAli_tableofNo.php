<?php

$tabeleNoLimit = 3;

for ($a = 2; $a <= $tabeleNoLimit; $a++) {
    
    for ($b = 1; $b <= 10; $b++) {
        echo $a . " * " . $b . " = " . ($a * $b) . "<br>";
    }

    echo "<br>"; 
}

?>