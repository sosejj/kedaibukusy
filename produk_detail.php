<?php
include 'header.php';

$idProduk=$_GET['id'];

$dataProduk=mysqli_query($conn, "SELECT * FROM produk AS t1
INNER JOIN jenama AS t2 ON t1.idJenama=t2.idJenama WHERE
t1.idProduk='$idProduk'");

$qProduk=mysqli_fetch_array($dataProduk);
?>

<html>
    <head>
    <script>
        function printDiv(divId) {
            var printContents = document.getElementById(divId).innerHTML;
            var originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;

            window.print();

            document.body.innerHTML = originalContents;
        }
    </script>
    </head>
<div id="menu"> <?php include 'menu2.php'; ?></div>
<div id="isi">
<body>
<h2><U>Butiran Produk</U></h2>
<img class="gambar" src="gambar/<?php echo $qProduk['gambar']; ?>" width="40%" height="auto">
<h3><?php echo $qProduk['namaProduk']; ?></h3>
<p class="price">JENAMA : <?php echo $qProduk['namaJenama']; ?></p>
<p class="price">RM <?php echo $qProduk['harga']; ?></p>
<p class="price"><?php echo $qProduk['deskripsi']; ?></p>
<p><button onclick="printDiv('isi')">CETAK</button></p>
</body>
</div>
</html>