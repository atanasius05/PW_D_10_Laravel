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
            <a class="navbar-brand me-auto" href="{{ url('/User/home') }}">
                <img class="img-logo" src="{{ asset('images/logo.png') }}" alt="logo">
            </a>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <p class="offcanvas-title" id="offcanvasNavbarLabel">
                        <img class="img-logo" src="{{ asset('images/logo.png') }}" alt="logo">
                        <strong>SMAK St. Augustinus Kediri</strong>
                    </p>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2" href="{{ url('/User/home') }}">
                                <strong>BERANDA</strong>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2" href="{{ url('/User/tentangKami') }}">
                                <strong>TENTANG KAMI</strong>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2" href="{{ url('/User/kontak') }}">
                                <strong>KONTAK</strong>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2 active" aria-current="page" href="{{ url('/User/Eksul') }}">
                                <strong>EKSTRAKURIKULER</strong>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Tambahan Dropdown Profil -->
            <div class="dropdown ms-auto">
                <button class="btn btn-success p-2 border-0 d-flex align-items-center justify-content-center"
                    type="button" id="dropdownProfileButton" data-bs-toggle="dropdown" aria-expanded="false"
                    style="border-radius: 20px; width: 130px;">
                    <i class="bi bi-person" style="font-size: 1.5rem;"></i> <!-- Ikon User -->
                    <span class="ms-2">Profile</span> <!-- Teks Profile -->
                </button>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownProfileButton">
                    <li><a class="dropdown-item" href="{{ url('/User/profilUser') }}">Ubah Profil</a></li>
                    <li><a class="dropdown-item" href="{{ url('/login') }}">Keluar</a></li>
                </ul>
            </div>

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
                    <a href="{{url('formekskul') }}" class="btn btn-light btn-lg">Daftar</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container my-3 fade-in" style="padding:20px;">
        <div class="container my-5">
            <h2 class="text-center mb-4" style="color: #009970;">Informasi Ekstrakurikuler</h2>
        </div>
        <hr class="w-100" style="border-top: 2px dashed #000; margin: 30px 0;">
        <div class="row">
            <div class="col-md-6 mb-3">
                <div class="card" style="border-color: #009970;">
                    <div class="card-body text-center">
                        <h3>Basket</h3>
                        <p>Hari : Selasa</p>
                        <p>Jam : 4 Sore</p>
                        <p>Guru: Pak Slamat</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="card" style="border-color: #009970;">
                    <div class="card-body text-center">
                        <h3>Voli</h3>
                        <p>Hari : Rabu</p>
                        <p>Jam : 4 Sore</p>
                        <p>Guru: Pak Tama</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <div class="card" style="border-color: #009970;">
                    <div class="card-body text-center">
                        <h3>Futsal</h3>
                        <p>Hari : Jumat</p>
                        <p>Jam : 4 Sore</p>
                        <p>Guru: Pak Joko</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="card" style="border-color: #009970;">
                    <div class="card-body text-center">
                        <h3>Band</h3>
                        <p>Hari : Kamis</p>
                        <p>Jam : 4 Sore</p>
                        <p>Guru: Bu Rani</p>
                    </div>
                </div>
            </div>
        </div>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const elements = document.querySelectorAll(".fade-in");

            const observer = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add("visible");
                        observer.unobserve(entry.target); // Stop observing once visible
                    }
                });
            });

            elements.forEach(el => observer.observe(el));
        });
    </script>
</body>

</html>