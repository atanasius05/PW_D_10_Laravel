<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak</title>

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
                            <a class="nav-link mx-lg-2 " href="{{url('tentangkami') }}"><strong>TENTANG KAMI</strong></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2" href="{{url('pendaftaran') }}"><strong>PENDAFTARAN</strong></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2 active" aria-current="page" href="{{url('kontak') }}"><strong>KONTAK</strong></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2" href="{{url('pendaftaranekskul') }}"><strong>EKSTRAKURIKULER</strong></a>
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

    <div>
        <div class="pt-10 pb-21" style="background-color:#009970;"></div>
        <div class="container mt-n22 px-6">
            <div class="row mb-3">
                <div class="col-lg-10" style="padding-top:-40px;">
                    <h2 style="color:#fff;">Kontak</h2>
                </div>
            </div>
            <div class="row text-center g-4">
                <div class="col">
                    <div class="card h-100 border-1 text-center" style="background-color: #fff; border-color:#000;">
                        <div class="card-body">
                            <i class="bi bi-clock display-4 mb-3" style="color: #000;"></i>
                            <h4 class="card-title text-black">Jam Kerja</h4>
                            <h6>Senin - jumat</h6>
                            <h6>8 Pagi - 3 Sore</h6>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 border-1 text-center" style="background-color: #fff; border-color:#000;">
                        <div class="card-body">
                            <i class="bi bi-map display-4 mb-3" style="color: #000;"></i>
                            <h4 class="card-title text-black">Lokasi</h4>
                            <h6>Jl. Veteran No.3, Mojoroto, Kec. Mojoroto, Kota Kediri, Jawa Timur 64112</h6>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 border-1 text-center" style="background-color: #fff; border-color:#000;">
                        <div class="card-body">
                            <i class="bi bi-telephone display-4 mb-3" style="color: #000;"></i>
                            <h4 class="card-title text-black">Hubungi Kami</h4>
                            <h6>Phone: (0354) 771-564</h6>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>

    <div class="container my-4">
        <h4 class="text-center">Peta Kami</h4>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1132.502666384974!2d112.00228168335353!3d-7.8116776694980326!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7857204769d257%3A0xd95963b5b1462f65!2sSMA%20Katolik%20Santo%20Augustinus!5e1!3m2!1sid!2sid!4v1729586368112!5m2!1sid!2sid" 
        width="1300" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <footer class="text-center text-lg-start text-black fixed" style="background-color: #fff">

        <section class="">
            <div class="container text-center text-md-start mt-5">

                <div class="row mt-4">

                    <div class="col-md-4 col-lg-5 col-xl-4 mx-auto mb-4">

                        <h6 class="text-uppercase fw-bold"><span> <img class="img-logo"
                                    src="{{asset('images/logo.png')}}" alt="gambar logo"> </span>SMA Katolik St.
                            Augustinus Kediri</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto"
                            style="width: 60px; background-color: #7c4dff; height: 2px" />
                        <p>Jl. Veteran No.3, Mojoroto, Kec. Mojoroto, Kota Kediri, Jawa Timur 64112</p>
                    </div>

                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <h6 class="text-uppercase fw-bold">Sosial Media</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto"
                            style="width: 60px; background-color: #7c4dff; height: 2px" />
                        <p>
                            <a href="{{ url('https://www.instagram.com/smakaugustinus.kdr/')}}"
                                class="text-black bi bi-instagram"> Instagram</a>
                        </p>
                        <p>
                            <a href="{{ url('https://youtube.com/@smakstaugustinuskediri9465?si=X9bLYRbnxJVYqa75')}}"
                                class="text-black bi bi-youtube"> Youtube</a>
                        </p>
                        <p>
                            <a href="#!" class="text-black bi bi-facebook"> Facebook</a>
                        </p>
                    </div>

                </div>

            </div>
        </section>

        <div class="text-center p-3 text-white" style="background-color: #009970">
            © 2024 Copyright: SMAK Katolik St. Augustinus Kediri
        </div>

    </footer>
</body>
</html>