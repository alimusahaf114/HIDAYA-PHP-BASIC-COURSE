<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Multiplication Tables</title>
</head>
<body>

<table border="1" cellpadding="15">
    <?php 
    $limit = 30;  
    for($i = 1; $i <= $limit; $i++) {

        if(($i - 1) % 5 == 0) {
            echo "<tr>";
        }
    ?>
        <td>
            <?php
            for($j = 1; $j <= 10; $j++) {
                   echo "$i * $j = " . ($i * $j) . "<br>";
            }
            ?>
        </td>
    <?php
      
        if($i % 5 == 0) {
            echo "</tr>";
        }
    }
    ?>
</table>

</body>
</html>