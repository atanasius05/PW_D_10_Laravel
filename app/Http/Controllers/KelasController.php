<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index()
    {
        $kelas = Kelas::all(); // Retrieve all classes
        return view('admin.kelas', compact('kelas')); // Pass data to view
    }

    public function store(Request $request)
    {
        // Validate the incoming data
        $validatedData = $request->validate([
            'tingkat_kelas' => 'required|string',
            'jurusan' => 'required|string',
            'jumlah_siswa' => 'required|integer',
            'nama_kelas' => 'required|string'
        ]);

        // Create a new Kelas record
        $kelas = Kelas::create($validatedData);

        // Redirect back with success message
        return redirect()->route('admin.kelas')->with('success', 'Kelas created successfully');
    }

    public function edit($id)
    {
        $kelas = Kelas::findOrFail($id);
        return view('admin.kelas', compact('kelas')); // Return edit form with class data
    }

    public function update(Request $request, $id)
    {
        $kelas = Kelas::findOrFail($id);

        // Validate data
        $validatedData = $request->validate([
            'tingkat_kelas' => 'required|string',
            'nama_kelas' => 'required|string',
            'jurusan' => 'required|string',
            'jumlah_siswa' => 'required|integer'
        ]);

        // Update class
        $kelas->update($validatedData);

        return redirect()->route('admin.kelas')->with('success', 'Kelas updated successfully');
    }

    public function destroy($id)
    {
        $kelas = Kelas::findOrFail($id);
        $kelas->delete();

        return redirect()->route('admin.kelas')->with('success', 'Kelas deleted successfully');
    }
}