<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="icon" type="image/x-icon" href="images/favicon.ico">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/8.0.0/mdb.min.css" rel="stylesheet" />
</head>

<style>
    body {
        font-family: 'Montserrat';
    }

    .gradient-custom-2 {
        background: #009970;
    }

    @media (min-width: 768px) {
        .gradient-form {
            height: 100vh !important;
        }
    }

    @media (min-width: 769px) {
        .gradient-custom-2 {
            border-top-right-radius: .3rem;
            border-bottom-right-radius: .3rem;
        }
    }
</style>

<body>
    <section class="h-100 gradient-form" style="background-color: #eee;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">
                    <div class="card rounded-3 text-black">
                        <div class="row g-0">
                            <div class="col-lg-6">
                                <div class="card-body p-md-5 mx-md-4">
                                    <div class="text-center">
                                        <img src="{{asset('images/logo.png')}}" style="width: 100px;" alt="logo">
                                        <h4 class="mt-1 mb-1 pb-1"><strong>Login Account</strong></h4>
                                        <h3 class="mt-1 mb-4 pb-1">SMAK St. Augustinus Kediri</h3>
                                    </div>

                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <p>Please login to your account</p>

                                        @if ($errors->any())
                                            <div class="alert alert-danger">
                                                @foreach ($errors->all() as $error)
                                                    <p>{{ $error }}</p>
                                                @endforeach
                                            </div>
                                        @endif

                                        <div class="form-outline mb-4" data-mdb-input-init>
                                            <input type="text" id="usernameInput" name="username" 
                                                class="form-control form-control-lg @error('username') is-invalid @enderror" 
                                                placeholder="Username" value="{{ old('username') }}" required />
                                            <label class="form-label" for="usernameInput">Username</label>
                                            @error('username')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-outline mb-4" data-mdb-input-init>
                                            <input type="password" id="passwordInput" name="password"
                                                class="form-control form-control-lg @error('password') is-invalid @enderror" 
                                                placeholder="Password" required />
                                            <label class="form-label" for="passwordInput">Password</label>
                                            @error('password')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="text-center pt-1 mb-5 pb-1">
                                            <button class="btn btn-success btn-block fa-lg mb-3" type="submit">Login</button>
                                            <a class="text-muted" href="#!">Forgot password?</a>
                                        </div>

                                        <div class="d-flex align-items-center justify-content-center pb-4">
                                            <p class="mb-0 me-2">Don't have an account?</p>
                                            <button type="button" data-mdb-button-init data-mdb-ripple-init
                                                class="btn btn-outline-success"
                                                onclick="window.location.href='{{ url('ppdbFormulir') }}'">
                                                Create new
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                    <h2 class="mb-4"><strong>SEKOLAH SWASTA KATOLIK DENGAN JIWA KEPEMIMPINAN</strong></h2>
                                    <p class="small mb-0">Sekolah swasta Katalik yang sudah terakreditasi A. Dengan
                                        fasilitas sekolah yang memadahi dan memiliki program kerja kurikulum Merdeka
                                        SMAK menjadi salah satu swasta Katalik yang paling diminati di Kediri.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="toast-container position-fixed top-0 end-0 p-3" style="z-index: 9999;">
        <div id="successToast" class="toast text-bg-success" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <strong class="me-auto">Pendaftaran Berhasil</strong>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                {{ session('success') }}
            </div>
        </div>
    </div>

    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/8.0.0/mdb.umd.min.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            @if (session('success'))
                // Ambil elemen toast
                var successToast = new bootstrap.Toast(document.getElementById('successToast'));
                // Tampilkan toast
                successToast.show();
            @endif
        });
    </script>
</body>
</html>