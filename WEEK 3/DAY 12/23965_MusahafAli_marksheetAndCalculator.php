<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <form action="process.php" method="POST">
        
        <table cellspacing=2 cellpadding=10 border=2>
            <tr>
                <th colspan=2>EXTENDED MARKSHEET</th>
            </tr>
            <tr>
                <th>Computer:</th>
                <td><input type="text" name="computer"></td>
            </tr>
             <tr>
                <th>Economics:</th>
                <td><input type="text" name="economics"></td>
            </tr>
             <tr>
                <th>Finance:</th>
                <td><input type="text" name="finance"></td>
            </tr>
             <tr>
                <th>Managment:</th>
                <td><input type="text" name="managment"></td>
            </tr>
             <tr>
                <th>Programming:</th>
                <td><input type="text" name="programming"></td>
            </tr>
            <tr align=center>                
                <td colspan=2><input type="submit" name="marksheet"></td>
            </tr>
        </table>
    </form>
    </center>
    <br><br><br>
    <center>
    <form action="process.php" method="POST">
        
        <table cellspacing=2 cellpadding=10 border=2>
            <tr>
                <th colspan=2>CALCULATOR</th>
            </tr>
            <tr>
                <th>Value1:</th>
                <td><input type="text" name="value1"></td>
            </tr>
             <tr>
                <th>Value2:</th>
                <td><input type="text" name="value2"></td>
            </tr>
             <tr>
                <th>Operator:</th>
                <td><input type="text" name="op"></td>
            </tr>
            <tr align=center>                
                <td colspan=2><input type="submit" name="calculator"></td>
            </tr>
        </table>
    </form>
    </center>

</body>
</html>