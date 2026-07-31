<?php
header("Content-type:text/html;charset=utf-8");
session_start();

if (!isset($_SESSION['user'])) {
    echo "<script>location.href='login.html';</script>";
    exit;
}
$username = $_SESSION['user'];
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title>menu</title>
</head>
<body>
    <h2>Welcome, <?php echo $username; ?>!</h2>
    <p>You have successfully logged in to the main page.</p>
    <a href="dp.php">Update Profile</a>
    <br><br>
    <a href="logout.php">Logout</a>
</body>
</html>