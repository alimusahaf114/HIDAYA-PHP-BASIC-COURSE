<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login System</title>
    <style>
        .container{
            width: 400px;
            height: auto;
            padding: 30px;
            display: flex;
            flex-direction: column;
            gap: 10px;
            margin-left: 450px;
        }
        form{
            display: flex;
            flex-direction: column;
            gap: 20px;
        }
        .form-group{
            display: flex;
            flex-direction: column;
        }
        input{
            padding: 10px;
            border-radius: 15px;
            border: none;
            border-bottom: 1px solid gray;
            outline: none;
        }
        #btn{
            background-color: lightblue;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <?php
    require('partial/_nav.php')
    ?>
    <div  class="container">
        <h1>Sign Up to Our Website</h1>
        <form action="./partial/storeData.php" method="POST">
            <div class="form-group">
                <label for="username">Username</label>
                <input class="inp" type="email" name="useremail" id="useremail" placeholder="Type your username">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input class="inp" type="password" name="password" id="userpassword" placeholder="Type your password">
            </div>
            <div class="form-group">
                <label for="password">Confirm Password</label>
                <input class="inp" type="password" name="confirmPass" id="userpassword" placeholder="confirm password">
                <small style="display:block">Make sure to type same password as above</small>
            </div>
            <div class="form-group">
                <input type="submit" name="submit" value="Signup" id="btn">
            </div>
        </form>
    </div>
</body>
</html>