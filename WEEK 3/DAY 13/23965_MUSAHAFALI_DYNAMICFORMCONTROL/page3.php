<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 3</title>
</head>
<body>
    <center>
    <form action="page4.php" method="POST">
        <table border="1" cellspacing=2 cellpadding=10>
            <tr>
                <th>Name</th>
                <th>Gender</th>
                <th>Country</th>
                <th>Edit</th>
            </tr>
            <?php
            $num = $_POST["fields"];
            for($i = 1 ; $i <= $num ; $i++){
                $name = $_POST["first_name".$i];
                $gender = $_POST["gender".$i];
                $country = $_POST["country".$i];
            ?>
            <tr>
                <td>
                    <?php echo $name ; ?>
                    <input type="hidden" name="first_name<?php echo $i ?>" value=<?php echo $name ?>>
                </td>
                <td>
                    <?php echo $gender ; ?>
                   <input type="hidden" name="gender<?php echo $i ?>" value=<?php echo $gender ?>>
                </td>
                <td>
                    <?php echo $country ; ?>
                   <input type="hidden" name="country<?php echo $i ?>" value=<?php echo $country ?>>
                </td>
                <td><input type="checkbox" name="check<?php echo $i?>" value="1"></td>            
            </tr>
            <?php } ?>
            <tr align=center>
                <td colspan="4"><input type="submit" name="update" value="Edit"></td>
            </tr>
        </table>
        <input type="hidden" name="fields" value="<?php echo $num; ?>">
    </form>
    </center>
</body>
</html>