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
    <body>
        <input type="button" value="++" onclick="zoomin()"/>
        <input type="button" value="--" onclick="zoomout()"/>
        <button id="color">Warna Rawak</button>
    </body>
    <script>
        document.getElementById('color').onclick = changeColor;
        var colors = ["red", "blue", "black"];
        var currentColorIndex = 0;
        function changeColor() {
            currentColorIndex = Math.floor(Math.random() * colors.length);
            document.body.style.color = colors[currentColorIndex];
        }
    </script>
</html>