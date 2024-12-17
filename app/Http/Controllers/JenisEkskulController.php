<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jenis_Ekskul;
use App\Models\Guru;

class JenisEkskulController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Ambil semua data jenis ekskul dan data guru
        $jenisEkskuls = Jenis_Ekskul::with('guru')->get();
        $gurus = Guru::all();

        // Return view dengan data jenis ekskul
        return view('admin.jenisekskul', compact('jenisEkskuls', 'gurus'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi data yang diterima
        $request->validate([
            'id_guru' => 'required|exists:gurus,id_guru', // Pastikan id_guru valid
            'nama_ekskul' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'hari' => 'required|string|max:20',
            'jam' => 'required|string|max:20',
        ]);

        // Menyimpan data ke tabel jenis_ekskuls
        Jenis_Ekskul::create([
            'id_guru' => $request->id_guru,
            'nama_ekskul' => $request->nama_ekskul,
            'deskripsi' => $request->deskripsi,
            'hari' => $request->hari,
            'jam' => $request->jam,
        ]);

        // Redirect dengan pesan sukses
        return redirect()->route('admin.jenisekskul')->with('success', 'Jenis Ekskul berhasil ditambahkan.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Cari data berdasarkan ID
        $jenisEkskul = Jenis_Ekskul::findOrFail($id);

        // Hapus data
        $jenisEkskul->delete();

        // Redirect dengan pesan sukses
        return redirect()->route('jenis_ekskul.index')->with('success', 'Jenis Ekskul berhasil dihapus.');
    }
}
