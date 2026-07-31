<?php
header("Content-type:text/html;charset=utf-8");
session_start();

if (!isset($_SESSION['user'])) {
    echo "<script>location.href='login.html';</script>";
    exit;
}

$host = 'localhost';
$dbuser = 'root';
$dbpass = '1234';
$dbname = 'testdb';
$conn = mysqli_connect($host, $dbuser, $dbpass, $dbname);
mysqli_set_charset($conn, 'utf8mb4');

$username = $_SESSION['user'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $newpwd = trim($_POST['newpassword'] ?? '');

    if (!empty($newpwd)) {
        $pwd_hash = password_hash($newpwd, PASSWORD_DEFAULT);
        $sql = "UPDATE user SET password=? WHERE username=?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "ss", $pwd_hash, $username);
        if(mysqli_stmt_execute($stmt)){
            echo "<script>alert('Password updated successfully!');location.href='dp.html';</script>";
        }else{
            echo "<script>alert('Failed to update password');</script>";
        }
    }else{
        echo "<script>alert('Password cannot be empty');</script>";
    }
}

$sql_get = "SELECT username FROM user WHERE username=?";
$stmt = mysqli_prepare($conn, $sql_get);
mysqli_stmt_bind_param($stmt, "s", $username);
mysqli_stmt_execute($stmt);
$row = mysqli_fetch_assoc(mysqli_stmt_get_result($stmt));
?>


<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>user</title>
</head>
<body>
<h3>welcome,<?php echo $row['username']; ?></h3>
<form method="post" action="dp.php">
    <label>New Password:</label>
    <input type="password" name="newpassword" placeholder="Enter new password">
    <button type="submit">Save Changes</button>
</form>
<br>
<a href="logout.php">Logout</a>
</body>
</html>