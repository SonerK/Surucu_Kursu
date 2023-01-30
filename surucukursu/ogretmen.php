<html>
  <head>
   
    <title>ÖĞRETMEN</title>
    <link href="ogretmen.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <nav>
    <a href="anasayfa.php" target="_self">
    <img src="img/logo.png" alt="Sürücü Kursu">
    <div class="nav-items">
      
      <a href="TrafikIsaretleri.php">Trafik İşaretleri</a>
      <a href="TrafikKuralları.php">Trafik Kuraları</a>
      <a href="iletisim.php">İletişim</a>
      <span class="hosgeldiniz">ÖĞRETMEN PANEL</span>
    </nav>
    
    <table class="TABLE">
    <div id="ders">
<h1> DERSLER </h1>
  <tr>
    <th>DersId</th>
    <th>DersAdı</th>
    <th>KursId</th>
    </div>
    
  </tr>
  <?php
  $server = "localhost";  // Sunucu
  $user = "root";  // Veritabanı Kullanıcıadı
  $password = "";  // Veritabanı Şifre
  $nameDB="surucukursu";
  $connection = mysqli_connect($server, $user, $password,$nameDB);
  // Veritabanından öğretmenleri çek
  $sql = "SELECT * FROM dersler";
  $result = mysqli_query($connection,$sql);
  // Öğretmenleri tablo olarak ekrana yazdır
  while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row['DersId'] . "</td>";
    echo "<td>" . $row['DersAdı'] . "</td>";
    echo "<td>" . $row['KursId'] . "</td>";
   
    echo "</tr>";
  }

  ?>
</table>
    
  </body>
</html>