<?php
require 'connect.php';
// terima nilai dari produk jumpa
if(isset($_POST['submit'])){
    $produk = $_POST['idProduk'];
    $pengguna = $_POST['idPengguna'];

    $baharu = "INSERT INTO pilih VALUES (NULL,'$pengguna','$produk')";
    $pilihan = mysqli_query($conn, $baharu);

    if ($pilihan) {
        echo "<script> window.location:'produk_detail.php?
        id=$produk'</script>";
    }
}
?>