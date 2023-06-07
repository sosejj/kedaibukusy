<?php
include 'connect.php';
$idpic=$_GET['pic'];
$iddel=$_GET['id'];

// delete pic
unlink("gambar/".$idpic);
mysqli_query($conn, "DELETE FROM produk WHERE idProduk='$iddel'");

echo "<script> alert ('Produk berjaya dihapuskan');
window.location = 'produk.php'</script>";
?>