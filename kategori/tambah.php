<?php
include '../config/auth.php';
include '../config/koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nama = $_POST['nama_kategori'];
    $deskripsi = $_POST['deskripsi'];

    mysqli_query($conn, "INSERT INTO kategori_laundry (nama_kategori, deskripsi)
    VALUES ('$nama', '$deskripsi')");

    $_SESSION['success'] = "Kategori berhasil ditambahkan!";
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Kategori Laundry</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/style.css">
</head>

<body>

<div class="form-wrapper">

<div class="container mt-5">
    <div class="card shadow">
        <div class="card-body">

            <h3 class="mb-4">Tambah Kategori Laundry</h3>

            <form method="POST">

                <input type="text"
                name="nama_kategori"
                class="form-control mb-3"
                placeholder="Nama Kategori"
                required>

                <textarea name="deskripsi"
                class="form-control mb-3"
                placeholder="Deskripsi Kategori"
                required></textarea>

                <button class="btn btn-navy">Simpan</button>
                <a href="index.php" class="btn btn-secondary">Kembali</a>

            </form>

        </div>
    </div>
</div>

</div>

</body>
</html>