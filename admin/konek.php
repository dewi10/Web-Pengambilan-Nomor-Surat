<?php
$host = "localhost";
$database = "nomor_surat";
$username = "root";
$password = "lkjsdfjfjf";

// untuk tulisan bercetak tebal silakan sesuaikan dengan detail database Anda
// membuat koneksi
$connect = mysqli_connect($host, $username, $password, $database);
// mengecek koneksi
if (!$connect) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
