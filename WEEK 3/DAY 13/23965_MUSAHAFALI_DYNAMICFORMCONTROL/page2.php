<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 2</title>
</head>
<body>
    <center>
    <form action="page3.php" method="POST">
        <table border="1" cellspacing=2 cellpadding=10>
            <tr>
                <th>Name</th>
                <th>Gender</th>
                <th>Country</th>
            </tr>
            <?php
            $num = $_POST["fields"] ;
            for($i = 1 ; $i <= $num ; $i++){?>
            <tr>
                <td><input type="text" name="first_name<?php echo $i ?>"></td>
                <td>Male:<input type="radio" name="gender<?php echo $i ?>" value="male">
                Female:<input type="radio" name="gender<?php echo $i ?>" value="female"></td>
            <td>
                <select name="country<?php echo $i ?>">
                    <option value="pakistan">pakistan</option>
                    <option value="iran">iran</option>
                    <option value="iraq">iraq</option>
                </select>
            </td>
            </tr>
            <?php } ?>
            <tr align=center>
                <td colspan="3"><input type="submit" name="submit"></td>
            </tr>
        </table>
        <input type="hidden" name="fields" value="<?php echo $num; ?>">
    </form>
    </center>
</body>
</html>