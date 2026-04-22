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
            </tr>
            <?php
            $num = $_POST["fields"];
            for($i = 1 ; $i <= $num ; $i++){
                $name = $_POST["first_name".$i];
                $gender = $_POST["gender".$i];
                $country = $_POST["country".$i];
            ?>
            <?php if(isset($_POST["check".$i])){ ?>
            <tr>
                <td>
                    <input type="text" name="first_name<?php echo $i ?>" value=<?php echo $name ?>>
                </td>
                <td>
                   <input type="radio" name="gender<?php echo $i ?>" value="male" <?php if($gender == "male") echo checked?>>
                   <input type="radio" name="gender<?php echo $i ?>" value="female" <?php if($gender == "female") echo checked?>>
                </td>
                <td>
                    <select name="country<?php echo $i ?>">
                            <option value="Pakistan" <?php if($country == "Pakistan") echo selected ?>>Pakistan</option>
                            <option value="iran" <?php if($country == "iran") echo selected ?>>Iran</option>
                            <option value="iraq" <?php if($country == "iraq") echo selected ?>>Iraq</option>
                    </select>
                </td>
            </tr>
                <?php } else { ?>
                <input type="hidden" name="first_name<?php echo $i?> value=<?php echo $name ?>">
                <input type="hidden" name="gender<?php echo $i?> value=<?php echo $gender ?>">
                <input type="hidden" name="country<?php echo $i?> value=<?php echo $country ?>">
            <?php }} ?>
            <tr align=center>
                <td colspan="4"><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
        <input type="hidden" name="fields" value="<?php echo $num; ?>">
    </form>
    </center>
</body>
</html>