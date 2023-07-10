<?php
include 'header.php';
?>
<html>
    <div id="menu">
        <?php include 'menu1.php'; ?>
    </div>
    <div id="isi">
        <head>
            <center>
                <h3>
                    SELAMAT DATANG ke <?php echo $kedai;  ?>
                </h3>
                <marquee behavior="alternate">
                    Sila login untuk memilih barangan yang hendak dibeli
                </marquee>
            </center>
        </head>
        <?php include 'welcome.php' ?>
    </div>
</html>