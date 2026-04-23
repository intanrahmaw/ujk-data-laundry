<?php
session_start();

if (isset($_SESSION['user'])) {
    header("Location: ../laundry/index.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/style.css">
</head>

<body>

<div class="login-wrapper">

    <div class="card shadow login-card">

        <div class="card-body">

            <h4 class="text-center fw-bold mb-1">Sistem Manajemen Data Laundry</h4>
            <p class="text-center text-muted mb-4">Silakan login untuk melanjutkan</p>

            <?php if (isset($_SESSION['error'])): ?>
                <div class="alert alert-danger text-center">
                    <?= $_SESSION['error']; ?>
                </div>
                <?php unset($_SESSION['error']); ?>
            <?php endif; ?>

            <form method="POST" action="proses_login.php">

                <div class="mb-3">
                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                </div>

                <div class="mb-3">
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                </div>

                <button type="submit" class="btn btn-navy w-100">
                    Login
                </button>

            </form>

        </div>
    </div>

</div>

</body>
</html>