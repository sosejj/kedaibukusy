<?php
require 'connect.php';

if(isset($_POST['submit'])){
    $jenama=$_POST['jenama'];

    // input rekod dalam database
    $baharu = "INSERT INTO jenama VALUES (NULL, '$jenama')";

    $barangan=mysqli_query($conn, $baharu);
    if ($barangan){
        echo "<script> alert ('Tambah jenama Berjaya');
        window.location='jenama.php'</script>";
    }else{
        echo "<script> alert ('Gagal Tambah Jenama');
        window.location='jenama_tambah.php'</script>";
    }
    }
?>