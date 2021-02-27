-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 27 Şub 2021, 11:27:51
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
-- Veritabanı: `blog_veritabani`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `aboneler`
--

CREATE TABLE `aboneler` (
  `abone_id` int(11) NOT NULL,
  `abone_ad` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `abone_soyad` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `abone_mail` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `abone_sifre` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `abone_tarih` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `aboneler`
--

INSERT INTO `aboneler` (`abone_id`, `abone_ad`, `abone_soyad`, `abone_mail`, `abone_sifre`, `abone_tarih`) VALUES
(1, 'Jane', 'Doe', 'jane@Doe.com', '123', '2021-02-14 09:26:27');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayarlar`
--

CREATE TABLE `ayarlar` (
  `id` int(11) NOT NULL,
  `telefon` varchar(20) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `mail` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `adres` text CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `logo_url` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `facebook_url` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `instagram_url` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `twitter_url` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `linkedin_url` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `ayarlar`
--

INSERT INTO `ayarlar` (`id`, `telefon`, `mail`, `adres`, `logo_url`, `facebook_url`, `instagram_url`, `twitter_url`, `linkedin_url`) VALUES
(1, '+90 111 222 33 44', 'abc@gmail.com', 'Trabzon', 'logo_purple.png', 'example', 'example', 'example', 'example');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kategoriler`
--

CREATE TABLE `kategoriler` (
  `kategoriler_id` int(11) NOT NULL,
  `kategori_adi` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `kategori_tarih` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kategoriler`
--

INSERT INTO `kategoriler` (`kategoriler_id`, `kategori_adi`, `kategori_tarih`) VALUES
(1, 'Teknoloji', '2021-02-13 15:29:00'),
(2, 'İnceleme', '2021-02-13 20:37:00'),
(3, 'Mobil', '2021-02-13 20:37:00'),
(4, 'Oyun', '2021-02-13 20:37:00'),
(5, 'Bilim', '2021-02-13 20:37:00');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanicilar`
--

CREATE TABLE `kullanicilar` (
  `id` int(11) NOT NULL,
  `kullanici_ad` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_soyad` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_mail` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_sifre` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_yetki` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kullanicilar`
--

INSERT INTO `kullanicilar` (`id`, `kullanici_ad`, `kullanici_soyad`, `kullanici_mail`, `kullanici_sifre`, `kullanici_yetki`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', '12345', 0),
(2, 'john', 'deo', 'example@example.com', '123', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `onemli_sozler`
--

CREATE TABLE `onemli_sozler` (
  `id` int(11) NOT NULL,
  `icerik` text CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `yazari` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `popular_tags`
--

CREATE TABLE `popular_tags` (
  `id` int(11) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `ad` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urunler`
--

CREATE TABLE `urunler` (
  `id` int(11) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `baslik` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `tarih` datetime NOT NULL,
  `icerik` text CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `durum` tinyint(4) NOT NULL,
  `kullanici_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `urunler`
--

INSERT INTO `urunler` (`id`, `kategori_id`, `baslik`, `tarih`, `icerik`, `durum`, `kullanici_id`) VALUES
(1, 1, 'Whatsapp Sözleşmesi', '2021-02-13 15:45:01', '<p>Some quick example text to build on the card title and make up the bulk of the card\'s content. Some quick example text to build on the card title and make up the bulk of the card\'s content.Some quick example text to build on the card title and make up the bulk of the card\'s content. Some quick example text to build on the card title and make up the bulk of the card\'s content.Some quick example text to build on the card title and make up the bulk of the card\'s content. Some quick example text to build on the card title and make up the bulk of the card\'s content.</p>', 1, 1),
(2, 1, 'deneme1', '2021-02-13 15:55:48', '<p>deneme1</p>', 1, 1),
(3, 1, 'deneme2', '2021-02-13 15:56:38', '<p>deneme2</p>', 1, 1),
(4, 2, 'john doe yazısı', '2021-02-13 20:40:48', '<p>Reeder P13 Blue Max\'in kut açılışı ve inceleme videosuyla karşınızdayız.Bu videoyla cihazın kutu içeriğini ve telefon hakkındaki detayları öğrenebilirsiniz.Diğer yandan telefonun KVK garantisi detayına da vieoda açıklık getirdik.</p><p>Reeder P13 Blue Max özellikleri ve fiyatının yanı sıra KVK garantisiyle de önce çıkıyor.Cihaz herhangi bir teknik arıza yaşandığında KVK yetkili servisleri 30 dakika içerisinde onarıyor ve teslim ediyor.</p><p><iframe frameborder=\"0\" src=\"//www.youtube.com/embed/ug7f5kKYXb4\" width=\"640\" height=\"360\" class=\"note-video-clip\"></iframe><br></p><p><br></p>', 1, 2),
(5, 1, 'haber 5', '2021-02-13 16:36:12', '<p>haber 5</p>', 1, 1),
(6, 4, 'oyun', '2021-02-13 20:39:19', '<p>bu bir oyun yazısı denemesidir.</p>', 1, 2),
(7, 3, 'deneme mobil', '2021-02-13 20:40:15', '<p>Bu bir mobil yazısı denemesidir.</p>', 1, 2),
(8, 5, 'deneme bilim', '2021-02-13 20:41:24', '<p>bu bir bilim yazısı denemesidir..</p>', 1, 2),
(9, 4, 'oyun 2', '2021-02-14 22:48:09', '<p>oyun 2 denemesi</p>', 1, 1),
(10, 5, 'Hubble araştırmacıları küçük kara delik buldu', '2021-02-15 22:27:24', '<p>bilim yazısı orneğidir..</p>', 1, 1),
(11, 2, 'Fiyatıyla öne çıkan Reeder P13 Blue Max’i inceledik', '2021-02-15 21:47:02', '<p>Reeder P13 Blue Max\'in kut açılışı ve inceleme videosuyla karşınızdayız.Bu videoyla cihazın kutu içeriğini ve telefon hakkındaki detayları öğrenebilirsiniz.Diğer yandan telefonun KVK garantisi detayına da vieoda açıklık getirdik.</p><p>Reeder P13 Blue Max özellikleri ve fiyatının yanı sıra KVK garantisiyle de önce çıkıyor.Cihaz herhangi bir teknik arıza yaşandığında KVK yetkili servisleri 30 dakika içerisinde onarıyor ve teslim ediyor.</p><p><iframe frameborder=\"0\" src=\"//www.youtube.com/embed/ug7f5kKYXb4\" width=\"640\" height=\"360\" class=\"note-video-clip\"></iframe><br></p><p><br></p>', 1, 1),
(12, 2, 'Game Garaj Fighter 7T-144 inceleme', '2021-02-15 21:59:29', '<p>Reeder P13 Blue Max\'in kut açılışı ve inceleme videosuyla karşınızdayız.Bu videoyla cihazın kutu içeriğini ve telefon hakkındaki detayları öğrenebilirsiniz.Diğer yandan telefonun KVK garantisi detayına da vieoda açıklık getirdik.</p><p>Reeder P13 Blue Max özellikleri ve fiyatının yanı sıra KVK garantisiyle de önce çıkıyor.Cihaz herhangi bir teknik arıza yaşandığında KVK yetkili servisleri 30 dakika içerisinde onarıyor ve teslim ediyor.</p><p><iframe frameborder=\"0\" src=\"//www.youtube.com/embed/ug7f5kKYXb4\" width=\"640\" height=\"360\" class=\"note-video-clip\"></iframe><br></p><p><br></p>', 1, 1),
(13, 2, 'Uygun fiyatlı akıllı saat Xiaomi Mi Watch incelemesi', '2021-02-15 21:49:03', '<p>Reeder P13 Blue Max\'in kut açılışı ve inceleme videosuyla karşınızdayız.Bu videoyla cihazın kutu içeriğini ve telefon hakkındaki detayları öğrenebilirsiniz.Diğer yandan telefonun KVK garantisi detayına da vieoda açıklık getirdik.</p><p>Reeder P13 Blue Max özellikleri ve fiyatının yanı sıra KVK garantisiyle de önce çıkıyor.Cihaz herhangi bir teknik arıza yaşandığında KVK yetkili servisleri 30 dakika içerisinde onarıyor ve teslim ediyor.</p><p><iframe frameborder=\"0\" src=\"//www.youtube.com/embed/ug7f5kKYXb4\" width=\"640\" height=\"360\" class=\"note-video-clip\"></iframe><br></p><p><br></p>\r\nReeder P13 Blue Max\'in kut açılışı ve inceleme videosuyla karşınızdayız.Bu videoyla cihazın kutu içeriğini ve telefon hakkındaki detayları öğrenebilirsiniz.Diğer yandan telefonun KVK garantisi detayına da vieoda açıklık getirdik.\r\n\r\nReeder P13 Blue Max özellikleri ve fiyatının yanı sıra KVK garantisiyle de önce çıkıyor.Cihaz herhangi bir teknik arıza yaşandığında KVK yetkili servisleri 30 dakika içerisinde onarıyor ve teslim ediyor.', 1, 1),
(14, 1, 'TUSAŞ’ın büyük sürprizinden ilk görüntüler', '2021-02-25 18:13:43', '<p>TUSAŞ‘ın ilerleyen günlerde açıklayacağı büyük sürprizine dair ilk görüntüler gün yüzüne çıktı. Türk Savunma Sanayii‘ne yönelik ilkleri sunması beklenen sürpriz göz kamaştırdı.</p><p>&nbsp;&nbsp;&nbsp;&nbsp;\r\nDefenseHere isimli bir sosyal medya hesabının Twitter üzerinden paylaştığı görüntüler kısa sürede beğeni topladı.</p><p>\r\n\r\n“TUSAŞ’ın ilerleyen günlerde açıklayacağı büyük süprizi ilk kez görüntülendi. Platformun, Türk savunma sanayiinde ilkleri getirecek çok sayıda özelliği bulunuyor.” notuyla birlikte insansız helikoptere dair paylaşılan görüntüler, havacılık meraklılarını heyecanlandırdı.</p><p>&nbsp; &nbsp; İşte TUSAŞ\'ın yakın zamanda duyuracağı sürprizin gün yüzüne çıkan ilk görüntüleri;</p><p><img src=\"https://static.shiftdelete.net/wp-content/uploads/2021/02/EvDg1rcXUAEElDV.jpeg\" style=\"width: 440px; float: none;\"></p><p><img src=\"https://static.shiftdelete.net/wp-content/uploads/2021/02/EvDg1rhXAAAcAtA.jpeg\" style=\"width: 440px; float: none;\"></p><p><img src=\"https://static.shiftdelete.net/wp-content/uploads/2021/02/EvDg1rZWYAk4DBy-2.jpeg\" style=\"width: 440px; float: none;\"></p><p>\r\n</p><p>&nbsp;&nbsp;&nbsp;&nbsp;Ortaya çıkan görüntüler ile birlikte insansız helikoptere dair oldukça heyecan uyandıran sürprizin, Türkiye Havacılık ve Uzay Sanayii tarafından çok yakın bir tarihte açıklanması bekleniyor.</p>', 1, 1),
(15, 2, 'Lenovo’nun yeni oyuncu telefonu gün yüzüne çıktı', '2021-02-25 18:23:23', '<p>Teknoloji şirketleri, oyunculara yönelik ürünler sunmaya devam ediyor. Asus ROG, Xiaomi Black Shark ve Nubia Red Magic markalarının öncülük yaptığı bu akıma, yeni bir marka daha eklendi: Lenovo Legion Pro 2…\r\n\r\nBu markalardan biri olan Lenovo, Legion isimli oyun telefonunu geçtiğimiz yıl piyasaya sürdü. Lenovo Legion Pro, sahip olduğu donanım ve oyunculara yönelik sunduğu ekstra özelliklerle dikkatleri üzerine çekmeyi başardı. Şimdi ise bu telefonun daha güçlü versiyonu Lenovo Legion Pro 2 gün yüzüne çıktı.\r\n</p><p>Legion Pro 2 fiziksel fana sahip olacak</p><p>\r\n&nbsp;&nbsp;&nbsp;&nbsp;Lenovo’nun Genel Müdürü Chen Jin, Weibo üzerinden yaptığı bir paylaşımda telefonun geleceğini doğruladı. Paylaşımda kullanılan görselle, telefonun soğutma sistemi olacağını söyleyebiliriz.</p><p>&nbsp;&nbsp;&nbsp;&nbsp;\r\n\r\nOyuncu telefonları için soğutma kısmı oldukça önemli. Yüksek frekanslarda uzun süre çalışan işlemciler, bir süre sonra ısınarak performans kaybına yol açıyor. Bu neden Lenovo Legion 2 Pro, soğutma özelliği tasarımı ile ısınmanın önüne geçecek. Böylece oyuncular daha iyi bir deneyim yaşayacak.\r\n</p><p>&nbsp;&nbsp;&nbsp;&nbsp;\r\nChen Jin, yaptığı paylaşım ile yeni nesil oyuncu telefonunu şöyle özetledi; “Telefon geleceğe dönük özelliklere sahip olacak ve nihai oyun performansına ulaşırken, hiçbir şeyden taviz vermeyecek.”</p><p><img src=\"https://static.shiftdelete.net/wp-content/uploads/2021/02/Lenovo-Legion-Pro-2-1.jpg\" style=\"width: 440px;\"><br></p><p>\r\n</p><p>&nbsp;&nbsp;&nbsp;&nbsp;Oyunculara yönelik özellikleri ile dikkat çeken Lenovo Legion Pro 2 ‘nun, Snapdragon 888′den güç alması bekleniyor. Öte yandan akıllı telefonun 16 GB bellek kapasitesine sahip olacağı tahminini hatırlatalım.</p><p>&nbsp;&nbsp;&nbsp;&nbsp;\r\n\r\nEk olarak yeni telefonun yüksek tazeleme hızına sahip ekran ile sunulacağı iddia ediliyor.\r\n</p><p>&nbsp;&nbsp;&nbsp;&nbsp;\r\nOyunculara yönelik telefonlar günden güne yaygınlaşıyor. Kısa süre önce bir başka oyun telefonu olan Black Shark 3, ülkemizde satışa çıktı. 6.999 TL fiyat etiketine sahip telefon, Qualcomm Snapdragon 865 işlemci, LPDDR4X RAM ve fiziksel oyun butonlarıyla dikkat çekiyor. </p>', 1, 1),
(16, 4, 'Electronic Arts, Anthem’in fişini çekmeye hazırlanıyor', '2021-02-25 18:27:53', '<p>Electronic Arts’ın stüdyolardan biri olan BioWare, son oyunu Anthem ile sevenlerini hayal kırıklığına uğrattı. Oyuncular tarafından istenilen beğeniye ulaşamayan oyun için beklenen haber geldi.\r\n</p><p>&nbsp;&nbsp;&nbsp;&nbsp;Anthem macerası bitiyor\r\nAdeta içi boş bir oyun olarak değerlendirilen Anthem, teknik ve içerik açısından yarım bir proje olarak ortaya çıktı. Oldukça sancılı bir geliştirme sürecinden geçen oyunun, geliştirici ekip ve EA arasındaki iletişimsizliğin somut bir örneği olduğu düşünülüyor.\r\n</p><p>&nbsp;&nbsp;&nbsp;&nbsp;Hem teknik hem de içerik bakımından yetersiz kalan oyunun sevenlerini üzecek haber geldi. Oyun basınının sevilen ismi Geoff Keighley’in iddiasına göre Electronic Arts ve BioWare, Anthem’in geliştirme sürecini durdurma kararı aldı.\r\n</p><p>&nbsp;&nbsp;&nbsp;&nbsp;\r\nOrtaya çıkan habere göre yapım daha fazla desteklenmeyecek ve güncelleme almayacak. Oyun bir süre daha aktif kaldıktan sonra, sunucuların zaman içersinde tamamen kapanması bekleniyor.</p><p><img src=\"https://static.shiftdelete.net/wp-content/uploads/2021/02/anthem-1.jpg\" style=\"width: 440px;\"><br></p><p>\r\n</p><p>Üst üste iki başarısız oyun ortaya koyan BioWare’in, hali hazırda başka projeler üzerinde çalışmaya başladığı belirtiliyor. Sadece bu projeye odaklanacağı düşünülen geliştiricinin geleceğinin, sıradaki projesine bağlı olduğu ifade ediliyor.</p>', 1, 1),
(17, 3, 'Redmi K40 tanıtıldı: İşte özellikleri ve fiyatı', '2021-02-25 18:33:36', '<p>Xiaomi’nin çatısı altındaki firmalardan Redmi, Snapdragon 870 işlemcili telefonu Redmi K40 modelini tanıttı. Şirket, fiyatıyla dikkat çekecek telefonu için çıkış tarihi de verdi.</p><p>&nbsp;&nbsp;&nbsp;&nbsp;\r\n\r\nFirma, daha önce de cihazın fiyatını Weibo üzerinden duyurdu. Özellikleri baz alındığında fiyatı teknoloji severleri mutlu etmişti.\r\nRedmi K40 özellikleri\r\n</p><p>&nbsp;&nbsp;&nbsp;&nbsp;Uygun fiyatlı cihazlarıyla bilinen Redmi’nin yeni telefonu ekranıyla da öne çıkıyor. K40’ın ekranı; 6.67 inç büyüklüğünde ve 2400 x 1080 FHD+ çözünürlüğünde olacak. Aynı zamanda cihazın ekran 120 Hz tazeleme hızı ve 360 Hz dokunmatik tepkime süresi ile kullanıcıların karşısına çıkacak. Ekran paneli AMOLED olan cihaz HDR10 desteğine de sahip. Yüzde 85.9 ekran kasa oranı bulunan cihaz, Corning Gorilla Glass 5 ile korunuyor.\r\n</p><p><img src=\"https://static.shiftdelete.net/wp-content/uploads/2021/02/redmi-k40-ozellikleri-ve-fiyati-2.png\" style=\"width: 440px;\"><br></p><p>\r\n7 nm fabrikasyon süreçli Snapdragon 870 ile gelen yeni amiral gemisi, 48 Megapiksel f/1.79 ana kamera, 8 Megapiksel ultra geniş açı, 5 Megapiksel makro ve 2 Megapiksel derinlik sensörüne sahip. Ön kamera tarafında ise 20 Megapiksel çözünürlüklü kamera ile geliyor.\r\n</p><p><img src=\"https://static.shiftdelete.net/wp-content/uploads/2021/02/redmi-k40-ozellikleri-ve-fiyati-5.png\" style=\"width: 440px;\"><br></p><p>&nbsp;&nbsp;&nbsp;&nbsp;\r\n691.359 AnTuTu skoru aldığı açıklanan yeni amiral gemisi, diğer özellikleri ile de ön plana çıkıyor. Bağlantı özellikleri olarak Wi-Fi 6 (802.11 a/b/g/n/ac/6) ve Bluetooth 5.1 destekliyor. Ancak telefon, 3.5 mm kulaklık jakını desteklemiyor.\r\n</p><p><img src=\"https://static.shiftdelete.net/wp-content/uploads/2021/02/redmi-k40-ozellikleri-ve-fiyati-3.png\" style=\"width: 440px;\"><br></p><p>&nbsp;&nbsp;&nbsp;&nbsp;\r\nRedmi K40, 4520 mAh batarya kapasitesi ve 33W hızlı şarj desteği ile geliyor. Cihaz 6 GB RAM ve UFS 3.1 teknolojili 128 GB depolama alanı ile satışa çıkacak. Ayrıca 3 farklı seçeneği daha olacak.\r\n\r\nLansmanda Redmi K40 dışında fiyatıyla oldukça konuşulacak Redmi K40 Pro ve Redmi K40 Pro Plus modelleri de tanıtıldı.\r\n\r\nRedmi K40 fiyatı\r\nXiaomi Redmi K40’ın satış fiyatları şu şekilde:\r\n\r\n6 GB RAM + 128 GB depolama: 1999 yuan – yaklaşık 310 dolar\r\n8 GB RAM + 128 GB depolama: 2199 yuan – yaklaşık 340 dolar\r\n8 GB RAM + 256 GB depolama: 2499 yuan – yaklaşık 390 dolar\r\n12 GB RAM + 256 GB depolama: 2699 yuan – yaklaşık 418 dolar\r\n\r\nLansman sonunda 12 GB RAM bulunan modelin fiyatı 2499 yuan’a indi. Fakat bu, ön sipariş kapsamında geçerli. Telefon bugünden itibaren ön siparişe açılacak.</p>', 1, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urun_resimleri`
--

CREATE TABLE `urun_resimleri` (
  `id` int(11) NOT NULL,
  `urun_id` int(11) NOT NULL,
  `image_url` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `urun_resimleri`
--

INSERT INTO `urun_resimleri` (`id`, `urun_id`, `image_url`) VALUES
(1, 1, 'profilAdmin6.jpg'),
(2, 2, 'profilAdmin7.jpg'),
(3, 3, 'profilAdmin8.jpg'),
(7, 7, 'oyun_kategorisi2.png'),
(8, 6, 'oyun_kategorisi3.png'),
(10, 8, 'tel.jpg'),
(11, 9, 'iron-man-wallpaper3.jpg'),
(13, 11, 'inceleme1.png'),
(14, 12, 'inceleme2.jpg'),
(15, 13, 'inceleme3.jpg'),
(16, 4, 'inceleme31.jpg'),
(17, 10, 'bilim1.jpg'),
(19, 5, 'inceleme11.png'),
(20, 14, 'Screenshot_5.jpg'),
(21, 15, 'Screenshot_4.jpg'),
(22, 16, 'Screenshot_3.jpg'),
(23, 17, 'Screenshot_2.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urun_yorumlari`
--

CREATE TABLE `urun_yorumlari` (
  `id` int(11) NOT NULL,
  `urun_id` int(11) NOT NULL,
  `ad` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `konu` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `mesaj` text CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `tarih` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `urun_yorumlari`
--

INSERT INTO `urun_yorumlari` (`id`, `urun_id`, `ad`, `konu`, `mesaj`, `tarih`) VALUES
(1, 13, 'ds', '', 'ds', '2021-02-25 10:29:22'),
(2, 13, 'miraç keskin', '', 'bu bir yorum denemesidir.', '2021-02-25 10:33:16'),
(3, 14, 'Tuğrul', '', 'İlginç bir çalışma olmuş heyecanla bekliyoruz..', '2021-02-25 15:15:17');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yorum_cevaplari`
--

CREATE TABLE `yorum_cevaplari` (
  `id` int(11) NOT NULL,
  `yorum_id` int(11) NOT NULL,
  `ad` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `cevap` text CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `tarih` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `aboneler`
--
ALTER TABLE `aboneler`
  ADD PRIMARY KEY (`abone_id`);

--
-- Tablo için indeksler `ayarlar`
--
ALTER TABLE `ayarlar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `kategoriler`
--
ALTER TABLE `kategoriler`
  ADD PRIMARY KEY (`kategoriler_id`);

--
-- Tablo için indeksler `kullanicilar`
--
ALTER TABLE `kullanicilar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `onemli_sozler`
--
ALTER TABLE `onemli_sozler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `popular_tags`
--
ALTER TABLE `popular_tags`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `urunler`
--
ALTER TABLE `urunler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `urun_resimleri`
--
ALTER TABLE `urun_resimleri`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `urun_yorumlari`
--
ALTER TABLE `urun_yorumlari`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `yorum_cevaplari`
--
ALTER TABLE `yorum_cevaplari`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `aboneler`
--
ALTER TABLE `aboneler`
  MODIFY `abone_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `ayarlar`
--
ALTER TABLE `ayarlar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `kategoriler`
--
ALTER TABLE `kategoriler`
  MODIFY `kategoriler_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `kullanicilar`
--
ALTER TABLE `kullanicilar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `onemli_sozler`
--
ALTER TABLE `onemli_sozler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `popular_tags`
--
ALTER TABLE `popular_tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `urunler`
--
ALTER TABLE `urunler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Tablo için AUTO_INCREMENT değeri `urun_resimleri`
--
ALTER TABLE `urun_resimleri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Tablo için AUTO_INCREMENT değeri `urun_yorumlari`
--
ALTER TABLE `urun_yorumlari`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `yorum_cevaplari`
--
ALTER TABLE `yorum_cevaplari`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
