<?php

// $name = "   Musahaf        Ali      ";
// echo $name[-7]; used to find index value from last 
// $name = +9900000;// for this answer is 7
// $name = -9900000; // for this answer is 8
// echo strlen($name);
// $a = true;
// $b = true+true;

// echo $a+$b; ;
// $a = 20 ;
// echo $a / "5";
// $a = 8 ;
// $b = "7" ;
// $c = $a.$b;
// echo $c*4;


// $str = "Hidaya Trust OrgAnization";
// $count = 0 ;
// for($i = 0 ; isset($str[$i]) ; $i++){
//     if($str[$i] == 'a' || $str[$i] == 'A'){
//     $count++;
//     }
// }
// echo "Total Number of A or a = $count";

// $name = "Musahaf";
// $newString = '';
// for($i = (strlen($name)- 1 ); isset($name[$i]) ; $i--){
//     if($i == -1){
//         break;
//     } else {
//         $newString .= $name[$i];
//     }
// }
// echo $newString ;
// $name = "Musahaf";
// $newString = '';
// for($i = (strlen($name) - 1 ); isset($name[$i]) ; $i--){
    
//         $newString .= $name[$i];
    
// }
// echo $newString ;
// $name = "Hidaya Trust Foundation";
// $count = 0 ;
// for($i = 0 ; isset($name[$i]) ; $i++){
//     if($name[$i] == 'a' ||$name[$i] == 'e'||$name[$i] == 'i'||$name[$i] == 'o'||$name[$i] == 'u'){
//         $count++;
//     }
// }
// echo "The Number of vowels are = $count";

// $name = "Musahaf Al i d d f f ";
// $newString = '';
// for($i = 0 ; isset($name[$i]) ; $i++){
//     if($name[$i] !== ' '){
//     $newString .= $name[$i];
//     }
// }

// echo "The result is here = $newString";
// $name = "  Ali  ";
// echo strlen($name);
// echo "<br/>";
// echo rtrim($name);
// echo "<br/>";
// echo strlen($name);

// $name = "    Hidaya   ";
// echo strlen($name);
// echo "<br />";
// echo strlen(ltrim($name));
// echo "<br />";
// echo strlen(rtrim($name));
// echo "<br />";
// echo strlen(trim($name));
// $name = "Musahaf";
// echo substr("Musahaf" ,-4 , strlen($name)-6)

// echo substr_count("Muasahaf", 'a' , 4 ,5);
// echo substr_count("Pak chik pak raja babu", 'babu' , 0)
// $name = "My name is Musahafgood developersgood developersgood developersgood developersgood developersgood developers Ali and I am learning from lot of good developers like no one can okay..";
// echo str_replace('developer','mechanic',$name ,$a);
// echo $a;
// echo ceil(0.0305);
// echo floor(-2.8)]
// echo ucfirst("ali")
// echo ucwords("hwllo wor ddkk")
// echo rand(1,9)
// $text = "apple banana mango";

// print_r(explode(" ", $text));
// echo 'abc'+5;
// $name = "Ali";
// echo $name[0].$name[-1]
// echo isset($name[0])
// $text = "one,two,three";
// $arr = explode(",", $text);
// echo $arr;
// $arr = ["A", "B", "C"];
// echo implode("-", $arr);
$text = "abc";
$new = "";

for($i = 0; isset($text[$i]); $i++){
    $new .= $text[$i] . $i;
}
echo $new;
?>