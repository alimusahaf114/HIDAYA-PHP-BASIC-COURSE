<!DOCTYPE html>
<html>
<head>
    <title>Page 4 - Edit Selected</title>
</head>
<body>
<center>

<form action="page3.php" method="POST">

<table border="2" cellpadding="10">
    <tr>
        <th>Name</th>
        <th>Gender</th>
        <th>Country</th>
    </tr>

<?php
$num = $_POST['fields'];

for($i = 1; $i <= $num; $i++){

    $name = $_POST['first_name'.$i];
    $gender = $_POST['gender'.$i];
    $country = $_POST['country'.$i];

    if(isset($_POST['check'.$i])){
?>

    <tr>
        <td>
            <input type="text" name="first_name<?php echo $i ?>" value="<?php echo $name ?>">
        </td>

        <td>
            <input type="radio" name="gender<?php echo $i ?>" value="male" <?php if($gender=="male") echo "checked"; ?>> Male
            <input type="radio" name="gender<?php echo $i ?>" value="female" <?php if($gender=="female") echo "checked"; ?>> Female
        </td>

        <td>
            <select name="country<?php echo $i ?>">
                <option value="pakistan" <?php if($country=="pakistan") echo "selected"; ?>>Pakistan</option>
                <option value="india" <?php if($country=="india") echo "selected"; ?>>India</option>
                <option value="usa" <?php if($country=="usa") echo "selected"; ?>>USA</option>
            </select>
        </td>
    </tr>

<?php
    } else {
?>

    <input type="hidden" name="first_name<?php echo $i ?>" value="<?php echo $name ?>">
    <input type="hidden" name="gender<?php echo $i ?>" value="<?php echo $gender ?>">
    <input type="hidden" name="country<?php echo $i ?>" value="<?php echo $country ?>">

<?php
    }
}
?>

</table>

<input type="hidden" name="fields" value="<?php echo $num; ?>">

<br><br>
<input type="submit" value="Update Data">

</form>

</center>
</body>
</html>