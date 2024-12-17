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
                            <a class="nav-link mx-lg-2 active" aria-current="page" href="{{ url('/User/kontak') }}">
                                <strong>KONTAK</strong>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2" href="{{ url('/User/Eksul') }}">
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
                    <h2>TENTANG KAMI</h2>
                    <h4>SMAK ST. AUGUSTINUS KEDIRI</h4>
                    <p>SMAK St. Augustinus Kediri yang mempunyai visi misi dan perkenalan tentang sejarah sekolah kami
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container my-3 fade-in" style="padding:10px;">
        <div class="row text-center row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            <div class="col">
                <div class="card h-100 border-1 text-center" style="background-color: #fff; border-color:#000;">
                    <div class="card-body">
                        <i class="bi bi-clock display-4 mb-3" style="color: #000;"></i>
                        <h4 class="card-title text-black">Jam Kerja</h4>
                        <h6>Senin - Jumat</h6>
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

    <div class="container my-4 fade-in">
        <h4 class="text-center">Peta Kami</h4>
        <div class="ratio ratio-16x9">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1132.502666384974!2d112.00228168335353!3d-7.8116776694980326!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7857204769d257%3A0xd95963b5b1462f65!2sSMA%20Katolik%20Santo%20Augustinus!5e1!3m2!1sid!2sid!4v1729586368112!5m2!1sid!2sid"
                style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>
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