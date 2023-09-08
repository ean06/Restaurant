-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Nov 2022 pada 13.43
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bifood`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `abuba`
--

CREATE TABLE `abuba` (
  `ID` int(50) NOT NULL,
  `NAMA` varchar(255) NOT NULL,
  `DESKRIPSI` varchar(255) NOT NULL,
  `HARGA` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `abuba`
--

INSERT INTO `abuba` (`ID`, `NAMA`, `DESKRIPSI`, `HARGA`) VALUES
(1, 'WAGYU STEAK', 'Daging sapi yang memiliki lapisan lemak empuk dan mengandung cita rasa yang sudah tidak diragukan lagi sejak berabad-abad.', 359000),
(2, 'TENDERLOIN STEAK', 'Memiliki tekstur yang lebih empuk dan memiliki cita rasa yang ringan karena hanya memiliki sedikit kandungan lemak.', 210000),
(3, 'SIRLOIN STEAK', 'Daging yang memiliki komposisi lemak yang lebih sedikit sehingga membuatnya sedikit lebih kenyal ', 230000),
(4, 'T-BONE STEAK', 'Steak yang khas dengan tulang berbentuk T pada bagian tengahnya. Merupakan potongan daging yang memiliki tekstur paling empuk dan sedikit lemak.', 300000),
(5, 'RIB EYE STEAK', 'Rib eye merupakan bagian sekitar tulang rusuk pada sapi. sehingga menghasilkan cita rasa tersendiri yang nikmat', 421000),
(6, 'LAMB CHOP STEAK', 'Lamb chop potongan daging domba muda bagian punggung, yang dipotong tegak lurus menyertakan bagian tulang rusuknya.', 250000),
(7, 'CHICKEN STEAK', 'Ayam bagian tertentu yang dibuatkan steak dan dilumuri dengan saus steak yang lezat', 180000),
(8, 'FISH STEAK', 'Ikan yang disteak dan dilumuri saus steak yang khusus untuk ikan sehinggan menghasilkan cita rasa yang beda', 190000),
(9, 'PASTA', 'Pasta yang dimasak dengan bumbu pasta yang lezat seperti daerah asal nya italia sehingga menghasilkan rasa yang lezat', 150000),
(10, 'MIX BEEF SIZE', 'Campuran sapi dengan salad sayuran sehingga menghasilkan rasa yang enak dan segar', 185000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `aljazeerah`
--

CREATE TABLE `aljazeerah` (
  `ID` int(50) NOT NULL,
  `NAMA` varchar(255) NOT NULL,
  `DESKRIPSI` varchar(255) NOT NULL,
  `HARGA` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `aljazeerah`
--

INSERT INTO `aljazeerah` (`ID`, `NAMA`, `DESKRIPSI`, `HARGA`) VALUES
(1, 'MORROCAN BASTILLA', 'olive oil, salt, ground turmeric', 125000),
(2, 'ARAYES', 'daging domba, tomat, bawang bombay', 95000),
(3, 'SHAWARMA MUSYAKKAL', 'tabbouleh, fattoush, roti taboon, tomat, dan mentimun', 55000),
(4, 'FOUL MUDAMMAS', 'minyak sayur, jintan putih, peterseli, bawang putih, bawang bombay, perasan lemon, dan cabai', 60000),
(5, 'LENTIL SOUP', 'lentil hijau, coklat, merah, kuning atau hitam', 35000),
(6, 'CORN CREAM SOUP', 'jagung, bawang bombay, seledri, susu krim, mentega', 35000),
(7, 'KAWAREH SOUP', 'soup kambing dengan tulang kambing bagian iga dan sum-sum', 50000),
(8, 'CAESAR SALAD', 'bawang putih, merica bubuk, jeruk lemon, garam, cos lettuce,keju parmesan', 30000),
(9, 'ARABIC SALAD', 'Dressing, balsamic vinegar, minyak zaitun, madu, mustard', 32500),
(10, 'FALAFEL SANDWICH', 'sandwich dengan sayuran dan falafel', 28000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `altahrir`
--

CREATE TABLE `altahrir` (
  `ID` int(50) NOT NULL,
  `NAMA` varchar(255) NOT NULL,
  `DESKRIPSI` varchar(255) NOT NULL,
  `HARGA` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `altahrir`
--

INSERT INTO `altahrir` (`ID`, `NAMA`, `DESKRIPSI`, `HARGA`) VALUES
(1, 'MIXED VEGETABLE SOUP', 'Milna, Bubur Bayi, WGAIN, Ayam, Wortel, Brokoli.', 72500),
(2, 'OXTAIL SOUP', 'air, bawang putih, bawang merah, merica', 70000),
(3, 'KAWARA SOUP', 'nasi, tuna krispi dan sedikit sayuran', 65000),
(4, 'ARABIC COFFEE', 'kopi digiling, kapulaga, air', 25000),
(5, 'TURKISH COFFEE', 'kopi digiling, kapulaga, air', 25000),
(6, 'MOROCCAN TEA', 'green tea, daun mint, kemangi, gula pasir ', 20000),
(7, 'CAPPUCCINO', 'espresso, steamed milk, foamed milk', 20000),
(8, 'KARAK TEA', 'air, susu bubuk, jahe parut', 20000),
(9, 'LEMON TEA', 'Teh hitam, Gula pasir, sirup gula', 15000),
(10, 'SHAHLAB', 'Susu bubuk, Kelapa Kering, Beras Putih, Tepung Jagung, Vanilla', 30000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `brizola`
--

CREATE TABLE `brizola` (
  `ID` int(50) NOT NULL,
  `NAMA` varchar(255) NOT NULL,
  `DESKRIPSI` varchar(255) NOT NULL,
  `HARGA` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `brizola`
--

INSERT INTO `brizola` (`ID`, `NAMA`, `DESKRIPSI`, `HARGA`) VALUES
(1, 'THE TOMAHAWK', '600-700gr Grainfed AUS Rib Eye seared w/ homemade seasoning', 488000),
(2, 'AUS WAGYU RIB EYE', '200gr AUS Wagyu MB3+ seared w/ homemade seasoning', 288000),
(3, 'AUS WAGYU SIRLOIN ', '200gr AUS Wagyu M83+ seared w/ homemade seasoning', 258000),
(4, 'US RIB EYE', '200gr US Beef seared w/ homemade seasoning', 188000),
(5, 'STEAK PLATTER', '100gr of each Tenderloin, Sirloin, Rib Eye & 200gr Short Ribs', 295000),
(6, 'SPAGHETTI BOLOGNESE', 'Pasta w/ homemade sauce & Parmesan', 98000),
(7, 'SPAGHETTI CARBONARA', 'Pasta w/ creamy sauce, Chicken & Parmesan', 88000),
(8, 'OH MY LASAGNA ', 'Lasagna w/ Bolognese, Smoked Beef & Cheese', 78000),
(9, 'CISH N FIPS', 'Imported Dory Fish, Potato Wedges & Tartar Sauce', 78000),
(10, 'STEAMY FISHY', 'Steamed Dory w/Med terranean flavour, Olive Rice & Mini Salad', 98000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `driver`
--

CREATE TABLE `driver` (
  `iddriver` int(50) NOT NULL,
  `username` text NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `driver`
--

INSERT INTO `driver` (`iddriver`, `username`, `password`) VALUES
(1, 'mulyadi', '$2y$10$Cf.kcdi8grKvRf4rhEmV/O9HyUFKjaBTx2KT4Ydf4aJhdzq.D40XS'),
(2, 'kurir', '$2y$10$btA8uXFKtc9pSkU75qgD1u9hA.hZSV3YL/CAjdD6S2vNsyNZXx5ii'),
(3, 'alfonsus', '$2y$10$uNEpoEORQzPQjMJ6iWhzs.JBgXbOTcw3F5hPzdXXVuAy/qpq1cYR.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gastronomi`
--

CREATE TABLE `gastronomi` (
  `ID` int(50) NOT NULL,
  `NAMA` varchar(255) NOT NULL,
  `DESKRIPSI` varchar(255) NOT NULL,
  `HARGA` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `gastronomi`
--

INSERT INTO `gastronomi` (`ID`, `NAMA`, `DESKRIPSI`, `HARGA`) VALUES
(1, 'NASI PUTIH', 'Dimasak dengan beras pulan yang diambil langsung dari petani sehingga menghasilkan kenikmatan nasi yang pulen', 5000),
(2, 'NASI TIMBEL', 'Nasi kukus yang dibungkus daun pisang. Biasa disajikan bersama ayam goreng, tahu tempe goreng, sayur asem, sambal terasi, dan lalapan.', 35000),
(3, 'OPOR AYAM', 'ayam rebus yang diberi bumbu kental dari santan yang ditambah berbagai bumbu seperti serai, kencur, dan sebagainya.', 25000),
(4, 'REBEG KAMBING', 'erbahan dasar daging kambing atau jeroan kambing, rasanya begitu gurih. Semakin kaya rasa dengan resep berbagai macam rempah', 40000),
(5, 'MIE ACEH', 'Mie kuning tebal dengan irisan daging sapi, daging kambing atau makanan laut (udang dan cumi) disajikan dalam sup sejenis kari yang gurih dan pedas.', 38000),
(6, 'AYAM SELIMUT', 'Ayam yang digoreng dengan balutan telur sehingga menghasilkan rasa yang nikmat dan cita rasa yang kaya', 22000),
(7, 'ES CAMPUR', 'Merupakan minuman segar yang berisikan jelly-jelly, buah-buahan yang segar, dan kelapa yang muda dan tambahan susu dan sirup', 24500),
(8, 'AYAM RICA-RICA', 'bumbu super pedas yang dibuat dari campuran cabai, rawit, rempah, daun jeruk, daun pandan, dan air perasan jeruk nipis. Biasanya rica-rica diolah bersama aneka lauk', 26400),
(9, 'AYAM BAKAR', 'Ayam yang dibakar dengan bumbu tradisional dan bumbu yang turun menurun sehingga menciptakan cita rasa nikmat', 20000),
(10, 'AYAM GORENG', 'Ayam yang diungkep dengan bumbu tradisional dan rahasia dapur sehingga menghasilkan cita rasa yang nikmat', 20000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `hadramout`
--

CREATE TABLE `hadramout` (
  `ID` int(50) NOT NULL,
  `NAMA` varchar(255) NOT NULL,
  `DESKRIPSI` varchar(255) NOT NULL,
  `HARGA` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `hadramout`
--

INSERT INTO `hadramout` (`ID`, `NAMA`, `DESKRIPSI`, `HARGA`) VALUES
(1, 'HUMMUS', 'Blended chickpeas (served with bread)', 48000),
(2, 'BABA GHANOUSH', 'Eggplant blended with Tohiol (served with bread)', 57000),
(3, 'TABBOULEH', 'A mixture of Chopped porsley, crocked wheat,tomatoes, and onions', 36000),
(4, 'FATTOUSH', 'A midure of Tomatoes, cucumber, onions and pita chips', 32000),
(5, 'HOUSE SALAD', 'A mixture of crisp romoina lettuce, tomatoes, onions and cucumbers with homemade dressing', 56000),
(6, 'SAMBUSA', 'Your choice of meat, veggie ce cheese', 20000),
(7, 'YOGURT AND CUCUMBER', '(served with bread)', 38000),
(8, 'FASOLIA', 'mashed white beans wiht onions, garic and tomatoes', 40000),
(9, 'FOL', 'Mashed fava beans with onions, garlic and tomatoes', 59000),
(10, 'FRENCH FRIES FALAFEL', 'Chickpeas and chopped vegetables, fried in oil', 29000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kikugawa`
--

CREATE TABLE `kikugawa` (
  `ID` int(50) NOT NULL,
  `NAMA` varchar(255) NOT NULL,
  `DESKRIPSI` varchar(255) NOT NULL,
  `HARGA` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kikugawa`
--

INSERT INTO `kikugawa` (`ID`, `NAMA`, `DESKRIPSI`, `HARGA`) VALUES
(1, 'UME SET', 'sushi,sashimi,tempura,sukiyaki,yakitori in one', 144000),
(2, 'KIKU SET', 'sushi,tempura,sukiyaki all in one', 88000),
(3, 'SALOM SASHIMI YAKITORI SET', 'salmon,rice and soup all in one', 104000),
(4, 'KIKUGAWA SET A', 'sushi,rice,tempura all in one', 79000),
(5, 'KIKUGAWA SET B ', 'chicken teriyaki and beef teriyaki all in one', 86000),
(6, 'SALMON MENTAI', 'filet salmon, Saus mentai, Real Mayonnaise', 48000),
(7, 'EBI FURAI', 'Udang, Tepung Roti, Air, Telur, Tepung Terigu, Tepung Tapioka', 37000),
(8, 'FISH ROLL', 'Ikan, Air, tapioka, Garam, Isolat, Bawang putih', 28000),
(9, 'CHIKEN KATSU TERIYAKI', 'dada ayam filet, merica, bawang putih, saus teriyaki', 48000),
(10, 'BEEF KATSU TERIYAKI', 'daging sapi, telur, terigu, susu, tepung roti', 55000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mandala`
--

CREATE TABLE `mandala` (
  `ID` int(50) NOT NULL,
  `NAMA` varchar(255) NOT NULL,
  `DESKRIPSI` varchar(255) NOT NULL,
  `HARGA` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mandala`
--

INSERT INTO `mandala` (`ID`, `NAMA`, `DESKRIPSI`, `HARGA`) VALUES
(1, 'AYAM GORENG TEPUNG', 'hidangan yang dibuat dari potongan daging ayam yang telah dilapisi dengan tepung atau adonan encer yang dibumbui dan digoreng', 20000),
(2, 'AYAM NANKING', 'Salah satu makanan yang gurih di dalam dan lembut diluar sehingga menghasilkan cita rasa yang nikmat dan lezat', 26000),
(3, 'AYAM KLUYUK', 'Ayam kuluyuk terbuat dari potongan dada ayam yang digoreng dengan balutan tepung, lalu disiram saus asam manis.', 26000),
(4, 'GURAME BAKAR', 'Ikan gurame yang dibakar dengan arang dan dilumuri dengan bumbu turun menurun sehingga menghasilkan cita rasa yang nimkat', 65000),
(5, 'CUMI SAOS MENTEGA', 'Cumi yang dimasak dan diongseng dengan saos mentega sehingga menghasilkan cita rasa yang nikmat', 52000),
(6, 'KEPITING SAOS TIRAM', 'Kepiting yang dimasak dengan saos tiram sehingga menghasilkan cita rasa yang nikmat dan kaya ', 85000),
(7, 'KAKAP GORENG TEPUNG', 'kakap yang digoreng dengan tepung sehingga menghasilkan kegaringan yang nikmat dan bergizi', 75000),
(8, 'UDANG ASAM MANIS', 'Udang yang dimasak dengan saos asam manis sehingga menghasilkan cita rasa yang kaya dan segar', 45000),
(9, 'CAH KANGKUNG', 'Kangkung yang dimasak dengan ditumis sehingga menghasilkan cita rasa yang nikmat dan sedap', 25000),
(10, 'TUMIS TOGE', 'Toge yang dimasak dengan ditumis sehingga menghasilkan cita rasa yang nikmat dan sedap', 25000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `marufuku`
--

CREATE TABLE `marufuku` (
  `ID` int(50) NOT NULL,
  `NAMA` varchar(255) NOT NULL,
  `DESKRIPSI` varchar(255) NOT NULL,
  `HARGA` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `marufuku`
--

INSERT INTO `marufuku` (`ID`, `NAMA`, `DESKRIPSI`, `HARGA`) VALUES
(1, 'TOFU STEAK', 'Steak Tahu Gaya Jepang vegan ini terinspirasi oleh teppanyaki yang dibumbui dengan saus mirin, kecap asin, dan saus tiram vegetarian.', 55000),
(2, 'WAGYU STEAK', 'Daging wagyu yang di marinasi bumbu teriyaki yang membuat rasa makin kuat ', 290000),
(3, 'HOTATE BUTTER YAKI', 'Digoreng dengan sempurna, Kerang Kecap Mentega ini menjadi hidangan pembuka paling lezat untuk pesta yang terinspirasi dari Jepang', 120000),
(4, 'SABA SYIOKI', 'Ikan kembung biru, juga disebut ikan kembung Jepang, ikan kembung Pasifik, ikan kembung berlendir atau ikan kembung berbintik, adalah ikan dari keluarga Scombridae, ditemukan di perairan tropis dan subtropis di Pasifik.', 75000),
(5, 'SALMON AVOCADO ROLL', 'campuran salmon dengan alvocado yang lezat', 88000),
(6, 'THAI ICED TEA', 'black tea, bunga lawang, biji kapulaga, gula, krim kental manis, susu evaporasi, Daun mint', 18000),
(7, 'ICE GREEN TEA', ' Air, gula, gula batu, daun teh hijau, teh melati, antioksidan vitamin C, perisa identik alami teh melati.', 18000),
(8, 'AZUKI TEA', 'Adzuki Small Red Bean Tea 30 Tea Bags', 28000),
(9, 'HOT COFFEE', 'espresso, susu steamed, froth susu', 25000),
(10, 'COFFEE SHAKE', 'Air, Gula, Susu Skim, Krimer Nabati, Kopi Bubuk Instan (0.9%), Penstabil Nabati', 20000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `oniquaer`
--

CREATE TABLE `oniquaer` (
  `ID` int(50) NOT NULL,
  `NAMA` varchar(255) NOT NULL,
  `DESKRIPSI` varchar(255) NOT NULL,
  `HARGA` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `oniquaer`
--

INSERT INTO `oniquaer` (`ID`, `NAMA`, `DESKRIPSI`, `HARGA`) VALUES
(1, 'TENDERLOIN STEAK', 'Juga dikenal sebagai tenderloin atau eye fillet, potongan ini berasal dari dalam sirloin. Bersifat ramping dan lembut', 85000),
(2, 'RIB EYE STEAK', 'Rib-eye steak adalah potongan dalam bentuk steak, bisa dengan tulang (bone in) atau tanpa tulang (boneless)', 85000),
(3, 'SIRLOIN STEAK', 'steak sirloin dipotong dari sirloin, posterior subprimal ke pinggang pendek di mana steak T-bone, kedai bir, dan klub dipotong.', 85000),
(4, 'OYAKODON', 'Oyakodon, secara harfiah berarti ', 40000),
(5, 'GYŪDON', 'Gyūdon, juga dikenal sebagai gyūmeshi, adalah hidangan Jepang yang terdiri dari semangkuk nasi di atasnya dengan daging sapi dan bawang yang direbus dengan saus manis ringan yang dibumbui dengan dashi, kecap, dan mirin. Kadang-kadang juga disajikan dengan', 40000),
(6, 'TERIYAKI SALMON DON', 'Teriyaki Salmon Donburi adalah semangkuk nasi Jepang yang lezat dengan salmon lembut yang dibalut dengan saus teriyaki buatan sendiri.', 75000),
(7, 'CHICKEN WINGS', 'bagian sayap ayam yang umumnya digoreng dan kemudian dilapisi atau dicelupkan ke dalam saus yang terdiri dari saus cabai rawit berbasis cuka dan mentega cair sebelum disajikan.', 35000),
(8, 'OKONOMIYAKI', 'Okonomiyaki adalah hidangan panekuk gurih Jepang yang terdiri dari adonan tepung terigu dan bahan lainnya yang dimasak di atas teppan. Tambahan umum termasuk kubis, daging, dan makanan laut, dan topping termasuk saus okonomiyaki, aonori, katsuobushi, mayo', 35000),
(9, 'TAKOYAKI', 'Takoyaki adalah kudapan khas Jepang berbentuk bola yang terbuat dari adonan berbahan dasar tepung terigu dan dimasak dalam wajan cetakan khusus. Biasanya diisi dengan gurita cincang atau potong dadu, sisa tempura, acar jahe, dan daun bawang.', 35000),
(10, 'NEGIMA YAKITORI', 'Yakitori adalah tusuk sate ayam panggang Jepang yang sangat populer, umumnya disajikan di izakaya (mirip dengan bar), atau yakitori-ya. Negima Yakitori adalah sejenis yakitori yang dibuat dengan paha ayam dan daun bawang. Daun bawang memainkan peran penti', 30000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pdriver`
--

CREATE TABLE `pdriver` (
  `ID` int(50) NOT NULL,
  `NAMA` varchar(255) NOT NULL,
  `ALAMAT` varchar(255) NOT NULL,
  `GENDER` varchar(50) NOT NULL,
  `NOTELFON` varchar(50) NOT NULL,
  `PLATNO` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pdriver`
--

INSERT INTO `pdriver` (`ID`, `NAMA`, `ALAMAT`, `GENDER`, `NOTELFON`, `PLATNO`) VALUES
(1, 'Yeyen', 'gg.Lombok', 'Pria', '085564321', 'B 2398 KJI'),
(2, 'maman', 'kampung rawa', 'Pria', '0888654987321', 'B 1554 BUD'),
(3, 'yadi', 'jl. ceger raya', 'Pria', '08564989813', ' B 7654 SDF'),
(4, 'Alfonsus Haryo', 'puri bintaro indah', 'Wanita', '08193331321', 'B 1554 BUD');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesananmakanan`
--

CREATE TABLE `pemesananmakanan` (
  `ID` int(50) NOT NULL,
  `RESTO` varchar(255) NOT NULL,
  `NAMA` varchar(255) NOT NULL,
  `ALAMAT` varchar(255) NOT NULL,
  `TANGGAL` varchar(255) NOT NULL,
  `MENU` varchar(255) NOT NULL,
  `JUMLAH` int(50) NOT NULL,
  `CATATAN` varchar(255) NOT NULL,
  `PEMBAYARAN` varchar(255) NOT NULL,
  `SUBTOTAL` int(50) NOT NULL,
  `TOTAL` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pemesananmakanan`
--

INSERT INTO `pemesananmakanan` (`ID`, `RESTO`, `NAMA`, `ALAMAT`, `TANGGAL`, `MENU`, `JUMLAH`, `CATATAN`, `PEMBAYARAN`, `SUBTOTAL`, `TOTAL`) VALUES
(1, 'Solaria', 'Doni ', 'Puri bintaro indah ', '16000', 'NASI PUTIH', 2, '', 'COD', 0, 31000),
(2, 'Solaria', 'Doni ', 'Puri bintaro indah ', '2022-11-13', 'BISTIK AYAM', 1, '', 'GOPAY', 0, 15000),
(3, 'Solaria', 'Doni ', 'Puri bintaro indah ', '2022-11-13', 'NASI SAPI LADA HITAM', 2, '', 'COD', 0, 111000),
(4, 'Solaria', 'Doni ', 'Puri bintaro indah ', '2022-11-13', 'NASI PUTIH', 5, '', 'COD', 40000, 55000),
(5, 'Solaria', 'Doni ', 'Puri bintaro indah ', '2022-11-13', 'NASI PUTIH', 2, '', 'DANA', 16000, 31000),
(6, 'Solaria', 'Doni ', 'Puri bintaro indah ', '2022-11-13', 'FISH CAKE', 2, '', 'DANA', 67600, 82600),
(7, 'Solaria', 'Doni ', 'Puri bintaro indah ', '2022-11-13', 'NASI PUTIH', 1, '', 'COD', 8000, 23000),
(8, 'Solaria', 'Doni ', 'Puri bintaro indah ', '', 'NASI PUTIH', 1, 'Nasi nya banyakin', 'COD', 8000, 23000),
(9, 'Solaria', 'Doni ', 'Puri bintaro indah ', '2022-11-13', 'T-BONE STEAK', 2, 'Steak nya yang gede', 'COD', 0, 15000),
(10, 'Solaria', 'Doni ', 'Puri bintaro indah ', '2022-11-13', 'T-BONE STEAK', 2, 'steaknya yang gede', 'COD', 0, 15000),
(11, 'Solaria', 'Doni ', 'Puri bintaro indah ', '', 'NASI PUTIH', 1, 'zx', 'COD', 8000, 23000),
(12, 'Solaria', 'Doni ', 'Puri bintaro indah ', '', 'T-BONE STEAK', 2, 'asd', 'COD', 0, 15000),
(13, 'Solaria', 'Doni ', 'Puri bintaro indah ', '2022-11-14', 'NASI GORENG SPECIAL', 1, 'Nasi nya banyakkin', 'GOPAY', 54900, 69900),
(14, 'Solaria', 'Raihan fadillah', 'Arinda', '2022-11-15', 'AYAM GORENG MENTEGA', 2, 'Kuah nya agak banyakan dikit', 'COD', 129200, 144200),
(15, 'Solaria', 'Tyaas priambudi', 'Puri bintaro indah blok d1/29', '2022-11-15', 'NASI GORENG SEAFOOD', 1, 'Pedas banget', 'GOPAY', 50000, 65000),
(16, 'Solaria', 'Tyaas priambudi', 'Puri bintaro indah blok d1/29', '2022-11-15', 'NASI GORENG SEAFOOD', 1, 'Pedas gila', 'COD', 30000, 45000),
(17, 'Solaria', 'Yossy veifbrian', 'Jl.tegal rotan raya', '2022-11-17', 'AYAM GORENG MENTEGA', 1, 'Minta saos sambal', 'GOPAY', 64600, 79600),
(18, 'Solaria', 'raihan', 'jalanin aja dulu', '2022-11-18', 'NASI GORENG SEAFOOD', 2, 'yang pedes', 'COD', 60000, 75000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanabuba`
--

CREATE TABLE `pesanabuba` (
  `ID` int(50) NOT NULL,
  `RESTO` varchar(255) NOT NULL,
  `NAMA` varchar(255) NOT NULL,
  `ALAMAT` varchar(255) NOT NULL,
  `TANGGAL` varchar(255) NOT NULL,
  `MENU` varchar(255) NOT NULL,
  `JUMLAH` int(50) NOT NULL,
  `CATATAN` varchar(255) NOT NULL,
  `PEMBAYARAN` varchar(255) NOT NULL,
  `SUBTOTAL` int(50) NOT NULL,
  `TOTAL` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pesanabuba`
--

INSERT INTO `pesanabuba` (`ID`, `RESTO`, `NAMA`, `ALAMAT`, `TANGGAL`, `MENU`, `JUMLAH`, `CATATAN`, `PEMBAYARAN`, `SUBTOTAL`, `TOTAL`) VALUES
(1, 'Abuba', 'Doni ', 'Puri bintaro indah ', '', 'T-BONE STEAK', 2, 'steaknya yang gede', 'COD', 600000, 615000),
(2, 'Abuba', 'Doni ', 'Puri bintaro indah ', '2022-11-14', 'WAGYU STEAK', 2, 'Saos mashroom nya minta lebih', 'COD', 718000, 733000),
(3, 'Abuba', 'Raihan fadillah', 'Arinda', '2022-11-15', 'TENDERLOIN STEAK', 2, 'saos nya minta lebih', 'GOPAY', 420000, 435000),
(4, 'Abuba', 'Tyaas priambudi', 'Puri bintaro indah blok d1/29', '2022-11-15', 'RIB EYE STEAK', 2, 'Jangan pakai salad', 'COD', 842000, 857000),
(5, 'Abuba', 'Yossy veifbrian', 'Jl.tegal rotan raya', '2022-11-17', 'RIB EYE STEAK', 1, '-', 'DANA', 421000, 436000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanaljazeerah`
--

CREATE TABLE `pesanaljazeerah` (
  `ID` int(50) NOT NULL,
  `RESTO` varchar(255) NOT NULL,
  `NAMA` varchar(255) NOT NULL,
  `ALAMAT` varchar(255) NOT NULL,
  `TANGGAL` varchar(255) NOT NULL,
  `MENU` varchar(255) NOT NULL,
  `JUMLAH` int(50) NOT NULL,
  `CATATAN` varchar(255) NOT NULL,
  `PEMBAYARAN` varchar(255) NOT NULL,
  `SUBTOTAL` int(50) NOT NULL,
  `TOTAL` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pesanaljazeerah`
--

INSERT INTO `pesanaljazeerah` (`ID`, `RESTO`, `NAMA`, `ALAMAT`, `TANGGAL`, `MENU`, `JUMLAH`, `CATATAN`, `PEMBAYARAN`, `SUBTOTAL`, `TOTAL`) VALUES
(1, 'Al-Jazeerah Signature', 'Doni satria setiabudi', 'Jl. sumatra Puri bintaro indah blok d1/29 rt05 rw 022 kelurahan jombang kecamatan ciputat', '2022-11-16', 'caesar salad', 1, 'Mayones nya banyakkin', 'GOPAY', 30000, 45000),
(2, 'Al-Jazeerah Signature', 'Yossy veifbrian', 'Jl.tegal rotan raya', '2022-11-17', 'LENTIL SOUP', 1, 'kuah soup nya banyakin', 'COD', 35000, 50000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanaltahrir`
--

CREATE TABLE `pesanaltahrir` (
  `ID` int(50) NOT NULL,
  `RESTO` varchar(255) NOT NULL,
  `NAMA` varchar(255) NOT NULL,
  `ALAMAT` varchar(255) NOT NULL,
  `TANGGAL` varchar(255) NOT NULL,
  `MENU` varchar(255) NOT NULL,
  `JUMLAH` int(50) NOT NULL,
  `CATATAN` varchar(255) NOT NULL,
  `PEMBAYARAN` varchar(255) NOT NULL,
  `SUBTOTAL` int(50) NOT NULL,
  `TOTAL` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pesanaltahrir`
--

INSERT INTO `pesanaltahrir` (`ID`, `RESTO`, `NAMA`, `ALAMAT`, `TANGGAL`, `MENU`, `JUMLAH`, `CATATAN`, `PEMBAYARAN`, `SUBTOTAL`, `TOTAL`) VALUES
(1, 'Al-Tahrir', 'Doni satria setiabudi', 'Jl. sumatra Puri bintaro indah blok d1/29 rt05 rw 022 kelurahan jombang kecamatan ciputat', '2022-11-16', 'shahlab', 1, 'kasih susu kental manis', 'COD', 30000, 45000),
(2, 'Al-Tahrir', 'Yossy veifbrian', 'Jl.tegal rotan raya', '2022-11-17', 'OXTAIL SOUP', 5, 'test', 'COD', 350000, 365000),
(3, 'Al-Tahrir', 'Muhammad adji pangestu', 'Jl.Poncol', '2022-11-22', 'OXTAIL SOUP', 2, 'Kuahnya banyak', 'GOPAY', 140000, 155000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanbrizola`
--

CREATE TABLE `pesanbrizola` (
  `ID` int(50) NOT NULL,
  `RESTO` varchar(255) NOT NULL,
  `NAMA` varchar(255) NOT NULL,
  `ALAMAT` varchar(255) NOT NULL,
  `TANGGAL` varchar(255) NOT NULL,
  `MENU` varchar(255) NOT NULL,
  `JUMLAH` int(50) NOT NULL,
  `CATATAN` varchar(255) NOT NULL,
  `PEMBAYARAN` varchar(255) NOT NULL,
  `SUBTOTAL` int(50) NOT NULL,
  `TOTAL` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pesanbrizola`
--

INSERT INTO `pesanbrizola` (`ID`, `RESTO`, `NAMA`, `ALAMAT`, `TANGGAL`, `MENU`, `JUMLAH`, `CATATAN`, `PEMBAYARAN`, `SUBTOTAL`, `TOTAL`) VALUES
(1, 'Brizola', 'Doni ', 'Puri bintaro indah ', '2022-11-13', 'OH MY LASAGNA ', 1, 'saus nya banyakiin', 'COD', 78000, 93000),
(2, 'Brizola', 'Raihan fadillah', 'Arinda', '2022-11-15', 'THE TOMAHAWK', 5, 'Tingkat kematangan mediu well', 'DANA', 2440000, 2455000),
(3, 'Brizola', 'Yossy veifbrian', 'Jl.tegal rotan raya', '2022-11-17', 'THE TOMAHAWK', 2, 'tesst', 'COD', 976000, 991000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesangastronomi`
--

CREATE TABLE `pesangastronomi` (
  `ID` int(50) NOT NULL,
  `RESTO` varchar(255) NOT NULL,
  `NAMA` varchar(255) NOT NULL,
  `ALAMAT` varchar(255) NOT NULL,
  `TANGGAL` varchar(255) NOT NULL,
  `MENU` varchar(255) NOT NULL,
  `JUMLAH` int(50) NOT NULL,
  `CATATAN` varchar(255) NOT NULL,
  `PEMBAYARAN` varchar(255) NOT NULL,
  `SUBTOTAL` int(50) NOT NULL,
  `TOTAL` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pesangastronomi`
--

INSERT INTO `pesangastronomi` (`ID`, `RESTO`, `NAMA`, `ALAMAT`, `TANGGAL`, `MENU`, `JUMLAH`, `CATATAN`, `PEMBAYARAN`, `SUBTOTAL`, `TOTAL`) VALUES
(1, 'Gastronomi', 'Doni ', 'Puri bintaro indah ', '2022-11-13', 'NASI PUTIH', 2, 'nasinya banyakin', 'COD', 10000, 25000),
(2, 'Gastronomi', 'Doni ', 'Puri bintaro indah ', '2022-11-13', 'NASI PUTIH', 3, 'Nasi nya banyakin', 'DANA', 15000, 30000),
(3, 'Gastronomi', 'Doni ', 'Puri bintaro indah ', '2022-11-13', 'OPOR AYAM', 1, 'Kuah nya yang banyak', 'OVO', 25000, 40000),
(4, 'Gastronomi', 'Doni ', 'Puri bintaro indah ', '2022-11-14', 'AYAM GORENG', 2, '1 paha 1 dada', 'OVO', 40000, 55000),
(5, 'Gastronomi', 'Raihan fadillah', 'Arinda', '2022-11-15', 'NASI TIMBEL', 1, 'sambelnya banyakkin', 'COD', 35000, 50000),
(6, 'Gastronomi', 'Yossy veifbrian', 'Jl.tegal rotan raya', '2022-11-17', 'AYAM RICA-RICA', 2, 'Bumbu rica nya minta lebih', 'OVO', 52800, 67800);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanhadramout`
--

CREATE TABLE `pesanhadramout` (
  `ID` int(50) NOT NULL,
  `RESTO` varchar(255) NOT NULL,
  `NAMA` varchar(255) NOT NULL,
  `ALAMAT` varchar(255) NOT NULL,
  `TANGGAL` varchar(255) NOT NULL,
  `MENU` varchar(255) NOT NULL,
  `JUMLAH` int(50) NOT NULL,
  `CATATAN` varchar(255) NOT NULL,
  `PEMBAYARAN` varchar(255) NOT NULL,
  `SUBTOTAL` int(50) NOT NULL,
  `TOTAL` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pesanhadramout`
--

INSERT INTO `pesanhadramout` (`ID`, `RESTO`, `NAMA`, `ALAMAT`, `TANGGAL`, `MENU`, `JUMLAH`, `CATATAN`, `PEMBAYARAN`, `SUBTOTAL`, `TOTAL`) VALUES
(1, 'Zoku', 'Doni ', 'Puri bintaro indah ', '2022-11-14', 'fasolia', 1, 'saosnya banyakkin', 'COD', 40000, 55000),
(2, 'Zoku', 'Raihan fadillah', 'Arinda', '2022-11-15', 'Baba Ghanoush', 1, '', 'COD', 57000, 72000),
(3, 'Hadramouth Restaurant', 'Doni satria setiabudi', 'Jl. sumatra Puri bintaro indah blok d1/29 rt05 rw 022 kelurahan jombang kecamatan ciputat', '2022-11-16', 'fasolia', 1, 'TEST', 'COD', 40000, 55000),
(4, 'Hadramouth Restaurant', 'Doni satria setiabudi', 'Jl. sumatra Puri bintaro indah blok d1/29 rt05 rw 022 kelurahan jombang kecamatan ciputat', '2022-11-17', 'Hummus', 2, 'a', 'DANA', 96000, 111000),
(5, 'Hadramouth Restaurant', 'Yossy veifbrian', 'Jl.tegal rotan raya', '2022-11-17', 'HUMMUS', 1, 'test', 'OVO', 48000, 63000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesankikugawa`
--

CREATE TABLE `pesankikugawa` (
  `ID` int(50) NOT NULL,
  `RESTO` varchar(255) NOT NULL,
  `NAMA` varchar(255) NOT NULL,
  `ALAMAT` varchar(255) NOT NULL,
  `TANGGAL` varchar(255) NOT NULL,
  `MENU` varchar(255) NOT NULL,
  `JUMLAH` int(50) NOT NULL,
  `CATATAN` varchar(255) NOT NULL,
  `PEMBAYARAN` varchar(255) NOT NULL,
  `SUBTOTAL` varchar(255) NOT NULL,
  `TOTAL` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pesankikugawa`
--

INSERT INTO `pesankikugawa` (`ID`, `RESTO`, `NAMA`, `ALAMAT`, `TANGGAL`, `MENU`, `JUMLAH`, `CATATAN`, `PEMBAYARAN`, `SUBTOTAL`, `TOTAL`) VALUES
(1, 'Kikugawa', 'Doni satria setiabudi', 'Jl. sumatra Puri bintaro indah blok d1/29 rt05 rw 022 kelurahan jombang kecamatan ciputat', '2022-11-16', 'ume set', 1, '0', 'COD', '144000', 159000),
(2, 'Kikugawa', 'Doni satria setiabudi', 'Jl. sumatra Puri bintaro indah blok d1/29 rt05 rw 022 kelurahan jombang kecamatan ciputat', '2022-11-16', 'kiku set', 2, 'test', 'OVO', '176000', 191000),
(3, 'Kikugawa', 'Yossy veifbrian', 'Jl.tegal rotan raya', '2022-11-17', 'KIKU SET', 3, 'minta mayones', 'DANA', '264000', 279000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanmandala`
--

CREATE TABLE `pesanmandala` (
  `ID` int(50) NOT NULL,
  `RESTO` varchar(255) NOT NULL,
  `NAMA` varchar(255) NOT NULL,
  `ALAMAT` varchar(255) NOT NULL,
  `TANGGAL` varchar(255) NOT NULL,
  `MENU` varchar(255) NOT NULL,
  `JUMLAH` int(50) NOT NULL,
  `CATATAN` varchar(255) NOT NULL,
  `PEMBAYARAN` varchar(255) NOT NULL,
  `SUBTOTAL` int(50) NOT NULL,
  `TOTAL` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pesanmandala`
--

INSERT INTO `pesanmandala` (`ID`, `RESTO`, `NAMA`, `ALAMAT`, `TANGGAL`, `MENU`, `JUMLAH`, `CATATAN`, `PEMBAYARAN`, `SUBTOTAL`, `TOTAL`) VALUES
(1, 'Mandala', 'Doni ', 'Puri bintaro indah ', '2022-11-13', 'AYAM GORENG TEPUNG', 2, 'Ayamnya minta dada', 'COD', 40000, 55000),
(2, 'Mandala', 'Doni ', 'Puri bintaro indah ', '2022-11-13', 'AYAM GORENG TEPUNG', 2, 'ayamnya minta dada', 'COD', 40000, 55000),
(3, 'Mandala', 'Doni ', 'Puri bintaro indah ', '2022-11-13', 'AYAM GORENG TEPUNG', 2, 'ayamnya minta dada', 'COD', 40000, 55000),
(4, 'Mandala', 'Raihan fadillah', 'Arinda', '2022-11-15', 'KEPITING SAOS TIRAM', 1, 'Kepiting nya minta yang gede', 'OVO', 85000, 100000),
(5, 'Mandala', 'Yossy veifbrian', 'Jl.tegal rotan raya', '2022-11-17', 'GURAME BAKAR', 1, 'Sambal kecap nya minta lebih', 'COD', 65000, 80000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanmarufuku`
--

CREATE TABLE `pesanmarufuku` (
  `ID` int(50) NOT NULL,
  `RESTO` varchar(255) NOT NULL,
  `NAMA` varchar(255) NOT NULL,
  `ALAMAT` varchar(255) NOT NULL,
  `TANGGAL` varchar(255) NOT NULL,
  `MENU` varchar(255) NOT NULL,
  `JUMLAH` int(50) NOT NULL,
  `CATATAN` varchar(255) NOT NULL,
  `PEMBAYARAN` varchar(255) NOT NULL,
  `SUBTOTAL` int(50) NOT NULL,
  `TOTAL` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pesanmarufuku`
--

INSERT INTO `pesanmarufuku` (`ID`, `RESTO`, `NAMA`, `ALAMAT`, `TANGGAL`, `MENU`, `JUMLAH`, `CATATAN`, `PEMBAYARAN`, `SUBTOTAL`, `TOTAL`) VALUES
(1, 'Marufuku', 'Doni satria setiabudi', 'Jl. sumatra Puri bintaro indah blok d1/29 rt05 rw 022 kelurahan jombang kecamatan ciputat', '2022-11-16', 'coffee shake', 1, 'Minta susu kental manis', 'DANA', 20000, 35000),
(2, 'Marufuku', 'Doni satria setiabudi', 'Jl. sumatra Puri bintaro indah blok d1/29 rt05 rw 022 kelurahan jombang kecamatan ciputat', '2022-11-16', 'wagyu teriyaki', 1, '-', 'COD', 290000, 305000),
(3, 'Marufuku', 'Alfonsus Haryo', 'Ruko Multiguna', '2022-11-17', 'THAI ICED TEA', 1, 'less ice', 'GOPAY', 18000, 33000),
(4, 'Marufuku', 'Yossy veifbrian', 'Jl.tegal rotan raya', '2022-11-17', 'SABA SYIOKI', 1, 'test', 'DANA', 75000, 90000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanoniquaer`
--

CREATE TABLE `pesanoniquaer` (
  `ID` int(50) NOT NULL,
  `RESTO` varchar(255) NOT NULL,
  `NAMA` varchar(255) NOT NULL,
  `ALAMAT` varchar(255) NOT NULL,
  `TANGGAL` varchar(255) NOT NULL,
  `MENU` varchar(255) NOT NULL,
  `JUMLAH` int(50) NOT NULL,
  `CATATAN` varchar(255) NOT NULL,
  `PEMBAYARAN` varchar(255) NOT NULL,
  `SUBTOTAL` int(50) NOT NULL,
  `TOTAL` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pesanoniquaer`
--

INSERT INTO `pesanoniquaer` (`ID`, `RESTO`, `NAMA`, `ALAMAT`, `TANGGAL`, `MENU`, `JUMLAH`, `CATATAN`, `PEMBAYARAN`, `SUBTOTAL`, `TOTAL`) VALUES
(1, 'Oniquaer', 'Doni ', 'Puri bintaro indah ', '2022-11-14', 'Gyūdon', 1, 'saos nya banyakkin', 'COD', 40000, 55000),
(2, 'Oniquaer', 'Doni ', 'Puri bintaro indah ', '2022-11-14', 'Teriyaki salmon don', 2, 'salad nya banyakkin', 'DANA', 150000, 165000),
(3, 'Oniquaer', 'Raihan fadillah', 'Arinda', '2022-11-15', 'Takoyaki', 3, 'Saos takoyakinya banyak', 'DANA', 105000, 120000),
(4, 'Oniquaer', 'Yossy veifbrian', 'Jl.tegal rotan raya', '2022-11-17', 'GYŪDON', 1, 'test', 'COD', 40000, 55000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanzoku`
--

CREATE TABLE `pesanzoku` (
  `ID` int(50) NOT NULL,
  `RESTO` varchar(255) NOT NULL,
  `NAMA` varchar(255) NOT NULL,
  `ALAMAT` varchar(255) NOT NULL,
  `TANGGAL` varchar(255) NOT NULL,
  `MENU` varchar(255) NOT NULL,
  `JUMLAH` int(50) NOT NULL,
  `CATATAN` varchar(255) NOT NULL,
  `PEMBAYARAN` varchar(255) NOT NULL,
  `SUBTOTAL` int(50) NOT NULL,
  `TOTAL` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pesanzoku`
--

INSERT INTO `pesanzoku` (`ID`, `RESTO`, `NAMA`, `ALAMAT`, `TANGGAL`, `MENU`, `JUMLAH`, `CATATAN`, `PEMBAYARAN`, `SUBTOTAL`, `TOTAL`) VALUES
(1, 'Zoku', 'Doni ', 'Puri bintaro indah ', '2022-11-13', 'CHICKEN KARAAGE ', 1, 'Saos nya minta lebih', 'COD', 70000, 85000),
(2, 'Zoku', 'Raihan fadillah', 'Arinda', '2022-11-15', 'CHICKEN WINGS', 1, 'Pedas', 'COD', 78000, 93000),
(3, 'Zoku', 'Yossy veifbrian', 'Jl.tegal rotan raya', '2022-11-17', 'CHICKEN WINGS', 2, 'saos nya banyak', 'COD', 156000, 171000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `presto`
--

CREATE TABLE `presto` (
  `ID` int(50) NOT NULL,
  `NAMA` varchar(255) NOT NULL,
  `ALAMAT` varchar(255) NOT NULL,
  `NOTELFON` varchar(50) NOT NULL,
  `KATEGORI` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `presto`
--

INSERT INTO `presto` (`ID`, `NAMA`, `ALAMAT`, `NOTELFON`, `KATEGORI`) VALUES
(1, 'Solaria', 'Pusat Grosir Cililitan, Jl. Mayjen Sutoyo No.76 2, Cililitan, Kec. Kramat jati, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13640', '021654987', 'INDONESIAN FOOD'),
(2, 'Gastronomi', 'Jl. Raya Poncol No. 2, Susukan, Ciracas, RT.9/RW.9, Ciracas, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13750, Indonesia Petunjuk Arah', '021654987', 'INDONESIAN FOOD'),
(3, 'Mandala', 'Jl. Wolter Monginsidi No.80, RT.2/RW.4, Petogogan, Kec. Kby. Baru, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12180', '021654369', 'INDONESIAN FOOD'),
(4, 'Abuba', 'Jl. KH Wahid Hasyim No.120, RT.3/RW.1, Kb. Sirih, Kec. Menteng, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10340', '02145687', 'WESTERN FOOD'),
(5, 'Brizola', 'Jl. Tirtayasa Raya No.26, Melawai, Kec. Kby. Baru, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12160', '02165489', 'WESTERN FOOD'),
(6, 'Zoku', 'Pantai Indah Kapuk St, RGIJ 65/66, Kamal Muara, Kec. Penjaringan, Daerah Khusus Ibukota Jakarta 14470', '021225634', 'WESTERN FOOD'),
(7, 'Oniquaer', 'Jl. Karang Mas Sejahtera, Karang Mas Estate Rimba Resort, Jimbaran 80364 Indonesia.', '021113568', 'JAPANESE FOOD'),
(8, 'Kikugawa', 'Jl. Cikini IV No.13, RT.15/RW.5, Cikini, Kec. Menteng, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10330', '021325698', 'JAPANESE FOOD'),
(9, 'Marufuku', 'Jalan Melawai 6 No.11, Blok M, Kebayoran Baru, RT.3/RW.1, Melawai, Kec. Kby. Baru, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12160', '021035604', 'JAPANESE FOOD'),
(10, 'Al-Jazeerah Signature', 'Jl. Johar No.8, RT.18/RW.6, Kb. Sirih, Kec. Menteng, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10340', '0213585858', 'MIDDLE EASTERN FOOD'),
(11, 'Hadramouth Restaurant', 'Jl. Tambak No.16A, Pegangsaan, Kec. Menteng, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10320', '02134659874', 'MIDDLE EASTERN FOOD'),
(12, 'Al-Tahrir', 'Lt. Ground Plaza Festival Jalan HR Rasuna Said Blok 0A2 No.22, RT.2/RW.5, Karet Kuningan, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12940', '02177878757', 'MIDDLE EASTERN FOOD');

-- --------------------------------------------------------

--
-- Struktur dari tabel `resto`
--

CREATE TABLE `resto` (
  `idresto` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `resto`
--

INSERT INTO `resto` (`idresto`, `username`, `password`) VALUES
(0, 'test', '$2y$10$j1cBBUoHfqq5QKRP/m2FQuOY7mgvjKacKBapuuZSwWo8JMsUmpVGu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `solaria`
--

CREATE TABLE `solaria` (
  `ID` int(50) NOT NULL,
  `NAMA` varchar(255) NOT NULL,
  `DESKRIPSI` varchar(255) NOT NULL,
  `HARGA` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `solaria`
--

INSERT INTO `solaria` (`ID`, `NAMA`, `DESKRIPSI`, `HARGA`) VALUES
(1, 'NASI GORENG SPECIAL', 'Dimasak dengan resep turun menurun dan dengan topping aneka hewan laut dan darat dan disantap dengan nikmat', 54900),
(2, 'NASI GORENG SEAFOOD', 'Dimasak dengan resep turun menurun dan dengan topping aneka hewan laut dan disantap dengan nikmat', 30000),
(3, 'AYAM GORENG MENTEGA', 'Dimasak dengan resep turun menurun dan diongseng dengan saos mentega andalan solaria', 64600),
(4, 'BISTIK AYAM', 'Dimasak dengan resep turun menurun dan ayam di goreng dengan tepung lalu dituangkan saos bistik yang nikmat', 58000),
(5, 'CAPCAY SEAFOOD', 'Dimasak dengan resep turun menurun dengan sayuran yang fresh sehingga membuat cita rasa yang nikmat dan kaya', 45500),
(6, 'FRENCH FRIES', 'French fries merupakan cemilan terenak untuk nongkrong dengan kentang yang fresh dan digoreng dengan waktu yang pas', 23500),
(7, 'FISH CAKE', 'Dimasak dengan resep korean sehingga menghasilkan cita rasa yang nikmat dan tiada duanya', 33800),
(8, 'NASI PUTIH', 'Dimasak dengan beras pulan yang diambil langsung dari petani sehingga menghasilkan kenikmatan nasi yang pulen', 8000),
(9, 'NASI SAPI LADA HITAM', 'Satu paket nasi yang yang menjadi andalan solaria karena rasa yang nikmat dan sedap', 48000),
(10, 'NASI SAPO TAHU SEAFOOD', 'Satu paket nasi yang segar karena terdapat beberapa sayuran yang segar dan tahu yang lembut', 53000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `iduser` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`iduser`, `username`, `password`) VALUES
(1, 'doni ', '$2y$10$/FdKe6srpcDGnjqXW50Jee6HzjCAOKeh3HwWXA8TBzrLlNE8NXUT2'),
(4, 'budipriamtyaas', '$2y$10$Qrsd6k0MK2WHZWRPJZMLL.vgiXe.Fo2iCIR8dm/b6RAeR1y4Kdl0u'),
(5, 'tyaas', '$2y$10$No6w5ONjOZbn68b7.scmBuzVAjaEvYjWz.TTuke3gtLPMIu8ITSXe'),
(6, 'rafly', '$2y$10$yi0E2Uqch3tsR1ntm/ecAORwoe52xUsr8ydNO1ApWrJcTzPfskHxC'),
(7, 'lintang', '$2y$10$WRIf0DxBEPJWqJpVln5ErOfQlB2jx7vXd.BcpBmXinHaKil27SRIe'),
(8, 'pasha', '$2y$10$iDjASpIuBaNMujpxYfxZVuWhjGrZnZUz1oNeg7SKXPvDtV3M85Irq'),
(10, 'faidza', '$2y$10$dPAl0fvIecGqrYV36ruyf.q5fL4/iNnkd.IWOVH04iSjUNUfszCRu'),
(11, 'test', '$2y$10$OOrK3YTJ3Tj1PAMgmQtFvu0ePPheI7rh/OPNCujafSFlHjac0REIq'),
(12, 'pemweb', '$2y$10$E83CgfEhnCuZX55XlLYMLOa/KQ1MuQE0ZyU5tJutold.Saqd5BbP2'),
(13, 'user', '$2y$10$LEPawZZPYdV08XbnvYn49OgR/uVx0DBj/m.QD4SDEr.OLj2xM6j8S'),
(14, 'raihan', '$2y$10$esP/hurnA8e4K/cY6aO56.fUD0/HwEJ7SqI0RIO8zWKFxOakknvAu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `userprofile`
--

CREATE TABLE `userprofile` (
  `ID` int(50) NOT NULL,
  `NAMA` varchar(100) NOT NULL,
  `ALAMAT` varchar(200) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `NOTELFON` varchar(50) NOT NULL,
  `GENDER` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `userprofile`
--

INSERT INTO `userprofile` (`ID`, `NAMA`, `ALAMAT`, `EMAIL`, `NOTELFON`, `GENDER`) VALUES
(4, 'pasha', 'villa dago toll', 'pasha20@gmail.com', '08562545434', 'Pria'),
(5, 'raihan', 'jalanin aja dulu', 'raihan@gmail.com', '081399999999', 'Pria'),
(6, 'Muhammad adji pangestu', 'Jl.Poncol', 'mapcobot@gmail.com', '085676347575', 'Pria');

-- --------------------------------------------------------

--
-- Struktur dari tabel `zoku`
--

CREATE TABLE `zoku` (
  `ID` int(50) NOT NULL,
  `NAMA` varchar(255) NOT NULL,
  `DESKRIPSI` varchar(255) NOT NULL,
  `HARGA` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `zoku`
--

INSERT INTO `zoku` (`ID`, `NAMA`, `DESKRIPSI`, `HARGA`) VALUES
(1, 'SALMON CRISPY SUSHI', 'Flavorful bites of smoky salmon aburi, Japanese egg salad and Japanese pickled kyuri on top of fried anchovy sushi rice', 70000),
(2, 'TUNA TATAKI', 'Tuna sashimi yang fresh dari nelayan sehingga menghasilkan rasa rang segar', 108000),
(3, 'SALMON ABURI', 'Salmon sashimi slices with Zokus style of tomato dabudabu salsa, aloll sambal, house-made chili oil and basil. Comes with squid ink crackers for a perfect balance', 108000),
(4, 'SCALLOP COCONUT TATAKI', 'A delightful plate of U.S. scallops with kecombrangmarinated pineapple salad. Served in wasabi coconut dressing and topped with crispy curry leaves', 110000),
(5, 'TERIYAKI BEEF ABURI', 'Torched beef karubi and caramelized onion on top of cheesy potato croquette. Finished with smoked yolk jam and sprinkles of spring onion powder', 125000),
(6, 'CHICKEN KARAAGE ', 'Tender and juicy marinated chicken leg coated in charcoal batter, complimented with wasabi aloli dip and tobiko', 70000),
(7, 'CHICKEN POWDER', 'Tender and juicy brined pork collar coated in charcoal batter, tossed with white truffle oil and finished with wasabi aloli dip and tobiko', 80000),
(8, 'CHICKEN WINGS', 'All time classic marinated chicken wings, fried in sesame batter and comes with wasabi aioli dip', 78000),
(9, 'CARNITAS GYOZA', 'Pan fried dumplings filled with Mexican styled minced pork. Paired with the perfect duo of salsa verde and chipotle aloli dips', 78000),
(10, 'CRISPY NOODLE SALAD', 'A refreshing combination of crispy noodle, Japanese kyuni, bean sprouts, pineapples, coriander and basil. Mixed with black sesame dressing and sprinkled with shredded poached chicken', 68000);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `abuba`
--
ALTER TABLE `abuba`
  ADD PRIMARY KEY (`ID`);

--
-- Indeks untuk tabel `aljazeerah`
--
ALTER TABLE `aljazeerah`
  ADD PRIMARY KEY (`ID`);

--
-- Indeks untuk tabel `altahrir`
--
ALTER TABLE `altahrir`
  ADD PRIMARY KEY (`ID`);

--
-- Indeks untuk tabel `brizola`
--
ALTER TABLE `brizola`
  ADD PRIMARY KEY (`ID`);

--
-- Indeks untuk tabel `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`iddriver`);

--
-- Indeks untuk tabel `gastronomi`
--
ALTER TABLE `gastronomi`
  ADD PRIMARY KEY (`ID`);

--
-- Indeks untuk tabel `hadramout`
--
ALTER TABLE `hadramout`
  ADD PRIMARY KEY (`ID`);

--
-- Indeks untuk tabel `kikugawa`
--
ALTER TABLE `kikugawa`
  ADD PRIMARY KEY (`ID`);

--
-- Indeks untuk tabel `mandala`
--
ALTER TABLE `mandala`
  ADD PRIMARY KEY (`ID`);

--
-- Indeks untuk tabel `marufuku`
--
ALTER TABLE `marufuku`
  ADD PRIMARY KEY (`ID`);

--
-- Indeks untuk tabel `oniquaer`
--
ALTER TABLE `oniquaer`
  ADD PRIMARY KEY (`ID`);

--
-- Indeks untuk tabel `pdriver`
--
ALTER TABLE `pdriver`
  ADD PRIMARY KEY (`ID`);

--
-- Indeks untuk tabel `pemesananmakanan`
--
ALTER TABLE `pemesananmakanan`
  ADD PRIMARY KEY (`ID`);

--
-- Indeks untuk tabel `pesanabuba`
--
ALTER TABLE `pesanabuba`
  ADD PRIMARY KEY (`ID`);

--
-- Indeks untuk tabel `pesanaljazeerah`
--
ALTER TABLE `pesanaljazeerah`
  ADD PRIMARY KEY (`ID`);

--
-- Indeks untuk tabel `pesanaltahrir`
--
ALTER TABLE `pesanaltahrir`
  ADD PRIMARY KEY (`ID`);

--
-- Indeks untuk tabel `pesanbrizola`
--
ALTER TABLE `pesanbrizola`
  ADD PRIMARY KEY (`ID`);

--
-- Indeks untuk tabel `pesangastronomi`
--
ALTER TABLE `pesangastronomi`
  ADD PRIMARY KEY (`ID`);

--
-- Indeks untuk tabel `pesanhadramout`
--
ALTER TABLE `pesanhadramout`
  ADD PRIMARY KEY (`ID`);

--
-- Indeks untuk tabel `pesankikugawa`
--
ALTER TABLE `pesankikugawa`
  ADD PRIMARY KEY (`ID`);

--
-- Indeks untuk tabel `pesanmandala`
--
ALTER TABLE `pesanmandala`
  ADD PRIMARY KEY (`ID`);

--
-- Indeks untuk tabel `pesanmarufuku`
--
ALTER TABLE `pesanmarufuku`
  ADD PRIMARY KEY (`ID`);

--
-- Indeks untuk tabel `pesanoniquaer`
--
ALTER TABLE `pesanoniquaer`
  ADD PRIMARY KEY (`ID`);

--
-- Indeks untuk tabel `pesanzoku`
--
ALTER TABLE `pesanzoku`
  ADD PRIMARY KEY (`ID`);

--
-- Indeks untuk tabel `presto`
--
ALTER TABLE `presto`
  ADD PRIMARY KEY (`ID`);

--
-- Indeks untuk tabel `solaria`
--
ALTER TABLE `solaria`
  ADD PRIMARY KEY (`ID`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`);

--
-- Indeks untuk tabel `userprofile`
--
ALTER TABLE `userprofile`
  ADD PRIMARY KEY (`ID`);

--
-- Indeks untuk tabel `zoku`
--
ALTER TABLE `zoku`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `abuba`
--
ALTER TABLE `abuba`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `aljazeerah`
--
ALTER TABLE `aljazeerah`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `altahrir`
--
ALTER TABLE `altahrir`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `brizola`
--
ALTER TABLE `brizola`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `driver`
--
ALTER TABLE `driver`
  MODIFY `iddriver` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `gastronomi`
--
ALTER TABLE `gastronomi`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `hadramout`
--
ALTER TABLE `hadramout`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `kikugawa`
--
ALTER TABLE `kikugawa`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `mandala`
--
ALTER TABLE `mandala`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `marufuku`
--
ALTER TABLE `marufuku`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `oniquaer`
--
ALTER TABLE `oniquaer`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `pdriver`
--
ALTER TABLE `pdriver`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pemesananmakanan`
--
ALTER TABLE `pemesananmakanan`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `pesanabuba`
--
ALTER TABLE `pesanabuba`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `pesanaljazeerah`
--
ALTER TABLE `pesanaljazeerah`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pesanaltahrir`
--
ALTER TABLE `pesanaltahrir`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pesanbrizola`
--
ALTER TABLE `pesanbrizola`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pesangastronomi`
--
ALTER TABLE `pesangastronomi`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `pesanhadramout`
--
ALTER TABLE `pesanhadramout`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `pesankikugawa`
--
ALTER TABLE `pesankikugawa`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pesanmandala`
--
ALTER TABLE `pesanmandala`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `pesanmarufuku`
--
ALTER TABLE `pesanmarufuku`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pesanoniquaer`
--
ALTER TABLE `pesanoniquaer`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pesanzoku`
--
ALTER TABLE `pesanzoku`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `presto`
--
ALTER TABLE `presto`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `solaria`
--
ALTER TABLE `solaria`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `userprofile`
--
ALTER TABLE `userprofile`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `zoku`
--
ALTER TABLE `zoku`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
