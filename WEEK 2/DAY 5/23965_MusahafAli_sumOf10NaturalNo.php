<?php

echo "<h1> Find the sum of the first 10 natural numbers </h1>";



$result = 0 ;
for($i = 1 ; $i <= 10 ; $i++){
    echo $i ;

    // is jagha if bhi use kar skte hain ....
    echo $i < 10  ?  "+": '';  

    $result = $result + $i;
}
echo " = $result";


?>