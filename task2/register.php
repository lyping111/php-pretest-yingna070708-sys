<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            background: #f0f4f8;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .register-box {
            background: white;
            width: 380px;
            padding: 40px 30px;
            border-radius: 12px;
            box-shadow: 0 0 15px #ddd;
        }
        .register-title {
            color: #5522dd;    
            font-size: 42px;   
            text-align: center;
            margin-bottom: 30px;
            font-weight: bold;
        }
        .input-item {
            margin-bottom: 18px;
        }
        .input-item input {
            width: 100%;
            height: 44px;
            padding: 0 15px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 16px;
        }
        .register-btn {
            width: 100%;
            height: 46px;
            background: #5522dd;
            color: #fff;
            border: none;
            border-radius: 6px;
            font-size: 18px;
            cursor: pointer;
        }
        .back-login {
            margin-top: 16px;
            text-align: center;
            font-size: 14px;
        }
        .back-login a {
            color: #5522dd;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="register-box">
        <h1 class="register-title">Register</h1>
        <div class="input-item">
            <input type="text" placeholder="Username">
        </div>
        <div class="input-item">
            <input type="email" placeholder="Email">
        </div>
        <div class="input-item">
            <input type="password" placeholder="Password">
        </div>
        <div class="input-item">
            <input type="password" placeholder="Confirm Password">
        </div>
        <button class="register-btn">Sign Up</button>
        <div class="back-login">
            Already have an account? <a href="#">Go Login</a>
        </div>
    </div>
</body>
</html>