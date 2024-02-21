-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 21 Şub 2024, 18:44:32
-- Sunucu sürümü: 8.0.17
-- PHP Sürümü: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `banka`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `gelir_gider`
--

CREATE TABLE `gelir_gider` (
  `id` int(11) NOT NULL,
  `aciklama` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `tarih` date NOT NULL,
  `gelir` float NOT NULL,
  `gider` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `gelir_gider`
--

INSERT INTO `gelir_gider` (`id`, `aciklama`, `tarih`, `gelir`, `gider`) VALUES
(1, 'MAAŞ', '2024-02-01', 5000, 0),
(3, 'YEMEK', '2024-02-08', 0, 300),
(4, 'ULAŞIM', '2024-02-07', 0, 50),
(6, 'KIRTASİYE', '2024-02-01', 0, 100),
(7, 'KIYAFET', '2024-02-07', 0, 500),
(8, 'MARKET', '2024-02-08', 0, 50),
(35, 'BURS', '2024-02-12', 1500, 0),
(58, 'YEMEK', '2024-02-12', 0, 100),
(69, 'ULAŞIM', '2024-02-13', 0, 10),
(71, 'TELEFON FATURA', '2024-02-06', 0, 180.97),
(72, 'MARKET', '2024-02-02', 0, 250.25),
(73, 'MARKET', '2024-02-14', 0, 50),
(74, 'MARKET', '2024-02-16', 0, 180),
(75, 'ULAŞIM', '2024-02-18', 0, 10),
(76, 'YEMEK', '2024-02-18', 0, 150),
(78, 'MARKET', '2024-02-18', 0, 348.25),
(79, 'ULAŞIM', '2024-02-19', 0, 10),
(80, 'YEMEK', '2024-02-19', 0, 69.8),
(81, 'ULAŞIM', '2024-02-20', 0, 10),
(82, 'ULAŞIM', '2024-02-01', 0, 10),
(83, 'YEMEK', '2024-02-20', 0, 70),
(85, 'MARKET', '2024-02-20', 0, 25);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `gelir_gider`
--
ALTER TABLE `gelir_gider`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `gelir_gider`
--
ALTER TABLE `gelir_gider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
