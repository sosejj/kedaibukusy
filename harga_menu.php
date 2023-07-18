<center>
    <div>
        <form action="jenama_harga.php?idJenama=<?php echo $idBrand; ?>" method="POST">
        <h4>Pilihan Harga</h4>
        <div>
            Bermula RM
            <input type="text" name="harga1" size="5" placeholder="100.00"
            onkeypress='return event.charCode>= 48 && event.charCode<=57' autofocus>
            Hingga RM
            <input type="text" name="harga2" size="5" placeholder="200.00"
            onkeypress='return event.charCode>= 48 && event.charCode<=57' size="5">
        </div>
        <h5>
            <button name="pilih" type="submit">SEARCH</button>
        </h5>
</form>
</div>
</center>