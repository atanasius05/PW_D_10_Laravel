@extends('dashboard')

@section('contentsiswa')
<main style="margin-top: 58px">
    <div class="pt-10 pb-21" style="background-color:#009970;"></div>
    <div class="container mt-n22 px-6">
        <div class="row mb-3">
            <div class="col-lg-12" style="padding-top:-40px;">
                <h2 style="color:#fff;">Dashboard Siswa</h2>
            </div>
        </div>

        <!-- Section: Student Information Table -->
        <section class="mb-4">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center py-3">
                    <h5 class="mb-0 text-center flex-grow-1">
                        <strong>Data Informasi Siswa</strong>
                    </h5>
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
                                    <th scope="col">Agama</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($siswas as $s)
                                    <tr>
                                        <td>{{ $s->nisn }}</td>
                                        <td>{{ $s->nama }}</td>
                                        <td>{{ $s->jenis_kelamin }}</td>
                                        <td>{{ $s->no_telp }}</td>
                                        <td>{{ $s->alamat }}</td>
                                        <td>{{ $s->agama }}</td>
                                        <td>
                                            <form action="{{ route('siswa.destroy', $s->id_siswa) }}" method="POST"
                                                onsubmit="return confirm('Apakah Anda yakin ingin menghapus siswa ini?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7" class="text-center">Tidak ada data siswa.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>
@endsection