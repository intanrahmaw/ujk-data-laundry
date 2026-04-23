<?php 
include '../config/auth.php';
include '../config/koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama_pelanggan'];
    $jenis = $_POST['jenis_laundry'];
    $berat = $_POST['berat'];
    $total = $_POST['total_harga'];

    mysqli_query($conn, "INSERT INTO laundry (nama_pelanggan, jenis_laundry, berat, total_harga) 
    VALUES ('$nama', '$jenis', '$berat', '$total')");

    $_SESSION['success'] = "Data berhasil ditambahkan!";
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/style.css">
</head>

<body>

<div class="form-wrapper">

<div class="container mt-5">
    <div class="card shadow">
        <div class="card-body">

            <h3 class="mb-4">Tambah Data Laundry</h3>

            <form method="POST">

                <input type="text" name="nama_pelanggan" class="form-control mb-3" placeholder="Nama Pelanggan" required>

                <select name="jenis_laundry" class="form-control mb-3">
                    <option>Cuci Kering</option>
                    <option>Cuci Setrika</option>
                    <option>Setrika Saja</option>
                    <option>Express</option>
                </select>

                <input type="number" name="berat" class="form-control mb-3" placeholder="Berat (kg)" required>

                <input type="number" name="total_harga" class="form-control mb-3" placeholder="Total Harga" required>

                <button class="btn btn-navy">Simpan</button>
                <a href="index.php" class="btn btn-secondary">Kembali</a>

            </form>

        </div>
    </div>
</div>

</div>

</body>
</html>