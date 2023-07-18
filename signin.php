<h3> Log Masuk </h3>
<form method = "post" action="signin_semak.php">
    <div>
        No. Kad Pengenalan: <br>
        <input onblur="checkLength(this)" type="text" name="username" placeholder="Sila isi" maxlength="12"
        size="25" onkeypress='return event.charCode >=48 && event.charCode <=57'required autofocus />
        <script>
            function checkLength (e1) {
                if (e1.value.length != 12) {
                    alert("Bilangan ID tidak mencukupi")
                } else {
                    alert("Bilangan ID sudah mencukupi")
                }
            }
        </script>
        <br><br>
        Kata Laluan = : <br>
        <input type="password" name="password" placeholder="**************" size="15%" required/>
    </div>
    <div>
        <br>
        <button name="hantar" type="submit">LOGIN</button>
        <button type="reset">RESET</button>
    </div>
</form>