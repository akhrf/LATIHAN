<?php
session_start();

// Ganti dengan informasi database Anda
$db_host = 'localhost';
$db_user = 'username';
$db_pass = 'password';
$db_name = 'database';

// Koneksi ke database
$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil nilai dari form
$username = $_POST["username"];
$password = $_POST["password"];

// Query untuk memeriksa login
$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    // Login berhasil
    $_SESSION["username"] = $username;
    header("Location: dashboard.php"); // Ganti dengan halaman setelah login
} else {
    // Login gagal
    header("Location: login.html?error=1");
}

$conn->close();
?>