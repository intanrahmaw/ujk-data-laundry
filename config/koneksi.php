<?php 
$conn = mysqli_connect("localhost", "root", "", "ujk_laundry");

if (!$conn) {
    die ("Koneksi gagal: " . mysqli_connect_error());
}
?>