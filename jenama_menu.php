<h4>JENAMA</h4>
<form action="jenama_pilihan.php" method="GET">
<?php
//pilih table jenama
$query_jenama= "SELECT * FROM jenama";
$papar_query_jenama= mysqli_query($conn, $query_jenama);
if(mysqli_num_rows($papar_query_jenama )>0){
foreach($papar_query_jenama as $senarai_brand){
    ?>
    <input type+"checkbox" name="brand" onclick="onlyOne2(this)"
    value="<?php echo $senarai_brand['idJenama'];?>">
    <?php echo $senarai_brand['namaJenama']; ?> </br>

    <?php } ?>
    <br>
    <button type="submit">PILIH</button>
</form>
<?php
} ?>