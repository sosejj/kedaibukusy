<?php
include 'header.php';
?>
<html>
    <body>
        <div id="menu">
            <?php include 'menu2.php'; ?>
        </div>
        <div id="isi">
            <h2><u>Import Jenama daripada Fail CSV</u></h2>
            <label>Pilih lokasi fail .csv</label><br>

            <!-- upload fail CSV -->
            <form action="import_simpan.php" method="POST" enctype="multipart/form-data">
                <input type="file" name="file" accept=".csv"><br><br>
                <button type="submit" id="submit" name="import">UPLOAD</button>
            </form>
            *Contoh: <br>
            JENAMA1, <br>
            JENAMA2, <br>
            JENAMA3, <br>
            JENAMA4,
            <p style="color: red;">* Fail mesti dalam bentuk .csv</p>
</div>
</body>
</html>
