<?php
if(empty($_GET['brand'])){
$idBrand=0;
}else{
     $idBrand=$_GET['brand'];
}
include 'header.php';
?>

<html>
<div id=" menu">
    <?php include 'menu2.php'; ?>
</div>
<div id="isi">
    <head>
        <h2 style="text-align:center"> SENARAI PRODUK IKUT JENAMA</h2>
    </head>
    <body>
        <?php
        $query_jenama="SELECT * FROM jenama AS t1 INNER JOIN produk
        AS t2 ON t1.idJenama=t2.idJenama WHERE t1.idJenama=$idBrand
        ORDER BY t2.namaProduk ASC";
        $papar_query_jenama= mysqli_query($conn, $query_jenama);
        if(mysqli_num_rows($papar_query_jenama)>0){
            include 'harga_menu.php';
            echo "<hr>";
            foreach ($papar_query_jenama as $senarai_jenama) {
        ?>
        <center>
            <div class="card">
            <div class="gambar">
            <img src="gambar/<?php echo $senarai_jenama['gambar']; ?>"
            width="auto" height="120px">
            </div>
            <h3><?php echo $senarai_jenama['namaProduk'];?></h3>
            <p class="price">RM<?php echo $senarai_jenama['harga']?></p>
            
            <p>
            <form method="POST" action="pilihan_simpan.php">
                <input type="text" name="idProduk" value="<?php
                echo $senarai_jenama['idProduk'];?>"
                hidden>
                <input type="text" name="idPengguna" value="<?php
                echo $_SESSION['id']; ?>" hidden>
                <button name="submit" type="submit">PILIH</button></a>
            </form>
            </p>
            </div>
            <?php }
        }else{
            echo "tiada jenama ini ditemui";
        }
        ?>
    </div>
    </center>
    <br>
    </body>
</html>