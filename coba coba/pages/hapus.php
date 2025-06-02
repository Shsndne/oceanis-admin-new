<?php
$conn = new mysqli("localhost", "root", "", "restoran_oceanis");

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Jalankan query hapus
    $sql = "DELETE FROM menu WHERE id = $id";
    $conn->query($sql);

    // Kembali ke halaman utama
    header("Location: menu.php");
    exit;
}
?>
