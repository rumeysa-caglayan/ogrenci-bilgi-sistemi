<?php
include("baglan.php"); 

if ($_POST) {
    $ad     = $_POST['ad'];
    $soyad  = $_POST['soyad'];
    $numara = $_POST['numara'];
    $bolum  = $_POST['bolum'];
    $tarih  = $_POST['dogum_tarihi'];

    $sorgu = "INSERT INTO ogrenci (ad, soyad, numara, bolum, dogum_tarihi) 
              VALUES ('$ad', '$soyad', '$numara', '$bolum', '$tarih')";

    if (mysqli_query($baglanti, $sorgu)) {
        echo "<h2>Kayıt Başarılı!</h2>";
		echo "<br><br><a href='liste.php' style='padding:10px; background:#007bff; color:white; text-decoration:none; border-radius:5px;'>Listeye Git</a>";
		echo "<br><a href='liste.php'>Öğrenci Listesini Gör</a>";
        echo "<a href='index.php'>Yeni Kayıt Ekle</a>";
    } else {
        echo "Hata oluştu: " . mysqli_error($baglanti);
    }
}
?>