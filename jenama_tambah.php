<?php include 'header.php'; ?>
<html>
<div id="menu">
    <?php include 'menu2.php'; ?>
</div>
<body>
<div id="isi">
    <h2><u>Tambah Jenama Produk Baru</u></h2>

    <form method="POST" action="jenama_simpan.php">
    <p>Jenama Produk <br>
    <input type="text" name="jenama" placeholder="Tuliskan Nama Jenama"
    size="50" required autofocus></p><br>

    <div>
        <button name="submit" type="submit">SIMPAN</button>
        <button type="reset">RESET</button>
    </div>
    <p style="color: red;"> * Pastikan Maklumat Anda Betul Sebelum Membuat Pendaftaran.</p>
</form>
</div>
</body>
</html>