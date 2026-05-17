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
    <?php
            session_start();
            $error = null;
            if(isset($_POST['submit']))
            {
            $_SESSION['username'] = $_POST['useremail'];

            if($_POST['password'] == $_POST['confirmPass'])
            {
            $_SESSION['password'] = $_POST['password'];
            }else{
                $error =  "<p style='color: red;'> Wrong Password </p>";
            }}
    ?>
    <div  class="container">
        <h1>Sign Up to Our Website</h1>
        <form action="signup.php" method="POST">
            <div class="form-group">
                <label for="username">Username</label>
                <input class="inp" type="email" name="useremail" id="useremail" value="<?php if($error) echo $_POST['useremail']; ?>" placeholder="Type your username">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input class="inp" type="password" name="password" id="userpassword" value="<?php if($error) echo $_POST['password']; ?>" placeholder="Type your password" required>
            </div>
            <div class="form-group">
                <label for="password">Confirm Password</label>
                <input class="inp" type="password" name="confirmPass" id="userpassword" placeholder="confirm password" required>
                <small style="display:block"><?php 
                if($error){
                    echo $error;
                }
                ?></small>
            </div>
            <div class="form-group">
                <input type="submit" name="submit" value="Signup" id="btn">
            </div>
        </form>
    </div>
</body>
</html>