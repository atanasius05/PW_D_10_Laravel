<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\Pendaftaran_Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class SiswaController extends Controller
{
    public function index()
    {
        $siswas = Siswa::all();
        return view('siswas.index', compact('siswas'));
    }

    public function create($pendaftaranSiswaId)
    {
        $pendaftaranSiswa = Pendaftaran_Siswa::findOrFail($pendaftaranSiswaId);

        // Only create Siswa if the PendaftaranSiswa status is 'accepted'
        if ($pendaftaranSiswa->status !== 'accepted') {
            return redirect()->back()->with('error', 'Pendaftaran Siswa must be accepted first');
        }

        $siswaData = $pendaftaranSiswa->toArray();
        $siswaData['id_pendaftaranSiswa'] = $pendaftaranSiswa->id_pendaftaranSiswa;

        $siswa = Siswa::create($siswaData);

        return redirect()->route('siswas.index')->with('success', 'Siswa created successfully');
    }

    public function update(Request $request)
    {
        $siswa = Auth::guard('siswa')->user();

        $validatedData = $request->validate([
            'email' => 'sometimes|email|unique:siswas,email,' . $siswa->id_siswa,
            'password' => 'sometimes|min:6',
            'profilePic' => 'nullable|image|max:2048'
        ]);

        // Handle profile picture update
        if ($request->hasFile('profilePic')) {
            // Delete old profile pic if exists
            if ($siswa->profilePic) {
                Storage::disk('public')->delete($siswa->profilePic);
            }

            $profilePicPath = $request->file('profilePic')->store('profilePics/siswa', 'public');
            $validatedData['profilePic'] = $profilePicPath;
        }

        // Update password if provided
        if (isset($validatedData['password'])) {
            $validatedData['password'] = bcrypt($validatedData['password']);
        }

        $siswa->update($validatedData);

        return redirect()->route('siswa.profile')->with('success', 'Profile updated successfully');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required|string|email',
            'password' => 'required|string'
        ]);

        // Use SHA2 for password verification
        $siswa = DB::table('siswas')
            ->where('email', $request->username)
            ->where('password', hash('sha256', $request->password))
            ->first();

        if ($siswa) {
            // Check student status
            if ($siswa->status !== 'accepted') {
                return back()->withErrors([
                    'username' => 'Your account is not active. Please contact administration.'
                ])->withInput();
            }

            // Manually log in the student
            session(['siswa_id' => $siswa->id_siswa]);

            // Redirect to student dashboard
            return redirect()->route('siswa.dashboard');
        }

        // If credentials are incorrect
        return back()->withErrors([
            'username' => 'The provided credentials are incorrect.'
        ])->withInput();
    }

    public function logout()
    {
        // Clear student session
        session()->forget('siswa_id');
        return redirect()->route('login');
    }
}