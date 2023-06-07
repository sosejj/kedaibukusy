<?php
require 'connect.php';

if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $jenama = $_POST['jenama'];
    $harga = $_POST['harga'];
    $detail = $_POST['detail'];

// update
$result2 = mysqli_query($conn, "UPDATE produk SET namaProduk = '$nama',
detail='$detail', harga='$harga', gambar='$gambar', idJenama='$jenama' WHERE idProduk='id'");
echo "<script> alert ('Kemaskini Produk Berjaya'); window.location='produk.php'</script>";
}
?>