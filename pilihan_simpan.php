<?php
// sambung ke p/data
require 'connect.php';
// terima nilai dari produk jumpa
if(isset($_POST['submit'])){
    $produk = $_POST['idProduk'];
    $pengguna = $_POST['idPengguna'];
    // masuk rekod dlm table
    $baharu = "INSERT INTO pilihan VALUES (NULL,'$pengguna','$produk')";
    // laksana arahan sql
    $pilihan = mysqli_query($conn, $baharu);
    // mesej jika berjaya
    if ($pilihan) {
        echo "<script> window.location='produk_detail.php?id=$produk'</script>";
    } else {
        echo "<script>alert('Gagal direkodkan');window.location='dashboard.php'</script>";
    }
}
?>