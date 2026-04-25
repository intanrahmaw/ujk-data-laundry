<?php
include '../config/auth.php';
include '../config/koneksi.php';

$id = (int) ($_GET['id'] ?? 0);

$data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM laundry WHERE id=$id"));
$kategori = mysqli_query($conn, "SELECT * FROM kategori_laundry");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nama = $_POST['nama_pelanggan'];
    $kategori_id = $_POST['kategori_id'];
    $berat = $_POST['berat'];
    $total = $_POST['total_harga'];

    mysqli_query($conn, "UPDATE laundry SET 
        nama_pelanggan='$nama',
        kategori_id='$kategori_id',
        berat='$berat',
        total_harga='$total'
        WHERE id=$id");

    $_SESSION['success'] = "Data berhasil diupdate!";
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Laundry</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/style.css">
</head>

<body>

<div class="edit-wrapper">
    <div class="container mt-5">
        <div class="card shadow">
            <div class="card-body">

                <h3 class="mb-4">Edit Data Laundry</h3>

                <form method="POST">

                    <input type="text" name="nama_pelanggan" class="form-control mb-3" value="<?= $data['nama_pelanggan'] ?>" required>

                    <select name="kategori_id" class="form-control mb-3" required>
                        <option value="">-- Pilih Kategori --</option>
                        <?php while ($k = mysqli_fetch_assoc($kategori)) { ?>
                            <option value="<?= $k['id'] ?>" <?= $data['kategori_id'] == $k['id'] ? 'selected' : '' ?>>
                                <?= $k['nama_kategori'] ?>
                            </option>
                        <?php } ?>
                    </select>

                    <input type="number" name="berat" class="form-control mb-3" value="<?= $data['berat'] ?>" required>

                    <input type="number" name="total_harga" class="form-control mb-3" value="<?= $data['total_harga'] ?>" required>

                    <button class="btn btn-warning">Update</button>
                    <a href="index.php" class="btn btn-secondary">Kembali</a>

                </form>

            </div>
        </div>
    </div>
</div>

</body>
</html>