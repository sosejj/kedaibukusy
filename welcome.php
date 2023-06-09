<html>
    <body>
        <h3>Pilihan Terbaik Untuk Anda</h3>
        <?php require 'connect.php';

        $query_random="SELECT * FROM produk ORDER BY rand() limit 3";
        $papar_query_random = mysqli_query($conn, $query_random );
        if (mysqli_num_rows($papar))