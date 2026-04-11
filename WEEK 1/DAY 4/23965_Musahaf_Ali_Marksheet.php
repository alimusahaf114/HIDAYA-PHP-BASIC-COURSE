<?php

echo "<h1>MARKSHEET ASSIGNMENT in SWITCH </h1>";

$computer = 65 ;
$economics = 95 ;
$finance = 75;
$managment = 55 ;
$programming = 60;
$total_marks = 500 ; // considering 100 marks per subject 
$obtained_marks ;
$percentage ;
$grade ;

$obtained_marks = $computer + $finance + $economics + $managment + $programming;
echo "Obtained Marks = $obtained_marks from $total_marks " ;
echo "<br />";
echo "<br />";

$percentage = $obtained_marks / $total_marks * 100 ;
echo "Percentage of obtained marks = ".$percentage;
echo "<br />";
echo "<br />";

// checking if pass or fail according to subjects ...
$status = ($computer >= 40 && $finance >= 40 && $economics >= 40 && $managment>= 40 && $programming >= 40);
switch($status){
case true:
    echo "You are PASS";
    break;
default:
    echo "You are FAIL";
}

echo "<br />";
echo "<br />";

switch($percentage){
case ($percentage >= 90 AND $percentage < 100):
        $grade = "A+";
        break;
case ($percentage >= 80 AND $percentage < 90):
    $grade = "A";
    break;
case ($percentage >= 70 AND $percentage < 80):
    $grade = "B+";
    break;
case ($percentage >= 60 AND $percentage < 70):
    $grade = "B";
    break;
case ($percentage >= 50 AND $percentage < 60):
    $grade = "C";
    break;
default:
    $grade = "Fail";
}

echo "Your obtained Grade is : $grade ";
echo "<br />";
echo "<br />";


// This is second thing we can do......




?>