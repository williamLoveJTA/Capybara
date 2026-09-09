<?php
$host = "localhost";
$user = "root";
$pass = ""; // Kosongkan jika password root XAMPP Anda default
$db   = "lpk_db";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>