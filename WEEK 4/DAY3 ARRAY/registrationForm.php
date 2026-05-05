<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
<body>
    <center>
    <form action="view.php" method="POST">
        <table border=1 cellpadding=10>
            <tr>
                <th>ID</th>
                <td><input type="text" name="userId" ></td>
            </tr>
            <tr>
                <th>Name</th>
                <td><input type="text" name="userName"></td>
            </tr>
            <tr>
                <th>Father Name:</th>
                <td><input type="text" name="f_name"></td>
            </tr>
            <tr>
                <th>Surname</th>
                <td><input type="text" name="surname"></td>
            </tr>
            <tr>
            <th>Department</th>
            <td>
                <select name="dept">
                    <option value="Computer Science"> Computer Science</option>
                    <option value="Information Technology"> Information Technology</option>
                    <option value="Software Engineering"> Software Engineering</option>
                </select>
            </td>
            </tr>
            <tr align=center>
                <td colspan=2>
                    <input type="submit" name="addData" value="AddData">
                <input type="submit" name="checkRecord" value="checkRecord"></td>
            </tr>
        </table>
    </form>
    </center>
</body>
</html>