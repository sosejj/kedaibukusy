<?php
include 'connect.php';

$idDel= $_GET['id'];

//delete jenama

mysqli_query($conn, "DELETE FROM jenama
WHERE idJenama='$idDel' ");

echo "<script> alert ('Jenama berjaya dihapuskan');
 window.location='jenama.php'</script>";

 ?>
 