<!DOCTYPE html>
<html>
<head>
<link href="uyeol.css" rel="stylesheet" type="text/css">
  
    <title>ÜYE OL</title>
    
</head>
<body>
<nav>
<a href="anasayfa.php" target="_self">
    <img src="img/logo.png" alt="Sürücü Kursu">
    <div class="nav-items">
    
      <a href="TrafikIsaretleri.php">Trafik İşaretleri</a>
      <a href="TrafikKuralları.php">Trafik Kuraları</a>
      <a href="iletisim.php">İletişim</a>
      <span class="uyeol">ÜYE OL</span>

    </nav>
   
    <form action="uyeveri.php" method="post">
         Ad: <input type="text" name="firstname"><br>
        Soyad: <input type="text" name="lastname"><br>
        Şifre: <input type="password" name="password"><br>
       
        Email: <input type="email" name="email"><br>
        Telefon: <input type="tel" name="phone"><br>
      
        <input type="submit" value="Üye Ol">
    </form>
    
    
    
</body>
</html>