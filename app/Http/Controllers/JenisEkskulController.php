<?php

namespace App\Http\Controllers;

use App\Models\Jenis_Ekskul;
use Illuminate\Http\Request;

class JenisEkskulController extends Controller
{
    public function fetchAllData()
    {
        return response()->json(Jenis_Ekskul::all());
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'id_guru' => 'required|exists:gurus,id_guru',
        ]);

        $jenisEkskul = Jenis_Ekskul::create($request->all());
        return response()->json($jenisEkskul, 201);
    }

    public function update(Request $request, $id)
    {
        $jenisEkskul = Jenis_Ekskul::findOrFail($id);

        $request->validate([
            'nama' => 'sometimes',
            'id_guru' => 'sometimes|exists:gurus,id_guru',
        ]);

        $jenisEkskul->update($request->all());
        return response()->json($jenisEkskul);
    }

    public function delete($id)
    {
        $jenisEkskul = Jenis_Ekskul::findOrFail($id);
        $jenisEkskul->delete();

        return response()->json(['message' => 'Deleted successfully']);
    }

    public function search(Request $request)
    {
        $query = Jenis_Ekskul::where('nama', 'LIKE', "%{$request->keyword}%")->get();
        return response()->json($query);
    }
}
