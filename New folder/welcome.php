<?php
session_start();

if (!isset($_SESSION['otp'])) {
    header("Location: login.php");
    exit();
}

$otp_input = $_POST['otp_input'];
$otp_sistem = $_SESSION['otp'];

if ($otp_input == $otp_sistem) {
    // Jika OTP benar
    $phone = $_SESSION['phone'];
    echo "<!DOCTYPE html>
    <html lang='id'>
    <head>
      <meta charset='UTF-8'>
      <title>Selamat Datang</title>
      <style>
        body { font-family: Arial, sans-serif; background: #d4edda; display:flex; justify-content:center; align-items:center; height:100vh; }
        .container { background:#fff; padding:20px; border-radius:10px; width:400px; text-align:center; box-shadow:0 0 10px rgba(0,0,0,0.2); }
        h2 { color:#155724; }
        p { margin-top:10px; }
      </style>
    </head>
    <body>
      <div class='container'>
        <h2>Login Berhasil 🎉</h2>
        <p>Selamat datang, nomor <b>$phone</b> berhasil login.</p>
      </div>
    </body>
    </html>";
} else {
    echo "<script>alert('OTP salah!'); window.location='login.php';</script>";
}
