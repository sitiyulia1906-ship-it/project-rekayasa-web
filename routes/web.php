<?php

use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

// Halaman Utama ('/') sekarang memanggil view halaman home yang benar
Route::get('/', function () {
    return view('page.home');
});

// Halaman Profile Mahasiswa
Route::get('/profile', [MahasiswaController::class, 'index'])->name('profile');

// Halaman Project & Detail Project
Route::get('/project', [ProjectController::class, 'index'])->name('project.index');
Route::get('/project/{id}', [ProjectController::class, 'show'])->name('project.show');

// Halaman About / Tentang Aplikasi
Route::get('/about', function () {
    return view('page.about');
});