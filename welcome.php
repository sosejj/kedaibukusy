<html>
    <body>
        <h2><u>Selamat Datang
        <?php if (isset($_SESSION['nama'])) {
            echo $_SESSION['nama']; ?></u></h2>
        <?php } else {
            ?> ke <?php echo $kedai; ?></u></h2>
        <?php } ?>
        <marquee style="font-size: 20px">~Pilihan Terbaik Untuk Anda~</marquee>
        <?php require 'connect.php';

        $query_random="SELECT * FROM produk ORDER BY rand() limit 3";
        $papar_query_random = mysqli_query($conn, $query_random);
        if (mysqli_num_rows($papar_query_random)>0)
        {
            foreach($papar_query_random as $senarai_produk)
            {
            ?>
            <div class="card">
                <!-- paparkan gambar produk -->
                <img alt= "Gambar Produk" class="gambar" src="gambar/<?php echo $senarai_produk['gambar']; ?>">
                <!-- paparkan butiran produk -->
                <h3><?php echo $senarai_produk['namaProduk'];?></h3>
                <p><?php echo $senarai_produk['deskripsi']?></p>
            </div>
        <?php
            }
        } else {
            echo "Tiada Produk";
        }
        ?>
    </body>
</html>