<?php
session_start();
if (!isset($_SESSION['login']) || $_SESSION['login'] !== true) {
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        .card-dash {
            text-align: center;
            background: var(--card-bg);
            backdrop-filter: blur(12px);
            padding: 50px;
            border-radius: 28px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            max-width: 500px;
            animation: slideUp 0.7s ease-out;
        }
        .icon-box {
            font-size: 50px;
            margin-bottom: 20px;
            background: linear-gradient(to bottom right, #38bdf8, #818cf8);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .btn-logout {
            display: inline-block;
            margin-top: 25px;
            background: rgba(251, 113, 133, 0.1);
            color: #fb7185;
            padding: 12px 25px;
            text-decoration: none;
            border-radius: 12px;
            border: 1px solid rgba(251, 113, 133, 0.3);
            font-weight: 600;
            transition: 0.3s;
        }
        .btn-logout:hover {
            background: #fb7185;
            color: white;
        }
    </style>
</head>
<body>

    <div class="card-dash">
        <div class="icon-box"><i class="fas fa-shield-halved"></i></div>
        <h1 class="title">Dashboard Admin</h1>
        <p>Selamat datang kembali, <strong><?php echo htmlspecialchars($_SESSION['session_username']); ?></strong>!</p>
        <p class="subtitle">Sistem berjalan dengan normal dan Uhuyy.</p>
        
        <a href="logout.php" class="btn-logout"><i class="fas fa-sign-out-alt"></i> Keluar Sistem</a>
    </div>

</body>
</html>