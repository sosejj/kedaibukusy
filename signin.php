<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="./css/logMasuk.css">
    </head>
    <body>
        <div class="row" id="header">
            <div class="" id ="nama" style="background-color:black;">
                <a href="lamanUtama.php"><img id="logo" src=""></a>
            </div>
        </div>
        <center>
            <h2 style="font-size:40px;font-weight:bold;padding:30px;">Selamat Datang!</h2>
        </center>
        <form action="auth.php" method="POST">
            <div class="container">
                <div class="input">
                    <label for="usernamePengguna" style="margin-bottom:20px;"><b>Username:</b></label>
                    <input style="margin-bottom:50px;" type="text" placeholder="Sila masukkan username anda" maxlength = "30" name="username" required autofocus />
                </div>
                <div class="input">
                    <label for="passwordPengguna" style="margin-bottom:20px;"><b>Password:</b></label>
                    <input style="margin-bottom:50px;" type="password" placeholder="Sila masukkan password anda" maxlength = "25" name="password" required autofocus />
                </div>
                <button class="daftar" type="submit" style="font-size:20px;">Daftar Masuk</button>
            </div>
        </form>
    </body>
</html>