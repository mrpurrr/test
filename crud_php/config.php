<?php
$host = 'localhost'; // atau sesuaikan dengan host Anda
$user = 'root'; // ganti dengan username database Anda
$pass = ''; // ganti dengan password database Anda
$db = 'crud_app'; // nama database yang digunakan

// Membuat koneksi
$conn = new mysqli($host, $user, $pass, $db);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}else{
    echo "Error: ";
}
?>