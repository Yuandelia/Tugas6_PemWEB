<?php
$servername = "localhost";
$username = "root"; // Username default XAMPP adalah 'root'
$password = "";     // Password default XAMPP biasanya kosong
$db = "webbasic";   // Pastikan nama database sesuai

// Buat koneksi
$conn = mysqli_connect($servername, $username, $password, $db);

// Periksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
