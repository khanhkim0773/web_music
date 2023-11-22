<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "QLWAN";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Kết nối đến CSDL thất bại: " . $conn->connect_error);
}
?>
