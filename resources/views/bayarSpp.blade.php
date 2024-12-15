<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bayar SPP</title>

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
                            <a class="nav-link mx-lg-2 active" aria-current="page" href="{{url('bayarSpp') }}"><strong>BAYAR SPP</strong></a>
                        </li>
                    </ul>
                </div>
            </div>

            <a href="{{ url('homepage') }}" class="login-button"
            class="login-button" style="background-color: red; color: white;"
            >Logout</a>
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
                <img src="{{asset('images/1.jpg')}}" class="d-block w-100 c-img" alt="...">
                <div class="carousel-overlay"></div>
                <div class="carousel-caption d-none d-md-block">
                    <h2>Pembayaran SPP</h2>
                    <h2>PESERTA DIDIK TAHUN 2024/2025</h2>
                    <h4>SMAK ST. AUGUSTINUS KEDIRI</h4>
                    <p>Pembayaran SPP paling lambat di tanggal 10 di setiap bulannya.</p>
                </div>
            </div>
            <div class="carousel-item c-item">
                <img src="{{asset('images/2.jpg')}}" class="d-block w-100 c-img" alt="...">
                <div class="carousel-overlay"></div>
                <div class="carousel-overlay"></div>
                <div class="carousel-caption d-none d-md-block">
                    <h2>Pembayaran SPP</h2>
                    <h2>PESERTA DIDIK TAHUN 2024/2025</h2>
                    <h4>SMAK ST. AUGUSTINUS KEDIRI</h4>
                    <p>Pembayaran SPP paling lambat di tanggal 10 di setiap bulannya.</p>
                </div>
            </div>
            <div class="carousel-item c-item">
                <img src="{{asset('images/gambar6.JPG')}}" class="d-block w-100 c-img" alt="...">
                <div class="carousel-overlay"></div>
                <div class="carousel-overlay"></div>
                <div class="carousel-caption d-none d-md-block">
                    <h2>Pembayaran SPP</h2>
                    <h2>PESERTA DIDIK TAHUN 2024/2025</h2>
                    <h4>SMAK ST. AUGUSTINUS KEDIRI</h4>
                    <p>Pembayaran SPP paling lambat di tanggal 10 di setiap bulannya.</p>
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

    <div class="container my-3 w-50" style="padding: 5px;">
        <div class="container my-4">
            <h2 class="text-center mb-4" style="color: #009970;">Informasi Pembayaran SPP</h2>
        </div>
        <div class="col-md-4 col-lg-5 col-xl-4 offset-md-1 mb-4 text-start">
            <div style="color: gray; margin-bottom: 10px;">
                <p style="margin: 0;">Nama Siswa</p>
                <strong style="color: black; margin-top: 5px;">Taura Fransiskus Darsono</strong>
            </div>
            <div style="color: gray; margin-bottom: 10px;">
                <p style="margin: 0;">NISN</p>
                <strong style="color: black; margin-top: 5px;">1234567890</strong>
            </div>
            <div style="color: gray;">
                <p style="margin: 0;">Tahun Ajaran</p>
                <strong style="color: black; margin-top: 5px;">2024/2025</strong>
            </div>
        </div>
        <div class="card shadow-sm">
            <div class="card-header text-center" style="background-color: #009970; color:#fff;">
                Tagihan Pembayaran
            </div>
            <div class="card-body">
                <table class="table table-bordered" style="border-color:#009970;">
                    <thead>
                        <tr>
                            <th>Bulan</th>
                            <th>Jumlah Tagihan</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>September 2024</td>
                            <td>550.000</td>
                            <td>Belum Lunas</td>
                        </tr>
                    </tbody>
                </table>
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
                <h4>PPDB SMA  Katolik St. Augustinus Kediri</h4>
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
