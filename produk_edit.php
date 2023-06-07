<?php
include "header.php";

$idProduk=$_GET['id'];

$dataProduk = mysqli_query($conn, "SELECT * FROM produk AS t1
inner join jenama AS t2 on t1.idProduk=t2.idJenama 
where t1.idProduk='$idProduk'");
?>
<html>
<div id="menu">
    <?php include 'menu2.php' ; ?>
</div>

<head?> 
    <h2 style="text-align:center">EDIT PRODUK</h2>
</head> 
<body> 
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
        echo "<option value = '$pilihan=[idJenama]'> $pilihan[namajenama]</option>";
        }
    ?>
    </select>
    </p>
    <p>Harga<br>
    <input type="text" name="harga" value="<?php echo $qProduk['harga']; ?>" 
    size="10" required></p> 
    <p>Detail Produk (Deskirpsi)<br>
    <textarea name="detail" rows="10" cols="50" required>
        <?php echo $qProduk['detail']; ?></textarea></p>
    <p>Gambar <br>
    <img src="gambar/<?php echo $qProduk['gambar']; ?>"
    width="30%" height="auto">
    <input type="text" name="id" value="<?php echo $qProduk['idProduk']; ?>" hidden> <br>

    <button name="submit" type="submit">SIMPAN</button> <br> 
    <font color= 'red'>Pastikan Maklumat yang dimasukkan adalah betul</font> 
    </p> 
    </form>
</body>
</html>