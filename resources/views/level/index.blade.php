<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="{{ asset('') }}question/assets/img/favicon.ico" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    @php
        $userType = Auth::user()->user_type;
        
        $usertype = str_replace('_', ' ', $userType);
        
        $nama_lengkap = ucfirst(Auth::user()->nama_lengkap);
    @endphp

    <title>Halaman {{ ucwords($usertype) }}</title>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-light bg-light p-3">
        <div class="container-fluid">
            <a class="navbar-brand">Sikepku {{ ucwords($usertype) }} |
                {{ $nama_lengkap }}</a>
            <div class="container-end">
                <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="btn btn-danger">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z">
                            </path>
                            <path fill-rule="evenodd"
                                d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z">
                            </path>
                        </svg>
                        Keluar
                    </button>
                </form>
            </div>
        </div>
    </nav>
    <!-- Akhir Navbar -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h1 class="display-5 text-center mt-5">Selamat Datang di Survei Kepuasan {{ ucwords($usertype) }}</h1>
                <p class="text-center">Silahkan mengisi Survei Kepuasan secara akurat agar pengelolaan tersebut bisa
                    mengukur keberhasilan layanan <br> <span class="fw-bold">Kepuasan Pengguna Fakultas Teknik.</span>
                </p>
            </div>
            {{-- <div class="text-center">
                <a href="/profile/{{ $userType }}-{{ $nama_lengkap }}" class="btn btn-primary">Lihat Profil</a>
            </div> --}}
        </div>

        <!-- Pertanyaan -->
        <div class="container mt-3">
            <div class="row justify-content-center">
                <div class="col-md-9">
                    <p class="fs-1 fw-bold">Pertanyaan</p>
                    <!-- Baris Pertanyaan -->
                    @yield('main-content')
                    <!-- Akhir Baris Pertanyaan -->
                </div>
                {{-- <div class="row justify-content-center mb-5 col-sm-5">
                    <button type="submit" class="btn btn-primary" name="btnSubmit">Submit</button>
                </div> --}}
            </div>
        </div>
        <!-- Akhir Pertanyaan -->
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>


</body>

</html>
