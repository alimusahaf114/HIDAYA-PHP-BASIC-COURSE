<!DOCTYPE html>
<html>
<head>
    <title>Contact Info</title>
</head>
<body>
<center>

<h2>Contact Information</h2>

<form method="POST" action="professionalInfo.php">

<input type="hidden" name="name" value="<?php echo $_POST['name']; ?>">
<input type="hidden" name="father_name" value="<?php echo $_POST['father_name']; ?>">
<input type="hidden" name="gender" value="<?php echo $_POST['gender']; ?>">
<input type="hidden" name="country" value="<?php echo $_POST['country']; ?>">

<table border="1">

<tr>
    <th>Email</th>
    <td><input type="email" name="email" ></td>
</tr>

<tr>
    <th>Contact</th>
    <td><input type="text" name="contact" ></td>
</tr>

<tr>
    <th>Address</th>
    <td><textarea name="address" ></textarea></td>
</tr>

<tr>
    <td colspan="2"><input type="submit"></td>
</tr>

</table>

</form>

</center>
</body>
</html>