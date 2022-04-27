<?php

$servername = 'localhost';
$username = 'root';
$password = '43097484';
$dbname = 'moonlight_store';

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
	die("Connection : failed " . mysqli_connect_error());
} else {
	// echo "Connection : success ";
}

mysqli_close($conn); // ปิดฐานข้อมูล
?>
