<html>
    <body>
        <h3>Pilihan Terbaik Untuk Anda</h3>
        <?php require 'connect.php';

        $query_random="SELECT * FROM produk ORDER BY rand() limit 3";
        $papar_query_random = mysqli_query($conn, $query_random );
        if (mysqli_num_rows($papar_query_random)>0)
        {
            foreach($papar_query_random as $senarai_produk)
            {
        ?>
        <div class="card">
        <div class="gambar">
            <img src="gambar/<?php echo $senarai_produk['gambar']; ?>"
            width="auto" height="120px">
        </div>
        <?php
            }
        } else {
            echo "tiada produk";
        }
        ?>
    </body>
    </div>
</html>