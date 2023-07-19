<?php include 'header.php' ?>
<html>
    <div id="menu">
        <?php include 'menu2.php'; ?>
    </div>
    <body>
        <div id="isi">
            <h2><u>Daftar Pengguna Baru</u></h2>
            <form method = "POST" action = "signup_simpan.php">
                <p>ID Pengguna (No. KP): <br> <!-- input username -->
                    <input type = "text" name = "username" placeholder = "12 nombor tanpa -"
                    minlength = "12" maxlength = "12" size = "30" required autofocus>
                </p>
                <p>Kata Laluan: <br> <!-- input password -->
                    <input type = "text" name = "password" placeholder = "4 hingga 10 huruf/nombor"
                    minlength = "5" maxlength = "20" size = "30" required>
                </p>
                <p>Nama Pengguna: <br> <!-- input nama -->
                    <input type = "text" name = "nama" placeholder = "Nama Penuh Anda" size = "60" required>
                </p>
                <p>Nombor Telefon: <br> <!-- input nombor telefon -->
                    <input type = "text" name = "nomhp" placeholder = "Nombor Telefon tanpa -" maxlength = '13'
                    size = "30" onkeypress = 'return event.charCode >= 48 && event.charCode <= 57' required>
                </p><br>
                <div>
                    <button name = "hantar" type = "submit">DAFTAR</button>
                    <button type = "reset">PADAM</button>
                </div>
                <p style="color: red;"> * Pastikan maklumat yang dimasukkan adalah betul</p>
            </form>
        </div>
    </body>
</html>