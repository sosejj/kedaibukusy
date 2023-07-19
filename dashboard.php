<?php
// session_start();
?>
<html>
<!-- panggil header -->
<?php include 'header.php' ?>
<!-- panggil menu -->
<div id="menu">
    <?php include 'menu2.php' ?>
</div>
<!-- papar isi -->
<div id="isi">
<!-- papar ucapan -->
    <head>
        <h2 style="text-align:center">SELAMAT DATANG
        <?php if (isset($_SESSION['nama'])) {
            echo $_SESSION['nama'];
        }
        ?></h2>
    </head>
    <!-- papar page -->
    <?php include 'welcome.php' ?></h2>
</div>
</html>