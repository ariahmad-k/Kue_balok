<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login - Kue Balok Mang Wiro</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class="sidebar" id="sidebar">
    <div class="sidebar-content">
      <p><span class="icon"><img src="asset\logo-bantuan.png" alt="Bantuan" height="20px"></span> Bantuan</p>
    </div>
  </div>

  <div class="container">
    <div class="menu-icon" id="menu-icon">&#9776;</div>
    <div class="login-box">
      <img src="..\assets\images\logo-kuebalok.png" alt="Logo Kue Balok" class="logo">
      <p class="login-text">Eitss.. Login dulu</p>
      <form>
        <input type="text" placeholder="Nama pengguna" required>
        <input type="password" placeholder="Kata Sandi" required>
        <button type="submit">Masuk</button>
      </form>
    </div>
  </div>

  <script>
    const menuIcon = document.getElementById('menu-icon');
    const sidebar = document.getElementById('sidebar');

    menuIcon.addEventListener('click', () => {
      sidebar.classList.toggle('show');
    });
  </script>
</body>
</html>
