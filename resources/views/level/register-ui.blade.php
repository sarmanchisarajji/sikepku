
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('question/assets/CSS/loginstyle.css') }}">
    <title>Boostrap Login | Ludiflex</title>
</head>
<body>

    <!----------------------- Main Container -------------------------->

     <div class="container login d-flex justify-content-center align-items-center min-vh-100">

    <!----------------------- Login Container -------------------------->

       <div class="row border rounded-5 p-3 bg-white shadow box-area">
    <!-------------------- ------ Right Box ---------------------------->
    
        
    <div class="col-md-6 right-box">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('question/assets/img/brand/logo-brand2.svg') }}" alt="brand">
            <img src="{{ asset('question/assets/img/brand/logo-uho.svg') }}" alt="brand">
        </a>
        <div class="row align-items-center mt-4">
              <div class="header-text mb-4">
                   <h2>Yuk Jadi Responden SikapKu</h2>
                   <p class="mt-3">Daftarkan dirimu sekarang dan berikan pandanganmu mengenai akademik fakultas teknik UHO melalui pengisian survei ini!</p>
              </div>
              <div class="input-group mb-3">
                <input type="text" class="form-control form-control-lg bg-light fs-6" placeholder="Nama Lengkap">
              </div>
              <div class="input-group mb-3">
                <input type="text" class="form-control form-control-lg bg-light fs-6" placeholder="Username">
              </div>
              <div class="input-group mb-3">
                  <input type="email" class="form-control form-control-lg bg-light fs-6" placeholder="Alamat Email">
              </div>
              <div class="input-group mb-3">
                  <input type="password" class="form-control form-control-lg bg-light fs-6" placeholder="Password">
              </div>
              <div class="input-group mb-3">
                <select class="form-select form-control-lg bg-light fs-6" placeholder="Jurusan">
                    <option selected>Pilih Jurusan</option>
                    <option value="1">Teknik Arsitektur</option>
                    <option value="2">Teknik Elektro</option>
                    <option value="3">Teknik Informatika</option>
                    <option value="4">Teknik Mesin</option>
                    <option value="5">Teknik Sipil</option>
                  </select>
              </div>
              <div class="input-group mb-3">
                <select class="form-select form-control-lg bg-light fs-6" placeholder="Jenis Kelamin">
                    <option selected>Pilih Gender</option>
                    <option value="1">Laki-Lai</option>
                    <option value="2">Wanitas</option>
                  </select>
              </div>
              <div class="input-group mb-3">
                <select class="form-select form-control-lg bg-light fs-6" placeholder="Kategori Pengguna">
                    <option selected>Kategori Pengguna</option>
                    <option value="1">Mahasiswa</option>
                    <option value="2">Dosen</option>
                    <option value="3">Alumni</option>
                    <option value="4">Tenaga Pendidik</option>
                    <option value="5">Mitra</option>
                    <option value="6">Pengguna Lulusan</option>
                  </select>
              </div>
              <div class="input-group mb-3">
                <input type="textarea" class="form-control form-control-lg bg-light fs-6" placeholder="Alamat">
              </div>
              <div class="input-group mb-3">
                <input type="Telepon" class="form-control form-control-lg bg-light fs-6" placeholder="Telepon">
              </div>
              <div class="input-group mb-5 d-flex justify-content-between">
                  <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="formCheck">
                      <label for="formCheck" class="form-check-label text-secondary"><small>Remember Me</small></label>
                  </div>
                  <div class="forgot">
                      <small><a href="#">Forgot Password?</a></small>
                  </div>
              </div>
              <div class="input-group mb-3">
                  <button class="btn btn-lg btn-primary w-100 fs-6" style="background-color: #2E44D0;">Login</button>
              </div>
              <div class="row">
                  <small class="d-flex justify-content-center mb-5">Don't have account? <a href="#">Sign Up</a></small>
              </div>
        </div>
     </div> 

    <!--------------------------- Left Box ----------------------------->
        
       <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box" style="background: #2E44D0;">
           <div class="featured-image mb-3">
            <img src="{{ asset('question/assets/svg/signin.svg') }}" class="img-fluid" style="width: 250px;">
           </div>
            <p class="text-white fs-2" style="font-family: 'Courier New', Courier, monospace; font-weight: 600;">Gabung Sekarang</p>
            <small class="text-white text-wrap text-center" style="width: 17rem;font-family: 'Courier New', Courier, monospace;">Bergabunglah dengan komunitas survei akademik kami dan berikan kontribusi penting dalam meningkatkan pengalaman akademik untuk dirimu dan rekan-rekanmu!</small>
       </div> 

      </div>
    </div>

</body>
</html>