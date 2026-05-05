<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
<body>
    <?php
    if(isset($_POST['checkRecord'])){
    $id = $_POST['userId'];
    $userName = $_POST['userName'];
    $f_name = $_POST['f_name'];
    $surname = $_POST['surname'];
    $dpt = $_POST['dept'];

    $usersData = [];

$usersData[] = [
    "id" => $id,
    "username" => $userName,
    "father_name" => $f_name,
    "surname" => $surname,
    "department" => $dpt
];

    ?>
    <center>
    <form action="view.php" method="POST">
        <table border=1 cellpadding=10>
            <tr>
                <th>Select</th>
                <th>ID</th>
                <th>Name</th>
                <th>Father_Name</th>
                <th>Surname</th>
                <th>Department</th>
            </tr>
            <?php foreach($usersData as $user){?>
            <tr>
                <td><input type="checkbox" name="check" value="1"></td>
                <td><?php echo $user['id']?></td>
                <td><?php echo $user['username']?></td>
                <td><?php echo $user['father_name']?></td>
                <td><?php echo $user['surname']?></td>
                <td><?php echo $user['department']?></td>
            </tr>                
            <?php }?>
            <tr align=center>
                <td colspan=6>
                <input type="submit" name="newRec" value="AddNewRecord">
                <input type="submit" name="deleteRecord" value="Delete">
                <input type="submit" name="deleteRecord" value="Edit"></td>
            </tr>
        </table>
    </form>
    </center>
    <?php }?>
</body>
</html>