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
            <!-- Username -->
            <label for="username" class="form-label">Username</label>
            <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon3"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
              </svg></span>
              <input type="text" class="form-control" id="username" name="username" required placeholder="Masukan Username" aria-describedby="basic-addon3">
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