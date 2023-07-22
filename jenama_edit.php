<?php
include 'header.php';

$idjenama=$_GET['id'];
$datajenama=mysqli_query($conn, "SELECT * FROM jenama WHERE idJenama='$idjenama'");
$qJenama=mysqli_fetch_array($datajenama);
?>

<html>
    <div id="menu">
        <?php include 'menu2.php'; ?>
    </div>
    <body>
        <div id="isi">
            <h2><u>Edit Jenama Sedia Ada</u></h2>
            <form method="POST" action="jenama_kemaskini.php">
            <p>Nama Jenama<br>
            <input type="text" name="nama" value="<?php echo $qJenama['namaJenama']; ?>" size="50" required autofocus>
            </p>
            <input type="text" name="id" value="<?php echo $qJenama['idJenama']; ?>" hidden>
            <button name="submit" type="submit">SIMPAN</button> <br>
            <p style="color: red;">* Pastikan maklumat yang dimasukkan adalah betul</p>
            </form>
        </div>
    </body>
</html>