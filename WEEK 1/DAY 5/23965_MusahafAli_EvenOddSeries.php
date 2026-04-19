<?php
$even = "";
$odd = "";
for($i = 1 ; $i <= 100 ; $i++){
    if($i%2 == 0){
        $even .= " ".$i;
    }else{
        $odd .= " ".$i;
    }
    
}

echo $even;
echo "<br />";
echo $odd;

?>