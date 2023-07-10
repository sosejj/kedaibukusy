<html>
    <link rel="stylesheet" type="text/css" href="style.css">
    <div id = "menu">
        <?php
        session_start();
        if ($_SESSION['level']=="PENGGUNA"){
        ?>
        <h4>Menu Pengguna</h4>
        <ul>
            <li><a href="dashboard.php">HOME</a></li>
            <li><a><?php include 'jenama_menu.php'; ?>Menu Jenama</a></li>
            <li><a><?php include 'produk_cari.php'; ?>Carian Produk</a></li>
            <li><a href="logout.php">Log Keluar</a></li>
        </ul>
        <?php
        } else {
        ?>
        <h4>Menu ADMIN</h4>
        <ul>
            <li><a href="dashboard.php">HOME</a></li>
            <li><a href="produk.php">Senarai Produk</a></li>
            <li><a href="produk_tambah.php">Tambah Produk</a></li>
            <li><a href="pilihan.php">Pilihan Pengguna</a></li>
            <li><a href="dashboard.php">Keluar</a></li>
            <li><a href="logout.php">Log Keluar</a></li>
        </ul>
        <?php } ?>
    </div>
    <script>
        function onlyOne2(checkbox){
            var checkboxes = document.getElementsByName("brand")
            checkbox.forEach((item)=> {
                if (item !== checkbox) item.checked = false
            })
        }
    </script>
</html>