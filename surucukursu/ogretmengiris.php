
<html>
<head>
<title>ÖĞRETMEN GİRİŞ</title>
<link href="ogretmengiris.css" rel="stylesheet" type="text/css">
</head>
    
   
<body>
    
  <nav>
    <a href="anasayfa.php" target="_self">
    <img src="img/logo.png" alt="Sürücü Kursu">
    <div class="nav-items">
      <a href="TrafikIsaretleri.php">Trafik İşaretleri</a>
      <a href="TrafikKuralları.php">Trafik Kuraları</a>
      <a href="iletisim.php">İletişim</a>
      <span class="ogretmen2">ÖĞRETMEN GİRİŞ PANELİ</span>
    </nav></div>
<div class="ogretmen" id="ogretmen">
<form action="ogretmenbaglantı.php" method="post">
      <label for="username">Eposta:</label><br>
      <input type="text" id="Eposta" name="Eposta"><br>
      <label for="password">Parola:</label><br>
      <input type="password" id="password" name="password"><br><br>
      <input type="submit" value="Giriş Yap">
      </form> 

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
</body>
</html>



