-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 04 May 2016, 12:43:46
-- Sunucu sürümü: 5.6.21
-- PHP Sürümü: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `staj_blg_veritabani`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tbl_akademisyen`
--

CREATE TABLE IF NOT EXISTS `tbl_akademisyen` (
`id` int(10) NOT NULL,
  `ad` varchar(250) NOT NULL,
  `soyad` varchar(250) NOT NULL,
  `tc` varchar(11) DEFAULT NULL,
  `unvan` varchar(50) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin5;

--
-- Tablo döküm verisi `tbl_akademisyen`
--

INSERT INTO `tbl_akademisyen` (`id`, `ad`, `soyad`, `tc`, `unvan`, `user_id`) VALUES
(1, 'Ali', 'Görür', '10844771122', 'Araştırma Görevlisi', 1),
(2, 'Remzi', 'Çildoğan', '34727952868', 'Ordinaryus Profesör Doktor', 4);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tbl_bildirim`
--

CREATE TABLE IF NOT EXISTS `tbl_bildirim` (
`id` int(11) NOT NULL,
  `bildirim` varchar(200) NOT NULL,
  `icerik` text NOT NULL,
  `tarih` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin5;

--
-- Tablo döküm verisi `tbl_bildirim`
--

INSERT INTO `tbl_bildirim` (`id`, `bildirim`, `icerik`, `tarih`) VALUES
(1, 'Konferans', 'Ktü Developer Day etkinliği yapıldı.', '10-10-2015'),
(2, 'Hamsi Etkinliği', 'Hamsi etkinliği yapıldı.', '26-04-2016');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tbl_bolum`
--

CREATE TABLE IF NOT EXISTS `tbl_bolum` (
`id` int(11) NOT NULL,
  `bolum_adi` varchar(200) NOT NULL,
  `fakulte_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin5;

--
-- Tablo döküm verisi `tbl_bolum`
--

INSERT INTO `tbl_bolum` (`id`, `bolum_adi`, `fakulte_id`) VALUES
(1, 'Yazılım Mühendisliği', 1),
(2, 'İnşaat Mühendisliği', 2);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tbl_duyuru`
--

CREATE TABLE IF NOT EXISTS `tbl_duyuru` (
`id` int(10) NOT NULL,
  `baslik` varchar(200) NOT NULL,
  `icerik` text NOT NULL,
  `tarih` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin5;

--
-- Tablo döküm verisi `tbl_duyuru`
--

INSERT INTO `tbl_duyuru` (`id`, `baslik`, `icerik`, `tarih`) VALUES
(2, 'Haberler', 'Staj başvuruları bitmiştir.', '11-11-2015'),
(3, 'Tasarım Bitti', 'İnternet sitesi tasarımı bitti.', '27-04-2016');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tbl_etkinlik`
--

CREATE TABLE IF NOT EXISTS `tbl_etkinlik` (
`id` int(11) NOT NULL,
  `baslik` varchar(250) NOT NULL,
  `icerik` text NOT NULL,
  `tarih` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin5;

--
-- Tablo döküm verisi `tbl_etkinlik`
--

INSERT INTO `tbl_etkinlik` (`id`, `baslik`, `icerik`, `tarih`) VALUES
(1, 'Hamsi Etkinliği', 'Ktü Yazılım Mühendisliği 1. hamsi etkinliği', '26-04-2016'),
(2, 'Logo Tasarımı', 'İnternet Sitesi için logo tasarımı.', '04-03-2016');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tbl_fakulte`
--

CREATE TABLE IF NOT EXISTS `tbl_fakulte` (
`id` int(11) NOT NULL,
  `uni_id` int(11) NOT NULL,
  `fakulte_adi` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin5;

--
-- Tablo döküm verisi `tbl_fakulte`
--

INSERT INTO `tbl_fakulte` (`id`, `uni_id`, `fakulte_adi`) VALUES
(1, 1, 'Of Teknoloji'),
(2, 2, 'Mühendislik Fakültesi');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tbl_il`
--

CREATE TABLE IF NOT EXISTS `tbl_il` (
`id` int(11) NOT NULL,
  `il` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=82 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Tablo döküm verisi `tbl_il`
--

INSERT INTO `tbl_il` (`id`, `il`) VALUES
(1, 'Adana'),
(2, 'Adıyaman'),
(3, 'Afyonkarahisar'),
(4, 'Ağrı'),
(5, 'Amasya'),
(6, 'Ankara'),
(7, 'Antalya'),
(8, 'Artvin'),
(9, 'Aydın'),
(10, 'Balıkesir'),
(11, 'Bilecik'),
(12, 'Bingöl'),
(13, 'Bitlis'),
(14, 'Bolu'),
(15, 'Burdur'),
(16, 'Bursa'),
(17, 'Çanakkale'),
(18, 'Çankırı'),
(19, 'Çorum'),
(20, 'Denizli'),
(21, 'Diyarbakır'),
(22, 'Edirne'),
(23, 'Elazığ'),
(24, 'Erzincan'),
(25, 'Erzurum'),
(26, 'Eskişehir'),
(27, 'Gaziantep'),
(28, 'Giresun'),
(29, 'Gümüşhane'),
(30, 'Hakkari'),
(31, 'Hatay'),
(32, 'Isparta'),
(33, 'Mersin'),
(34, 'İstanbul'),
(35, 'İzmir'),
(36, 'Kars'),
(37, 'Kastamonu'),
(38, 'Kayseri'),
(39, 'Kırklareli'),
(40, 'Kırşehir'),
(41, 'Kocaeli'),
(42, 'Konya'),
(43, 'Kütahya'),
(44, 'Malatya'),
(45, 'Manisa'),
(46, 'Kahramanmaraş'),
(47, 'Mardin'),
(48, 'Muğla'),
(49, 'Muş'),
(50, 'Nevşehir'),
(51, 'Niğde'),
(52, 'Ordu'),
(53, 'Rize'),
(54, 'Sakarya'),
(55, 'Samsun'),
(56, 'Siirt'),
(57, 'Sinop'),
(58, 'Sivas'),
(59, 'Tekirdağ'),
(60, 'Tokat'),
(61, 'Trabzon'),
(62, 'Tunceli'),
(63, 'Şanlıurfa'),
(64, 'Uşak'),
(65, 'Van'),
(66, 'Yozgat'),
(67, 'Zonguldak'),
(68, 'Aksaray'),
(69, 'Bayburt'),
(70, 'Karaman'),
(71, 'Kırıkkale'),
(72, 'Batman'),
(73, 'Şırnak'),
(74, 'Bartın'),
(75, 'Ardahan'),
(76, 'Iğdır'),
(77, 'Yalova'),
(78, 'Karabük'),
(79, 'Kilis'),
(80, 'Osmaniye'),
(81, 'Düzce');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tbl_ilce`
--

CREATE TABLE IF NOT EXISTS `tbl_ilce` (
`id` int(11) NOT NULL,
  `il_id` int(11) DEFAULT NULL,
  `ilce` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=968 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Tablo döküm verisi `tbl_ilce`
--

INSERT INTO `tbl_ilce` (`id`, `il_id`, `ilce`) VALUES
(1, 1, 'Seyhan'),
(2, 1, 'Ceyhan'),
(3, 1, 'Feke'),
(4, 1, 'Karaisalı'),
(5, 1, 'Karataş'),
(6, 1, 'Kozan'),
(7, 1, 'Pozantı'),
(8, 1, 'Saimbeyli'),
(9, 1, 'Tufanbeyli'),
(10, 1, 'Yumurtalık'),
(11, 1, 'Yüreğir'),
(12, 1, 'Aladağ'),
(13, 1, 'İmamoğlu'),
(14, 1, 'Sarıçam'),
(15, 1, 'Çukurova'),
(16, 2, 'Adıyaman Merkez'),
(17, 2, 'Besni'),
(18, 2, 'Çelikhan'),
(19, 2, 'Gerger'),
(20, 2, 'Gölbaşı / Adıyaman'),
(21, 2, 'Kahta'),
(22, 2, 'Samsat'),
(23, 2, 'Sincik'),
(24, 2, 'Tut'),
(25, 3, 'Afyonkarahisar Merkez'),
(26, 3, 'Bolvadin'),
(27, 3, 'Çay'),
(28, 3, 'Dazkırı'),
(29, 3, 'Dinar'),
(30, 3, 'Emirdağ'),
(31, 3, 'İhsaniye'),
(32, 3, 'Sandıklı'),
(33, 3, 'Sinanpaşa'),
(34, 3, 'Sultandağı'),
(35, 3, 'Şuhut'),
(36, 3, 'Başmakçı'),
(37, 3, 'Bayat / Afyonkarahisar'),
(38, 3, 'İscehisar'),
(39, 3, 'Çobanlar'),
(40, 3, 'Evciler'),
(41, 3, 'Hocalar'),
(42, 3, 'Kızılören'),
(43, 4, 'Ağrı Merkez'),
(44, 4, 'Diyadin'),
(45, 4, 'Doğubayazıt'),
(46, 4, 'Eleşkirt'),
(47, 4, 'Hamur'),
(48, 4, 'Patnos'),
(49, 4, 'Taşlıçay'),
(50, 4, 'Tutak'),
(51, 5, 'Amasya Merkez'),
(52, 5, 'Göynücek'),
(53, 5, 'Gümüşhacıköy'),
(54, 5, 'Merzifon'),
(55, 5, 'Suluova'),
(56, 5, 'Taşova'),
(57, 5, 'Hamamözü'),
(58, 6, 'Altındağ'),
(59, 6, 'Ayaş'),
(60, 6, 'Bala'),
(61, 6, 'Beypazarı'),
(62, 6, 'Çamlıdere'),
(63, 6, 'Çankaya'),
(64, 6, 'Çubuk'),
(65, 6, 'Elmadağ'),
(66, 6, 'Güdül'),
(67, 6, 'Haymana'),
(68, 6, 'Kalecik'),
(69, 6, 'Kızılcahamam'),
(70, 6, 'Nallıhan'),
(71, 6, 'Polatlı'),
(72, 6, 'Şereflikoçhisar'),
(73, 6, 'Yenimahalle'),
(74, 6, 'Gölbaşı / Ankara'),
(75, 6, 'Keçiören'),
(76, 6, 'Mamak'),
(77, 6, 'Sincan'),
(78, 6, 'Kazan'),
(79, 6, 'Akyurt'),
(80, 6, 'Etimesgut'),
(81, 6, 'Evren'),
(82, 6, 'Pursaklar'),
(83, 7, 'Akseki'),
(84, 7, 'Alanya'),
(85, 7, 'Elmalı'),
(86, 7, 'Finike'),
(87, 7, 'Gazipaşa'),
(88, 7, 'Gündoğmuş'),
(89, 7, 'Kaş'),
(90, 7, 'Korkuteli'),
(91, 7, 'Kumluca'),
(92, 7, 'Manavgat'),
(93, 7, 'Serik'),
(94, 7, 'Demre'),
(95, 7, 'İbradı'),
(96, 7, 'Kemer / Antalya'),
(97, 7, 'Aksu / Antalya'),
(98, 7, 'Döşemealtı'),
(99, 7, 'Kepez'),
(100, 7, 'Konyaaltı'),
(101, 7, 'Muratpaşa'),
(102, 8, 'Ardanuç'),
(103, 8, 'Arhavi'),
(104, 8, 'Artvin Merkez'),
(105, 8, 'Borçka'),
(106, 8, 'Hopa'),
(107, 8, 'Şavşat'),
(108, 8, 'Yusufeli'),
(109, 8, 'Murgul'),
(110, 9, 'Bozdoğan'),
(111, 9, 'Çine'),
(112, 9, 'Germencik'),
(113, 9, 'Karacasu'),
(114, 9, 'Koçarlı'),
(115, 9, 'Kuşadası'),
(116, 9, 'Kuyucak'),
(117, 9, 'Nazilli'),
(118, 9, 'Söke'),
(119, 9, 'Sultanhisar'),
(120, 9, 'Yenipazar / Aydın'),
(121, 9, 'Buharkent'),
(122, 9, 'İncirliova'),
(123, 9, 'Karpuzlu'),
(124, 9, 'Köşk'),
(125, 9, 'Didim'),
(126, 9, 'Efeler'),
(127, 10, 'Ayvalık'),
(128, 10, 'Balya'),
(129, 10, 'Bandırma'),
(130, 10, 'Bigadiç'),
(131, 10, 'Burhaniye'),
(132, 10, 'Dursunbey'),
(133, 10, 'Edremit / Balıkesir'),
(134, 10, 'Erdek'),
(135, 10, 'Gönen / Balıkesir'),
(136, 10, 'Havran'),
(137, 10, 'İvrindi'),
(138, 10, 'Kepsut'),
(139, 10, 'Manyas'),
(140, 10, 'Savaştepe'),
(141, 10, 'Sındırgı'),
(142, 10, 'Susurluk'),
(143, 10, 'Marmara'),
(144, 10, 'Gömeç'),
(145, 10, 'Altıeylül'),
(146, 10, 'Karesi'),
(147, 11, 'Bilecik Merkez'),
(148, 11, 'Bozüyük'),
(149, 11, 'Gölpazarı'),
(150, 11, 'Osmaneli'),
(151, 11, 'Pazaryeri'),
(152, 11, 'Söğüt'),
(153, 11, 'Yenipazar / Bilecik'),
(154, 11, 'İnhisar'),
(155, 12, 'Bingöl Merkez'),
(156, 12, 'Genç'),
(157, 12, 'Karlıova'),
(158, 12, 'Kiğı'),
(159, 12, 'Solhan'),
(160, 12, 'Adaklı'),
(161, 12, 'Yayladere'),
(162, 12, 'Yedisu'),
(163, 13, 'Adilcevaz'),
(164, 13, 'Ahlat'),
(165, 13, 'Bitlis Merkez'),
(166, 13, 'Hizan'),
(167, 13, 'Mutki'),
(168, 13, 'Tatvan'),
(169, 13, 'Güroymak'),
(170, 14, 'Bolu Merkez'),
(171, 14, 'Gerede'),
(172, 14, 'Göynük'),
(173, 14, 'Kıbrıscık'),
(174, 14, 'Mengen'),
(175, 14, 'Mudurnu'),
(176, 14, 'Seben'),
(177, 14, 'Dörtdivan'),
(178, 14, 'Yeniçağa'),
(179, 15, 'Ağlasun'),
(180, 15, 'Bucak'),
(181, 15, 'Burdur Merkez'),
(182, 15, 'Gölhisar'),
(183, 15, 'Tefenni'),
(184, 15, 'Yeşilova'),
(185, 15, 'Karamanlı'),
(186, 15, 'Kemer / Burdur'),
(187, 15, 'Altınyayla / Burdur'),
(188, 15, 'Çavdır'),
(189, 15, 'Çeltikçi'),
(190, 16, 'Gemlik'),
(191, 16, 'İnegöl'),
(192, 16, 'İznik'),
(193, 16, 'Karacabey'),
(194, 16, 'Keles'),
(195, 16, 'Mudanya'),
(196, 16, 'Mustafakemalpaşa'),
(197, 16, 'Orhaneli'),
(198, 16, 'Orhangazi'),
(199, 16, 'Yenişehir / Bursa'),
(200, 16, 'Büyükorhan'),
(201, 16, 'Harmancık'),
(202, 16, 'Nilüfer'),
(203, 16, 'Osmangazi'),
(204, 16, 'Yıldırım'),
(205, 16, 'Gürsu'),
(206, 16, 'Kestel'),
(207, 17, 'Ayvacık / Çanakkale'),
(208, 17, 'Bayramiç'),
(209, 17, 'Biga'),
(210, 17, 'Bozcaada'),
(211, 17, 'Çan'),
(212, 17, 'Çanakkale Merkez'),
(213, 17, 'Eceabat'),
(214, 17, 'Ezine'),
(215, 17, 'Gelibolu'),
(216, 17, 'Gökçeada'),
(217, 17, 'Lapseki'),
(218, 17, 'Yenice / Çanakkale'),
(219, 18, 'Çankırı Merkez'),
(220, 18, 'Çerkeş'),
(221, 18, 'Eldivan'),
(222, 18, 'Ilgaz'),
(223, 18, 'Kurşunlu'),
(224, 18, 'Orta'),
(225, 18, 'Şabanözü'),
(226, 18, 'Yapraklı'),
(227, 18, 'Atkaracalar'),
(228, 18, 'Kızılırmak'),
(229, 18, 'Bayramören'),
(230, 18, 'Korgun'),
(231, 19, 'Alaca'),
(232, 19, 'Bayat / Çorum'),
(233, 19, 'Çorum Merkez'),
(234, 19, 'İskilip'),
(235, 19, 'Kargı'),
(236, 19, 'Mecitözü'),
(237, 19, 'Ortaköy / Çorum'),
(238, 19, 'Osmancık'),
(239, 19, 'Sungurlu'),
(240, 19, 'Boğazkale'),
(241, 19, 'Uğurludağ'),
(242, 19, 'Dodurga'),
(243, 19, 'Laçin'),
(244, 19, 'Oğuzlar'),
(245, 20, 'Acıpayam'),
(246, 20, 'Buldan'),
(247, 20, 'Çal'),
(248, 20, 'Çameli'),
(249, 20, 'Çardak'),
(250, 20, 'Çivril'),
(251, 20, 'Güney'),
(252, 20, 'Kale / Denizli'),
(253, 20, 'Sarayköy'),
(254, 20, 'Tavas'),
(255, 20, 'Babadağ'),
(256, 20, 'Bekilli'),
(257, 20, 'Honaz'),
(258, 20, 'Serinhisar'),
(259, 20, 'Pamukkale'),
(260, 20, 'Baklan'),
(261, 20, 'Beyağaç'),
(262, 20, 'Bozkurt / Denizli'),
(263, 20, 'Merkezefendi'),
(264, 21, 'Bismil'),
(265, 21, 'Çermik'),
(266, 21, 'Çınar'),
(267, 21, 'Çüngüş'),
(268, 21, 'Dicle'),
(269, 21, 'Ergani'),
(270, 21, 'Hani'),
(271, 21, 'Hazro'),
(272, 21, 'Kulp'),
(273, 21, 'Lice'),
(274, 21, 'Silvan'),
(275, 21, 'Eğil'),
(276, 21, 'Kocaköy'),
(277, 21, 'Bağlar'),
(278, 21, 'Kayapınar'),
(279, 21, 'Sur'),
(280, 21, 'Yenişehir / Diyarbakır'),
(281, 22, 'Edirne Merkez'),
(282, 22, 'Enez'),
(283, 22, 'Havsa'),
(284, 22, 'İpsala'),
(285, 22, 'Keşan'),
(286, 22, 'Lalapaşa'),
(287, 22, 'Meriç'),
(288, 22, 'Uzunköprü'),
(289, 22, 'Süloğlu'),
(290, 23, 'Ağın'),
(291, 23, 'Baskil'),
(292, 23, 'Elazığ Merkez'),
(293, 23, 'Karakoçan'),
(294, 23, 'Keban'),
(295, 23, 'Maden'),
(296, 23, 'Palu'),
(297, 23, 'Sivrice'),
(298, 23, 'Arıcak'),
(299, 23, 'Kovancılar'),
(300, 23, 'Alacakaya'),
(301, 24, 'Çayırlı'),
(302, 24, 'Erzincan Merkez'),
(303, 24, 'İliç'),
(304, 24, 'Kemah'),
(305, 24, 'Kemaliye'),
(306, 24, 'Refahiye'),
(307, 24, 'Tercan'),
(308, 24, 'Üzümlü'),
(309, 24, 'Otlukbeli'),
(310, 25, 'Aşkale'),
(311, 25, 'Çat'),
(312, 25, 'Hınıs'),
(313, 25, 'Horasan'),
(314, 25, 'İspir'),
(315, 25, 'Karayazı'),
(316, 25, 'Narman'),
(317, 25, 'Oltu'),
(318, 25, 'Olur'),
(319, 25, 'Pasinler'),
(320, 25, 'Şenkaya'),
(321, 25, 'Tekman'),
(322, 25, 'Tortum'),
(323, 25, 'Karaçoban'),
(324, 25, 'Uzundere'),
(325, 25, 'Pazaryolu'),
(326, 25, 'Aziziye'),
(327, 25, 'Köprüköy'),
(328, 25, 'Palandöken'),
(329, 25, 'Yakutiye'),
(330, 26, 'Çifteler'),
(331, 26, 'Mahmudiye'),
(332, 26, 'Mihalıççık'),
(333, 26, 'Sarıcakaya'),
(334, 26, 'Seyitgazi'),
(335, 26, 'Sivrihisar'),
(336, 26, 'Alpu'),
(337, 26, 'Beylikova'),
(338, 26, 'İnönü'),
(339, 26, 'Günyüzü'),
(340, 26, 'Han'),
(341, 26, 'Mihalgazi'),
(342, 26, 'Odunpazarı'),
(343, 26, 'Tepebaşı'),
(344, 27, 'Araban'),
(345, 27, 'İslahiye'),
(346, 27, 'Nizip'),
(347, 27, 'Oğuzeli'),
(348, 27, 'Yavuzeli'),
(349, 27, 'Şahinbey'),
(350, 27, 'Şehitkamil'),
(351, 27, 'Karkamış'),
(352, 27, 'Nurdağı'),
(353, 28, 'Alucra'),
(354, 28, 'Bulancak'),
(355, 28, 'Dereli'),
(356, 28, 'Espiye'),
(357, 28, 'Eynesil'),
(358, 28, 'Giresun Merkez'),
(359, 28, 'Görele'),
(360, 28, 'Keşap'),
(361, 28, 'Şebinkarahisar'),
(362, 28, 'Tirebolu'),
(363, 28, 'Piraziz'),
(364, 28, 'Yağlıdere'),
(365, 28, 'Çamoluk'),
(366, 28, 'Çanakçı'),
(367, 28, 'Doğankent'),
(368, 28, 'Güce'),
(369, 29, 'Gümüşhane Merkez'),
(370, 29, 'Kelkit'),
(371, 29, 'Şiran'),
(372, 29, 'Torul'),
(373, 29, 'Köse'),
(374, 29, 'Kürtün'),
(375, 30, 'Çukurca'),
(376, 30, 'Hakkari Merkez'),
(377, 30, 'Şemdinli'),
(378, 30, 'Yüksekova'),
(379, 31, 'Altınözü'),
(380, 31, 'Dörtyol'),
(381, 31, 'Hassa'),
(382, 31, 'İskenderun'),
(383, 31, 'Kırıkhan'),
(384, 31, 'Reyhanlı'),
(385, 31, 'Samandağ'),
(386, 31, 'Yayladağı'),
(387, 31, 'Erzin'),
(388, 31, 'Belen'),
(389, 31, 'Kumlu'),
(390, 31, 'Antakya'),
(391, 31, 'Arsuz'),
(392, 31, 'Defne'),
(393, 31, 'Payas'),
(394, 32, 'Atabey'),
(395, 32, 'Eğirdir'),
(396, 32, 'Gelendost'),
(397, 32, 'Isparta Merkez'),
(398, 32, 'Keçiborlu'),
(399, 32, 'Senirkent'),
(400, 32, 'Sütçüler'),
(401, 32, 'Şarkikaraağaç'),
(402, 32, 'Uluborlu'),
(403, 32, 'Yalvaç'),
(404, 32, 'Aksu / Isparta'),
(405, 32, 'Gönen / Isparta'),
(406, 32, 'Yenişarbademli'),
(407, 33, 'Anamur'),
(408, 33, 'Erdemli'),
(409, 33, 'Gülnar'),
(410, 33, 'Mut'),
(411, 33, 'Silifke'),
(412, 33, 'Tarsus'),
(413, 33, 'Aydıncık / Mersin'),
(414, 33, 'Bozyazı'),
(415, 33, 'Çamlıyayla'),
(416, 33, 'Akdeniz'),
(417, 33, 'Mezitli'),
(418, 33, 'Toroslar'),
(419, 33, 'Yenişehir / Mersin'),
(420, 34, 'Adalar'),
(421, 34, 'Bakırköy'),
(422, 34, 'Beşiktaş'),
(423, 34, 'Beykoz'),
(424, 34, 'Beyoğlu'),
(425, 34, 'Çatalca'),
(426, 34, 'Eyüp'),
(427, 34, 'Fatih'),
(428, 34, 'Gaziosmanpaşa'),
(429, 34, 'Kadıköy'),
(430, 34, 'Kartal'),
(431, 34, 'Sarıyer'),
(432, 34, 'Silivri'),
(433, 34, 'Şile'),
(434, 34, 'Şişli'),
(435, 34, 'Üsküdar'),
(436, 34, 'Zeytinburnu'),
(437, 34, 'Büyükçekmece'),
(438, 34, 'Kağıthane'),
(439, 34, 'Küçükçekmece'),
(440, 34, 'Pendik'),
(441, 34, 'Ümraniye'),
(442, 34, 'Bayrampaşa'),
(443, 34, 'Avcılar'),
(444, 34, 'Bağcılar'),
(445, 34, 'Bahçelievler'),
(446, 34, 'Güngören'),
(447, 34, 'Maltepe'),
(448, 34, 'Sultanbeyli'),
(449, 34, 'Tuzla'),
(450, 34, 'Esenler'),
(451, 34, 'Arnavutköy'),
(452, 34, 'Ataşehir'),
(453, 34, 'Başakşehir'),
(454, 34, 'Beylikdüzü'),
(455, 34, 'Çekmeköy'),
(456, 34, 'Esenyurt'),
(457, 34, 'Sancaktepe'),
(458, 34, 'Sultangazi'),
(459, 35, 'Aliağa'),
(460, 35, 'Bayındır'),
(461, 35, 'Bergama'),
(462, 35, 'Bornova'),
(463, 35, 'Çeşme'),
(464, 35, 'Dikili'),
(465, 35, 'Foça'),
(466, 35, 'Karaburun'),
(467, 35, 'Karşıyaka'),
(468, 35, 'Kemalpaşa'),
(469, 35, 'Kınık'),
(470, 35, 'Kiraz'),
(471, 35, 'Menemen'),
(472, 35, 'Ödemiş'),
(473, 35, 'Seferihisar'),
(474, 35, 'Selçuk'),
(475, 35, 'Tire'),
(476, 35, 'Torbalı'),
(477, 35, 'Urla'),
(478, 35, 'Beydağ'),
(479, 35, 'Buca'),
(480, 35, 'Konak'),
(481, 35, 'Menderes'),
(482, 35, 'Balçova'),
(483, 35, 'Çiğli'),
(484, 35, 'Gaziemir'),
(485, 35, 'Narlıdere'),
(486, 35, 'Güzelbahçe'),
(487, 35, 'Bayraklı'),
(488, 35, 'Karabağlar'),
(489, 36, 'Arpaçay'),
(490, 36, 'Digor'),
(491, 36, 'Kağızman'),
(492, 36, 'Kars Merkez'),
(493, 36, 'Sarıkamış'),
(494, 36, 'Selim'),
(495, 36, 'Susuz'),
(496, 36, 'Akyaka'),
(497, 37, 'Abana'),
(498, 37, 'Araç'),
(499, 37, 'Azdavay'),
(500, 37, 'Bozkurt / Kastamonu'),
(501, 37, 'Cide'),
(502, 37, 'Çatalzeytin'),
(503, 37, 'Daday'),
(504, 37, 'Devrekani'),
(505, 37, 'İnebolu'),
(506, 37, 'Kastamonu Merkez'),
(507, 37, 'Küre'),
(508, 37, 'Taşköprü'),
(509, 37, 'Tosya'),
(510, 37, 'İhsangazi'),
(511, 37, 'Pınarbaşı / Kastamonu'),
(512, 37, 'Şenpazar'),
(513, 37, 'Ağlı'),
(514, 37, 'Doğanyurt'),
(515, 37, 'Hanönü'),
(516, 37, 'Seydiler'),
(517, 38, 'Bünyan'),
(518, 38, 'Develi'),
(519, 38, 'Felahiye'),
(520, 38, 'İncesu'),
(521, 38, 'Pınarbaşı / Kayseri'),
(522, 38, 'Sarıoğlan'),
(523, 38, 'Sarız'),
(524, 38, 'Tomarza'),
(525, 38, 'Yahyalı'),
(526, 38, 'Yeşilhisar'),
(527, 38, 'Akkışla'),
(528, 38, 'Talas'),
(529, 38, 'Kocasinan'),
(530, 38, 'Melikgazi'),
(531, 38, 'Hacılar'),
(532, 38, 'Özvatan'),
(533, 39, 'Babaeski'),
(534, 39, 'Demirköy'),
(535, 39, 'Kırklareli Merkez'),
(536, 39, 'Kofçaz'),
(537, 39, 'Lüleburgaz'),
(538, 39, 'Pehlivanköy'),
(539, 39, 'Pınarhisar'),
(540, 39, 'Vize'),
(541, 40, 'Çiçekdağı'),
(542, 40, 'Kaman'),
(543, 40, 'Kırşehir Merkez'),
(544, 40, 'Mucur'),
(545, 40, 'Akpınar'),
(546, 40, 'Akçakent'),
(547, 40, 'Boztepe'),
(548, 41, 'Gebze'),
(549, 41, 'Gölcük'),
(550, 41, 'Kandıra'),
(551, 41, 'Karamürsel'),
(552, 41, 'Körfez'),
(553, 41, 'Derince'),
(554, 41, 'Başiskele'),
(555, 41, 'Çayırova'),
(556, 41, 'Darıca'),
(557, 41, 'Dilovası'),
(558, 41, 'İzmit'),
(559, 41, 'Kartepe'),
(560, 42, 'Akşehir'),
(561, 42, 'Beyşehir'),
(562, 42, 'Bozkır'),
(563, 42, 'Cihanbeyli'),
(564, 42, 'Çumra'),
(565, 42, 'Doğanhisar'),
(566, 42, 'Ereğli / Konya'),
(567, 42, 'Hadim'),
(568, 42, 'Ilgın'),
(569, 42, 'Kadınhanı'),
(570, 42, 'Karapınar'),
(571, 42, 'Kulu'),
(572, 42, 'Sarayönü'),
(573, 42, 'Seydişehir'),
(574, 42, 'Yunak'),
(575, 42, 'Akören'),
(576, 42, 'Altınekin'),
(577, 42, 'Derebucak'),
(578, 42, 'Hüyük'),
(579, 42, 'Karatay'),
(580, 42, 'Meram'),
(581, 42, 'Selçuklu'),
(582, 42, 'Taşkent'),
(583, 42, 'Ahırlı'),
(584, 42, 'Çeltik'),
(585, 42, 'Derbent'),
(586, 42, 'Emirgazi'),
(587, 42, 'Güneysınır'),
(588, 42, 'Halkapınar'),
(589, 42, 'Tuzlukçu'),
(590, 42, 'Yalıhüyük'),
(591, 43, 'Altıntaş'),
(592, 43, 'Domaniç'),
(593, 43, 'Emet'),
(594, 43, 'Gediz'),
(595, 43, 'Kütahya Merkez'),
(596, 43, 'Simav'),
(597, 43, 'Tavşanlı'),
(598, 43, 'Aslanapa'),
(599, 43, 'Dumlupınar'),
(600, 43, 'Hisarcık'),
(601, 43, 'Şaphane'),
(602, 43, 'Çavdarhisar'),
(603, 43, 'Pazarlar'),
(604, 44, 'Akçadağ'),
(605, 44, 'Arapgir'),
(606, 44, 'Arguvan'),
(607, 44, 'Darende'),
(608, 44, 'Doğanşehir'),
(609, 44, 'Hekimhan'),
(610, 44, 'Pütürge'),
(611, 44, 'Yeşilyurt / Malatya'),
(612, 44, 'Battalgazi'),
(613, 44, 'Doğanyol'),
(614, 44, 'Kale / Malatya'),
(615, 44, 'Kuluncak'),
(616, 44, 'Yazıhan'),
(617, 45, 'Akhisar'),
(618, 45, 'Alaşehir'),
(619, 45, 'Demirci'),
(620, 45, 'Gördes'),
(621, 45, 'Kırkağaç'),
(622, 45, 'Kula'),
(623, 45, 'Salihli'),
(624, 45, 'Sarıgöl'),
(625, 45, 'Saruhanlı'),
(626, 45, 'Selendi'),
(627, 45, 'Soma'),
(628, 45, 'Turgutlu'),
(629, 45, 'Ahmetli'),
(630, 45, 'Gölmarmara'),
(631, 45, 'Köprübaşı / Manisa'),
(632, 45, 'Şehzadeler'),
(633, 45, 'Yunusemre'),
(634, 46, 'Afşin'),
(635, 46, 'Andırın'),
(636, 46, 'Elbistan'),
(637, 46, 'Göksun'),
(638, 46, 'Pazarcık'),
(639, 46, 'Türkoğlu'),
(640, 46, 'Çağlayancerit'),
(641, 46, 'Ekinözü'),
(642, 46, 'Nurhak'),
(643, 46, 'Dulkadiroğlu'),
(644, 46, 'Onikişubat'),
(645, 47, 'Derik'),
(646, 47, 'Kızıltepe'),
(647, 47, 'Mazıdağı'),
(648, 47, 'Midyat'),
(649, 47, 'Nusaybin'),
(650, 47, 'Ömerli'),
(651, 47, 'Savur'),
(652, 47, 'Dargeçit'),
(653, 47, 'Yeşilli'),
(654, 47, 'Artuklu'),
(655, 48, 'Bodrum'),
(656, 48, 'Datça'),
(657, 48, 'Fethiye'),
(658, 48, 'Köyceğiz'),
(659, 48, 'Marmaris'),
(660, 48, 'Milas'),
(661, 48, 'Ula'),
(662, 48, 'Yatağan'),
(663, 48, 'Dalaman'),
(664, 48, 'Ortaca'),
(665, 48, 'Kavaklıdere'),
(666, 48, 'Menteşe'),
(667, 48, 'Seydikemer'),
(668, 49, 'Bulanık'),
(669, 49, 'Malazgirt'),
(670, 49, 'Muş Merkez'),
(671, 49, 'Varto'),
(672, 49, 'Hasköy'),
(673, 49, 'Korkut'),
(674, 50, 'Avanos'),
(675, 50, 'Derinkuyu'),
(676, 50, 'Gülşehir'),
(677, 50, 'Hacıbektaş'),
(678, 50, 'Kozaklı'),
(679, 50, 'Nevşehir Merkez'),
(680, 50, 'Ürgüp'),
(681, 50, 'Acıgöl'),
(682, 51, 'Bor'),
(683, 51, 'Çamardı'),
(684, 51, 'Niğde Merkez'),
(685, 51, 'Ulukışla'),
(686, 51, 'Altunhisar'),
(687, 51, 'Çiftlik'),
(688, 52, 'Akkuş'),
(689, 52, 'Aybastı'),
(690, 52, 'Fatsa'),
(691, 52, 'Gölköy'),
(692, 52, 'Korgan'),
(693, 52, 'Kumru'),
(694, 52, 'Mesudiye'),
(695, 52, 'Perşembe'),
(696, 52, 'Ulubey / Ordu'),
(697, 52, 'Ünye'),
(698, 52, 'Gülyalı'),
(699, 52, 'Gürgentepe'),
(700, 52, 'Çamaş'),
(701, 52, 'Çatalpınar'),
(702, 52, 'Çaybaşı'),
(703, 52, 'İkizce'),
(704, 52, 'Kabadüz'),
(705, 52, 'Kabataş'),
(706, 52, 'Altınordu'),
(707, 53, 'Ardeşen'),
(708, 53, 'Çamlıhemşin'),
(709, 53, 'Çayeli'),
(710, 53, 'Fındıklı'),
(711, 53, 'İkizdere'),
(712, 53, 'Kalkandere'),
(713, 53, 'Pazar / Rize'),
(714, 53, 'Rize Merkez'),
(715, 53, 'Güneysu'),
(716, 53, 'Derepazarı'),
(717, 53, 'Hemşin'),
(718, 53, 'İyidere'),
(719, 54, 'Akyazı'),
(720, 54, 'Geyve'),
(721, 54, 'Hendek'),
(722, 54, 'Karasu'),
(723, 54, 'Kaynarca'),
(724, 54, 'Sapanca'),
(725, 54, 'Kocaali'),
(726, 54, 'Pamukova'),
(727, 54, 'Taraklı'),
(728, 54, 'Ferizli'),
(729, 54, 'Karapürçek'),
(730, 54, 'Söğütlü'),
(731, 54, 'Adapazarı'),
(732, 54, 'Arifiye'),
(733, 54, 'Erenler'),
(734, 54, 'Serdivan'),
(735, 55, 'Alaçam'),
(736, 55, 'Bafra'),
(737, 55, 'Çarşamba'),
(738, 55, 'Havza'),
(739, 55, 'Kavak'),
(740, 55, 'Ladik'),
(741, 55, 'Terme'),
(742, 55, 'Vezirköprü'),
(743, 55, 'Asarcık'),
(744, 55, '19 Mayıs'),
(745, 55, 'Salıpazarı'),
(746, 55, 'Tekkeköy'),
(747, 55, 'Ayvacık / Samsun'),
(748, 55, 'Yakakent'),
(749, 55, 'Atakum'),
(750, 55, 'Canik'),
(751, 55, 'İlkadım'),
(752, 56, 'Baykan'),
(753, 56, 'Eruh'),
(754, 56, 'Kurtalan'),
(755, 56, 'Pervari'),
(756, 56, 'Siirt Merkez'),
(757, 56, 'Şirvan'),
(758, 56, 'Tillo'),
(759, 57, 'Ayancık'),
(760, 57, 'Boyabat'),
(761, 57, 'Durağan'),
(762, 57, 'Erfelek'),
(763, 57, 'Gerze'),
(764, 57, 'Sinop Merkez'),
(765, 57, 'Türkeli'),
(766, 57, 'Dikmen'),
(767, 57, 'Saraydüzü'),
(768, 58, 'Divriği'),
(769, 58, 'Gemerek'),
(770, 58, 'Gürün'),
(771, 58, 'Hafik'),
(772, 58, 'İmranlı'),
(773, 58, 'Kangal'),
(774, 58, 'Koyulhisar'),
(775, 58, 'Sivas Merkez'),
(776, 58, 'Suşehri'),
(777, 58, 'Şarkışla'),
(778, 58, 'Yıldızeli'),
(779, 58, 'Zara'),
(780, 58, 'Akıncılar'),
(781, 58, 'Altınyayla / Sivas'),
(782, 58, 'Doğanşar'),
(783, 58, 'Gölova'),
(784, 58, 'Ulaş'),
(785, 59, 'Çerkezköy'),
(786, 59, 'Çorlu'),
(787, 59, 'Hayrabolu'),
(788, 59, 'Malkara'),
(789, 59, 'Muratlı'),
(790, 59, 'Saray / Tekirdağ'),
(791, 59, 'Şarköy'),
(792, 59, 'Marmaraereğlisi'),
(793, 59, 'Ergene'),
(794, 59, 'Süleymanpaşa'),
(795, 60, 'Almus'),
(796, 60, 'Artova'),
(797, 60, 'Erbaa'),
(798, 60, 'Niksar'),
(799, 60, 'Reşadiye'),
(800, 60, 'Tokat Merkez'),
(801, 60, 'Turhal'),
(802, 60, 'Zile'),
(803, 60, 'Pazar / Tokat'),
(804, 60, 'Yeşilyurt / Tokat'),
(805, 60, 'Başçiftlik'),
(806, 60, 'Sulusaray'),
(807, 61, 'Akçaabat'),
(808, 61, 'Araklı'),
(809, 61, 'Arsin'),
(810, 61, 'Çaykara'),
(811, 61, 'Maçka'),
(812, 61, 'Of'),
(813, 61, 'Sürmene'),
(814, 61, 'Tonya'),
(815, 61, 'Vakfıkebir'),
(816, 61, 'Yomra'),
(817, 61, 'Beşikdüzü'),
(818, 61, 'Şalpazarı'),
(819, 61, 'Çarşıbaşı'),
(820, 61, 'Dernekpazarı'),
(821, 61, 'Düzköy'),
(822, 61, 'Hayrat'),
(823, 61, 'Köprübaşı / Trabzon'),
(824, 61, 'Ortahisar'),
(825, 62, 'Çemişgezek'),
(826, 62, 'Hozat'),
(827, 62, 'Mazgirt'),
(828, 62, 'Nazımiye'),
(829, 62, 'Ovacık / Tunceli'),
(830, 62, 'Pertek'),
(831, 62, 'Pülümür'),
(832, 62, 'Tunceli Merkez'),
(833, 63, 'Akçakale'),
(834, 63, 'Birecik'),
(835, 63, 'Bozova'),
(836, 63, 'Ceylanpınar'),
(837, 63, 'Halfeti'),
(838, 63, 'Hilvan'),
(839, 63, 'Siverek'),
(840, 63, 'Suruç'),
(841, 63, 'Viranşehir'),
(842, 63, 'Harran'),
(843, 63, 'Eyyübiye'),
(844, 63, 'Haliliye'),
(845, 63, 'Karaköprü'),
(846, 64, 'Banaz'),
(847, 64, 'Eşme'),
(848, 64, 'Karahallı'),
(849, 64, 'Sivaslı'),
(850, 64, 'Ulubey / Uşak'),
(851, 64, 'Uşak Merkez'),
(852, 65, 'Başkale'),
(853, 65, 'Çatak'),
(854, 65, 'Erciş'),
(855, 65, 'Gevaş'),
(856, 65, 'Gürpınar'),
(857, 65, 'Muradiye'),
(858, 65, 'Özalp'),
(859, 65, 'Bahçesaray'),
(860, 65, 'Çaldıran'),
(861, 65, 'Edremit / Van'),
(862, 65, 'Saray / Van'),
(863, 65, 'İpekyolu'),
(864, 65, 'Tuşba'),
(865, 66, 'Akdağmadeni'),
(866, 66, 'Boğazlıyan'),
(867, 66, 'Çayıralan'),
(868, 66, 'Çekerek'),
(869, 66, 'Sarıkaya'),
(870, 66, 'Sorgun'),
(871, 66, 'Şefaatli'),
(872, 66, 'Yerköy'),
(873, 66, 'Yozgat Merkez'),
(874, 66, 'Aydıncık / Yozgat'),
(875, 66, 'Çandır'),
(876, 66, 'Kadışehri'),
(877, 66, 'Saraykent'),
(878, 66, 'Yenifakılı'),
(879, 67, 'Çaycuma'),
(880, 67, 'Devrek'),
(881, 67, 'Ereğli / Zonguldak'),
(882, 67, 'Zonguldak Merkez'),
(883, 67, 'Alaplı'),
(884, 67, 'Gökçebey'),
(885, 68, 'Aksaray Merkez'),
(886, 68, 'Ortaköy / Aksaray'),
(887, 68, 'Ağaçören'),
(888, 68, 'Güzelyurt'),
(889, 68, 'Sarıyahşi'),
(890, 68, 'Eskil'),
(891, 68, 'Gülağaç'),
(892, 69, 'Bayburt Merkez'),
(893, 69, 'Aydıntepe'),
(894, 69, 'Demirözü'),
(895, 70, 'Ermenek'),
(896, 70, 'Karaman Merkez'),
(897, 70, 'Ayrancı'),
(898, 70, 'Kazımkarabekir'),
(899, 70, 'Başyayla'),
(900, 70, 'Sarıveliler'),
(901, 71, 'Delice'),
(902, 71, 'Keskin'),
(903, 71, 'Kırıkkale Merkez'),
(904, 71, 'Sulakyurt'),
(905, 71, 'Bahşili'),
(906, 71, 'Balışeyh'),
(907, 71, 'Çelebi'),
(908, 71, 'Karakeçili'),
(909, 71, 'Yahşihan'),
(910, 72, 'Batman Merkez'),
(911, 72, 'Beşiri'),
(912, 72, 'Gercüş'),
(913, 72, 'Kozluk'),
(914, 72, 'Sason'),
(915, 72, 'Hasankeyf'),
(916, 73, 'Beytüşşebap'),
(917, 73, 'Cizre'),
(918, 73, 'İdil'),
(919, 73, 'Silopi'),
(920, 73, 'Şırnak Merkez'),
(921, 73, 'Uludere'),
(922, 73, 'Güçlükonak'),
(923, 74, 'Bartın Merkez'),
(924, 74, 'Kurucaşile'),
(925, 74, 'Ulus'),
(926, 74, 'Amasra'),
(927, 75, 'Ardahan Merkez'),
(928, 75, 'Çıldır'),
(929, 75, 'Göle'),
(930, 75, 'Hanak'),
(931, 75, 'Posof'),
(932, 75, 'Damal'),
(933, 76, 'Aralık'),
(934, 76, 'Iğdır Merkez'),
(935, 76, 'Tuzluca'),
(936, 76, 'Karakoyunlu'),
(937, 77, 'Yalova Merkez'),
(938, 77, 'Altınova'),
(939, 77, 'Armutlu'),
(940, 77, 'Çınarcık'),
(941, 77, 'Çiftlikköy'),
(942, 77, 'Termal'),
(943, 78, 'Eflani'),
(944, 78, 'Eskipazar'),
(945, 78, 'Karabük Merkez'),
(946, 78, 'Ovacık / Karabük'),
(947, 78, 'Safranbolu'),
(948, 78, 'Yenice / Karabük'),
(949, 79, 'Kilis Merkez'),
(950, 79, 'Elbeyli'),
(951, 79, 'Musabeyli'),
(952, 79, 'Polateli'),
(953, 80, 'Bahçe'),
(954, 80, 'Kadirli'),
(955, 80, 'Osmaniye Merkez'),
(956, 80, 'Düziçi'),
(957, 80, 'Hasanbeyli'),
(958, 80, 'Sumbas'),
(959, 80, 'Toprakkale'),
(960, 81, 'Akçakoca'),
(961, 81, 'Düzce Merkez'),
(962, 81, 'Yığılca'),
(963, 81, 'Cumayeri'),
(964, 81, 'Gölyaka'),
(965, 81, 'Çilimli'),
(966, 81, 'Gümüşova'),
(967, 81, 'Kaynaşlı');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tbl_iletisim`
--

CREATE TABLE IF NOT EXISTS `tbl_iletisim` (
`id` int(11) NOT NULL,
  `facebook` varchar(250) NOT NULL,
  `gmail` varchar(250) NOT NULL,
  `github` varchar(250) NOT NULL,
  `web_site` varchar(250) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin5;

--
-- Tablo döküm verisi `tbl_iletisim`
--

INSERT INTO `tbl_iletisim` (`id`, `facebook`, `gmail`, `github`, `web_site`, `tel`, `user_id`) VALUES
(1, 'https://www.facebook.com/TolgaIskender.php', 'tolgaiskendr@gmail.com', 'github.com/Tolgaiskender', 'https://www.youtube.com/Tolgaiskender', '05387196401', 3),
(2, 'www.facebook.com/remzic', 'remzic@hotmail.com', 'www.github.com/remzic', 'www.remzic.com', '05969843434', 4);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tbl_isyeri`
--

CREATE TABLE IF NOT EXISTS `tbl_isyeri` (
`id` int(10) NOT NULL,
  `adi` varchar(250) NOT NULL,
  `il` int(11) NOT NULL,
  `ilce` int(11) NOT NULL,
  `adres` text NOT NULL,
  `aciklama` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `foto` varchar(150) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin5;

--
-- Tablo döküm verisi `tbl_isyeri`
--

INSERT INTO `tbl_isyeri` (`id`, `adi`, `il`, `ilce`, `adres`, `aciklama`, `user_id`, `foto`) VALUES
(1, 'Ktü Teknoloji Merkezi', 61, 824, 'Trabzon/Merkez/Teknopart', 'Yazılım Geliştirme Teknoloji Merkezi ', 2, ''),
(2, 'Tiskender Yazılım', 1, 1, 'Adana/Seyhan', 'Mobil Programlama', 5, '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tbl_isyeri_teknoloji`
--

CREATE TABLE IF NOT EXISTS `tbl_isyeri_teknoloji` (
`id` int(11) NOT NULL,
  `isyeri_id` int(11) NOT NULL,
  `teknoloji_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin5;

--
-- Tablo döküm verisi `tbl_isyeri_teknoloji`
--

INSERT INTO `tbl_isyeri_teknoloji` (`id`, `isyeri_id`, `teknoloji_id`) VALUES
(1, 1, 4),
(2, 2, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tbl_kullanici`
--

CREATE TABLE IF NOT EXISTS `tbl_kullanici` (
`id` int(11) NOT NULL,
  `mail` varchar(250) NOT NULL,
  `parola` varchar(50) NOT NULL,
  `rol` int(11) NOT NULL,
  `onay` int(11) NOT NULL,
  `foto` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin5;

--
-- Tablo döküm verisi `tbl_kullanici`
--

INSERT INTO `tbl_kullanici` (`id`, `mail`, `parola`, `rol`, `onay`, `foto`) VALUES
(1, 'mehmet@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 1, 1, 'img\\facebook.png'),
(2, 'aliveli@gmail.com', '5eb0da3f9b149d9063915a9613b08574', 3, 1, 'img\\facebook.png'),
(3, 'tolgaiskendr@gmail.com', 'c8837b23ff8aaa8a2dde915473ce0991', 1, 1, 'img\\facebook.png'),
(4, 'remzic@hotmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 2, 1, 'img\\facebook.png'),
(5, 'ygt@hotmail.com', 'ba9a4ef31477dab241685003a454a9b8', 3, 1, 'img\\facebook.png');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tbl_kullanici_bildirim`
--

CREATE TABLE IF NOT EXISTS `tbl_kullanici_bildirim` (
`id` int(11) NOT NULL,
  `k_id` int(11) NOT NULL,
  `b_id` int(11) NOT NULL,
  `durum` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin5;

--
-- Tablo döküm verisi `tbl_kullanici_bildirim`
--

INSERT INTO `tbl_kullanici_bildirim` (`id`, `k_id`, `b_id`, `durum`) VALUES
(1, 2, 1, 1),
(2, 5, 2, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tbl_mesaj`
--

CREATE TABLE IF NOT EXISTS `tbl_mesaj` (
`id` int(11) NOT NULL,
  `gonderen_id` int(11) NOT NULL,
  `alici_id` int(11) NOT NULL,
  `mesaj` text NOT NULL,
  `tarih` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin5;

--
-- Tablo döküm verisi `tbl_mesaj`
--

INSERT INTO `tbl_mesaj` (`id`, `gonderen_id`, `alici_id`, `mesaj`, `tarih`) VALUES
(1, 1, 2, 'Staj başvurusunda bulunmak istiyorum.', '12-12-2015'),
(2, 1, 5, 'İş Yeri başvurusunda bulunmak istiyorum.', '26-11-2015');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tbl_ogrenci`
--

CREATE TABLE IF NOT EXISTS `tbl_ogrenci` (
`id` int(11) NOT NULL,
  `adi` varchar(50) NOT NULL,
  `soyadi` varchar(50) NOT NULL,
  `cinsiyet` int(11) NOT NULL,
  `d_tarihi` varchar(25) NOT NULL,
  `foto` varchar(150) NOT NULL,
  `il` int(11) NOT NULL,
  `ilce` int(11) NOT NULL,
  `adres` text NOT NULL,
  `uni` int(11) NOT NULL,
  `fakulte` int(11) NOT NULL,
  `bolum` int(11) NOT NULL,
  `sinif` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `okul_no` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin5;

--
-- Tablo döküm verisi `tbl_ogrenci`
--

INSERT INTO `tbl_ogrenci` (`id`, `adi`, `soyadi`, `cinsiyet`, `d_tarihi`, `foto`, `il`, `ilce`, `adres`, `uni`, `fakulte`, `bolum`, `sinif`, `user_id`, `okul_no`) VALUES
(1, 'Tolga', 'İskender', 1, '17-09-1994', 'dolka.png', 61, 816, 'Sakarya/Serdivan', 1, 1, 1, 3, 3, '305422'),
(2, 'Polat', 'Alemdar', 1, '26-11-1982', 'olumsuz.png', 1, 1, 'Adana/Seyhan/Ölümsüz Sokak', 2, 2, 2, 3, 1, '305050');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tbl_proje`
--

CREATE TABLE IF NOT EXISTS `tbl_proje` (
`id` int(11) NOT NULL,
  `p_adi` varchar(200) NOT NULL,
  `p_icerik` text NOT NULL,
  `tarih` varchar(25) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin5;

--
-- Tablo döküm verisi `tbl_proje`
--

INSERT INTO `tbl_proje` (`id`, `p_adi`, `p_icerik`, `tarih`, `user_id`) VALUES
(1, 'Staj Otomasyonu', 'Öğrencilerin staj bilgilerini tutan ve değişiklikler yapılan otomasyondur.', '13-12-2015', 1),
(2, 'Mobil Programlama Veri tabanı', 'Veriler girildi.', '23-05-2016', 3);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tbl_proje_teknoloji`
--

CREATE TABLE IF NOT EXISTS `tbl_proje_teknoloji` (
`id` int(11) NOT NULL,
  `proje_id` int(11) NOT NULL,
  `teknoloji_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin5;

--
-- Tablo döküm verisi `tbl_proje_teknoloji`
--

INSERT INTO `tbl_proje_teknoloji` (`id`, `proje_id`, `teknoloji_id`) VALUES
(1, 1, 4),
(2, 2, 3);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tbl_rol`
--

CREATE TABLE IF NOT EXISTS `tbl_rol` (
`id` int(11) NOT NULL,
  `rol` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin5;

--
-- Tablo döküm verisi `tbl_rol`
--

INSERT INTO `tbl_rol` (`id`, `rol`) VALUES
(1, 'Öğrenci'),
(2, 'Akademisyen'),
(3, 'işyeri');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tbl_teknoloji`
--

CREATE TABLE IF NOT EXISTS `tbl_teknoloji` (
`id` int(11) NOT NULL,
  `teknoloji` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin5;

--
-- Tablo döküm verisi `tbl_teknoloji`
--

INSERT INTO `tbl_teknoloji` (`id`, `teknoloji`) VALUES
(1, 'C#'),
(2, 'Java'),
(3, 'C++'),
(4, 'Php'),
(5, 'Android'),
(6, 'Asp.net'),
(7, 'Python'),
(8, 'Ruby'),
(9, 'Javascript'),
(10, 'Html'),
(11, 'Assembly'),
(12, 'C');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tbl_uni`
--

CREATE TABLE IF NOT EXISTS `tbl_uni` (
`id` int(11) NOT NULL,
  `uni_adi` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin5;

--
-- Tablo döküm verisi `tbl_uni`
--

INSERT INTO `tbl_uni` (`id`, `uni_adi`) VALUES
(1, 'Karadeniz Teknik Üniversitesi'),
(2, 'Sakarya Üniversitesi');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `tbl_akademisyen`
--
ALTER TABLE `tbl_akademisyen`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `tc_kimlik_no` (`tc`);

--
-- Tablo için indeksler `tbl_bildirim`
--
ALTER TABLE `tbl_bildirim`
 ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `tbl_bolum`
--
ALTER TABLE `tbl_bolum`
 ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `tbl_duyuru`
--
ALTER TABLE `tbl_duyuru`
 ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `tbl_etkinlik`
--
ALTER TABLE `tbl_etkinlik`
 ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `tbl_fakulte`
--
ALTER TABLE `tbl_fakulte`
 ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `tbl_il`
--
ALTER TABLE `tbl_il`
 ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `tbl_ilce`
--
ALTER TABLE `tbl_ilce`
 ADD PRIMARY KEY (`id`), ADD KEY `IDX_DF2497D4BAF0B6B8` (`il_id`);

--
-- Tablo için indeksler `tbl_iletisim`
--
ALTER TABLE `tbl_iletisim`
 ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `tbl_isyeri`
--
ALTER TABLE `tbl_isyeri`
 ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `tbl_isyeri_teknoloji`
--
ALTER TABLE `tbl_isyeri_teknoloji`
 ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `tbl_kullanici`
--
ALTER TABLE `tbl_kullanici`
 ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `tbl_kullanici_bildirim`
--
ALTER TABLE `tbl_kullanici_bildirim`
 ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `tbl_mesaj`
--
ALTER TABLE `tbl_mesaj`
 ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `tbl_ogrenci`
--
ALTER TABLE `tbl_ogrenci`
 ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `tbl_proje`
--
ALTER TABLE `tbl_proje`
 ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `tbl_proje_teknoloji`
--
ALTER TABLE `tbl_proje_teknoloji`
 ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `tbl_rol`
--
ALTER TABLE `tbl_rol`
 ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `tbl_teknoloji`
--
ALTER TABLE `tbl_teknoloji`
 ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `tbl_uni`
--
ALTER TABLE `tbl_uni`
 ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `tbl_akademisyen`
--
ALTER TABLE `tbl_akademisyen`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Tablo için AUTO_INCREMENT değeri `tbl_bildirim`
--
ALTER TABLE `tbl_bildirim`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Tablo için AUTO_INCREMENT değeri `tbl_bolum`
--
ALTER TABLE `tbl_bolum`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Tablo için AUTO_INCREMENT değeri `tbl_duyuru`
--
ALTER TABLE `tbl_duyuru`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- Tablo için AUTO_INCREMENT değeri `tbl_etkinlik`
--
ALTER TABLE `tbl_etkinlik`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Tablo için AUTO_INCREMENT değeri `tbl_fakulte`
--
ALTER TABLE `tbl_fakulte`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Tablo için AUTO_INCREMENT değeri `tbl_il`
--
ALTER TABLE `tbl_il`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=82;
--
-- Tablo için AUTO_INCREMENT değeri `tbl_ilce`
--
ALTER TABLE `tbl_ilce`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=968;
--
-- Tablo için AUTO_INCREMENT değeri `tbl_iletisim`
--
ALTER TABLE `tbl_iletisim`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Tablo için AUTO_INCREMENT değeri `tbl_isyeri`
--
ALTER TABLE `tbl_isyeri`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Tablo için AUTO_INCREMENT değeri `tbl_isyeri_teknoloji`
--
ALTER TABLE `tbl_isyeri_teknoloji`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Tablo için AUTO_INCREMENT değeri `tbl_kullanici`
--
ALTER TABLE `tbl_kullanici`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- Tablo için AUTO_INCREMENT değeri `tbl_kullanici_bildirim`
--
ALTER TABLE `tbl_kullanici_bildirim`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Tablo için AUTO_INCREMENT değeri `tbl_mesaj`
--
ALTER TABLE `tbl_mesaj`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Tablo için AUTO_INCREMENT değeri `tbl_ogrenci`
--
ALTER TABLE `tbl_ogrenci`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Tablo için AUTO_INCREMENT değeri `tbl_proje`
--
ALTER TABLE `tbl_proje`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Tablo için AUTO_INCREMENT değeri `tbl_proje_teknoloji`
--
ALTER TABLE `tbl_proje_teknoloji`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Tablo için AUTO_INCREMENT değeri `tbl_rol`
--
ALTER TABLE `tbl_rol`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- Tablo için AUTO_INCREMENT değeri `tbl_teknoloji`
--
ALTER TABLE `tbl_teknoloji`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- Tablo için AUTO_INCREMENT değeri `tbl_uni`
--
ALTER TABLE `tbl_uni`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `tbl_ilce`
--
ALTER TABLE `tbl_ilce`
ADD CONSTRAINT `FK_DF2497D4BAF0B6B8` FOREIGN KEY (`il_id`) REFERENCES `tbl_il` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
