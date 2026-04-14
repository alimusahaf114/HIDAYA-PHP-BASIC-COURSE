<?php

echo "Prime Number Series. Numbers that are self divisible are Prime Numbers.<br  />";


for($i = 2; $i <= 50; $i++)
{
    $isDivisible = 0;  

    for($j = 2; $j < $i; $j++)
    {
        if($i % $j == 0)
        {
            $isDivisible = 1;  
        }
    }

    if($isDivisible == 0)
    {
        echo $i . " ";  
    }
}

echo "<br  />";

?>