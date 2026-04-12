<?php

echo "<h1> Generate Series - While/For </h1>";
echo "<h2 style='color: green;'> First Series:  1 4 9 16 25 </h2>";
echo "<h3 style='color: blue;'> Result: </h3>";

/* ************************* First Series ******************************** */


// first I thougt this is series jo har number men odd number add kar rahaa
//  hai to men ese banayaaa achaa khasaa dimag laga kar

/* $result = 1;
for($i = 3 ; $i <= 15 ; $i++){
    
if($i%2!==0){

        echo " $result";
        
        $result += $i;
    }
    
    }

echo "<br  />"; 
echo "<br  />"; 
*/

// Phir jab mujhe pata laga ye to square of natural numbers hain phir mene kahaaaa "Kiyaa php developer bane gaa re babaa..."
// Phir mene ese banaya...

for($j = 1 ; $j <= 5 ; $j++){
    echo " ".($j*$j);
}
    
/* ************************* Second Series ******************************** */

echo "<h2 style='color: green;'> Second Series:  1 3 6 10 15 21 </h2>";
echo "<h3 style='color: blue;'> Result: </h3>";
    
    $result = 0 ;
    for($i = 1 ; $i <= 6 ; $i++){
        echo " ".($i + $result);
    $result += $i ;
    }

    echo " <br />";
    
/* ************************* Third Series ******************************** */

echo "<h2 style='color: green;'> Third Series:  50 40 30 20 10 </h2>";
echo "<h3 style='color: blue;'> Result: </h3>";

    for($i = 50 ; $i >= 10 ; $i-=10){
        echo " $i";
    }
echo " <br />";


/* ************************* Fourth Series ******************************** */

echo "<h2 style='color: green;'> Fourth Series:  6 12 20 30 42 </h2>";
echo "<h3 style='color: blue;'> Result: </h3>";
    
    $result = 2 ;
    for($i = 4 ; $i <= 12 ; $i+=2){
        $result += $i ;
        echo " $result";        
    }

    echo " <br />";

/* ************* NOTE ********** */
/*
    my solutions may not match your thinking but I have put time and effort to match the solution with question 
    and understanding question perfectly ....
    */

?>