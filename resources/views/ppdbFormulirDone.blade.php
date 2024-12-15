<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran PPDB</title>

    <link rel="icon" type="image/x-icon" href="images/favicon.ico">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <style>
        body {
            background-color: #f0f0f0; 
            padding-top: 100px; 
        }
    </style>

</head>
<body>
    <nav class="navbar navbar-expand-lg fixed-top" style="background-color: #009970">
        <div class="container-fluid">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img class="img-logo" src="{{asset('images/logo.png')}}" alt="logo" style="margin-right: 10px;"> 
            </a>
            <div class="text-center flex-grow-1">
                <span class="navbar-text text-white" style="font-size: 1.5rem;">
                    Konfirmasi PPDB SMAK ST. AUGUSTINUS KEDIRI
                </span>
            </div>
        </div>
    </nav>
    
    <section 
    class="container my-2 w-50 bg-white text-dark p-5 mt-5 " 
    style="border: 2px solid #cccccc; border-radius: 5px; padding: 50px; margin-top: 120px;">
        <form class="row g-3" action="{{ url('loginpage') }}" method="GET">
            @csrf
            <div class="col-12">
                <label for="inputNama" class="form-label" style="font-weight: bold;">Nama Pendaftar</label>
                <input type="text" class="form-control" id="inputNama" placeholder="Abdul">
            </div>
            <div class="col-md-6">
                <label for="inputIdPendaftaran" class="form-label" style="font-weight: bold;">ID Pendaftaran</label>
                <input type="text" class="form-control" id="inputIdPendaftaran" placeholder="125421">
            </div>
            <div class="col-md-6">
                <label for="inputPassword" class="form-label" style="font-weight: bold;">Password</label>
                <input type="password" class="form-control" id="inputPassword" placeholder="125421">
            </div>
            <p style="color:red;">ID Pendaftaran & Password (Mohon Diingat) </p>
            <div class="col-12">
                <button type="submit" class="btn btn-success">Login</button>
            </div>
        </form>
    </section>

    <footer
            class="text-center text-lg-start text-black fixed"
            style="background-color: #f0f0f0"
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