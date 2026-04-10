<?php
//*********** CALCULATOR ****************
$number1 = 80;
$number2 = 20;
$operator = '-';
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
?>