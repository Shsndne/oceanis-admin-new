<?php
// Pengaturan koneksi ke database
$host = 'localhost'; // Ganti jika server kamu berbeda
$username = 'root'; // Ganti dengan username MySQL kamu
$password = ''; // Ganti dengan password MySQL kamu jika ada
$dbname = 'restoran_oceanis'; // Nama database yang sudah dibuat

// Membuat koneksi
$conn = new mysqli($host, $username, $password, $dbname);

error_reporting(E_ALL);  // Mengaktifkan pelaporan semua jenis error
ini_set('display_errors', 1);  // Menampilkan error di browser

?>
