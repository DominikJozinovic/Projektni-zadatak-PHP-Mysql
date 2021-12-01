<?php

$servername = "localhost";
$user = "root";
$password = "";
$database = "članstvo";

$db = mysqli_connect($servername, $user, $password, $database);
$_SESSION['db'] = $db;

?>