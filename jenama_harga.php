<?php
include 'header.php';

$idJenama=$_GET['idJenama'];

if(isset($_POST['pilih'])){
    if(isset($_POST['harga1'])==NULL OR
    ($_POST['harga2'])==null){
    echo "<script>alert('Taip julat harga');
    window.location='dashboard.php'</script>";
    }
$pilih1=$_POST['harga1'];
$pilih2=$_POST['harga2'];
}
?>
<html>
    <div id="menu">
        <?php include 'menu2.php'; ?>
    </div>
    <div id="isi">
        <head>
            <h2 style="text-align:center"> SENARAI PRODUK MENGIKUT
             PILIHAN HARGA DAN JENAMA</h2>
        </head>
    <body>
    <?php
    $query_produk=" SELECT * FROM jenama AS t1
    INNER JOIN produk AS t2 on 
    t1.idJenama=t2.idJenama WHERE (t2.idJenama=$idJenama)
    AND (t2.harga BETWEEN $pilih1 AND $pilih2)
    ORDER BY t2.harga ASC";
    // buat arah sql
    $papar_query= mysqli_query($conn, $query_produk);
    if(mysqli_num_rows($papar_query) > 0){
        foreach($papar_query as $senarai_produk)
        {
    ?>
    <!-- papar produk -->
    <div class="card">
    <div class="gambar">
        <img src="gambar/<?php echo
        $senarai_produk['gambar']; ?>"
        width="auto" height="120">
    </div>
    <h3><?php echo $senarai_produk['namaProduk']; ?></h3>
    <p class="price">Jenama:
        <?php echo $senarai_produk['namaJenama']; ?></p>
    <p class="price">RM <?php echo $senarai_produk['harga']; ?></p>

    <!-- simpan ke table pilihan -->
    <p>
        <form method="POST" action=pilihan_simpan.php>
        <input type="text" name="idProduk" value = "<?php echo
        $senarai_produk['idProduk']; ?>" hidden>
        <input type="text" name="idPengguna"
        value="<?php echo $_SESSION['id']; ?>" hidden>
        <button name="submit">PILIH</button></a>
    </form>
    </p>
    </div>
    <?php
        }
    }else{
        echo "tiada rekod ditemui";
    }
    ?>
    </body>
    </div>
</html>