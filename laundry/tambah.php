<?php
include '../config/auth.php';
include '../config/koneksi.php';

$kategori = mysqli_query($conn, "SELECT * FROM kategori_laundry");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nama = $_POST['nama_pelanggan'];
    $kategori_id = $_POST['kategori_id'];
    $berat = $_POST['berat'];
    $total = $_POST['total_harga'];

    mysqli_query($conn, "INSERT INTO laundry 
    (nama_pelanggan, kategori_id, berat, total_harga) 
    VALUES 
    ('$nama', '$kategori_id', '$berat', '$total')");

    $_SESSION['success'] = "Data berhasil ditambahkan!";
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Laundry</title>
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

                <select name="kategori_id" class="form-control mb-3" required>
                    <option value="">-- Pilih Kategori Laundry --</option>
                    <?php while ($k = mysqli_fetch_assoc($kategori)) { ?>
                        <option value="<?= $k['id'] ?>"><?= $k['nama_kategori'] ?></option>
                    <?php } ?>
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