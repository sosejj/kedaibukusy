<?php
include 'header.php';
?>
<html>
    <body>
        <div id="menu">
        <?php include 'menu2.php'; ?></div>

        <div id="isi">
            <center><h2>IMPORT JENAMA DARI FAIL CSV</h2></center>
            <label> Pilih lokasi fail CSV/Excel</label>

            <!-- upload fail CSV -->
            <form action="import_simpan.php" method="POST"
             enctype="multipart/form-data">
                <input type="file" name="file" accept=".csv"><br>
                <button type="submit" id="submit" name="import">
                  UPLOAD</button>
            </form>
            *Contoh : <br>
            JENAMA1 <br>
            JENAMA2 <br>
            JENAMA3 <br>
            JENAMA4
            <p>File mesti dalam bentuk .csv</p>
</div>
</body>
</html>
