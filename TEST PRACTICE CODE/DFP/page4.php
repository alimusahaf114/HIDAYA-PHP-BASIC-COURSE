<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 4</title>
</head>
<body>
    <center>
    <?php if(isset($_POST['submit'])){?>
    <form action="page3.php" method="POST">
        <?php 
        $num = $_POST['fields']
        ?>
        <table border="1" cellpadding="5">
            <tr>
                <th>S/No</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Country</th>
            </tr>
            <?php for($i = 1 ; $i <= $num ; $i++){ 
                $name = $_POST['first_name'.$i];
                $gender = $_POST['gender'.$i];
                $country = $_POST['country'.$i];
            ?>
            <?php if(isset($_POST['check'.$i])){?>
            <tr>
                <td><?php echo $i ;?></td>
                <td> 
                <input type="text" name="first_name<?php echo $i ;?>" value="<?php echo $name ;?>">
                </td>
                <td> 
                   Male<input type="radio" name="gender<?php echo $i ;?>" value="male" <?php if($gender == 'male') echo "checked" ?>>
                   Female<input type="radio" name="gender<?php echo $i ;?>" value="female" <?php if($gender == 'female') echo "checked"?>>
               </td>
               <td>
                <select name="country<?php echo $i ;?>">
                    <option value="Pakistan" <?php if($country == "Pakistan") echo "selected"?>>Pakistan</option>
                    <option value="America" <?php if($country == "America") echo "selected"?>>America</option>
                    <option value="Canada" <?php if($country == "Canada") echo "selected"?>>Canada</option>
                </select>
               </td>
               
            </tr>
            <?php } else {?>
                <input type="hidden" name="first_name$i" value="$name">
                <input type="hidden" name="gender$i" value="$gender">
                <input type="hidden" name="country$i" value="$country">
            
            <?php}?>
            <?php } ?>
            
            <tr align="center">
                <td colspan="5"><input type="submit" name="submit"></td>
            </tr>
            <?php }else {echo "<h1> Please insert data first </h1>"; }?>
        </table>
    </form>
    </center>
</body>
</html>