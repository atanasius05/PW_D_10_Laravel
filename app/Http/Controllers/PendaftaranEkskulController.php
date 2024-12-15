<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran_Ekskul;
use Illuminate\Http\Request;

class PendaftaranEkskulController extends Controller
{
    public function fetchAllData()
    {
        return response()->json(Pendaftaran_Ekskul::all());
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_siswa' => 'required|exists:siswas,id_siswa',
            'id_ekskul' => 'required|exists:jenis_ekskuls,id_ekskul',
            'id_admin' => 'required|exists:admins,id_admin',
            'tanggal_pendaftaran' => 'required|date',
        ]);

        $pendaftaran = Pendaftaran_Ekskul::create($request->all());
        return response()->json($pendaftaran, 201);
    }

    public function update(Request $request, $id)
    {
        $pendaftaran = Pendaftaran_Ekskul::findOrFail($id);

        $request->validate([
            'id_siswa' => 'sometimes|exists:siswas,id_siswa',
            'id_ekskul' => 'sometimes|exists:jenis_ekskuls,id_ekskul',
            'id_admin' => 'sometimes|exists:admins,id_admin',
            'tanggal_pendaftaran' => 'sometimes|date',
        ]);

        $pendaftaran->update($request->all());
        return response()->json($pendaftaran);
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
