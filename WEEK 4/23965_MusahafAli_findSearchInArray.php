<!DOCTYPE html>
<html>
<head>
    <title>Search Value from Array</title>
</head>
<body>

<form method="POST">
    Enter Value: <input type="text" name="value">
    <input type="submit" name="search" value="Search">
</form>

<?php

if(isset($_POST['search'])){

    $search = $_POST['value'];

    $arr = [10, 23, 45, 67, 89, 123, 56];

    $found = false;

    for($i = 0; $i < count($arr); $i++){

        if($arr[$i] == $search){
            echo "Value $search found on position " . ($i + 1)." and Index No: $i";
            $found = true;
            break;
        }
    }

    if($found == false){
        echo "Value not found";
    }
}

?>

</body>
</html>