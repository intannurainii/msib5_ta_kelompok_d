-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2023 at 11:42 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_berita`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '0192023a7bbd73250516f069df18b500');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `judul_berita` varchar(255) NOT NULL,
  `gambar_berita` text NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `isi_berita` text NOT NULL,
  `tanggal_publish` date NOT NULL,
  `id_penulis` int(11) NOT NULL,
  `views` int(11) NOT NULL DEFAULT 0,
  `editors_picks` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `judul_berita`, `gambar_berita`, `id_kategori`, `isi_berita`, `tanggal_publish`, `id_penulis`, `views`, `editors_picks`) VALUES
(1, 'Erling Haaland, Pemilik Kaki Kiri Mematikan di Liga Inggris', 'olahraga-1.jpeg', 1, 'Erling Haaland menjadi pemain tercepat yang mencetak 50 gol di Liga Inggris . Keberhasilan itu membuat penyerang Manchester City itu sukses melampaui catatan mantan pemain Manchester United, Andy Cole. Haaland menambah pundi-pundi golnya menjad 50 di Liga Inggris setelah Man City bermain imbang 1-1 melawan Liverpool di Stadion Etihad, Sabtu (26/11/2023). Pemain bernomor punggung 9 itu hanya membutuhkan 48 penampilan untuk menggenapi torehan golnya tersebut. Rekor ini sebelumnya dipegang Andy Cole dengan mencetak 50 gol dalam 65 penampilan tampil di Liga Inggris. Hebatnya, Haaland memecahkan rekor legenda rival sekota di usianya yang masih 23 tahun. \"Ini terasa istimewa. Saya sangat bersyukur dikelilingi rekan satu tim dan staf luar biasa yang menginspirasi saya untuk berkembang setiap hari. Merupakan suatu kehormatan bermain untuk klub ini!\" tulis Haaland pada akun media sosial Twitter (X) pribadinya.', '2023-11-26', 2, 43, 1),
(2, 'Juara MotoGP 2 Kali Beruntun, Bagnaia Patahkan Kutukan Nomor 1', 'motogp.png', 1, 'Francesco Bagnaia mematahkan kutukan nomor balap 1 setelah ia keluar sebagai juara dunia MotoGP 2023. Pembalap Ducati Lenovo itu sukses mempertahankan gelarnya setelah Jorge Martin gagal menyentuh garis finis. Ini merupakan gelar kedua Bagnaia secara beruntun sejak 2022. Catatan itu membawa Pecco semakin dipandang disegani. Betapa tidak, ia mampu menghancurkan pandangan orang tentang nomor keramat 1 MotoGP. Percaya tidak percaya, buktinya sudah ada sejumlah pembalap dengan nomor plat 1 yang gagal melanjutkan gelar juara mereka. Beberapa pembalap itu di antaranya mulai Nicky Hayden (2007), Jorge Lorenzo (2011), dan Casey Stoner (2008 dan 2012). Angka keramat itu sebelumnya identik dengan sosok juara dunia MotoGP lima kali beruntun, Mick Doohan.', '2023-11-27', 1, 238, 1),
(12, 'Ini Dampak Media Sosial yang Mungkin Tidak Kamu Sadari', 'kesehatan.jpg', 3, 'Mengakses media sosial memang menyenangkan. Namun, jika tidak dibarengi dengan pengendalian diri yang baik, ada dampak media sosial yang bisa membebanimu tanpa kamu sadari.  Hampir setiap hari pengguna media sosial mengunggah foto, status, maupun video terbaik mereka. Aktivitas ini menjadi begitu menyenangkan karena adanya sistem “penghargaan” dari orang lain berbentuk like maupun comment. Bahkan, ada orang yang jadi bisa berbohong mengenai kehidupannya di media sosial.\r\n\r\nDampak Media Sosial terhadap Kesehatan Mental Seseorang\r\nOrang dalam rentang usia 18–25 tahun biasanya menggunakan media sosial untuk mendapatkan informasi terbaru mengenai hal-hal yang sedang viral, mencari teman baru, atau sekadar memperkuat pertemanan. Sayangnya, sebagian dari mereka justru terjebak dalam perasaan rendah diri setelah menggunakan media sosial.\r\n\r\nHal tersebut dibuktikan dengan penelitian yang menyebutkan bahwa sekitar 88% orang akan membandingkan hidupnya dengan hidup orang lain yang tampak di media sosial. Ini dapat membuat mereka merasa rendah diri dan berpikir negatif tentang dirinya sendiri.\r\n\r\nCara berpikir yang demikian juga diketahui dapat meningkatkan risiko seseorang untuk mengalami duck syndrome atau pola pikir yang tidak sehat, seperti toxic positivity.\r\n\r\nStudi lain juga menunjukkan remaja yang sering mengakses media sosial lebih dari 2 jam per hari lebih berisiko mengalami gangguan psikologis, mulai dari gangguan kecemasan hingga depresi.', '2023-11-28', 1, 357, 1),
(13, 'Jokowi Tekankan Pentingnya Stabilitas Politik', 'politik-1.jpg', 2, 'Presiden Joko Widodo (Jokowi) menekankan pentingnya menjaga stabilitas politik dalam situasi saat ini, melalui dukungan dari partai politik. Salah satunya dalam bentuk dukungan Partai Nasdem di pemerintahan.  \"Saya kira bahwa stabilitas politik sangat penting sekali sekarang ini dan dukungan Nasdem, seperti disampaikan bapak ketua (Ketua Umum Nasdem Surya Paloh) saya kira juga diperlukan,\" ujar Jokowi seusai menghadiri acara HUT ke-10 Partai Nasdem di Jakarta, Kamis (11/11).  Baca: Presiden Jokowi Ingin BUMN Go Global  Jokowi menilai, kekuatan besar yang dimiliki Nasdem sangat menentukan stabilitas administrasi pemerintahan ke depan menuju 2024. Dalam sambutannya pada peringatan HUT ke-10 Partai Nasdem, Jokowi juga menyampaikan pentingnya optimisme sebagai sebuah bangsa besar.\r\n\r\nMenurut dia, bangsa Indonesia harus mulai membangun rasa percaya diri sebagai bangsa pemimpin. \"Jangan sampai kita kehilangan orientasi itu. Dan itulah yang dinamakan gerakan perubahan, gerakan restorasi, ya di situ,\" jelas Jokowi.', '2023-11-28', 1, 53, 0),
(17, 'Reformasi Pajak Kontroversial: Parlemen Menyahkan RUU Pajak Baru', 'politik-2.jpeg', 2, 'Parlemen hari ini berhasil menyetujui Rancangan Undang-Undang (RUU) Pajak yang telah menjadi perdebatan panjang selama beberapa bulan terakhir. RUU tersebut menargetkan restrukturisasi sistem pajak nasional dengan penekanan pada keadilan dan pemerataan beban pajak. Meskipun mendapat dukungan dari mayoritas partai pemerintah, langkah-langkah yang diusulkan oleh RUU ini telah memicu kontroversi, terutama terkait dengan dampaknya pada sektor usaha kecil dan menengah. Sejumlah anggota oposisi dan pengusaha mengecam kebijakan baru ini, mengkhawatirkan potensi dampak negatifnya terhadap pertumbuhan ekonomi dan lapangan pekerjaan. Meskipun demikian, pemerintah bersikeras bahwa perubahan ini adalah langkah yang diperlukan untuk menciptakan basis pajak yang lebih adil dan berkelanjutan.', '2023-12-01', 9, 0, 0),
(18, 'Vaksin COVID-19 Baru Menunjukkan Keefektifan Tinggi Melawan Varian Terbaru', 'kesehatan-2.jpg', 3, 'Studi klinis terbaru mengungkapkan bahwa vaksin COVID-19 generasi terbaru berhasil menunjukkan tingkat keefektifan yang tinggi dalam melawan varian virus terbaru. Vaksin ini dikembangkan sebagai respons terhadap evolusi virus, dan hasil uji coba menunjukkan bahwa tingkat perlindungan yang diberikan terhadap infeksi dan penyakit serius sangat baik. Temuan ini memberikan harapan baru dalam upaya global untuk mengatasi perubahan virus yang terus-menerus.', '2023-12-01', 10, 0, 0),
(19, 'Timnas Sepak Bola Raih Kemenangan Dramatis di Kualifikasi Piala Dunia', 'olahraga-3.jpg', 1, 'Dalam pertandingan kualifikasi Piala Dunia yang berlangsung kemarin, timnas sepak bola berhasil meraih kemenangan dramatis dengan skor 3-2 melawan lawan tangguh. Gol penentu dicetak pada menit-menit akhir pertandingan, mengamankan posisi tim untuk melangkah ke babak selanjutnya. Kemenangan ini mendapat apresiasi luas dari suporter setia dan dianggap sebagai momentum positif menuju turnamen internasional mendatang.', '2023-12-01', 10, 0, 0),
(20, 'Peningkatan Kesadaran Masyarakat Terhadap Kesehatan Mental di Tengah Pandemi', 'kesehatan-3.jpg', 3, 'Meningkatnya kesadaran masyarakat terhadap kesehatan mental menjadi sorotan dalam beberapa bulan terakhir, terutama di tengah pandemi yang terus berlanjut. Program-program kesehatan mental, webinar, dan kampanye kesadaran dirancang untuk memberikan dukungan kepada individu yang mungkin menghadapi tekanan psikologis akibat isolasi, kecemasan, dan ketidakpastian yang terkait dengan pandemi COVID-19. Pemerintah dan organisasi kesehatan berupaya untuk mengurangi stigma terkait kesehatan mental dan mendorong akses lebih luas terhadap layanan dukungan psikologis.', '2023-12-01', 9, 0, 0),
(21, 'Perusahaan Teknologi Ungkap Rencana Pengembangan Keamanan AI yang Lebih Canggih', 'teknologi-1.jpg', 7, 'Beberapa perusahaan teknologi terkemuka mengumumkan upaya bersama untuk mengembangkan solusi keamanan baru dalam penggunaan kecerdasan buatan (AI). Rencana ini mencakup peningkatan sistem deteksi ancaman dan perlindungan privasi data, mengantisipasi perkembangan cepat dalam teknologi AI. Langkah ini diambil untuk menjawab kekhawatiran terkait potensi penyalahgunaan teknologi AI dan memastikan pemanfaatannya untuk kepentingan positif.', '2023-12-02', 1, 1, 1),
(22, 'Peluncuran Teknologi 5G di Beberapa Kota Dukung Era Koneksi Super Cepat', 'teknologi-2.jpg', 7, 'Sejumlah kota mengalami peluncuran teknologi 5G, membawa era konektivitas super cepat kepada pengguna. Teknologi ini diharapkan memberikan pengalaman internet yang lebih responsif, mendukung pengembangan Internet of Things (IoT), dan memberikan fondasi untuk perkembangan teknologi baru seperti kendaraan otonom dan realitas virtual. Meskipun menyajikan potensi besar, peluncuran 5G juga memunculkan beberapa perhatian terkait keamanan dan dampak kesehatan, yang saat ini menjadi fokus evaluasi oleh berbagai pihak.', '2023-12-02', 9, 0, 0),
(23, 'Pemerintah Luncurkan Inisiatif Ekonomi: Fokus pada Pemulihan Pasca-Pandemi', 'politik-3.jpg', 2, 'Dalam konferensi pers, Menteri Keuangan menekankan komitmen pemerintah untuk mengurangi dampak ekonomi negatif akibat pandemi. Dia menyebutkan bahwa langkah-langkah ini sejalan dengan strategi nasional untuk meningkatkan ketahanan ekonomi dan memberikan sinyal positif kepada pelaku pasar dan investor. Meskipun mendapat dukungan dari sebagian besar fraksi di parlemen, ada juga kritik terhadap efektivitas dan kecukupan stimulus tersebut. Debat seputar langkah-langkah ekonomi ini diperkirakan akan menjadi fokus utama dalam agenda politik dalam beberapa bulan ke depan.', '2023-12-02', 2, 0, 0),
(24, 'Perusahaan Teknologi Terkemuka Rilis Smartphone Lipat Terbaru', 'teknologi-3.jpeg', 7, 'Perusahaan teknologi terkemuka meluncurkan smartphone lipat terbaru yang menjanjikan pengalaman pengguna yang revolusioner. Dengan layar fleksibel yang dapat dilipat, perangkat ini memungkinkan pengguna untuk menggantikan fungsi tablet dan smartphone dalam satu perangkat. Peluncuran ini memperkuat tren inovasi dalam dunia perangkat mobile, dengan harapan mendefinisikan ulang cara kita berinteraksi dengan teknologi sehari-hari.', '2023-12-02', 10, 0, 0),
(25, 'Olimpiade Musim Dingin 2022: Atlet Ski Alpen Raih Emas untuk Indonesia', 'olahraga-4.jpg', 1, 'Atlet ski alpen Indonesia, Ahmad Pratama, mencatatkan sejarah dengan meraih medali emas pertama untuk Indonesia dalam Olimpiade Musim Dingin 2022 yang berlangsung di Beijing. Prestasi gemilang ini membuat bangga seluruh rakyat Indonesia, sementara Pratama sendiri menyatakan rasa syukurnya atas dukungan luar biasa yang diterima selama kompetisi.', '2023-12-02', 10, 0, 0),
(26, 'Parlemen Setujui Rancangan Undang-Undang Kesehatan Mental', 'politik-4.jpg', 2, 'Parlemen hari ini menyetujui Rancangan Undang-Undang Kesehatan Mental yang bertujuan untuk meningkatkan pelayanan kesehatan mental di negara ini. RUU tersebut menetapkan standar baru untuk diagnosis, perawatan, dan pendekatan preventif terhadap masalah kesehatan mental. Langkah ini diapresiasi sebagai langkah positif menuju peningkatan perhatian terhadap isu kesehatan mental yang semakin mendesak di tengah masyarakat.', '2023-12-02', 2, 0, 0),
(27, 'Penelitian Baru Ungkap Keterkaitan Antara Gaya Hidup dan Risiko Penyakit Jantung', 'kesehatan-4.jpg', 3, 'Sebuah penelitian terbaru menyoroti pentingnya gaya hidup sehat dalam mengurangi risiko penyakit jantung. Studi ini menemukan bahwa kebiasaan merokok, kurangnya aktivitas fisik, dan pola makan tidak sehat berkontribusi secara signifikan terhadap peningkatan risiko penyakit jantung. Ahli kesehatan mendorong masyarakat untuk mengadopsi gaya hidup yang sehat, termasuk berhenti merokok, berolahraga secara teratur, dan mengonsumsi makanan bergizi untuk menjaga kesehatan jantung.', '2023-12-02', 2, 0, 0),
(28, 'Peluncuran Teknologi Quantum Computing Terbaru: Harapan Baru untuk Penghitungan Kompleks', 'teknologi-4.jpg', 7, 'Perusahaan teknologi terkemuka memperkenalkan teknologi komputasi kuantum terbaru yang diharapkan akan membawa revolusi dalam dunia penghitungan. Teknologi ini menjanjikan kemampuan untuk menyelesaikan perhitungan yang jauh lebih kompleks dibandingkan dengan komputer konvensional saat ini. Langkah ini dianggap sebagai terobosan signifikan menuju era komputasi kuantum yang dapat memecahkan masalah-masalah yang sulit di berbagai bidang, mulai dari penelitian ilmiah hingga pemodelan kompleksitas bisnis.', '2023-12-03', 2, 0, 0),
(29, 'Ketegangan Geopolitik Meningkat', 'politik-2.jpeg', 2, 'Presiden Bank Dunia Ajay Banga menyatakan ketegangan geopolitik yang meningkat akibat konflik Timur Tengah merupakan ancaman terbesar bagi perekonomian dunia saat ini. Namun demikian, risiko-risiko lain juga turut berperan. \"(Imbal hasil) Treasury AS bertenor 10-tahun baru saja melampaui 5% kemarin, ini adalah area yang belum kita lihat. Jadi ya, itu masih tersembunyi dibalik bayang-bayang. Lalu, berapa lama lagi pandemi berikutnya akan terjadi?\" kata Banga, dilansir Reuters,', '2023-12-03', 10, 0, 0),
(30, 'Skandal Politik Guncang Pemerintahan, Menteri Kesehatan Mengundurkan Diri', 'politik-6.jpeg', 2, 'Skandal politik yang melibatkan Menteri Kesehatan telah mengguncang stabilitas pemerintahan, dengan berita pengunduran dirinya menjadi sorotan utama. Investigasi media mengungkapkan adanya ketidakpatutan dalam pengelolaan dana kesehatan dan keputusan kontroversial terkait manajemen krisis kesehatan.', '2023-12-03', 9, 4, 0),
(31, 'Perkembangan Terbaru di Bidang Kecerdasan Buatan: Rilis Asisten Virtual Cerdas', 'teknologi-5.jpg', 7, 'perusahaan teknologi terkemuka, baru-baru ini merilis asisten virtual cerdas terbaru mereka yang didukung oleh kecerdasan buatan (AI). Asisten virtual ini, yang diberi nama [Nama Asisten], dirancang untuk memberikan pengalaman pengguna yang lebih personal dan efisien.', '2023-12-03', 2, 1, 0),
(32, 'Raksasa Teknologi Perusahaan D Umumkan Investasi Besar dalam Pengembangan Kecerdasan Buatan', 'teknologi-6.jpg', 7, ' [Perusahaan D], salah satu raksasa teknologi terbesar di dunia, mengumumkan investasi besar dalam pengembangan kecerdasan buatan (AI). Dana yang signifikan akan dialokasikan untuk penelitian dan pengembangan, dengan fokus pada aplikasi AI untuk sektor-sektor seperti kesehatan, otomotif, dan keamanan siber.', '2023-12-03', 1, 2, 0),
(33, 'Terobosan dalam Penanganan Kanker: Terapi Gen CAR-T Menunjukkan Keberhasilan pada Pasien Kritis', 'kesehatan-5.jpg', 3, 'Sebuah terobosan signifikan terjadi dalam dunia kesehatan dengan pengembangan terapi gen CAR-T (Chimeric Antigen Receptor T-cell) yang berhasil mengobati beberapa pasien kanker kritis. Terapi ini, yang mengubah sel darah putih pasien menjadi pembunuh kanker yang efektif, telah menunjukkan respons positif pada kasus-kasus yang sulit diobati sebelumnya.', '2023-12-03', 9, 8, 0),
(34, 'Studi Baru Ungkap Dampak Positif Olahraga Teratur terhadap Kesehatan Mental', 'kesehatan-6.jpg', 3, 'Penelitian terbaru yang dipublikasikan dalam jurnal kesehatan menyajikan bukti tambahan tentang manfaat positif olahraga teratur terhadap kesehatan mental. Studi yang melibatkan ribuan peserta menunjukkan bahwa orang yang terlibat dalam kegiatan fisik rutin memiliki tingkat kepuasan hidup yang lebih tinggi dan risiko gangguan mental lebih rendah.', '2023-12-03', 9, 20, 0),
(35, 'Olimpiade Musim Panas 2020: Prestasi Memukau dan Rekor Baru Dibuat', 'olahraga-5.jpeg', 1, 'Olimpiade Musim Panas 2020 menyita perhatian dunia olahraga dengan serangkaian prestasi luar biasa dan pencapaian rekor. Altet A dari Negara B mencatatkan rekor baru dalam lomba lari 100 meter putra, menorehkan waktu yang mengesankan dan menyabet medali emas.', '2023-12-03', 10, 0, 0),
(36, 'Olimpiade 2023 : Rekor Medali dan Kisah Inspiratif Mewarnai Perhelatan Terbesar di Dunia', 'olahraga-6.jpg', 1, 'Olimpiade [Tahun] yang baru-baru ini berakhir di Tokyo, menyajikan kisah-kisah luar biasa dan sejumlah rekor medali yang memukau dunia olahraga. Tokyo tampil gemilang sebagai pemenang total medali, menyabet sejumlah emas dan meraih prestasi terbaik dalam sejarah partisipasinya.', '2023-12-03', 2, 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id_contact` int(11) NOT NULL,
  `name_contact` varchar(100) NOT NULL,
  `email_contact` varchar(100) NOT NULL,
  `subject_contact` varchar(255) NOT NULL,
  `message_contact` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `kode_customer` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `telp` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`kode_customer`, `nama`, `email`, `username`, `password`, `telp`) VALUES
('C0001', 'rifki', 'rifki@gmail.com', 'rifki', '$2y$10$oNzhqrlFZrdL28wzH6.TYe2Y4Q/pshk3SKI42xpfn6EVAdbBO.G66', '+6289532754847');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Olahraga'),
(2, 'Politik'),
(3, 'Kesehatan'),
(7, 'Teknologi');

-- --------------------------------------------------------

--
-- Table structure for table `komen`
--

CREATE TABLE `komen` (
  `id_komen` int(11) NOT NULL,
  `id_berita` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `isi_komen` text DEFAULT NULL,
  `tgl` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `like_berita`
--

CREATE TABLE `like_berita` (
  `id` int(11) NOT NULL,
  `id_customer` varchar(100) DEFAULT NULL,
  `id_berita` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `id_newsletter` int(11) NOT NULL,
  `email_newsletter` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`id_newsletter`, `email_newsletter`) VALUES
(1, 'Andika@mail.com'),
(2, 'kahfi@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `penulis`
--

CREATE TABLE `penulis` (
  `id_penulis` int(11) NOT NULL,
  `nama_penulis` varchar(255) NOT NULL,
  `email_penulis` varchar(100) NOT NULL,
  `foto_profil` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `penulis`
--

INSERT INTO `penulis` (`id_penulis`, `nama_penulis`, `email_penulis`, `foto_profil`) VALUES
(1, 'Ilham Sigit', 'ilham@gmail.com', 'penulis-1.jpg'),
(2, 'Basudewa Supraja', 'dewa@gmail.com', 'penulis-2.jpg'),
(9, 'Risna Indriani', 'risna@gmail.com', 'penulis-3.jpg'),
(10, 'Putri Anindya', 'putri@gmail.com', 'penulis-4.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`),
  ADD KEY `id_kategori` (`id_kategori`),
  ADD KEY `id_penulis` (`id_penulis`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`kode_customer`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `komen`
--
ALTER TABLE `komen`
  ADD PRIMARY KEY (`id_komen`),
  ADD KEY `id_berita` (`id_berita`);

--
-- Indexes for table `like_berita`
--
ALTER TABLE `like_berita`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_customer` (`id_customer`),
  ADD KEY `id_berita` (`id_berita`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id_newsletter`);

--
-- Indexes for table `penulis`
--
ALTER TABLE `penulis`
  ADD PRIMARY KEY (`id_penulis`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `komen`
--
ALTER TABLE `komen`
  MODIFY `id_komen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=792;

--
-- AUTO_INCREMENT for table `like_berita`
--
ALTER TABLE `like_berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=167;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id_newsletter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `penulis`
--
ALTER TABLE `penulis`
  MODIFY `id_penulis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `berita`
--
ALTER TABLE `berita`
  ADD CONSTRAINT `berita_ibfk_2` FOREIGN KEY (`id_penulis`) REFERENCES `penulis` (`id_penulis`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `berita_ibfk_3` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `komen`
--
ALTER TABLE `komen`
  ADD CONSTRAINT `komen_ibfk_1` FOREIGN KEY (`id_berita`) REFERENCES `berita` (`id_berita`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `like_berita`
--
ALTER TABLE `like_berita`
  ADD CONSTRAINT `like_berita_ibfk_1` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`kode_customer`),
  ADD CONSTRAINT `like_berita_ibfk_2` FOREIGN KEY (`id_berita`) REFERENCES `berita` (`id_berita`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
