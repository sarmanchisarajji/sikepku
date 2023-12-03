<?php

namespace Database\Seeders;

use App\Models\Pertanyaan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PertanyaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Pertanyaan::create([
        'pertanyaan' => 'Telah tercipta komunikasi yang baik antara pihak pengguna lulusan dengan pihak fakultas/universitas?',
        'kategori_id' => 1,
        'kriteria_id' => 1,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Adanya kejelasan prosedur layanan manajemen antara pihak pengguna lulusan dengan fakultas/universitas?',
        'kategori_id' => 1,
        'kriteria_id' => 1,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Kualitas layanan yang diberikan oleh staf/petugas?',
        'kategori_id' => 1,
        'kriteria_id' => 1,
       ]);

       Pertanyaan::create([
        'pertanyaan' => 'UHO telah memiliki sistem tata pamong yang dapat menjamin terlaksananya akuntabilitas, keberlanjutan dan transparansi, serta mitigasi potensi risiko institusi?',
        'kategori_id' => 4,
        'kriteria_id' => 1,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Peraturan (Statuta, OTK, Peratutan Akademik) telah dilaksanakan secara konsisten, efektif dan efisien?',
        'kategori_id' => 4,
        'kriteria_id' => 1,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Dosen dan Tenaga Kependidikan telah bekerja sesuai tugas dan fungsinya?',
        'kategori_id' => 4,
        'kriteria_id' => 1,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Kualitas pelayanan di program studi dalam pengurusan kegiatan kemahasiswaan atau kebutuhan lainnya?',
        'kategori_id' => 4,
        'kriteria_id' => 1,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Kualitas pelayanan di tingkat fakultas dalam pengurusan kegiatan kemahasiswaan atau kebutuhan lainnya?',
        'kategori_id' => 4,
        'kriteria_id' => 1,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Kualitas pelayanan di tingkat universitas dalam pengurusan kegiatan kemahasiswaan atau kebutuhan lainnya?',
        'kategori_id' => 4,
        'kriteria_id' => 1,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Sikap profesional petugas di program studi dalam melayani pengurusan kegiatan kemahasiswaan atau kebutuhan lainnya?',
        'kategori_id' => 4,
        'kriteria_id' => 1,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Sikap profesional petugas di tingkat fakultas dalam melayani pengurusan kegiatan kemahasiswaan atau kebutuhan lainnya?',
        'kategori_id' => 4,
        'kriteria_id' => 1,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Sikap profesional petugas di tingkat universitas dalam melayani pengurusan kegiatan kemahasiswaan atau kebutuhan lainnya?',
        'kategori_id' => 4,
        'kriteria_id' => 1,
       ]);

       Pertanyaan::create([
        'pertanyaan' => 'UHO telah memiliki sistem tata pamong yang dapat menjamin terlaksananya akuntabilitas, keberlanjutan dan transparansi, serta mitigasi potensi risiko institusi?',
        'kategori_id' => 5,
        'kriteria_id' => 1,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Peraturan (Statuta, OTK, Peratutan Akademik) telah dilaksanakan secara konsisten, efektif dan efisien?',
        'kategori_id' => 5,
        'kriteria_id' => 1,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Dosen dan Tenaga Kependidikan telah bekerja sesuai tugas dan fungsinya?',
        'kategori_id' => 5,
        'kriteria_id' => 1,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Kualitas layanan di tingkat prodi/fakultas dalam kegiatan administratif (kepangkatan/jabatan fungsional, surat ijin, dll)?',
        'kategori_id' => 5,
        'kriteria_id' => 1,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Kualitas layanan di tingkat universitas dalam kegiatan administratif (kepangkatan/jabatan fungsional, surat ijin, dll)?',
        'kategori_id' => 5,
        'kriteria_id' => 1,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Kualitas layanan di tingkat fakultas dalam penyediaan kebutuhan pembelajaran?',
        'kategori_id' => 5,
        'kriteria_id' => 1,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Kualitas layanan di tingkat universitas dalam penyediaan kebutuhan pembelajaran?',
        'kategori_id' => 5,
        'kriteria_id' => 1,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Kemampuan petugas di tingkat prodi/fakultas  dalam memberikan layanan/informasi?',
        'kategori_id' => 5,
        'kriteria_id' => 1,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Kemampuan petugas di tingkat universitas  dalam memberikan layanan/informasi?',
        'kategori_id' => 5,
        'kriteria_id' => 1,
       ]);

       Pertanyaan::create([
        'pertanyaan' => 'UHO telah memiliki sistem tata pamong yang dapat menjamin terlaksananya akuntabilitas, keberlanjutan dan transparansi, serta mitigasi potensi risiko institusi?',
        'kategori_id' => 3,
        'kriteria_id' => 1,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Peraturan (Statuta, OTK, Peratutan Akademik) telah dilaksanakan secara konsisten, efektif dan efisien?',
        'kategori_id' => 3,
        'kriteria_id' => 1,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Dosen dan Tenaga Kependidikan telah bekerja sesuai tugas dan fungsinya?',
        'kategori_id' => 3,
        'kriteria_id' => 1,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Kualitas layanan di tingkat prodi/fakultas dalam kegiatan administratif (kepangkatan/jabatan fungsional, surat ijin, dll)?',
        'kategori_id' => 3,
        'kriteria_id' => 1,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Kualitas layanan di tingkat universitas dalam kegiatan administratif (kepangkatan/jabatan fungsional, surat ijin, dll)?',
        'kategori_id' => 3,
        'kriteria_id' => 1,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Kemampuan petugas di tingkat fakultas dalam memberikan layanan/informasi?',
        'kategori_id' => 3,
        'kriteria_id' => 1,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Kemampuan petugas di tingkat universitas dalam memberikan layanan/informasi?',
        'kategori_id' => 3,
        'kriteria_id' => 1,
       ]);

       Pertanyaan::create([
        'pertanyaan' => 'UHO telah memiliki sistem tata pamong yang dapat menjamin terlaksananya akuntabilitas, keberlanjutan dan transparansi, serta mitigasi potensi risiko institusi?',
        'kategori_id' => 2,
        'kriteria_id' => 1,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Peraturan (Statuta, OTK, Peratutan Akademik) telah dilaksanakan secara konsisten, efektif dan efisien?',
        'kategori_id' => 2,
        'kriteria_id' => 1,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Dosen dan Tenaga Kependidikan telah bekerja sesuai tugas dan fungsinya?',
        'kategori_id' => 2,
        'kriteria_id' => 1,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Kualitas layanan di tingkat program studi/fakultas dalam pengurusan administratif (ijazah, legalisir, dan kebutuhan lainnya)?',
        'kategori_id' => 2,
        'kriteria_id' => 1,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Kualitas layanan di tingkat fakultas/universitas dalam pengelolaan alumni?',
        'kategori_id' => 2,
        'kriteria_id' => 1,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Kualitas layanan di tingkat fakultas  dalam memberikan layanan/informasi?',
        'kategori_id' => 2,
        'kriteria_id' => 1,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Kualitas layanan di tingkat universitas  dalam memberikan layanan/informasi?',
        'kategori_id' => 2,
        'kriteria_id' => 1,
       ]);

       Pertanyaan::create([
        'pertanyaan' => 'Telah tercipta komunikasi yang baik antara pihak mitra UHO dengan pihak universitas?',
        'kategori_id' => 6,
        'kriteria_id' => 1,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Adanya kejelasan prosedur kerjasama  antara pihak mitra dengan pihak universitas?',
        'kategori_id' => 6,
        'kriteria_id' => 1,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Realisasi kegiatan kerja sama selama masa berlaku MOA MOU/sejenisnya?',
        'kategori_id' => 6,
        'kriteria_id' => 1,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Manfaat yang diberikan oleh pelaksanaan kegiatan terhadap pihak mitra?',
        'kategori_id' => 6,
        'kriteria_id' => 1,
       ]);

       Pertanyaan::create([
        'pertanyaan' => 'Kemudahan memperoleh informasi kegiatan penalaran?',
        'kategori_id' => 4,
        'kriteria_id' => 2,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Kejelasan pembinaan kegiatan penalaran?',
        'kategori_id' => 4,
        'kriteria_id' => 2,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Kemudahan memperoleh infomasi tentang minat dan bakat?',
        'kategori_id' => 4,
        'kriteria_id' => 2,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Kejelasan pembinaan dalam minat/bakat?',
        'kategori_id' => 4,
        'kriteria_id' => 2,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Kemudahan memperoleh infomasi tentang kesejahtraan (beasiswa, bimbingan konseling, dan layanan kesehatan)?',
        'kategori_id' => 4,
        'kriteria_id' => 2,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Kejelasan prosedur dalam kesejahtraan (beasiswa, bimbingan konseling, dan layanan kesehatan)?',
        'kategori_id' => 4,
        'kriteria_id' => 2,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Kemudahan memperoleh infomasi tentang karier dan bimbingan kewirausahaan?',
        'kategori_id' => 4,
        'kriteria_id' => 2,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Kejelasan prosedur dalam karier dan bimbingan kewirausahaan?',
        'kategori_id' => 4,
        'kriteria_id' => 2,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Kejelasan kriteria seleksi beasiswa?',
        'kategori_id' => 4,
        'kriteria_id' => 2,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Ketepatan waktu pencairan beasiswa?',
        'kategori_id' => 4,
        'kriteria_id' => 2,
       ]);

       Pertanyaan::create([
        'pertanyaan' => 'Kejelasan sistem rekruitmen, orientasi, dan penempatan/pembagian tugas dosen?',
        'kategori_id' => 5,
        'kriteria_id' => 3,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Kesempatan untuk mengikuti pelatihan/workshop/seminar yang dibutuhkan untuk pengembangan diri?',
        'kategori_id' => 5,
        'kriteria_id' => 3,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Jenjang karir didasarkan pada kinerja/prestasi kerja?',
        'kategori_id' => 5,
        'kriteria_id' => 3,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Sistem pembinaan dosen dalam bentuk pemberian penghargaan dan sanksi?',
        'kategori_id' => 5,
        'kriteria_id' => 3,
       ]);

       Pertanyaan::create([
        'pertanyaan' => 'Kejelasan sistem rekruitmen, orientasi, dan penempatan pegawai?',
        'kategori_id' => 3,
        'kriteria_id' => 3,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Kesempatan untuk mengikuti pelatihan/workshop/seminar yang dibutuhkan untuk pengembangan diri?',
        'kategori_id' => 3,
        'kriteria_id' => 3,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Jenjang karir didasarkan pada kinerja/prestasi kerja?',
        'kategori_id' => 3,
        'kriteria_id' => 3,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Sistem pembinaan tenaga kependidikan dalam bentuk pemberian penghargaan dan sanksi?',
        'kategori_id' => 3,
        'kriteria_id' => 3,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Universitas menilai dan mengevaluasi pekerjaan yang dilakukan tenaga kependidikan secara periodik?',
        'kategori_id' => 3,
        'kriteria_id' => 3,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Universitas menanggapi kemudian menindaklanjuti kritik, saran, dan keluhan yang disampaikan?',
        'kategori_id' => 3,
        'kriteria_id' => 3,
       ]);

       Pertanyaan::create([
        'pertanyaan' => 'Universitas mengevaluasi pekerjaan yang dilakukan dosen secara periodik?',
        'kategori_id' => 5,
        'kriteria_id' => 3,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Universitas menanggapi maupun menindaklanjuti kritik, saran, dan keluhan yang disampaikan?',
        'kategori_id' => 5,
        'kriteria_id' => 3,
       ]);


       Pertanyaan::create([
        'pertanyaan' => 'Adanya alokasi dana  untuk kegiatan kemahasiswaan?',
        'kategori_id' => 4,
        'kriteria_id' => 4,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Ruang kuliah nyaman, bersih, rapi, dan memadai?',
        'kategori_id' => 4,
        'kriteria_id' => 4,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Ketersediaan alat/bahan  penunjang kegiatan praktikum?',
        'kategori_id' => 4,
        'kriteria_id' => 4,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Perpustakaan yang nyaman, bersih, dan memadai?',
        'kategori_id' => 4,
        'kriteria_id' => 4,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Perpustakaan menyediakan buku, jurnal, dan literatur lain yang memadai?',
        'kategori_id' => 4,
        'kriteria_id' => 4,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Tempat ibadah nyaman, bersih, dan memadai?',
        'kategori_id' => 4,
        'kriteria_id' => 4,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Ketersediaan sarana dan prasarana internet?',
        'kategori_id' => 4,
        'kriteria_id' => 4,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Taman dan ruang terbuka yang mendukung terciptanya suasana akademik yang kondusif?',
        'kategori_id' => 4,
        'kriteria_id' => 4,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Ketersediaan sarana dan prasarana olah raga?',
        'kategori_id' => 4,
        'kriteria_id' => 4,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Ketersediaan sarana dan prasarana kesehatan?',
        'kategori_id' => 4,
        'kriteria_id' => 4,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Tempat parkir yang aman dan memadai?',
        'kategori_id' => 4,
        'kriteria_id' => 4,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Toilet nyaman, bersih, dan memadai?',
        'kategori_id' => 4,
        'kriteria_id' => 4,
       ]);

       Pertanyaan::create([
        'pertanyaan' => 'Alokasi biaya operasional pendidikan memadai?',
        'kategori_id' => 5,
        'kriteria_id' => 4,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Alokasi dana kegiatan penelitian dosen memadai?',
        'kategori_id' => 5,
        'kriteria_id' => 4,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Alokasi dana untuk kegiatan Pengabdian kepada Masyarakat oleh dosen memadai?',
        'kategori_id' => 5,
        'kriteria_id' => 4,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Ruang kuliah nyaman dan memadai?',
        'kategori_id' => 5,
        'kriteria_id' => 4,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Ruang dosen nyaman dan memadai?',
        'kategori_id' => 5,
        'kriteria_id' => 4,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Ketersediaan alat-alat penunjang untuk kegiatan mengajar?',
        'kategori_id' => 5,
        'kriteria_id' => 4,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Perpustakaan nyaman dan memadai?',
        'kategori_id' => 5,
        'kriteria_id' => 4,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Perpustakaan menyediakan buku, jurnal, dan literatur lain yang memadai?',
        'kategori_id' => 5,
        'kriteria_id' => 4,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Tempat ibadah nyaman dan memadai?',
        'kategori_id' => 5,
        'kriteria_id' => 4,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Akses jaringan internet memadai dan lancer?',
        'kategori_id' => 5,
        'kriteria_id' => 4,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Ketersediaan sarana dan prasarana pembelajaran daring?',
        'kategori_id' => 5,
        'kriteria_id' => 4,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Taman maupun ruang terbuka yang mendukung terciptanya suasana akademik?',
        'kategori_id' => 5,
        'kriteria_id' => 4,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Ketersediaan sarana dan prasarana olah raga?',
        'kategori_id' => 5,
        'kriteria_id' => 4,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Ketersediaan sarana dan prasarana kesehatan?',
        'kategori_id' => 5,
        'kriteria_id' => 4,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Tempat parkir yang aman dan memadai?',
        'kategori_id' => 5,
        'kriteria_id' => 4,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Toilet nyaman, bersih, dan memadai?',
        'kategori_id' => 5,
        'kriteria_id' => 4,
       ]);

       Pertanyaan::create([
        'pertanyaan' => 'Kondisi sarana dan prasarana pembelajaran daring ?',
        'kategori_id' => 4,
        'kriteria_id' => 5,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Perpustakaan yang nyaman dan memadai?',
        'kategori_id' => 4,
        'kriteria_id' => 5,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Perpustakaan menyediakan buku, jurnal, dan literature lain yang memadai?',
        'kategori_id' => 4,
        'kriteria_id' => 5,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Tersedianya sarana dalam mengakses buku, jurnal dan literature serta bahan ajar berbasis internet di perpustakaan?',
        'kategori_id' => 4,
        'kriteria_id' => 5,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Ketersediaan laboratorium yang relevan dengan kebutuhan keilmuan?',
        'kategori_id' => 4,
        'kriteria_id' => 5,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Kelengkapan sarana laboratorium yang mudah diakses dan berkualitas?',
        'kategori_id' => 4,
        'kriteria_id' => 5,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Ruang kuliah aman, nyaman, dan bersih?',
        'kategori_id' => 4,
        'kriteria_id' => 5,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Kelengkapan sarana perkuliahan?',
        'kategori_id' => 4,
        'kriteria_id' => 5,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Ruang layanan administrasi akademik fakultas (Tata Usaha) nyaman?',
        'kategori_id' => 4,
        'kriteria_id' => 5,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Ruang administrasi akademik (Tata Usaha Fakultas) memiliki prosedur pelayanan akademik yang jelas?',
        'kategori_id' => 4,
        'kriteria_id' => 5,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Sistem informasi akademik universitas memberikan data administrasi yang akurat?',
        'kategori_id' => 4,
        'kriteria_id' => 5,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Jadwal kegiatan akademik diselenggarakan tepat waktu?',
        'kategori_id' => 4,
        'kriteria_id' => 5,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Tenaga kependidikan memberikan informasi yang akurat dan tepat waktu?',
        'kategori_id' => 4,
        'kriteria_id' => 5,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Dosen menyampaikan RPS dan melaksanakan kontrak perkuliahan yang telah disepakati?',
        'kategori_id' => 4,
        'kriteria_id' => 5,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Pengelola program studi/fakultas memberikan pelayanan prima kepada mahasiswa?',
        'kategori_id' => 4,
        'kriteria_id' => 5,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Sistem informasi akademik mudah diakses?',
        'kategori_id' => 4,
        'kriteria_id' => 5,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Staf perpustakaan tanggap melayani mahasiswa?',
        'kategori_id' => 4,
        'kriteria_id' => 5,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Tenaga kependidikan tanggap melayani keluhan mahasiswa?',
        'kategori_id' => 4,
        'kriteria_id' => 5,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Dosen memberikan kesempatan untuk bertanya atau berdiskusi?',
        'kategori_id' => 4,
        'kriteria_id' => 5,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Kemudahan dosen dalam melayani mahasiswa?',
        'kategori_id' => 4,
        'kriteria_id' => 5,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Dosen wali akademik tanggap menangani permasalahan akademik mahasiswa?',
        'kategori_id' => 4,
        'kriteria_id' => 5,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Pustakawan memiliki pengetahuan sesuai dengan pekerjaannya?',
        'kategori_id' => 4,
        'kriteria_id' => 5,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Tenaga kependidikan memiliki pengetahuan sesuai dengan bidang pekerjaannya?',
        'kategori_id' => 4,
        'kriteria_id' => 5,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Tenaga kependidikan bersikap ramah dan professional?',
        'kategori_id' => 4,
        'kriteria_id' => 5,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Dosen memberikan perkuliahan sesuai kontrak (minimal 14 minggu)?',
        'kategori_id' => 4,
        'kriteria_id' => 5,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Dosen transparan dalam pemberian nilai?',
        'kategori_id' => 4,
        'kriteria_id' => 5,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Dosen wali akademik memberikan solusi dalam menangani permasalahan mahasiswa?',
        'kategori_id' => 4,
        'kriteria_id' => 5,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Kurikulum sesuai dengan kompetensi lulusan?',
        'kategori_id' => 4,
        'kriteria_id' => 5,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Dosen memiliki kompetensi sesuai bidang ilmu?',
        'kategori_id' => 4,
        'kriteria_id' => 5,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Sistem informasi akademik memberikan peringatan terkait kegiatan akademik maupun kelengkapan administrasi akademik?',
        'kategori_id' => 4,
        'kriteria_id' => 5,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Pustakawan membantu mencarikan buku/ jurnal terkait?',
        'kategori_id' => 4,
        'kriteria_id' => 5,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Tenaga kependidikan memahami masalah dan kepentingan administrasi akademik mahasiswa?',
        'kategori_id' => 4,
        'kriteria_id' => 5,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Dosen memberikan perhatian kepada semua mahasiswa terkait perkuliahan?',
        'kategori_id' => 4,
        'kriteria_id' => 5,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Dosen wali akademik memantau perkembangan akademik mahasiswa?',
        'kategori_id' => 4,
        'kriteria_id' => 5,
       ]);

       Pertanyaan::create([
        'pertanyaan' => 'Kemudahan dalam memperoleh informasi tentang dana penelitian?',
        'kategori_id' => 5,
        'kriteria_id' => 6,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Seleksi dana penelitian dilakukan secara transparan dan akuntabel?',
        'kategori_id' => 5,
        'kriteria_id' => 6,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Kesesuaian penelitian dengan bidang ilmu?',
        'kategori_id' => 5,
        'kriteria_id' => 6,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Keterlibatan mahasiswa dalam penelitian?',
        'kategori_id' => 5,
        'kriteria_id' => 6,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Hasil penelitian telah diintegrasikan dalam proses pembelajaran (bahan ajar/buku ajar)?',
        'kategori_id' => 5,
        'kriteria_id' => 6,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Kemudahan mendapatkan bantuan seminar luar negeri?',
        'kategori_id' => 5,
        'kriteria_id' => 6,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Kemudahan mendapatkan bantuan seminar dalam negeri?',
        'kategori_id' => 5,
        'kriteria_id' => 6,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Kemudahan dalam memanfaatkan fasilitas atau sarana prasarana fakultas/universitas untuk keperluan pelaksanaan penelitian?',
        'kategori_id' => 5,
        'kriteria_id' => 6,
       ]);

       Pertanyaan::create([
        'pertanyaan' => 'Layanan yang diberikan staf/petugas di bagian kerjasama Universitas bidang penelitan?',
        'kategori_id' => 6,
        'kriteria_id' => 6,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Kompetensi SDM yang tersedia di universitas sehubungan dengan kerjasama bidang penelitian memadai?',
        'kategori_id' => 6,
        'kriteria_id' => 6,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Komunikasi yang baik antara pihak mitra dan universitas di bidang penelitian?',
        'kategori_id' => 6,
        'kriteria_id' => 6,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Kejelasan prosedur kerjasama bidang penelitian antara pihak mitra dan pihak fakultas?',
        'kategori_id' => 6,
        'kriteria_id' => 6,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Implementasi kegiatan kerja sama bidang penelitian sesuai kontrak?',
        'kategori_id' => 6,
        'kriteria_id' => 6,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Manfaat pelaksanaan kegiatan penelitian terhadap pihak mitra?',
        'kategori_id' => 6,
        'kriteria_id' => 6,
       ]);

       Pertanyaan::create([
        'pertanyaan' => 'Kemudahan dalam memperoleh informasi tentang dana pengabdian kepada masyarakat?',
        'kategori_id' => 5,
        'kriteria_id' => 7,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Seleksi dana pengabdian kepada masyarakat dilakukan secara transparan dan akuntabel?',
        'kategori_id' => 5,
        'kriteria_id' => 7,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Kesesuaian pengabdian kepada masyarakat dengan bidang ilmu?',
        'kategori_id' => 5,
        'kriteria_id' => 7,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Keterlibatan mahasiswa dalam pengabdian kepada masyarakat?',
        'kategori_id' => 5,
        'kriteria_id' => 7,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Hasil pengabdian kepada masyarakat diintegrasikan dalam proses pembelajaran (bahan ajar/buku ajar)?',
        'kategori_id' => 5,
        'kriteria_id' => 7,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Kemudahan mendapatkan bantuan seminar luar negeri?',
        'kategori_id' => 5,
        'kriteria_id' => 7,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Kemudahan mendapatkan bantuan seminar dalam negeri?',
        'kategori_id' => 5,
        'kriteria_id' => 7,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Kemudahan dalam memanfaatkan fasilitas atau sarana prasarana fakultas/universitas untuk keperluan pelaksanaan pengabdian kepada masyarakat?',
        'kategori_id' => 5,
        'kriteria_id' => 7,
       ]);

       Pertanyaan::create([
        'pertanyaan' => 'Layanan yang diberikan staf/petugas di bagian kerjasama Universitas bidang pengabdian kepada masyarakat?',
        'kategori_id' => 6,
        'kriteria_id' => 7,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Kompetensi SDM yang tersedia di Universitas sehubungan dengan kerjasama bidang pengabdian kepada masyarakat memadai?',
        'kategori_id' => 6,
        'kriteria_id' => 7,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Komunikasi yang baik antara pihak mitra dan pihak universitas bidang pengabdian kepada masyarakat?',
        'kategori_id' => 6,
        'kriteria_id' => 7,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Kejelasan prosedur kerjasama antara pihak mitra dan pihak fakultas di bidang pengabdian kepada masyarakat?',
        'kategori_id' => 6,
        'kriteria_id' => 7,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Implementasi kegiatan kerja sama di bidang pengabdian kepada masyarakat sesuai kontrak?',
        'kategori_id' => 6,
        'kriteria_id' => 7,
       ]);
       Pertanyaan::create([
        'pertanyaan' => 'Manfaat pelaksanaan kegiatan pengabdian kepada masyarakat terhadap pihak mitra?',
        'kategori_id' => 6,
        'kriteria_id' => 7,
       ]);
    }
}
