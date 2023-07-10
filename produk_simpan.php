<?php 
require 'connect.php';

if(isset($_POST['submit'])){
    $gambar=$_FILES['gambar']['name'];
    $ext= substr(strrchr($_FILES['gambar']['name'], "."),1);
    $newnamepic = md5(rand()*time()). "$ext";
    $uploadPath="gambar/".$newnamepic;
    $isUploaded=move_uploaded_file($_FILES["gambar"]
    ["tmp_name"],$uploadPath );
    
    $nama=$_POST['nama'];
    $jenama=$_POST ['namaJenama'];
    $harga=$_POST['harga']; 
    $detail=$_POST['detail'];

// input rekod dalam database
    $baharu = "INSERT INTO produk VALUES (NULL, '$nama',
    '$detail','$harga', '$newnamepic', '$jenama')";
    $barangan=mysqli_query($conn, $baharu) ;
    if ($barangan){
        echo "<script> alert ('Tambah Produk Berjaya'); 
        window.location='produk_tambah.php'</script>";
    }else{
        echo "<script> alert ('Gagal Tambah Produk'); 
        window.location='produk_tambah.php'</script>";
    }
}
?>