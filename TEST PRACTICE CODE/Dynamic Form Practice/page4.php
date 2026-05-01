<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic form page 1</title>
</head>
<body>
    <?php 
    if(isset($_POST['submit'])){
    ?>
    <center>
    <form action="page3.php" method="POST" >
        <table border="1"  cellpadding=10>
            <?php 
            $num = $_POST['fields'];
            ?>
            <tr>
               <th>S_No</th>
               <th>Name</th>
               <th>Gender</th>
               <th>country</th>
            </tr>
            <?php 
            for($i = 1 ; $i <= $num ; $i++){
                $name = $_POST['first_name'.$i];
                $country = $_POST['country'.$i];
                $gender = $_POST['gender'.$i];
            ?>
            <?php if(isset($_POST['edit'.$i])){?>
            <tr>
                <td style="font-weight: bold;"><?php echo $i  ?></td>
                <td><input type="text" name="first_name<?php echo $i ?>" value="<?php echo $name; ?>"></td>
                <td>
                   Male <input type="radio" name="gender<?php echo $i?>"value="male" <?php if($gender == "male") echo "checked" ?> >
                   Female <input type="radio" name="gender<?php echo $i?>" value="female" <?php if($gender == "female") echo "checked" ?> >
                </td>
                <td>
                    <select name="country<?php echo $i ?>" >
                        <option value="pakistan" <?php if($country == "pakistan") echo "selected"?>>Pakistan</option>
                        <option value="Iran" <?php if($country == "Iran") echo "selected"?>>Iran</option>
                        <option value="Iran" <?php if($country == " Iraq") echo "selected"?>>Iraq</option>
                    </select>
                </td>

            </tr>


            <?php
            }else {?>
                <input type="hidden" name="first_name<?php echo $i?>" value="<?php echo $name ?>">
                <input type="hidden" name="gender<?php echo $i?>" value="<?php echo $gender ?>">
                <input type="hidden" name="country<?php echo $i?>" value="<?php echo $country ?>">
           <?php }}
            ?>
            <tr align=center>
                <td colspan=5>
                    <input type="submit" name="submit" >
                </td>
            </tr>
        </table>
        <td><input type="hidden" name="fields" value=<?php echo $num ?>></td>
    </form>
</center>
<?php }else { echo "<h1> Please Add input fields First </h1>";}?>

</body>
</html>