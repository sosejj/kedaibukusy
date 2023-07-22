<?php
require 'connect.php';
if (isset($_POST['username'])) {
        $idPengguna = $_POST['username'];
        $password = $_POST['password'];
        $nama = $_POST['nama'];
        $nomhp = $_POST['nomhp'];
    $daftar1 = "INSERT INTO pengguna VALUES ('$idPengguna','$password','$nama','$nomhp','PENGGUNA')";
    $hasil1 = mysqli_query($conn, $daftar1);

    if ($hasil1) {
        echo "<script> alert ('Pendaftaran Berjaya');
        window.location = 'index1.php'</script>";
    } else {
        echo "<script> alert ('Pendaftaran Gagal, Semak Semula Maklumat');
        window.location = 'signup.php'</script>";
    }
}
?>