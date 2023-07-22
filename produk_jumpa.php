<?php 
include 'header.php';
// GET ID from URL
$jumpa=$_POST['carian'];
// Jika ID Kosong,
if ($jumpa==NULL){
    // Papar Mesej jika NULL
    echo "<script>alert('Sila taip nama produk');
    window.location='dashboard.php'</script>";
}
?>
<html> 
<!-- Panggil Menu  -->
    <div id="menu">
        <?php include 'menu2.php'; ?>
    </div>
    <!-- Panggil Isi -->
    <div id="isi">
    <head>
        <h2><u>Hasil Carian Nama Produk</u></h2>
    </head>
    <body>
        <?php
        $query_jenama="SELECT * FROM jenama AS t1 INNER JOIN produk AS t2
        ON t1.idJenama=t2.idJenama WHERE t2.namaProduk LIKE '%$jumpa%'
        ORDER BY t2.namaProduk ASC";
        $papar_query_jenama = mysqli_query($conn, $query_jenama);
        if(mysqli_num_rows($papar_query_jenama)>0) {
            foreach($papar_query_jenama as $senarai_jenama)
            {
            ?>
            <div class="card">
            <div>
                <img class="gambar" src="gambar/<?php echo $senarai_jenama['gambar']; ?>"
                width="auto" height="120px">
            </div>
            <h3><?php echo $senarai_jenama['namaProduk']; ?></h3>
            <p class="price">RM<?php echo $senarai_jenama['harga']; ?></p>
            <p>
                <!-- simpan ke table pilihan -->
                <form method="POST" action="pilihan_simpan.php">
                    <input type="text" name="idProduk" value="<?php echo $senarai_jenama['idProduk']; ?>" hidden>
                    <input type="text" name="idPengguna" value="<?php echo $_SESSION['username']; ?>" hidden>
                    <button name="submit" type="submit">PILIH</button></a>
                </form>
            </p>
        </div>
    <?php
        }
    }else{
        echo "Maaf, tiada yang sepadan.";
    }
    ?>
    </div>
    </body>
</html>