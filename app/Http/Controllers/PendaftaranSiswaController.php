<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran_Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PendaftaranSiswaController extends Controller
{
    public function index()
    {
        $pendaftaranSiswa = Pendaftaran_Siswa::all();
        return view('pendaftaran-siswas.index', compact('pendaftaranSiswa'));
    }

    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'nisn' => 'required|unique:pendaftaran_siswas,nisn',
            'nama' => 'required|string',
            'profilePic' => 'nullable|image|max:2048',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required|string',
            'agama' => 'required|string',
            'no_telp' => 'required|string',
            'asal_sekolah' => 'required|string',
            'email' => 'required|email|unique:pendaftaran_siswas,email',
            'password' => 'required|min:6',
        ]);

        // Handle profile picture upload
        if ($request->hasFile('profilePic')) {
            $profilePicPath = $request->file('profilePic')->store('profilePics/pendaftaran', 'public');
            $validatedData['profilePic'] = $profilePicPath;
        }

        $validatedData['status'] = 'pending';
        $validatedData['tanggal_pendaftaran'] = now();
        // $validatedData['password'] = bcrypt($validatedData['password']);

        $pendaftaranSiswa = Pendaftaran_Siswa::create($validatedData);
        // $pendaftaranSiswa->create($validatedData);

        // Cek redirect_to untuk menentukan arah
        if ($request->input('redirect_to') === 'login') {
            return redirect()->route('login')->with('success', 'Pendaftaran berhasil. Silakan login.');
        }

        return redirect()->route('login')->with('success', 'Pendaftaran berhasil.');
    }

    public function update(Request $request, $id)
    {
        $pendaftaranSiswa = Pendaftaran_Siswa::findOrFail($id);

        $validatedData = $request->validate([
            'nama' => 'sometimes|string',
            'profilePic' => 'nullable|image|max:2048',
            'jenis_kelamin' => 'sometimes|in:Laki-laki,Perempuan',
            'tanggal_lahir' => 'sometimes|date',
            'alamat' => 'sometimes|string',
            'agama' => 'sometimes|string',
            'no_telp' => 'sometimes|string',
            'asal_sekolah' => 'sometimes|string',
        ]);

        // Handle profile picture update
        if ($request->hasFile('profilePic')) {
            // Delete old profile pic if exists
            if ($pendaftaranSiswa->profilePic) {
                Storage::disk('public')->delete(paths: $pendaftaranSiswa->profilePic);
            }

            $profilePicPath = $request->file('profilePic')->store('profilePics/pendaftaran', 'public');
            $validatedData['profilePic'] = $profilePicPath;
        }

        $pendaftaranSiswa->update($validatedData);

        return redirect()->route('pendaftaran-siswas.index')->with('success', 'Pendaftaran Siswa updated successfully');
    }

    public function destroy($id)
    {
        $pendaftaranSiswa = Pendaftaran_Siswa::findOrFail($id);

        // Delete profile pic if exists
        if ($pendaftaranSiswa->profilePic) {
            Storage::disk('public')->delete($pendaftaranSiswa->profilePic);
        }

        $pendaftaranSiswa->delete();

        return redirect()->route('pendaftaran-siswas.index')->with('success', 'Pendaftaran Siswa deleted successfully');
    }
}