<?php

echo "Diamond Shape <br   />";


for($i = 1; $i <= 3; $i++)
{
    for($space = 1; $space <= 3 - $i; $space++)
    {
        echo " ";
    }

    for($star = 1; $star <= (2 * $i) - 1; $star++)
    {
        echo "*";
    }

    echo "<br />";
}

for($i = 3 - 1; $i >= 1; $i--)
{
    for($space = 1; $space <= 3 - $i; $space++)
    {
        echo " ";
    }

    for($star = 1; $star <= (2 * $i) - 1; $star++)
    {
        echo "*";
    }

    echo "<br  />";
}


?>