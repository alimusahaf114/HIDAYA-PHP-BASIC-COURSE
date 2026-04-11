<?php
//*********** CALCULATOR IN SWITCH ****************
$number1 = 30;
$number2 = 14;
$operator = '*';
$result = null;

switch($operator){
    case '/':
        $result = "Division of  $number1 / $number2 = ".($number1/$number2);
        break;
    case '*':
        $result = "Multiplication of  $number1 * $number2 = ".($number1*$number2);
        break;
    case '+':
        $result = "Addition of  $number1 + $number2 = ".($number1+$number2);
        break;
    case '-':
        $result = "Substraction of  $number1 - $number2 = ".($number1-$number2);
        break;
    default:
            echo "Invalid Operator!!!";

}
echo $result;
?>