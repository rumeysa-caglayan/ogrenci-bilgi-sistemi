<?php 
include("baglan.php"); 
$sorgu = mysqli_query($baglanti, "SELECT * FROM ogrenci");
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="stil.css">
    <meta charset="utf-8">
    <title>Öğrenci Yönetim Paneli</title>
    <style>
        body { font-family: Arial; background: #f4f4f4; padding: 20px; }
        .container { background: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        .menu { background: #333; padding: 15px; border-radius: 5px; margin-bottom: 20px; }
        .menu a { color: white; text-decoration: none; margin-right: 20px; font-weight: bold; }
        table { width: 100%; border-collapse: collapse; }
        th { background: #007bff; color: white; padding: 12px; text-align: left; }
        td { padding: 12px; border-bottom: 1px solid #ddd; }
        .btn-sil { background: #d9534f; color: white; padding: 6px 12px; text-decoration: none; border-radius: 4px; font-size: 13px; }
        tr:hover { background: #f9f9f9; }
    </style>
</head>
<body>

<div class="container">
    <div class="menu">
        <a href="index.php">➕ Yeni Öğrenci Ekle</a> 
        <a href="liste.php">📋 Öğrenci Listesi</a>
    </div>

    <h2>Öğrenci Listesi</h2>

    <table>
        <tr>
            <th>ID</th>
            <th>Adı</th>
            <th>Soyadı</th>
            <th>Numara</th>
            <th>Bölüm</th>
            <th>Doğum Tarihi</th>
            <th>İşlemler</th>
        </tr>

        <?php while($satir =  mysqli_fetch_array($sorgu)) { ?>
        <tr>
            <td><?php echo $satir['id']; ?></td>
            <td><?php echo $satir['ad']; ?></td>
            <td><?php echo $satir['soyad']; ?></td>
            <td><?php echo $satir['numara']; ?></td>
            <td><?php echo $satir['bolum']; ?></td>
            <td><?php echo $satir['dogum_tarihi']; ?></td>
           
<td>
    <a href="duzenle.php?id=<?php echo $satir['id']; ?>" class="btn-duzenle">Düzenle</a>
    <a href="sil.php?id=<?php echo $satir['id']; ?>" class="btn-sil" onclick="return confirm('Silmek istediğinize emin misiniz?')">Sil</a>
</td>
        </tr>
        <?php } ?>
    </table>
</div>

</body>
</html>