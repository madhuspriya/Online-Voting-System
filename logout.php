<?php 
session_start();
session_destroy();
header("location: ../routes/index.php")
?>