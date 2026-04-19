<!DOCTYPE html>
<html>
<head>
    <title>Professional Info</title>
</head>
<body>
<center>

<h2>Professional Information</h2>

<form method="POST" action="printCVData.php">

<!-- Hidden values from Page1 -->
<input type="hidden" name="name" value="<?php echo $_POST['name']; ?>">
<input type="hidden" name="father_name" value="<?php echo $_POST['father_name']; ?>">
<input type="hidden" name="gender" value="<?php echo $_POST['gender']; ?>">
<input type="hidden" name="country" value="<?php echo $_POST['country']; ?>">

<!-- Hidden values from Page2 -->
<input type="hidden" name="email" value="<?php echo $_POST['email']; ?>">
<input type="hidden" name="contact" value="<?php echo $_POST['contact']; ?>">
<input type="hidden" name="address" value="<?php echo $_POST['address']; ?>">

<table border="1">

<tr>
    <th>School Name</th>
    <td><input type="text" name="school" ></td>
</tr>

<tr>
    <th>School Duration</th>
    <td>
        From: <input type="date" name="school_from">
        To: <input type="date" name="school_to">
    </td>
</tr>

<tr>
    <th>College Name</th>
    <td><input type="text" name="college" ></td>
</tr>

<tr>
    <th>College Duration</th>
    <td>
        From: <input type="date" name="college_from">
        To: <input type="date" name="college_to">
    </td>
</tr>

<tr>
    <th>University Name</th>
    <td><input type="text" name="university" ></td>
</tr>

<tr>
    <th>University Duration</th>
    <td>
        From: <input type="date" name="uni_from">
        To: <input type="date" name="uni_to">
    </td>
</tr>

<tr>
    <th>Summary</th>
    <td><textarea name="summary"></textarea></td>
</tr>

<tr>
    <td colspan="2"><input type="submit" value="Generate CV"></td>
</tr>

</table>

</form>

</center>
</body>
</html>