<?php
// ************ Average of Temprature  ******************
echo "<h1> Average of Temprature </h1>";
$temp = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];
$total = 0 ;
for($i = 0 ; isset($temp[$i]) ;$i++){
    $total += $temp[$i];
}
    $Average = round( $total / count($temp),2 ); // precise answer dene ke warna remove kr skte hain round ko
    echo "Average of Tempratures = $Average";

    echo "<br />";
    echo "<br />";
    echo "<br />";
    
// ************ Five Maximum Elements  ******************


$maxElem = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];

$topFive = [];
for($j = 0; $j < 5; $j++) {
    $maxValue = $maxElem[0];
    $pos = 0;
    for($i = 1; $i < count($maxElem); $i++) {
        if($maxElem[$i] > $maxValue) {
            $maxValue = $maxElem[$i];
            $pos = $i;
        }
    }
    $topFive[] = $maxValue;
    $maxElem[$pos] = 0;
}
echo "<pre>";
print_r($topFive);
echo "<pre/>";

echo "<br/>";
echo "<br/>";
echo "<br/>";

// ************************** Five Minimum Values 

$minElem = [78, 99, 6, 68, 71, 68, 73, 85, 45, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];

$minFive = [];
for($j = 0; $j < 5; $j++) {
    $minValue = $minElem[0];
    $pos = 0;
    for($i = 1; $i < count($maxElem); $i++) {
        if($minElem[$i] < $minValue) {
            $minValue = $minElem[$i];
            $pos = $i;
        }
    }
    $minFive[] = $minValue;
    $minElem[$pos] = 999;
}
echo "<pre>";
print_r($minFive);
echo "<pre/>";

?>

