<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Pendaftaran_Siswa;
use App\Models\Siswa;
use App\Models\Guru;
use App\Models\Kelas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        $admins = Admin::all();
        return view('profileadmin', compact('admins'));
    }

    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required|unique:admins,username',
            'nama' => 'required|string',
            'email' => 'required|email|unique:admins,email',
            'password' => 'required|min:6',
            'profilePic' => 'nullable|image|max:2048'
        ]);

        // Handle profile picture upload
        if ($request->hasFile('profilePic')) {
            $profilePicPath = $request->file('profilePic')->store('profilePics/admin', 'public');
            $validatedData['profilePic'] = $profilePicPath;
        }

        $validatedData['password'] = bcrypt($validatedData['password']);

        $admin = Admin::create($validatedData);

        return redirect()->route('admins.index')->with('success', 'Admin created successfully');
    }

    public function update(Request $request)
    {
        $admin = Auth::guard('admin')->user();

        $validatedData = $request->validate([
            'email' => 'sometimes|email|unique:admins,email,' . $admin->id_admin,
            'password' => 'sometimes|min:6',
            'profilePic' => 'nullable|image|max:2048'
        ]);

        // Handle profile picture update
        if ($request->hasFile('profilePic')) {
            // Delete old profile pic if exists
            if ($admin->profilePic) {
                Storage::disk('public')->delete($admin->profilePic);
            }

            $profilePicPath = $request->file('profilePic')->store('profilePics/admin', 'public');
            $validatedData['profilePic'] = $profilePicPath;
        }

        // Update password if provided
        if (isset($validatedData['password'])) {
            $validatedData['password'] = bcrypt($validatedData['password']);
        }

        $admin->update($validatedData);

        return redirect()->route('admin.profile')->with('success', 'Profile updated successfully');
    }

    public function delete($id)
    {
        $admin = Admin::findOrFail($id);

        // Delete profile pic if exists
        if ($admin->profilePic) {
            Storage::disk('public')->delete($admin->profilePic);
        }

        $admin->delete();

        return redirect()->route('admins.index')->with('success', 'Admin deleted successfully');
    }

    public function login(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'username' => 'required|string|email',
            'password' => 'required|string'
        ]);

        // Attempt to authenticate the admin using the 'admin' guard
        $admin = DB::table('admins')
            ->where('email', $request->username)
            ->first();

        // Check if admin exists and verify password
        if ($admin && hash('sha256', $request->password) === $admin->password) {
            // Log in the admin by setting the session manually
            session(['admin_id' => $admin->id_admin]);

            // Redirect to the admin dashboard
            return redirect()->route('admin.main');
        }

        // If authentication fails, redirect back with error message
        return back()->withErrors([
            'username' => 'The provided credentials are incorrect.'
        ])->withInput();
    }



    public function logout()
    {
        // Clear admin session
        session()->forget('admin_id');
        return redirect()->route('login');
    }

    public function fetchPendingPendaftaranSiswa()
    {
        $totalKelas = Kelas::count(); // Jumlah Kelas
        $totalGuru = Guru::count();   // Jumlah Guru
        $totalSiswa = Siswa::count(); // Jumlah Siswa
        $pendingPendaftarans = Pendaftaran_Siswa::where('status', 'pending')->get();
        // Retrieve all pending student registrations
        $pendingPendaftarans = Pendaftaran_Siswa::where('status', 'pending')->get();

        // Return the view with the pending registrations
        return view('admin.main', compact('totalKelas', 'totalGuru', 'totalSiswa', 'pendingPendaftarans'));
    }
    public function acceptPendaftaran($id)
    {
        // Check if the admin session exists
        $adminId = session('admin_id');

        if (!$adminId) {
            return redirect()->route('login')->withErrors(['message' => 'Please log in to continue.']);
        }

        // Find the Pendaftaran_Siswa by ID
        $pendaftaran = Pendaftaran_Siswa::findOrFail($id);

        // Change the status to accepted
        $pendaftaran->status = 'accepted';
        $pendaftaran->save();

        // Prepare data for the new Siswa record
        $siswaData = $pendaftaran->toArray();
        $siswaData['id_pendaftaranSiswa'] = $pendaftaran->id_pendaftaranSiswa;
        $siswaData['id_admin'] = $adminId; // Use the admin ID from the session

        // Randomly assign id_kelas between 1 and 10
        $randomIdKelas = null;
        do {
            $randomIdKelas = rand(1, 10); // Randomly generate a number between 1 and 10
            // Check if the generated id_kelas already exists in the Siswa table
            $exists = Siswa::where('id_kelas', $randomIdKelas)->exists();
        } while ($exists); // Repeat if the generated id_kelas already exists

        // Set the valid random id_kelas to the siswaData
        $siswaData['id_kelas'] = $randomIdKelas;

        // Create a new Siswa record from the Pendaftaran_Siswa data
        Siswa::create($siswaData);

        // Redirect to the pending registrations page with a success message
        return redirect()->route('admin.main')
            ->with('success', 'Pendaftaran Siswa accepted and Siswa created');
    }




    public function rejectPendaftaran($id)
    {
        $pendaftaran = Pendaftaran_Siswa::findOrFail($id);

        // Change status to rejected
        $pendaftaran->status = 'rejected';
        $pendaftaran->save();

        // Delete the profile picture if it exists
        if ($pendaftaran->profilePic) {
            Storage::disk('public')->delete($pendaftaran->profilePic);
        }

        // Delete the PendaftaranSiswa record
        $pendaftaran->delete();

        return redirect()->route('admin.main')
            ->with('success', 'Pendaftaran Siswa rejected and deleted');
    }

    public function deleteSiswa($id)
    {
        $siswa = Siswa::findOrFail($id);

        // Delete profile pic if exists
        if ($siswa->profilePic) {
            Storage::disk('public')->delete($siswa->profilePic);
        }

        $siswa->delete();

        return redirect()->route('admin.siswa-list')
            ->with('success', 'Siswa deleted successfully');
    }

    public function updateProfilePicture(Request $request, $id_admin)
    {
        $admin = Admin::findOrFail($id_admin);
        // Validasi file gambar
        $request->validate([
            'profilePic' => 'nullable|image|max:2048'
        ]);

        try {
            // Temukan admin berdasarkan ID

            // Cek jika ada file gambar yang diupload
            if ($request->hasFile('profilePic')) {
                // Upload gambar ke folder 'profilePics' dalam storage 'public'
                $profilePicPath = $request->file('profilePic')->store('profilePics', 'public');

                // Update path gambar di database untuk admin tertentu
                $admin->profilePic = $profilePicPath;
                $admin->save();
            }

            return redirect()->route('admin.profile')->with('success', 'Foto profil berhasil diperbarui!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat mengupload foto profil.');
        }
    }


}