-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 03 Des 2023 pada 12.23
-- Versi server: 8.0.30
-- Versi PHP: 8.1.10

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
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2010_02_21_114906_create_tbl_jurusan_table', 1),
(2, '2014_10_12_000000_create_users_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_11_21_141340_create_tbl_kategori_table', 1),
(7, '2023_11_21_141645_create_tbl_kriteria_table', 1),
(8, '2023_11_21_160859_create_tbl_saran_table', 1),
(9, '2023_12_21_141703_create_tbl_kategori_kriteria_table', 1),
(10, '2023_13_20_122147_create_tbl_pertanyaan_table', 1),
(11, '2023_13_21_121918_create_tbl_jawaban_user_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_jawaban_user`
--

CREATE TABLE `tbl_jawaban_user` (
  `id` bigint UNSIGNED NOT NULL,
  `jawaban` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tbl_pertanyaan_id` bigint UNSIGNED NOT NULL,
  `users_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_jurusan`
--

CREATE TABLE `tbl_jurusan` (
  `id` bigint UNSIGNED NOT NULL,
  `nama_prodi` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tbl_jurusan`
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
-- Struktur dari tabel `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `id` bigint UNSIGNED NOT NULL,
  `nama_kategori` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tbl_kategori`
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
-- Struktur dari tabel `tbl_kategori_kriteria`
--

CREATE TABLE `tbl_kategori_kriteria` (
  `id` bigint UNSIGNED NOT NULL,
  `tbl_kategori_id` bigint UNSIGNED NOT NULL,
  `tbl_kriteria_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tbl_kategori_kriteria`
--

INSERT INTO `tbl_kategori_kriteria` (`id`, `tbl_kategori_id`, `tbl_kriteria_id`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 1),
(4, 3, 3),
(5, 4, 1),
(6, 4, 2),
(7, 4, 4),
(8, 4, 5),
(9, 5, 1),
(10, 5, 3),
(11, 5, 4),
(12, 5, 6),
(13, 5, 7),
(14, 6, 1),
(15, 6, 6),
(16, 6, 7);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kriteria`
--

CREATE TABLE `tbl_kriteria` (
  `id` bigint UNSIGNED NOT NULL,
  `nama_kriteria` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tbl_kriteria`
--

INSERT INTO `tbl_kriteria` (`id`, `nama_kriteria`) VALUES
(1, 'Kriteria Tata Pamong'),
(2, 'Kriteria Mahasiswa'),
(3, 'Kriteria Sumber Daya Manusia'),
(4, 'Kriteria Keuangan, Sarana, dan Prasarana'),
(5, 'Kriteria Pendidikan'),
(6, 'Kriteria Penelitian'),
(7, 'Kriteria Pengabdian Kepada Masyarakat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pertanyaan`
--

CREATE TABLE `tbl_pertanyaan` (
  `id` bigint UNSIGNED NOT NULL,
  `pertanyaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori_id` bigint UNSIGNED NOT NULL,
  `kriteria_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tbl_pertanyaan`
--

INSERT INTO `tbl_pertanyaan` (`id`, `pertanyaan`, `kategori_id`, `kriteria_id`) VALUES
(1, 'Telah tercipta komunikasi yang baik antara pihak pengguna lulusan dengan pihak fakultas/universitas?', 1, 1),
(2, 'Adanya kejelasan prosedur layanan manajemen antara pihak pengguna lulusan dengan fakultas/universitas?', 1, 1),
(3, 'Kualitas layanan yang diberikan oleh staf/petugas?', 1, 1),
(4, 'UHO telah memiliki sistem tata pamong yang dapat menjamin terlaksananya akuntabilitas, keberlanjutan dan transparansi, serta mitigasi potensi risiko institusi?', 4, 1),
(5, 'Peraturan (Statuta, OTK, Peratutan Akademik) telah dilaksanakan secara konsisten, efektif dan efisien?', 4, 1),
(6, 'Dosen dan Tenaga Kependidikan telah bekerja sesuai tugas dan fungsinya?', 4, 1),
(7, 'Kualitas pelayanan di program studi dalam pengurusan kegiatan kemahasiswaan atau kebutuhan lainnya?', 4, 1),
(8, 'Kualitas pelayanan di tingkat fakultas dalam pengurusan kegiatan kemahasiswaan atau kebutuhan lainnya?', 4, 1),
(9, 'Kualitas pelayanan di tingkat universitas dalam pengurusan kegiatan kemahasiswaan atau kebutuhan lainnya?', 4, 1),
(10, 'Sikap profesional petugas di program studi dalam melayani pengurusan kegiatan kemahasiswaan atau kebutuhan lainnya?', 4, 1),
(11, 'Sikap profesional petugas di tingkat fakultas dalam melayani pengurusan kegiatan kemahasiswaan atau kebutuhan lainnya?', 4, 1),
(12, 'Sikap profesional petugas di tingkat universitas dalam melayani pengurusan kegiatan kemahasiswaan atau kebutuhan lainnya?', 4, 1),
(13, 'UHO telah memiliki sistem tata pamong yang dapat menjamin terlaksananya akuntabilitas, keberlanjutan dan transparansi, serta mitigasi potensi risiko institusi?', 5, 1),
(14, 'Peraturan (Statuta, OTK, Peratutan Akademik) telah dilaksanakan secara konsisten, efektif dan efisien?', 5, 1),
(15, 'Dosen dan Tenaga Kependidikan telah bekerja sesuai tugas dan fungsinya?', 5, 1),
(16, 'Kualitas layanan di tingkat prodi/fakultas dalam kegiatan administratif (kepangkatan/jabatan fungsional, surat ijin, dll)?', 5, 1),
(17, 'Kualitas layanan di tingkat universitas dalam kegiatan administratif (kepangkatan/jabatan fungsional, surat ijin, dll)?', 5, 1),
(18, 'Kualitas layanan di tingkat fakultas dalam penyediaan kebutuhan pembelajaran?', 5, 1),
(19, 'Kualitas layanan di tingkat universitas dalam penyediaan kebutuhan pembelajaran?', 5, 1),
(20, 'Kemampuan petugas di tingkat prodi/fakultas  dalam memberikan layanan/informasi?', 5, 1),
(21, 'Kemampuan petugas di tingkat universitas  dalam memberikan layanan/informasi?', 5, 1),
(22, 'UHO telah memiliki sistem tata pamong yang dapat menjamin terlaksananya akuntabilitas, keberlanjutan dan transparansi, serta mitigasi potensi risiko institusi?', 3, 1),
(23, 'Peraturan (Statuta, OTK, Peratutan Akademik) telah dilaksanakan secara konsisten, efektif dan efisien?', 3, 1),
(24, 'Dosen dan Tenaga Kependidikan telah bekerja sesuai tugas dan fungsinya?', 3, 1),
(25, 'Kualitas layanan di tingkat prodi/fakultas dalam kegiatan administratif (kepangkatan/jabatan fungsional, surat ijin, dll)?', 3, 1),
(26, 'Kualitas layanan di tingkat universitas dalam kegiatan administratif (kepangkatan/jabatan fungsional, surat ijin, dll)?', 3, 1),
(27, 'Kemampuan petugas di tingkat fakultas dalam memberikan layanan/informasi?', 3, 1),
(28, 'Kemampuan petugas di tingkat universitas dalam memberikan layanan/informasi?', 3, 1),
(29, 'UHO telah memiliki sistem tata pamong yang dapat menjamin terlaksananya akuntabilitas, keberlanjutan dan transparansi, serta mitigasi potensi risiko institusi?', 2, 1),
(30, 'Peraturan (Statuta, OTK, Peratutan Akademik) telah dilaksanakan secara konsisten, efektif dan efisien?', 2, 1),
(31, 'Dosen dan Tenaga Kependidikan telah bekerja sesuai tugas dan fungsinya?', 2, 1),
(32, 'Kualitas layanan di tingkat program studi/fakultas dalam pengurusan administratif (ijazah, legalisir, dan kebutuhan lainnya)?', 2, 1),
(33, 'Kualitas layanan di tingkat fakultas/universitas dalam pengelolaan alumni?', 2, 1),
(34, 'Kualitas layanan di tingkat fakultas  dalam memberikan layanan/informasi?', 2, 1),
(35, 'Kualitas layanan di tingkat universitas  dalam memberikan layanan/informasi?', 2, 1),
(36, 'Telah tercipta komunikasi yang baik antara pihak mitra UHO dengan pihak universitas?', 6, 1),
(37, 'Adanya kejelasan prosedur kerjasama  antara pihak mitra dengan pihak universitas?', 6, 1),
(38, 'Realisasi kegiatan kerja sama selama masa berlaku MOA MOU/sejenisnya?', 6, 1),
(39, 'Manfaat yang diberikan oleh pelaksanaan kegiatan terhadap pihak mitra?', 6, 1),
(40, 'Kemudahan memperoleh informasi kegiatan penalaran?', 4, 2),
(41, 'Kejelasan pembinaan kegiatan penalaran?', 4, 2),
(42, 'Kemudahan memperoleh infomasi tentang minat dan bakat?', 4, 2),
(43, 'Kejelasan pembinaan dalam minat/bakat?', 4, 2),
(44, 'Kemudahan memperoleh infomasi tentang kesejahtraan (beasiswa, bimbingan konseling, dan layanan kesehatan)?', 4, 2),
(45, 'Kejelasan prosedur dalam kesejahtraan (beasiswa, bimbingan konseling, dan layanan kesehatan)?', 4, 2),
(46, 'Kemudahan memperoleh infomasi tentang karier dan bimbingan kewirausahaan?', 4, 2),
(47, 'Kejelasan prosedur dalam karier dan bimbingan kewirausahaan?', 4, 2),
(48, 'Kejelasan kriteria seleksi beasiswa?', 4, 2),
(49, 'Ketepatan waktu pencairan beasiswa?', 4, 2),
(50, 'Kejelasan sistem rekruitmen, orientasi, dan penempatan/pembagian tugas dosen?', 5, 3),
(51, 'Kesempatan untuk mengikuti pelatihan/workshop/seminar yang dibutuhkan untuk pengembangan diri?', 5, 3),
(52, 'Jenjang karir didasarkan pada kinerja/prestasi kerja?', 5, 3),
(53, 'Sistem pembinaan dosen dalam bentuk pemberian penghargaan dan sanksi?', 5, 3),
(54, 'Kejelasan sistem rekruitmen, orientasi, dan penempatan pegawai?', 3, 3),
(55, 'Kesempatan untuk mengikuti pelatihan/workshop/seminar yang dibutuhkan untuk pengembangan diri?', 3, 3),
(56, 'Jenjang karir didasarkan pada kinerja/prestasi kerja?', 3, 3),
(57, 'Sistem pembinaan tenaga kependidikan dalam bentuk pemberian penghargaan dan sanksi?', 3, 3),
(58, 'Universitas menilai dan mengevaluasi pekerjaan yang dilakukan tenaga kependidikan secara periodik?', 3, 3),
(59, 'Universitas menanggapi kemudian menindaklanjuti kritik, saran, dan keluhan yang disampaikan?', 3, 3),
(60, 'Universitas mengevaluasi pekerjaan yang dilakukan dosen secara periodik?', 5, 3),
(61, 'Universitas menanggapi maupun menindaklanjuti kritik, saran, dan keluhan yang disampaikan?', 5, 3),
(62, 'Adanya alokasi dana  untuk kegiatan kemahasiswaan?', 4, 4),
(63, 'Ruang kuliah nyaman, bersih, rapi, dan memadai?', 4, 4),
(64, 'Ketersediaan alat/bahan  penunjang kegiatan praktikum?', 4, 4),
(65, 'Perpustakaan yang nyaman, bersih, dan memadai?', 4, 4),
(66, 'Perpustakaan menyediakan buku, jurnal, dan literatur lain yang memadai?', 4, 4),
(67, 'Tempat ibadah nyaman, bersih, dan memadai?', 4, 4),
(68, 'Ketersediaan sarana dan prasarana internet?', 4, 4),
(69, 'Taman dan ruang terbuka yang mendukung terciptanya suasana akademik yang kondusif?', 4, 4),
(70, 'Ketersediaan sarana dan prasarana olah raga?', 4, 4),
(71, 'Ketersediaan sarana dan prasarana kesehatan?', 4, 4),
(72, 'Tempat parkir yang aman dan memadai?', 4, 4),
(73, 'Toilet nyaman, bersih, dan memadai?', 4, 4),
(74, 'Alokasi biaya operasional pendidikan memadai?', 5, 4),
(75, 'Alokasi dana kegiatan penelitian dosen memadai?', 5, 4),
(76, 'Alokasi dana untuk kegiatan Pengabdian kepada Masyarakat oleh dosen memadai?', 5, 4),
(77, 'Ruang kuliah nyaman dan memadai?', 5, 4),
(78, 'Ruang dosen nyaman dan memadai?', 5, 4),
(79, 'Ketersediaan alat-alat penunjang untuk kegiatan mengajar?', 5, 4),
(80, 'Perpustakaan nyaman dan memadai?', 5, 4),
(81, 'Perpustakaan menyediakan buku, jurnal, dan literatur lain yang memadai?', 5, 4),
(82, 'Tempat ibadah nyaman dan memadai?', 5, 4),
(83, 'Akses jaringan internet memadai dan lancer?', 5, 4),
(84, 'Ketersediaan sarana dan prasarana pembelajaran daring?', 5, 4),
(85, 'Taman maupun ruang terbuka yang mendukung terciptanya suasana akademik?', 5, 4),
(86, 'Ketersediaan sarana dan prasarana olah raga?', 5, 4),
(87, 'Ketersediaan sarana dan prasarana kesehatan?', 5, 4),
(88, 'Tempat parkir yang aman dan memadai?', 5, 4),
(89, 'Toilet nyaman, bersih, dan memadai?', 5, 4),
(90, 'Kondisi sarana dan prasarana pembelajaran daring ?', 4, 5),
(91, 'Perpustakaan yang nyaman dan memadai?', 4, 5),
(92, 'Perpustakaan menyediakan buku, jurnal, dan literature lain yang memadai?', 4, 5),
(93, 'Tersedianya sarana dalam mengakses buku, jurnal dan literature serta bahan ajar berbasis internet di perpustakaan?', 4, 5),
(94, 'Ketersediaan laboratorium yang relevan dengan kebutuhan keilmuan?', 4, 5),
(95, 'Kelengkapan sarana laboratorium yang mudah diakses dan berkualitas?', 4, 5),
(96, 'Ruang kuliah aman, nyaman, dan bersih?', 4, 5),
(97, 'Kelengkapan sarana perkuliahan?', 4, 5),
(98, 'Ruang layanan administrasi akademik fakultas (Tata Usaha) nyaman?', 4, 5),
(99, 'Ruang administrasi akademik (Tata Usaha Fakultas) memiliki prosedur pelayanan akademik yang jelas?', 4, 5),
(100, 'Sistem informasi akademik universitas memberikan data administrasi yang akurat?', 4, 5),
(101, 'Jadwal kegiatan akademik diselenggarakan tepat waktu?', 4, 5),
(102, 'Tenaga kependidikan memberikan informasi yang akurat dan tepat waktu?', 4, 5),
(103, 'Dosen menyampaikan RPS dan melaksanakan kontrak perkuliahan yang telah disepakati?', 4, 5),
(104, 'Pengelola program studi/fakultas memberikan pelayanan prima kepada mahasiswa?', 4, 5),
(105, 'Sistem informasi akademik mudah diakses?', 4, 5),
(106, 'Staf perpustakaan tanggap melayani mahasiswa?', 4, 5),
(107, 'Tenaga kependidikan tanggap melayani keluhan mahasiswa?', 4, 5),
(108, 'Dosen memberikan kesempatan untuk bertanya atau berdiskusi?', 4, 5),
(109, 'Kemudahan dosen dalam melayani mahasiswa?', 4, 5),
(110, 'Dosen wali akademik tanggap menangani permasalahan akademik mahasiswa?', 4, 5),
(111, 'Pustakawan memiliki pengetahuan sesuai dengan pekerjaannya?', 4, 5),
(112, 'Tenaga kependidikan memiliki pengetahuan sesuai dengan bidang pekerjaannya?', 4, 5),
(113, 'Tenaga kependidikan bersikap ramah dan professional?', 4, 5),
(114, 'Dosen memberikan perkuliahan sesuai kontrak (minimal 14 minggu)?', 4, 5),
(115, 'Dosen transparan dalam pemberian nilai?', 4, 5),
(116, 'Dosen wali akademik memberikan solusi dalam menangani permasalahan mahasiswa?', 4, 5),
(117, 'Kurikulum sesuai dengan kompetensi lulusan?', 4, 5),
(118, 'Dosen memiliki kompetensi sesuai bidang ilmu?', 4, 5),
(119, 'Sistem informasi akademik memberikan peringatan terkait kegiatan akademik maupun kelengkapan administrasi akademik?', 4, 5),
(120, 'Pustakawan membantu mencarikan buku/ jurnal terkait?', 4, 5),
(121, 'Tenaga kependidikan memahami masalah dan kepentingan administrasi akademik mahasiswa?', 4, 5),
(122, 'Dosen memberikan perhatian kepada semua mahasiswa terkait perkuliahan?', 4, 5),
(123, 'Dosen wali akademik memantau perkembangan akademik mahasiswa?', 4, 5),
(124, 'Kemudahan dalam memperoleh informasi tentang dana penelitian?', 5, 6),
(125, 'Seleksi dana penelitian dilakukan secara transparan dan akuntabel?', 5, 6),
(126, 'Kesesuaian penelitian dengan bidang ilmu?', 5, 6),
(127, 'Keterlibatan mahasiswa dalam penelitian?', 5, 6),
(128, 'Hasil penelitian telah diintegrasikan dalam proses pembelajaran (bahan ajar/buku ajar)?', 5, 6),
(129, 'Kemudahan mendapatkan bantuan seminar luar negeri?', 5, 6),
(130, 'Kemudahan mendapatkan bantuan seminar dalam negeri?', 5, 6),
(131, 'Kemudahan dalam memanfaatkan fasilitas atau sarana prasarana fakultas/universitas untuk keperluan pelaksanaan penelitian?', 5, 6),
(132, 'Layanan yang diberikan staf/petugas di bagian kerjasama Universitas bidang penelitan?', 6, 6),
(133, 'Kompetensi SDM yang tersedia di universitas sehubungan dengan kerjasama bidang penelitian memadai?', 6, 6),
(134, 'Komunikasi yang baik antara pihak mitra dan universitas di bidang penelitian?', 6, 6),
(135, 'Kejelasan prosedur kerjasama bidang penelitian antara pihak mitra dan pihak fakultas?', 6, 6),
(136, 'Implementasi kegiatan kerja sama bidang penelitian sesuai kontrak?', 6, 6),
(137, 'Manfaat pelaksanaan kegiatan penelitian terhadap pihak mitra?', 6, 6),
(138, 'Kemudahan dalam memperoleh informasi tentang dana pengabdian kepada masyarakat?', 5, 7),
(139, 'Seleksi dana pengabdian kepada masyarakat dilakukan secara transparan dan akuntabel?', 5, 7),
(140, 'Kesesuaian pengabdian kepada masyarakat dengan bidang ilmu?', 5, 7),
(141, 'Keterlibatan mahasiswa dalam pengabdian kepada masyarakat?', 5, 7),
(142, 'Hasil pengabdian kepada masyarakat diintegrasikan dalam proses pembelajaran (bahan ajar/buku ajar)?', 5, 7),
(143, 'Kemudahan mendapatkan bantuan seminar luar negeri?', 5, 7),
(144, 'Kemudahan mendapatkan bantuan seminar dalam negeri?', 5, 7),
(145, 'Kemudahan dalam memanfaatkan fasilitas atau sarana prasarana fakultas/universitas untuk keperluan pelaksanaan pengabdian kepada masyarakat?', 5, 7),
(146, 'Layanan yang diberikan staf/petugas di bagian kerjasama Universitas bidang pengabdian kepada masyarakat?', 6, 7),
(147, 'Kompetensi SDM yang tersedia di Universitas sehubungan dengan kerjasama bidang pengabdian kepada masyarakat memadai?', 6, 7),
(148, 'Komunikasi yang baik antara pihak mitra dan pihak universitas bidang pengabdian kepada masyarakat?', 6, 7),
(149, 'Kejelasan prosedur kerjasama antara pihak mitra dan pihak fakultas di bidang pengabdian kepada masyarakat?', 6, 7),
(150, 'Implementasi kegiatan kerja sama di bidang pengabdian kepada masyarakat sesuai kontrak?', 6, 7),
(151, 'Manfaat pelaksanaan kegiatan pengabdian kepada masyarakat terhadap pihak mitra?', 6, 7);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_saran`
--

CREATE TABLE `tbl_saran` (
  `id` bigint UNSIGNED NOT NULL,
  `saran` text COLLATE utf8mb4_unicode_ci,
  `users_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `nama_lengkap` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nim` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tbl_jurusan_id` bigint UNSIGNED NOT NULL,
  `jenis_kelamin` enum('Laki - Laki','Perempuan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type` enum('admin','pengguna_lulusan','alumni','tenaga_kependidikan','mahasiswa','dosen','mitra') COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama_lengkap`, `nim`, `email`, `tbl_jurusan_id`, `jenis_kelamin`, `alamat`, `no_hp`, `user_type`, `password`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mitra', 'MITRA', 'mitra@gmail.com', 3, 'Laki - Laki', 'Kampus UHO', '0813233123', 'mitra', '$2y$10$GmHqbDeivO69E7C5gYGHUeDn9MlSnOzl34xvzGnCzeIVd2BMyAVC.', NULL, NULL, NULL, NULL),
(2, 'Tenaga Pendidik', 'TENAGAPENDIDIK', 'tendik@gmail.com', 3, 'Laki - Laki', 'Kampus UHO', '0813233123', 'tenaga_kependidikan', '$2y$10$/.XVBwJesZywf/.UoGuviOXgoUXLgcTXQPdWeV9UKv.y1bl1nQ0zi', NULL, NULL, NULL, NULL),
(3, 'Dosen', '0011078904', 'dosen@gmail.com', 3, 'Laki - Laki', 'Anduhonohu', '08154433434', 'dosen', '$2y$10$asm3AOQ4mq141w.x/Y.Qb.BkEd5ZP91A0CDcRJYXjUJ6T8iQ3tcE6', NULL, NULL, NULL, NULL),
(4, 'Lisa', 'PENGGUNALULUSAN', 'penggunalulusan@gmail.com', 3, 'Laki - Laki', 'Anduhonohu', '08154433434', 'pengguna_lulusan', '$2y$10$ziGAubbrz/SdEtSXfEg5le8f6Vl8pfa50LlBDRAEoh1VpT2pthss2', NULL, NULL, NULL, NULL),
(5, 'Dinar', 'ALUMNI', 'alumni@gmail.com', 3, 'Laki - Laki', 'Anduhonohu', '08154433434', 'alumni', '$2y$10$C1triFs6qwdlwcoWyER8r.eNJyvGMKz4n8kCVBWg4oZhu5n1GOZFq', NULL, NULL, NULL, NULL),
(6, 'Fauzan', 'E1E120067', 'fauzan@gmail.com', 3, 'Laki - Laki', 'Anduhonohu', '08154433434', 'mahasiswa', '$2y$10$4dRBufal1K5zVWwpYzv1..XbOIJcDw3aJWq1zl5esNymaP3yLjIQO', NULL, NULL, NULL, NULL),
(7, 'Admin', 'ADMIN', 'admin@gmail.com', 3, 'Laki - Laki', 'UHO', '08154433434', 'admin', '$2y$10$7vCfxXiiQT0hi4P9byEIwOU4u5JESyGeQgdVyDU.XjVfcM2RhFcL2', NULL, NULL, NULL, NULL),
(8, 'Sarman', 'Sarman', 'sarman@gmail.com', 3, 'Laki - Laki', 'Palangga', '08154433434', 'pengguna_lulusan', '$2y$10$kjbe4lONUDLJEW7ifjQIsuOcqBo42byNJm6M9mmF2g66cBYp3y1ne', NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `tbl_jawaban_user`
--
ALTER TABLE `tbl_jawaban_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tbl_jawaban_user_tbl_pertanyaan_id_foreign` (`tbl_pertanyaan_id`),
  ADD KEY `tbl_jawaban_user_users_id_foreign` (`users_id`);

--
-- Indeks untuk tabel `tbl_jurusan`
--
ALTER TABLE `tbl_jurusan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_kategori_kriteria`
--
ALTER TABLE `tbl_kategori_kriteria`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tbl_kategori_kriteria_tbl_kategori_id_foreign` (`tbl_kategori_id`),
  ADD KEY `tbl_kategori_kriteria_tbl_kriteria_id_foreign` (`tbl_kriteria_id`);

--
-- Indeks untuk tabel `tbl_kriteria`
--
ALTER TABLE `tbl_kriteria`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_pertanyaan`
--
ALTER TABLE `tbl_pertanyaan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tbl_pertanyaan_kategori_id_foreign` (`kategori_id`),
  ADD KEY `tbl_pertanyaan_kriteria_id_foreign` (`kriteria_id`);

--
-- Indeks untuk tabel `tbl_saran`
--
ALTER TABLE `tbl_saran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tbl_saran_users_id_foreign` (`users_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_nim_unique` (`nim`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_tbl_jurusan_id_foreign` (`tbl_jurusan_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_jawaban_user`
--
ALTER TABLE `tbl_jawaban_user`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_jurusan`
--
ALTER TABLE `tbl_jurusan`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tbl_kategori_kriteria`
--
ALTER TABLE `tbl_kategori_kriteria`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `tbl_kriteria`
--
ALTER TABLE `tbl_kriteria`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tbl_pertanyaan`
--
ALTER TABLE `tbl_pertanyaan`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=152;

--
-- AUTO_INCREMENT untuk tabel `tbl_saran`
--
ALTER TABLE `tbl_saran`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tbl_jawaban_user`
--
ALTER TABLE `tbl_jawaban_user`
  ADD CONSTRAINT `tbl_jawaban_user_tbl_pertanyaan_id_foreign` FOREIGN KEY (`tbl_pertanyaan_id`) REFERENCES `tbl_pertanyaan` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tbl_jawaban_user_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tbl_kategori_kriteria`
--
ALTER TABLE `tbl_kategori_kriteria`
  ADD CONSTRAINT `tbl_kategori_kriteria_tbl_kategori_id_foreign` FOREIGN KEY (`tbl_kategori_id`) REFERENCES `tbl_kategori` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tbl_kategori_kriteria_tbl_kriteria_id_foreign` FOREIGN KEY (`tbl_kriteria_id`) REFERENCES `tbl_kriteria` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tbl_pertanyaan`
--
ALTER TABLE `tbl_pertanyaan`
  ADD CONSTRAINT `tbl_pertanyaan_kategori_id_foreign` FOREIGN KEY (`kategori_id`) REFERENCES `tbl_kategori` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tbl_pertanyaan_kriteria_id_foreign` FOREIGN KEY (`kriteria_id`) REFERENCES `tbl_kriteria` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tbl_saran`
--
ALTER TABLE `tbl_saran`
  ADD CONSTRAINT `tbl_saran_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_tbl_jurusan_id_foreign` FOREIGN KEY (`tbl_jurusan_id`) REFERENCES `tbl_jurusan` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
