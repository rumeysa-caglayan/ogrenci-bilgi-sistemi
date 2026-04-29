<?php
$host = "localhost";
$user = "root";
$pass = ""; 
$db   = "rumeysa"; 

$baglanti = mysqli_connect($host, $user, $pass, $db);
mysqli_set_charset($baglanti, "utf8");

if (!$baglanti) {
    die("Bağlantı hatası: " . mysqli_connect_error());
}
?>