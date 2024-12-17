<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Ekstrakurikuler</title>

    <link rel="icon" type="image/x-icon" href="images/favicon.ico">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand me-auto" href="{{ url('homepage') }}"><img class="img-logo" src="{{asset('images/logo.png')}}"
                    alt="logo"></a>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <p class="offcanvas-title" id="offcanvasNavbarLabel"><img class="img-logo"
                            src="{{asset('images/logo.png')}}" alt="logo"> <strong>SMAK St. Augustinus Kediri</strong>
                    </p>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2 " href="{{url('homepage') }}"><strong>BERANDA</strong></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2 "href="{{url('tentangkami') }}"><strong>TENTANG KAMI</strong></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2" href="{{url('pendaftaran') }}"><strong>PENDAFTARAN</strong></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2" href="{{url('kontak') }}"><strong>KONTAK</strong></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2 active" href="{{url('pendaftaranekskul') }}"><strong>EKSTRAKURIKULER</strong></a>
                        </li>
                    </ul>
                </div>
            </div>

            <a href="{{ url('login') }}" class="login-button">Login</a>
            <button class="navbar-toggler pe-0" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active c-item">
                <img src="{{asset('images/gambar1.JPG')}}" class="d-block w-100 c-img" alt="...">
                <div class="carousel-overlay"></div>
                <div class="carousel-caption d-none d-md-block">
                    <h2>PENDAFTARAN EKSTRAKURIKULER</h2>
                    <h4>SMAK ST. AUGUSTINUS KEDIRI</h4>
                    <p>ikuti dan daftar ekstrakurikuler yang seru </p>
                    <a href="{{url('login') }}" class="btn btn-light btn-lg">Daftar</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container my-3" style="padding:10px;">
        <div class="container my-5">
        <h2 class="text-center mb-4" style="color: #009970;">Informasi Ekstrakurikuler</h2>
        </div>
        <hr class="w-100" style="border-top: 2px dashed #000; margin: 30px 0;">
        <div class="card" style="border-color: #009970;">
            <div class="card-body text-center">
                <h3>Basket</h3>
                <p>Hari : Selasa</p>
                <p>Jam : 4 Sore</p>
                <p>Guru: Pak Slamat</p>
            </div>
        </div>
        <br>
        <div class="card" style="border-color: #009970;">
            <div class="card-body text-center">
                <h3>Voli</h3>
                <p>Hari : Rabu</p>
                <p>Jam : 4 Sore</p>
                <p>Guru: Pak Tama</p>
            </div>
        </div>
        <br>
        <div class="card" style="border-color: #009970;">
            <div class="card-body text-center">
                <h3>Futsal</h3>
                <p>Hari : Jumat</p>
                <p>Jam : 4 Sore</p>
                <p>Guru: Pak joko</p>
            </div>
        </div>
        <br>
        <div class="card" style="border-color: #009970;">
            <div class="card-body text-center">
                <h3>Band</h3>
                <p>Hari : Kamis</p>
                <p>Jam : 4 Sore</p>
                <p>Guru: Bu Rani</p>
            </div>
        </div>
    </div>


    <footer
            class="text-center text-lg-start text-black fixed"
            style="background-color: #fff"
            >

    <section class="">
        <div class="container text-center text-md-start mt-5">

        <div class="row mt-4">

            <div class="col-md-4 col-lg-5 col-xl-4 mx-auto mb-4">

            <h6 class="text-uppercase fw-bold"><span> <img class="img-logo" src="{{asset('images/logo.png')}}" alt="gambar logo"> </span>SMA Katolik St. Augustinus Kediri</h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #7c4dff; height: 2px"
                />
                <p>Jl. Veteran No.3, Mojoroto, Kec. Mojoroto, Kota Kediri, Jawa Timur 64112</p>
            </div>

            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                <h6 class="text-uppercase fw-bold">Sosial Media</h6>
                <hr
                    class="mb-4 mt-0 d-inline-block mx-auto"
                    style="width: 60px; background-color: #7c4dff; height: 2px"
                    />
                <p>
                <a href="{{ url('https://www.instagram.com/smakaugustinus.kdr/')}}" class="text-black bi bi-instagram"> Instagram</a>
                </p>
                <p>
                <a href="{{ url('https://youtube.com/@smakstaugustinuskediri9465?si=X9bLYRbnxJVYqa75')}}" class="text-black bi bi-youtube"> Youtube</a>
                </p>
                <p>
                <a href="#!" class="text-black bi bi-facebook"> Facebook</a>
                </p>
            </div>

        </div>

        </div>
    </section>

    <div
        class="text-center p-3 text-white"
        style="background-color: #009970"
        >
        © 2024 Copyright: SMAK Katolik St. Augustinus Kediri
    </div>

    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>
</html>
