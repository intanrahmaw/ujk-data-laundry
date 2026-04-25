<?php
include '../config/auth.php';
include '../config/koneksi.php';

$id = (int) ($_GET['id'] ?? 0);

$data = mysqli_fetch_assoc(
    mysqli_query($conn, "SELECT * FROM kategori_laundry WHERE id=$id")
);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nama = $_POST['nama_kategori'];
    $deskripsi = $_POST['deskripsi'];

    mysqli_query($conn, "UPDATE kategori_laundry SET 
        nama_kategori='$nama',
        deskripsi='$deskripsi'
        WHERE id=$id");

    $_SESSION['success'] = "Kategori berhasil diupdate!";
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Kategori</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/style.css">
</head>

<body>

<div class="edit-wrapper">
    <div class="container mt-5">
        <div class="card shadow">
            <div class="card-body">

                <h3 class="mb-4">Edit Kategori Laundry</h3>

                <form method="POST">

                    <input type="text"
                    name="nama_kategori"
                    class="form-control mb-3"
                    value="<?= $data['nama_kategori'] ?>"
                    required>

                    <textarea name="deskripsi"
                    class="form-control mb-3"
                    required><?= $data['deskripsi'] ?></textarea>

                    <button class="btn btn-warning">Update</button>
                    <a href="index.php" class="btn btn-secondary">Kembali</a>

                </form>

            </div>
        </div>
    </div>
</div>

</body>
</html>