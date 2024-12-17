@extends('dashboard')

@section('contentmain')

<head>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
</head>

<style>
    body {
        background-color: white;
    }

    @media (min-width: 991.98px) {
        main {
            padding-left: 240px;
        }
    }

    .card {
        background-color: gainsboro;
        border-radius: 30px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease-in-out;
    }

    .card:hover {
        transform: scale(1.02);
    }

    /* Button Styles */
    .btn-action {
        border-radius: 20px;
        width: 110px;
        font-size: 14px;
    }

    /* Sidebar */
    .sidebar {
        position: fixed;
        top: 0;
        bottom: 0;
        left: 0;
        padding: 58px 0 0;
        box-shadow: 0 2px 5px 0 rgb(0 0 0 / 5%), 0 2px 10px 0 rgb(0 0 0 / 5%);
        width: 240px;
        z-index: 600;
    }

    .sidebar-sticky {
        position: relative;
        top: 0;
        height: calc(100vh - 48px);
        padding-top: 0.5rem;
        overflow-x: hidden;
        overflow-y: auto;
    }

    .main-footer {
        background-color: #f8f9fa;
        border-top: 1px solid #dee2e6;
        padding: 10px;
        text-align: center;
    }

    .pt-10 {
        padding-top: 4rem !important;
    }

    .pb-21 {
        padding-bottom: 9.5rem !important;
    }

    .mt-n22 {
        margin-top: -8rem !important;
    }

    /* Add spacing for card section */
    .card-section {
        margin-top: 100px;
        /* Adjust the value to get the desired spacing */
    }

    /* Style to reduce the spacing between 'Asal Sekolah' and 'Email' */
    .card-text {
        margin-bottom: 0.5rem;
        /* Reduces space between each line */
    }
</style>

<main style="margin-top: 58px">
    <div class="pt-10 pb-21" style="background-color:#009970;"></div>
    <div class="container mt-n22 px-6">
        <div class="row mb-3">
            <div class="col-lg-12" style="padding-top:-40px;">
                <h1 style="color:#fff;">Selamat Datang di Dashboard Admin!</h1>
            </div>
        </div>

        <!-- Infocard Section -->
        <section class="row mb-4 justify-content-center">
            <!-- Card for Kelas -->
            <div class="col-md-4">
                <div class="card text-center shadow-sm" style="background-color: #e3f2fd; border-radius: 20px;">
                    <div class="card-body">
                        <h4 class="card-title"><strong>Total Kelas</strong></h4>
                        <h1 class="card-text">{{ $totalKelas }}</h1>
                    </div>
                </div>
            </div>
            <!-- Card for Guru -->
            <div class="col-md-4">
                <div class="card text-center shadow-sm" style="background-color: #ffebee; border-radius: 20px;">
                    <div class="card-body">
                        <h4 class="card-title"><strong>Total Guru</strong></h4>
                        <h1 class="card-text">{{ $totalGuru }}</h1>
                    </div>
                </div>
            </div>
            <!-- Card for Siswa -->
            <div class="col-md-4">
                <div class="card text-center shadow-sm" style="background-color: #e8f5e9; border-radius: 20px;">
                    <div class="card-body">
                        <h4 class="card-title"><strong>Total Siswa</strong></h4>
                        <h1 class="card-text">{{ $totalSiswa }}</h1>
                    </div>
                </div>
            </div>
        </section>

        <!-- Display Pending Registrations in Cards -->
        <section class="row justify-content-center card-section">
            @if($pendingPendaftarans->isEmpty())
                <div class="col-12">
                    <div class="card"
                        style="background-color: rgba(255, 255, 0, 0.2); border: 3px solid yellow; border-radius: 10px; padding: 15px;">
                        <p class="mb-0" style="color: #856404; font-weight: bold; text-align: center;">NO PENDING
                            REGISTRATIONS !</p>
                    </div>
                </div>
            @else
                @foreach($pendingPendaftarans as $pendaftaran)
                    <div class="col-md-5 mb-4">
                        <div class="card shadow-sm border-0" style="border-radius: 30px;">
                            <div class="card-body">
                                <h3 class="card-title"><strong>{{ $pendaftaran->nama }}</strong></h3>
                                <p class="card-text"><strong>Asal Sekolah:</strong> {{ $pendaftaran->asal_sekolah }}</p>
                                <p class="card-text"><strong>Email:</strong> {{ $pendaftaran->email }}</p>
                                <div class="d-flex justify-content-between">
                                    <!-- Accept Button -->
                                    <form action="{{ route('admin.acceptPendaftaran', $pendaftaran->id_pendaftaranSiswa) }}"
                                        method="POST">
                                        @csrf
                                        @method('PATCH')
                                        <button type="submit" class="btn btn-success btn-action">Accept</button>
                                    </form>

                                    <!-- Reject Button -->
                                    <form action="{{ route('admin.rejectPendaftaran', $pendaftaran->id_pendaftaranSiswa) }}"
                                        method="POST">
                                        @csrf
                                        @method('PATCH')
                                        <button type="submit" class="btn btn-danger btn-action">Reject</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </section>
    </div>
</main>
@endsection