<?php
include "header.php"; // panggil header

$idProduk=$_GET['id']; // dapat url

$dataProduk = mysqli_query($conn, "SELECT * FROM produk AS t1
INNER JOIN jenama AS t2 ON t1.idProduk=t2.idJenama 
WHERE t1.idProduk='$idProduk'");
$qProduk=mysqli_fetch_array($dataProduk);
?>
<html>
<!-- panggil menu -->
<div id="menu">
    <?php include 'menu2.php' ; ?>
</div>
<!-- panggil isi -->
<head> 
    <h2 style="text-align:center">EDIT PRODUK</h2>
</head> 
<body> 
    <form method="POST" action="produk_kemaskini.php" enctype="multipart/form-data">
    <p>NAMA PRODUK<br>
    <input type="text" name="nama" value="<?php echo $qProduk['namaProduk']; ?>" 
    size="50" required autofocus></p>
    <p>JENAMA<br>
    <select name="jenama">
    <?php
    echo "<option selected value='$qProduk[idJenama]'> $qProduk[namaJenama]</option>";
    $jenama=mysqli_query($conn, "SELECT * FROM jenama");
        while ($pilihan=mysqli_fetch_array($jenama))
        {
        echo "<option value = '$pilihan=[idJenama]'> $pilihan[namajenama]</option>";
        }
    ?>
    </select>
    </p>
    <p>HARGA<br>
    <input type="text" name="harga" value="<?php echo $qProduk['harga']; ?>" 
    size="10" required></p> 
    <p>DETAIL PRODUK<br>
    <textarea name="detail" rows="10" cols="50" required>
        <?php echo $qProduk['detail']; ?></textarea></p>
    <p>GAMBAR<br>
    <img src="gambar/<?php echo $qProduk['gambar']; ?>"
    width="30%" height="auto">
    <input type="text" name="id" value="<?php echo $qProduk['idProduk']; ?>" hidden>
    <br>
    <button name="submit" type="submit">SIMPAN</button> <br> 
    <font color= 'red'>Pastikan Maklumat yang dimasukkan adalah betul</font> 
    </p> 
    </form>
</body>
</html>