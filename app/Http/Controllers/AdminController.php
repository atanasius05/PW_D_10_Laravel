<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Pendaftaran_Siswa;
use App\Models\Siswa;
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
        return view('admins.index', compact('admins'));
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
        $request->validate([
            'username' => 'required|string|email',
            'password' => 'required|string'
        ]);

        // Use SHA2 for password verification
        $admin = DB::table('admins')
            ->where('email', $request->username)
            ->where('password', hash('sha256', $request->password))
            ->first();

        if ($admin) {
            // Manually log in the admin
            session(['admin_id' => $admin->id_admin]);

            // Redirect to admin dashboard
            return redirect()->route('admin.main');
        }

        // If credentials are incorrect
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
        $pendingPendaftarans = Pendaftaran_Siswa::where('status', 'pending')->get();
        return view('admin.pending-pendaftaran', compact('pendingPendaftarans'));
    }

    public function acceptPendaftaran($id)
    {
        $pendaftaran = Pendaftaran_Siswa::findOrFail($id);
        
        // Change status to accepted
        $pendaftaran->status = 'accepted';
        $pendaftaran->save();

        // Create Siswa from the accepted PendaftaranSiswa
        $siswaData = $pendaftaran->toArray();
        $siswaData['id_pendaftaranSiswa'] = $pendaftaran->id_pendaftaranSiswa;
        $siswaData['id_admin'] = Auth::guard('admin')->user()->id_admin;
        
        // You might want to set a default kelas or have logic to assign a kelas
        // For now, we'll leave id_kelas null
        unset($siswaData['id_kelas']);

        Siswa::create($siswaData);

        return redirect()->route('admin.pending-pendaftaran')
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

        return redirect()->route('admin.pending-pendaftaran')
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
}