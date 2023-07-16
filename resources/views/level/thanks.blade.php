<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Thank You</title>
    <link rel="stylesheet" href="{{ asset('question/assets/CSS/thanks.css') }}">
    <link rel="stylesheet" href="{{ asset('question/assets/CSS/style.css') }}">
    <link rel="stylesheet" href="{{ asset('question/assets/CSS/splash.css') }}">
    <link rel="stylesheet" href="{{ asset('question/assets/js/script.js') }}">
    <script src="https://kit.fontawesome.com/d695a86071.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-dzKBJ6vZncYqa7JJ0Gd4D7kkOo2Hwldx7SKDDFymVx0GrFn3xvH62dAQiWv8j0MQlp9p4v6qezdJL/2Kce06xw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <!-- Splash Screen Section -->
    @include('level.layouts.splashscreen')
    <!-- Akhir Splash Screen Section -->
    <section>
        <div class="container">
            <div class="card text-center">
                <div class="card-body custom-card-body">
                    <div class="row">
                        <div class="col-md-12 d-flex justify-content-center align-items-center h-100 mb-3">
                            <div class="thanks">
                                <img src="{{ asset('question/assets/gif/thank.gif') }}" alt="">
                            </div>
                        </div>
                        <div class="col-md-12 d-flex justify-content-center align-items-center h-100">
                            <div class="thanks">
                                <p class="text-center">Terima kasih telah mengisi survei! Pendapat <br>Anda sangat
                                    berharga bagi kami.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 d-flex justify-content-center align-items-center h-100">
                            <div class="illus">
                                <img src="{{ asset('question/assets/svg/thankyou-illust.svg') }}" alt="">
                            </div>
                        </div>
                        <div class="col-md-12 d-flex justify-content-center align-items-center h-100">
                            <div class="illus">
                                <a href="/logout" class="btn btn-outline-dark" id="logoutBtn">
                                    <h4>Keluar dari Survei</h4>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>
