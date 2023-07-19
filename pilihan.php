<?php include 'header.php'; ?>
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
    <!-- panggil menu -->
    <div id="menu">
        <?php include 'menu2.php'; ?>
    </div>
    <body>
    <!-- panggil isi -->
    <div id="isi">
        <h2><U> Statistik Pilihan Kegemaran Pengguna</U></h2>
            <table>
            <tr>
                <td>Bil</td>
                <td>Nama Produk</td>
                <td>Harga</td>
                <td>Gambar</td>
                <td>Bilangan</td>
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
                <td width= "200px">
                    <img class="gambar-kecil" src="gambar/<?php echo $infol['gambar']; ?>" ></td>
                <td><?php echo $infol['kira']; ?></td>
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