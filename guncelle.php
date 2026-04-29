<?php
include("baglan.php");

if ($_POST) {
    $id     = $_POST['id'];
    $ad     = $_POST['ad'];
    $soyad  = $_POST['soyad'];
    $numara = $_POST['numara'];
    $bolum  = $_POST['bolum'];
    $tarih  = $_POST['dogum_tarihi'];

    // UPDATE sorgusu ile verileri değiştiriyoruz
    $guncelle = mysqli_query($baglanti, "UPDATE ogrenci SET 
                ad='$ad', 
                soyad='$soyad', 
                numara='$numara', 
                bolum='$bolum', 
                dogum_tarihi='$tarih' 
                WHERE id=$id");

    if ($guncelle) {
        header("Location: liste.php?durum=ok"); // Başarılıysa listeye dön
    } else {
        echo "Güncelleme hatası: " . mysqli_error($baglanti);
    }
}
?>