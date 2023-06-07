<?php
$host="localhost";
$user="root";
$password="";
$database="kedaibukusy"; //ikut nama file database

$conn=mysqli_connect($host,$user,$password,$database);
if(mysqli_connect_errno()){
    echo"Proses sambung ke pangkalan data gagal";
    exit();
}

//Setup Maklumat Sistem
$namasys="Kedai Buku SY";
$kedai="Kedai Buku Anda";
$motto="Membaca Amalan Madani";
$lain2="Cawangan Kedai Buku Kami";
?>