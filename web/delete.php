<?php
// Termasuk Koneksi Database File
include_once("config.php");

// Mendapatkan Id Dari URL Untuk Menghapus User
$id = $_GET['id'];

// hapus baris pengguna dari tabel berdasarkan id yg di berikan
$result = mysqli_query($mysqli, "DELETE FROM users WHERE id=$id");

// Setelah menghapus redirect ke Home, maka daftar pengguna terbaru akan ditampilkan.
header("Location:index.php");
?>