<?php
header("Content-type:text/html;charset=utf-8");
session_start();

$host = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'testdb';


$conn = mysqli_connect($host, $dbuser, $dbpass, $dbname);
mysqli_set_charset($conn, 'utf8mb4');

if (!$conn) {
    die("login failed:" . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = trim($_POST['password'] ?? '');

    //简单校验
    if (empty($username) || empty($password)) {
        echo "<script>alert('Username and password cannot be empty');history.back();</script>";
        exit;
    }

    $sql_check = "SELECT id FROM user WHERE username = ?";
    $stmt = mysqli_prepare($conn, $sql_check);
    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if (mysqli_fetch_assoc($result)) {
        echo "<script>alert('Username already exists');history.back();</script>";
        exit;
    }

    $pwd_hash = password_hash($password, PASSWORD_DEFAULT);

    $sql_insert = "INSERT INTO user(username,password) VALUES(?,?)";
    $stmt2 = mysqli_prepare($conn, $sql_insert);
    mysqli_stmt_bind_param($stmt2, "ss", $username, $pwd_hash);

    if (mysqli_stmt_execute($stmt2)) {
        echo "<script>alert('Registration successful! Redirecting to login page.');location.href='login.html';</script>";
    } else {
        echo "<script>alert('Registration failed: " . mysqli_error($conn) . "');history.back();</script>";
    }
}
?>