<?php
require 'connect.php';

if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $nama = $_POST['nama'];

// update
$result2=mysqli_query($conn, "UPDATE jenama SET namaJenama='$nama' WHERE idJenama='$id'");
echo "<script> alert ('Kemaskini Jenama Berjaya');
window.location='jenama.php'</script>";
}
?>
