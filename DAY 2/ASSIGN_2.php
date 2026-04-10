<?php 
echo "<h1 style='color:blue;'> Assignment No 2 </h1>";
	echo "<h3 style='color:gray;'> Assignment Start ... </h3>";

	$x = 5 ;
	$y = 10 ;

	$x = $y ;
	echo "I am x and I have value of y which is equal = ".$x ;    // I am expecting here 10 
	echo "<br />";
	
	$y = $x;
	echo "I am y and I have value of x which is = ".$y ;    // and also here value will be 10  
	echo "<br />";

	$x = $y + $x;
	echo $x;  // As we override values of both variables by swapping their values , so both have 10 and result in x should be 20 
	echo "<br />";


	$y = $x ;	// now y is also 20 because x had 20 and its value now been assigned to y
	$x = $y + $x ; 		// both have 20 and x will get 40 
	echo $x;
	echo "<br />";

	$x = $x - $y;	// by substracting value of y from x , x should become now 20 	
	echo $x ;
	echo "<br />";

	$y = $x * $y ; // both has 20 should become 400
	echo $y ;
	echo "<br />";

	$y = $y / $x ; // just above y became 400 and dividing it with value of x  will result 20 and y will become 20
	echo $y ;
	echo "<br />";

	$x = $y % $x; // behind it is 20/20 will result 1 no reminder so output will be 0
	echo $x;
	echo "<br />";

	$y = $x * $y;
	echo $y;



echo "<h3 style='color:gray;'> Assignment End ... </h3>";



// At the end both are now zero !!!!!!!!!!




	
	
 


?>