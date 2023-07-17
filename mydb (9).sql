-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2023 at 09:46 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_alumni`
--

CREATE TABLE `tbl_alumni` (
  `id` int(11) NOT NULL,
  `nim` varchar(100) DEFAULT NULL,
  `pekerjaan` varchar(100) DEFAULT NULL,
  `tahun_masuk` varchar(100) DEFAULT NULL,
  `tahun_lulus` varchar(100) DEFAULT NULL,
  `lama_kuliah` varchar(100) DEFAULT NULL,
  `ipk` varchar(100) DEFAULT NULL,
  `jenis_biaya_saatkuliah` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dosen`
--

CREATE TABLE `tbl_dosen` (
  `id` int(11) NOT NULL,
  `nip` varchar(100) DEFAULT NULL,
  `status_dosen` enum('PNS','Non PNS') DEFAULT NULL,
  `jabatan` varchar(100) DEFAULT NULL,
  `tugas_tambahan` varchar(100) DEFAULT NULL,
  `lama_kerja` varchar(100) DEFAULT NULL,
  `tingkat_pendidikan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jawaban_user`
--

CREATE TABLE `tbl_jawaban_user` (
  `id` int(11) NOT NULL,
  `jawaban` varchar(45) DEFAULT NULL,
  `tbl_pertanyaan_id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_jawaban_user`
--

INSERT INTO `tbl_jawaban_user` (`id`, `jawaban`, `tbl_pertanyaan_id`, `users_id`) VALUES
(167, 'sangat_puas', 45, 55),
(168, 'puas', 46, 55),
(169, 'cukup_puas', 47, 55),
(170, 'cukup_puas', 80, 48),
(171, 'cukup_puas', 81, 48),
(172, 'cukup_puas', 82, 48),
(173, 'cukup_puas', 83, 48),
(174, 'cukup_puas', 176, 48),
(175, 'cukup_puas', 177, 48),
(176, 'cukup_puas', 178, 48),
(177, 'cukup_puas', 179, 48),
(178, 'cukup_puas', 180, 48),
(179, 'cukup_puas', 181, 48),
(180, 'cukup_puas', 190, 48),
(181, 'cukup_puas', 191, 48),
(182, 'cukup_puas', 192, 48),
(183, 'cukup_puas', 193, 48),
(184, 'cukup_puas', 194, 48),
(185, 'cukup_puas', 195, 48),
(186, 'cukup_puas', 66, 49),
(187, 'cukup_puas', 67, 49),
(188, 'cukup_puas', 68, 49),
(189, 'cukup_puas', 69, 49),
(190, 'cukup_puas', 70, 49),
(191, 'cukup_puas', 71, 49),
(192, 'cukup_puas', 72, 49),
(193, 'cukup_puas', 100, 49),
(194, 'cukup_puas', 101, 49),
(195, 'cukup_puas', 102, 49),
(196, 'cukup_puas', 103, 49),
(197, 'cukup_puas', 104, 49),
(198, 'cukup_puas', 105, 49),
(199, 'puas', 45, 51),
(200, 'puas', 46, 51),
(201, 'puas', 47, 51),
(202, 'cukup_puas', 73, 52),
(203, 'cukup_puas', 74, 52),
(204, 'cukup_puas', 75, 52),
(205, 'cukup_puas', 76, 52),
(206, 'cukup_puas', 77, 52),
(207, 'cukup_puas', 78, 52),
(208, 'cukup_puas', 79, 52),
(209, 'sangat_puas', 57, 50),
(210, 'sangat_puas', 58, 50),
(211, 'sangat_puas', 59, 50),
(212, 'sangat_puas', 60, 50),
(213, 'sangat_puas', 61, 50),
(214, 'sangat_puas', 62, 50),
(215, 'sangat_puas', 63, 50),
(216, 'sangat_puas', 64, 50),
(217, 'sangat_puas', 65, 50),
(218, 'sangat_puas', 94, 50),
(219, 'sangat_puas', 95, 50),
(220, 'sangat_puas', 96, 50),
(221, 'sangat_puas', 97, 50),
(222, 'sangat_puas', 118, 50),
(223, 'sangat_puas', 119, 50),
(224, 'sangat_puas', 120, 50),
(225, 'sangat_puas', 121, 50),
(226, 'sangat_puas', 122, 50),
(227, 'sangat_puas', 123, 50),
(228, 'sangat_puas', 124, 50),
(229, 'sangat_puas', 125, 50),
(230, 'sangat_puas', 126, 50),
(231, 'sangat_puas', 127, 50),
(232, 'sangat_puas', 128, 50),
(233, 'sangat_puas', 129, 50),
(234, 'sangat_puas', 130, 50),
(235, 'sangat_puas', 131, 50),
(236, 'sangat_puas', 132, 50),
(237, 'sangat_puas', 133, 50),
(238, 'sangat_puas', 168, 50),
(239, 'sangat_puas', 169, 50),
(240, 'sangat_puas', 170, 50),
(241, 'sangat_puas', 171, 50),
(242, 'sangat_puas', 172, 50),
(243, 'sangat_puas', 173, 50),
(244, 'sangat_puas', 174, 50),
(245, 'sangat_puas', 175, 50),
(246, 'sangat_puas', 182, 50),
(247, 'sangat_puas', 183, 50),
(248, 'sangat_puas', 184, 50),
(249, 'sangat_puas', 185, 50),
(250, 'sangat_puas', 186, 50),
(251, 'sangat_puas', 187, 50),
(252, 'sangat_puas', 188, 50),
(253, 'sangat_puas', 189, 50),
(254, 'sangat_puas', 199, 50),
(255, 'sangat_puas', 200, 50),
(256, 'sangat_puas', 48, 53),
(257, 'sangat_puas', 49, 53),
(258, 'sangat_puas', 50, 53),
(259, 'sangat_puas', 51, 53),
(260, 'sangat_puas', 52, 53),
(261, 'sangat_puas', 53, 53),
(262, 'sangat_puas', 54, 53),
(263, 'sangat_puas', 55, 53),
(264, 'sangat_puas', 56, 53),
(265, 'sangat_puas', 84, 53),
(266, 'sangat_puas', 85, 53),
(267, 'sangat_puas', 86, 53),
(268, 'sangat_puas', 87, 53),
(269, 'sangat_puas', 88, 53),
(270, 'sangat_puas', 89, 53),
(271, 'sangat_puas', 90, 53),
(272, 'sangat_puas', 91, 53),
(273, 'sangat_puas', 92, 53),
(274, 'sangat_puas', 93, 53),
(275, 'sangat_puas', 106, 53),
(276, 'sangat_puas', 107, 53),
(277, 'sangat_puas', 108, 53),
(278, 'sangat_puas', 109, 53),
(279, 'sangat_puas', 110, 53),
(280, 'sangat_puas', 111, 53),
(281, 'sangat_puas', 112, 53),
(282, 'sangat_puas', 113, 53),
(283, 'sangat_puas', 114, 53),
(284, 'sangat_puas', 115, 53),
(285, 'sangat_puas', 116, 53),
(286, 'sangat_puas', 117, 53),
(287, 'sangat_puas', 134, 53),
(288, 'sangat_puas', 135, 53),
(289, 'sangat_puas', 136, 53),
(290, 'sangat_puas', 137, 53),
(291, 'sangat_puas', 138, 53),
(292, 'sangat_puas', 139, 53),
(293, 'sangat_puas', 140, 53),
(294, 'sangat_puas', 141, 53),
(295, 'sangat_puas', 142, 53),
(296, 'sangat_puas', 143, 53),
(297, 'sangat_puas', 144, 53),
(298, 'sangat_puas', 145, 53),
(299, 'sangat_puas', 146, 53),
(300, 'sangat_puas', 147, 53),
(301, 'sangat_puas', 148, 53),
(302, 'sangat_puas', 149, 53),
(303, 'sangat_puas', 150, 53),
(304, 'sangat_puas', 151, 53),
(305, 'sangat_puas', 152, 53),
(306, 'sangat_puas', 153, 53),
(307, 'sangat_puas', 154, 53),
(308, 'sangat_puas', 155, 53),
(309, 'sangat_puas', 156, 53),
(310, 'sangat_puas', 157, 53),
(311, 'sangat_puas', 158, 53),
(312, 'sangat_puas', 159, 53),
(313, 'sangat_puas', 160, 53),
(314, 'sangat_puas', 161, 53),
(315, 'sangat_puas', 162, 53),
(316, 'sangat_puas', 163, 53),
(317, 'sangat_puas', 164, 53),
(318, 'sangat_puas', 165, 53),
(319, 'sangat_puas', 166, 53),
(320, 'sangat_puas', 167, 53);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jurusan`
--

CREATE TABLE `tbl_jurusan` (
  `id` int(11) NOT NULL,
  `nama_prodi` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_jurusan`
--

INSERT INTO `tbl_jurusan` (`id`, `nama_prodi`) VALUES
(1, 'Teknik Arsitektur'),
(2, 'Teknik Elektro'),
(3, 'Teknik Informatika'),
(4, 'Teknik Mesin'),
(5, 'Teknik Sipil'),
(6, 'Rekayasa Infrastruktur & Lingkungan'),
(7, 'Teknik Kelautan');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `id` int(11) NOT NULL,
  `nama_kategori` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`id`, `nama_kategori`) VALUES
(1, 'Pengguna Lulusan'),
(2, 'Alumni'),
(3, 'Tenaga Kependidikan'),
(4, 'Mahasiswa'),
(5, 'Dosen'),
(6, 'Mitra');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kriteria`
--

CREATE TABLE `tbl_kriteria` (
  `id` int(11) NOT NULL,
  `nama_kriteria` varchar(100) CHARACTER SET armscii8 DEFAULT NULL,
  `kategori_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kriteria`
--

INSERT INTO `tbl_kriteria` (`id`, `nama_kriteria`, `kategori_id`) VALUES
(8, 'Kriteria Tata Pamong', 4),
(9, 'Kriteria Tata Pamong', 5),
(10, 'Kriteria Tata Pamong', 3),
(11, 'Kriteria Tata Pamong', 2),
(12, 'Kriteria Tata Pamong', 1),
(13, 'Kriteria Tata Pamong', 6),
(14, 'Kriteria Mahasiswa', 4),
(15, 'Kriteria Sumber Daya Manusia', 5),
(16, 'Kriteria Sumber Daya Manusia', 3),
(17, 'Kriteria Keuangan, Sarana, dan Prasarana', 4),
(18, 'Kriteria Keuangan, Sarana, dan Prasarana', 5),
(19, 'Kriteria Pendidikan', 4),
(20, 'Kriteria Penelitian', 5),
(21, 'Kriteria Penelitian', 6),
(22, 'Kriteria Pengabdian Kepada Masyarakat', 5),
(23, 'Kriteria Pengabdian Kepada Masyarakat', 6);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mahasiswa`
--

CREATE TABLE `tbl_mahasiswa` (
  `id` int(11) NOT NULL,
  `nim` varchar(100) DEFAULT NULL,
  `tahun_masuk` int(4) DEFAULT NULL,
  `lama_studi` enum('<1 tahun','1-2 tahun','3-4 tahun','>5 tahun') DEFAULT NULL,
  `ipk` varchar(100) DEFAULT NULL,
  `jenis_biayakuliah` enum('UKT','Non-UKT','Beasiswa','Bidikmisi') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_menu`
--

CREATE TABLE `tbl_menu` (
  `id` int(11) NOT NULL,
  `nama_menu` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mitra`
--

CREATE TABLE `tbl_mitra` (
  `id` int(11) NOT NULL,
  `jabatan` varchar(100) DEFAULT NULL,
  `instansi` varchar(100) DEFAULT NULL,
  `bidang_kerjasama` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_penggunalulusan`
--

CREATE TABLE `tbl_penggunalulusan` (
  `id` int(11) NOT NULL,
  `jabatan` varchar(100) DEFAULT NULL,
  `instansi` varchar(100) DEFAULT NULL,
  `jml_pegawai` int(11) DEFAULT NULL,
  `jml_pegawai_alumniuho` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pertanyaan`
--

CREATE TABLE `tbl_pertanyaan` (
  `id` int(11) NOT NULL,
  `pertanyaan` varchar(200) DEFAULT NULL,
  `kategori_id` int(11) NOT NULL,
  `kriteria_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pertanyaan`
--

INSERT INTO `tbl_pertanyaan` (`id`, `pertanyaan`, `kategori_id`, `kriteria_id`) VALUES
(45, 'Telah tercipta komunikasi yang baik antara pihak pengguna lulusan dengan pihak fakultas/universitas ?', 1, 12),
(46, 'Adanya kejelasan prosedur layanan manajemen antara pihak pengguna lulusan dengan fakultas/universitas ?', 1, 12),
(47, 'Kualitas layanan yang diberikan oleh staf/petugas ?', 1, 12),
(48, 'UHO telah memiliki sistem tata pamong yang dapat menjamin terlaksananya akuntabilitas, keberlanjutan dan transparansi, serta mitigasi potensi risiko institusi ?', 4, 8),
(49, 'Peraturan (Statuta, OTK, Peratutan Akademik) telah dilaksanakan secara konsisten, efektif dan efisien ?', 4, 8),
(50, 'Dosen dan Tenaga Kependidikan telah bekerja sesuai tugas dan fungsinya ?', 4, 8),
(51, 'Kualitas pelayanan di program studi dalam pengurusan kegiatan kemahasiswaan atau kebutuhan lainnya ?', 4, 8),
(52, 'Kualitas pelayanan di tingkat fakultas dalam pengurusan kegiatan kemahasiswaan atau kebutuhan lainnya ?', 4, 8),
(53, 'Kualitas pelayanan di tingkat universitas dalam pengurusan kegiatan kemahasiswaan atau kebutuhan lainnya ?', 4, 8),
(54, 'Sikap profesional petugas di program studi dalam melayani pengurusan kegiatan kemahasiswaan atau kebutuhan lainnya ?', 4, 8),
(55, 'Sikap profesional petugas di tingkat fakultas dalam melayani pengurusan kegiatan kemahasiswaan atau kebutuhan lainnya ?', 4, 8),
(56, 'Sikap profesional petugas di tingkat universitas dalam melayani pengurusan kegiatan kemahasiswaan atau kebutuhan lainnya ?', 4, 8),
(57, 'UHO telah memiliki sistem tata pamong yang dapat menjamin terlaksananya akuntabilitas, keberlanjutan dan transparansi, serta mitigasi potensi risiko institusi ?', 5, 9),
(58, 'Peraturan (Statuta, OTK, Peratutan Akademik) telah dilaksanakan secara konsisten, efektif dan efisien ?', 5, 9),
(59, 'Dosen dan Tenaga Kependidikan telah bekerja sesuai tugas dan fungsinya ?', 5, 9),
(60, 'Kualitas layanan di tingkat prodi/fakultas dalam kegiatan administratif (kepangkatan/jabatan fungsional, surat ijin, dll) ?', 5, 9),
(61, 'Kualitas layanan di tingkat universitas dalam kegiatan administratif (kepangkatan/jabatan fungsional, surat ijin, dll) ?', 5, 9),
(62, 'Kualitas layanan di tingkat fakultas dalam penyediaan kebutuhan pembelajaran ?', 5, 9),
(63, 'Kualitas layanan di tingkat universitas dalam penyediaan kebutuhan pembelajaran ?', 5, 9),
(64, 'Kemampuan petugas di tingkat prodi/fakultas  dalam memberikan layanan/informasi ?', 5, 9),
(65, 'Kemampuan petugas di tingkat universitas  dalam memberikan layanan/informasi ?', 5, 9),
(66, 'UHO telah memiliki sistem tata pamong yang dapat menjamin terlaksananya akuntabilitas, keberlanjutan dan transparansi, serta mitigasi potensi risiko institusi ?', 3, 10),
(67, 'Peraturan (Statuta, OTK, Peratutan Akademik) telah dilaksanakan secara konsisten, efektif dan efisien ?', 3, 10),
(68, 'Dosen dan Tenaga Kependidikan telah bekerja sesuai tugas dan fungsinya ?', 3, 10),
(69, 'Kualitas layanan di tingkat prodi/fakultas dalam kegiatan administratif (kepangkatan/jabatan fungsional, surat ijin, dll) ?', 3, 10),
(70, 'Kualitas layanan di tingkat universitas dalam kegiatan administratif (kepangkatan/jabatan fungsional, surat ijin, dll) ?', 3, 10),
(71, 'Kemampuan petugas di tingkat fakultas dalam memberikan layanan/informasi ?', 3, 10),
(72, 'Kemampuan petugas di tingkat universitas dalam memberikan layanan/informasi ?', 3, 10),
(73, 'UHO telah memiliki sistem tata pamong yang dapat menjamin terlaksananya akuntabilitas, keberlanjutan dan transparansi, serta mitigasi potensi risiko institusi ?', 2, 11),
(74, 'Peraturan (Statuta, OTK, Peratutan Akademik) telah dilaksanakan secara konsisten, efektif dan efisien ?', 2, 11),
(75, 'Dosen dan Tenaga Kependidikan telah bekerja sesuai tugas dan fungsinya ?', 2, 11),
(76, 'Kualitas layanan di tingkat program studi/fakultas dalam pengurusan administratif (ijazah, legalisir, dan kebutuhan lainnya) ?', 2, 11),
(77, 'Kualitas layanan di tingkat fakultas/universitas dalam pengelolaan alumni ?', 2, 11),
(78, 'Kualitas layanan di tingkat fakultas  dalam memberikan layanan/informasi ?', 2, 11),
(79, 'Kualitas layanan di tingkat universitas  dalam memberikan layanan/informasi ?', 2, 11),
(80, 'Telah tercipta komunikasi yang baik antara pihak mitra UHO dengan pihak universitas ?', 6, 13),
(81, 'Adanya kejelasan prosedur kerjasama  antara pihak mitra dengan pihak universitas ?', 6, 13),
(82, 'Realisasi kegiatan kerja sama selama masa berlaku MOA MOU/sejenisnya ?', 6, 13),
(83, 'Manfaat yang diberikan oleh pelaksanaan kegiatan terhadap pihak mitra ?', 6, 13),
(84, 'Kemudahan memperoleh informasi kegiatan penalaran ?', 4, 14),
(85, 'Kejelasan pembinaan kegiatan penalaran ?', 4, 14),
(86, 'Kemudahan memperoleh infomasi tentang minat dan bakat ?', 4, 14),
(87, 'Kejelasan pembinaan dalam minat/bakat ?', 4, 14),
(88, 'Kemudahan memperoleh infomasi tentang kesejahtraan (beasiswa, bimbingan konseling, dan layanan kesehatan) ?', 4, 14),
(89, 'Kejelasan prosedur dalam kesejahtraan (beasiswa, bimbingan konseling, dan layanan kesehatan) ?', 4, 14),
(90, 'Kemudahan memperoleh infomasi tentang karier dan bimbingan kewirausahaan ?', 4, 14),
(91, 'Kejelasan prosedur dalam karier dan bimbingan kewirausahaan ?', 4, 14),
(92, 'Kejelasan kriteria seleksi beasiswa ?', 4, 14),
(93, 'Ketepatan waktu pencairan beasiswa ?', 4, 14),
(94, 'Kejelasan sistem rekruitmen, orientasi, dan penempatan/pembagian tugas dosen ?', 5, 15),
(95, 'Kesempatan untuk mengikuti pelatihan/workshop/seminar yang dibutuhkan untuk pengembangan diri ?', 5, 15),
(96, 'Jenjang karir didasarkan pada kinerja/prestasi kerja ?', 5, 15),
(97, 'Sistem pembinaan dosen dalam bentuk pemberian penghargaan dan sanksi ?', 5, 15),
(100, 'Kejelasan sistem rekruitmen, orientasi, dan penempatan pegawai ?', 3, 16),
(101, 'Kesempatan untuk mengikuti pelatihan/workshop/seminar yang dibutuhkan untuk pengembangan diri ?', 3, 16),
(102, 'Jenjang karir didasarkan pada kinerja/prestasi kerja ?', 3, 16),
(103, 'Sistem pembinaan tenaga kependidikan dalam bentuk pemberian penghargaan dan sanksi ?', 3, 16),
(104, 'Universitas menilai dan mengevaluasi pekerjaan yang dilakukan tenaga kependidikan secara periodik ?', 3, 16),
(105, 'Universitas menanggapi kemudian menindaklanjuti kritik, saran, dan keluhan yang disampaikan ?', 3, 16),
(106, 'Adanya alokasi dana  untuk kegiatan kemahasiswaan ?', 4, 17),
(107, 'Ruang kuliah nyaman, bersih, rapi, dan memadai ?', 4, 17),
(108, 'Ketersediaan alat/bahan  penunjang kegiatan praktikum ?', 4, 17),
(109, 'Perpustakaan yang nyaman, bersih, dan memadai ?', 4, 17),
(110, 'Perpustakaan menyediakan buku, jurnal, dan literatur lain yang memadai ?', 4, 17),
(111, 'Tempat ibadah nyaman, bersih, dan memadai ?', 4, 17),
(112, 'Ketersediaan sarana dan prasarana internet ?', 4, 17),
(113, 'Taman dan ruang terbuka yang mendukung terciptanya suasana akademik yang kondusif ?', 4, 17),
(114, 'Ketersediaan sarana dan prasarana olah raga ?', 4, 17),
(115, 'Ketersediaan sarana dan prasarana kesehatan ?', 4, 17),
(116, 'Tempat parkir yang aman dan memadai ?', 4, 17),
(117, 'Toilet nyaman, bersih, dan memadai ?', 4, 17),
(118, 'Alokasi biaya operasional pendidikan memadai ?', 5, 18),
(119, 'Alokasi dana kegiatan penelitian dosen memadai ?', 5, 18),
(120, 'Alokasi dana untuk kegiatan Pengabdian kepada Masyarakat oleh dosen memadai ?', 5, 18),
(121, 'Ruang kuliah nyaman dan memadai ?', 5, 18),
(122, 'Ruang dosen nyaman dan memadai ?', 5, 18),
(123, 'Ketersediaan alat-alat penunjang untuk kegiatan mengajar ?', 5, 18),
(124, 'Perpustakaan nyaman dan memadai ?', 5, 18),
(125, 'Perpustakaan menyediakan buku, jurnal, dan literatur lain yang memadai ?', 5, 18),
(126, 'Tempat ibadah nyaman dan memadai ?', 5, 18),
(127, 'Akses jaringan internet memadai dan lancer ?', 5, 18),
(128, 'Ketersediaan sarana dan prasarana pembelajaran daring ?', 5, 18),
(129, 'Taman maupun ruang terbuka yang mendukung terciptanya suasana akademik ?', 5, 18),
(130, 'Ketersediaan sarana dan prasarana olah raga ?', 5, 18),
(131, 'Ketersediaan sarana dan prasarana kesehatan ?', 5, 18),
(132, 'Tempat parkir yang aman dan memadai ?', 5, 18),
(133, 'Toilet nyaman, bersih, dan memadai ?', 5, 18),
(134, 'Kondisi sarana dan prasarana pembelajaran daring ?', 4, 19),
(135, 'Perpustakaan yang nyaman dan memadai ?', 4, 19),
(136, 'Perpustakaan menyediakan buku, jurnal, dan literature lain yang memadai ?', 4, 19),
(137, 'Tersedianya sarana dalam mengakses buku, jurnal dan literature serta bahan ajar berbasis internet di perpustakaan ?', 4, 19),
(138, 'Ketersediaan laboratorium yang relevan dengan kebutuhan keilmuan ?', 4, 19),
(139, 'Kelengkapan sarana laboratorium yang mudah diakses dan berkualitas ?', 4, 19),
(140, 'Ruang kuliah aman, nyaman, dan bersih ?', 4, 19),
(141, 'Kelengkapan sarana perkuliahan ?', 4, 19),
(142, 'Ruang layanan administrasi akademik fakultas (Tata Usaha) nyaman ?', 4, 19),
(143, 'Ruang administrasi akademik (Tata Usaha Fakultas) memiliki prosedur pelayanan akademik yang jelas ?', 4, 19),
(144, 'Sistem informasi akademik universitas memberikan data administrasi yang akurat ?', 4, 19),
(145, 'Jadwal kegiatan akademik diselenggarakan tepat waktu ?', 4, 19),
(146, 'Tenaga kependidikan memberikan informasi yang akurat dan tepat waktu ?', 4, 19),
(147, 'Dosen menyampaikan RPS dan melaksanakan kontrak perkuliahan yang telah disepakati ?', 4, 19),
(148, 'Pengelola program studi/fakultas memberikan pelayanan prima kepada mahasiswa ?', 4, 19),
(149, 'Sistem informasi akademik mudah diakses ?', 4, 19),
(150, 'Staf perpustakaan tanggap melayani mahasiswa ?', 4, 19),
(151, 'Tenaga kependidikan tanggap melayani keluhan mahasiswa ?', 4, 19),
(152, 'Dosen memberikan kesempatan untuk bertanya atau berdiskusi ?', 4, 19),
(153, 'Kemudahan dosen dalam melayani mahasiswa ?', 4, 19),
(154, 'Dosen wali akademik tanggap menangani permasalahan akademik mahasiswa ?', 4, 19),
(155, 'Pustakawan memiliki pengetahuan sesuai dengan pekerjaannya ?', 4, 19),
(156, 'Tenaga kependidikan memiliki pengetahuan sesuai dengan bidang pekerjaannya ?', 4, 19),
(157, 'Tenaga kependidikan bersikap ramah dan professional ?', 4, 19),
(158, 'Dosen memberikan perkuliahan sesuai kontrak (minimal 14 minggu) ?', 4, 19),
(159, 'Dosen transparan dalam pemberian nilai ?', 4, 19),
(160, 'Dosen wali akademik memberikan solusi dalam menangani permasalahan mahasiswa ?', 4, 19),
(161, 'Kurikulum sesuai dengan kompetensi lulusan ?', 4, 19),
(162, 'Dosen memiliki kompetensi sesuai bidang ilmu ?', 4, 19),
(163, 'Sistem informasi akademik memberikan peringatan terkait kegiatan akademik maupun kelengkapan administrasi akademik ?', 4, 19),
(164, 'Pustakawan membantu mencarikan buku/ jurnal terkait ?', 4, 19),
(165, 'Tenaga kependidikan memahami masalah dan kepentingan administrasi akademik mahasiswa ?', 4, 19),
(166, 'Dosen memberikan perhatian kepada semua mahasiswa terkait perkuliahan ?', 4, 19),
(167, 'Dosen wali akademik memantau perkembangan akademik mahasiswa ?', 4, 19),
(168, 'Kemudahan dalam memperoleh informasi tentang dana penelitian ?', 5, 20),
(169, 'Seleksi dana penelitian dilakukan secara transparan dan akuntabel ?', 5, 20),
(170, 'Kesesuaian  penelitian dengan bidang ilmu ?', 5, 20),
(171, 'Keterlibatan mahasiswa dalam penelitian ?', 5, 20),
(172, 'Hasil penelitian telah diintegrasikan dalam proses pembelajaran (bahan ajar/buku ajar) ?', 5, 20),
(173, 'Kemudahan mendapatkan bantuan seminar luar negeri ?', 5, 20),
(174, 'Kemudahan mendapatkan bantuan seminar dalam negeri ?', 5, 20),
(175, 'Kemudahan dalam memanfaatkan fasilitas atau sarana prasarana fakultas/universitas untuk keperluan pelaksanaan penelitian ?', 5, 20),
(176, 'Layanan yang diberikan staf/petugas di bagian kerjasama Universitas bidang penelitan ?', 6, 21),
(177, 'Kompetensi SDM yang tersedia di universitas sehubungan dengan kerjasama bidang penelitian memadai ?', 6, 21),
(178, 'Komunikasi yang baik antara pihak mitra dan universitas di bidang penelitian ?', 6, 21),
(179, 'Kejelasan prosedur kerjasama bidang penelitian antara pihak mitra dan pihak fakultas ?', 6, 21),
(180, 'Implementasi kegiatan kerja sama bidang penelitian sesuai kontrak ?', 6, 21),
(181, 'Manfaat pelaksanaan kegiatan penelitian terhadap pihak mitra ?', 6, 21),
(182, 'Kemudahan dalam memperoleh informasi tentang dana pengabdian kepada masyarakat ?', 5, 22),
(183, 'Seleksi dana pengabdian kepada masyarakat dilakukan secara transparan dan akuntabel ?', 5, 22),
(184, 'Kesesuaian pengabdian kepada masyarakat dengan bidang ilmu ?', 5, 22),
(185, 'Keterlibatan mahasiswa dalam pengabdian kepada masyarakat ?', 5, 22),
(186, 'Hasil pengabdian kepada masyarakat diintegrasikan dalam proses pembelajaran (bahan ajar/buku ajar) ?', 5, 22),
(187, 'Kemudahan mendapatkan bantuan seminar luar negeri ?', 5, 22),
(188, 'Kemudahan mendapatkan bantuan seminar dalam negeri ?', 5, 22),
(189, 'Kemudahan dalam memanfaatkan fasilitas atau sarana prasarana fakultas/universitas untuk keperluan pelaksanaan pengabdian kepada masyarakat ?', 5, 22),
(190, 'Layanan yang diberikan staf/petugas di bagian kerjasama Universitas bidang pengabdian kepada masyarakat ?', 6, 23),
(191, 'Kompetensi SDM yang tersedia di Universitas sehubungan dengan kerjasama bidang pengabdian kepada masyarakat memadai ?', 6, 23),
(192, 'Komunikasi yang baik antara pihak mitra dan pihak universitas bidang pengabdian kepada masyarakat ?', 6, 23),
(193, 'Kejelasan prosedur kerjasama antara pihak mitra dan pihak fakultas di bidang pengabdian kepada masyarakat ?', 6, 23),
(194, 'Implementasi kegiatan kerja sama di bidang pengabdian kepada masyarakat sesuai kontrak ?', 6, 23),
(195, 'Manfaat pelaksanaan kegiatan pengabdian kepada masyarakat terhadap pihak mitra ?', 6, 23),
(199, 'Universitas mengevaluasi pekerjaan yang dilakukan dosen secara periodik ?', 5, 15),
(200, 'Universitas menanggapi maupun menindaklanjuti kritik, saran, dan keluhan yang disampaikan ?', 5, 15);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_saran`
--

CREATE TABLE `tbl_saran` (
  `id` int(11) NOT NULL,
  `saran` text DEFAULT NULL,
  `users_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_saran`
--

INSERT INTO `tbl_saran` (`id`, `saran`, `users_id`) VALUES
(31, 'Terimakasih', 55),
(32, 'Fasilitas Internet kurang bagus', 48),
(33, 'Terimakasih', 49),
(34, 'Terimakasih', 51),
(35, 'Terimakasih', 52),
(36, 'Semoga Lebih Baik', 50),
(37, 'Mahasiswa', 53);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tendik`
--

CREATE TABLE `tbl_tendik` (
  `id` int(11) NOT NULL,
  `nip` varchar(100) DEFAULT NULL,
  `status_tendik` varchar(100) DEFAULT NULL,
  `jabatan` varchar(100) DEFAULT NULL,
  `unit_kerja` varchar(100) DEFAULT NULL,
  `lama_kerja` varchar(100) DEFAULT NULL,
  `tingkat_pendidikan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(200) DEFAULT NULL,
  `nim` varchar(100) NOT NULL,
  `email` varchar(200) DEFAULT NULL,
  `tbl_jurusan_id` int(11) NOT NULL,
  `jenis_kelamin` enum('Laki - Laki','Perempuan') DEFAULT NULL,
  `alamat` text CHARACTER SET armscii8 DEFAULT NULL,
  `no_hp` varchar(100) DEFAULT NULL,
  `user_type` enum('admin','pengguna_lulusan','alumni','tenaga_kependidikan','mahasiswa','dosen','mitra') NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama_lengkap`, `nim`, `email`, `tbl_jurusan_id`, `jenis_kelamin`, `alamat`, `no_hp`, `user_type`, `password`) VALUES
(48, 'Mitra', 'MITRA', 'mitra@gmail.com', 3, 'Laki - Laki', 'Kampus Uho', '12345678', 'mitra', '$2y$10$CPrKEDH2YAXdBcp9sLrFluos32dRvm8eeNEtKDwez3I9B30mxFSP.'),
(49, 'Tenaga Pendidik', 'TENAGAPENDIDIK', 'tendik@gmail.com', 3, 'Laki - Laki', 'Kampus Uho', '12345678', 'tenaga_kependidikan', '$2y$10$T.N4vzwBO83AkndfDTewJezfGA7ThD6uya5XRwQ2o0ekVUKObFZf.'),
(50, 'dosen', '0011078904', 'dosen@gmail.com', 3, 'Laki - Laki', 'Andonuhu', '12345678', 'dosen', '$2y$10$6fomaQTDcSgaD2IR6EWJB.bk4hDeqxOmeuR5qHwYmwLlHkdMJbsTG'),
(51, 'Lisa', 'PENGGUNALULUSAN', 'penggunalulusan@gmail.com', 3, 'Laki - Laki', 'Andonuhu', '3923982983', 'pengguna_lulusan', '$2y$10$GObzeynJigwqyBIH0S6Jku90MU3GeD2A4xz.qs0xim1O20b/z.dTi'),
(52, 'Dinar', 'ALUMNI', 'alumni@gmail.com', 3, 'Laki - Laki', 'Wua - Wua', '3923982983', 'alumni', '$2y$10$441LGMEHzVgrz3Gs3XHvEufuLaK5RZswLRPHlPMiNvpNxJAB5RAfm'),
(53, 'Fauzan', 'E1E120067', 'fauzan@gmail.com', 3, 'Laki - Laki', 'Kancil', '3923982983', 'mahasiswa', '$2y$10$TL65dokufygtLWOTCdqQKOh1cmIRyRHWHYH5q/sP7LRGQ/eUWvz56'),
(54, 'Admin123', 'ADMIN', 'admin1@gmail.com', 3, 'Laki - Laki', 'uho', '12345678', 'admin', '$2y$10$e4CKhEuUukWchOq/tjJub.MK1eI.ofaVXqzgF0xr4XUaWaf8m9m/G'),
(55, 'Sarman', 'SARMAN', 'sarman@gmail.com', 3, 'Laki - Laki', 'Palangga', '3923982983', 'pengguna_lulusan', '$2y$10$Ft7s63XglYkLm8ZnUox.beuW.LeFCG5PU5/7H02B3Qdr9/L.qE212');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_alumni`
--
ALTER TABLE `tbl_alumni`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_dosen`
--
ALTER TABLE `tbl_dosen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_jawaban_user`
--
ALTER TABLE `tbl_jawaban_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_tbl_jawaban_user_tbl_pertanyaan1` (`tbl_pertanyaan_id`),
  ADD KEY `fk_tbl_jawaban_user_users1` (`users_id`);

--
-- Indexes for table `tbl_jurusan`
--
ALTER TABLE `tbl_jurusan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_kriteria`
--
ALTER TABLE `tbl_kriteria`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_tbl_kriteria_tbl_kategori1` (`kategori_id`);

--
-- Indexes for table `tbl_mahasiswa`
--
ALTER TABLE `tbl_mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_mitra`
--
ALTER TABLE `tbl_mitra`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_penggunalulusan`
--
ALTER TABLE `tbl_penggunalulusan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pertanyaan`
--
ALTER TABLE `tbl_pertanyaan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_tbl_pertanyaan_tbl_kategori1` (`kategori_id`) USING BTREE,
  ADD KEY `fk_tbl_pertanyaan_tbl_kriteria1` (`kriteria_id`);

--
-- Indexes for table `tbl_saran`
--
ALTER TABLE `tbl_saran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_tbl_saran_user1` (`users_id`);

--
-- Indexes for table `tbl_tendik`
--
ALTER TABLE `tbl_tendik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`,`nim`) USING BTREE,
  ADD KEY `fk_users_tbl_jurusan1` (`tbl_jurusan_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_jawaban_user`
--
ALTER TABLE `tbl_jawaban_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=321;

--
-- AUTO_INCREMENT for table `tbl_kriteria`
--
ALTER TABLE `tbl_kriteria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tbl_pertanyaan`
--
ALTER TABLE `tbl_pertanyaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;

--
-- AUTO_INCREMENT for table `tbl_saran`
--
ALTER TABLE `tbl_saran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_jawaban_user`
--
ALTER TABLE `tbl_jawaban_user`
  ADD CONSTRAINT `fk_tbl_jawaban_user_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_kriteria`
--
ALTER TABLE `tbl_kriteria`
  ADD CONSTRAINT `fk_tbl_kriteria_tbl_kategori1` FOREIGN KEY (`kategori_id`) REFERENCES `tbl_kategori` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_pertanyaan`
--
ALTER TABLE `tbl_pertanyaan`
  ADD CONSTRAINT `fk_tbl_pertanyaan_tbl_kategori1` FOREIGN KEY (`kategori_id`) REFERENCES `tbl_kategori` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_tbl_pertanyaan_tbl_kriteria1` FOREIGN KEY (`kriteria_id`) REFERENCES `tbl_kriteria` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_saran`
--
ALTER TABLE `tbl_saran`
  ADD CONSTRAINT `fk_tbl_saran_user1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_users_tbl_jurusan1` FOREIGN KEY (`tbl_jurusan_id`) REFERENCES `tbl_jurusan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
