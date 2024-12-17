@extends('dashboard')

@section('contentpendaftaranEkskul')
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
<main style="margin-top: 58px">
    <div class="pt-10 pb-21" style="background-color:#009970;"></div>
    <div class="container mt-n22 px-6">
        <div class="row mb-3">
            <div class="col-lg-12" style="padding-top:-40px;">
                <h2 style="color:#fff;">Dashboard Pendaftaran Ekskul</h2>
            </div>
        </div>

        <!-- Section: Pendaftaran Ekstrakurikuler Table -->
        <section class="mb-4">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center py-3">
                    <h5 class="mb-0 text-center flex-grow-1">
                        <strong>Data Pendaftaran Ekstrakurikuler</strong>
                    </h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Siswa</th>
                                    <th scope="col">Ekstrakurikuler</th>
                                    <th scope="col">Hari</th>
                                    <th scope="col">Jam</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($pendaftaranEkskuls as $index => $pendaftaran)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $pendaftaran->siswa->nama }}</td>
                                        <td>{{ $pendaftaran->jenisEkskul?->nama_ekskul ?? 'Data tidak tersedia' }}</td>
                                        <td>{{ $pendaftaran->jenisEkskul?->hari ?? '-' }}</td>
                                        <td>{{ $pendaftaran->jenisEkskul?->jam ?? '-' }}</td>

                                        <td>
                                            <form
                                                action="{{ route('pendaftaranEkskul.destroy', $pendaftaran->id_pendaftaran) }}"
                                                method="POST"
                                                onsubmit="return confirm('Apakah Anda yakin ingin menghapus pendaftaran ini?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center">Tidak ada data pendaftaran ekskul.</td>
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