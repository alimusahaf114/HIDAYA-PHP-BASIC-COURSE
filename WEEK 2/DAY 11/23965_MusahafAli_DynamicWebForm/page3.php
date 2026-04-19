<!DOCTYPE html>
<html>
<head>
    <title>Page 3 - Result Table</title>
</head>
<body>
<center>

<h2>Submitted Data</h2>

<table border="1">
    <tr>
        <th>Name</th>
        <th>Gender</th>
        <th>Country</th>
    </tr>

<?php

// number of users (must be passed from page2 hidden input)
$num = $GET['fields_input'];

for($i = 1; $i <= $num; $i++) {
    $name = $_POST["name$i"];
    $gender = $_POST["gender$i"];
    $country = $_POST["country$i"];
?>

<tr>
    <td><?php echo $name; ?></td>
    <td><?php echo $gender; ?></td>
    <td><?php echo $country; ?></td>
</tr>

<?php } ?>

</table>

</center>
</body>
</html>