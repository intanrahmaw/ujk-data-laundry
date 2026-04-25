<?php
include 'config/auth.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Laundry</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/style.css">
</head>

<body>

<div class="container-box">

    <div class="title">
        <h3>Dashboard Laundry</h3>
        <p class="text-muted">Selamat datang di sistem manajemen laundry</p>
    </div>

    <div class="row g-4">

        <div class="col-md-6">
            <div class="card-menu">

                <h5>Data Laundry</h5>
                <p class="text-muted">Kelola data cucian pelanggan</p>

                <a href="../laundry/index.php" class="btn btn-light-custom w-100">
                    Buka Laundry
                </a>

            </div>
        </div>

        <div class="col-md-6">
            <div class="card-menu">

                <h5>Kategori Laundry</h5>
                <p class="text-muted">Kelola jenis layanan</p>

                <a href="../kategori/index.php" class="btn btn-light-custom w-100">
                    Buka Kategori
                </a>

            </div>
        </div>

    </div>

    <div class="logout mt-4 d-flex justify-content-center">
        <a href="../auth/logout.php"
           class="btn btn-logout"
           onclick="return confirm('Yakin ingin logout?')">
            Logout
        </a>
    </div>

</div>

</body>
</html>