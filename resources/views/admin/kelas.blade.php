@extends('dashboard')

@section('contentkelas')

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
        width: 240px;
        z-index: 600;
    }

    main {
        margin-top: 58px;
    }

     /* Center the table */
     .table-responsive {
        display: flex;
        justify-content: center;
    }

    table {
        width: auto;
        margin: 0 auto;
        text-align: center;
    }

    th, td {
        text-align: center;
    }
</style>

<main>
    <div class="container mt-4">
        <div class="row mb-3">
            <div class="col-lg-12" style="padding-top:-40px;">
                <h2 style="color:#fff;">Dashboard Kelas</h2>
            </div>
        </div>

        <!-- Form Data Kelas -->
        <section class="mb-4">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center py-3">
                    <h5 class="mb-0 text-center flex-grow-1"><strong>Form Data Kelas</strong></h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('kelas.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="tingkat_kelas" class="form-label">Tingkat Kelas</label>
                            <select class="form-select" id="tingkat_kelas" name="tingkat_kelas">
                                <option value="" hidden selected>Pilih Tingkat Kelas</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="nama_kelas" class="form-label">Nama Kelas</label>
                            <input type="text" class="form-control" id="nama_kelas" name="nama_kelas"
                                placeholder="Masukkan Nama Kelas">
                        </div>
                        <div class="mb-3">
                            <label for="jurusan" class="form-label">Jurusan</label>
                            <select class="form-select" id="jurusan" name="jurusan">
                                <option value="" hidden selected>Pilih Jurusan</option>
                                <option value="MIPA">MIPA</option>
                                <option value="IPS">IPS</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="jumlah_siswa" class="form-label">Jumlah Siswa</label>
                            <input type="number" class="form-control" id="jumlah_siswa" name="jumlah_siswa"
                                placeholder="Masukkan Jumlah Siswa">
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-success">Tambah</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <!-- Display Kelas Data -->
        <section class="mb-4">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center py-3">
                    <h5 class="mb-0 text-center flex-grow-1"><strong>Data Kelas</strong></h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th scope="col">Tingkat Kelas</th>
                                    <th scope="col">Jurusan</th>
                                    <th scope="col">Jumlah Siswa</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($kelas as $k)
                                    <tr>
                                        <td>{{ $k->tingkat_kelas }}</td>
                                        <td>{{ $k->jurusan }}</td>
                                        <td>{{ $k->jumlah_siswa }}</td>
                                        <td>
                                            <!-- <a href="{{ route('kelas.edit', [$k->id_kelas]) }}"
                                                class="btn btn-warning">Edit</a> -->
                                            <form action="{{ route('kelas.destroy', $k->id_kelas) }}" method="POST"
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

@endsection