<?php
header("Content-type:text/html;charset=utf-8");
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = trim($_POST['password'] ?? '');

    if ($username === "root" && $password === "1234") {
        $_SESSION['user'] = $username;
        echo "<script>alert('login successful');location.href='index.html';</script>";
    } else {
        echo "<script>alert('Invalid username or password');history.back();</script>";
    }

    
    $conn = mysqli_connect("localhost","root","1234","login page");
    $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
    $res = mysqli_query($conn,$sql);
    if(mysqli_fetch_assoc($res)){
        $_SESSION['user'] = $username;
        header("Location: index.html");
    }else{
        echo "<script>alert('Invalid username or password');history.back();</script>";
    }
}
?>