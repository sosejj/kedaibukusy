<?php include 'header.php'; ?>
<html>
<div id=" menu">
    <?php include 'menu.php'; ?>
</div>

<div id="isi"> 
<head></head>
    <h2 style="text-align: center">Tambah Produk Baru</h2> 
</head> 
<body> 
    <form method="POST" action="produk_simpan.php" enctype="multipart/form-data">
    <p>Nama Produk <br>
    <input type="text" name= "nama" placeholder="Tuliskan Nama Produk" 
    size="50" required autofocus></p>
    <p>Jenama <br>
    <select name="jenama">
        <?php 
        $jenama=mysqli_query($conn, "SELECT * FROM jenama");
        while ($pilihan=mysqli_fetch_array($jenama))
        {
            echo "<option hidden selected> --PILIH </option> ";
            echo "<option value='$pilihan[idJenama]'>
            $pilihan[namaJenama]‹/option>";
        }
        ?>
        </select>
        <a href="jenama.php">Senarai Jenama</a>
    </p> 
    <p>Harga <br>
    <input type="text" name="harga" placeholder="RM 00.00" size="50" required ></p> 
    <p>Detail Produk <br>
    <textarea name="detail" placeholder="Masukkan Maklumat Produk" 
    rows="10" cols="50" required></textarea> </p> 
    <p>Gambar Produk <br>
    <input type="file" name="gambar" accept=".jpg,.jpeg,.png" required></p>
    <br> 
    <div> 
        <button name="submit" type="submit" >SIMPAN</button>
        <button type="reset">RESET</button>
    </div>
<font color='red'> * Pastikan Maklumat Anda Betul Sebelum Membuat Pendaftaran. </font>
    </form>
</body> 
</div> 
</htm1>