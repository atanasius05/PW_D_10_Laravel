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
        return view('admin.siswa', compact('siswas'));
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

        // Direct password comparison (no hashing)
        $siswa = DB::table('siswas')
            ->where('email', $request->username)
            ->where('password', $request->password) // Compare directly with the plain password
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
            return redirect()->route('user.home');
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

    public function show($id = null)
    {
        // If no ID is provided, use the currently logged-in student's ID
        if ($id === null) {
            $id = session('siswa_id');
        }

        // Fetch the student details
        $siswa = Siswa::findOrFail($id);

        return view('User.profilUser', compact('siswa'));
    }

    public function updateProfile(Request $request)
    {
        // Validate the incoming request
        $validatedData = $request->validate([
            'email' => 'sometimes|email|unique:siswas,email,' . session('siswa_id') . ',id_siswa',
            'current_password' => 'nullable|string',
            'new_password' => 'nullable|min:6|required_with:current_password',
            'confirm_password' => 'nullable|same:new_password',
            'profile_picture' => 'nullable|image|max:2048'
        ]);

        // Fetch the current logged-in student
        $siswa = Siswa::findOrFail(session('siswa_id'));

        // Handle email update
        if (isset($validatedData['email'])) {
            $siswa->email = $validatedData['email'];
        }

        // Handle password update
        if (isset($validatedData['current_password']) && isset($validatedData['new_password'])) {
            // Verify current password (assuming direct comparison for now)
            if ($siswa->password !== $validatedData['current_password']) {
                return back()->withErrors(['current_password' => 'Current password is incorrect']);
            }

            // Update password
            $siswa->password = $validatedData['new_password'];
        }

        // Handle profile picture update
        if ($request->hasFile('profile_picture')) {
            // Delete old profile pic if exists
            if ($siswa->profilePic) {
                Storage::disk('public')->delete($siswa->profilePic);
            }

            // Store new profile picture
            $profilePicPath = $request->file('profile_picture')->store('profilePics/siswa', 'public');
            $siswa->profilePic = $profilePicPath;
        }

        // Save the updated student information
        $siswa->save();

        // Redirect back with success message
        return back()->with('success', 'Profile updated successfully');
    }

    public function destroy($id)
{
    // Temukan siswa berdasarkan ID
    $siswa = Siswa::findOrFail($id);

    // Cek apakah siswa memiliki foto profil dan hapus jika ada
    if ($siswa->profilePic) {
        Storage::disk('public')->delete($siswa->profilePic);
    }

    // Hapus data siswa
    $siswa->delete();

    // Redirect kembali dengan pesan sukses
    return redirect()->route('admin.siswa')->with('success', 'Siswa berhasil dihapus');
}
}