<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran_Ekskul;
use App\Models\Jenis_Ekskul;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Http\Auth;

class PendaftaranEkskulController extends Controller
{
    public function fetchAllData()
    {
        $ekskuls = Jenis_Ekskul::all();
        $siswa = Siswa::findOrFail(session('siswa_id'));

        return view('formekskul', compact('ekskuls', 'siswa'));
    }

    public function fetchAllDataPendaftaranEkskul()
    {   
        // Mengambil semua data pendaftaran ekskul beserta relasi siswa dan jenis ekskul
        $pendaftaranEkskuls = Pendaftaran_Ekskul::with(['siswa', 'jenisEkskul'])->get();
        $ekskuls = Jenis_Ekskul::all();

        // Mengembalikan data ke view atau dalam bentuk JSON untuk API
        return view('admin.pendaftaranEkskul', compact('pendaftaranEkskuls', 'ekskuls'));
    }


    public function createForm()
    {
        // Mendapatkan id_siswa dari sesi login
        $siswaId = session('siswa_id');
        if (!$siswaId) {
            return redirect()->route('login')->with('error', 'Anda harus login untuk mengakses halaman ini.');
        }

        // Mengambil data siswa berdasarkan id_siswa
        $siswa = Siswa::findOrFail($siswaId);

        // Mengambil data jenis ekskul dari database
        $jenisEkskuls = Jenis_Ekskul::all();

        // Mengirimkan data siswa dan jenis ekskul ke view
        return view('formekskul', compact('siswa', 'jenisEkskuls'));
    }



    public function store(Request $request)
    {
        $siswaId = session('siswa_id');
        if (!$siswaId) {
            return redirect()->route('login')->with('error', 'Anda harus login untuk mendaftar.');
        }

        $request->validate([
            'id_ekskul' => 'required|exists:jenis_ekskuls,id_ekskul',
            'tanggal_pendaftaran' => 'required|date',
        ]);

        $data = $request->only('id_ekskul', 'tanggal_pendaftaran');
        $data['id_siswa'] = $siswaId;

        $pendaftaran = Pendaftaran_Ekskul::create($data);

        return redirect()->route('user.home')->with('success', 'Pendaftaran berhasil!');
    }

    public function update(Request $request, $id)
    {
        $pendaftaran = Pendaftaran_Ekskul::findOrFail($id);

        $request->validate([
            'id_siswa' => 'sometimes|exists:siswas,id_siswa',
            'id_ekskul' => 'sometimes|exists:jenis_ekskuls,id_ekskul',
            'tanggal_pendaftaran' => 'sometimes|date',
        ]);

        $pendaftaran->update($request->all());
        return response()->json($pendaftaran);
    }
    
    public function destroy($id)
    {
        // Find the pendaftaranEkskul by ID
        $pendaftaranEkskul = Pendaftaran_Ekskul::findOrFail($id);

        // Delete the pendaftaranEkskul
        $pendaftaranEkskul->delete();

        // Redirect with success message
        return redirect()->route('admin.pendaftaranEkskul')->with('success', 'Pendaftaran Ekskul berhasil dihapus.');
    }

    public function delete($id)
    {
        $pendaftaran = Pendaftaran_Ekskul::findOrFail($id);
        $pendaftaran->delete();

        return response()->json(['message' => 'Deleted successfully']);
    }

    public function search(Request $request)
    {
        $query = Pendaftaran_Ekskul::where('tanggal_pendaftaran', 'LIKE', "%{$request->keyword}%")->get();
        return response()->json($query);
    }
}
