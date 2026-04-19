<!DOCTYPE html>
<html>
<head>
    <title>Personal Info</title>
</head>
<body>
<center>

<h2>Personal Information</h2>

<form method="POST" action="contactInfo.php">
<table border="1">

<tr>
    <th>Name</th>
    <td><input type="text" name="name" ></td>
</tr>

<tr>
    <th>Father Name</th>
    <td><input type="text" name="father_name" ></td>
</tr>

<tr>
    <th>Gender</th>
    <td>
        <input type="radio" name="gender" value="male" > Male
        <input type="radio" name="gender" value="female"> Female
    </td>
</tr>

<tr>
    <th>Country</th>
    <td>
        <select name="country">
            <option value="">Select</option>
            <option>Pakistan</option>
            <option>Bangladesh</option>
            <option>Iran</option>
        </select>
    </td>
</tr>

<tr>
    <td colspan="2"><input type="submit"></td>
</tr>

</table>
</form>

</center>
</body>
</html>