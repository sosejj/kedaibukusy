<?php include 'header.php'; ?>
<html>
<div id="menu">
    <?php include 'menu2.php'; ?>
</div>
<body>
<div id="isi">
<head>
    <h2><U>Tambah Produk Baharu</U></h2>
</head>
    <form method="POST" action="produk_simpan.php" enctype="multipart/form-data">
    <p>Nama Produk<br>
    <input type="text" name= "nama" placeholder="Tuliskan Nama Produk"
    size="50" required autofocus></p>
    <p>Jenama<br>
    <select name="jenama">
        <?php
        $jenama=mysqli_query($conn, "SELECT * FROM jenama");
        while ($pilihan=mysqli_fetch_array($jenama))
        {
            echo "<option hidden selected> PILIH </option> ";
            echo "<option value='$pilihan[idJenama]'>
            $pilihan[namaJenama]</option>";
        }
        ?>
        </select>
        <a href="jenama.php">Senarai Jenama</a>
    </p>
    <p>Harga (RM)<br>
    <input type="number" name="harga" placeholder="00.00" size="17" required ></p>
    <p>Detail Produk<br>
    <textarea name="detail" placeholder="Masukkan Maklumat Produk"
    rows="10" cols="50" required></textarea> </p>
    <p>Gambar Produk<br>
    <input type="file" name="gambar" accept=".jpg,.jpeg,.png" required></p>
    <br>
    <div>
        <button name="submit" type="submit" >SIMPAN</button>
        <button type="reset">RESET</button>
    </div>
    <p style="color: red;"> * Pastikan Maklumat Anda Betul Sebelum Membuat Pendaftaran. </p>
    </form>
</div>
</body>
</htm1>