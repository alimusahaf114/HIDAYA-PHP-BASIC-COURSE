<?php


$rows = 5;

// ****************** a Star Triangular Shape ***************

echo "a) Star Triangular Shape <br   />";

for($i = 1; $i <= $rows; $i++)
{
    for($j = 1; $j <= $i; $j++)
    {
        echo "*";
        }
        echo "<br />";
        }
        
        echo "<br  />";
        echo "<br  />";
        echo "<br  />";
        
        
        /************** * 2 . Alphabetical Triangular Shape ************/
 echo "b) Alphabetical Triangular Shape <br   />";

for($i = 1; $i <= $rows; $i++)
{
    $letter = 97; // 97 is ASCII code for 'a'

    for($j = 1; $j <= $i; $j++)
    {
        echo chr($letter);
        $letter = $letter + 1;
    }
    echo "<br  />";
}

echo "<br   />";


/************ c) Numeric Triangular Shape  ***************/

echo "c) Numeric Triangular Shape <br   />";

for($i = 1; $i <= $rows; $i++)
{
    for($j = 1; $j <= $i; $j++)
    {
        echo $j;
    }
    echo "<br/>";
}

echo "<br/>";


/************  d) Numeric Triangle And Its Multiplication ***** */

echo "d) Numeric Triangle And Its Multiplication <br  />";

for($i = 1; $i <= $rows; $i++)
{
    $number = "";
    $multiply = 1;

    for($j = 1; $j <= $i; $j++)
    {
        $number = $number . $j;
        $multiply = $multiply * $j;
    }

    echo $number;

    if($i == 1)
    {
        echo "         = ";
    }
    if($i == 2)
    {
        echo "       = ";
    }
    if($i == 3)
    {
        echo "     = ";
    }
    if($i == 4)
    {
        echo "   = ";
    }
    if($i == 5)
    {
        echo " = ";
    }

    echo $multiply . "<br  />";
}

?>