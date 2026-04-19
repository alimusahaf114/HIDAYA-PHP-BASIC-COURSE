<?php
// This is where I checked Whether data is recieved or not ...
        //  echo "<pre>";
        //  print_r($_POST);
        //  echo "</pre>";
   
    $count = 0 ;

    if(isset($_POST["Stipend"])){
        $count++;
    }
    if(isset($_POST["Discipline"])){
        $count++;
    }
    if(isset($_POST["Attendance"])){
        $count++;
    }
    if(isset($_POST["Assignment"])){
        $count++;
    }

    if($count >=3 AND isset($_POST["Agree"])){
        echo "You are Selected...";
    }else if(($count >=3 AND isset($_POST["Agree"])==FALSE)){

        echo "Fail";
    } else if($count < 3){
        echo "Fail";
    }
/*
else if(($count >=3 AND isset($_POST["Agree"])==FALSE)){
        
        echo "Fail";
    } else if($count < 3){
        echo "Fail";
    }
    ********************* Pahli Baaat *********************
    Ye dono conditions same kaam kar rahi hain technically to ek hi condition use kr skte hain okay....
    
    ************************** Dusri Baaat ***************
    page2 mention hai lekin wahan direct krne ke liye header ka use krna hoga jo covered nhi hai yet 
*/


?>