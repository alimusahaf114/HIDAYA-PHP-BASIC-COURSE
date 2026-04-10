<?php

$amount = 245;   // units
$totalBillAmount = 0;

switch (true) {
    case ($amount > 100):
        $totalBillAmount += 100 * 5;
        $amount -= 100;
        break;

    case ($amount > 0):
        $totalBillAmount += $amount * 5;
        $amount = 0;
        break;
}

echo "After 1-100 = " . $totalBillAmount;
echo "<br>";
echo "Remaining Units = " . $amount;
echo "<br><br>";


switch (true) {
    case ($amount > 100):
        $totalBillAmount += 100 * 10;
        $amount -= 100;
        break;

    case ($amount > 0):
        $totalBillAmount += $amount * 10;
        $amount = 0;
        break;
}

echo "After 101-200 = " . $totalBillAmount;
echo "<br>";
echo "Remaining Units = " . $amount;
echo "<br><br>";


switch (true) {
    case ($amount > 100):
        $totalBillAmount += 100 * 15;
        $amount -= 100;
        break;

    case ($amount > 0):
        $totalBillAmount += $amount * 15;
        $amount = 0;
        break;
}

echo "After 201-300 = " . $totalBillAmount;
echo "<br>";
echo "Remaining Units = " . $amount;
echo "<br><br>";


switch (true) {
    case ($amount > 0):
        $totalBillAmount += $amount * 25;
        $amount = 0;
        break;
}

echo "Final Bill = " . $totalBillAmount;

?>