<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>23965-Musahaf-Ali</title>
</head>
<body>
    <!-- Note 
    Aap ko code agar copy pasted lage to kindly understand , code flow same hi hai bus function 
    alag hai so same copy assignment ko copy paste karke logic change kiya hai
    -->

    <center>
    <form action="#" method="POST">
        <?php
        $newString = '';
    if(isset($_POST['submit'])){
    $text = $_POST["textString"];

    
    for($i = 0 ; isset($text[$i]);$i++){
       if($text[$i] !== 'a' AND $text[$i] !== 'A'  ){
        $newString .= $text[$i];
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

    <?php echo "Total a or A = $newString";?>
    </form>
    
    </center>
</body>
</html>