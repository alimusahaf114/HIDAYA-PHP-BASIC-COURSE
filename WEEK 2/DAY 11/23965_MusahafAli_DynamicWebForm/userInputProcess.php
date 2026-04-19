<!DOCTYPE html>
<html>
<head>
    <title>Page 2</title>
</head>
<body>
<center>

<form method="POST" action="page3.php">
<table border="1">

<?php
$num = $_POST['fields_input'];

for($i = 1; $i <= $num; $i++) {
?>

<tr>
    <th>Name <?php echo $i; ?></th>
    <td><input type="text" name="name<?php echo $i; ?>"></td>
</tr>

<tr>
    <th>Gender</th>
    <td>
        <input type="radio" name="gender<?php echo $i; ?>" value="Male"> Male
        <input type="radio" name="gender<?php echo $i; ?>" value="Female"> Female
    </td>
</tr>

<tr>
    <th>Country</th>
    <td>
        <select name="country<?php echo $i; ?>">
            <option value="">Select</option>
            <option value="Pakistan">Pakistan</option>
            <option value="Iran">Iran</option>
            <option value="Iraq">Iraq</option>
        </select>
    </td>
</tr>

<?php } ?>
<tr>
    <input type="hidden" name="user" value="<?php echo $num; ?>">
</tr>
<tr>
    <td colspan="2"><input type="submit"></td>
</tr>

</table>
</form>

</center>
</body>
</html>