<?php include 'header.php' ?>
<html>
    <div>
        <head>
            <h2 style = "text-align: center"> Daftar Pengguna Baru </h2>
        </head>
        <body>
            <form method = "POST" action = "signup_simpan.php"> 
                <p>ID Pengguna: <br> <!-- input username -->
                    <input type = "text" name = "username" placeholder = "E-mel" maxlength = "20" size = "30" required autofocus>
                </p>
                <p>Kata Laluan: <br> <!-- input password -->
                    <input type = "text" name = "password" placeholder = "Kata Laluan" maxlength = "20" size = "30" required>
                </p>
                <p>Nama Pengguna: <br> <!-- input nama -->
                    <input type = "text" name = "nama" placeholder = "Nama Penuh Anda" size = "60" required>
                </p>
                <p>Nombor Telefon: <br> <!-- input nombor telefon -->
                    <input type = "text" name = "nomhp" placeholder = "Nombor Telefon dengan +60, tanpa -" maxlength = '15' size = "30" onkeypress = 'return event.charCode >= 48 && event.charCode <= 57 || event.charCode == 107' required>
                </p><br>
                <div>
                    <button name = "hantar" type = "submit">DAFTAR</button>
                    <button type = "reset">PADAM</button>
                </div>
                <font color = 'cyan'>*Pastikan maklumat anda betul sebelum hantar!*</font>
            </form>
        </body>
    </div>
</html>   
        