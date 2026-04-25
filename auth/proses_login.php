<?php 
session_start();
include '../config/koneksi.php';

$email = $_POST['email'];
$password = $_POST['password'];

$query = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
$user = mysqli_fetch_assoc($query);

if (!$user) {
    $_SESSION['error'] = "Email tidak ditemukan!";
    header("Location: ../auth/login.php");
    exit;
}

if (!password_verify($password, $user['password'])) {
    $_SESSION['error'] = "Password salah!";
    header("Location: ../auth/login.php");
    exit;
}

$_SESSION['user'] = $user;
header("Location: ../dashboard.php");
exit;
?>