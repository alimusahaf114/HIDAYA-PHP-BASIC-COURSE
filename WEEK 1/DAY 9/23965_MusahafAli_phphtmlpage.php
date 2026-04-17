<!DOCTYPE html>
<html>
<head>
    <title>PHP List Task</title>
</head>
<body>

<?php
$type = "disc"; 
?>

<?php if($type == "square" || $type == "disc" || $type == "circle") { ?>

  
    <ul type="<?php echo $type; ?>">

        <?php
        if($type == "square") {
            for($i = 2; $i <= 10; $i += 2) {
                echo "<li>$i</li>";
            }

        } elseif($type == "disc") {
            for($i = 1; $i <= 9; $i += 2) {
                echo "<li>$i</li>";
            }

        } elseif($type == "circle") {
            for($i = 1; $i <= 5; $i++) {
                echo "<li>" . ($i * $i) . "</li>";
            }
        }
        ?>

    </ul>

<?php } else { ?>

    <p style="padding:20px ; font-size:30px;  background-color:red ; color:white;">Not a valid type</p>

<?php } ?>

</body>
</html>