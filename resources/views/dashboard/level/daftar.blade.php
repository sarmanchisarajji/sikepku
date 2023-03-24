<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Halaman Daftar</title>
  </head>
  <body>

  <div class="container mt-5">

      <!-- Card Login -->
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <h5 class="card-header text-center">Halaman Daftar</h5>
          <form action="">
          <div class="card-body">
            <!-- Email -->
            <label for="email" class="form-label">Email</label>
            <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon3"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-at-fill" viewBox="0 0 16 16">
                <path d="M2 2A2 2 0 0 0 .05 3.555L8 8.414l7.95-4.859A2 2 0 0 0 14 2H2Zm-2 9.8V4.698l5.803 3.546L0 11.801Zm6.761-2.97-6.57 4.026A2 2 0 0 0 2 14h6.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.606-3.446l-.367-.225L8 9.586l-1.239-.757ZM16 9.671V4.697l-5.803 3.546.338.208A4.482 4.482 0 0 1 12.5 8c1.414 0 2.675.652 3.5 1.671Z"/>
                <path d="M15.834 12.244c0 1.168-.577 2.025-1.587 2.025-.503 0-1.002-.228-1.12-.648h-.043c-.118.416-.543.643-1.015.643-.77 0-1.259-.542-1.259-1.434v-.529c0-.844.481-1.4 1.26-1.4.585 0 .87.333.953.63h.03v-.568h.905v2.19c0 .272.18.42.411.42.315 0 .639-.415.639-1.39v-.118c0-1.277-.95-2.326-2.484-2.326h-.04c-1.582 0-2.64 1.067-2.64 2.724v.157c0 1.867 1.237 2.654 2.57 2.654h.045c.507 0 .935-.07 1.18-.18v.731c-.219.1-.643.175-1.237.175h-.044C10.438 16 9 14.82 9 12.646v-.214C9 10.36 10.421 9 12.485 9h.035c2.12 0 3.314 1.43 3.314 3.034v.21Zm-4.04.21v.227c0 .586.227.8.581.8.31 0 .564-.17.564-.743v-.367c0-.516-.275-.708-.572-.708-.346 0-.573.245-.573.791Z"/>
              </svg></span>
              <input type="text" class="form-control" id="email" name="email" required placeholder="Masukan Email" aria-describedby="basic-addon3">
            </div>
            <!-- Username -->
            <label for="username" class="form-label">Nama Lengkap</label>
            <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon3"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
              </svg></span>
              <input type="text" class="form-control" id="username" name="username" required placeholder="Masukan Nama Lengkap" aria-describedby="basic-addon3">
            </div>
            <!-- Password -->
            <label for="password" class="form-label">Password</label>
            <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon3"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-unlock-fill" viewBox="0 0 16 16">
                <path d="M11 1a2 2 0 0 0-2 2v4a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V9a2 2 0 0 1 2-2h5V3a3 3 0 0 1 6 0v4a.5.5 0 0 1-1 0V3a2 2 0 0 0-2-2z"/>
              </svg></span>
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
            <!-- Button Daftar -->
            <div class="row mb-3">
                <button type="submit" class="btn btn-primary" name="btnLogin">Daftar</button>
            </div>
            <!-- Menuju Login -->
            <div class="text-center">
                Sudah punya akun, Silahkan <a href="login.php">Login</a>
            </div>
          </div>
          </form>
        </div>

      </div>
    </div>
      

  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

 
  </body>
</html>