<?php
session_start();
if (isset($_SESSION['login']) && $_SESSION['login'] === true) {
    header("Location: dashboard.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Admin | Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

    <div class="login-card">
        <div class="header">
            <h1 class="title">Welcome!</h1>
            <p class="subtitle">Silakan login untuk mengelola sistem</p>
        </div>

        <?php if (isset($_GET['pesan']) && $_GET['pesan'] == 'gagal') : ?>
            <div class="alert-box">
                <i class="fas fa-circle-exclamation"></i> Username / Password salah!
            </div>
        <?php endif; ?>

        <div class="error-msg" id="errorMsg"></div>

        <form action="login.php" method="post" onsubmit="return validasi()">
            <div class="input-group">
                <label for="username">Username</label>
                <div class="input-wrapper">
                    <input type="text" name="username" id="username" placeholder="Masukkan username" autocomplete="off">
                    <i class="fas fa-user"></i>
                </div>
            </div>

            <div class="input-group">
                <label for="password">Kata Sandi</label>
                <div class="input-wrapper">
                    <input type="password" name="password" id="password" placeholder="••••••••">
                    <i class="fa-regular fa-eye" id="togglePassword"></i>
                </div>
            </div>

            <button type="submit" class="btn-primary">Masuk ke Dashboard</button>
        </form>

        <div class="footer-copyright">
            <p>&copy; 2026 Hak Cipta Dilindungi</p>
            <span>Muhammad Zainal F . D1A250415</span>
    </div>

    <script src="assets/js/script.js"></script>
</body>
</html>