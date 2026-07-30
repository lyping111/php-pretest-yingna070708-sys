<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
    <style>
        {
            margin:0;
            padding:0;
            box-sizing:border-box;
        }
        body{
            backgound:#f0f4f8;
            display:flex;
            justify-content:center;
            align-items:center;
            height:100vh;
        }
        login-box{
            backgourd:white;
            width:400px;
            padding:40px 30px;
            border-radius:12px;
            box-shadow:0 0 15px rgba(0, 0, 0, 0.2);
        }
        login-title{
            color:#333;
            font-size:24px;
            text-align:center;
            margin-bottom:30px;
            font-weight:bold;
        }
        input-item{
            margin-bottom:20px;
        }
        input-item input{
            width::100;
            heigt:44px;
            padding:0 15px;
            border:1px solid #ccc;
            border-radius:6px;
            font-size:16px;
        }
        login-button{
            width:100%;
            height:46px;
            background-color:#007bff;
            color:white;
            border:none;
            border-radius:6px;
            font-size:18px;
            cursor:pointer;
        }
        tip-text{
            color:#666;
            font-size:15px;
            text-align:center;
            margin-top:15px;
        }
    </style>
</head>
<body>
    <div class="login-box">
        <div class="login-title">Login</div>
        <form action="login.php" method="post">
            <div class="input-item">
                <input type="text" name="username" placeholder="Username" required>
            </div>
            <div class="input-item">
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <button type="submit" class="login-button">Login</button>
        </form>
        <div class="tip-text">Don't have an account? <a href="#">Sign up</a></div>
</body>
</html>