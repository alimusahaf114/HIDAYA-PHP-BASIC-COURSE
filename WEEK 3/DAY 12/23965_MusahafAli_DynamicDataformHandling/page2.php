<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page 1</title>
</head>
<body>
    <center>
    <form action="page3.php" method="POST">
        
        <table cellspacing=2 cellpadding=10 border=2>
             <tr>
                <th colspan=4>Enter your Data....</th>
            </tr>
            <tr>
                <th>Name</th>
                <th>Gender</th>
                <th>Country</th>
            </tr>
            <?php
            $num = $_POST['fields'];
            for($i = 1 ; $i <= $num ; $i++){ ?>
             <tr>
                <td><input type="text" name="first_name<?php echo $i?>"></td>
                <td>Male<input type="radio" name="gender<?php echo $i?>" value=male>
                Female<input type="radio" name="gender<?php echo $i?>" value=female>
            </td>
            <td><select name="country<?php echo $i ?>">
                <option value="">--select---</option>
                <option value="pakistan">Pakistan</option>
                <option value="india">india</option>
                <option value="usa">usa</option>
            </select></td>
            </tr>
            <?php } ?>
           
            <tr align=center>                
                <td colspan=4><input type="submit" name="marksheet"></td>
            </tr>
        </table>
        
        <input type="hidden" name="fields" value="<?php echo $num ?>">
              
    </form>
    </center>
</body>
</html>