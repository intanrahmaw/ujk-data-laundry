<?php
include '../config/auth.php';
include '../config/koneksi.php';

$data = mysqli_query($conn, "SELECT * FROM kategori_laundry");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Manajemen Kategori Laundry</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body>

<div class="data-wrapper">

<div class="container mt-5">
    <div class="card shadow">
        <div class="card-body">

            <div class="d-flex justify-content-between align-items-center mb-3">
                <h3 class="mb-0">Data Kategori Laundry</h3>

                <div class="d-flex gap-2">
                    <a href="../dashboard.php" class="btn btn-primary btn-sm">Kembali</a>
                    <a href="../auth/logout.php" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin keluar dari sistem?')">Logout</a>
                </div>
            </div>

            <a href="tambah.php" class="btn btn-navy mb-3">+ Tambah Kategori</a>

            <?php if (isset($_SESSION['success'])): ?>
                <div class="alert alert-success">
                    <?= $_SESSION['success']; ?>
                </div>
                <?php unset($_SESSION['success']); ?>
            <?php endif; ?>

            <table class="table table-bordered table-striped">

                <tr>
                    <th>No</th>
                    <th>Nama Kategori</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>
                </tr>

                <?php $no = 1; while($row = mysqli_fetch_assoc($data)) { ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $row['nama_kategori'] ?></td>
                    <td><?= $row['deskripsi'] ?></td>
                    <td>
                        <a href="edit.php?id=<?= $row['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="hapus.php?id=<?= $row['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin menghapus data ini?')">Hapus</a>
                    </td>
                </tr>
                <?php } ?>

            </table>

        </div>
    </div>
</div>

</div>

</body>
</html>