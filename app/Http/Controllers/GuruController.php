<?php

namespace App\Http\Controllers;

use App\Models\Guru; // Assuming you have a 'Guru' model
use Illuminate\Http\Request;

class GuruController extends Controller
{
    // Display a listing of the teachers
    public function index()
    {
        $guru = Guru::all(); // Retrieve all data from the 'Guru' model
        return view('admin.guru', compact('guru'));
    }

    // Store a newly created teacher in the database
    public function store(Request $request)
    {
        // Validate the incoming data
        $validated = $request->validate([
            'namaGuru' => 'required|string|max:255',
            'alamatGuru' => 'required|string|max:255',
            'jenisKelaminGuru' => 'required|string',
            'tanggalLahirGuru' => 'required|date',
            'noTeleponGuru' => 'required|string|max:15',
        ]);

        // Create a new teacher in the database
        Guru::create([
            'nama' => $validated['namaGuru'],
            'alamat' => $validated['alamatGuru'],
            'jenis_kelamin' => $validated['jenisKelaminGuru'],
            'tanggal_lahir' => $validated['tanggalLahirGuru'],
            'no_telp' => $validated['noTeleponGuru'],
        ]);

        return redirect()->route('guru.index')->with('success', 'Guru berhasil ditambahkan!');
    }

    // Update the specified teacher in the database
    public function update(Request $request, $id)
    {
        // Find the teacher by ID
        $guru = Guru::findOrFail($id);

        // Validate the incoming data
        $validated = $request->validate([
            'namaGuru' => 'required|string|max:255',
            'alamatGuru' => 'required|string|max:255',
            'jenisKelaminGuru' => 'required|string',
            'tanggalLahirGuru' => 'required|date',
            'noTeleponGuru' => 'required|string|max:15',
        ]);

        // Update the teacher's information
        $guru->update([
            'nama' => $validated['namaGuru'],
            'alamat' => $validated['alamatGuru'],
            'jenis_kelamin' => $validated['jenisKelaminGuru'],
            'tanggal_lahir' => $validated['tanggalLahirGuru'],
            'no_telp' => $validated['noTeleponGuru'],
        ]);

        return redirect()->route('guru.index')->with('success', 'Guru berhasil diperbarui!');
    }

    // Remove the specified teacher from the database
    public function destroy($id)
    {
        // Find the teacher by ID
        $guru = Guru::findOrFail($id);

        // Delete the teacher
        $guru->delete();

        return redirect()->route('guru.index')->with('success', 'Guru berhasil dihapus!');
    }
}
