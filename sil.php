<?php
include("baglan.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sil = mysqli_query($baglanti, "DELETE FROM ogrenci WHERE id = $id");

    if ($sil) {
        header("Location: liste.php"); // Silince listeye geri dön
    } else {
        echo "Silme hatası: " . mysqli_error($baglanti);
    }
}
?>