<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars($_POST['username']);
    $password = $_POST['password'];

    
    $user_benar = "admin";
    $pass_benar = "12345";

    if ($username === $user_benar && $password === $pass_benar) {
        $_SESSION['login'] = true;
        $_SESSION['session_username'] = $username;
        header("Location: dashboard.php");
        exit;
    } else {
        header("Location: index.php?pesan=gagal");
        exit;
    }
} else {
    header("Location: index.php");
    exit;
}