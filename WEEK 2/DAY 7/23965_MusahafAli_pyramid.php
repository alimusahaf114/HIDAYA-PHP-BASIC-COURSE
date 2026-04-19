<?php

echo "Star Pyramid Shape <br   />";

$rows = 6;

for($i = 1; $i <= $rows; $i++)
{
    for($space = 1; $space <= $rows - $i; $space++)
    {
        echo "            ";
    }

    for($star = 1; $star <= (2 * $i) - 1; $star++)
    {
        echo "*";
    }

    echo "<br />";
}

?>