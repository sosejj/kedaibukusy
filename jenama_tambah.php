<?php include 'header.php'; ?>
<html>
<!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
<div id=" menu">
    <?php include 'menu2.php'; ?>
</div>

<div id="isi">
<head>
    <h2 style="text-align: center"> Tambah Jenama Produk Baru</h2>
</head>
<body>
    <form method="POST" action="jenama_simpan.php">
    <p>Jenama Produk <br>
    <input type="text" name="jenama" placeholder="Tuliskan Nama Jenama"
    size="50" required autofocus></p><br>

    <div>
        <button name="submit" type="submit">SIMPAN</button>
        <button type="reset">RESET</button>
    </div>
<font colour='red'> * Pastikan Maklumat Anda Betul Sebelum Membuat Pendaftaran.</font>

</form>
</body>
</div>
</html>
