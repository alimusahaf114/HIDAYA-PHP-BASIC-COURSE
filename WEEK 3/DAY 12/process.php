<?php
if(isset($_POST["marksheet"])){
    
echo "<h1>MARKSHEET ASSIGNMENT </h1>";

$computer = $_POST["computer"] ;
$economics = $_POST["economics"] ;
$finance = $_POST["finance"];
$managment = $_POST["managment"] ;
$programming = $_POST["programming"];
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
if($status){
    echo "You are PASS";
}else {
    echo "You are FAIL";
}

echo "<br />";
echo "<br />";

// using if else condition to check grade
// This is first way to do this right......
if($percentage >= 90 AND $percentage < 100){
    $grade = "A+";
} else if($percentage >= 80 AND $percentage < 90){
    $grade = "A";
}else if($percentage >= 70 AND $percentage < 80){
    $grade = "B+";
}else if($percentage >= 60 AND $percentage < 70){
    $grade = "B";
}else if($percentage >= 50 AND $percentage < 60){
    $grade = "C";
} else {
    $grade = "Fail";
}

echo "Your obtained Grade is : $grade ";
echo "<br />";
echo "<br />";


// This is second thing we can do......
if($status){
    if($percentage >= 90 AND $percentage < 100){
        $grade = "A+";
    } 
    else if($percentage >= 80 AND $percentage < 90){
        $grade = "A";
    }else if($percentage >= 70 AND $percentage < 80){
        $grade = "B+";
    }else if($percentage >= 60 AND $percentage < 70){
        $grade = "B";
    }else if($percentage >= 50 AND $percentage < 60){
        $grade = "C";
    } else {
        $grade = "Fail";
    }
    echo "Your obtained Grade is : $grade ";
    echo "<br />";
    echo "<br />";
}else{
    echo "You not elegible for Grades!!!!!!";
}

};

if(isset($_POST["calculator"])){
    //*********** CALCULATOR ****************

$number1 = $_POST['value1'];
$number2 = $_POST['value2'];
$operator = $_POST['op'];
$result = null;


if($operator === '/'){
    $result = "Division of  $number1 / $number2 = ".($number1/$number2);
}else if($operator === '*'){
    $result = "Multiplication of  $number1 * $number2 = ".($number1*$number2);
}else if($operator === '+'){
    $result = "Addition of  $number1 + $number2 = ".($number1+$number2);
}else if($operator === '-'){
    $result = "Substraction of  $number1 - $number2 = ".($number1-$number2);
}else{
    echo "Invalid Operator!!!!!!!!!";
}
echo $result;

}
?>
