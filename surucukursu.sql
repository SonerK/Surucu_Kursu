-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 30 Ara 2022, 13:15:28
-- Sunucu sürümü: 10.4.27-MariaDB
-- PHP Sürümü: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `surucukursu`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `dersler`
--

CREATE TABLE `dersler` (
  `DersId` int(11) NOT NULL,
  `DersAdı` text NOT NULL,
  `KursId` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `dersler`
--

INSERT INTO `dersler` (`DersId`, `DersAdı`, `KursId`) VALUES
(1, 'Trafik Dersi', 1),
(2, 'Trafik Dersi\r\n', 2),
(3, 'Trafik Dersi\r\n', 3),
(4, 'Trafik Dersi\r\n', 4),
(5, 'Motor Dersi\r\n', 1),
(6, 'Motor Dersi\r\n', 2),
(7, 'Motor Dersi\r\n', 3),
(8, 'Motor Dersi\r\n', 4),
(9, 'İlk Yardım Dersi', 1),
(10, 'İlk Yardım Dersi\r\n', 2),
(11, 'İlk Yardım Dersi\r\n', 3),
(12, 'İlk Yardım Dersi\r\n', 4),
(13, 'Direksiyon Dersi', 1),
(14, 'Direksiyon Dersi', 2),
(15, 'Direksiyon Dersi', 3),
(16, 'Direksiyon Dersi', 4);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kurslar`
--

CREATE TABLE `kurslar` (
  `KursId` int(11) NOT NULL,
  `KursAdı` text NOT NULL,
  `KursTarihi` date NOT NULL,
  `KursSüresi(saat)` int(100) NOT NULL,
  `DersProgramı` text NOT NULL,
  `Fiyat` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `kurslar`
--

INSERT INTO `kurslar` (`KursId`, `KursAdı`, `KursTarihi`, `KursSüresi(saat)`, `DersProgramı`, `Fiyat`) VALUES
(1, 'A2 Ehliyeti Kursu', '2022-12-30', 35, 'Trafik Dersi\r\nMotor Dersi\r\nİlk Yardım Dersi\r\nDireksiyon Dersi', 6800.95),
(2, 'B Ehliyeti Kursu', '2023-01-10', 45, 'Trafik Dersi\r\nMotor Dersi\r\nİlk Yardım Dersi\r\nDireksiyon Dersi', 10458.95),
(3, 'D Ehliyeti Kursu', '2023-01-09', 30, 'Trafik Dersi\r\nMotor Dersi\r\nİlk Yardım Dersi\r\nDireksiyon Dersi', 15000.68),
(4, 'E Ehliyeti Kursu', '2023-02-07', 34, 'Trafik Dersi\r\nMotor Dersi\r\nİlk Yardım Dersi\r\nDireksiyon Dersi', 14000.47);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ogrenciler`
--

CREATE TABLE `ogrenciler` (
  `Id` int(11) NOT NULL,
  `Ad` text CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `Soyad` text CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `sifre` varchar(50) NOT NULL,
  `EPosta` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `TelefonNo` int(11) NOT NULL,
  `UserId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `ogrenciler`
--

INSERT INTO `ogrenciler` (`Id`, `Ad`, `Soyad`, `sifre`, `EPosta`, `TelefonNo`, `UserId`) VALUES
(2, 'Soner', 'Kutlu', 'ogrenci20021994', 'snrktl35@hotmail.com', 2147483647, 1),
(3, 'Görkem', 'Emin', '20021994', 'gork@gmail.com', 2147483647, 2),
(5, 'görkem', 'emin', '123456', 'gorkem123@gmail.com', 2147483647, 0),
(6, 'görkem', 'Verengiller', '123456', 'gorkem123@gmail.com', 2147483647, 0),
(7, 'batu', 'göktaş', '123456', 'batu@gmail.com', 2147483647, 0),
(8, 'batu', 'göktaş', '123456', 'batu@gmail.com', 2147483647, 0),
(9, 'Soner', 'kulu', '123456', 'snrktl@gmail.com', 50608755, 0),
(10, 'Soner', 'kulu', '123456', 'snrktl@gmail.com', 50608755, 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ogrenikurs`
--

CREATE TABLE `ogrenikurs` (
  `OgrenciId` int(11) NOT NULL,
  `KursId` int(11) NOT NULL,
  `KayıtTarihi` int(11) NOT NULL,
  `OgrenciKursId` int(11) NOT NULL,
  `DersId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ogretmenler`
--

CREATE TABLE `ogretmenler` (
  `OgretmenId` int(11) NOT NULL,
  `Ad` text NOT NULL,
  `Soyad` text NOT NULL,
  `DogumTarihi` date NOT NULL,
  `TelefonNo` bigint(11) NOT NULL,
  `Eposta` text NOT NULL,
  `Sifre` text NOT NULL,
  `DersId` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `ogretmenler`
--

INSERT INTO `ogretmenler` (`OgretmenId`, `Ad`, `Soyad`, `DogumTarihi`, `TelefonNo`, `Eposta`, `Sifre`, `DersId`) VALUES
(1, 'Soner', 'Kutlu', '2002-09-27', 5060587223, 'snrktl35@hotmail.com', 'ogretmen20021994', '1,3'),
(2, 'Görkem', 'Emin', '2003-04-04', 5458521478, 'gork@gmail.com', '123456', '14,15,16'),
(3, 'Aziz', 'Ergezer', '2022-02-08', 5358741258, 'Aziz@gmail.com', '123456', '9,10,11,12'),
(4, 'Mahmut Berk', 'Yaman', '2002-12-20', 5647221456, 'mahmut@gmail.com', '1234567', '5,13'),
(5, 'Hüseyin', 'Menak', '2001-08-09', 5624785214, 'huseyin@gmail.com', '123456', '2,4'),
(6, 'Celal', 'Zeyrek', '2002-12-20', 5365847125, 'celal@gmail.com', '123456', '6'),
(7, 'Faruk', 'Gümüş', '2002-12-20', 5412369852, 'faruk@gmail.com', '123456', '7,8');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yoneticiler`
--

CREATE TABLE `yoneticiler` (
  `YoneticiId` int(11) NOT NULL,
  `Ad` text NOT NULL,
  `Soyad` text NOT NULL,
  `EPosta` text NOT NULL,
  `Sifre` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `yoneticiler`
--

INSERT INTO `yoneticiler` (`YoneticiId`, `Ad`, `Soyad`, `EPosta`, `Sifre`) VALUES
(1, 'Soner', 'Kutlu', 'snrktl35@gmail.com', '123456789'),
(2, 'Görkem', 'Emin', 'gorkem@gmail.com', '123456789');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `dersler`
--
ALTER TABLE `dersler`
  ADD PRIMARY KEY (`DersId`);

--
-- Tablo için indeksler `kurslar`
--
ALTER TABLE `kurslar`
  ADD PRIMARY KEY (`KursId`);

--
-- Tablo için indeksler `ogrenciler`
--
ALTER TABLE `ogrenciler`
  ADD PRIMARY KEY (`Id`);

--
-- Tablo için indeksler `ogrenikurs`
--
ALTER TABLE `ogrenikurs`
  ADD PRIMARY KEY (`OgrenciKursId`);

--
-- Tablo için indeksler `ogretmenler`
--
ALTER TABLE `ogretmenler`
  ADD PRIMARY KEY (`OgretmenId`);

--
-- Tablo için indeksler `yoneticiler`
--
ALTER TABLE `yoneticiler`
  ADD PRIMARY KEY (`YoneticiId`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `dersler`
--
ALTER TABLE `dersler`
  MODIFY `DersId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Tablo için AUTO_INCREMENT değeri `kurslar`
--
ALTER TABLE `kurslar`
  MODIFY `KursId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `ogrenciler`
--
ALTER TABLE `ogrenciler`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Tablo için AUTO_INCREMENT değeri `ogrenikurs`
--
ALTER TABLE `ogrenikurs`
  MODIFY `OgrenciKursId` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `ogretmenler`
--
ALTER TABLE `ogretmenler`
  MODIFY `OgretmenId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Tablo için AUTO_INCREMENT değeri `yoneticiler`
--
ALTER TABLE `yoneticiler`
  MODIFY `YoneticiId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
