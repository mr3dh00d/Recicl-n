<?php
$server = 'localhost';
$username = '/*Username*/';
$password = '/*Password*/';
$database = 'reciclon';
$db = mysqli_connect($server, $username, $password, $database);
mysqli_query($db, "SET NAMES 'utf-8'");
?>
