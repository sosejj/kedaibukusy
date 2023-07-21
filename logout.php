<?php
session_start();
session_destroy(); // tamatkan keseluruhan session user
header ("location:index.php"); // bawa ke home
?>