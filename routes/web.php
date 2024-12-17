<?php

use App\Models\Siswa;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PendaftaranSiswaController;
use App\Http\Controllers\LoginController;
use App\Http\Middleware\AdminAuthenticated;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SiswaController;
use App\Http\Kernel;
use App\Http\Controllers\JenisEkskulController;
use App\Http\Controllers\PendaftaranEkskulController;

// Resources routes
Route::resource('jenis_ekskul', JenisEkskulController::class);
Route::resource('guru', GuruController::class);
Route::resource('kelas', KelasController::class);
Route::resource('siswa', SiswaController::class);
Route::resource('pendaftaranEkskul', PendaftaranEkskulController::class);


// Login routes
Route::get('/login', function () {
    return view('loginpage');  // Render the login page
})->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.submit');

// Non-admin routes for homepage, etc.
Route::get('/', function () {
    return view('homepage');
});

Route::get('/homepage', function () {
    return view('homepage');
})->name('homepage');

// User pages
Route::get('/User/home', function () {
    return view('/User/homeUser');
})->name('user.home');
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

Route::get('/pendaftaran-siswas', [PendaftaranSiswaController::class, 'index'])->name('pendaftaran-siswas.index');
Route::post('/pendaftaran-siswas/create', [PendaftaranSiswaController::class, 'create'])->name('pendaftaran-siswas.create');

// Admin dashboard with middleware
Route::middleware(['admin.auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/logout', [AdminController::class, 'logout'])->name('logout');


    Route::delete('/pendaftaran-ekskul/{id}', [PendaftaranEkskulController::class, 'destroy'])->name('pendaftaranEkskul.delete');


    Route::get('/admin/main', [AdminController::class, 'fetchPendingPendaftaranSiswa'])->name('admin.main');
    Route::patch('/admin/pendaftaran/accept/{id}', [AdminController::class, 'acceptPendaftaran'])->name('admin.acceptPendaftaran');
    Route::patch('/admin/pendaftaran/reject/{id}', [AdminController::class, 'rejectPendaftaran'])->name('admin.rejectPendaftaran');
    Route::get('/admin/kelas', [KelasController::class, 'index'])->name('admin.kelas');
    Route::get('/admin/guru', [GuruController::class, 'index'])->name('admin.guru');
    Route::get('/admin/jenisekskul', [JenisEkskulController::class, 'index'])->name('admin.jenisekskul');
    Route::get('/admin/siswa', [SiswaController::class, 'index'])->name('admin.siswa');
    Route::get('/admin/pendaftaranEkskul', [PendaftaranEkskulController::class, 'fetchAllDataPendaftaranEkskul'])->name('admin.pendaftaranEkskul');
    Route::get('/profileadmin', [AdminController::class, 'index'])->name('admin.profile');
    Route::put('/profileadmin/{id_admin}/update-picture', [AdminController::class, 'updateProfilePicture'])->name('admin.update.picture');

});

Route::middleware(['siswa.auth'])->group(function () {
    Route::get('/User/profilUser', [SiswaController::class, 'show'])->name('User.profilUser');
    Route::post('/profile/update', [SiswaController::class, 'updateProfile'])->name('siswa.update.profile');
    // User pages
    Route::get('/User/home', function () {
        return view('/User/homeUser');
    })->name('user.home');
    Route::get('/User/tentangKami', function () {
        return view('/User/tentangKamiUser');
    });
    Route::get('/User/kontak', function () {
        return view('/User/kontakUser');
    });
    Route::get('/User/Eksul', function () {
        return view('/User/EksulUser');
    });
    // Route::get('/User/profil', function () {
    //     return view('/User/profilUser');
    // });
    // Pendaftaran Ekstrakurikuler
    Route::get('/formekskul', [PendaftaranEkskulController::class, 'createForm'])->name('pendaftaran.formekskul');
    Route::post('/pendaftaranekskul', [PendaftaranEkskulController::class, 'store'])->name('pendaftaran.store');
});
