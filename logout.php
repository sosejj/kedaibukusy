<?php
session_start();
session_destroy(); // tamatkan keseluruhan session user
header ("location:index1.php"); // bawa ke home
?>