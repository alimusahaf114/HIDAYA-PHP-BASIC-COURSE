<!DOCTYPE html>
<html>
<head>
    <title>Page4 - CV</title>
</head>
<body>
<center>

<h2>RESUME</h2>

<table border="1" cellpadding="5">

<tr><th colspan="2">Personal Info</th></tr>
<tr><td>Name</td><td><?php echo $_POST['name']; ?></td></tr>
<tr><td>Father Name</td><td><?php echo $_POST['father_name']; ?></td></tr>
<tr><td>Gender</td><td><?php echo $_POST['gender']; ?></td></tr>
<tr><td>Country</td><td><?php echo $_POST['country']; ?></td></tr>

<tr><th colspan="2">Contact Info</th></tr>
<tr><td>Email</td><td><?php echo $_POST['email']; ?></td></tr>
<tr><td>Contact</td><td><?php echo $_POST['contact']; ?></td></tr>
<tr><td>Address</td><td><?php echo $_POST['address']; ?></td></tr>

<tr><th colspan="2">Education</th></tr>
<tr>
<td>School</td>
<td><?php echo $_POST['school']." (".$_POST['school_from']." to ".$_POST['school_to'].")"; ?></td>
</tr>

<tr>
<td>College</td>
<td><?php echo $_POST['college']." (".$_POST['college_from']." to ".$_POST['college_to'].")"; ?></td>
</tr>

<tr>
<td>University</td>
<td><?php echo $_POST['university']." (".$_POST['uni_from']." to ".$_POST['uni_to'].")"; ?></td>
</tr>

<tr><th>Summary</th><td><?php echo $_POST['summary']; ?></td></tr>

</table>

</center>
</body>
</html>