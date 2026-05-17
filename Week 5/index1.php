<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Scientific Calculator</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial, Helvetica, sans-serif;
}

body{
    background:#ececec;
    display:flex;
    justify-content:center;
    align-items:center;
    height:100vh;
}

.calculator{
    width:950px;
    background:#f5f5f5;
    padding:30px;
    border:1px solid #cfcfcf;
    box-shadow:0 0 10px rgba(0,0,0,0.1);
}

.display{
    width:100%;
    height:90px;
    margin-bottom:15px;
}

.display input{
    width:100%;
    height:100%;
    font-size:60px;
    text-align:right;
    padding-right:20px;
    border:2px solid #cfcfcf;
    background:white;
    color:#222;
}

.buttons{
    display:grid;
    grid-template-columns:repeat(7,1fr);
    gap:10px;
}

.buttons button{
    height:55px;
    border:none;
    background:#ddd;
    font-size:28px;
    cursor:pointer;
    transition:0.2s;
}

.buttons button:hover{
    background:#cfcfcf;
}

.equal{
    background:#4285f4 !important;
    color:white;
}

.equal:hover{
    background:#2e6fe3 !important;
}

</style>
</head>

<body>

<div class="calculator">

    <div class="display">
        <input type="text" id="screen" value="0" readonly>
    </div>

    <!-- FORM -->
    <form method="POST">

        <div class="buttons">

            <button type="button" onclick="insertValue('Rad')">Rad</button>
            <button type="button">⌗</button>
            <button type="button" onclick="factorial()">x!</button>
            <button type="button" onclick="insertValue('(')">(</button>
            <button type="button" onclick="insertValue(')')">)</button>
            <button type="button" onclick="insertValue('%')">%</button>
            <button type="button" onclick="clearScreen()">AC</button>

            <button type="button">Inv</button>
            <button type="button" onclick="insertFunction('Math.sin(')">sin</button>
            <button type="button" onclick="insertFunction('Math.log(')">ln</button>
            <button type="button" onclick="insertValue('7')">7</button>
            <button type="button" onclick="insertValue('8')">8</button>
            <button type="button" onclick="insertValue('9')">9</button>
            <button type="button" onclick="insertValue('/')">÷</button>

            <button type="button" onclick="insertValue('Math.PI')">π</button>
            <button type="button" onclick="insertFunction('Math.cos(')">cos</button>
            <button type="button" onclick="insertFunction('Math.log10(')">log</button>
            <button type="button" onclick="insertValue('4')">4</button>
            <button type="button" onclick="insertValue('5')">5</button>
            <button type="button" onclick="insertValue('6')">6</button>
            <button type="button" onclick="insertValue('*')">×</button>

            <button type="button" onclick="insertValue('Math.E')">e</button>
            <button type="button" onclick="insertFunction('Math.tan(')">tan</button>
            <button type="button" onclick="insertFunction('Math.sqrt(')">√</button>
            <button type="button" onclick="insertValue('1')">1</button>
            <button type="button" onclick="insertValue('2')">2</button>
            <button type="button" onclick="insertValue('3')">3</button>
            <button type="button" onclick="insertValue('-')">−</button>

            <button type="button">Ans</button>
            <button type="button">EXP</button>
            <button type="button" onclick="insertValue('**')">xʸ</button>
            <button type="button" onclick="insertValue('0')">0</button>
            <button type="button" onclick="insertValue('.')">.</button>

            <!-- SUBMIT BUTTON -->
            <button type="submit" class="equal" name="calculate">=</button>

            <button type="button" onclick="insertValue('+')">+</button>

        </div>

        <!-- Hidden field -->
        <input type="hidden" name="expression" id="hiddenExpression">

    </form>

</div>

<script>

let screen = document.getElementById("screen");
let hiddenExpression = document.getElementById("hiddenExpression");

function insertValue(value){

    if(screen.value == "0"){
        screen.value = value;
    }else{
        screen.value += value;
    }

    hiddenExpression.value = screen.value;
}

function insertFunction(value){

    if(screen.value == "0"){
        screen.value = value;
    }else{
        screen.value += value;
    }

    hiddenExpression.value = screen.value;
}

function clearScreen(){
    screen.value = "0";
    hiddenExpression.value = "";
}

function factorial(){

    let num = prompt("Enter number for factorial");

    if(num !== null){

        let result = 1;

        for(let i = 1; i <= num; i++){
            result *= i;
        }

        screen.value = result;
        hiddenExpression.value = result;
    }
}

</script>

<?php

if(isset($_POST['calculate'])){

    $expression = $_POST['expression'];

    echo "
    <script>

        try{

            let result = eval('$expression');

            document.getElementById('screen').value = result;

        }catch(error){

            document.getElementById('screen').value = 'Error';

        }

    </script>
    ";
}

?>

</body>
</html>