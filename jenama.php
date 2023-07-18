<?php include 'header.php'; ?>
<html>
<div id="menu">
    <?php include 'menu2.php'; ?>
</div>
<div id="isi">
    <body>
        <center>
            <h2><u>Senarai Jenama</u></h2>
        </center>

        <table width="90%" border=1>
        <!-- papar jenama -->
        <tr>  
            <td>BIL</td>
            <td>NAMA JENAMA</b></td>
            <td> TINDAKAN
              <a href="jenama_tambah.php" style="float:right;">
              +Jenama </a>
            <br>
        <a href="import.php" style="float:right;">|
        IMPORT JENAMA </a></td>
        <?php
        $no=1;
        $data1=mysqli_query($conn, "SELECT * FROM jenama
          ORDER BY namaJenama ASC");
        while($info1=mysqli_fetch_array($data1))
        {
        ?>
        <tr>
        <td><?php echo $no; ?> </td>
        <td><?php echo $info1['namaJenama']; ?> </td>
        <td>
        <a href="jenama_edit.php?id=<?php
        echo $info1['idJenama'];?>">EDIT</a> 
        <a href="jenama_hapus.php?id=<?php
        echo $info1['idJenama']; ?>"
        onclick="return confirm ('Anda Pasti')">HAPUS</a>
        </td>
        </tr>
        <?php $no++; } ?>

        </table>
    </body>
</div>
</html>