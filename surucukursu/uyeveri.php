<?php
// Veritabanına bağlantı kur
$connection = mysqli_connect('localhost','root','','surucukursu');

// Kullanıcının girdiği bilgileri al
$name = mysqli_real_escape_string($connection, $_POST['firstname']);
$surname = mysqli_real_escape_string($connection, $_POST['lastname']);
$password = mysqli_real_escape_string($connection, $_POST['password']);
$email = mysqli_real_escape_string($connection, $_POST['email']);
$phone = mysqli_real_escape_string($connection, $_POST['phone']);

// Veritabanına bilgileri ekleme sorgusu
$sql = "INSERT INTO ogrenciler (Ad, Soyad, sifre, EPosta, TelefonNo) VALUES ('$name', '$surname', '$password', '$email', '$phone')";
mysqli_query($connection, $sql);

// Bağlantıyı kapat
if (!mysqli_query($connection, $sql)) {
    // Hata oluştu, hata mesajını ekrana yazdır
    echo "Hata: " . mysqli_error($connection);
  } else
    // Veritabanına ekleme işlemi başarılı, anasayfaya yönlendir
    header("Location: anasayfa.php");
    exit;
  
mysqli_close($connection);