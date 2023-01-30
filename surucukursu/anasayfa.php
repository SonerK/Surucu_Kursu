<!DOCTYPE html>
<html>
<head>
<link href="anasayfa.css" rel="stylesheet" type="text/css">
  <title>SÜRÜCÜ KURSU</title>
  <script>
  // Görsellerin sırasını tutan dizi
  var images = ["img/araba.jpg", "img/araba2.jpg", "img/surucu.jpg", "img/araba3.jpg", "img/surucu2.jpg", "img/araba4.jpg"];
  // Şuanki görselin indeksi
  var currentImageIndex = 0;
  // Görseller arası geçiş süresi (milisaniye cinsinden)
  var transitionTime = 3000;

  // Görselleri değiştirme fonksiyonu
  function changeImage() {
    // Şuanki görseli gizle
    document.getElementsByClassName("slide")[0].style.display = "none";
    // Şuanki görsel indeksini bir arttır
    currentImageIndex++;
    // Eğer son görsel ise, indeksi ilk görsele çevir
    if (currentImageIndex >= images.length) {
      currentImageIndex = 0;
    }
    // Sonraki görseli göster
    document.getElementsByClassName("slide")[0].style.display = "block";
    document.getElementsByClassName("slide")[0].getElementsByTagName("img")[0].src = images[currentImageIndex];
  }

  // Görselleri değiştirme fonksiyonunu düzenli aralıklarla çağır
  setInterval(changeImage, transitionTime);
</script>
  
  
  <script>
 
  function toggleNavPanel() {
    var panel = document.getElementById("navPanel");
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  }
</script>



</head>
<body>
  
 
  <nav>
    <a href="anasayfa.php" target="_self">
    <img src="img/logo.png" alt="Sürücü Kursu">
    <div class="nav-items">
      <a href="TrafikIsaretleri.php">Trafik İşaretleri</a>
      <a href="TrafikKuralları.php">Trafik Kuraları</a>
      <a href="iletisim.php">İletişim</a>
      <!-- Giriş butonu -->
      <a href="#" onclick="toggleNavPanel()">Giriş Yap</a>
     
      


 <div class="nav-toggle" onclick="toggleNavPanel()">&#9776;</div>
  </nav>


  <div class="nav-panel" id="navPanel">
   
    <form action="ogrencibaglanti.php" method="post">
      <label for="username">Eposta:</label><br>
      <input type="text" id="Eposta" name="Eposta"><br>
      <label for="password">Parola:</label><br>
      <input type="password" id="password" name="password"><br><br>
      <input type="submit" value="Giriş Yap">
      <a href="uyeol.php">Kaydol</a>
       <a href="ogretmengiris.php">Öğretmen Girişi</a>
       <a href="admingiris.php">Yönetici Girişi</a>
      
    </form> 
  </div>
  
  
  <div id="slider">
  <div class="slide">
    <img src="img/araba.jpg" alt="araba.jpg">
  </div>
  <div class="slide">
    <img src="img/araba2.jpg" alt="araba2.jpg">
  </div>
  <div class="slide">
    <img src="img/surucu.jpg" alt="surucu.jpg">
  </div>
  <div class="slide">
    <img src="img/araba3.jpg" alt="araba3.jpg">
  </div>
  <div class="slide">
    <img src="img/surucu2.jpg" alt="surucu2.jpg">
  </div>
  <div class="slide">
    <img src="img/araba4.jpg" alt="araba4.jpg">
  </div>

  </div>
</div>
  
  <h1>Sürücü Kursu</h1>
  <p>KALİTELİ EĞİTİMİN ADRESİNE HOŞGELDİNİZ!<br>
    UZMAN VE TECRÜBELİ KADROSU<br>
    TERTEMİZ VE DÜZENLİ SINIFLARI<br>
    OLAĞANÜSTÜ VE SON MODEL ARAÇLARI<br>
    İLE SÜRÜCÜ KURSUMUZ DAİMA HİZMETİNİZDE!
</p>




  <h2>Neler Öğreneceksiniz?</h2>
  <ul>
    <li>EHLİYET ALMAK İÇİN GEREKLİ PROSEDÜRLER</li>
    <li>TRAFİK KURALLARI</li>
    <li>TRAFİK İŞARETLERİ</li>
    <li>GÜVENLİ SÜRÜŞ TEKNİKLERİ</li>
  </ul>

  <h2>Eğitmenlerimiz</h2>
  <p>EĞİTMENLERİMİZ, YILLARIN DENEYİMİYLE SÜRÜCÜ LİSANSI ALMAK İSTEYENLER İÇİN <br>EN İYİ EĞİTİMİ VERİYOLAR.</p>

  
</body>