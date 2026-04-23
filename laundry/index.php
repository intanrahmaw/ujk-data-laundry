<?php 
include '../config/auth.php';
include '../config/koneksi.php';

$data = mysqli_query($conn, "SELECT * FROM laundry");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Manajemen Data Laundry</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body>

<div class="data-wrapper">

<div class="container mt-5">
    <div class="card shadow">
        <div class="card-body">

            <h3 class="mb-4">Data Laundry</h3>

            <a href="tambah.php" class="btn btn-navy mb-3">+ Tambah Data</a>
            <a href="../auth/logout.php"
            class="btn btn-danger mb-3"
            onclick="return confirm('Apakah Anda yakin ingin keluar dari sistem?')">
            Logout
            </a>

            <?php if (isset($_SESSION['success'])): ?>
                <div class="alert alert-success">
                    <?= $_SESSION['success']; ?>
                </div>
                <?php unset($_SESSION['success']); ?>
            <?php endif; ?>

            <table class="table table-bordered table-striped">
                <tr>
                    <th>No</th>
                    <th>Nama Pelanggan</th>
                    <th>Jenis</th>
                    <th>Berat</th>
                    <th>Total</th>
                    <th>Aksi</th>
                </tr>

                <?php $no=1; while($row = mysqli_fetch_assoc($data)) { ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $row['nama_pelanggan'] ?></td>
                    <td><?= $row['jenis_laundry'] ?></td>
                    <td><?= $row['berat'] ?> kg</td>
                    <td>Rp <?= number_format($row['total_harga']) ?></td>
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