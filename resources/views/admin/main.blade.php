@extends('dashboard')
@section('contentmurid')


<head>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
</head>

<style>
    body {
        background-color: whitesmoke;
    }

    @media (min-width: 991.98px) {
        main {
            padding-left: 240px;
        }
    }

    .card {
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease-in-out;
    }

    .card:hover {
        transform: scale(1.02);
    }


    /* Sidebar */
    .sidebar {
        position: fixed;
        top: 0;
        bottom: 0;
        left: 0;
        padding: 58px 0 0;
        /* Height of navbar */
        box-shadow: 0 2px 5px 0 rgb(0 0 0 / 5%), 0 2px 10px 0 rgb(0 0 0 / 5%);
        width: 240px;
        z-index: 600;
    }

    @media (max-width: 991.98px) {
        .sidebar {
            position: fixed;
            width: 250px;
            top: 0;
            left: -250px;
            height: 100%;
            z-index: 1030;
            background-color: #fff;
            transition: all 0.3s ease;
        }

        .sidebar.show {
            left: 0;
        }

        main {
            margin-left: 0;
        }
    }

    @media (min-width: 992px) {
        .sidebar {
            width: 240px;
            height: 100vh;
            left: 0;
        }

        main {
            margin-left: 0px;
        }
    }

    .sidebar .active {
        border-radius: 5px;
        box-shadow: 0 2px 5px 0 rgb(0 0 0 / 16%), 0 2px 10px 0 rgb(0 0 0 / 12%);
        background-color: #009970;
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
</style>

<main style="margin-top: 58px">
    <div class="pt-10 pb-21" style="background-color:#009970;"></div>
    <div class="container mt-n22 px-6">
        <div class="row mb-3">
            <div class="col-lg-12" style="padding-top:-40px;">
                <h2 style="color:#fff;">Selamat Datang di Dashboard Admin!</h2>
            </div>
        </div>
        <!--Section: Minimal statistics cards-->
        <section>
            <div class="row justify-content-center">
                @foreach($infoCard as $info)
                    <div class="col-lg-4 col-sm-6 col-12 mb-4">
                        <div class="card card-custom-size mx-auto">
                            <div class="card-body">
                                <div class="d-flex justify-content-between px-md-1">
                                    <div class="align-self-center">
                                        <i class=" {{$info['icon']}} fa-3x"></i>
                                    </div>
                                    <div class="text-end">
                                        <h3>{{$info['jumlah']}}</h3>
                                        <p class="mb-0">{{$info['jenis']}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                <!-- Section: Class Information Table -->
                <section class="mb-4">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center py-3">
                            <h5 class="mb-0 text-center flex-grow-1">
                                <strong>Data Kelas</strong>
                            </h5>
                            <a href="{{ url("admin/kelas") }}" class="text-dark">
                                <i class="fas fa-edit"></i>
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                            <th scope="col">Tingkat Kelas</th>
                                            <th scope="col">Jurusan</th>
                                            <th scope="col">Jumlah Siswa</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- Example Class Data -->
                                        @forelse($dataKelas as $data)
                                        <tr>
                                            <td>{{$data->tingkatKelas}}</td>
                                            <td>{{$data->jurusan}}</td>
                                            <td>{{$data->jumlahSiswa}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </section>

                <!--Section: Teacher Data Table-->
                <section class="mb-4">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center py-3">
                            <h5 class="mb-0 text-center flex-grow-1">
                                <strong>Data Informasi Guru</strong>
                            </h5>
                            <a href="{{ url("admin/guru") }}" class="text-dark">
                                <i class="fas fa-edit"></i>
                            </a>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID Guru</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Alamat</th>
                                            <th scope="col">Jenis Kelamin</th>
                                            <th scope="col">Tanggal Lahir</th>
                                            <th scope="col">No. Telepon</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- Example of teacher rows -->
                                        @forelse($dataGuru as $guru)
                                        <tr>
                                            <td>{{$guru->id_guru}}</td>
                                            <td>{{$guru->nama}}</td>
                                            <td>{{$guru->alamat}}</td>
                                            <td>{{$guru->jenis_kelamin}}</td>
                                            <td>{{$guru->tanggal_lahir}}</td>
                                            <td>{{$guru->no_telp}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Section: Student Information Table -->
                <section class="mb-4">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center py-3">
                            <h5 class="mb-0 text-center flex-grow-1">
                                <strong>Data Informasi Siswa</strong>
                            </h5>
                            <a href="{{ url("admin/murid") }}" class="text-dark">
                                <i class="fas fa-edit"></i>
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                            <th scope="col">NISN</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Jenis Kelamin</th>
                                            <th scope="col">No. Telp</th>
                                            <th scope="col">Alamat</th>
                                            <th scope="col">Tingkat Kelas</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- 20 Random Data Rows -->
                                        @forelse($dataMurid as $murid)
                                        <tr>
                                            <td>{{$murid['NISN']}}</td>
                                            <td>{{$murid['nama']}}</td>
                                            <td>{{$murid['jenisKelamin']}}</td>
                                            <td>{{$murid['notelp']}}</td>
                                            <td>{{$murid['alamat']}}</td>
                                            <td>{{$murid['tingkatKelas']}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </section>

                <!--Section: Teacher Data Table-->

            </div>
        </section>
        <!--Section: Minimal statistics cards-->
    </div>


</main>