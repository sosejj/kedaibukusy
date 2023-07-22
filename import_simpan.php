<?php
require 'connect.php';
if(isset($_POST['import'])){
    $filename=$_FILES["file"]["tmp_name"];
    if($_FILES["file"]["size"]>0){
        $file = fopen($filename, "r");
while (($getdata=fgetcsv($file,10000,",")) !== false)
{
    // masuk data dalam jadual
    $import= "INSERT INTO jenama (idJenama, namaJenama) values (NULL,'".$getdata[0]."')";
    // sql query
    $tambah=mysqli_query($conn, $import);
    if(!isset($tambah)){
        echo "<script>alert('Pindah naik fail CSV gagal');
        window.location='import.php' </script>";
    }else{
        echo "<script>alert('Pindah naik fail CSV berjaya');
        window.location='jenama.php' </script>";
}
}fclose($file);
    }
}
?>