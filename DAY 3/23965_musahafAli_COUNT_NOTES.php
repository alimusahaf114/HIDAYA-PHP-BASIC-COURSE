<?php
    // I am supposing it like banking ATM system....
    $available_balance = 2500000;
    $amount = 4753;
    $remainder = null;
   

    if($amount <= $available_balance){

        if($amount >= 5000){
           $remainder = $amount % 5000 ;
           $amount = $amount - $remainder ;
           $noOfNotes = $amount / 5000;
           echo "5000 : ".$noOfNotes;
           $amount = $remainder;           
        }else{
            echo "5000: 0";
        }


        echo "<br />";
        echo "<br />";
        
        if($amount >= 1000){
           $remainder = $amount % 1000 ;
           $amount = $amount  - $remainder ;
           $noOfNotes = $amount / 1000;
           echo "1000 : ".$noOfNotes;
           $amount = $remainder;
           }else{
               echo "1000: 0";
        }


        echo "<br />";
        echo "<br />";
        
        if($amount >= 500){
           $remainder = $amount % 500 ;
           $amount = $amount  - $remainder ;
           $noOfNotes = $amount / 500;
           echo "500 : ".$noOfNotes;
           $amount = $remainder;
           }else{
               echo "500: 0";
            }
        
               
        echo "<br />";
        echo "<br />";
        
        if($amount >= 100){
           $remainder = $amount % 100 ;
           $amount = $amount  - $remainder ;
           $noOfNotes = $amount / 100;
           echo "100 : ".$noOfNotes;
           $amount = $remainder;
           }
           else{
               echo "100: 0";
            }

        echo "<br />";
        echo "<br />";
        
        if($amount >= 50){
           $remainder = $amount % 50 ;
           $amount = $amount  - $remainder ;
           $noOfNotes = $amount / 50;
           echo "50 : ".$noOfNotes;
           $amount = $remainder;
           }else{
               echo "50: 0";
            }

        echo "<br />";
        echo "<br />";
        
        if($amount >= 20){
           $remainder = $amount % 20 ;
           $amount = $amount  - $remainder ;
           $noOfNotes = $amount / 20;
           echo "20 : ".$noOfNotes;
           $amount = $remainder;
           }else{
               echo "20: 0";
            }


            echo "<br />";
        echo "<br />";
        
        if($amount >= 10){
           $remainder = $amount % 10 ;
           $amount = $amount  - $remainder ;
           $noOfNotes = $amount / 10;
           echo "10 : ".$noOfNotes;
           $amount = $remainder;
           }else{
               echo "10: 0";
            }

        echo "<br />";
        echo "<br />";
        
        if($amount >= 5){
           $remainder = $amount % 5 ;
           $amount = $amount  - $remainder ;
           $noOfNotes = $amount / 5;
           echo "5 : ".$noOfNotes;
           $amount = $remainder;
           }else{
               echo "5: 0";
            }

        echo "<br />";
        echo "<br />";
        
        if($amount >= 2){
           $remainder = $amount % 2 ;
           $amount = $amount  - $remainder ;
           $noOfNotes = $amount / 2;
           echo "2 : ".$noOfNotes;
           $amount = $remainder;
           }else{
               echo "2: 0";
            }
        
    
        echo "<br />";
        echo "<br />";
        
        if($amount >= 1){
           $remainder = $amount % 1 ;
           $amount = $amount  - $remainder ;
           $noOfNotes = $amount / 1;
           echo "1 : ".$noOfNotes;
           $amount = $remainder;
           }else{
               echo "1: 0";
            }
        
    }

?>
