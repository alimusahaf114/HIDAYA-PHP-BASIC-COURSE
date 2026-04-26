<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>23965-Musahaf-Ali</title>
</head>
<body>
    <center>
    <form action="#" method="POST">
    <table>
        <tr>
            <th>Enter text</th>
            <td><input type="text" name="textString"></td>
            <td><input type="submit" name="submit" value="submit"></td>
        </tr>
    </table>
    </form>
    <?php
    $text = $_POST["textString"];
    for($i = 0 ; isset($text[$i]);$i++){
        echo $text[$i];
        echo "<br/>";
    }

    ?>
    </center>
</body>
</html>