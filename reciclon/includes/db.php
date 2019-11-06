<?php
$server = 'localhost';
$username = 'admin';
$password = 'Admin246?';
$database = 'reciclon';
$db = mysqli_connect($server, $username, $password, $database);
mysqli_query($db, "SET NAMES 'utf-8'");
?>
