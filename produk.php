<?php include 'header.php'; ?>
<html>
<head>
    <title>Senarai Produk Semasa</title>
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
<!-- panggil menu -->
<div id="menu">
    <?php include 'menu2.php'; ?>
</div>
<body>
<!-- panggil isi -->
<div id="isi">
<h2><U>Senarai Produk Semasa</U></h2>
<!-- papar maklumat -->
<table>
<tr> 
<td>Bil</td>
<td>Nama Produk</td>
<td>Jenama</td>
<td>Harga</td>
<td>Gambar</td>
<td>Tindakan</td>
</tr>
<?php
$no=1;
$datal=mysqli_query($conn, "SELECT * FROM jenama AS t1 INNER JOIN
produk AS t2 on t1.idjenama=t2.idjenama ORDER BY t1.namaJenama ASC");
while ($infol=mysqli_fetch_array($datal))
{
?>
<tr>
    <td><?php echo $no; ?></td>
    <td><?php echo $infol['namaProduk']; ?></td>
    <td><?php echo $infol['namaJenama']; ?></td>
    <td>RM<?php echo $infol['harga']; ?></td>
    <td width="200px"><img class="gambar-kecil" src="gambar/<?php echo $infol['gambar']; ?>"></td>
<td>
<!-- papar pautan -->
<a href="produk_edit.php?id=
<?php echo $infol['idProduk'];?>">EDIT</a>

<a href="produk_hapus.php?id=
<?php echo $infol['idProduk'];?>$pic=<?php echo $infol['gambar']; ?>"
onclick="return confirm('Anda Pasti')">HAPUS</a></td>
</tr>
<?php $no++; } ?>
<tr>
    <td colspan="6">
        <p style="font-size: 12px;">Jumlah Pilihan: <?php echo $no-1;  ?></p>
        <p><button onclick="printDiv('isi')">CETAK</button></p>
    </td>
</tr>
</table>
</div>
</body>
</html>