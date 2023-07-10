<?php include 'header.php'; ?>
<html>
<!-- panggil menu -->
<div id="menu">
    <?php include 'menu2.php'; ?> 
</div> 
<!-- panggil isi -->
<div id="isi"> 
<body>
<center>
<h2><U>Senarai Produk Semasa </U></h2> 
</center>
<!-- papar maklumat -->
<table width="90%" border=1>
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
    <td><?php echo $infol['namajenama']; ?></td> 
    <td>RM<?php echo $infol['harga']; ?></td> 
    <td width="200px"><img src="gambar/<?php echo $infol['gambar']; ?>
    "width = "auto" height="120px"></td> 
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
    <td colspan="6" align="center">
        <font style = 'font-size:10px'>~~Senarai Tamat~~<br />
        Jumlah Pilihan : <?php echo $no-1;  ?>
        </font> 
        <p><button onclick="javascript:window.print()">CETAK</button></p> 
    </td>
</tr>
</table>
</body>
</div>
</html>