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
    <form action="page2.php" method="POST" >
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
            ?>

            <tr>
                <td style="font-weight: bold;"><?php echo $i  ?></td>
                <td><input type="text" name="first_name<?php echo $i ?>" ></td>
                <td>
                    Male: <input type="radio" name="gender<?php echo $i ?>" value="male">
                    Female: <input type="radio" name="gender<?php echo $i ?>" value="female">
                </td>
                <td>
                    <select name="country<?php echo $i ?>">
                        <option value="pakistan">pakistan</option>
                        <option value="Iran">Iran</option>
                        <option value="Iraq">Iraq</option>
                    </select>
                </td>
            </tr>


            <?php
            }
            ?>
            <tr align=center>
                <td colspan=4>
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