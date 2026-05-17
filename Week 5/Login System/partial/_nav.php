<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NAVBAR</title>
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        nav{
            width: 100%;
            padding: 20px;
            display: flex;
            align-items: center;
            justify-content:space-between;
            background-color: #767F9E;
        }
        nav .btn{
            display: flex;
            align-items: center;
        }
        nav .btn button{
            padding: 7px 13px 7px 13px;
            border-radius: 10px;
            border: none;
            cursor: pointer;
        }
        nav h1{
            color: white;
            margin-left: 40px;
        }
        nav ul{
            display: flex;
            gap: 30px;
            margin-right: 40px;
            list-style: none;
        }
        nav ul li a{
        text-decoration: none;
        color: white;
        }
    </style>
</head>
<body>
    <nav>
        <h1>Login/System</h1>
        <div class="btn">
            <ul>
            <li><a href="welcome.php">HOME</a></li>
            <li><a href="login.php">LOGIN</a></li>
            <li><a href="logout.php">LOGOUT</a></li>
            <li><a href="signup.php">SIGNUP</a></li>
        </ul>
        <button>Sign Up</button>
        </div>
    </nav>
</body>
</html>