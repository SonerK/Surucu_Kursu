<html>
  <head>
  <title>ADMİN</title>
  <link href="adminpanel.css" rel="stylesheet" type="text/css">

 </head>
 <body>
 <nav>
    <a href="anasayfa.php" target="_self">
    <img src="img/logo.png" alt="Sürücü Kursu">
    <div class="nav-items">
      
      <a href="TrafikIsaretleri.php">Trafik İşaretleri</a>
      <a href="TrafikKuralları.php">Trafik Kuraları</a>
      <a href="iletisim.php">İletişim</a>
      <span class="admin">ADMİN PANEL</span>
    </nav>
</body>
<table>
<h1>ÖĞRETMENLER</h1>
  <tr>
    <th>OgretmenId</th>
    <th>Ad</th>
    <th>Soyad</th>
    <th>Dogum Tarihi</th>
    <th>TelefonNo</th>
    <th>Eposta</th>
    <th>Sifre</th>
    <th>DersId</th>
  </tr>
  <?php
  $server = "localhost";  // Sunucu
  $user = "root";  // Veritabanı Kullanıcıadı
  $password = "";  // Veritabanı Şifre
  $nameDB="surucukursu";
  $connection = mysqli_connect($server, $user, $password,$nameDB);
  // Veritabanından öğretmenleri çek
  $sql = "SELECT * FROM ogretmenler";
  $result = mysqli_query($connection,$sql);
  // Öğretmenleri tablo olarak ekrana yazdır
  while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row['OgretmenId'] . "</td>";
    echo "<td>" . $row['Ad'] . "</td>";
    echo "<td>" . $row['Soyad'] . "</td>";
    echo "<td>" . $row['DogumTarihi'] . "</td>";
    echo "<td>" . $row['TelefonNo'] . "</td>";
    echo "<td>" . $row['Eposta'] . "</td>";
    echo "<td>" . $row['Sifre'] . "</td>";
    echo "<td>" . $row['DersId'] . "</td>";
    echo "</tr>";
  }

  ?>
</table>
<table>
<h1>ÖĞRENCİLER</h1>

<tr>
    <th>Id</th>
    <th>Ad</th>
    <th>Soyad</th>
    <th>Şifre</th>
    <th>Eposta</th>
    <th>TelefonNo</th>  
    <th>UserId</th>
   
  </tr>
 
<?php

$server = "localhost";  // Sunucu
$user = "root";  // Veritabanı Kullanıcıadı
$password = "";  // Veritabanı Şifre
$nameDB="surucukursu";
$connection = mysqli_connect($server, $user, $password,$nameDB);
// Veritabanından öğrencileri çek
$sql = "SELECT * FROM ogrenciler";
$result = mysqli_query($connection,$sql);

while ($row = mysqli_fetch_assoc($result)) {
  
    echo "<tr>";
    echo "<td>" . $row['Id'] . "</td>";
    echo "<td>" . $row['Ad'] . "</td>";
    echo "<td>" . $row['Soyad'] . "</td>";
    echo "<td>" . $row['sifre'] . "</td>";
    echo "<td>" . $row['EPosta'] . "</td>";
    echo "<td>" . $row['TelefonNo'] . "</td>";
    echo "<td>" . $row['UserId'] . "</td>";
   
    echo "</tr>";
  }
?>
  </table>
</html>

