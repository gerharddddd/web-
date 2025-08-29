<?php
session_start();
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Login dengan OTP</title>
  <style>
    body { font-family: Arial, sans-serif; background: #f0f0f0; display:flex; justify-content:center; align-items:center; height:100vh; }
    .container { background:#fff; padding:20px; border-radius:10px; width:300px; box-shadow:0 0 10px rgba(0,0,0,0.2); }
    h2 { text-align:center; }
    input, button { width:100%; padding:10px; margin:8px 0; border-radius:5px; border:1px solid #ccc; }
    button { background:#28a745; color:#fff; cursor:pointer; }
    button:hover { background:#218838; }
  </style>
</head>
<body>
  <div class="container">
    <h2>Login OTP</h2>
    <form action="verify.php" method="post">
      <label>Nomor Telepon</label>
      <input type="text" name="phone" placeholder="08xxxx" required>
      <button type="submit">Kirim OTP</button>
    </form>
  </div>
</body>
</html>
