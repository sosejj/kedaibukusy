<?php
include 'header.php';

$idjenama=$_GET['id'];
$datajenama=mysqli_query($conn, "SELECT * FROM jenama WHERE idJenama='$idjenama'");
$qJenama=mysqli_fetch_array($datajenama);
?>

<html>
    <div id = "menu">
        <?php include 'menu2.php'; ?>
    </div>
    <div id="isi">
        <head>
            <h2 style = "text-align: center">EDIT JENAMA</h2>
        </head>
        <body>
            <form action="POST" action="jenama_kemaskini.php">
            <p>JENAMA <br>
            <input type="text" name="nama" value=" <?php echo $qJenama['idjenama']; ?>"
            size ="50" required autofocus ></p>
            <input type="text" name="id" value=" <?php echo $qJenama['namaJenama']; ?>"hidden>
            <button name="submit" type="submit">SIMPAN</button> <br>
            <font color='red'>Pastikan maklumat sudah betul</font>
        </body>
    </div>
</html>