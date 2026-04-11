<?php

echo "<h1> The factorial of a positive integer n is equal to 1*2*3*...n. </h1>";



$result = 1 ;
for($i = 1 ; $i <= 5 ; $i++){
   $result *= $i;
}
echo $result;


?>