<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PendaftaranSiswaController;
use App\Http\Controllers\LoginController;
use App\Http\Middleware\AdminAuthenticated;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\GuruController;

Route::resource('guru', GuruController::class);

Route::resource('kelas', KelasController::class);

Route::post('/login', [LoginController::class, 'authenticate'])->name('login');

Route::get('/pendaftaran-siswas', [PendaftaranSiswaController::class, 'index'])->name('pendaftaran-siswas.index');
Route::post('/pendaftaran-siswas/create', [PendaftaranSiswaController::class, 'create'])->name('pendaftaran-siswas.create');

Route::get('/', function () {
    return view('homepage');
});

Route::get('/loginpage', function () {
    return view('loginpage');
})->name('loginpage');

// Route untuk admin dashboard with middleware
Route::middleware([AdminAuthenticated::class])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/admin/main', function () {
        return view('/admin/main', [
            'dataKelas' => [KelasController::class, 'index'],
            'dataGuru' => [GuruController::class, 'index'],
            'dataMurid' => [
               
            ],
            'infoCard' => [
               
            ]
        ]);
    })->name('admin.main');

    Route::get('/admin/kelas', function () {
        return view('admin.kelas');
    })->name('admin.kelas');
    
    Route::get('/admin/kelas', [KelasController::class, 'index'])->name('admin.kelas');
    Route::get('/kelas/edit/{id}', [KelasController::class, 'edit']);

    

    Route::get('/admin/guru', function () {
        return view('admin.guru');
    })->name('admin.guru');

    Route::get('/admin/guru', [GuruController::class, 'index'])->name('admin.guru');

    Route::get('/admin/murid', function () {
        return view('admin.murid', [
            'dataMurid' => [
                ['NISN' => '0056148231', 'nama' => "Andi Pratama", 'jenisKelamin' => 'Laki-laki', 'alamat' => 'Jl. Merdeka No.5, Jakarta', 'notelp' => '081234567890', 'tingkatKelas' => 12],
                ['NISN' => '0056148232', 'nama' => "Budi Santoso", 'jenisKelamin' => 'Laki-laki', 'alamat' => 'Jl. Sudirman No.7, Jakarta', 'notelp' => '081234567891', 'tingkatKelas' => 11],
                ['NISN' => '0056148233', 'nama' => "Citra Dewi", 'jenisKelamin' => 'Perempuan', 'alamat' => 'Jl. Gatot Subroto No.3, Jakarta', 'notelp' => '081234567892', 'tingkatKelas' => 12],
                ['NISN' => '0056148234', 'nama' => "Dian Nugraha", 'jenisKelamin' => 'Laki-laki', 'alamat' => 'Jl. Thamrin No.10, Jakarta', 'notelp' => '081234567893', 'tingkatKelas' => 10],
                ['NISN' => '0056148235', 'nama' => "Eka Sari", 'jenisKelamin' => 'Perempuan', 'alamat' => 'Jl. Kebon Jeruk No.8, Jakarta', 'notelp' => '081234567894', 'tingkatKelas' => 11],
                ['NISN' => '0056148236', 'nama' => "Fajar Maulana", 'jenisKelamin' => 'Laki-laki', 'alamat' => 'Jl. Mangga Dua No.9, Jakarta', 'notelp' => '081234567895', 'tingkatKelas' => 12],
                ['NISN' => '0056148237', 'nama' => "Gita Permata", 'jenisKelamin' => 'Perempuan', 'alamat' => 'Jl. Senayan No.6, Jakarta', 'notelp' => '081234567896', 'tingkatKelas' => 10],
                ['NISN' => '0056148238', 'nama' => "Hendra Setiawan", 'jenisKelamin' => 'Laki-laki', 'alamat' => 'Jl. Kuningan No.2, Jakarta', 'notelp' => '081234567897', 'tingkatKelas' => 11],
                ['NISN' => '0056148239', 'nama' => "Indah Lestari", 'jenisKelamin' => 'Perempuan', 'alamat' => 'Jl. Fatmawati No.4, Jakarta', 'notelp' => '081234567898', 'tingkatKelas' => 12],
                ['NISN' => '0056148240', 'nama' => "Joko Nugraha", 'jenisKelamin' => 'Laki-laki', 'alamat' => 'Jl. Pahlawan No.1, Jakarta', 'notelp' => '081234567899', 'tingkatKelas' => 10]
            ]
        ]);
    })->name('admin.murid');

    Route::get('/profileadmin', function () {
        return view('profileadmin');
    })->name('admin.profile');
});

// Route untuk homepage siswa
Route::get('/homepage', function () {
    return view('homepage');
})->name('homepage');

// Route untuk User pages
Route::get('/User/home', function () {
    return view('/User/homeUser');
});
Route::get('/User/tentangKami', function () {
    return view('/User/tentangKamiUser');
});
Route::get('/User/kontak', function () {
    return view('/User/kontakUser');
});
Route::get('/User/Eksul', function () {
    return view('/User/EksulUser');
});
Route::get('/User/profil', function () {
    return view('/User/profilUser');
});

// Other non-admin routes
Route::get('/pendaftaran', function () {
    return view('pendaftaran');
});
Route::get('/tentangkami', function () {
    return view('tentangkami');
});
Route::get('/ppdbFormulir', function () {
    return view('ppdbFormulir');
});
Route::post('/ppdbFormulirDone', function () {
    return view('ppdbFormulirDone');
});
Route::get('/kontak', function () {
    return view('kontak');
});
Route::get('/formekskul', function () {
    return view('formekskul');
});
Route::get('/pendaftaranekskul', function () {
    return view('pendaftaranekskul');
});
