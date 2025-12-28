<?php
$host = "db";          // ✅ NAMA SERVICE DATABASE
$user = "user";        // sesuai docker-compose
$pass = "password";    // sesuai docker-compose
$db   = "contohdb";    // MYSQL_DATABASE

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

echo "✅ Web berhasil terhubung ke Database MySQL!";
?>
