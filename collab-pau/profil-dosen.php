<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Halaman Profil Dosen</title>
  </head>
  <body>

    <!-- Navbar -->
    <nav class="navbar navbar-light bg-light p-3">
      <div class="container-fluid">
        <a class="navbar-brand">Sikepku Dosen</a>
      <div class="container-end">
        <a href="profil-dosen.php" class="px-3"><img src="Asset-img/dosen.svg" alt="" width="40" height="34" ></a>
        
        <button type="button" class="btn btn-outline-danger">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/>
          <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
        </svg>  
        Keluar</button>
      </div>
      </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Tombol kembali -->
    <div class="row justify-content-center mt-4">
      <div class="col-md-10">
        <a href="index-dosen.php"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
            <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
          </svg>
        </a>
      </div>
    </div>
    <!-- Akhir tombol kembali -->
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-10">
          <h1 class="display-3 text-start fw-bold mt-3">Mahmud Ahmad</h1>
          <p class="text-start">NIP: 1991001010101
          </p>
      </div>
    </div>
     <!-- Pertanyaan -->
      <div class="row justify-content-center mt-3">
        <div class="col-md-10">
          <div class="card">
            <h5 class="card-header text-center">Edit Data Profil</h5>
            <form action="">
            <div class="card-body">
              <!-- Username -->
              <label for="username" class="form-label">Nama Lengkap</label>
              <div class="input-group mb-3">
                <input type="text" class="form-control" id="username" name="username" required placeholder="Masukan Nama Lengkap" aria-describedby="basic-addon3">
              </div>
              <!-- NIP -->
              <label for="username" class="form-label">NIP</label>
              <div class="input-group mb-3">

                <input type="text" class="form-control" id="username" name="username" required placeholder="Masukan Nama Lengkap" aria-describedby="basic-addon3">
              </div>
              <!-- Alamat -->
              <label for="username" class="form-label">Alamat</label>
              <div class="input-group mb-3">

                <input type="text" class="form-control" id="username" name="username" required placeholder="Masukan Nama Lengkap" aria-describedby="basic-addon3">
              </div>
              <!-- Email -->
              <label for="email" class="form-label">Email</label>
              <div class="input-group mb-3">

                <input type="text" class="form-control" id="email" name="email" required placeholder="Masukan Email" aria-describedby="basic-addon3">
              </div>
              <!-- Pilih Gender -->
              <label for="password" class="form-label">Pilih Gender</label>
              <div class="input-group mb-5">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Pilih Gender
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Laki-laki</a></li>
                  <li><a class="dropdown-item" href="#">Perempuan</a></li>
                </ul>
              </li>
              </div>
              <!-- Status Dosen -->
              <label for="email" class="form-label">Pilih Status Dosen</label>
              <div class="input-group mb-3">

                <input type="text" class="form-control" id="email" name="email" required placeholder="Masukan Status" aria-describedby="basic-addon3">
              </div>
              <!-- Jabatan Fungsional -->
              <label for="email" class="form-label">Jabatan Fungsional</label>
              <div class="input-group mb-3">

                <input type="text" class="form-control" id="email" name="email" required placeholder="Masukan Jabatan Fungsional" aria-describedby="basic-addon3">
              </div>
              <!-- Jabatan Tugas Tambahan (jika ada) -->
              <label for="email" class="form-label">Jabatan Tugas Tambahan</label>
              <div class="input-group mb-3">

                <input type="text" class="form-control" id="email" name="email" required placeholder="Masukan Jabatan Tugas Tambahan" aria-describedby="basic-addon3">
              </div>
              <!-- Lama Bekerja di UHO  -->
              <label for="email" class="form-label">Lama Bekerja di UHO</label>
              <div class="input-group mb-3">

                <input type="text" class="form-control" id="email" name="email" required placeholder="Masukan Lama Bekerja" aria-describedby="basic-addon3">
              </div>
              <!-- Tingkat Pendidikan (sederajat)  -->
              <label for="email" class="form-label">Tingkat Pendidikan (sederajat)</label>
              <div class="input-group mb-3">

                <input type="text" class="form-control" id="email" name="email" required placeholder="Masukan Tingkat Pendidikan" aria-describedby="basic-addon3">
              </div>
              
              <!-- Password -->
              <label for="password" class="form-label">Password</label>
              <div class="input-group mb-3">

                <input type="text" class="form-control" id="password" name="password" required placeholder="Masukan Password" aria-describedby="basic-addon3">
              </div>
              <!-- Pilih status -->
              <label for="password" class="form-label">Pilih Status</label>
              <div class="input-group mb-5">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Pilih status
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Dosen</a></li>
                  <li><a class="dropdown-item" href="#">Mahasiswa</a></li>
                  <li><a class="dropdown-item" href="#">Pengguna Lulusan</a></li>
                  <li><a class="dropdown-item" href="#">Alumni</a></li>
                  <li><a class="dropdown-item" href="#">Mitra</a></li>
                  <li><a class="dropdown-item" href="#">Tendik</a></li>
                </ul>
              </li>
              </div>
              <!-- Button Simpan data yang terupdate -->
              <div class="row mb-5">
                  <button type="submit" class="btn btn-primary" name="btnLogin">Simpan Data</button>
              </div>
              <!-- Akhir Button Simpan data yang terupdate -->

              </div>
            </form>
            </div>
          </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

 
  </body>
</html>