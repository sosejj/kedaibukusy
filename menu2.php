<html>
    <link rel="stylesheet" type="text/css" href="style.css">
    <div id = "menu">
        <?php
        session_start();
        if (!isset($_SESSION['level'])) {
            include 'signin.php'; // link kepada file ini
            ?>
            <hr>
            Jika anda belum mendaftar, sila <a href="signup.php"><button>DAFTAR</button></a>
            <br><br>
            <ul>
                <li><a href="index1.php">HOME</a></li><br>
            </ul>
        <?php }
        elseif ($_SESSION['level']=="PENGGUNA"){
        ?>
        <h4>Menu Pengguna</h4>
        <ul>
            <li><a href="index1.php">HOME</a></li><br>
            <li><a><?php include 'jenama_menu.php'; ?></a></li><br>
            <li><a><?php include 'produk_cari.php'; ?></a></li><br>
            <li><a href="logout.php">Log Keluar</a></li><br>
        </ul>
        <?php
        } elseif ($_SESSION['level']=="ADMIN") {
        ?>
        <h4>Menu ADMIN</h4>
        <ul>
            <li><a href="index1.php">HOME</a></li><br>
            <li><a href="produk.php">Senarai Produk</a></li><br>
            <li><a href="produk_tambah.php">Tambah Produk</a></li><br>
            <li><a href="pilihan.php">Pilihan Pengguna</a></li><br>
            <li><a href="logout.php">Log Keluar</a></li><br>
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