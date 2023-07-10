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
                <h2> <U> Statistik Pilihan Kegemaran Pengguna </U></h2>
            </center>
            <table width="90%" border=1 align="left">
            <tr>
                <td>BIL</td>
                <td>NAMA PRODUK</td>
                <td>HARGA</td>
                <td>GAMBAR</td>
                <td>BILANGAN</td>
            </tr>
<?php
$no=1;
$datal=mysqli_query ($conn, "SELECT t2.namaProduk,
COUNT(t1.idPengguna) AS kira, t2.harga,t2.gambar
FROM pilihan AS t1 INNER JOIN produk AS t2 ON
t1.idProduk=t2.idProduk GROUP BY t1.idProduk
ORDER BY COUNT(t1.idPengguna) DESC");

while($infol=mysqli_fetch_array($datal))
{
?>
<tr>
    <td><?php echo $no; ?></td>
    <td><?php echo $infol['namaProduk']; ?></td>
    <td>RM<?php echo $infol['harga']; ?></td>
    <td width= "280px">
        <img src="gambar/<?php echo $infol['gambar']; ?>"
        width="auto" helght="120px"></td>
    <td><?php echo $infol['kira']; ?></td>
</tr>
<?php $no++; } ?>
<tr>
    <td colspan="5" align="center">
        <font style='font-size: 10px' >
        * SENARAI TAMAT * <br  />
        Jumlah Pillhan :
     <?php echo $no-1; ?>
    </font>
    <p><button onclick="javascript:window.print()"> CETAK </button></p>
    </td>
    </tr>
            </table>
        </body>
    </div>
</html>