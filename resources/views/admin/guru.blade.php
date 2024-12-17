@extends('dashboard')
@section('contentguru')

<div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="successModalLabel">Berhasil</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p id="successMessage"></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        @if (session('success'))
            var successMessage = "{{ session('success') }}";
            document.getElementById('successMessage').innerText = successMessage;
            var successModal = new bootstrap.Modal(document.getElementById('successModal'));
            successModal.show();
        @endif
    });
</script>

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
                <h2 style="color:#fff;">Dashboard Guru</h2>
            </div>
        </div>
        <!-- Form Data Guru -->
        <section class="mb-4">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center py-3">
                    <h5 class="mb-0 text-center flex-grow-1">
                        <strong>Form Data Guru</strong>
                    </h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('guru.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="namaGuru" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="namaGuru" name="namaGuru"
                                placeholder="Masukkan Nama" required>
                        </div>
                        <div class="mb-3">
                            <label for="alamatGuru" class="form-label">Alamat</label>
                            <input type="text" class="form-control" id="alamatGuru" name="alamatGuru"
                                placeholder="Masukkan Alamat" required>
                        </div>
                        <div class="mb-3">
                            <label for="jenisKelaminGuru" class="form-label">Jenis Kelamin</label>
                            <select class="form-select" id="jenisKelaminGuru" name="jenisKelaminGuru" required>
                                <option value="" hidden selected>Pilih Jenis Kelamin</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="tanggalLahirGuru" class="form-label">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="tanggalLahirGuru" name="tanggalLahirGuru"
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="noTeleponGuru" class="form-label">No. Telepon</label>
                            <input type="tel" class="form-control" id="noTeleponGuru" name="noTeleponGuru"
                                placeholder="Masukkan No. Telepon" required>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-success">Tambah</button>
                        </div>
                    </form>

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
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Example of teacher rows -->
                                @forelse($guru as $g)
                                <tr>
                                    <td>{{$g->id_guru}}</td>
                                    <td>{{$g->nama}}</td>
                                    <td>{{$g->alamat}}</td>
                                    <td>{{$g->jenis_kelamin}}</td>
                                    <td>{{$g->tanggal_lahir}}</td>
                                    <td>{{$g->no_telp}}</td>
                                    <td>
                                            <!-- <a href="{{ route('guru.update', [$g->id_guru]) }}"
                                                class="btn btn-warning">Edit</a> -->
                                            <form action="{{ route('guru.destroy', $g->id_guru) }}" method="POST"
                                                style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Hapus</button>
                                            </form>
                                        </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>


</main>