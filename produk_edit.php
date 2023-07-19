<?php
// panggil header
include "header.php";
// dapat url
$idProduk=$_GET['id'];
// sambung ke table
$dataProduk = mysqli_query($conn, "SELECT * FROM produk AS t1
INNER JOIN jenama AS t2 ON t1.idJenama=t2.idJenama
WHERE t1.idProduk='$idProduk'");
$qProduk=mysqli_fetch_array($dataProduk);
?>
<html>
<!-- panggil menu -->
<div id="menu">
    <?php include 'menu2.php' ; ?>
</div>
<body>
<!-- panggil isi -->
<div id="isi">
    <h2><u>Edit Produk Sedia Ada</u></h2>
    <form method="POST" action="produk_kemaskini.php" enctype="multipart/form-data">
    <p>Nama Produk<br>
    <input type="text" name="nama" value="<?php echo $qProduk['namaProduk']; ?>"
    size="50" required autofocus></p>
    <p>Jenama<br>
    <select name="jenama">
    <?php
    echo "<option selected value='$qProduk[idJenama]'> $qProduk[namaJenama]</option>";
    $jenama=mysqli_query($conn, "SELECT * FROM jenama");
        while ($pilihan=mysqli_fetch_array($jenama))
        {
        echo "<option value = '$pilihan[idJenama]'> $pilihan[namaJenama]</option>";
        }
    ?>
    </select>
    </p>
    <p>Harga<br>
    <input type="number" name="harga" value="<?php echo $qProduk['harga']; ?>"
    size="10" required></p>
    <p>Detail Produk<br>
    <textarea name="detail" rows="10" cols="50" required>
    <?php echo $qProduk['deskripsi']; ?></textarea></p>
    <p>Gambar Produk<br>
    <img class="gambar" src="gambar/<?php echo $qProduk['gambar']; ?>">
    <input type="text" name="id" value="<?php echo $qProduk['idProduk']; ?>" hidden>
    <br>
    <button name="submit" type="submit">SIMPAN</button><br>
    <p style="color: red;">Pastikan maklumat yang dimasukkan adalah betul</p>
    </p>
    </form>
</div>
</body>
</html>