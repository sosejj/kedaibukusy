<html>
    <script>
        var fontsize=1;
        function zoomin(){
            fontsize += 0.1;
            document.body.style.fontSize = fontsize+"em";
        }
        function zoomout() {
            fontsize -= 0.1;
            document.body.style.fontSize = fontsize+"em";
        }
    </script>
    <center>
        <input type="button" value="++" onclick="zoomin()"/>
        <input type="button" value="--" onclick="zoomout()"/>
        <button id="color">Warna</button>
    </center>
    <script>
        document.getElementbyId('color').onclick=changeColor;
        var currentColor="red";  
        function changeColor() {
            if(currentColor=="red"){
                document.body.style.color="blue";
                currentColor="blue";
            } else {
                document.body.style.color="red";
                currentColor ="red";
            }
        }     
    </script>
</html>