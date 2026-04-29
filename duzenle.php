<?php 
include("baglan.php"); 
$id = $_GET['id']; // Listeden gelen ID'yi alıyoruz
$sorgu = mysqli_query($baglanti, "SELECT * FROM ogrenci WHERE id=$id");
$satir = mysqli_fetch_array($sorgu);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Öğrenci Düzenle</title>
    <link rel="stylesheet" href="stil.css"> <style>
        body { font-family: Arial; background: #f4f4f4; padding: 20px; }
        .form-container { background: white; padding: 20px; max-width: 500px; margin: auto; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        input { width: 100%; padding: 10px; margin: 10px 0; border: 1px solid #ddd; border-radius: 4px; box-sizing: border-box; }
        .btn-guncelle { background: #27ae60; color: white; border: none; padding: 10px; width: 100%; cursor: pointer; border-radius: 4px; font-size: 16px; }
    </style>
</head>
<body>

<div class="form-container">
    <h2>Öğrenci Bilgilerini Güncelle</h2>
    <form action="guncelle.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $satir['id']; ?>">
        
        Adı: <input type="text" name="ad" value="<?php echo $satir['ad']; ?>">
        Soyadı: <input type="text" name="soyad" value="<?php echo $satir['soyad']; ?>">
        Numara: <input type="text" name="numara" value="<?php echo $satir['numara']; ?>">
        Bölüm: <input type="text" name="bolum" value="<?php echo $satir['bolum']; ?>">
        Doğum Tarihi: <input type="date" name="dogum_tarihi" value="<?php echo $satir['dogum_tarihi']; ?>">
        
        <button type="submit" class="btn-guncelle">Değişiklikleri Kaydet</button>
    </form>
    <br>
    <a href="liste.php">Vazgeç ve Listeye Dön</a>
</div>

</body>
</html>