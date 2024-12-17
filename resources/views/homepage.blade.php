<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMAK St. Augustinus Kediri</title>

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
            <a class="navbar-brand me-auto" href="{{ url('homepage') }}"><img class="img-logo"
                    src="{{asset('images/logo.png')}}" alt="logo"></a>
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
                            <a class="nav-link mx-lg-2 active" aria-current="page"
                                href="{{url('homepage') }}"><strong>BERANDA</strong></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2 " href="{{url('tentangkami') }}"><strong>TENTANG
                                    KAMI</strong></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2" href="{{url('pendaftaran') }}"><strong>PENDAFTARAN</strong></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2" href="{{url('kontak') }}"><strong>KONTAK</strong></a>
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
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active c-item">
                <img src="{{asset('images/gambar1.JPG')}}" class="d-block w-100 c-img" alt="...">
                <div class="carousel-overlay"></div>
                <div class="carousel-caption d-none d-md-block">
                    <h5>SMAK ST. AUGUSTINUS KEDIRI</h5>
                    <h2>SEKOLAH SWASTA KATOLIK DENGAN</h2>
                    <h2>DENGAN JIWA KEPEMIMPINAN</h2>
                    <p>SMAK St. Augustinus Kediri berkomitmen untuk menjadi sekolah swasta Katolik dengan jiwa
                        kepemimpinan yang tinggi.</p>
                    <a href="#" class="btn btn-light btn-lg">GET STARTED</a>
                </div>
            </div>
            <div class="carousel-item c-item">
                <img src="{{asset('images/gambar2.JPG')}}" class="d-block w-100 c-img" alt="...">
                <div class="carousel-overlay"></div>
                <div class="carousel-overlay"></div>
                <div class="carousel-caption d-none d-md-block">
                    <h5>SMAK ST. AUGUSTINUS KEDIRI</h5>
                    <h2>SEKOLAH SWASTA KATOLIK DENGAN</h2>
                    <h2>DENGAN JIWA KEPEMIMPINAN</h2>
                    <p>SMAK St. Augustinus Kediri berkomitmen untuk menjadi sekolah swasta Katolik dengan jiwa
                        kepemimpinan yang tinggi.</p>
                    <a href="#" class="btn btn-light btn-lg">GET STARTED</a>
                </div>
            </div>
            <div class="carousel-item c-item">
                <img src="{{asset('images/gambar3.JPG')}}" class="d-block w-100 c-img" alt="...">
                <div class="carousel-overlay"></div>
                <div class="carousel-overlay"></div>
                <div class="carousel-caption d-none d-md-block">
                    <h5>SMAK ST. AUGUSTINUS KEDIRI</h5>
                    <h2>SEKOLAH SWASTA KATOLIK DENGAN</h2>
                    <h2>DENGAN JIWA KEPEMIMPINAN</h2>
                    <p>SMAK St. Augustinus Kediri berkomitmen untuk menjadi sekolah swasta Katolik dengan jiwa
                        kepemimpinan yang tinggi.</p>
                    <a href="#" class="btn btn-light btn-lg">GET STARTED</a>
                </div>
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Container for Cards -->
    <div class="container my-5" style="padding: 50px;">
        <div class="row text-center">
            <div class="col-md-3 col-custom mb-4">
                <div class="card text-white" style="background-color: #009970; border: none;">
                    <div class="card-body">
                        <h5 class="card-title">PORTAL SISWA</h5>
                        <p class="card-text">Sistem Informasi untuk Peserta Didik SMA Katolik St. Augustinus Kediri.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-custom mb-4">
                <div class="card text-white" style="background-color: #009970; border: none;">
                    <div class="card-body">
                        <h5 class="card-title">E-LIBRARY</h5>
                        <p class="card-text">Layanan Perpustakaan bagi keluarga besar SMA Katolik St. Augustinus Kediri.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-custom mb-4">
                <div class="card text-white" style="background-color: #009970; border: none;">
                    <div class="card-body">
                        <h5 class="card-title">LMS / E-LEARNING</h5>
                        <p class="card-text">Layanan Learning Management System SMA Katolik St. Augustinus Kediri.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-custom mb-4">
                <div class="card text-white" style="background-color: #009970; border: none;">
                    <div class="card-body">
                        <h5 class="card-title">SI SIMAK</h5>
                        <p class="card-text">Layanan Sistem Informasi Manajemen di SMA Katolik St. Augustinus Kediri.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container my-5" style="padding: 20px;">
        <div class="row">
            <div class="col-md-4 col-custom text-center" style="display:flex; align-items:center;">
                <div class="rounded-circle overflow-hidden mx-auto custom-image">
                    <img src="{{asset('images/Photo2.jpg')}}" alt="Kepala Sekolah" class="img-fluid">
                </div>
            </div>
            <div class="col-md-8 col-custom">
                <h6 class="text-warning">Sambutan</h6>
                <h2 class="mb-3">KEPALA SEKOLAH</h2>
                <h3 class="mb-4" style="color: #009970;">SMA Katolik St. Augustinus Kediri</h3>
                <p class="mb-3">Salam Sejahtera bagi kita semua</p>
                <p class="mb-4">
                    Pada era pesatnya perkembangan teknologi informasi dan komunikasi sekarang ini,
                    tidak dipungkiri bahwa keberadaan sebuah website untuk suatu sekolah untuk mengenalkan kekalangan
                    masyarakat luas, salah satunya SMA Katolik St. Augustinus Kediri sangatlah penting.
                    Website ini dimaksudkan sebagai sarana untuk menginformasikan berbagai
                    kegiatan sekolah yang bisa diketahui oleh masyarakat luas. Disamping itu,
                    masyarakat juga dapat mengetahui profil, visi misi, data guru dan tenaga
                    kependidikan, prestasi sekolah baik peserta didik maupun guru dan tenaga
                    kependidikan, kegiatan ekstra kurikuler, sarana dan prasarana, penerimaan peserta
                    didik baru serta informasi lainnya dari SMA Katolik St. Augustinus Kediri.
                </p>
                <button class="btn btn-info text-white custom-button">Lanjutkan</button>
            </div>
        </div>
    </div>
    <div class="container my-5" style="padding: 20px;">
        <div class="container my-5">
            <h6 class="text-center text-muted">Layanan Unggulan</h6>
            <h2 class="text-center mb-4">LAYANAN UNGGULAN</h2>
            <h3 class="text-center mb-4" style="color: #009970;">SMA Katolik St. Augustinus Kediri</h3>
            <hr class="w-100" style="border-top: 2px dashed #000; margin: 30px 0;">
            <div class="row text-center g-4">
                <div class="col">
                    <div class="card h-100 border-0 text-center" style="background-color: #009970; border: none;">
                        <div class="card-body">
                            <i class="bi bi-person display-4 mb-3" style="color: #fff;"></i>
                            <h5 class="card-title text-white">PEMBUDAYAAN NILAI RELIGIUS</h5>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 border-0 text-center" style="background-color: #009970; border: none;">
                        <div class="card-body">
                            <i class="bi bi-people display-4 mb-3" style="color: #fff;"></i>
                            <h5 class="card-title text-white">KELAS UNGGULAN DAN REGULER</h5>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 border-0 text-center" style="background-color: #009970; border: none;">
                        <div class="card-body">
                            <i class="bi bi-list-check display-4 mb-3" style="color: #fff;"></i>
                            <h5 class="card-title text-white">EKSTRAKURIKULER UNGGULAN</h5>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 border-0 text-center" style="background-color: #009970; border: none;">
                        <div class="card-body">
                            <i class="bi bi-globe display-4 mb-3" style="color: #fff;"></i>
                            <h5 class="card-title text-white">ONLINE MANAGEMENT SYSTEM</h5>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 border-0 text-center" style="background-color: #009970; border: none;">
                        <div class="card-body">
                            <i class="bi bi-building display-4 mb-3" style="color: #fff;"></i>
                            <h5 class="card-title text-white">FASILITAS BERSTANDAR NASIONAL</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container my-5" style="padding: 20px;">
        <h6 class="text-center text-muted">Alumi</h6>
        <h2 class="text-center mb-4">INI KATA MEREKA</h2>
        <hr class="w-100" style="border-top: 2px dashed #000; margin: 30px 0;">

        <div id="carouselExampleFade" class="carousel slide carousel-fade">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <table class="mx-auto" style="width: 80%; border: none;">
                        <tr>
                            <td style="width: 20%;" class="text-center">
                                <div class="rounded-circle overflow-hidden custom-image"
                                    style="width: 200px; height: 200px; margin: 0 auto;">
                                    <img src="{{asset('images/Photo1.jpg')}}" alt="Alumni Sekolah" class="img-fluid"
                                        style="width: 100%; height: 100%; object-fit: cover;">
                                </div>
                            </td>
                            <td style="width: 70%; padding-left: 20px;">
                                <h6>Lana Marcel Argya N</h6>
                                <h3 style="color: #009970;">Alumi SMA Katolik St. Augustinus Kediri</h3>
                                <p>
                                    Sekolah ini merupakan sekolah yang bisa membuat saya untuk lebih berani dalam
                                    mengambil keputusan dan berani untuk mengambil tantangan. Selama saya bersekolah
                                    ini saya kenal dengan berbagai teman serta guru yang membimbing saya untuk
                                    menjadi seseorang yang bisa berguna untuk bangsa dan negara.
                                </p>
                            </td>
                        </tr>
                    </table>
                </div>

                <div class="carousel-item">
                    <table class="mx-auto" style="width: 80%; border: none;">
                        <tr>
                            <td style="width: 20%;" class="text-center">
                                <div class="rounded-circle overflow-hidden custom-image"
                                    style="width: 200px; height: 200px; margin: 0 auto;">
                                    <img src="{{asset('images/Photo2.jpg')}}" alt="Alumni Sekolah" class="img-fluid"
                                        style="width: 100%; height: 100%; object-fit: cover;">
                                </div>
                            </td>
                            <td style="width: 70%; padding-left: 20px;">
                                <h6>Rafael Zeconiah</h6>
                                <h3 style="color: #009970;">Alumi SMA Katolik St. Augustinus Kediri</h3>
                                <p>
                                    Sekolah ini merupakan sekolah yang bisa membuat saya untuk lebih berani dalam
                                    mengambil keputusan dan berani untuk mengambil tantangan. Selama saya bersekolah
                                    ini saya kenal dengan berbagai teman serta guru yang membimbing saya untuk
                                    menjadi seseorang yang bisa berguna untuk bangsa dan negara.
                                </p>
                            </td>
                        </tr>
                    </table>
                </div>

                <div class="carousel-item">
                    <table class="mx-auto" style="width: 80%; border: none;">
                        <tr>
                            <td style="width: 20%;" class="text-center">
                                <div class="rounded-circle overflow-hidden custom-image"
                                    style="width: 200px; height: 200px; margin: 0 auto;">
                                    <img src="{{asset('images/Photo3.jpg')}}" alt="Alumni Sekolah" class="img-fluid"
                                        style="width: 100%; height: 100%; object-fit: cover;">
                                </div>
                            </td>
                            <td style="width: 70%; padding-left: 20px;">
                                <h6>Atanasisus Fiko Primawardana</h6>
                                <h3 style="color: #009970;">Alumi SMA Katolik St. Augustinus Kediri</h3>
                                <p>
                                    Sekolah ini merupakan sekolah yang bisa membuat saya untuk lebih berani dalam
                                    mengambil keputusan dan berani untuk mengambil tantangan. Selama saya bersekolah
                                    ini saya kenal dengan berbagai teman serta guru yang membimbing saya untuk
                                    menjadi seseorang yang bisa berguna untuk bangsa dan negara.
                                </p>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon prev-logo" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
                data-bs-slide="next">
                <span class="carousel-control-next-icon next-logo" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
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
        <?php
    session()->forget('siswa_id');
    ?>

</body>

</html>