-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 18 May 2018, 12:49:49
-- Sunucu sürümü: 5.7.17-log
-- PHP Sürümü: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `emlak`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_kadi` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `admin_sifre` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `admin_yetki` enum('0','1') COLLATE utf8_turkish_ci NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_kadi`, `admin_sifre`, `admin_yetki`) VALUES
(0, 'emlak', '89973a37174951d3726051e0aafbf481', '0');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayarlar`
--

CREATE TABLE `ayarlar` (
  `ayar_id` int(11) NOT NULL,
  `ayar_email` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_title` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_description` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_logo` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_telefon` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_facebook` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_twitter` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_hizmetler` varchar(1800) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `ayarlar`
--

INSERT INTO `ayarlar` (`ayar_id`, `ayar_email`, `ayar_title`, `ayar_description`, `ayar_logo`, `ayar_telefon`, `ayar_facebook`, `ayar_twitter`, `ayar_hizmetler`) VALUES
(1, 'pelikanemlak@gmail.com', 'Pelikan Emlak', 'Pelikan Emlak', 'admin/assets/img/user.png', ' +90 312 381 66 71', 'https://www.facebook.com/pelikanemlak', 'https://www.twitter.com/pelikanemlak', 'Pelikan Emlak emlak sektörünü tek bir çatı altında buluşturmayı hedefleyen, kesintisiz, yüksek kaliteli hizmeti, güncel ve detaylı ilanları, haberleri ile emlak sektörünün nabzını tutan emlak platformudur.');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ev`
--

CREATE TABLE `ev` (
  `ev_id` int(11) NOT NULL,
  `ev_fiyat` decimal(15,3) NOT NULL,
  `ev_oda` int(1) NOT NULL,
  `ev_tip` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `ev_adres` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `ev_baslik` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `ev_sekil` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ev_esya` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ev_banyo` int(1) NOT NULL,
  `ev_kat` int(2) NOT NULL,
  `ev_yakit` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ev_site` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `resim_url1` varchar(55) COLLATE utf8_turkish_ci NOT NULL,
  `resim_url2` varchar(55) COLLATE utf8_turkish_ci NOT NULL,
  `resim_url3` varchar(55) COLLATE utf8_turkish_ci NOT NULL,
  `resim_url4` varchar(55) COLLATE utf8_turkish_ci NOT NULL,
  `resim_url5` varchar(55) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `ev`
--

INSERT INTO `ev` (`ev_id`, `ev_fiyat`, `ev_oda`, `ev_tip`, `ev_adres`, `ev_baslik`, `ev_sekil`, `ev_esya`, `ev_banyo`, `ev_kat`, `ev_yakit`, `ev_site`, `resim_url1`, `resim_url2`, `resim_url3`, `resim_url4`, `resim_url5`) VALUES
(1, '55.000', 5, 'Satılık', 'pınarbaşı mah. şehit mustafa sönmez sk. 4/13', 'Pınarbaşında Daire', 'Apartman Dairesi', 'Evet', 1, 4, 'Doğalgaz', 'Hayır', 'ev2.jpg', 'ev1.jpg', 'ev3.jpg', 'ev4.jpg', 'ev5.jpg'),
(18, '25.000', 3, 'Kiralık', 'pınarbaşı mah. şehit mustafa sönmez sk. 4/5', 'Pınarbaşında Lüks Daire', 'Apartman Dairesi', 'Hayır', 1, 4, 'Soba/Kömür', 'Hayır', 'ev6.jpg', 'ev8.jpg', 'ev9.Jpeg', 'ev10.jpg', 'ev11.jpg'),
(19, '75.000', 4, 'Satılık', 'pınarbaşı mah. şehit mustafa sönmez sk. 7/1', 'Pınarbaşı', 'Apartman Dairesi', 'Hayır', 2, 7, 'Merkezi Isıtma', 'Hayır', 'ev9.Jpeg', '', '', '', ''),
(20, '55.400', 2, 'Kiralık', 'pınarbaşı mah. burhaniye sk. 5/5 ', 'Pınarbaşı', 'Apartman Dairesi', 'Evet', 1, 5, 'Doğalgaz', 'Hayır', 'ev10.jpg', '', '', '', ''),
(21, '100.000', 4, 'Kiralık', 'pınarbaşı mah. atak sk. 7/9', 'Pınarbaşı', 'Müstakil', 'Evet', 3, 3, 'Doğalgaz', 'Hayır', 'ev11.jpg', '', '', '', ''),
(22, '60.000', 1, 'Kiralık', 'pınarbaşı mah. avşar. 2/13', 'Pınarbaşı', 'Apartman Dairesi', 'Hayır', 2, 2, 'Kömür/Soba', 'Hayır', 'ev1.jpg', '', '', '', ''),
(23, '70.000', 3, 'Kiralık', 'tepebaşı mah. alaybey sk. 7/5', 'Tepebaşı', 'Müstakil', 'Evet', 2, 1, 'Merkezi Isıtma', 'Hayır', 'ev4.jpg', '', '', '', ''),
(24, '58.000', 4, 'Satılık', 'tepebaşı mah. alaybey sk. 2/16', 'Tepebaşı', 'Apartman Dairesi', 'Evet', 1, 2, 'Doğalgaz', 'Evet', 'ev5.jpg', '', '', '', ''),
(25, '35.000', 5, 'Satılık', 'şenlik mah. şehit tayfun sümer sk. 7/11', 'Şenlik', 'Apartman Dairesi', 'Evet', 2, 5, 'Doğalgaz', 'Evet', 'ev3.jpg', '', '', '', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `iletisim`
--

CREATE TABLE `iletisim` (
  `iletisim_id` int(11) NOT NULL,
  `iletisim_ad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `iletisim_tel` int(11) NOT NULL,
  `iletisim_mesaj` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `iletisim_email` varchar(50) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `iletisim_biz`
--

CREATE TABLE `iletisim_biz` (
  `iletisim_biz_id` int(11) NOT NULL,
  `iletisim_biz_tel` varchar(15) COLLATE utf8_turkish_ci NOT NULL,
  `iletisim_biz_fax` varchar(15) COLLATE utf8_turkish_ci NOT NULL,
  `iletisim_biz_email` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `iletisim_biz_adres` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `iletisim_biz_yer` varchar(50) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `iletisim_biz`
--

INSERT INTO `iletisim_biz` (`iletisim_biz_id`, `iletisim_biz_tel`, `iletisim_biz_fax`, `iletisim_biz_email`, `iletisim_biz_adres`, `iletisim_biz_yer`) VALUES
(0, '(0212) 456 78 9', '(0212) 456 78 9', 'pelikanemlak@gmail.com', 'Kızılay Limon Bazaar Pasaj içi NO:2/11', 'Ankara');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Tablo için indeksler `ayarlar`
--
ALTER TABLE `ayarlar`
  ADD PRIMARY KEY (`ayar_id`);

--
-- Tablo için indeksler `ev`
--
ALTER TABLE `ev`
  ADD PRIMARY KEY (`ev_id`);

--
-- Tablo için indeksler `iletisim`
--
ALTER TABLE `iletisim`
  ADD PRIMARY KEY (`iletisim_id`);

--
-- Tablo için indeksler `iletisim_biz`
--
ALTER TABLE `iletisim_biz`
  ADD PRIMARY KEY (`iletisim_biz_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `ev`
--
ALTER TABLE `ev`
  MODIFY `ev_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- Tablo için AUTO_INCREMENT değeri `iletisim`
--
ALTER TABLE `iletisim`
  MODIFY `iletisim_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
