<?php
// Veritabanına bağlantı kur
$connection = mysqli_connect('localhost','root','','surucukursu');

// Kullanıcının girdiği bilgileri al
$username = mysqli_real_escape_string($connection, $_POST['Eposta']);
$password = mysqli_real_escape_string($connection, $_POST['password']);

// Veritabanından kullanıcının bilgilerini çek
$sql = "SELECT * FROM ogrenciler WHERE EPosta = '$username' AND sifre = '$password'";
$result = mysqli_query($connection, $sql);

// Eğer kullanıcı bulunursa, ogrenci.php sayfasına yönlendir
if (mysqli_num_rows($result) > 0) {
  // Kullanıcının bilgilerini satır olarak al
  $row = mysqli_fetch_assoc($result);
  // Kullanıcının UserID'sine göre yönlendirme yap
 
    header("Location: ogrenci.php");
  
  exit;
}

 else {
  // Kullanıcı bulunamazsa, hata mesajı göster
  echo "Böyle bir kullanıcı bulunamadı.";
}

// Bağlantıyı kapat
mysqli_close($connection);