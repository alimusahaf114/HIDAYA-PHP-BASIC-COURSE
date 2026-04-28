<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>23965-Musahaf-Ali</title>
</head>
<body>
    <!-- Note 
    Pahli wali assignment men , value input men hi rahe is requirment 
    ko men bhhul gyaaa thaa warnaaa wo bhi kr hi deta  ....
    -->

    <center>
    <form action="#" method="POST">
        <?php
        $count = 0;
    if(isset($_POST['submit'])){
    $text = $_POST["textString"];

    
    for($i = 0 ; isset($text[$i]);$i++){
       if($text[$i] == 'a' || $text[$i] == 'A'  ){
        $count++;
       }
    }
   
    } 
    ?>
    <table>
        <tr>
            <th>Enter text</th>
            <?php if(isset($_POST['submit'])){?>
            <td><input type="text" name="textString" value="<?php echo $text ;?>"></td>
            <?php }else { ?>
            <td><input type="text" name="textString"></td>
            <?php } ?>
            <td><input type="submit" name="submit" value="submit"></td>
        </tr>
    </table>

    <?php echo "Total a or A = $count";?>
    </form>
    
    </center>
</body>
</html>