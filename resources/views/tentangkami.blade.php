<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami</title>

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
                            <a class="nav-link mx-lg-2 active" aria-current="page" href="{{url('tentangkami') }}"><strong>TENTANG KAMI</strong></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2" href="{{url('pendaftaran') }}"><strong>PENDAFTARAN</strong></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2" href="{{url('kontak') }}"><strong>KONTAK</strong></a>
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

    <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active c-item">
                <img src="{{asset('images/gambar1.JPG')}}" class="d-block w-100 c-img" alt="...">
                <div class="carousel-overlay"></div>
                <div class="carousel-caption d-none d-md-block">
                    <h2>TENTANG KAMI</h2>
                    <h4>SMAK ST. AUGUSTINUS KEDIRI</h4>
                    <p>SMAK St. Augustinus Kediri yang mempunyai visi misi dan perkenalan tentang sejarah sekolah kami</p>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container my-3" style="padding:10px;">
        <div class="container my-5">
        <h2 class="text-center mb-4" style="color: #009970;">Sejarah</h2>
        </div>
        <hr class="w-100" style="border-top: 2px dashed #000; margin: 30px 0;">
        <div class="card" style="border-color: #009970;">
            <div class="card-body">
                <p class="card-text" style="text-indent: 45px;">
                    SMA Katolik Santo Augustinus adalah Sekolah Menengah Atas yang didirikan pada tahun 1954 di Kota Kediri, Jawa Timur, di bawah naungan Yayasan Yohanes Gabriel. Lokasi sangat trategis, 
                di kawasan pendidikan Kota kediri. Lokasi SMA Katolik Santo Augustinus sangat idial bagi siswa yang ingin belajar dengan baik. Di kanan kiri SMA Katolik Santo Augustinus berdiri Berbagai sekolah SMP,  SMA Negeri maupun swasta lainnya.
                </p>
                <p class="card-text" style="text-indent: 45px;">
                    Pada awal berdiri, SMA Katolik Santo Augustinus menempati bangunan bersama-sama dengan SDK dan SMPK St. Augustinus. Ketika itu  dimulai dari kelas jurusan /bagian C, sehingga di kenal dengan SMAK C. Jadi ketika mulai berdiri bangunan induk sudah ada, terdiri atas 11 ruang kelas serta satu ruang lagi yang berfungsi 
                ganda yaitu untuk kantor TU dan Kantor Kepala Sekolah. Satu kawasan dengan sekolah, di sebelah timur utaranya, terdapat Gereja Katolik St. Vincentius.
                </p>
                <p class="card-text" style="text-indent: 45px;">
                    Dalam perkembangannya,  lokasi SMPK dan SDK dipindah dari kompleks SMAK ke bangunan yang baru di jalan Jaksa Agung Suprapto, yang sekarang dikenal dengan SDK Frateran II dan SMPK Mardi Wiyata. Dengan begitu kapasitas ruang kelas bagi SMAK St. Augustinus menjadi lebih besar dan luas. Secara fisik awal bangunan 
                gedung sekolah merupakan bangunan asli dengan arsitektur khas peninggalan Belanda. Namun seiring berjalannya waktu dan makin bertambahnya kebutuhan ruang kelas, ruang staff, laboraturium, multimedia dan lainnya maka dilakukan renovasi bangunan secara bertahap disesuaikan kebutuhan. 
                Pada tahun 1998 dilakukan perenovasian dan peremajaan bangunan kelas sebelah barat, membujur dari utara ke selatan menjadi ruang kelas berlantai dua dengan  kapasitas 12 ruang. Renovasi kedua  pada Tahun 2001, pada  bangunan kelas di sebelah timur  yang membujur dari utara ke Selatan. Renovasi ini menghasilkan 8 ruang kelas, 
                laboraturium komputer, ruang UKS, Koperasi siswa, ruang multimedia sekaligus aula, perpustakaan, laboraturium bahasa. Akhir Tahun 2008 sekolah ini merenovasi lahan parkir bagi siswa di bagian bawah serta bagian atas parkiran dibangun kantin baru agar yang representatif. 
                Renovasi pada pertengahan tahun 2010 terhadap ruang kelas bagian Utara yang berdekatan dengan Gereja dan menghasilkan 10 ruang kelas baru. Bangunan asli SMAK ketika awal berdiri yang masih dipertahankan sebagai monumen sejarah SMA Katolik Santo Agustinus  adalah bangunan di bagian tengah yang membujur dari 
                utara ke selatan. Bangunan lama yang dipertahankan tersebut sekarang menjadi ruang kepala sekolah, ruang guru, dan kantor administrasi.
                </p>
                <p class="card-text" style="text-indent: 45px;">
                    Di samping bangunan gedung di lingkungan SMA Katolik Santo Augustinus terdapat ruang terbuka hijau yang sangat luas berupa taman, lapangan olah raga bola basket, bola voli, sepak bola, tempat parkir sepeda motor dan mobil yang sangat teduh dan rindang. 
                Ruang terbuka tempat bermain peserta didik sangat idial, hijau rindang, sejuk, nyaman dan aman.  Mulai tahun 2010 status akreditasi SMA Katolik Santo Augustinus Kediri adalah Sekolah yang Terakreditasi "A" berdasar 
                keputusan dari Badan Akreditasi Nasional (BAN) dan sampai dengan sekarang berdasar akreditasi tahun 2015 tetap terakreditasi “A”.
                </p>
            </div>
        </div>
    </div>

    <div class="container my-2" style="padding: 10px;">
        <div class="container my-5">
            <h2 class="text-center mb-4" style="color: #009970;">Visi dan Misi</h2>
        </div>
        <hr class="w-100" style="border-top: 2px dashed #000; margin: 30px 0;">
        <div class="row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <div class="card" style="border-color: #009970;">
            <div class="card-body">
                <h4 class="text-center">Visi</h4>
                <p class="card-text">
                    Terwujudnya sumber daya yang beriman kepada Tuhan Yang Maha Esa,Berkompetensi , Berkarakter,Memiliki rasa nasionalisme,
                    Menjunjung Harkat dan Martabat manusia berdasarkan hukum cinta kasih.
                </p>
            </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card" style="border-color: #009970;">
            <div class="card-body">
                <h4 class="text-center">Misi</h4>
                <ol>
                    <li> Mewujudkan iman dan taqwa kepada Tuhan Yang Maha Esa</li>
                    <li> Menyelenggarakan pendidikan yang berkwalitas</li>
                    <li> Mewujudkan perolehan peringkat terbaik dalam lomba akademis dan non  akademis</li>
                    <li> Membudayakan disiplin dan sopan santun kepada guru,karyawan dan siswa</li>
                    <li> Meningkatkan ketrampilan dalam penggunaan tehnologi informatika</li>
                    <li> Menciptakan lingkungan sekolah yang bersih,sehat,hijau dan rindang</li>
                </ol>
            </div>
            </div>
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