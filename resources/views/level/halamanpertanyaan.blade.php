<!doctype html>
<html 
lang="en"
class="light-style layout-menu-fixed"
dir="ltr"
data-theme="theme-default"
data-assets-path="{{asset('question/assets/')}}"
data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UI-Question</title>
    <link rel="stylesheet" href="{{ asset('question/assets/img/brand/logo-putih.svg') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('question/assets/CSS/style.css') }}">
    <link rel="stylesheet" href="{{ asset('question/assets/js/script.js') }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://kit.fontawesome.com/d695a86071.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-dzKBJ6vZncYqa7JJ0Gd4D7kkOo2Hwldx7SKDDFymVx0GrFn3xvH62dAQiWv8j0MQlp9p4v6qezdJL/2Kce06xw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  </head>
  <body>
    <!-- Navbar Section -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="#">
            <img src="{{ asset('question/assets/img/brand/logo.svg') }}" alt="brand">
            <img src="{{ asset('question/assets/img/brand/logo-uho.svg') }}" alt="brand">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <!-- Profile -->
            <div class="action">
              <div class="profile" onclick="menuToggle();">
                <img src="{{ asset('question/assets/img/user.png') }}">
              </div>
              <div class="menu">
                <!-- Ubah saja h3 dengan hubungkan kedatabase user, kalau span bisa di tapi peruser -->
                <h3>Nurfauziah Makmur<br><span>Mahasiswa</span></h3>
                <ul>
                  <li><img src="{{ asset('question/assets/img/logout.png') }}"><a href="#">Logout</a></li>
                </ul>
              </div>
            </div>
            <!-- Akhir Profile -->
          </div>
        </div>
      </nav>
    <!-- Hero Section -->
    <section class="hero">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="text">
              Suara Anda penting! Sampaikan umpan balik melalui survei kami
            </div>
            <div class="text-p">
              Partisipasimu dalam survei kepuasan pengguna akademik sangat berarti bagi kami. Bersama-sama, kita dapat meningkatkan pengalaman akademik yang lebih baik lagi.
            </div>
            <div class="buttons">
              <a href="#keterangan" class="btn btn-putih">Cek Informasi</a>
              <a href="#survei" class="btn btn-outline-secondary-primary ms-3">Mulai Survei</a>
            </div>
          </div>
          <div class="col-md-6">
            <img src="{{ asset('question/assets/img/illus-banner.png') }}" alt="hero-img" class="w-100">
          </div>
        </div>
      </div>
    </section>
    <!-- Setup Section -->
    <section class="setup"  id="keterangan">
      <div class="container">
        <div class="text-header text-center">
          <h3>Keterangan</h3>
          <p>Survei kepuasan pengguna akademik merupakan kesempatan berharga bagi kami untuk menghargai <br> suaramu. Ajukan pendapatmu dan bersama-sama kita tingkatkan pelayanan yang lebih baik.</p>
        </div>
        <div class="items text-center">
          <div class="row">
            <!-- item 1 -->
            <div class="col-md-4">
              <div class="card">
                <div class="card-body">
                  <div class="icons">
                    <img src="{{ asset('question/assets/svg/meter1.svg') }}" alt="icons">
                  </div>
                  <div class="desc">
                    <h5>Tujuan SikapKu</h5>
                    <p>Mengumpulkan informasi tentang mutu layanan dan perbaikan yang dibutuhkan.</p>
                  </div>
                </div>
              </div>
            </div>
            <!-- item 2 -->
            <div class="col-md-4">
              <div class="card">
                <div class="card-body">
                  <div class="icons">
                    <img src="{{ asset('question/assets/svg/meter2.svg') }}" alt="icons">
                  </div>
                  <div class="desc">
                    <h5>Cakupan Responden</h5>
                    <p>Libatkan Mahasiswa, Dosen, Tendik, Alumni, Pengguna Lulusan, dan Mitra.</p>
                  </div>
                </div>
              </div>
            </div>
            <!-- item 3 -->
            <div class="col-md-4">
              <div class="card">
                <div class="card-body">
                  <div class="icons">
                    <img src="{{ asset('question/assets/svg/meter3.svg') }}" alt="icons">
                  </div>
                  <div class="desc">
                    <h5>Harapan Kami</h5>
                    <p>Kami berharap kontribusi Anda dapat meningkatkan kualitas layanan kami.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <a href="#survei" class="btn btn-outline-secondary-white ms-3">Mulai Survei</a>
        </div>
      </div>
    </section>
    <!-- Questions Section -->
    <section class="question"  id="survei">
      <div class="container p-5">
        <div class="text-header text-center">
          <h3>Selamat Mengerjakan Survei Kami!</h3>
          <p>Kami sangat mengapresiasi kerja kerasmu! Nikmati setiap momen luar biasa dalam menjawab survei ini dengan <br> penuh semangat, kegembiraan, dan antusiasme yang membara!</p>
        </div>
        <!-- Questions Radio Button -->
        <div class="items text-center">
          <div class="row">
            <div class="card">
              <div class="card-body">
                <div class="pertanyaan mt-3">
                  <div class="perfect-circle"><h4>1</h4></div>
                  <h4 class="tanyaku">Kemudahan komunikasi antara pihak Mitra dengan unit kerja dan/atau bagian kerja sama UHO</h4>
                </div>
                <div class="card choice">
                  <div class="card-body">
                    <div class="row d-flex justify-content-center">                                            
                      <!-- item 1 card -->
                      <div class="col-md-3 custom-width-s">
                        <div class="card pilih" id="card-1">
                          <div class="card-body">
                            <div class="icons">
                              <img src="{{ asset('question/assets/svg/e-sangat-tidak-puas.svg') }}" alt="icons">
                            </div>
                            <div class="desc">
                              <h5>Sangat Tidak Puas</h5>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- item 2 card -->
                      <div class="col-md-3 custom-width">
                        <div class="card" id="card-2">
                          <div class="card-body">
                            <div class="icons">
                              <img src="{{ asset('question/assets/svg/e-tidak-puas.svg') }}" alt="icons">
                            </div>
                            <div class="desc">
                              <h5>Tidak Puas</h5>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- item 3 card -->
                      <div class="col-md-3 custom-width">
                        <div class="card" id="card-3">
                          <div class="card-body">
                            <div class="icons">
                              <img src="{{ asset('question/assets/svg/e-cukup.svg') }}" alt="icons">
                            </div>
                            <div class="desc">
                              <h5>Cukup</h5>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- item 4 card -->
                      <div class="col-md-3 custom-width">
                        <div class="card" id="card-4">
                          <div class="card-body">
                            <div class="icons">
                              <img src="{{ asset('question/assets/svg/e-puas.svg') }}" alt="icons">
                            </div>
                            <div class="desc">
                              <h5>Puas</h5>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- item 5 card -->
                      <div class="col-md-3 custom-width">
                        <div class="card" id="card-5">
                          <div class="card-body">
                            <div class="icons">
                              <img src="{{ asset('question/assets/svg/e-sangat-puas.svg') }}" alt="icons">
                            </div>
                            <div class="desc">
                              <h5>Sangat Puas</h5>
                            </div>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


        <!-- Questions Saran -->
          <div class="items text-center">
            <div class="row">
              <div class="card">
                <div class="card-body">
                  <div class="pertanyaan mt-3">
                    <div class="perfect-circle"><h4>2</h4></div>
                    <h4 class="tanyaku">Kemudahan komunikasi antara pihak Mitra dengan unit kerja dan/atau bagian kerja sama UHO</h4>
                  </div>
                  <textarea class="card-saran form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Silahkan saran anda.."></textarea>
                </div>
              </div>
            </div>
          </div>
            <div class="button d-flex justify-content-center">
              <button class="btn btn-outline-secondary-hijau ms-3 justify-content-center">Submit Sekarang</button>
            </div>
      </div>
    </section>
    
    <!-- Footer Section -->
    <footer>
      <div class="container footer-b">
        <div class="row">
          <div class="col-md-12">
            <div class="footer-brand d-flex justify-content-center">
              <img src="{{ asset('question/assets/img/brand/logo-brand.svg') }}" alt="logo-brand">
            </div>
            <div class="social-media d-flex justify-content-center">
              <div class="wrapper">
                <!-- facebook -->
                <div class="icon facebook">
                  <div class="tooltip">Facebook</div>
                  <span><i class="fab fa-facebook-f"></i></span>
                </div>
                <!-- Akhir facebook -->
                <!-- Intagram -->
                <div class="icon instagram">
                  <div class="tooltip">Instagram</div>
                  <span><i class="fab fa-instagram"></i></span>
                </div>
                <!-- Akhir Intagram -->
                <!-- Youtube -->
                <div class="icon youtube">
                  <div class="tooltip">Youtube</div>
                  <span><i class="fab fa-youtube"></i></span>
                </div>
                <!-- Akhir Youtube -->
                
              </div>
            </div>
            <div class="copy d-flex justify-content-center mb-5">
              &copy;Teknik Informatika Universitas Halu Oleo 2023. All Rights Reserved
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- Javascript -->
    <script>
      function menuToggle() {
        const toggleMenu = document.querySelector('.menu');
        toggleMenu.classList.toggle('active')
      }
    </script>
    <script src="{{ asset('question/assets/js/script.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>