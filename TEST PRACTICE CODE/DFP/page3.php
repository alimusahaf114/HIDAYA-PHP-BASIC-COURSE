<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 1</title>
</head>
<body>
    <center>
    <?php if(isset($_POST['submit'])){?>
    <form action="page4.php" method="POST">
        <?php 
        $num = $_POST['fields']
        ?>
        <table border="1" cellpadding="5">
            <tr>
                <th>S/No</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Country</th>
                <th>Select</th>
            </tr>
            <?php for($i = 1 ; $i <= $num ; $i++){ 
                $name = $_POST['first_name'.$i];
                $gender = $_POST['gender'.$i];
                $country = $_POST['country'.$i];
                
            ?>
            <tr>
                <td><?php echo $i ;?></td>
                <td> 
                <?php echo $name ?>
                <input type="hidden" name="first_name<?php echo $i?>" value="<?php echo $name ?>"> 
                </td>
                <td> 
                    <?php echo $gender ?>
                <input type="hidden" name="gender<?php echo $i?>" value="<?php echo $gender ;?>">
               </td>
               <td>
                <?php echo $country ?>
                <input type="hidden" name="country<?php echo $i ?>" value="<?php echo $country?>">
               </td>
               <td>
                <input type="checkbox" name="check<?php echo $i?>" value="1">
               </td>
            </tr>
            <?php } ?>
            
            <tr align="center">
                <td colspan="5"><input type="submit" name="submit"></td>
            </tr>
            <?php }else{
                echo "<h1> Please insert data first </h1>";
            }?>
        </table>
    </form>
    </center>
</body>
</html>