<?php

echo "Print a triangular multiplication table for 0 through 5. <br   />";

for($i = 0; $i <= 5; $i++)
{
    for($j = 0; $j <= $i; $j++)
    {
        echo $i * $j;

        if($j < $i)
        {
            echo "  ";  
        }
    }

    echo "<br  />";
}

?>