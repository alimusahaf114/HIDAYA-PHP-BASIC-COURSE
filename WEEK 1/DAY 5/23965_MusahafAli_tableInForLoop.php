<?php

echo "<h1> Generate Table using for loop </h1>";

$tableNo = 13 ;
for($i= 1 ; $i <= 10 ; $i++){
    echo "$tableNo * $i = ".($i *$tableNo);
    echo "<br/>";
}


?>