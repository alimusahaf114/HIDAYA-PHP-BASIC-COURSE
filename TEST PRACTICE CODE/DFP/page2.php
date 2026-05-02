<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 3</title>
</head>
<body>
    <center>
    <?php if(isset($_POST['submit'])){?>
    <form action="page3.php" method="POST">
        <?php 
        $num = $_POST['fields']
        ?>
        <table border="1" cellpadding="5">
            <tr>
                <th>S/No</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Country</th>
            </tr>
            <?php for($i = 1 ; $i <= $num ; $i++){ ?>
            <tr>
                <td><?php echo $i ;?></td>
                <td> <input type="text" name="first_name<?php echo $i?>"> </td>
                <td> 
                Male: <input type="radio" name="gender<?php echo $i?>" value="male">
                Female: <input type="radio" name="gender<?php echo $i?>" value="female">
               </td>
               <td>
                <select name="country<?php echo $i ?>">
                    <option value="Pakistan">Pakistan</option>
                    <option value="America">America</option>
                    <option value="Canada">Canada</option>
                </select>
               </td>
            </tr>
            <?php } ?>
            
            <tr align="center">
                <td colspan="4"><input type="submit" name="submit"></td>
            </tr>
            <?php }else{
                echo "<h1> Please insert data first </h1>";
            }?>
            <input type="hidden" name="fields" value="<?php echo $num ?>">
        </table>
    </form>
    </center>
</body>
</html>