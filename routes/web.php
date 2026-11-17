<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MataKuliahController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [AuthController::class, 'showLogin'])
    ->name('login');

Route::post('/login', [AuthController::class, 'login']);

Route::get('/register', [AuthController::class, 'showRegister'])
    ->name('register');

Route::post('/register', [AuthController::class, 'register']);

Route::post('/logout', [AuthController::class, 'logout'])
    ->name('logout');

Route::middleware('auth')->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/admin', function () {
        return view('admin.dashboard');
    })->middleware('role:admin');

    Route::get('/mahasiswa', function () {
        return view('mahasiswa.dashboard');
    })->middleware('role:mahasiswa');

    Route::get('/dosen', function () {
        return view('dosen.dashboard');
    })->middleware('role:dosen');

    // Manajemen Pengguna: Admin
    Route::get('/manajemen-pengguna', function () {
        return 'Halaman Manajemen Pengguna';
    })->middleware('role:admin');

    // Kelola Materi: Admin dan Dosen
    Route::get('/kelola-materi', function () {
        return 'Halaman Kelola Materi';
    })->middleware('role:admin,dosen');

    // Lihat Materi: Semua Role
    Route::get('/materi', function () {
        return 'Halaman Lihat Materi';
    })->middleware('role:admin,dosen,mahasiswa');

    // Kelola Nilai: Admin dan Dosen
    Route::get('/kelola-nilai', function () {
        return 'Halaman Kelola Nilai';
    })->middleware('role:admin,dosen');

    // Lihat Nilai Pribadi: Admin dan Mahasiswa
    Route::get('/nilai-pribadi', function () {
        return 'Halaman Nilai Pribadi';
    })->middleware('role:admin,mahasiswa');

    Route::middleware('role:admin')->group(function () {
        Route::resource('mata-kuliah', MataKuliahController::class);
    });

});

