<?php
header("Content-type:text/html;charset=utf-8");

$host = 'localhost';
$dbuser = 'root';
$dbpass = '1234';
$dbname = 'testdb';
$conn = mysqli_connect($host, $dbuser, $dbpass, $dbname);
mysqli_set_charset($conn, 'utf8mb4');

?>
