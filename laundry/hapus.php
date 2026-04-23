<?php 
include '../config/auth.php';
include "../config/koneksi.php";

$id = $_GET['id'] ?? null;

if (!$id) {
    die("ID tidak ditemukan");
}

$id = (int) $id;

mysqli_query($conn, "DELETE FROM laundry WHERE id=$id");
$_SESSION['success'] = "Data berhasil dihapus!";
header("Location: index.php");
exit;