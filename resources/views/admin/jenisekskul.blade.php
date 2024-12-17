@extends('dashboard')

@section('contentkelas')
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

    th,
    td {
        text-align: center;
    }
</style>

<main>
    <div class="pt-10 pb-21" style="background-color:#009970;"></div>
    <div class="container mt-n22 px-6">
        <div class="row mb-3">
            <div class="col-lg-12" style="padding-top:-40px;">
                <h2 style="color:#fff;">Dashboard Ekskul</h2>
            </div>
        </div>

        <!-- Form Data Jenis Ekskul -->
        <section class="mb-4">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center py-3">
                    <h5 class="mb-0 text-center flex-grow-1"><strong>Form Data Jenis Ekskul</strong></h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('jenis_ekskul.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="id_guru" class="form-label">Guru Pembimbing</label>
                            <select class="form-select" id="id_guru" name="id_guru">
                                <option value="" hidden selected>Pilih Guru Pembimbing</option>
                                @foreach($gurus as $guru)
                                    <option value="{{ $guru->id_guru }}">{{ $guru->id_guru }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="nama_ekskul" class="form-label">Nama Ekskul</label>
                            <input type="text" class="form-control" id="nama_ekskul" name="nama_ekskul"
                                placeholder="Masukkan Nama Ekskul">
                        </div>
                        <div class="mb-3">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            <textarea class="form-control" id="deskripsi" name="deskripsi"
                                placeholder="Masukkan Deskripsi"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="hari" class="form-label">Hari</label>
                            <input type="text" class="form-control" id="hari" name="hari"
                                placeholder="Masukkan Hari Kegiatan">
                        </div>
                        <div class="mb-3">
                            <label for="jam" class="form-label">Jam</label>
                            <input type="time" class="form-control" id="jam" name="jam">
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-success">Tambah</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <!-- Display Jenis Ekskul Data -->
        <section class="mb-4">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center py-3">
                    <h5 class="mb-0 text-center flex-grow-1"><strong>Data Jenis Ekskul</strong></h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th scope="col">Nama Ekskul</th>
                                    <th scope="col">Guru Pembimbing</th>
                                    <th scope="col">Deskripsi</th>
                                    <th scope="col">Hari</th>
                                    <th scope="col">Jam</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($jenisEkskuls as $ekskul)
                                    <tr>
                                        <td>{{ $ekskul->nama_ekskul }}</td>
                                        <td>{{ $ekskul->guru->nama }}</td>
                                        <td>{{ $ekskul->deskripsi }}</td>
                                        <td>{{ $ekskul->hari }}</td>
                                        <td>{{ $ekskul->jam }}</td>
                                        <td>
                                            <form action="{{ route('jenis_ekskul.destroy', $ekskul->id_ekskul) }}"
                                                method="POST" style="display:inline;">
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